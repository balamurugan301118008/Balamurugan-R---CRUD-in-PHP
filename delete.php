<?php
require 'connections.php';
$id = $_POST['delete'];
try{
    $delete_values = $pdo->prepare("DELETE FROM users WHERE id = '$id'");
    $delete_values->execute();
    header('location:history.php');

}
catch (Exception $e){
    die("didn't delete the values.$e");
}
require 'history.html';