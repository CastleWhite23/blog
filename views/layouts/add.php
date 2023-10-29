<?php
    include("../../app/config/config.php");
    include(DBAPI);
    include(LOGIN_VERIFICATION);
    
    create();

    include(HEADER_TEMPLATE);
?>


<style>
    form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 12px;
    }

    /* FORMULARIO DE CADASTRO */

</style>

            <form action="add.php" method="POST">
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="post['titulo_post']" required>
                <textarea type="text" cols="100" rows="40" name="post['conteudo_post']" required></textarea>
                <input type="submit" value="salvar"></input>
                <a href="<?php echo BASEURL ?>/views/layouts/dashboard.php">Cancelar</a>
            </form>

<?php
    include(FOOTER_TEMPLATE);
?>