<?php
    include "db.php";
    header('Content-Type: Application/json');

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
?>