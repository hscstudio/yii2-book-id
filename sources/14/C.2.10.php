public function behaviors(){
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => \app\components\CustomAuth::className(),
        'tokenParam'=>'key',
    ];
    return $behaviors;
}
