<!-- FORMULARIO DE CRAIAÇÃO DE USUÁRIO -->

<?php
include("../../app/config/config.php");
include(DBAPI);
createUser();
include(HEADER_TEMPLATE);
?>


</style>
<div class="form-cad">

    <form class="row g-2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>Cadastro</h1>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" id="inputAddress" name="dataUser[nome]" required>
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Nome de úsuario:</label>
            <input type="text" class="form-control" id="inputAddress2" name="dataUser[username]" required>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="inputPassword4" name="dataUser[senha]" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email:</label>
            <input type="email" class="form-control" id="inputEmail4" name="dataUser[email]" required>
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Data de nascimento:</label>
            <input type="date" class="form-control" id="inputAddress2" name="dataUser[data_nascimento]" required>
        </div>
        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-dark">Cadastre-se</button>
        </div>
        <div class="col-12">
            <a href="./login.php">Já possuí uma conta?</a>
        </div>
    </form>
</div>




<!-- 
<form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="name">nome:</label>
    <input type="text" id="name" name="dataUser[nome]" required>

    <label for="nameuser">data de nascimento:</label>
    <input type="date" id="data_nascimento" name="dataUser[data_nascimento]" required>

    <label for="nameuser">nome de usuário:</label>
    <input type="text" id="username" name="dataUser[username]" required>

    <label for="email">email:</label>
    <input type="email" id="email" name="dataUser[email]" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="dataUser[senha]" required>

    <input type="submit" value="Cadastre-se">
    <a href="./login.php">Já possuí uma conta?</a>
</form> -->

<?php
include(FOOTER_TEMPLATE);
?>