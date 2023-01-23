<?php
require 'config.php';

$tarefa = filter_input(INPUT_GET, 'tarefa');

if($tarefa){
    $sql = $pdo->prepare("DELETE FROM afazeres WHERE tarefa = :tarefa");
    $sql->bindvalue(':tarefa', $tarefa);
    $sql->execute();
}

header("Location: index.php");