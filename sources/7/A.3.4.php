$this->registerJsFile('@web/js/main.js', [
    'depends' => [
        \yii\web\JqueryAsset::className()
    ]
]);
