<?php

namespace App\classes;
use App\classes\database;
class Login


{

    public function adminLogInCheck($data){

        $email = $data['email'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM users WHERE Email = '$email' AND password = '$password'";

        if (mysqli_query($this->link,$sql)){

            $queryResult = mysqli_query($this->link,$sql);
            $userInfo = mysqli_fetch_assoc($queryResult);
            if ($userInfo){
                session_start();
                $_SESSION['id'] = $userInfo['id'];
                $_SESSION['name'] = $userInfo['name'];
                header( 'Location: dashbord.php');
            }
            else{
               $massage = "please use a valid email and password";
               return $massage;
            }

        }

        else{
            die('Query problem:'.mysqli_error($this->link));


    }

}
}