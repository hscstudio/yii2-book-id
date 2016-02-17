public function actionCreate()
{
    $model = new Employee();
    if(Yii::$app->request->post()){
        $model->load(Yii::$app->request->post());
        if($model->save()){
            Yii::$app->session->setFlash('success','Data berhasil disimpan');    
        }
        else{
            Yii::$app->session->setFlash('error','Data gagal disimpan');    
        }
        return $this->refresh();
    }
    else{
        return $this->render('create', [
            'model' => $model,
        ]);
    }
}
