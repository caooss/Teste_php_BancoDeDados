<?php
    include('./inc/cabecalho_conexao.php');

    $pront=$_GET['pront'];

    $sql="DELETE FROM pessoas WHERE id=$pront";
    
    header('location: cons_alunos.php');

    include('./inc/rodape_conexao.php');
?>
