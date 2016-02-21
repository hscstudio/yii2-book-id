public function actionExportPdf()
{
    $searchModel = new CategorySearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $html = $this->renderPartial('_export',['dataProvider'=>$dataProvider]);
    $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    exit;
}
