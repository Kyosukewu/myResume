<?php
include_once "../base.php";

$acc=$_POST['acc'];

$chk=$Log->count(['acc'=>$acc]);

if($chk){
    echo 1;
}else{
    echo 0;
}

// $acc=$_POST['acc'];
// $pw=$_POST['pw'];
// $_SESSION['login']=$acc;


// $check=$Log->count(['acc'=>$acc,'pw'=>$pw]);

// if($check>0){
//     to("../backend.php");
// }else{
//     to("../login.php?err=1");
// }


?>