<?php

namespace app\modules\main\controllers;
use frontend\models\image;


class MainController extends \yii\web\Controller
{
    public $layout = "bootstrap";
    public function actionIndex()
    {
        $this->layout = "bootstrap";
        return $this->render('index');
    }

}
