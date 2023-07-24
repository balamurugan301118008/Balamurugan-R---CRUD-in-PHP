<?php
try{
    $pdo = new PDO
    (
        'mysql:host=127.0.0.1;dbname=person_details',
        'dckap',
        'Dckap2023Ecommerce'
    );
}
catch(Exception $e){
    echo "connection:".$e->getMessage();
}
