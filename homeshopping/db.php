 <?php
  session_start();
  
  $db = new mysqli("localhost","mutalroot","suin!QAZ","homeshopping") or die ("Can't access DB");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>
  