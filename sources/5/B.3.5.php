$row_affected = $db->createCommand('UPDATE employee SET age=30 WHERE id=1')->execute();
echo $row_affected.' row affected';
