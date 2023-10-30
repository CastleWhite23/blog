<!-- FORMULARIO DE LOGIN -->
<?php
include("../../app/config/config.php");
include(DBAPI);

if (isset($_SESSION['username'])) {
    header("location: ./dashboard.php");
}

login();

include(HEADER_TEMPLATE);
?>

<div class="form-login">
    <form class="row" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>login</h1>
        <?php if (isset($_SESSION['login_error'])) {  ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['login_error']; ?>
            </div>
        <?php } ?>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Nome de úsuario:</label>
            <input type="text" class="form-control" id="inputAddress2" name="username" required>
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" required>
        </div>
        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-dark">Entrar</button>
        </div>
        <div class="col-12 mt-4">
            <p>Ainda não possuí uma conta? <a href="./accont.php">Crie uma nova conta aqui!</a></p>
        </div>
    </form>
</div>

<?php
include(FOOTER_TEMPLATE);
?>


<!-- erro de login -->

<!-- 