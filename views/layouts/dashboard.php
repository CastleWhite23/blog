<?php 
    session_start();
    include("../../app/config/config.php");
    if(!isset($_SESSION['username'])){
        header("location: ./login.php");
    }
    include(HEADER_TEMPLATE);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>

    <h1>Olá <?php echo $_SESSION['username'];?></h1>
    <a href="logout.php">Deslogar</a>

    <?php 
     include(FOOTER_TEMPLATE);
    ?>
   
</body>
</html>