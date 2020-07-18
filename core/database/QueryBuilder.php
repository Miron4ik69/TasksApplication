<?php 


class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $parameters) 
    {
        try{

            $pageNumber = $parameters["pageNumber"];
            $perPage = 3;

            if($pageNumber["page"] == ''){
                $page = "1";
            } else {
                $page = $pageNumber["page"];
            }
            
            $start = ($page - 1) * $perPage;


            /* get data*/
            $statement = $this->pdo->prepare("SELECT * FROM {$table} LIMIT {$start}, {$perPage}");

            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_CLASS);

            /* Get count */

            $stmt = $this->pdo->prepare("SELECT * FROM {$table}");
            $stmt->execute();
            $count = $stmt->rowCount();

            $pages = ceil($count/$perPage);


            return $array = [
                'pages' => $pages,
                'res' => $result
            ];
            
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode( ",", array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function edit($table, $parameters)
    {
        try{
            $statement = $this->pdo->prepare("select * from {$table} where id={$parameters['id']}");
            $statement->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function updateTask($table, $parameters) 
    {
        $id = $parameters["id"];
        $text = $parameters["text"];

        try{
            $statement = $this->pdo->prepare("update {$table} set text='{$text}' where id={$id}");
            $statement->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function sort($table, $parameters)
    {

       $filter = $parameters["filter"];

        try{
            if($filter == "sortName"){

                $statement = $this->pdo->prepare("select * from {$table} order by name asc");
        
               }elseif($filter == "sortEmail"){
        
                $statement = $this->pdo->prepare("select * from {$table} order by email asc");
        
               }elseif($filter == "sortStatus"){
        
                $statement = $this->pdo->prepare("select * from {$table} order by status asc");
        
               }
        
               $statement->execute();
               return $statement->fetchAll(PDO::FETCH_CLASS);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function checkUser($table, $parameters)
    {

        $login = $parameters['login'];
        $password = $parameters['password'];
        
        try{
            $statement = $this->pdo->prepare("select * from {$table} where login = '{$login}' and password = '{$password}'");
            $statement->execute();
 
        return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function status($table, $parameters)
    {
        $status = $parameters["status"];
        $id = $parameters["id"];

        try{
            $statement = $this->pdo->prepare("update {$table} set status={$status} where id={$id}");
            $statement->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}