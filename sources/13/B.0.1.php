public function actionImport()
{
    $modelImport = new \yii\base\DynamicModel([
        'fileImport' => 'File Import',
    ]);
    $modelImport->addRule(['fileImport'], 'required');
    $modelImport->addRule(['fileImport'], 'file', ['extensions'=>'ods,xls,xlsx'],['maxSize'=>1024*1024]);

    return $this->render('import',[
        'modelImport' => $modelImport,
    ]);
}
