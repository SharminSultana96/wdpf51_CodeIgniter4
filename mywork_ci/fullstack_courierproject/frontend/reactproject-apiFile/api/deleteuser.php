<?php
require 'db_connection.php';

$data = json_decode(file_get_contents("php://input"));

if (
    isset($data->userid)
    && !empty(trim($data->userid))
) {

    // $userids = mysqli_real_escape_string($db_conn, trim($data->userid));
    $userids = $data->userid;
    $result = mysqli_query($db_conn, "DELETE FROM users where id='$userids'");

    if ($result) {
        echo json_encode(["success" => "Successfully Deleted"]);
        return;
    } else {
        echo json_encode(["success" => false, "msg" => "Please Try Again"]);
        return;
    }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}