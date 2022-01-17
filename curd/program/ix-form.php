<?php

include "token.php";

if(!isset($status)){
    if(isset($_POST['name']) && isset($_POST['name']) && isset($_POST['name'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $class=mysqli_real_escape_string($conn,$_POST['class']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);
        mysqli_query($conn,"INSERT INTO student (name,class,city) VALUES ('$name','$class','$city')");
        $data = "DATA Inserted";
        $status= "True";
        $code="8";
    }else{
        $data = "DATA not inserted";
        $status= "True";
        $code="9";
    }
            
}
echo json_encode(['status'=> $status, 'data'=>$data,'code'=>$code]);
?>