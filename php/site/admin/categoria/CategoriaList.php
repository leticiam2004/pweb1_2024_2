<?php
include '../db.class.php';
    $db = new db();
    $dados=$db->all();
?>
<h4>tbale</h4>
<table>
    <thead>
        <th>id</th>
        <th>nome</th>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($dados as $item){
                echo "
                <td>$item->id</td>
                ";
                }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($dados as $item){
                echo "
                <td>$item->nome</td>
                ";
                }
            ?>
        </tr>
    </tbody>
</table>