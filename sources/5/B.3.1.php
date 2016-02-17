public function actionQuery()
{
    $db = Yii::$app->db;
    $command = $db->createCommand('SELECT * FROM employee');
    $employees = $command->queryAll();
    //Ekstrak data
    foreach($employees as $employee){
        echo "<br>";
        echo $employee['id']." ";
        echo $employee['name']." ";
        echo "(".$employee['age'].") ";            
    }
}
