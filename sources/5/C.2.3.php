// SELECT * FROM `employee` WHERE `id` = 2
$employee = Employee::findOne(2);
// SELECT * FROM `employee` WHERE `id` IN (1,2,3)
$employees = Employee::findAll([1,2,3]);
// SELECT * FROM `employee` WHERE `age` = 30 LIMIT 1
$employee = Employee::findOne([
    'age' => 30
]);
// SELECT * FROM `employee` WHERE `age` = 30
$employee = Employee::findOne([
    'age' => 30
]);
