$this->registerCssFile("@web/css/print.css", [
  'depends' => [
    yii\bootstrap\BootstrapAsset::className()
  ],
  'media' => 'print',
], 'css-print-theme');
