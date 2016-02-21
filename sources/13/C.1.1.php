public function actionExportExcel()
{
    $searchModel = new CategorySearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $objReader = \PHPExcel_IOFactory::createReader('Excel2007');
    // set template
    $template = Yii::getAlias('@app/views/category').'/_export.xlsx';
    $objPHPExcel = $objReader->load($template);
    $activeSheet = $objPHPExcel->getActiveSheet();
    // set orientasi & ukuran kertas
    $activeSheet->getPageSetup()->setOrientation(\PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
                                ->setPaperSize(\PHPExcel_Worksheet_PageSetup::PAPERSIZE_FOLIO);
    $baseRow=3;
    foreach($dataProvider->getModels() as $category){
        $activeSheet->setCellValue('A'.$baseRow, $baseRow-2)
                    ->setCellValue('B'.$baseRow, $category->title)
                    ->setCellValue('C'.$baseRow, $category->description);
        $baseRow++;
    }
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="_export.xlsx"');
    header('Cache-Control: max-age=0');
    $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");
    $objWriter->save('php://output');
    exit;
}
