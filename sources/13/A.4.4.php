$model3 = \app\models\Gallery::find()->all();

return $this->render('gallery', [
    'model' => $model,
    'model3' => $model3,
]);
