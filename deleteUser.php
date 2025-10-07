<?php
	include "dbconfig.php";
	if(isset($_POST["id"]) && !empty($_POST["id"])){
		$sql = "DELETE FROM user WHERE USERID = ?";
		$result = $conn->query($insertSql);
        if ($result == TRUE) {
            header("location: viewUser.php");
            exit();
        } else{
            echo "User Not Deleted. Try Again...";
        }
    }
}
?>