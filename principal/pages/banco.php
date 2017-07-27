<?Php
$host_name = "10.15.109.203";
$database = "dist"; // Change your database nae
$username = "root";          // Your database user id 
$password = "banco";          // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>