<!-- FOMULARIO DE VISUALIZAÇÃO -->
<?php
include("../../app/config/config.php");
include(DBAPI);

$id = $_GET['id'];
$post = index($id);


include(HEADER_TEMPLATE);
?>

            <td>
                <?php echo $post['id_post']; ?>
            </td>
            <td>
                <?php echo $post['titulo_post']; ?>
            </td>
            <td>
                <?php echo $post['conteudo_post']; ?>
            </td>
            <td>
                <?php echo $post['autor_post']; ?>
            </td>
            <td>
                <?php echo $post['data_criacao']; ?>
            </td>
            <a href="<?php echo BASEURL?>/views" class="btn btn-next">Voltar</a>

<?php
include(FOOTER_TEMPLATE);
?>