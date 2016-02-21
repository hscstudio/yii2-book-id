$db = \Yii::$app->db;
$frameworks = $db->createCommand('
    SELECT * FROM framework
    ORDER BY id ASC')
    ->queryAll();
$series = [];
foreach($frameworks as $framework){
    $results = $db->createCommand('
        SELECT total FROM survey_framework
        WHERE framework_id='.$framework['id'].'
        ORDER BY year ASC')
        ->queryColumn();
    $data = array_map('intval', $results);
    $series[] = [
        'name' => $framework['name'],
        'data' => $data,
    ];
}
print_r($series);
