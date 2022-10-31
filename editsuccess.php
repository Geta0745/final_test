<?php
require 'conn.php';
$sql_update="UPDATE customer SET username='$_GET[username]',password='$_GET[password]' ,gender='$_GET[gender]' ,education='$_GET[education]',email='$_GET[email]',hobby='$_GET[hobby]' WHERE username='$_GET[username]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Success <br>";
header("refresh: 1; url=http://localhost/final_test/final_test/showform01.php?username=$_GET[username]&password=$_GET[password]&gender=$_GET[gender]&education=$_GET[education]&email=$_GET[email]&hobby=$_GET[hobby]");
}

?>