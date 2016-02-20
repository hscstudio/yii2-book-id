public function actionCheck()
{
    $category = Category::find()->select('id')->orderBy('id DESC')->one();
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    return ['lastId'=>$category->id];
}
