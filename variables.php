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
                <h1 class="display-2 text-white animated slideInDown mb-4"> Java Training </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">J2SE</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Variables Type </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Variables Type </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Variables are three kinds of variables in Java : </h4>
					<p class="mb-2" align="justify"> 1. Local Variables </p>
					<p class="mb-2" align="justify"> 2. Instance Variables </p>
					<p class="mb-2" align="justify"> 3. Static Variables </p>
					</ol>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 1. Local Variables : </h4>
					<p class="mb-2" align="justify"> 1. Access modifiers cannot be used for local variables. </p>
					<p class="mb-2" align="justify"> 2. Local variables are implemented at stack level internally. </p>
					<p class="mb-2" align="justify"> 3. Local variables are declared in methods, constructors, or blocks. </p>
					<p class="mb-2" align="justify"> 4. Local variables are visible only within the declared method, constructor or block. </p>
					<p class="mb-2" align="justify"> 5. There is no default value for local variables so local variables should be declared and an initial value should be assigned before the first use. </p>
					<p class="mb-2" align="justify"> 6. Local variables are created when the method, constructor or block is entered and the variable will be destroyed once it exits the method, constructor or block. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 2. Instance Variables : </h4>
					<p class="mb-2" align="justify"> 1. Instance variables are declared in a class, but outside a method, constructor or any block. </p>
					<p class="mb-2" align="justify"> 2. When a space is allocated for an object in the heap a slot for each instance variable value is created. </p>
					<p class="mb-2" align="justify"> 3. Instance variables are created when an object is created with the use of the key word ‘new’ and destroyed when the object is destroyed. </p>
					<p class="mb-2" align="justify"> 4. Instance variables hold values that must be referenced by more than one method, constructor or block, or essential parts of an object’s state that must be present throughout the class. </p>
					<p class="mb-2" align="justify"> 5. Instance variables can be declared in class level before or after use. </p>
					<p class="mb-2" align="justify"> 6. Access modifiers can be given for instance variables. </p>
					<p class="mb-2" align="justify"> 7. The instance variables are visible for all methods, constructors and block in the class. </p>
					<p class="mb-2" align="justify"> 8. Normally it is recommended to make these variables private (access level). </p>
					<p class="mb-2" align="justify"> 9. However, visibility for sub classes can be given for these variables with the use of access modifiers. </p>
					<p class="mb-2" align="justify"> 10. Instance variables have default values. For numbers the default values is 0, for Booleans it is false and for object reference it is null. </p>
				    <p class="mb-2" align="justify"> 11. Values can be assigned during the declaration or within the constructor. </p>
				    <p class="mb-2" align="justify"> 12. Instance variables can be accessed directly by calling the variable name inside the class. </p>
				    <p class="mb-2" align="justify"> 13. However within static methods and different class (when instance variables are given accessibility) the should be called using the fully qualified name. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 3. Class / Static Variables : </h4>
					<p class="mb-2" align="justify"> 1. Class variables also known as static variables are declared with the static keyword in a class, but outside a method, constructor or a block. </p>
					<p class="mb-2" align="justify"> 2. There would only be one copy of each class variable per class, regardless of how many objects are created from it. </p>
					<p class="mb-2" align="justify"> 3. Static variables are rarely used other than being declared as constants. </p>
					<p class="mb-2" align="justify"> 4. Constants are variables that are declared as public/private, final and static. </p>
					<p class="mb-2" align="justify"> 5. Constants variables never change from their initial value. Static variables are stored in static memory. </p>
					<p class="mb-2" align="justify"> 6. It is rare to use static variables other than declared final and used as either public or private constants. </p>
					<p class="mb-2" align="justify"> 7. Static variables are created when the program starts and destroyed when the program stops. </p>
					<p class="mb-2" align="justify"> 8. Visibility is similar to instance variables. However, most static variables are declared public since they must be available for users for the class. </p>
					<p class="mb-2" align="justify"> 9. Default values are same as instance variables. For numbers the default value is 0, for Booleans it is false and for object reference it is null. </p>
					<p class="mb-2" align="justify"> 10. Values can be assigned during the declaration or within the constructor. Additionally values can be assigned in special static initialize blocks. </p>
					<p class="mb-2" align="justify"> 11. Static variables can be accessed by calling with the class name. </p>
					<p class="mb-2" align="justify"> 12. When declaring class variable as public static final, then variables names (constants) are all in upper case. </p>
					<p class="mb-2" align="justify"> 13. If the static variables are not public and final the naming syntax is the same as instance and local variables. </p>
					</ol>
                </div>
            </div>
        </div>
		
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Complete List of Java Keywords (assert added in 1.4, enum added in 1.5) :  </h4>
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr> <td> abstract </td> <td> boolean </td> <td> break </td> <td> byte </td> <td> case </td> </tr>
							<tr> <td> catch </td> <td> char </td> <td> class </td> <td> const </td> <td> continue </td> </tr> 
							<tr> <td> default </td> <td> do </td> <td> double </td> <td> else </td> <td> extends </td> </tr> 
							<tr> <td> final </td> <td> finally </td> <td> float </td> <td> for </td> <td> goto </td> </tr> 
							<tr> <td> if </td> <td> implements </td> <td> import </td> <td> instanceof	</td> <td> int </td> </tr> 
							<tr> <td> interface </td> <td> long </td> <td> native </td> <td> new </td> <td> package </td> </tr> 
							<tr> <td> private </td> <td> protected </td> <td> public </td> <td> return </td> <td> short </td> </tr> 
							<tr> <td> static	</td> <td> strictfp </td> <td> super </td> <td> switch </td> <td> synchronized </td> </tr> 
							<tr> <td> this </td> <td> throw	</td> <td> throws </td> <td> transient </td> <td> try </td>  </tr>
							<tr> <td> void </td> <td>volatile </td> <td> while </td> <td> assert	</td> <td> enum </tr> </tr>
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
								<td> <a href="jit.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> JIT Compiler </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="accessModifiers.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							         Access Modifier  <i class="fa fa-arrow-right ms-3"></i></a> 
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