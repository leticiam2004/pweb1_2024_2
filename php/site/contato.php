<?php
include "./header.php"
    ?>

<?php
if (!empty($_GET)) {
    echo "<div class='alert alert-success' role='alert'>
    <b>registro salvo</b><br>
    nome {$_GET['name']} email {$_GET['email']} mensagem {$_GET['mensagem']}
    </div>";
}
?>
<div class="row">
    <div class="col">
        <h2>contato</h2>
        <form action="contato.php" method="get">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="Name" class="form-control" name="name" placeholder="ze da silva">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">pica</button>
        </form>
    </div>
</div>

<?php
include "./footer.php"
    ?>