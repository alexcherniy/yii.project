<?
namespace frontend\component;

use yii\base\component;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subject,$text,$emailFrom='sgsani@ukr.net',$nameFrom='Sani'){
        if(\Yii::$app->mail->compose()
            ->setFrom(['sgsani@mail.ru' => 'sanimail'])
            ->setTo([$emailFrom => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()){
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function notifyAdmin($event){
        print "Notify Admin";
    }
}