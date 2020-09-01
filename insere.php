<?php
    include('./inc/cabecalho_conexao.php');

    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $idade=$_POST['idade'];

    $sql="INSERT INTO pessoas (nome, endereco, idade)
          VALUE ('$nome', '$endereco', $idade)";

    $txt='Operação realizada com sucesso!';

    include('./inc/rodape_conexao.php');
?>
