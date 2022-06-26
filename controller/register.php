<?php

class register{

    function goToLogin(){
        require_once("view/auth/login.php");
    }

    function registerAction(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = Db::getInstance();
        $result_insert = mysqli_query($db,"INSERT INTO user (email, password) VALUES ('".$email."', '".$password."')");
       if($result_insert){
        require_once("model/login.php");
        $auth = login_model::auth($email,$password);
        if($auth){
            header("Location: index.php?controller=beranda&action=goToBeranda");
            die();
        }
       }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
    }

}

?>