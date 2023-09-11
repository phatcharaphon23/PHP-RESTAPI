

<?php
#ไฟล์ index.php เป็นไฟล์ไว้ดึงข้อมูลมาจากฐานข้อมูลและเมื่อ cilent require ก็จะส่งข้อมูลกลับไป

    require_once('dbconfig.php');

    $db = new Database('localhost', 'persons', 'root', '');

    #เงื่อนไขไว้เช็ค
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        echo json_encode($db->query('SELECT * FROM persons'));
    } el
?>