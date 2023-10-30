<!-- FORMULARIO DE EDIÇÃO -->
<?php
include("../../app/config/config.php");
include(DBAPI);
include(LOGIN_VERIFICATION);
$post = edit();

include(HEADER_TEMPLATE);
?>

        <div class="container mt-3 d-flex flex-column align-items-center">
            <div class="row">
                <h1>
                    Crie suas postagens
                </h1>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <form action="edit.php?id=<?php echo $post['id_post']; ?>" method="POST" class="form-post">
                    <div class="mb-3 w-25 ">
                        <input id="titulo" name="post['titulo_post']" value="<?php echo $post['titulo_post']; ?>" required class="form-control inpt-titulo" placeholder="Titulo:">
                    </div>
                    <div class="mb-3">
                        <textarea type="text" cols="100" rows="35" name="post['conteudo_post']"  required class="form-input inpt-texto" id="exampleCheck1">
                            <?php echo $post['conteudo_post']; ?>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-next">Salvar</button>
                    <a href="<?php echo BASEURL ?>/views/layouts/dashboard.php">Cancelar</a>
                </form>
                
            </div>
        </div>
<?php
include(FOOTER_TEMPLATE);
?>
