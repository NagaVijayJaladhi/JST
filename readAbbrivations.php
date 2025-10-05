<?php
error_log("Start 1");
$servername = "localhost";
$username = "jstapp";
$password = "jaladhi@143";
$dbname = "jstdb";

$conn = new mysqli($servername, $username, $password, $dbname);

$response = array();

if($_POST['id']){
	$fixed = 25;
    $id = $_POST['id'];
    error_log("Start : ". $id+1);
    $end = $id + $fixed;
    error_log("End : ". $end);
    $stmt = $conn->prepare("SELECT ABBID, SHORTFORM, FULLFORM FROM abbrivation WHERE ABBID BETWEEN ? AND ?");
    $stmt->bind_param("ii",$id,$end);
   
    $result = $stmt->execute();
	
	if($result == TRUE){
		
		$response['error'] = false;
        $response['message'] = "Retrieval Successful!";
        $stmt->store_result();
        $stmt->bind_result($courseName,$courseDescription,$courseDuration);
        $stmt->fetch();
        $response['ABBID'] = $courseName;
        $response['SHORTFORM'] = $courseDescription;
        $response['FULLFORM'] = $courseDuration;
		
    } else{
		
        $response['error'] = true;
        $response['message'] = "Incorrect ID";
    }
} else{
    $response['error'] = true;
	$response['message'] = "Insufficient Parameters";
 }
 echo json_encode($response);
?>