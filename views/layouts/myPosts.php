<?php
include("../../app/config/config.php");
include(DBAPI);
include(LOGIN_VERIFICATION);

$fk_id = $_SESSION['id_user'];

$posts = findMyPosts($fk_id);
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
                                <p class="card-text">
                                    <?php echo $post['conteudo_post']; ?>
                                </p>
                                <a href="./view.php?id=<?php echo $post['id_post'] ?>" class="btn btn-next "><i class="fa-solid fa-eye"></i></a>
                                <a href="./edit.php?id=<?php echo $post['id_post'] ?>"  class="btn btn-next "><i class="fa-solid fa-pen"></i></a>
                                <a href="./del.php?id=<?php echo $post['id_post'] ?>"  class="btn btn-next "><i class="fa-solid fa-trash"></i></a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                Publicado em:
                                <?php echo $post['data_criacao']; ?> / Autor:
                                <?php echo $post['autor_post']; ?>
                            </div>
                        </div>
                    </div>

                    <?php
                endforeach;

                ?>
            </div>
        </div>
    </div>

            <?php

include(FOOTER_TEMPLATE);




?>