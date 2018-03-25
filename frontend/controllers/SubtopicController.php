<?php

namespace frontend\controllers;

use Yii;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use frontend\models\Vocabulary;
use frontend\models\Subtopic;
use frontend\models\Topic;

/**
 * SubtopicController implements the CRUD actions for Subtopic model.
 */
class SubtopicController extends Controller
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
     * Lists all Subtopic models.
     * @return mixed
     */
    public function actionNewspaper()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Subtopic::find()->where(['topic_id'=>2]),
        ]);

        $dpVocabulary = new ActiveDataProvider([
            'query' => Vocabulary::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dpVocabulary' => $dpVocabulary
        ]);
    }

    public function actionArticles()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Subtopic::find()->where(['topic_id'=>5]),
        ]);

        $dpVocabulary = new ActiveDataProvider([
            'query' => Vocabulary::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dpVocabulary' => $dpVocabulary
        ]);
    }

    /**
     * Displays a single Subtopic model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $dpVocabulary = new ActiveDataProvider([
            'query' => Vocabulary::find()->where(['subtopic_id'=>$id]),
        ]);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dpVocabulary' => $dpVocabulary
        ]);
    }

    /**
     * Creates a new Subtopic model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Subtopic();
        $vocabulary = new Vocabulary();

        $dpVocabulary = new ActiveDataProvider([
            'query' => Vocabulary::find()->where(['subtopic_id'=>$model->id]),
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save(false);
            return $this->redirect(['update', 'id' => $model->id]);
        }

        if($vocabulary->load(Yii::$app->request->post()) && $vocabulary->validate()) {
            $vocabulary->subtopic_id = $model->id;
            $vocabulary->save(false);
            return $this->redirect(['update', 'id' => $model->id]);
        }


        return $this->render('create', [
            'model' => $model,
            'vocabulary' => $vocabulary,
            'listTopic' => Topic::list(),
            'dpVocabulary' => $dpVocabulary
        ]);

    }

    /**
     * Updates an existing Subtopic model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $vocabulary = new Vocabulary();

        $dpVocabulary = new ActiveDataProvider([
            'query' => Vocabulary::find()->where(['subtopic_id'=>$model->id]),
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save(false);
        }

        if($vocabulary->load(Yii::$app->request->post()) && $vocabulary->validate()) {
            // return $this->redirect(['view', 'id' => $model->id]);
            $vocabulary->subtopic_id = $model->id;
            $vocabulary->save(false);
        }

        return $this->render('update', [
            'model' => $model,
            'vocabulary' => $vocabulary,
            'listTopic' => Topic::list(),
            'dpVocabulary' => $dpVocabulary
        ]);

    }

    /**
     * Deletes an existing Subtopic model.
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
     * Finds the Subtopic model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Subtopic the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subtopic::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
