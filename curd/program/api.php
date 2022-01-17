<?php

include "token.php";
header('Content-Type: Application/json');

if(!isset($status)){
            $sql = "SELECT * FROM student";
            $result=mysqli_query($conn,$sql);
            $data = mysqli_num_rows($result);
            
            if($data>0){
                while($row=mysqli_fetch_assoc($result)){
                    $array[]=$row;
                }
                echo json_encode(['status'=> 'true', 'data'=>$array, 'result'=>'found', 'code'=>5]);
            }else{
                echo json_encode(['status'=>'true', 'data'=>'Not DATA Found', 'code'=>4]);
            }
        }else{
            echo json_encode(['status'=>'False', 'data'=>'API Key Decativated', 'code'=>3]);
        }
?>