<?php

class Database {
    private $pdo;

    public function __construct($host, $dbname, $username, $password){
           
        #การสร้างตัวแปล
        $con = new PDO('mysql:host='.$host.'; dbname=',$dbname. ';',$username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    #function สำหรับ query ข้อมูล
    public function query($show){
        $stmt = $this->pdo->prepare($show);
        $stmt->execute();

        #สร้างเงื่อนไข
        if ($show){
            $data = $stmt->fetchAll();
            return $data;
        }
    }
}
?>