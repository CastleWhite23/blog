<?php 
    session_start();
    include("connection.php");
    create_connection();
    include(ABSPATH."app/controller/postsController.php");


    function login(){
        
            if(isset($_POST['username']) && isset($_POST['password'])){
                //se usename ou senha estiverem errados no db continue
                $_SESSION['login_error'] = "";
                $postController = new postController();
                $username = $_POST['username'];
                $password = $_POST['password'];
               
                
                // 
                $results =  $postController->find("user", $id=null, $username, $password);

                if(!$results){
                    $_SESSION['login_error'] = "Usuário ou senha inválidos";
                }else{
                    header('location: ./dashboard.php'); 
                    $_SESSION['id_user'] = $results['id_user'];
                    $_SESSION['username'] = $results['username'];
                }
    
            }else{
                return null;
            }
        
        
    }
    
    function index($id=null){
        $postController = new postController();
        return $postController->find("posts", $id);
    }

    function create(){
        if(isset($_POST['post'])){
            //definir o dia de hoje
            //pegar os dados e jogar em uma var
            // chamar o controller e enviar as coisas
            //mudar pra pagina onde tem todos os registros 

            $post = $_POST['post'];
            $today = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));      
           
            //pegar o username do cara

            $id_user = $_SESSION['id_user'];
            $username = $_SESSION['username'];
           

            $post['autor_post'] = $username;
            $post['data_criacao'] =  $today->format("Y-m-d H:m:s");
            $post['data_alteracao'] = $today->format("Y-m-d H:m:s");
            $post['fk_id_user'] = $id_user;
          
        

            $postController = new postController();
            $postController->create("posts", $post);

            header('location: ../index.php');
        }

     
    }
    function createUser(){  
        if(isset($_POST['dataUser'])){ 
            
            $postController = new postController();
            
            $user = $_POST['dataUser'];
            $usernameValue = $_POST['dataUser']['username'];

            $verification = $postController->find("user", $id=null, $usernameValue);


            $today = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));      
            $user['data_criacao'] =  $today->format("Y-m-d H:m:s");
            $user['data_alteracao'] = $today->format("Y-m-d H:m:s");

          

            if($verification > 0){
                echo "Nome de usuário inválido";
    
            }else{
                $postController->create("user", $user);
                header('location: ./login.php');
            }

            
        }

    }
    function edit(){
            if (isset($_GET['id'])) {
                 $id = $_GET['id'];
        
                 if (isset($_POST['post'])) {
                        $post = $_POST['post'];
                        $today = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));      
                        $post['data_alteracao'] = $today->format("Y-m-d H:m:s");
            
                    
                        $postController = new postController();
                        $postController->update("posts", $id, $post);
            
                        header('location: ../../views/layouts/dashboard.php');
                        return null;
                 }else{
                    return index($id);
                 }
            }else{
                header('location: ../../views/layouts/dashboard.php');

            }
    }
    function del(){
        if(isset($_GET['id'])){
            header('location: ../index.php');
            $id = $_GET['id'];

            $postController = new postController();
            $postController->delete("posts", $id);
           
        }
    }

    function findMyPosts($fk_id=null){
        $postController = new postController();
        return $postController->find("posts", $id=null, $username=null, $password=null, $fk_id);
        
    }
    
?>