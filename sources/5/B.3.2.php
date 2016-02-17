public function actionQuery2()
{
    $db = Yii::$app->db;
    // return a single row 
    $employee = $db->createCommand('SELECT * FROM employee WHERE id=1')->queryOne();
    echo $employee['id']." ";
    echo $employee['name']." ";
    echo "(".$employee['age'].") ";    
    echo "<hr>";
    // return a single column (the first column)
    $names = $db->createCommand('SELECT name FROM employee')
                             ->queryColumn();
    print_r($names);
    echo "<hr>";
    // return a scalar
    $count = $db->createCommand('SELECT COUNT(*) FROM employee')
                           ->queryScalar();
    echo "Jumlah employee ".$count;
    echo "<hr>";
}
