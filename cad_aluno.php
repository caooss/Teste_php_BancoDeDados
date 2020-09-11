<?php
    include("./inc/cabecalho.php");

    include('./inc/cabecalho_conexao.php');

    $encontrou=false;
    if (!empty($_GET)) {
        $pront=$_GET['pront'];

        $cons="SELECT * FROM pessoas WHERE id=$pront";
        $query=mysqli_query($con, $cons);

        if($query){
            if(mysqli_num_rows($query)>0){
                while (($resultado=mysqli_fetch_assoc($query))!=null) {
                    $id=$resultado["id"];
                    $nome=$resultado["nome"];
                    $endereco=$resultado["endereco"];
                    $idade=$resultado["idade"];
                }
            $encontrou=true;
            }
        }


    }

?>

    <form action="insere.php" method="post">
        <fieldset>
            <?php
                if ($encontrou) {
                    echo '
                          <label>RA: </label>
                          <input type="text" name="id" value="'.$id.'" readonly="readonly"/>
                          <br><br>';
                }
            ?>

            <label>Nome: </label>
            <input type="text" name="nome"

            <?php
                if($encontrou){
                    echo 'value="'.$nome.'"';
                }
            ?>

            />
            <br><br>

            <label>Endereco: </label>
            <input type="text" name="endereco"

            <?php
                if($encontrou){
                    echo 'value="'.$endereco.'"';
                }
            ?>

            />
            <br><br>

            <label>idade: </label>
            <input type="number" name="idade"

            <?php
                if($encontrou){
                    echo 'value="'.$idade.'"';
                }
            ?>

            />
            <br><br>

            <input type="submit" value="Salvar">
            <a href="index.php">Voltar</a>

            <?php
                if ($encontrou) {
                    echo '<input type="hidden" name="alterar" value="1"/>';
                }else{
                    echo '<input type="hidden" name="alterar" value="0"/>';
                }
            ?>
        </fieldset>
    </form>

<?php
    myslqi_close($con);

    include("./inc/rodape.php");
?>
