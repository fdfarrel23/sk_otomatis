<?php

class beranda{
    function goToBeranda(){
        session_start();
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user WHERE id='.$_SESSION['login_id'].'');
        $user = mysqli_fetch_assoc($result);
        require_once("view/beranda/index.php");
    }
}

?>