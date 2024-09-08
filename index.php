<?php

$server_name = "localhost";
$db = "note_app";
$username = "root";
$password = '';

try {
    $pdo = new PDO("mysql:host=$server_name;dbname=$db", $username, $password);
    $stmt = $pdo->prepare("SELECT * FROM notes");
    $insert = "INSERT INTO notes (title, content) VALUES ('title 2', 'more content')";
    $stmt2 = $pdo->prepare($insert);
    $stmt2->execute();
    $stmt->execute();

    while(($result = $stmt->fetch(PDO::FETCH_ASSOC)) != false){
        var_dump($result);
    }
}catch(PDOException $e){
    echo $e->getMessage();
}



