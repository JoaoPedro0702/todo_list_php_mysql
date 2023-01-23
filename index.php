<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM afazeres");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Adicione suas tarefas!</h1>
<form method="POST" action="adicionar_action.php">
    <label>
        Adicione aqui: <input type="text" name="tarefa">
    </label>
    <input type="submit" value="salvar">
</form>

<h1>Tarefas para fazer</h1>

<table border="1">
    <tr>
        <th>Tarefa</th>
        <th>excluir</th>
    </tr>
    <?php foreach($lista as $afazeres): ?>
        <tr>
            <td><?=$afazeres['tarefa'];?></td>
            <td>
                <a href="excluir.php?tarefa=<?=$afazeres['tarefa'];?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
       
</table>