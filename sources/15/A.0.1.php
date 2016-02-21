public function actionEmail()
{
    Yii::$app->mailer->compose()
        ->setFrom('milisstudio@gmail.com')
        ->setTo('hafidmukhlasin@gmail.com')
        ->setSubject('Testing aja')
        ->setTextBody('Teks yang tampil di body')
        ->setHtmlBody('<b>Contoh text HTML</b>')
        ->send();
}
