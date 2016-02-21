$db = \Yii::$app->db;
$years = $db->createCommand('
    SELECT DISTINCT(year) FROM survey_framework
    ORDER BY year ASC')
    ->queryColumn();
print_r($years);
