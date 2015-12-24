<?php

namespace app\modules\main\controllers;
use frontend\models\ContactForm;
use frontend\models\image;
use frontend\models\SignupForm;
use yii\bootstrap\ActiveForm;
use yii\web\Response;




class MainController extends \yii\web\Controller
{
    public $layout = "inner";


    public function actions(){

        return[
            'captcha'=>[
              'class'=>'yii\captcha\CaptchaAction',
                'fixedVerifyCode'=>YII_ENV_TEST ? 'testme':null,
            ],
        ];
    }

    public function actionIndex()
    {

        return $this->render('index');
    }
    public function actionRegister(){

        $model = new SignupForm;
        $model->scenario = 'short_register';
        if(\Yii::$app->request->isAjax && \Yii::$app->request->isPost){
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }


        if($model->load(\Yii::$app->request->post()) && $model->signup()){

            print_r($model->getAttributes());
            die;
        }
        return $this->render("register",['model' => $model]);
    }


    public function actionContact(){

        $model = new ContactForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $body = " <div>Body: <b> ".$model->body." </b></div>";
            $body .= " <div>Email: <b> ".$model->email." </b></div>";

           \Yii::$app->common->sendMail($model->subject,$body);
        print "Send success";
            die;
        }
        return $this->render("contact", ['model'=>$model]);

    }

}
