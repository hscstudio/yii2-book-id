'mailer' => [
    'class' => 'yii\swiftmailer\Mailer',
    'useFileTransport' => false,
    'transport'=>[
        'class'=>'Swift_SmtpTransport',
        'host'=>'smtp.gmail.com',
        'username'=>'yourgmail@gmail.com',
        'password'=>'yourpassword',
        'port'=>'587',
        'encryption'=>'tls',
    ],
],
