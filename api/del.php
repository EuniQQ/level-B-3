<?php include_once "../base.php";

$db=new DB($_POST['taable']);
echo $db->del($_POST['id']);