<?php

require 'connections.php';

try{
        $fetch_values = $pdo->prepare("SELECT * FROM users");
        $fetch_values->execute();
        $datas = $fetch_values->fetchAll(PDO::FETCH_OBJ);
}
catch (Exception $e){
    die("didn't fetch.$e");
}
require 'history.html';