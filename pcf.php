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
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"> <img src="img/JST.png" style="width: 80px; height: 80px;"> Jaladhi Soft Technology </h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
					<a href="jstHome.php" class="nav-item nav-link active"> Java </a>
                    <a href="pyHome.php" class="nav-item nav-link"> Python </a>
					<a href="htmlHome.php" class="nav-item nav-link"> HTML </a>
                    <a href="dbHome.php" class="nav-item nav-link"> Data Base </a>
					<a href="gkHome.php" class="nav-item nav-link"> General Knowledge </a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"> Logout <i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Training</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">Development Tool</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Pivotal Cloud Foundry (PCF) </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Pivotal Cloud Foundry (PCF) </h1>
                    <p class="mb-4" align="justify"> <b> Pivotal Cloud Foundry (PCF) </b> is a cloud-native platform that is designed to build, deploy, and manage applications at scale. PCF provides a platform for developers to build and deploy cloud-native applications using modern development frameworks and languages, such as Spring, .NET, Node.js, and Ruby. It also provides a range of services, including data management, messaging, and authentication, that developers can use to build and deploy their applications.  </p>
                </div>
            </div>
        </div>
 
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Cloud Foundry (CF)  </h4>
                    <p class="mb-4" align="justify"> Cloud Foundry (CF) is an open source cloud computing platform with an emphasis on the developers’ user experience. It focuses on optimizing the development workflow from development, through testing, and into production while helping to automating these flows. </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of Pivotal Cloud Foundry (PCF)  </h4>
                    <p class="mb-4" align="justify"> 1. Faster Development Iteration. </p>
                    <p class="mb-4" align="justify"> 2. Improved Efficiency with IT Operations Management. </p>
                    <p class="mb-4" align="justify"> 3. Easy Portability with Applications </p>
                    <p class="mb-4" align="justify"> 4. Greater Developer Productivity </p>
                    <p class="mb-4" align="justify"> 5. High Availability </p>
                    <p class="mb-4" align="justify"> 6. Health Management for Applications </p>
                    <p class="mb-4" align="justify"> 7. Centralized platform Administration </p>
                    <p class="mb-4" align="justify"> 8. Seamless Cloud Platform Usage. </p>
                    <p class="mb-4" align="justify"> 9. Dynamic Routing. </p>
                    <p class="mb-4" align="justify">10. Increased Time to Production. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Cloud Foundry Runtime Components :  </h4>
                    <p class="mb-4" align="justify"> Cloud Foundry components include a self-service application execution engine, an automation engine for application deployment, and lifecycle management, and a scriptable command line interface (CLI). Also, an integration with development tools to ease deployment processes. Cloud Foundry has an open architecture that includes a buildpack mechanism for adding frameworks, an application services interface, and a cloud provider interface. </p>
					<p class="mb-4" align="justify"> <b class="text-success"> Routing </b>  </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> Router : </b> A unique route exist for each application. Cloud Foundry uses this router to map incoming request to the right application. </li>
					</ol>
					<p class="mb-4" align="justify"> <b class="text-success"> Authentication  </b> </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> OAuth2 Server (UAA) and Login Server : </b> User Authorization And Authentication (UAA), provides identity, security and authorization services. </li>
					</ol>
					<p class="mb-4" align="justify"> <b class="text-success"> App Lifecycle </b> </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> Cloud Controller and Diego Brain : </b> Cloud Controller provide restful interface to domain object, it reponse to client like CLI, WEB UI, Spring STS </li>
						<li class="mb-2" align="justify"> <b class="text-success"> nsync, Cell Reps,BBS : </b> The nsync, BBS, and Cell Rep components work together along a chain to keep apps running. At one end is the user. At the other end are the instances of applications running on widely-distributed VMs, which may crash or become unavailable. </li>
					</ol>
					<p class="mb-4" align="justify"> <b class="text-success"> App Storage and Execution </b> </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> Blobstore : </b> Storage for droplets and binary large files. Eliminates the need to reupload/restage when scaling application. NFS mounted storage or Amazon S3 store </li>
						<li class="mb-2" align="justify"> <b class="text-success"> Diego Cell : </b> Diego is a self healing container system that attempts to keep the correct number of instances running in Diego cells to avoid network failures and crashes. </li>
					</ol>
					
					<p class="mb-4" align="justify"> <b class="text-success"> Services </b> </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> Service Brokers : </b> Provide an interface for native and external third party services. For Example, Mail Server, Messaging etc. </li>
					</ol>
					
					<p class="mb-4" align="justify"> <b class="text-success"> Messaging </b> </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> Internal HTTPS and BBS : </b> Bulletin Board System (BBS), central co ordination for activities (actions) within cloud foundry. </li>
					</ol>
					
					<p class="mb-4" align="justify"> <b class="text-success"> Metrics and Logging </b> </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> Loggregator : </b> Master logging process, which accepts logs from application instances and cloud foundry components. You can use cf log command to see the logs. It is non persistent, temporary log storage. It accumulates logs from multiple sources and aggregates by application. </li>
						<li class="mb-2" align="justify"> <b class="text-success"> Metrics Collector : </b> The metrics collector gathers metrics and statistics from the components. Operators can use this information to monitor a Cloud Foundry deployment. </li>
					</ol>
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