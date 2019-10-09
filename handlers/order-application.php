<?php
    include('../modules/functions.php');

    $response  = [];

    if( !empty($_POST['data'] ) ){
        $data = json_decode($_POST['data'], true);

        $sql = "INSERT INTO `order_application`(`id`, `name`, `phone`, `email`, `comment`) 
        VALUES (NULL,'{$data['name']}','{$data['phone']}','{$data['email']}','{$data['comment']}' )";
        $result = mysqli_query($db, $sql);

        if( $result ){
            $response['result'] = 'success';
        }else{
            $response['result'] = 'fail';
        }
    }else{
        $response['result'] = 'fail';
    }
    echo json_encode($response);
?>