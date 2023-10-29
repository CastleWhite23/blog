<?php
    include(ABSPATH."app/models/postsModel.php");
    class postController{
        private $postModel;

        public function __construct() {
            $this->postModel = new postModel();
        }

        public function find($table=null, $id=null, $username=null, $password=null, $fk_id =null){
            $dados = $this->postModel->select($table, $id, $username, $password, $fk_id);
            return $dados;
        }

        public function create($table=null, $info=null){
             $this->postModel->create($table, $info);
        }

        public function update($table=null, $id=null, $info=null){

            $this->postModel->update($table, $id, $info);
        }

        public function delete($table=null, $id=null){
            $this->postModel->delete($table, $id);
        }
    }
?>