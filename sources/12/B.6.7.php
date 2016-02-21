public function actionProcessAuth($module,$controller,$action,$user_id,$checked)
{
    $params = [
        'module'=>$module,
        'controller'=>$controller,
        'action'=>$action,
        'user_id'=>$user_id,
    ];
    $auth = Auth::find()->where($params)->count();
    if($checked){
        if($auth==0){
            $model = new Auth($params);
            $model->save();
        }
        return "success inserted";
    }
    else{
        if($auth>0) {
            Auth::find()->where($params)->delete();
        }
        return "success deleted";
    }
}
