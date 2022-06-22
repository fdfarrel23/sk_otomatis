<?php


class TamplateList_Model{
    public $id;
    public $sk_name;
    public $url_file;
    public $date_created;

    public function __construct($id,$sk_name,$url_file,$date_created){
        $this->id= $id;
        $this->sk_name = $sk_name;
        $this->url_file = $url_file;
        $this->date_created = $date_created;
    }

    public static function getDataTamplate(){
        $list = [];
        $db = Db::getInstance();
        if($result = mysqli_query($db,"SELECT * FROM tamplate_sk")) {
            while($row = mysqli_fetch_assoc($result)){
                $list[] = new TamplateList_Model($row['id'],$row['name'],$row['file_url'],$row['date']);
            }
        }
        return $list;
    }

    public static function getDataTamplateSearch($value){
        $list = [];
        $db = Db::getInstance();
        if($result = mysqli_query($db,"SELECT * FROM tamplate_sk WHERE name LIKE BINARY '%".strtoupper($value)."%' ")) {
            while($row = mysqli_fetch_assoc($result)){
                $list[] = new TamplateList_Model($row['id'],$row['name'],$row['file_url'],$row['date']);
            }
        }
        return $list;
    }
}

?>