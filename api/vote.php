<?php
    include_once "../base.php";

    $opt=$Que->find($_POST['opt']);
    $que=$Que->find($opt['parent']);
    $opt['count']++;
    $que['count']++;
    $Que->save($que);
    $Que->save($opt);
    to("../index.php?do=result&q=".$que['id']);
?>