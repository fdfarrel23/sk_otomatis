<?php

class CreateSK_Model{

    public $pdffiles = array();

    public static function getPegawai(){
        require_once("model/pegawai.php");
        $list = [];
        $db = Db::getInstance();
        if($result = mysqli_query($db,"SELECT * FROM pegawai")) {
            while($row = mysqli_fetch_assoc($result)){
                $list[] = new Pegawai_Model($row['id'],$row['name']);
            }
        }
        return $list;
    }

    public static function mergePDF(){
      
        require_once('resource/assets/library/fpdf_merge.php');

        $merge = new FPDF_Merge();
        $merge->add('resource/assets/templates/ktp.pdf');
        $merge->add('resource/assets/templates/doc2.pdf');
        $merge->output();
      
    }

    
    
}



?>