<?php
$connection = create_connection();

class postModel
{
    public function select($table = null, $id = null, $username =null, $password=null, $fk_id=null)
    {
        global $connection;


        if(isset($id)){
            $query = "SELECT * FROM $table WHERE id_post = $id";
            $result = mysqli_fetch_array(mysqli_query($connection, $query));

        }else if($fk_id){
            $query = "SELECT * FROM $table WHERE fk_id_user = $fk_id";
            $dados = mysqli_query($connection, $query);

            $result = array();
            while ($row = mysqli_fetch_array($dados)) {
                $result[] = $row;
            }


        }else if($username && $password){
            //ta logando ou 
      
                $query = "SELECT * FROM $table WHERE username='$username' AND senha='$password'";
                $result = mysqli_fetch_array(mysqli_query($connection, $query));

        }else if($username){
            //varificando se tem outro username na tabela
                $query = "SELECT * FROM $table WHERE username='$username'";
                $dados = mysqli_query($connection, $query);

                $result = 0;
                while ($row = mysqli_fetch_array($dados)) {
                    $result++;
                }
         } else{
            //se só tem o parametro table--> pegar tudo
            $query = "SELECT * FROM $table";
            $dados = mysqli_query($connection, $query);

            $result = array();
            while ($row = mysqli_fetch_array($dados)) {
                $result[] = $row;
            }
        }

       

        return $result;
    }
    public function create($table = null, $info = null)
    {
        global $connection;

        $columns = null;
        $values = null;

        foreach ($info as $key => $value) {
            $columns .= trim($key, "'") . ",";
            $values .= "'$value',";
        }

        echo $columns;
        // remove a ultima virgula
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');

        $query = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

        mysqli_query($connection, $query);

    }

    public function update($table = null, $id = null, $info=null)
    {
        global $connection;

        var_dump($info);
        $column = null;
        $values = null;
        $lastValue = "";

        foreach ($info as $key => $value) {
            $column = trim($key, "'");
            $lastValue .= " $column = '$value',";
        }

        $lastValue = rtrim($lastValue, ',');
        echo $lastValue;


        $query = "UPDATE $table SET $lastValue WHERE id_post = '$id'";
        

        mysqli_query($connection, $query);
    }

    public function delete($table = null, $id = null)
    {
        global $connection;

        $query = "DELETE FROM $table WHERE id_post = $id";
        

        mysqli_query($connection, $query);
    }
}