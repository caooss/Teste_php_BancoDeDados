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
    if ($query) {
        if(mysqli_num_rows($query)>0){
            echo '<table border=1>';
            echo '<tr>
                    <th>RA</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th colspan=2>Operação</th>
                  </tr>';
            while (($resultado=mysqli_fetch_assoc($query))!=null) {
                    echo '<tr>
                          <td>'.$resultado["id"].'</td>
                          <td>'.$resultado["nome"].'</td>
                          <td>'.$resultado["idade"].'</td>
                          <td>'.$resultado["endereco"].'</td>
                          <td><a href="cad_aluno.php?pront='.$resultado["id"].'">Editar</a></td>
                          <td><a href="remover_aluno.php?pront='.$resultado["id"].'">Remover</a></td>
                          </tr>';
            }
            echo '</table>';

        }else{
            echo "Está pessoa com o RA=$id não está no sistema, pode ter sido removida ou editada";
            echo mysqli_error($con);
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
