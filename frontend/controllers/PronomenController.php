<?php

namespace frontend\controllers;

class PronomenController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPersonliga()
    {
        return $this->render('personliga');
    }

    public function actionReflexiva()
    {
        return $this->render('index');
    }

    public function actionPossessiva()
    {
        return $this->render('index');
    }

    public function actionReflexivapossessiva()
    {
        return $this->render('index');
    }

}
