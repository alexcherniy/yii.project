<?php

namespace app\modules\main\controllers;

use yii\web\Controller;
use frontend\component\Common;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "inner";
        return $this->render('index');
    }

    public function actionEvent(){

        $component = new Common();
        $component->on(Common::EVENT_NOTIFY, [$component, 'notifyAdmin']);
        $component->sendMail("test@test.com", "Test", "text text");
    }
}
