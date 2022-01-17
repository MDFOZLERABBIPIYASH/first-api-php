<?php
    if(isset($_GET['id']) && isset($_GET['id'])>0){
    $url="http://localhost/apis/curd/program/ix-delete.php?key=sjjklfjafaw4994asdklf";
    $ch=curl_init();
    $arry['id']=$_GET['id'];
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$arry);
    $result=curl_exec($ch);
    curl_close($ch);

    $result=json_decode($result,true);
    echo json_encode($result,true);
    //print_r($result);
    if(isset($result['status']) && isset($result['code']) && isset($result['code'])==7){
        header('location:api-index.php');
        die();
    }else{
        echo $result['data'];
    }
    }else{
        header('location:api-index.php');
        die();
    }
?>