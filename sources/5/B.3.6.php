// INSERT (table name, column values)
$db->createCommand()->insert('employee', [
     'name' => 'Hasan',
     'age' => 30,
])->execute();
// UPDATE (table name, column values, condition)
$db->createCommand()->update('employee', ['status' => 30], 'id = 1')
       ->execute();
// DELETE (table name, condition)
$db->createCommand()->delete('employee', 'age >30')
      ->execute();  
