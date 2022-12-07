<?php
    if($_POST['fname'] !='' && $_POST['education'] !='' && $_POST['city'] !=''){
        $fname = $_POST['fname'];
        $education = $_POST['education'];
        $city = $_POST['city'];

       if(file_exists('json_data.json')){
        $current_data = file_get_contents("json_data.json");
        $arraydata = json_decode($current_data, true);
        $newdata = array(
            'first name'=> $fname,
            'education'=> $education,
            'city'=> $city
        );
        $arraydata[]= $newdata;
        $json_data = json_encode($arraydata,JSON_PRETTY_PRINT);

        if(file_put_contents('json_data.json',$json_data)){
            echo "data inserted into Json format";
        }else{
            echo "data failed to insert into Json format";
        }
       }else{
        echo "Json file not exist";
       }

    }else{
        echo "Please filled all fields ";
    }
?>