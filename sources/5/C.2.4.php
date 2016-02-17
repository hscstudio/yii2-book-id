// insert a new row of data
// INSERT INTO employee(name,age) VALUES('James',34)
$employee = new Employee();
$employee->name = 'James';
$employee->age = 34;
$employee->save();
// update an existing row of data
// UPDATE employee SET name='James Gordon' WHERE id = 5
$employee = Employee::findOne(5);
$employee->name = 'James Gordon';
$employee->save();
// delete
// DELETE FROM employee WHERE id=5
$employee = Employee::findOne(5);
$employee->delete();
