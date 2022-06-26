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
        $klasifikasi = $_POST['klasifikasi'];
        $departement = $_POST['departement'];
        $prodi = $_POST['prodi'];
        $unit = $_POST['unit'];
        $template = $_POST['template'];
        $pegawai = $_POST['pegawai'];
        $perihal = $_POST['perihal'];
        // var_dump($_FILES["fileupload"]["tmp_name"]);
        $db = Db::getInstance();
        $result = mysqli_query($db,"SELECT * FROM tamplate_sk WHERE id=$template");
        $data = mysqli_fetch_assoc($result);

       if(mysqli_query($db,"INSERT INTO file_sk (key_word,klasifikasi,departement,prodi,unit,template,pegawai) VALUES ('$perihal','$klasifikasi','$departement','$prodi','$unit',$template,$pegawai)")){
        $file_out = CreateSK_Model::mergePDF($data["file_url"],$_FILES["fileupload"]["tmp_name"]);
       }
       
    }

}

?>