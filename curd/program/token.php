<?php

include "db.php";
header('Content-Type: Application/json');

if(isset($_GET['key'])){
    $key=mysqli_real_escape_string($conn,$_GET['key']);
    $checkres=mysqli_query($conn,"select status from api_token where token = '$key'");
    if(mysqli_num_rows($checkres)>0){
        $checkrow=mysqli_fetch_assoc($checkres);

        if($checkrow['status']==5){
           
        }else{
            echo json_encode(['status'=>'False', 'data'=>'API Key Decativated', 'code'=>3]);
        }  
    }else{
        echo json_encode(['status'=>'False', 'data'=>'Please Provide Valid API Key', 'code'=>2]);
    }

}else{
    echo json_encode(['status'=>'False', 'data'=>'Please Provide API Key', 'code'=>1]);
}
?>