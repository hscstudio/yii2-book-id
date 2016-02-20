public function actionCreate()
{
    $model = new Category();
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        rYii::$app->session->setFlash('success','Data berhasil disimpan');
        if(Yii::$app->request->isAjax) {
     $model = new Category();
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
        else{
            return $this->redirect(['view', 'id' => $model->id]);
        }
    } else {
        ...
    }
}

public function actionUpdate($id)
{
    $model = $this->findModel($id);
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        Yii::$app->session->setFlash('success','Data berhasil disimpan');
        if(Yii::$app->request->isAjax) {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
        else{
            return $this->redirect(['view', 'id' => $model->id]);
        }
    } else {
        ...
    }
}
