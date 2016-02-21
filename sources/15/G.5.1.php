public function behaviors()
{
    return [
      [
         'class' => 'yii\filters\HttpCache',
         'only' => ['view'],
         'etagSeed' => function ($action, $params) {
             $category = $this->findModel(\Yii::$app->request->get('id'));
             return serialize([$category->title, $category->description]);
          },
      ],
    ];
}
