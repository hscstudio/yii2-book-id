public function actionView($id)
{
    if(Yii::$app->request->isAjax){
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }
    else{
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}
