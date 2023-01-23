<?php
require 'config.php';

$tarefa = filter_input(INPUT_POST, 'tarefa');

if($tarefa){
    $sql = $pdo->prepare("INSERT INTO afazeres (tarefa) VALUES (:tarefa)");
    $sql->bindValue(':tarefa', $tarefa);
    $sql->execute();

    header("Location: index.php");
    exit;
}