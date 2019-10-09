<?php
    include('../modules/functions.php');

    $response = [];

    if( !empty($_POST['data'] ) ){
        $data = json_decode($_POST['data'], true);

        $sql = "INSERT INTO `service_order`(`id`, `name`, `email`, `comment`)
        VALUES (NULL,'{$data['name']}','{$data['email']}', '{$data['comment']}')";
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