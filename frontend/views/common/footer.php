<div class="footer">

    <div class="container">



        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Информация</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html" >About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.html" >Agents</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.html" >Blog</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html" >Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Новости</h4>
                <p>Get notified about the latest properties in our marketplace.</p>

                <? echo \yii\helpers\Html::beginForm('','post',['class'=>'form-inline'])?>

                <? echo \yii\helpers\Html::textInput('','',['class'=>'form-control', 'placeholder'=>'Введите свой email'])?>


                        <?=\yii\helpers\Html::submitButton('Оповестить меня!',['class' => 'btn btn-success']) ?>

                <? echo \yii\helpers\Html::endForm()?>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>
                <a href="#"><img src="images/facebook.png"  alt="facebook"></a>
                <a href="#"><img src="images/twitter.png"  alt="twitter"></a>
                <a href="#"><img src="images/linkedin.png"  alt="linkedin"></a>
                <a href="#"><img src="images/instagram.png"  alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>
                <p><b>Bootstrap Realestate Inc.</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> Kiev, Ukraine <br>
                    <span class="glyphicon glyphicon-envelope"></span> sgsani@mail.ru<br>
                    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
        <p class="copyright">Copyright 2013. All rights reserved.	</p>


    </div></div>