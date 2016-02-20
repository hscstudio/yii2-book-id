public function actions()
{
    return [
        'error' => [
            'class' => 'yii\web\ErrorAction',
        ],
        'captcha' => [
            'class' => 'yii\captcha\CaptchaAction',
            'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
        ],
        'auth' => [
            'class' => 'yii\authclient\AuthAction',
            'successCallback' => [$this, 'successCallback'],
        ],

    ];
}
