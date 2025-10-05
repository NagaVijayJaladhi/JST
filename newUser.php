<?php
	include "dbconfig.php";
    
    $fname = $uname = $pass = $mobile = "";
	$red_msg = "";
	
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $full_name = trim($_POST["fullName"]);
        $userName = trim($_POST["userName"]);
        $password = trim($_POST["password"]);
        $confirmPass = trim($_POST["conPassword"]);
        $email = trim($_POST["email"]);
        $mobile_no = trim($_POST["mobileNo"]);
        $userId = rand();
			
		if(!filter_var($full_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $red_msg = "Please Enter a valid Full Name.";
        } else{
            $fname = $full_name;
        }
        
        if(!filter_var($userName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $red_msg = $red_msg . "Please Enter a valid User Name.";
        } else{
            $uname = $userName;
        }
        
        if (strcmp($password, $confirmPass) !== 0) {
            $red_msg = $red_msg . 'Password and Confirm Password Should be Same.';
        } else {
           $pass = $password;
        }
 	    
		if (!preg_match ("/^[0-9]*$/", $mobile_no)){  
			$red_msg = $red_msg . " Mobile Alloed Only Numeric.";
		} else {  
			$mobile = $mobile_no;  
		} 
        
		if(empty($red_msg)) {
            
			$insertSql = "INSERT INTO `user`(`USERID`, `FULLNAME`, `USERNAME`, `PASSWORD`, `EMAIL`, `MOBILENO`) VALUES ('$userId','$fname','$uname','$pass','$email','$mobile')";
			$result = $conn->query($insertSql);
			
			if ($result == TRUE) {
			    $red_msg = "New Record Created Successfully. You can Login";
			    header("location: joinUs.php");
			} else {
			    $red_msg = "Oops! Something went Wrong. Please Try Again Later.";
			}
		} 
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> JST - Jaladhi Soft Technology </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/JST.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script type="text/javascript">
		function disableBack() { window.history.forward(); }
		setTimeout("disableBack()", 0);
		window.onunload = function () { null };
		document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"> <img src="img/JST.png" style="width: 80px; height: 80px;"> Jaladhi Soft Technology </h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link"> Home </a>
                    <a href="about.php" class="nav-item nav-link"> About Us </a>
                    <a href="training.php" class="nav-item nav-link"> Training </a>
					<a href="development.php" class="nav-item nav-link"> Development </a>
                    <a href="contact.php" class="nav-item nav-link"> Contact Us </a>
                </div>
                <a href="joinUs.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"> Login <i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
		
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4"> New User </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> Pages </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> New User </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"> New User Registration </h1>
                </div>
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/newUser.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h6 style="color:red"> <?php echo $red_msg; ?> </h6> 
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="row g-4">
                                         <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="fullName" name="fullName" placeholder="Enter Your Full Name" required>
                                                <label for="fullName">Enter Your Full Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="userName" name="userName" placeholder="Enter Your User Name" required>
                                                <label for="userName">Enter Your User Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0" id="password" name="password" placeholder="Enter Your Password" required>
                                                <label for="password">Enter Your Password </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0" id="conPassword" name="conPassword" placeholder="Enter Your Confirm Password" required>
                                                <label for="conPassword">Enter Your Confirm Password </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="mobileNo" name="mobileNo" placeholder="Enter Your Mobile Number" required>
                                                <label for="mobileNo">Enter Your Mobile Number </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Enter Your Email ID " required>
                                                <label for="email">Enter Your Email ID </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit"> New User Registration </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container-fluid bg-dark text-white-50 footer mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row g-5">
					<?php
						$sql = "SELECT * FROM `socialmedia`";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
					?>
                    <div class="col-lg-2 col-md-6">
                         <a href="<?php echo $row['SMURL']; ?>"> <h3 class="text-white mb-4"> <?php echo $row['SMNAME']; ?> </h3> </a>
                    </div>
					<?php       
							}
						}
					?>
                </div>
            </div>
            <div class="container text-center">
                <div class="copyright">
                    <div class="row g-5">
                        <div class="col-md-12 text-center mb-3 mb-md-0">
                           2024 &copy;  All Copy Rights Reserved By <a class="border-bottom" href="#"> Jaladhi Soft Technology (JST) </a>. Designed, Developed &amp; Maintained By <a class="border-bottom" href="#"> Jaladhi Naga Vijay (JNV) </a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>