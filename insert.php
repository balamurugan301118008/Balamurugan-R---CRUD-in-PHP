<?php
require 'connections.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['email'];
$password = $_POST['password'];
$age= $_POST['age'];
$address = $_POST['address'];
$Gender = $_POST['operator'];


if($firstName && $lastName && $Email && $password){

try{
    $insert_statement = $pdo->prepare("INSERT INTO users(first_name,last_name,email,password,age,address,Gender) values('$firstName','$lastName','$Email','$password','$age','$address','$Gender')");
    $insert_statement->execute();
    header("location:history.php");
}
catch (Exception $e){
    {
        die(" $e.Connections failed");
    }

    }
}
require 'index.html';

?>