

<div class="spacer">
<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">


       <?
                $form= \yii\bootstrap\ActiveForm::begin(
                    [
                    'enableClientValidation' => false,
                        'enableAjaxValidation' => true
                ] );
        ?>


        <?
           echo $form->field($model, 'username');
        ?>

        <?
        echo $form->field($model, 'email');
        ?>

        <?
        echo $form->field($model, 'password')->passwordInput();
        ?>

        <?
       echo $form->field($model, 'repassword')->passwordInput();
        ?>


        <?
       echo \yii\helpers\Html::submitButton('Register', ['class'=>'btn btn-success']);
        ?>

        <?
      \yii\bootstrap\ActiveForm::end();
        ?>

    </div>

</div>
</div>