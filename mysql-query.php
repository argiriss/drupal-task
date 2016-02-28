<?php
$postemail = $_POST["email"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drupal";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}


mysql_select_db($dbname);

$sql = mysql_query("UPDATE users SET button='1' WHERE email='".$postemail."'");

$output = mysql_query("SELECT name, mail FROM users WHERE button='1'");

?>