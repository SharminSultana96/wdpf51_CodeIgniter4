<?php
require 'db_connection.php';

$data = json_decode(file_get_contents("php://input"));

if(
    isset($data->userfirstname) 
    && isset($data->userlastname) 
    && isset($data->useremail) 
    && !empty(trim($data->userfirstname))
    && !empty(trim($data->userlastname))
    && !empty(trim($data->useremail))
) {
    $userfirstname = mysqli_real_escape_string($db_conn,trim($data->userfirstname));
    $userlastname = mysqli_real_escape_string($db_conn,trim($data->userlastname));
    $useremail = mysqli_real_escape_string($db_conn,trim($data->useremail));
    $userpass = mysqli_real_escape_string($db_conn,trim($data->userpass));
    $usertype = mysqli_real_escape_string($db_conn,trim($data->usertype));
    $userbranch_id = mysqli_real_escape_string($db_conn,trim($data->userbranch_id));
    $date = date('Y-m-d');

    $add = mysqli_query($db_conn, "INSERT INTO users (firstname,lastname,email,password,type,branch_id) VALUES ('$userfirstname','$userlastname','$useremail','$userpass','$usertype','$userbranch_id')");

    


    if($add){
        $last_id = mysqli_insert_id($db_conn);
        echo json_encode(["success" => true,"insertid" => $id]);
        return;
}else{
    echo json_encode(["success" => false, "msg" => "Please Try Again"]);
    return;
    }
}else{
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}