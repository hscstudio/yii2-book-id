public function actionExportWord()
{
    $searchModel = new CategorySearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    // Initalize the TBS instance
    $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
    // set template
    $template = Yii::getAlias('@app/views/category').'/_export.docx';
    // Also merge some [onload] automatic fields (depends of the type of document).
    $OpenTBS->LoadTemplate($template);
    //$OpenTBS->VarRef['modelName']= "Category";
    $data = [];
    $no=1;
    foreach($dataProvider->getModels() as $category){
        $data[] = [
            'no'=>$no++,
            'title'=>$category->title,
            'description'=>$category->description,
        ];
    }

    $OpenTBS->MergeBlock('data', $data);
    // Output the result as a file on the server. You can change output file
    $OpenTBS->Show(OPENTBS_DOWNLOAD, '_export.docx'); // Also merges all [onshow] automatic fields.
    exit;
}
