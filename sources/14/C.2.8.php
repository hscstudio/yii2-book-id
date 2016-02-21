public function behaviors(){
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => \yii\filters\auth\QueryParamAuth::className(),
        'tokenParam'=>'key',
    ];
    return $behaviors;
}
