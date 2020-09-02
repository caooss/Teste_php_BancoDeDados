<?php
    include('./inc/cabecalho_conexao.php');

    $cons="SELECT * FROM pessoas";

    $query=mysqli_query($con, $cons);
    if(mysqli_num_rows($query)>0){
        while (($resultado=mysqli_fetch_assoc($query))!=null) {
                echo ''.$resultado["id"].' - '.$resultado["nome"].' - '.$resultado["idade"].'<br>';
        }

    }else{
        echo mysqli_error($con);
    }

    echo '<a href="index.php">Voltar</a>';
    myslqi_close($con)
?>
