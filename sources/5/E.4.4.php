public function actionDelete($id)
{
    $model = Employee::findOne($id);    
    $model->delete();
    return $this->redirect(['index']);
}
