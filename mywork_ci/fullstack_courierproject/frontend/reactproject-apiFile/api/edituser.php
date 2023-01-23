<?php
require 'db_connection.php';

$data = json_decode(file_get_contents("php://input"));

if (
	isset($data->userfirstname)
	&& isset($data->userlastname)
	&& isset($data->useremail)
	&& isset($data->userids)
	&& !empty(trim($data->userfirstname))
	&& !empty(trim($data->userlastname))
	&& !empty(trim($data->useremail))
	&& !empty(trim($data->userids))
) {

	$username = mysqli_real_escape_string($db_conn, trim($data->userfirstname));
	$username = mysqli_real_escape_string($db_conn, trim($data->userlastname));
	$useremail = mysqli_real_escape_string($db_conn, trim($data->useremail));
	$userpass = mysqli_real_escape_string($db_conn, trim($data->userpass));
	$usertype = mysqli_real_escape_string($db_conn, trim($data->usertype));
	$userbranch_id = mysqli_real_escape_string($db_conn, trim($data->userbranch_id));
	$userids = mysqli_real_escape_string($db_conn, trim($data->userids));

	$add = mysqli_query($db_conn, "update users set firstname ='$userfirstname', lastname ='$userlastname', email ='$useremail', password='$userpass', type='$usertype', branch_id='$userbranch_id' where id='$userids'");

	if ($add) {
		echo json_encode(["success" => true]);
		return;
	} else {
		echo json_encode(["success" => false, "msg" => "Please Try Again"]);
		return;
	}
} else {
	echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
	return;
}