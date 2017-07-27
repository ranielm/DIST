<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>plus2net PDF document with MySQL data</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?Php
////////////////
require "config.php"; // Database connection details. 


$count="select * from produtos LIMIT 0,10";

echo "<table>";
echo "<tr><th>id</th><th>name</th><th>class</th><th>mark</th><th>Sex</th></tr>";
foreach ($dbo->query($count) as $row) {
echo "<tr ><td>$row[id]</td><td>$row[nome]</td><td>$row[quantidadetotal]</td><td>$row[insercoestotais]</td><td>$row[remocoestotais]</td></tr>";
}
echo "</table>";
?>
<br><br>
<a href=http://www.plus2net.com/php_tutorial/pdf-data-student.php rel='nofollow'>PDF Generation using MySQL data from plus2net.com</a>

</body>
</html>
