<?php

    include "../db.php";

    $userid = $_POST['userId'];

    $sql = "SELECT * FROM test1 WHERE userId = '{$userid}'";

    $res = $db->query($sql);


    // if($res->num_rows >= 1){
    //     echo json_encode(array('res'=>'bad'));
    // }else{
    //     echo json_encode(array('res'=>'good'));
    // }

?>