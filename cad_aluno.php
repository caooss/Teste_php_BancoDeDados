<?php
    include("./inc/cabecalho.inc.php");
?>

    <form action="insere.php" method="post">
        <fieldset>
            <label>Nome: </label>
            <input type="text" name="nome"/>
            <br><br>

            <label>Endereco: </label>
            <input type="text" name="endereco"/>
            <br><br>

            <label>idade: </label>
            <input type="number" name="idade"/>
            <br><br>

            <input type="submit" value="Salvar">
        </fieldset>
    </form>

<?php
    include("./inc/rodape.inc.php");
?>
