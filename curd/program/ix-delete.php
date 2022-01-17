<?php

include "token.php";

if(!isset($status)){
    if(isset($_POST['id']) && $_POST['id']>0){
        $id=mysqli_real_escape_string($conn,$_POST['id']);
        mysqli_query($conn,"DELETE FROM student WHERE id='$id'");
        $data = "DATA Deleted";
        $status= "True";
        $code="7";
    }else{
        $data = "Provide ID";
        $status= "True";
        $code="6";
    }
            
}
echo json_encode(['status'=> $status, 'data'=>$data,'code'=>$code]);
?>