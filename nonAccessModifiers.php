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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Non Access Modifiers </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Non Access Modifiers </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-4" align="justify"> Because method and variable members are usually given access control in exactly the same way. Whereas a class can use just two of the four access control levels, members can use all eight : Final, Static, Abstract, Native, Volatile, Transient, Strictfp, Synchronized. </p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Final </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Definition : </b>  Final is a constant that means don't modify (or) changed. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
					<p class="mb-2" align="justify"> 1. Final keyword can be applied variables, methods and classes. </p>
					<p class="mb-2" align="justify"> 2. Final class can't be extended by any other class. </p>
					<p class="mb-2" align="justify"> 3. If a final class extends you get a compiler time error. </p>
					<p class="mb-2" align="justify"> 4. Final methods are the methods. </p>
					<p class="mb-2" align="justify"> 5. Final methods can't be overridden. </p>
					<p class="mb-2" align="justify"> 6. This feature is provided to maintain security. </p>
					<p class="mb-2" align="justify"> 7. Final variables are the variables. </p>
					<p class="mb-2" align="justify"> 8. Final variables can't be changed. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Static </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> The static is used to create variables and methods that will exist independently of any instances created for the class. All static members exist before you ever make a new instance of a class. There will be only one copy of a static member regardless of the number of instances of that class. All instances of a given class share the same value for any given static variable. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
					<p class="mb-2" align="justify">  1. Static methods can't abstract. </p> 
					<p class="mb-2" align="justify">  2. Static can be applied to inner class. </p> 
					<p class="mb-2" align="justify">  3. They can't refer to this (or) super in any way. </p> 
					<p class="mb-2" align="justify">  4. Static can be applied methods and variables. </p> 
					<p class="mb-2" align="justify">  5. Static can be applied to initialization blocks. </p> 
					<p class="mb-2" align="justify">  6. Static can't be applied constructor. </p> 
					<p class="mb-2" align="justify">  7. Static can't be applied class and interfaces. </p> 
					<p class="mb-2" align="justify">  8. Static can't be applied method local inner classes. </p> 
					<p class="mb-2" align="justify">  9. Static methods can also be synchronized. </p> 
					<p class="mb-2" align="justify">  10. Static method can access only static variables. </p> 
					<p class="mb-2" align="justify">  11. Static can't be applied local variables, inner class methods and instance variables. </p> 
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Abstract </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition of Abstract Method : </b> An abstract method is a method that is been declared but not implemented. </p>
					<p class="mb-4" align="justify"> <b class="text-success"> Definition of Abstract Class : </b> An abstract class is a class that is declared abstract keyword. It may (or) may not include abstract methods. An abstract class cannot be instantiated, but they can be sub classed. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
						<p class="mb-2" align="justify">  1. An abstract class is a class that contains zero (or) more abstract methods. </p> 
						<p class="mb-2" align="justify">  2. An abstract class can contain instance variables and concrete methods in addition to abstract methods. </p> 
						<p class="mb-2" align="justify">  3. An abstract class and the abstract methods should be declared by using the keyword ‘abstract'. </p> 
						<p class="mb-2" align="justify">  4. All the abstract methods of the abstract class should be implemented in its sub classes. </p> 
						<p class="mb-2" align="justify">  5. We can't create an object to abstract class. But, we can create an object to abstract class. </p> 
						<p class="mb-2" align="justify">  6. The reference of abstract class can be used to refer to objects of its sub classes. </p> 
						<p class="mb-2" align="justify">  7. The reference of abstract class can't refer to individual methods of its sub classes. </p> 
						<p class="mb-2" align="justify">  8. It is possible to derive an abstract class as a sub class from a concrete super class. </p> 
						<p class="mb-2" align="justify">  9. We can't declare a class as both abstract and final. </p> 
						<p class="mb-2" align="justify">  10. An abstract method is a method without method body. </p> 
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Native </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> The Native method indicates that a method is implemented in platform dependent. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
						<p class="mb-2" align="justify">  1. Native applies to only methods. </p> 
						<p class="mb-2" align="justify">  2. Native can be applied to static methods also. </p> 
						<p class="mb-2" align="justify">  3. Native methods cannot be abstract.</p> 
						<p class="mb-2" align="justify">  4. Native methods can throw exception. </p> 
						<p class="mb-2" align="justify">  5. Native method is like an abstract method. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Volatile </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> The volatile modifier tells the JVM that a thread accessing the variable must always reconcile its own private copy of the variable with the master copy in memory. (Or) Volatile is a keyword indicates that a thread accessing the variable must always reconcile its own private copy of the variable with the master copy in memory. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
						<p class="mb-2" align="justify">  1. Volatile applied variables only. </p> 
						<p class="mb-2" align="justify">  2. Volatile can be applied to static variables. </p> 
						<p class="mb-2" align="justify">  3. Volatile can't be applied to final variables.</p> 
						<p class="mb-2" align="justify">  4. Volatile is used in multi-processor environment. </p> 
						<p class="mb-2" align="justify">  5. Volatile and transient can't come together. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Trainsent </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b>  If you mark an instance variable as transient, you are telling the JVM to skip this variable when you attempt to serialize the object containing it. (Or) Transient is a keyword indicates that a variable cannot be serialization. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
						<p class="mb-2" align="justify">  1. Transient can be applied only to class level variable (instance variable). </p> 
						<p class="mb-2" align="justify">  2. Local variables can't be declared as transient. </p> 
						<p class="mb-2" align="justify">  3. Object transient variables aren't serialized.</p> 
						<p class="mb-2" align="justify">  4. Transient variables may not be final (or) static. </p> 
						<p class="mb-2" align="justify">  5. But, the complies allows the declaration and no complier time errors is generated. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Strictfp </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> Strictfp is a keyword that restricts floating-point calculations to ensure portability. This was introduced into Java with the JVM version 1.2. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
						<p class="mb-2" align="justify">  1. Strictfp can be applied on methods. </p> 
						<p class="mb-2" align="justify">  2. Strictfp can be applied on classes. </p> 
						<p class="mb-2" align="justify">  3. Strictfp can be applied on interfaces. </p> 
						<p class="mb-2" align="justify">  4. Strictfp can be applied on abstract methods. </p> 
						<p class="mb-2" align="justify">  5. Strictfp can be applied on variables or constructors. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Synchronized </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> The synchronized keyword indicates that a method can be accessed by only one thread at a time. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
						<p class="mb-2" align="justify">  1. Each an object has only one lock. </p> 
						<p class="mb-2" align="justify">  2. Synchronized keyword can be applied methods only. </p> 
						<p class="mb-2" align="justify">  3. Synchronized keyword cannot be applied variables and classes. </p> 
						<p class="mb-2" align="justify">  4. All the methods in a class must not be synchronized. </p> 
						<p class="mb-2" align="justify">  5. Static methods can also be synchronized. </p> 
						<p class="mb-2" align="justify">  6. Multiple threads can have access to non-synchronized methods. </p> 
						<p class="mb-2" align="justify">  7. If two methods are synchronized then only one thread can access any of the two methods. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Can be applied to Class, Methods, Instance Variables, Static Variables, Local Variables </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Non Access Modifiers </b> </th> <th scope="col"> <b> Class </b> </th> <th scope="col"> <b> Method </b> </th> <th scope="col"> <b> Variables </b> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Final </td> <td> Yes </td> <td> Yes </td> <td> Yes </td> </tr>
							<tr> <td align="justify"> Static </td> <td> No </td> <td> Yes </td> <td> Yes </td> </tr>
							<tr> <td align="justify"> Abstract </td> <td> Yes </td> <td> No </td> <td> No </td> </tr>
							<tr> <td align="justify"> Native </td> <td> No </td> <td> Yes </td> <td> No </td> </tr>	
							<tr> <td align="justify"> Volatile </td> <td> No </td> <td> No </td> <td> Yes </td> </tr>
							<tr> <td align="justify"> Tranisent </td> <td> No </td> <td> No </td> <td> Yes </td> </tr>
							<tr> <td align="justify"> Strictfp </td> <td> Yes </td> <td> Yes </td> <td> No </td> </tr>
							<tr> <td align="justify"> Synchronized </td> <td> No </td> <td> Yes </td> <td> No </td> </tr>
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
								<td> <a href="accessModifiers.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Access Modifiers </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="dataType.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Data Type <i class="fa fa-arrow-right ms-3"></i></a> 
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