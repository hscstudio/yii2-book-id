public function actionActiveRecord()
{
    $employees = \app\models\Employee::find()->all();
    foreach($employees as $employee){
        echo "<br>";
        echo $employee->id." ";
        echo $employee->name." ";
        echo "(".$employee->age.") ";            
    }
}
