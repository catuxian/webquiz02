<?php
    include_once "../base.php";
    $type=$_GET['type'];
    $list=$News->all(['type'=>$type]);
    foreach($list as $l){
        echo "<a onclick='getPost(".$l['id'].")'>";
        echo $l['title'];
        echo "</a>";
    }
?>