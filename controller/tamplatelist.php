<?php

class tamplatelist{
    function goToListTamplate(){
        session_start();
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user WHERE id='.$_SESSION['login_id'].'');
        $user = mysqli_fetch_assoc($result);
        $tamplates = TamplateList_Model::getDataTamplate();
        require_once("view/daftar-tamplate/index.php");
    }

    function searchTamplate(){
        session_start();
        $db = Db::getInstance();
        $result = mysqli_query($db,'SELECT * FROM user WHERE id='.$_SESSION['login_id'].'');
        $user = mysqli_fetch_assoc($result);
        $search = $_POST['search'];
        $tamplates = TamplateList_Model::getDataTamplateSearch($search);
        require_once("view/daftar-tamplate/index.php");
    }

    function updateData(){
        $temp = "resource/assets/templates/";
        if (!file_exists($temp))
            mkdir($temp);
        
        $title_name      = $_POST['title_name'];
        $id              = $_POST['id'];
        $fileupload      = $_FILES['fileupload']['tmp_name'];
        $ImageName       = $_FILES['fileupload']['name'];
        $ImageType       = $_FILES['fileupload']['type'];

        $db = Db::getInstance();

        // $result_file = mysqli_query($db,"SELECT * FROM tamplate_sk WHERE id=$id");
        // $data_file = mysqli_fetch_assoc($result);
        // try{
        //     unlink($data_file['file_url']);
        // }catch(Exception $e){}

        if (!empty($fileupload)){
            $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt); // Extension
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName   = str_replace(' ', '', $title_name.'.'.$ImageExt);
          
            move_uploaded_file($_FILES["fileupload"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

            mysqli_query($db,'UPDATE tamplate_sk SET name="'.$title_name.'",file_url="'.$temp.$NewImageName.'" WHERE id='.$id.'');
          
           
        } else {
            mysqli_query($db,'UPDATE tamplate_sk SET name="'.$title_name.'" WHERE id='.$id.'');
        }
    }

    function insertData(){
        $temp = "resource/assets/templates/";
        if (!file_exists($temp))
            mkdir($temp);
        
        $title_name      = strtoupper($_POST['title_name']);
        $id              = $_POST['id'];
        $fileupload      = $_FILES['fileupload']['tmp_name'];
        $ImageName       = $_FILES['fileupload']['name'];
        $ImageType       = $_FILES['fileupload']['type'];

        $db = Db::getInstance();

        if (!empty($fileupload)){
            $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt); // Extension
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName   = str_replace(' ', '', $title_name.'.'.$ImageExt);
          
            move_uploaded_file($_FILES["fileupload"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

            mysqli_query($db,"INSERT INTO tamplate_sk (name, file_url, date) VALUES ('$title_name ', '".$temp.$NewImageName."', '".date("Y-m-d")."')");
          
           
        } else {
           
        }
    }

    function deleteData(){
        $id              = $_POST['id'];
        $db = Db::getInstance();
        $result = mysqli_query($db,"SELECT * FROM tamplate_sk WHERE id=$id");
        $data = mysqli_fetch_assoc($result);
        try{
            unlink($data['file_url']);
        }catch(Exception $e){}
        $result_delete = mysqli_query($db,"DELETE FROM tamplate_sk WHERE id=$id");
    }
}

?>