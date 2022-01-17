<?php

// This code is use for cheaking status and deactivet API key when you need

    include "db.php";
    header('Content-Type: Application/json');
    
    if(isset($_GET['key'])){
        $key=mysqli_real_escape_string($conn,$_GET['key']);
        $checkres=mysqli_query($conn,"select status from api_token where token = '$key'");
        if(mysqli_num_rows($checkres)>0){
            $checkrow=mysqli_fetch_assoc($checkres);

            //checking status---
            /*echo "<pre>";
            print_r($checkres);
            die();*/

            if($checkrow['status']==1){
                $sql = "SELECT * FROM student";
                $result=mysqli_query($conn,$sql);
                $data = mysqli_num_rows($result);
                
                if($data>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $array[]=$row;
                    }
                    echo json_encode(['status'=> 'true', 'data'=>$array, 'result'=>'found']);
                }else{
                    echo json_encode(['status'=>'true', 'data'=>'Not DATA Found', 'result'=>'Not']);
                }
            }else{
                echo json_encode(['status'=>'False', 'data'=>'API Key Decativated', 'result'=>'Not']);
            }  
        }else{
            echo json_encode(['status'=>'False', 'data'=>'Please Provide Valid API Key', 'result'=>'Not']);
        }
    
    }else{
        echo json_encode(['status'=>'False', 'data'=>'Please Provide API Key', 'result'=>'Not']);
    }
?>