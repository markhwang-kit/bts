<?php 
require 'db.php';
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

// echo $name."<br>";
// echo $email."<br>";
// echo $phone."<br>";
// echo $message."<br>";

insert_msg($name, $email, $phone, $message);
echo "당신이 입력한 내용들: <br>";
select_msg();
?>