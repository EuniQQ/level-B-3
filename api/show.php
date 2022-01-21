<?php include_once "../base.php";

$movie=$Movie->find($_POST['id']);
//寫法一:
// if($movie['sh']==1){
//     $movie['sh']=0;
// }else{
//     $movie['sh']=1;
// }

// 寫法二:
$movie['sh']=($movie['sh']+1)%2;

$Movie->save($movie);