<?php 
session_start();

class LoginController 
{

    /* Checks if user is in the database */
    public function checkUser()
    {

        $result = App::get('database')->checkUser('users', [
            'login' => $_POST['login'],
            'password' => $_POST['password']
        ]); 

        foreach($result as $res){
            if(count($result) == 1){
                $_SESSION["role"] = $res->role;
            }
        }
        
        if(!$result){
            echo "<script>alert('Ошибка авторизации');</script>";
            echo "<a href='/'>Вернутся назад</a>";
            die();
        }

        header('Location: /');
            
    }


    /* Exit session */
    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}