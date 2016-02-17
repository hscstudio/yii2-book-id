public function actionKomentar()
{
    $model = new \app\models\Komentar();
    
    return $this->render('komentar', [
        'model' => $model,
    ]);
}
