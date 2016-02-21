public function actionImport()
{
    $modelImport = new \yii\base\DynamicModel([
        'fileImport' => 'File Import',
    ]);
    $modelImport->addRule(['fileImport'], 'required');
    $modelImport->addRule(['fileImport'], 'file', ['extensions'=>'xls,xlsx'],['maxSize'=>1024*1024]);

    if (Yii::$app->request->post()) {
        $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
        if ($modelImport->fileImport && $modelImport->validate()) {
            $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
            $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
            $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
            $baseRow = 3;
            while(!empty($sheetData[$baseRow]['A'])){
                $model = new Category();
                $model->title = (string)$sheetData[$baseRow]['A'];
                $model->description = (string)$sheetData[$baseRow]['B'];
                $model->save();
                $baseRow++;
            }
            Yii::$app->getSession()->setFlash('success', 'Success');
        }
        else{
            Yii::$app->getSession()->setFlash('error', 'Error');
        }
    }

    return $this->render('import',[
        'modelImport' => $modelImport,
    ]);
}

