<!DOCTYPE html>

<?php
include "dbconfig.php";
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JST - Jaladhi Soft Technology </title>
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
                    <a href="home" class="nav-item nav-link"> Home </a>
                    <a href="about" class="nav-item nav-link active"> About Us </a>
                    <a href="training" class="nav-item nav-link"> Training </a>
					<a href="development" class="nav-item nav-link"> Development </a>
                    <a href="contact" class="nav-item nav-link"> Contact Us </a>
                </div>
                <a href="joinUs" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
		
		<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1400px;">
                    <h1 class="mb-3"> About Jaladhi Soft Technology </h1>
                    <p class="mb-4" align="justify">  </P>
					<p class="mb-4" align="justify"> The <b> Jaladhi Soft Technology </b> has been delighting, enlightening and inspiring readers Java Tutorials, Web Site, Web Applications, Android Application and College Acadamic Projects. Jaladhi Soft Technology has developed difference types of Projects like Web Sites, Web Applications, Andriod Applications as well as Acadamic Projects like M.Tech, M.C.A, B.Tech, B.Sc Final Year Projects. Our Java Programming Tutorial is designed for Under Graduate and Post Graduate Students and IT Freshers and Experience Professionals. Java is an Object Oriented Programming, Class Based, Concurrent, Secured and General Purpose Computer Programming Language. Java is a widely used Robust Technology.</P> 
					
					<p class="mb-4" align="justify"> <b> Jaladhi Soft Technology </b> Tutorial would help you learn Java Technology and Framework. I have shared tutorials on various topics of Java including tutorials on Core Java, Advanced Java and Java Frameworks Concepts and Java Programming Examples. This Core Java Tutorial contains the links of all the tutorials in a systematic order starting from beginner‘s level to the advanced topics. Whether you are a college student looking for learn Java Technology or a IT Company Employee Learning advanced Java topics for building an application in Java. This Java Tutorial would definitely be useful for you. </p>
                </div>
            </div>
        </div>
		
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1400px;">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1400px;">
                        <h1 class="mb-4"> About Mission, Vision and Motto </h1>
                        <p align="justify"> <b> Mission : </b> Our mission is to develop innovative Java Based Applications that drive tangible results for the client's business. </p>
						<p class="mb-4" align="justify"> <b> Vision : </b> Our vision is to place ourselves as a global leader in Java Development, as we combine innovation with creativity in every solution we create. </p> 
						<p class="mb-4" align="justify"> <b> Motto : </b> This motto encapsulates our unwavering dedication to continuous learning, hands-on practice, and the pursuit of excellence. </p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="training"> Read Java Tutorial </a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="img/jnv.png" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1"> Jaladhi Naga Vijay </h6>
                                        <small> CEO &amp; Founder </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/MVV.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/aboutUs" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4"> About Jaladhi Naga Vijay </h1>
                                <p class="mb-4" align="justify"> I am Jaladhi Naga Vijay. My Education Qualification is M.Tech (C.S.E)., M.C.A. I am Senior Software Java Engineer and Java Trainer. I have 12 years of experience in Information Technology sector as a trainer and developed multiple real time projects using Java Technology like Java, JDBC, Servlets, JSP, Struts 2 Framework, Hibernate Framework, EJB, JPA, Spring, Spring Boot Framework, Microservices, MySQL and Oracle Data Base. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"> Our Quotes Say! </h1>
                    <p> </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
					<?php
							$sql = "SELECT * FROM `quotes`";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
						?>
                    <div class="testimonial-item bg-light rounded p-5">
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/quotes.jpg" style="width: 100px; height: 100px;">
                            <div class="ps-3">
                                <h4 class="mb-1"> <?php echo $row['QUOTES']; ?> </h4>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
						
                    </div>
					<?php       
								}
							}
						?>
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