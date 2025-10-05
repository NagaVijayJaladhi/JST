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
                <h1 class="display-2 text-white animated slideInDown mb-4"> J2EE Training</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"> General Knowledge </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Geography </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> General Knowledge - Geography </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Geography - The Universe </h4>
                    <table class="table table-bordered">
						<tbody>
							<tr> <td align="justify"> 1 </td> <td align="justify"> Pythagoras, who was an Ionian Greek philosopher and mathematician, first used the term COSMOS for the order of the Universe. </td> </tr>
							<tr> <td align="justify"> 2 </td> <td align="justify"> Cosmology is the discipline that describes the large scale properties of the universe as a whole. </td> </tr>
							<tr> <td align="justify"> 3 </td> <td align="justify"> The distance covered by light in one year is known as Light Year. The Velocity of light is 300,000 km/s. </td> </tr>
							<tr> <td align="justify"> 4 </td> <td align="justify"> The distance between the Sun and the Earth is known as Astronomical Unit. One astronomical unit is (roughly) equal to 149.6 million kilometers. </td> </tr>
							<tr> <td align="justify"> 5 </td> <td align="justify"> Wilkinson Microwave Anisotropy Probe (WMAP) is an Explorer Mission of National Aeronautics and Space Administration (NASA). It is launched for the study and measurement of cosmology. </td> </tr>
							<tr> <td align="justify"> 6 </td> <td align="justify"> Professor Sir Fred Hoyle, who was an English astronomer, coined the term Big Bang to explain a scientific theory on the creation of cosmos. </td> </tr>
							<tr> <td align="justify"> 7 </td> <td align="justify"> Galaxy is a huge collection of stellar and interstellar matter, which are bound together by its own gravity in the Space. There are several galaxies in the universe, for example, Milky Way. </td> </tr>
							<tr> <td align="justify"> 8 </td> <td align="justify"> The name galaxy where we live is Milky Way. </td> </tr>
							<tr> <td align="justify"> 9 </td> <td align="justify"> The largest galaxy is Andromeda Galaxy. It is also the closest to Milky Way. Milky Way is the second largest galaxy. </td> </tr>
							<tr> <td align="justify"> 10 </td> <td align="justify"> The radius of Milky Way is about 50,000 light years. </td> </tr>
							<tr> <td align="justify"> 11 </td> <td align="justify"> The Solar System is a part of Milky Way. </td> </tr>
							<tr> <td align="justify"> 12 </td> <td align="justify"> The Sun takes 225 million light years to complete one circuit. </td> </tr>
							<tr> <td align="justify"> 13 </td> <td align="justify"> The collapsed stars, which are immeasurably dense and having huge gravitational force (even light cannot escape rather get absorbed) are known as Black Holes. </td> </tr>
							<tr> <td align="justify"> 14 </td> <td align="justify"> Quasar is a massive and extremely remote celestial object that keeps emitting remarkably large amounts of energy. Typically, it has a star like image, which can be seen through the telescope. </td> </tr>
							<tr> <td align="justify"> 15 </td> <td align="justify"> Constellation is a group of stars being arranged in a pictorial configuration. It was basically observed by the ancient astronomers. For example, Sirius (Canis Major), Canopus (Carina), Turus (Bootes), etc. </td> </tr>
							<tr> <td align="justify"> 16 </td> <td align="justify"> Atacama Large Millimeter Array (ALMA) is the British Astronomy center, located at Chajnantor (at an altitude of about 5,000 meters), in the Atacama Desert of northern Chile. </td> </tr>
							<tr> <td align="justify"> 17 </td> <td align="justify"> Edwin Hubble, who was an American astronomer, first studied galaxies in detail. Based on Shape, Edwin classified galaxies as Elliptical, Spiral, and Barred Spiral. </td> </tr>
							<tr> <td align="justify"> 18 </td> <td align="justify"> At the end of life-cycle, when a star loses its light and the density increases (very high), by this time, it is largely composed of neutrons and hence known as Neutron Star. </td> </tr>
							<tr> <td align="justify"> 19 </td> <td align="justify"> Most likely, the rotating neutron star emits intermittent radio signals, is known as Pulsar. </td> </tr>
							<tr> <td align="justify"> 20 </td> <td align="justify"> A star with low temperature and small mass (glowing feebly) is known as Red Dwarf. </td> </tr>
							<tr> <td align="justify"> 21 </td> <td align="justify"> A star that suddenly increases its brightness (greatly) because of a catastrophic explosion and ejects most of its mass is known as Supernova. </td> </tr>
							<tr> <td align="justify"> 22 </td> <td align="justify"> Satellites (or Moons) are the bodies that keep revolving around their respective planets. For example, Moon revolves around the Earth, etc. </td> </tr>
							<tr> <td align="justify"> 23 </td> <td align="justify"> The Sun is the closest star to the Earth (at the distance of about 149,600,000 km). </td> </tr>
							<tr> <td align="justify"> 24 </td> <td align="justify"> Located at the distance of about 4.24 light-years, Proxima Centauri is the second closest star to the Earth. </td> </tr>
							<tr> <td align="justify"> 25 </td> <td align="justify"> The Sun is made up of extremely hot gasses and its glowing surface is known as the Photosphere. The layer immediately above the photosphere is known as Chromosphere (sphere of color). </td> </tr>
							<tr> <td align="justify"> 26 </td> <td align="justify"> The Chromosphere is 10,000 km thick transparent shell of plasma. </td> </tr>
							<tr> <td align="justify"> 27 </td> <td align="justify"> The Outermost layer of the Sun is known as the Corona. </td> </tr>
							<tr> <td align="justify"> 28 </td> <td align="justify"> Temperature of the outer surface is 6,0000 C and interior temperature is 15,000,0000 C. </td> </tr>
							<tr> <td align="justify"> 29 </td> <td align="justify"> The rotation period of the Sun is 25 days, 9 hours, and 7 minutes. </td> </tr>
							<tr> <td align="justify"> 30 </td> <td align="justify"> The traveling speed of the Suns Rays is 30,000 m/s. </td> </tr>
							<tr> <td align="justify"> 31 </td> <td align="justify"> The time taken by Suns Rays to reach the Earth is 8 minutes and 16.6 seconds. </td> </tr>
							<tr> <td align="justify"> 32 </td> <td align="justify">  The Sun is largely composed (chemically) of Hydrogen (71%), Helium (26.5%), and some other elements (2.5%). </td> </tr>
							<tr> <td align="justify"> 33 </td> <td align="justify"> Sometimes, in the photosphere, some patches of gas, which is cooler that its surrounding (gas) are known as the Sunspots. </td> </tr>
							<tr> <td align="justify"> 34 </td> <td align="justify"> The Planets are the celestial bodies that revolve around the Sun as well as (at the same time) rotate on their imaginary axis. </td> </tr>
						</tbody> 							
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Geography - Solar System </h4>
                    <table class="table table-bordered">
						<tbody>
							<tr> <td align="justify" colspan="2"> The solar system has eight planets. The order of increasing distance from the Sun. </td> </tr>
							<tr> <td align="justify"> 1 </td> <td align="justify"> Mercury </td> </tr>
							<tr> <td align="justify"> 2 </td> <td align="justify"> Venus </td> </tr>
							<tr> <td align="justify"> 3 </td> <td align="justify"> Earth </td> </tr>
							<tr> <td align="justify"> 4 </td> <td align="justify"> Mars </td> </tr>
							<tr> <td align="justify"> 5 </td> <td align="justify"> Jupiter </td> </tr>
							<tr> <td align="justify"> 6 </td> <td align="justify"> Saturn </td> </tr>
							<tr> <td align="justify"> 7 </td> <td align="justify"> Uranus </td> </tr>
							<tr> <td align="justify"> 8 </td> <td align="justify"> Neptune </td> </tr>
							<tr> <td align="justify" colspan="2"> The largest planet is Jupiter and Mercury is the smallest planet of the system. </td> </tr>
							<tr> <td align="justify" colspan="2"> There are five officially recognized dwarf planets in our solar system </td> </tr>
							<tr> <td align="justify"> 1 </td> <td align="justify"> Ceres </td> </tr>
							<tr> <td align="justify"> 2 </td> <td align="justify"> Pluto </td> </tr>
							<tr> <td align="justify"> 3 </td> <td align="justify"> Haumea </td> </tr>
							<tr> <td align="justify"> 4 </td> <td align="justify"> Makemake </td> </tr>
							<tr> <td align="justify"> 5 </td> <td align="justify"> Eris </td> </tr>
						</tbody> 							
					</table>
                </div>
            </div>
        </div>
		
		 <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Geography - International Boundaries </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> S.No </b> </th> <th scope="col"> <b> Name </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1 </td> <td align="justify"> The 17th Parallel </td> <td align="justify"> It is the Line Between North & South Vietnam </td> </tr>
							<tr> <td align="justify"> 2 </td> <td align="justify"> The 38th parallel </td> <td align="justify"> It is the Line Between North & South Korea (Before the Korean war) </td> </tr>
							<tr> <td align="justify"> 3 </td> <td align="justify"> The 49th Parallel (also The Medicine Line) </td> <td align="justify"> It is the Boundary Between Canada & the USA </td> </tr>
							<tr> <td align="justify"> 4 </td> <td align="justify"> The 24th Parallel </td> <td align="justify"> It is the Line that Pakistan claims for the demarcation purpose, but India does not accept it </td> </tr>
							<tr> <td align="justify"> 5 </td> <td align="justify"> The Siegfried Line </td> <td align="justify"> It is the Boundary Between France and Germany </td> </tr>
							<tr> <td align="justify"> 6 </td> <td align="justify"> The Maginot Line </td> <td align="justify"> It is Frances Defensive Line </td> </tr>
							<tr> <td align="justify"> 7 </td> <td align="justify"> The Hindenburg Line </td> <td align="justify"> It was the Line that described Germanys position during the World War I </td> </tr>
							<tr> <td align="justify"> 8 </td> <td align="justify"> The OderNeisse line </td> <td align="justify"> It is the Boundary Between Germany & Poland </td> </tr>
							<tr> <td align="justify"> 9 </td> <td align="justify"> The Radcliffe Line </td> <td align="justify"> It is the Boundary Between India & Pakistan </td> </tr>
							<tr> <td align="justify"> 10 </td> <td align="justify"> The McMahon Line </td> <td align="justify"> It is the Boundary Between India & China (However, originally signed between Britain & Tibet) </td> </tr>
							<tr> <td align="justify"> 11 </td> <td align="justify"> The Mannerheim Line </td> <td align="justify"> It was a defensive line drawn on the Karelian Isthmus by Finland against the Soviet Union </td> </tr>
							<tr> <td align="justify"> 12 </td> <td align="justify"> The Durand Line </td> <td align="justify"> It is the Boundary Between Pakistan & India (formerly between British India and Afghanistan) </td> </tr>
							<tr> <td align="justify"> 13 </td> <td align="justify"> The Line of Control (LoC) </td> <td align="justify"> It is the military control line between India and Pakistan (in the state of Jammu & Kashmir) </td> </tr>
							<tr> <td align="justify"> 14 </td> <td align="justify"> The Line of Actual Control (LAC) </td> <td align="justify"> It is the Effective Boundary between India and China </td> </tr>
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