<?php

namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\SubCategory;
use frontend\models\Tenses;
use Yii;
use frontend\models\Challenge;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * ChallengeController implements the CRUD actions for Challenge model.
 */
class TensesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Challenge models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Tenses::find(),
        ]);

        $this->translate();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    private function translate()
    {
        $url = "https://en.bab.la/dictionary/swedish-english/%s";

        $models = Tenses::find()->all();
        foreach ($models as $model) {
            print_r($model->getAttributes());
        }

        exit;
    }

    private function importData() : bool
    {
        $appPath = Yii::getAlias('@app');
        $csvFile = sprintf("%s/../%s/%s", $appPath, 'data', 'sheet.csv');

        $content = file_get_contents($csvFile);
        $linesArray = explode("\n", $content);

        $header = ['english', 'infinitiv', 'presens', 'preteritum', 'supinum','imperativ'];

        foreach ($linesArray as $line) {
            $lineArray = str_getcsv($line);
            if( strpos($lineArray[1], '[edit]') !== false ) { continue; }
            if( strpos($lineArray[0], 'English') !== false ) { continue; }

            if (count($lineArray) == 6) {
                $dataArray[] = array_combine( $header, $lineArray);
            } else {
                $dataArray[] = $lineArray;
            }
        }

        print_r(($dataArray));

        foreach ($dataArray as $data) {
            $model = new Tenses;
            $model->setAttributes($data, false);
            $model->save(false);

            unset($model);
        }

        return true;
    }

    public function actionPlaynow()
    {
        $categories = Category::find()->all();

        foreach ($categories as $category) {
            $query = (new Query())
                ->select(['challenge.id AS id', 'sub_category.id AS sub_category_id', 'sub_category.name AS sub_category_name', 'challenge.title AS challenge_title', 'date_stop'])
                ->from('challenge')
                ->innerJoin('sub_category', 'sub_category_id = `sub_category`.id')
                ->innerJoin('category', 'category_id = category.id')
                ->where(['category.id'=>$category->id])
                ->limit(25);

            $dataProviders[$category->name] = new ActiveDataProvider([
                'query' => $query
            ]);
        }

        return $this->render('playnow', [
            'dataProviders' => $dataProviders,
        ]);
    }

    /**
     * Displays a single Challenge model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Challenge model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Challenge();
        $categories = Category::find()->select(['id', 'name'])->all();

        foreach($categories as $category) {
            $subcategory = SubCategory::find()->where(['category_id' => $category->id])->all();

            if(! empty($subcategory)) {
                $list[$category->name] = ArrayHelper::map($subcategory, 'id', 'name');
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'subcategories' => $list
        ]);
    }

    /**
     * Updates an existing Challenge model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $subcategories = ArrayHelper::map(SubCategory::find()->select(['id', 'name'])->all(), 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'subcategories' => $subcategories
        ]);

    }

    /**
     * Deletes an existing Challenge model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Challenge model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Challenge the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Challenge::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
