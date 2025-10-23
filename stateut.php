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
                <h1 class="display-2 text-white animated slideInDown mb-4"> General Knowledge </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"> Indian States and UT </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> <?php echo $_SESSION["username"]; ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> State and Union Territory in India </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-3"> India is a federal constitutional republic governed under a parliamentary system consisting of 28 states and 8 union territories. All states, as well as the union territories of Jammu and Kashmir, Puducherry and the National Capital Territory of Delhi, have elected legislatures and governments, both patterned on the Westminster model. The remaining five union territories are directly ruled by the central government through appointed administrators. </p> 
					
					<p class="mb-3"> In 1956, under the States Reorganisation Act, states were reorganised on a linguistic basis. Their structure has since remained largely unchanged. Each state or union territory is further divided into administrative districts. The legislatures of three states Himachal Pradesh, Maharashtra and Uttarakhand meet in different capitals for their summer and winter sessions. Ladakh has both Leh and Kargil as its administrative capitals. </p>
					
					<p class="mb-3"> India is a vast and diverse country, made up of 28 states and 8 union territories, each with its own capital city. These capitals serve as the administrative, political, and cultural centers of their regions. They reflect India’s incredible diversity in geography, traditions, languages, and history, making the country one of the most unique federal structures in the world. </p>

					<p class="mb-3"> From the mighty Himalayas in the north to the lush tropical coasts of the south, every region has a distinct identity. Some capitals are centuries old with deep historical roots, while others are modern cities built to meet today’s governance needs. Together, they highlight how India has grown while preserving its cultural heritage. </p>

					<p class="mb-3"> Covering an area of 3.3 million sq. km, India is the 7th largest country in the world, stretching from the snow-capped mountains to fertile plains, deserts, and long coastlines of the Arabian Sea, Bay of Bengal, and the Indian Ocean. This wide range of landscapes not only shapes the country’s climate but also influences the lifestyles, festivals, and economies of its people. </p>

					<p class="mb-3"> Understanding the States and Capitals of India in 2025 is important for students, travelers, and anyone who wishes to know how India functions as a federal nation, where responsibilities are shared between the central government and state administrations. This article presents a clear and updated list of Indian States and Their Capitals 2025, along with their formation dates, languages, and key facts useful for anyone studying India’s geography and governance. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> State and Capital Name </h4>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> S.No </b> </th> 
								 <th scope="col"> <b> State Name </b> </th> 
								 <th scope="col"> <b> State Capital </b> </th>
								 <th scope="col"> <b> Date of Formation </b> </th>		
								 <th scope="col"> <b> State Language </b> </th>		
								 <th scope="col"> <b> State Animal </b> </th>								 
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT ROW_NUMBER() OVER (ORDER BY STATEUT ASC) AS SUTID,STATEUT,CAPITAL,DOF,LANGUAGE,ANIMAL FROM stateut WHERE STYPE = 'STATE'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
							?>
							<tr> 
								<td align="justify"> <?php echo $row['SUTID']; ?> </td> 
								<td align="justify"> <?php echo $row['STATEUT']; ?> </td> 
								<td align="justify"> <?php echo $row['CAPITAL']; ?> </td> 
								<td align="justify"> <?php echo $row['DOF']; ?> </td> 
								<td align="justify"> <?php echo $row['LANGUAGE']; ?> </td>
								<td align="justify"> <?php echo $row['ANIMAL']; ?> </td>								
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
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Union Territory and Capital Names </h4>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> S.No </b> </th> 
								 <th scope="col"> <b> Union Territories </b> </th> 
								 <th scope="col"> <b> UT Capital </b> </th>
								 <th scope="col"> <b> Date of Formation </b> </th>		
								 <th scope="col"> <b> State Language </b> </th>		
								 <th scope="col"> <b> State Animal </b> </th>								 
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT ROW_NUMBER() OVER (ORDER BY STATEUT ASC) AS SUTID,STATEUT,CAPITAL,DOF,LANGUAGE,ANIMAL FROM stateut WHERE STYPE = 'UT'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
							?>
							<tr> 
								<td align="justify"> <?php echo $row['SUTID']; ?> </td> 
								<td align="justify"> <?php echo $row['STATEUT']; ?> </td> 
								<td align="justify"> <?php echo $row['CAPITAL']; ?> </td> 
								<td align="justify"> <?php echo $row['DOF']; ?> </td> 
								<td align="justify"> <?php echo $row['LANGUAGE']; ?> </td>
								<td align="justify"> <?php echo $row['ANIMAL']; ?> </td>								
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
                    <h4 class="mb-3" align="left"> Difference Between States and Union Territories of India </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Aspect </b> </th> <th scope="col"> <b> States </b> </th> <th scope="col"> <b> Union Territories </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Administrative Units</td> <td align="justify"> Own Administrative units with the elected Government </td> <td align="justify"> Controlled and Administered by the Central Government </td> </tr>
							<tr> <td align="justify"> Executive Head </td> <td align="justify"> Governor </td> <td align="justify"> President </td> </tr>
							<tr> <td align="justify"> Relationship with Centre </td> <td align="justify"> Federal </td> <td align="justify"> Unitary with the Centre (All powers rest with the Union) </td> </tr>
							<tr> <td align="justify"> Administration </td> <td align="justify"> Chief Minister, Elected by the people 	</td> <td align="justify"> Administrator appointed by the President (Except Delhi, Puducherry, and Jammu and Kashmir) </td> </tr>
							<tr> <td align="justify"> Head </td> <td align="justify"> Chief Minister is the Real Head </td> <td align="justify"> Lieutenant is the Real Head </td> </tr>
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