<?php
require 'conn.php';
$sql_update="INSERT INTO customer(username,password,gender,education,email,hobby) VALUES ('$_GET[username]','$_GET[password]' ,'$_GET[gender]' ,'$_GET[education]','$_GET[email]','$_GET[hobby]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Success <br>";
header("refresh: 1; url=http://localhost/final_test/final_test/showform01.php?username=$_GET[username]&password=$_GET[password]&gender=$_GET[gender]&education=$_GET[education]&email=$_GET[email]&hobby=$_GET[hobby]");
}

?>