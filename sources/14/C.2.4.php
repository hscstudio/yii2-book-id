public function behaviors(){
	 $behaviors = parent::behaviors();
	 $behaviors['authenticator'] = [
	   'class' => yii\filters\auth\QueryParamAuth::className(),
	 ];
	 return $behaviors;
}
