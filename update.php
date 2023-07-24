<?php
require 'connections.php';

    if(isset($_POST['update'])){
        $updated = $_POST['update'];
        $first_Name = $_POST['firstName'];
        $last_Name = $_POST['lastName'];
        $Email_id = $_POST['email'];
        $password = $_POST['password'];
        $age= $_POST['age'];
        $user_address = $_POST['address'];
        $user_Gender = $_POST['operator'];

        try{
            $update_values = "UPDATE users SET first_name = '$first_Name',last_name = '$last_Name',
                                 email = '$Email_id',password = '$password',age = '$age',address = '$user_address',Gender = '$user_Gender' WHERE id = '$updated'";
            $update_file = $pdo->prepare($update_values);
            $update_file->execute();
            header('location:history.php');
        }
        catch (Exception $e){
            die("didn't update the value in update file.$e");
        }
    }

require 'edit.html';