public function actionView($id)
{
    $model = $this->findModel($id);
    $modelsTools = $model->eventTools;

    return $this->render('view', [
        'model' => $model,
        'modelsTools' => (empty($modelsTools)) ? [new EventTools] : $modelsTools,
    ]);
}
