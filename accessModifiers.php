<!DOCTYPE html>

<?php
include "dbconfig.php";
session_start();
$inactivity_time = 10 * 60;
if (isset($_SESSION['last_timestamp']) && (time() - $_SESSION['last_timestamp']) > $inactivity_time) {
    session_unset();
    session_destroy();
    header("Location: joinUs.php");
    exit();
  } else {
    session_regenerate_id(true);
    $_SESSION['last_timestamp'] = time();
  }
?>

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
            <a href="home" class="navbar-brand">
                <h1 class="m-0 text-primary"> <img src="img/JST.png" style="width: 80px; height: 80px;"> Jaladhi Soft Technology </h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
					<a href="jstHome" class="nav-item nav-link active"> Java </a>
                    <a href="pyHome" class="nav-item nav-link"> Python </a>
					<a href="htmlHome" class="nav-item nav-link"> HTML </a>
                    <a href="dbHome" class="nav-item nav-link"> Data Base </a>
					<a href="gkHome" class="nav-item nav-link"> GK </a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"> Logout <i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4"> Java Training </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> Java </a></li>
                        <li class="breadcrumb-item"><a href="#"> J2SE </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Access Modifiers </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Access Modifiers </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-4" align="justify"> Because method and variable members are usually given access control in exactly the same way. Whereas a class can use just two of the four access control levels, members can use all four : Public, Private, Protected, Default.</p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Public </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Definition : </b>  Public members of a class are accessible everywhere outside the class. So, any other program can read them and use them. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
					<p class="mb-2" align="justify"> 1. Public can be applied to variables. </p>
				    <p class="mb-2" align="justify"> 2. Public can be applied to methods. </p>
					<p class="mb-2" align="justify"> 3. Public can be applied to classes. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Private </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Definition : </b>  Private members of a class are not accessible anywhere outside the class. They are accessible only within the class by the methods of that class. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
					<p class="mb-2" align="justify"> 1. Private can be applied to variables. </p>
					<p class="mb-2" align="justify"> 2. Private can be applied to methods. </p>
				    <p class="mb-2" align="justify"> 3. Private cannot be applied to classes. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Protected </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> Protected members of a class are accessible outside the class, but generally, within the same directory (Package). Protected members can be accessed by a subclass is in a different package through inheritance. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
					<p class="mb-2" align="justify"> 1. Protected can be applied to variables. </p>
					<p class="mb-2" align="justify"> 2. Protected can be applied to methods. </p>
					<p class="mb-2" align="justify"> 3. Protected cannot be applied to classes. </p>
					</ol>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Default </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> If no access specifier is written by the programmer, then the Java compiler uses a ‘default’ access specifier. ‘Default’ members are accessible outside the class, but within the same directory (Package). </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
					<p class="mb-2" align="justify"> 1. Default can be applied to variables. </p>
					<p class="mb-2" align="justify"> 2. Default can be applied to methods. </p>
					<p class="mb-2" align="justify"> 3. Default can be applied to classes. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Can be applied to Class, Methods, Instance Variables, Static Variables, Local Variables </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Access Modifiers </b> </th> <th scope="col"> <b> Class </b> </th> <th scope="col"> <b> Method </b> </th> <th scope="col"> <b> Instance Variables </b> </th> <th scope="col"> <b> Static Variables </b> </th> <th scope="col"> <b> Local Variables </b> </th></tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Public </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> <td> No </td> </tr>
							<tr> <td align="justify"> Private </td> <td> No </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> <td> No </td> </tr>
							<tr> <td align="justify"> Protected </td> <td> Yes </td> <td> No </td> <td> No </td> <td> Yes </td> <td> No </td> </tr>
							<tr> <td align="justify"> Default </td> <td> No </td> <td> Yes </td> <td> No </td> <td> Yes </td> <td> Yes </td> </tr>	
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Determining Access to Class Members </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Visibility </b> </th> <th scope="col"> <b> Public </b> </th> <th scope="col"> <b> Private </b> </th> <th scope="col"> <b> Protected </b> </th> <th scope="col"> <b> Default </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> From the same class </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> </tr>
							<tr> <td align="justify"> From any class in the same package </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> <td> No </td> </tr>
							<tr> <td align="justify"> From a subclass in the same package </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> <td> No </td> </tr>
							<tr> <td align="justify"> From a subclass outside the same package </td> <td> Yes </td> <td> Yes, Through Inheritance </td> <td> No </td> <td> No </td> </tr>	
							<tr> <td align="justify"> From any non-subclass class outside the package </td> <td> Yes </td> <td> No </td> <td> No </td> <td> No </td> </tr>	
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr>   
								<td> <a href="variables.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Variables </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="nonAccessModifiers.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Non Access Modifiers <i class="fa fa-arrow-right ms-3"></i></a> 
								 </td> 
							</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		
		<br/> <br/> <br/> <br/> 
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