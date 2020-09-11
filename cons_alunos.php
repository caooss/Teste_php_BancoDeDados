<?php
    include('./inc/cabecalho_conexao.php');

    $cons="SELECT * FROM pessoas";

    $query=mysqli_query($con, $cons);
    if ($cons) {
        if(mysqli_num_rows($query)>0){
            echo '<table border=1>';
            echo '
                  <tr>
                    <th>RA</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th colspan=2>Operações</th>
                  </tr>';
            while (($resultado=mysqli_fetch_assoc($query))!=null) {
                echo '<tr>';
                    echo '<td>'.$resultado["id"].'</td>';
                    echo '<td>'.$resultado["nome"].'</td>';
                    echo '<td>'.$resultado["idade"].'</td>';
                    echo '<td>'.$resultado["endereco"].'</td>';
                    echo '<td><a href="cad_aluno.php?pront='.$resultado["id"].'">Editar</a></td>';
                    echo '<td><a href="remover_aluno.php?pront='.$resultado["id"].'">Remover</a></td>';
                echo '</tr>';
            }
            echo '</table>';

        }else{
            echo mysqli_error($con);
        }
    }else{
        echo "Nenhuma pessoa cadastrada";
        echo mysqli_error($con);
    }


    echo '<a href="index.php">Voltar</a>';
    myslqi_close($con)
?>
