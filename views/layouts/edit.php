<!-- FORMULARIO DE EDIÇÃO -->
<?php
include("../../app/config/config.php");
include(DBAPI);
include(LOGIN_VERIFICATION);
$post = edit();

include(HEADER_TEMPLATE);
?>
<style>
    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 12px;
    }
 </style>
        <form action="edit.php?id=<?php echo $post['id_post']; ?>" method="POST">

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="post['titulo_post']" value="<?php echo $post['titulo_post']; ?>" required>

            <textarea type="text" cols="100" rows="40" name="post['conteudo_post']"
                required><?php echo $post['conteudo_post']; ?></textarea>

            <input type="submit" value="salvar"></input>
            <a href="<?php echo BASEURL ?>/views/layouts/dashboard.php">Cancelar</a>
        </form>

<?php
include(FOOTER_TEMPLATE);
?>
