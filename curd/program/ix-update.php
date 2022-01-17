<?php

include "token.php";

if(!isset($status)){
    if(isset($_POST['name']) && isset($_POST['class']) && isset($_POST['city']) && isset($_POST['id'])){
        $id=mysqli_real_escape_string($conn,$_POST['id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $class=mysqli_real_escape_string($conn,$_POST['class']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);
        mysqli_query($conn,"UPDATE student SET name='$name', class='$class',city='$city' WHERE id='$id'");
        $data = "DATA Updated";
        $status= "True";
        $code="10";
    }else{
        $data = "DATA not Updated";
        $status= "True";
        $code="11";
    }
            
}
echo json_encode(['status'=> $status, 'data'=>$data,'code'=>$code]);
?>