<?php
define("DBSERVER", "localhost"); //define database server
define("DBUSERNAME", "root"); // define database username
define("DBPASSWORD", ""); // define database password
define("DBNAME", "registration"); // define database name

// connect to MySQL database
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

// check the database connection
if ($db === false) {
    die("Error: connection could not be established." . mysqli_connect_error());
}
?>