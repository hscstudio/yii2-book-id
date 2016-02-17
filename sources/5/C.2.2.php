// SELECT * FROM `employee` WHERE `id` = 2
$employee = Employee::find()
    ->where(['id' => 2])
    ->one();
echo $employee->name;
// return semua employee yang usianya > 25 dan sortir berdasarkan ID
// SELECT * FROM `employee` WHERE `age` > 25 ORDER BY `id`
$employees = Employee::find()
    ->where(['>','age',25])
    ->orderBy('id')
    ->all();
// SELECT COUNT(*) FROM `employee`
$count = Employee::find()
    ->count();
