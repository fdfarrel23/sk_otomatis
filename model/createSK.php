<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

class CreateSK_Model{  

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

    public static function mergePDF($template_url,$file_url){

        $pdf = new \Jurosh\PDFMerge\PDFMerger;

        // add as many pdfs as you want
        $pdf->addPDF($template_url, 'all')
        ->addPDF($file_url, 'all');

        // call merge, output format `file`
        $pdf->merge('file', 'resource/assets/templates_result/file_sk.pdf');


        $file = 'resource/assets/templates_result/file_sk.pdf';

        if(!file_exists($file)){ // file does not exist
            die('file not found');
        } else {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=output file sk.pdf");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");

            // read the file from disk
            readfile($file);
            unlink($file);
        }
      
    }

    
    
}



?>