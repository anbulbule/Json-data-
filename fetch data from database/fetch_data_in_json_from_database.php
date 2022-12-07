<?php
    try{
        if($conn = new mysqli("localhost","root","","json")){
            
        } else{
            throw new Exception("Connection failed");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    $sql="select * from json_format";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $arraydata = $result->fetch_all(MYSQLI_ASSOC);
        $json_data = json_encode($arraydata,JSON_PRETTY_PRINT); 
        $file_name = date("d-m-Y").".json";
        if(file_put_contents($file_name, $json_data)){
            echo "file created successfully";
        }else{
            echo "failed to create json_data";
        }
    }else{
        echo "No result found";
    }

?>