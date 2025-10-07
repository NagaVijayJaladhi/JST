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
					<a href="jstHome.php" class="nav-item nav-link"> Java </a>
                    <a href="pyHome.php" class="nav-item nav-link"> Python </a>
					<a href="htmlHome.php" class="nav-item nav-link"> HTML </a>
                    <a href="dbHome.php" class="nav-item nav-link"> Data Base </a>
					<a href="gkHome.php" class="nav-item nav-link active"> General Knowledge </a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"> Logout <i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4"> Java Training </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"> General Knowlege </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Railway Station Information </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Railway Station Zone Category Wise List </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> S.No </b> </th> <th scope="col"> <b> Station Name </b> </th> <th scope="col"> <b> Station Code </b> </th>
								<th scope="col"> <b> Station Category </b> </th> <th scope="col"> <b> Division </b> </th> <th scope="col"> <b>  Zone </b> </th> 
								<th scope="col"> <b>  District </b> </th> <th scope="col"> <b>  State </b> </th> </tr>
						</thead>
						<tbody>		
							<?php
								if (isset($_GET["page"])) { 
									$pn  = $_GET["page"]; 
								} else { 
									$pn = 1; 
								};
								$limit = 600;
								$count = "SELECT COUNT(*) AS TOTAL FROM railwayinfo";  
								$rs_result = $conn->query($count);
								$total_records = "";								
								if ($rs_result->num_rows > 0) {
									while ($row = $rs_result->fetch_assoc()) {
										$total_records = $row['TOTAL'];
									}
								}
								$total_pages = ceil($total_records / $limit);
								$start_from = ($pn-1) * $limit;  
								$sql = "SELECT RSCID, UPPER(SNAME) AS NAME, SCODE, SCATEGORY, SDIVISION, SZONE, UPPER(SDISTRICT) AS DISTRICT, SSTATE FROM railwayinfo LIMIT $start_from, $limit";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
							?>
							<tr> 
								<td align="justify"> <?php echo $row['RSCID']; ?> </td> 
								<td align="justify"> <?php echo $row['NAME']; ?> </td> 
								<td align="justify"> <?php echo $row['SCODE']; ?> </td> 
								<td align="justify"> <?php echo $row['SCATEGORY']; ?> </td>
								<td align="justify"> <?php echo $row['SDIVISION']; ?> </td> 
								<td align="justify"> <?php echo $row['SZONE']; ?> </td> 
								<td align="justify"> <?php echo $row['DISTRICT']; ?> </td> 
								<td align="justify"> <?php echo $row['SSTATE']; ?> </td>	 	 	 	 	 	 	 	
							</tr>
							<?php       
									}	
								}
							?>
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
							<?php 
								if ($pn - 1 >= 1) {
							?>
                            <tr>   
								<td> <a href="railway.php?page=<?php echo ($pn - 1) ?>" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"> </i> Previous </a> </td> 
							<?php 
								} 
							?>
							<td width="70%">  </td>
							<?php
								if ($pn + 1 <= $total_pages) {
							?>
								<td> <a href="railway.php?page=<?php echo ($pn + 1) ?>" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							         Next  <i class="fa fa-arrow-right ms-3"> </i> </a> 
								 </td> 
							</tr>
							<?php 
								}
							?>
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