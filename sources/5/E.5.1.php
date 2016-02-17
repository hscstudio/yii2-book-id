function actionPaging()
{
    $query = Employee::find();
    $countQuery = clone $query;
    $pages = new \yii\data\Pagination([
        'totalCount' => $countQuery->count(),
        'defaultPageSize' => 5,
    ]);
    $employees = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();

    return $this->render('paging', [
         'employees' => $employees,
         'pages' => $pages,
    ]);
}
