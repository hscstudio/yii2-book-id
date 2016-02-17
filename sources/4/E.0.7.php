public function actionKomentar()
{
    $model = new \app\models\Komentar();
    
    // Jika form di submit dengan method POST
    if(Yii::$app->request->post()){
        $model->load(Yii::$app->request->post());
        if($model->validate()){
            Yii::$app->session->setFlash('success','Terima kasih ');       
        }
        else{
            Yii::$app->session->setFlash('error','Maaf, salah!');   
        }
        return $this->render('hasil_komentar', [
            'model' => $model,
        ]); 
    }
    else{
        return $this->render('komentar', [
            'model' => $model,
        ]); 
    }       
}
