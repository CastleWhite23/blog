<?php 
    include("./app/config/config.php");
    $path = "./views";
    include(HEADER_TEMPLATE);

?>
            
        <!-- MOSTRAR TODOS OS POSTS -->

<?php 
    include(FOOTER_TEMPLATE);
?>


<!-- 
FRONTEND
     pagina onde todos as postagens são mostradas
     lugar pra criar postagens
     lugar pra editar ou excluir as postagens

     //LEVA PROS CONTROLLERS COM OS DADOS
     //CONTROLLERS LEVAM PROS MODELS ONDE AS INFORMAÇÕES SÃO PROCESSADAS PELO BANCO

APP
    controler recebe os dados
    model processa os dados e retorna o conteudo do banco
    config esta relacionado com ao banco
    templates do front end
    usar POO

    -----FEZ LOGIN-----
    --Liberar a função criar post só no dashboard do user 
    --quando o cara cliar em entrar se tiver login vai pro dashboard    

    Qual a lógica do DB?

    1 user varios posts
    (1,n);

    quando for adicionar o post, 
    pegar a var session(username) 
    e adicionar no id_estrangeiro do post
    o id do user onde o username esta


 -->