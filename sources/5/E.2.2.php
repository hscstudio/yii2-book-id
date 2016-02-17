<h1>Daftar Employee</h1>
<?php
echo "<table class='table table-bordered table-striped'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>AGE</th>";
echo "</tr>";
foreach($employees as $employee){
    echo "<tr>";
    echo "<td>".$employee->id."</td>";
    echo "<td>".$employee->name."</td>";
    echo "<td>".$employee->age."</td>";
    echo "</tr>";
}
echo "</table>";
