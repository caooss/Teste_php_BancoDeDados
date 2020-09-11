<?php
    include('./inc/cabecalho_conexao.php');
    $alterar=$_POST["alterar"];

    if ($alterar==0) {
        $nome=$_POST['nome'];
        $endereco=$_POST['endereco'];
        $idade=$_POST['idade'];

        $sql="INSERT INTO pessoas (nome, endereco, idade)
              VALUE ('$nome', '$endereco', $idade)";

        $txt='Operação realizada com sucesso!';
    }
    if ($alterar==1) {
        $id=$_POST['id'];
        $nome=$_POST['nome'];
        $endereco=$_POST['endereco'];
        $idade=$_POST['idade'];

        $sql="UPDATE pessoas
              SET nome='$nome', endereco='$endereco', idade='$idade'
              WHERE id=$id";

        $txt='Informações do aluno atualizadas com sucesso!';
    }



    include('./inc/rodape_conexao.php');
?>
