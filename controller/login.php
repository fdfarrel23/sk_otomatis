<?php

class login{
    function check(){
        session_start();
       if(isset($_SESSION['login_id'])){
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user WHERE id='.$_SESSION['login_id'].'');
        $user = mysqli_fetch_assoc($result);
        require_once("view/beranda/index.php");
       }else{
        require_once("view/auth/login.php");
       }
       
    }

    function goToRegister(){
        require_once("view/auth/register.php");
    }

    function autentifikasi(){
        if(isset($_POST['email'])&&isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $auth = login_model::auth($email,$password);
            if($auth){
                header("Location: index.php?controller=beranda&action=goToBeranda");
                die();
            }
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: index.php?controller=login&action=check");
        die();
    }
}

?>