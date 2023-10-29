<?php
session_start();
include("../../app/config/config.php");
if (!isset($_SESSION['username'])) {
    header("location: ./login.php");
}
include(HEADER_TEMPLATE);
?>

<div class="container">
    <div class="row mt-3">
        <h1>Olá
            <?php echo $_SESSION['username']; ?>
        </h1>
    </div>
    <div class="row mt-3">
        <a href="<?php echo BASEURL ?>views/layouts/myPosts.php" class="card-options">Seus Posts</a>
        <a href="<?php echo BASEURL ?>views/layouts/add.php" class="card-options ms-3">Novo Post</a>
    </div>
</div>
<?php
include(FOOTER_TEMPLATE);
?>