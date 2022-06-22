<?php

class login_model{
    public $email;
    public $password;

    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
    }

   

    public static  function auth($email,$password){
        session_start();
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user WHERE email="'.$email.'" AND password="'.$password.'"');
        $data = mysqli_fetch_assoc($result);
        $_SESSION["login_id"] = $data['id'];
        return isset($data);
    }
}

?>