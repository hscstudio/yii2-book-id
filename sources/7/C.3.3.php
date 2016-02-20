public function actionView($id)
{
    return $this->renderAjax('view', [
        'model' => $this->findModel($id),
    ]);
}
