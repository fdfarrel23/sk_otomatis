<?php

class createSK{

    function goToCreateSK(){
        require_once("model/tamplatelist.php");
        session_start();
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user WHERE id='.$_SESSION['login_id'].'');
        $user = mysqli_fetch_assoc($result);
        $tamplates = TamplateList_Model::getDataTamplate();
        $employees = CreateSK_Model::getPegawai();
        require_once("view/create-tamplate/index.php");
    }

    function createOutSK(){
        $file_out = CreateSK_Model::mergePDF();
    }

}

?>