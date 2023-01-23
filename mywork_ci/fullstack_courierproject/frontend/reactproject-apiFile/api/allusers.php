<?php
require 'db_connection.php';
$allUsers = mysqli_query($db_conn, "SELECT * FROM users");
if(mysqli_num_rows($allUsers) > 0){
    while($row = mysqli_fetch_array($allUsers)){
        $viewjson["id"] = $row['id'];
        $viewjson["firstname"] = $row['firstname'];
        $viewjson["lastname"] = $row['lastname'];
        $viewjson["email"] = $row['email'];
        $viewjson["type"] = $row['type'];
        $viewjson["branch_id"] = $row['branch_id'];

        $json_array["mydata"][] = $viewjson;
    }
    // echo json_encode(["success"=>true,"userlist"=>$json_array]);
    echo json_encode($json_array);
    return;
}else{
    echo json_encode(["success" => false]);
    return;
}