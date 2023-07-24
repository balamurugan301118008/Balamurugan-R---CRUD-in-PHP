<?php
require 'connections.php';
if(isset($_POST['edit'])){
    $edit = $_POST['edit'];
//    echo $edit;
    try{
        $edit_values ="SELECT * FROM users WHERE id = '$edit'";
        $edit_file = $pdo->prepare($edit_values);
        $edit_file->execute();
        $updates = $edit_file->fetchAll(PDO::FETCH_OBJ);
//        var_dump($updates);
    }
    catch(Exception $e){
        die("didn't select the values in edit file.$e");
    }

}
require 'edit.html';
