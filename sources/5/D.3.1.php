$transaction = Employee::getDb()->beginTransaction();
try {
    $employee = New Employee();
    $employee->name = 'Hasan';    
    $employee->age = 22;    
    $employee->save();
    // ...other DB operations...
    $transaction->commit();
} catch(\Exception $e) {
    $transaction->rollBack();
    throw $e;
}
