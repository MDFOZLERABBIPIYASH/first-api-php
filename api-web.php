<?php
    $url="http://localhost/apis/api-main.php";
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);


    //Geting data from DB
    //echo $result;


    //Array to string conversion with json
    /*$result=json_decode($result,true);
    echo '<pre>';
    print_r($result);*/


    //Checking Status---
    /*$result=json_decode($result,true);
    if(isset($result['status'])){
        if($result['status']==true){
            echo "Status = True";
        }else{
            echo "No Result Found";
        }
    }else{
        echo "API not Working";
    }*/


    //Array to String Converstion with status check
    /*$result=json_decode($result,true);
    if(isset($result['status'])){
        if($result['status']==true){
            echo "Status = TRUE";
            if(isset($result['result'])){
                echo '<pre>';
                print_r($result['data']);
            }
        }else{
            echo $result['data'];
        }
    }else{
        echo "API not Working";
    }*/

    //API data show in table--
    $result=json_decode($result,true);
    if(isset($result['status'])){
        if($result['status']==true){
            echo "Status = TRUE";
            if(isset($result['result'])){
               ?>
               <table>
                   <tr>
                       <td>ID</td>
                       <td>NAME</td>
                       <td>CLASS</td>
                       <td>CITY</td>
                   </tr>
                   <?php
                   foreach($result['data'] as $list){
                       echo"<tr>
                       <td>".$list['id']."</td>
                       <td>".$list['name'] . "</td>
                       <td>".$list['class'] . "</td>
                       <td>" .$list['city'] . "</td>
                    </tr>";
                   }
                   ?>
               </table>
               <?php
            }
        }else{
            echo $result['data'];
        }
    }else{
        echo "API not Working";
    }
?>