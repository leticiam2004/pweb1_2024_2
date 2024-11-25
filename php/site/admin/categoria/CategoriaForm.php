<?php
include '../db.class.php';
    $db = new db();
    if(!empty($_POST)){
        $db->insert($_POST);
        echo "<b>Registro inserido com sucesso </b>";
    }
?>
<form action="" method="post">
    <h4>fomrulario categoria</h4>
    <label for="">nome</label>
    <input type="text" name="nome"> <br>
    <br>
    <button type="submit">salvar</button>
</form>