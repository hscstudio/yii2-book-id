// Binding Parameter
$employee = $db->createCommand('SELECT * FROM employee WHERE id=:id',['id'=> 2])->queryOne();
