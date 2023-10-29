<?php
include("../app/config/config.php");
include(DBAPI);

$posts = index();
include(HEADER_TEMPLATE);

?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-9">
    <?php
    foreach ($posts as $post):
        ?>

        <div class="row mt-3 ms-2">
            <div class="card card-index text-start shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $post['titulo_post']; ?>
                    </h5>
                    <p class="card-text text-publi">
                        <?php echo $post['conteudo_post']; ?>
                    </p>
                    <a href="./layouts/view.php?id=<?php echo $post['id_post'] ?>" class="btn btn-next ">Continuar
                        lendo</a>
                </div>
                <div class="card-footer text-body-secondary">
                    Publicado em: <?php echo $post['data_criacao']; ?> / Autor: <?php echo $post['autor_post']; ?>
                </div>
            </div>
        </div>

        <?php
    endforeach;

    ?>
        </div>
        <div class="col-3 align-center mt-3 ">
            <h4>Recomendados</h4>
        </div>
    </div>
</div>

<?php
include(FOOTER_TEMPLATE);
// layout aqui é 
//----------- | recomendados
//----------- | 
//----------- |
//o que o session faz?
//como funciona o session?
//como usar em um sistema real?
?>