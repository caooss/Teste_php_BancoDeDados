<?php
    echo '<!DOCTYPE html>
            <html lang="pt-br" dir="ltr">
            <head>
                <meta charset="utf-8">
                <title>Consulta Por RA</title>
            </head>
            <body>';
                if(empty($_POST)){
                    echo '
                         <form action="cons_ra_alunos.php" method="post">
                             <fieldset>
                                 <label>Qual o RA(ID) da pessoa que procura? : </label>
                                 <input type="number" name="id"/>
                                 <br><br>

                                 <input type="submit" value="Salvar">
                             </fieldset>';
                }else{
    $id=$_POST["id"];

    include('./inc/cabecalho_conexao.php');

    $cons="SELECT * FROM pessoas where id=$id";

    $query=mysqli_query($con, $cons);
    if(mysqli_num_rows($query)>0){
        while (($resultado=mysqli_fetch_assoc($query))!=null) {
                echo ''.$resultado["id"].' - '.$resultado["nome"].' - '.$resultado["idade"].'<br>';
        }

    }else{
        echo mysqli_error($con);
    }

    echo '<a href="index.php">Voltar</a>';
    myslqi_close($con);
}

    echo '  </body>
                </form>
            </html>';
?>
<form class="" action="index.html" method="post">

</form>
