// table name, column names, column values
$db->createCommand()->batchInsert('employee', 
    ['name', 'age'], 
    [
        ['Farhan', 30],
        ['Jane', 20],
        ['Linda', 25],
    ])->execute();
