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
                    <a href="pyHome.php" class="nav-item nav-link active"> Python </a>
					<a href="htmlHome.php" class="nav-item nav-link"> HTML </a>
                    <a href="dbHome.php" class="nav-item nav-link"> Data Base </a>
					<a href="gkHome.php" class="nav-item nav-link"> General Knowledge </a>
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
                        <li class="breadcrumb-item"><a href="#"> Python </a> </li>
                        <li class="breadcrumb-item"><a href="#"> Basic Concept </a> </li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> <?php echo $_SESSION["username"]; ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Python Basic Concept </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Python Introducation </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Python </b>  is one of the most popular and widely used programming language in nowadays, because of its simplicity, extensive features and support of libraries. Python also have clean and simple syntax which makes it beginner-friendly, while it also provides powerful libraries and frameworks that makes it perfect for the developers. </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> What is Python ?  </h4>
                     <p class="mb-4" align="justify"> <b class="text-success"> Python </b> is a general-purpose, dynamically typed, high-level, compiled and interpreted, garbage-collected, and purely object-oriented programming language that supports procedural, object-oriented, and functional programming. </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Why Should You Learn Python </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Python </b> provides many useful features to the programmer. These features make it the most popular and widely used language. We have listed below few-essential features of Python. </p>
					<p class="mb-2" align="justify"> 1. Ease to use and Learn </p>
					<p class="mb-2" align="justify"> 2. Object-Oriented Language </p>
                    <p class="mb-2" align="justify"> 3. GUI Programming Support </p>
                    <p class="mb-2" align="justify"> 4. Dynamic Memory Allocation </p>
                    <p class="mb-2" align="justify"> 5. Wide Range of Libraries and Frameworks </p>
                    <p class="mb-2" align="justify"> 6. Versatility </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Where is Python Used ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Python </b> is a general-purpose, popular programming language, and it is used in almost every technical field. The various areas of Python use are given below. </p>
                    <p class="mb-2" align="justify"> 1. Data Science </p>
					<p class="mb-2" align="justify"> 2. Artificial Intelligence </p>
                    <p class="mb-2" align="justify"> 3. Machine Learning </p>
                    <p class="mb-2" align="justify"> 4. Data Analysis </p>
                    <p class="mb-2" align="justify"> 5. Web Development </p>
                </div>
            </div>
        </div>

        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Python Frameworks and Libraries </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Python </b> Python has wide range of libraries and frameworks widely used in various fields such as machine learning, artificial intelligence, web applications, etc. <br/> We define some popular frameworks and libraries of Python as follows. </p>
                    <p class="mb-2" align="justify"> 1. Web development (Server-side) </p>
                    <p class="mb-2" align="justify"> 2. GUIs based applications </p>
                    <p class="mb-2" align="justify"> 3. Machine Learning </p>
                    <p class="mb-2" align="justify"> 4. Mathematics </p>
                    <p class="mb-2" align="justify"> 5. BeautifulSoup </p>
                    <p class="mb-2" align="justify"> 6. Requests </p>
                    <p class="mb-2" align="justify"> 7. SQLAlchemy </p>
                    <p class="mb-2" align="justify"> 8. Kivy </p>
                    <p class="mb-2" align="justify"> 9. Pygame </p>
                    <p class="mb-2" align="justify"> 10. Pytest </p>
                    <p class="mb-2" align="justify"> 11. REST Framework </p>
                    <p class="mb-2" align="justify"> 12. FastAPI </p>
                    <p class="mb-2" align="justify"> 13. Streamlit </p>
                    <p class="mb-2" align="justify"> 14. NLTK </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Python </h4>
					<p class="mb-2" align="justify"> The primary objective of the development of Python programming language is to improve simplicity and readability of code. Python is a feature-rich, high-level, interpreted, interactive, and object-oriented programming language making it a powerful, versatile, and very popular language among developers. </p>
                    <p class="mb-2" align="justify"> 1. Free and Open Source </p>
                    <p class="mb-2" align="justify"> 2. Easy to Learn and Code </p>
                    <p class="mb-2" align="justify"> 3. Easy to Read </p>
                    <p class="mb-2" align="justify"> 4. Object-Oriented Language </p>
                    <p class="mb-2" align="justify"> 5. Cross-platform Compatibility </p>
                    <p class="mb-2" align="justify"> 6. Interpreted Language </p>
                    <p class="mb-2" align="justify"> 7. Dynamically Typed Language </p>
                    <p class="mb-2" align="justify"> 8. High-Level Language </p>
                    <p class="mb-2" align="justify"> 9. Integrated Language </p>
                    <p class="mb-2" align="justify"> 10. GUI Programming Support </p>
                    <p class="mb-2" align="justify"> 11. Multi-purpose Programming </p>
                    <p class="mb-2" align="justify"> 12. Strong Community Support </p>
                    <p class="mb-2" align="justify"> 13. Extensive Libraries and Frameworks </p>
                    <p class="mb-2" align="justify"> 14. Multiple Programming Paradigms Support </p>
                    <p class="mb-2" align="justify"> 15. Automatic Memory Management </p>
                    <p class="mb-2" align="justify"> 16. Multi-threading and Multiprocessing </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr>   
								<td> <a href="pyHome.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Python Home </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="pyVersions.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Versions <i class="fa fa-arrow-right ms-3"></i></a> 
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