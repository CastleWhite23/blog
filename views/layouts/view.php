<!-- FOMULARIO DE VISUALIZAÇÃO -->
<?php
include("../../app/config/config.php");
include(DBAPI);

$id = $_GET['id'];
$post = index($id);


include(HEADER_TEMPLATE);
        ?>
            <div class="container d-flex align-items-center flex-column">
                <h1 class="titulo-post">
                    <?php echo $post['titulo_post']; ?>
                </h1>
                <p class="mt-3 ustify-content-start">
                    <strong>Publicado por:</strong> <?php echo $post['autor_post']; ?> <br>
                    <strong>Ultima atualização:</strong> <?php echo $post['data_alteracao']; ?>
                </p>
                <hr>
                <p class="texto-post">
                    <?php echo $post['conteudo_post']; ?>
                </p>
                <a href="<?php echo BASEURL ?>/views" class="btn btn-next">Voltar</a>
            </div>

<?php
include(FOOTER_TEMPLATE);
?>