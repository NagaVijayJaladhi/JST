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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Exception Handling </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Exception Handling </h1>
                </div>
            </div>
        </div>
	 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Throwable </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Definition : </b>  Throwable is a class that represents all errors and exception which may occur in Java Virtual Machine. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Exception </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> Exception is an event that disrupt the normal flow of the program. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Exception Handling </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> Exception Handling is a mechanism to handle the run time error. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Error </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> An Error indicates serious problem that a reasonable application should not try to catch. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Exceptions : </h4>
					<ol>
						<li class="mb-2" align="justify"> Checked Exception </li>
						<li class="mb-2" align="justify"> Unchecked Exception </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Checked Exception </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> The Exceptions that are checked at compile time by the Java Compiler are called Checked Exceptions. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Unchecked Exception </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> The Exceptions that are checked at run time by the JVM are called Un-Checked Exception. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Errors Represented by Exceptions </h4>
                    <p class="mb-4" align="justify"> Exceptions represent a wide variety of errors including, but not limited to : </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> User Input Errors : </b> Incorrect input from the user leading to unexpected program behavior. </li>
						<li class="mb-2" align="justify"> <b class="text-success"> File Handling : </b> Errors occurring during reading, writing, or accessing files (Example : File not found). </li>
						<li class="mb-2" align="justify"> <b class="text-success"> Network Issues : </b> Problems encountered while performing network operations (Example : Server not responding). </li>
						<li class="mb-2" align="justify"> <b class="text-success"> Hardware Failures : </b> Issues arising due to hardware malfunction (Example : Printer not found). </li>
						<li class="mb-2" align="justify"> <b class="text-success"> Programming Bugs : </b> Logic errors or improper use of the API (Example : Accessing an Array out of its bounds). </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Keywords in Exception	 </h4>
                    <p class="mb-4" align="justify"> Java provides five keywords that are used to handle the exception. The following table describes each. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Keyword </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Try </td> <td align="justify"> The "try" keyword is used to specify a block where we should place an exception code. It means we can't use try block alone. The try block must be followed by either catch or finally. </td> </tr>
							<tr> <td align="justify"> catch </td> <td align="justify"> The "catch" block is used to handle the exception. It must be preceded by try block which means we can't use catch block alone. It can be followed by finally block later. </td> </tr>
							<tr> <td align="justify"> finally </td> <td align="justify"> The "finally" block is used to execute the necessary code of the program. It is executed whether an exception is handled or not. </td> </tr>
							<tr> <td align="justify"> throw </td> <td align="justify"> The "throw" keyword is used to throw an exception. </td> </tr>
							<tr> <td align="justify"> throws </td> <td align="justify">The "throws" keyword is used to declare exceptions. It specifies that there may occur an exception in the method. It doesn't throw an exception. It is always used with method signature. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Rules for Exception Handling with respect to Method Overriding </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Rule 1 : </b> If parent-class method doesn’t declare any exception </p>
					<ol>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare any type of unchecked exception. </li>
						<li class="mb-2" align="justify"> If child-class overriding-method declares checked-exception, then compiler throws compile-time error stating. </li>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare no exception in the overriding-method of child-class. </li>
					</ol>
					<p class="mb-4" align="justify"> <b class="text-success"> Rule 2 : </b> If parent-class method declares unchecked–exception </p>
					<ol>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare any type of unchecked exception. Not necessarily same exception as that of parent-class’ method (only for unchecked exception) </li>
						<li class="mb-2" align="justify"> If child-class overriding-method declares any checked-exception, then compiler throws compile-time error stating. </li>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare no exception in the overriding-method of child-class. </li>
					</ol>
					<p class="mb-4" align="justify"> <b class="text-success"> Rule 3 : </b> If parent-class method declares checked exception </p>
					<ol>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare any type of unchecked exception. </li>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare same type of checked exception or one of its sub-class or no exception. </li>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare no exception in the overriding-method of child-class. </li>
					</ol>
					<p class="mb-4" align="justify"> <b class="text-success"> Rule 4 : </b> If parent-class method declares combination of both checked and unchecked exceptions </p>
					<ol>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare any type of unchecked exception. </li>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare same type of checked-exception or one of its sub-class or no exception. </li>
						<li class="mb-2" align="justify"> Then child-class overriding-method can declare no exception in the overriding-method of child-class. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Difference Between Exception and Error </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Error </b> </th> <th scope="col"> <b> Exception </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> An error cannot be recovered. </td> <td align="justify"> Exception can be recovered by using the try-catch block. </td> </tr>
							<tr> <td align="justify"> All errors in Java are unchecked. </td> <td align="justify"> It can be classified into two categories i.e. checked and unchecked. </td> </tr>
							<tr> <td align="justify"> It occurs at run time. </td> <td align="justify"> It occurs at compile time or run time. </td> </tr>
							<tr> <td align="justify"> It belongs to java.lang.Error package. </td> <td align="justify"> It belongs to java.lang.Exception package. </td> </tr>	
							<tr> <td align="justify"> Errors will not be known to the compiler. </td> <td align="justify"> Only checked exceptions are known to the compiler. </td> </tr>
							<tr> <td align="justify"> It is mostly caused by the environment in which the application is running. </td> <td align="justify"> It is mainly caused by the application itself. </td> </tr>
							
						</tbody> 
					</table>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List of Java Checked Exception </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Exception </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> ClassNotFoundException  </td> <td align="justify"> Class not found. </td> </tr>
							<tr> <td align="justify"> CloneNotSupportedException  </td> <td align="justify"> Attempt to clone an object that does not implement the Cloneable interface. </td> </tr>
							<tr> <td align="justify"> IllegalAccessException  </td> <td align="justify"> Access to a class is denied. </td> </tr>
							<tr> <td align="justify"> InstantiationException  </td> <td align="justify"> Attempt to create an object of an abstract class or interface. </td> </tr>
							<tr> <td align="justify"> InterruptedException  </td> <td align="justify"> One thread has been interrupted by another thread. </td> </tr>
							<tr> <td align="justify"> NoSuchFieldException  </td> <td align="justify"> A requested field does not exist. </td> </tr>
							<tr> <td align="justify"> NoSuchMethodException	 </td> <td align="justify"> A requested method does not exist. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List of Java Unchecked Runtime Exception </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Exception </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> ArithmeticException </td> <td align="justify"> Arithmetic Error, such as divide-by-zero. </td> </tr>
							<tr> <td align="justify"> ArrayIndexOutOfBoundsException </td> <td align="justify"> Array index is out-of-bounds. </td> </tr>
							<tr> <td align="justify"> ArrayStoreException </td> <td align="justify"> Assignment to an array element of an incompatible type. </td> </tr>
							<tr> <td align="justify"> ClassCastException </td> <td align="justify"> Invalid cast. </td> </tr>
							<tr> <td align="justify"> IllegalArgumentException </td> <td align="justify"> Illegal argument used to invoke a method. </td> </tr>
							<tr> <td align="justify"> IllegalMonitorStateException </td> <td align="justify"> Illegal monitor operation, such as waiting on an unlocked thread. </td> </tr>
							<tr> <td align="justify"> IllegalStateException </td> <td align="justify"> Environment or application is in incorrect state. </td> </tr>
							<tr> <td align="justify"> IllegalThreadStateException </td> <td align="justify"> Requested operation not compatible with the current thread state. </td> </tr>
							<tr> <td align="justify"> IndexOutOfBoundsException </td> <td align="justify"> Some type of index is out-of-bounds. </td> </tr>
							<tr> <td align="justify"> NegativeArraySizeException </td> <td align="justify"> Array created with a negative size. </td> </tr>
							<tr> <td align="justify"> NullPointerException </td> <td align="justify"> Invalid use of a null reference. </td> </tr>
							<tr> <td align="justify"> NumberFormatException </td> <td align="justify"> Invalid conversion of a string to a numeric format. </td> </tr>
							<tr> <td align="justify"> SecurityException </td> <td align="justify"> Attempt to violate security. </td> </tr>
							<tr> <td align="justify"> StringIndexOutOfBounds </td> <td align="justify"> Attempt to index outside the bounds of a string. </td> </tr>
							<tr> <td align="justify"> UnsupportedOperationException </td> <td align="justify"> An unsupported operation was encountered. </td> </tr>
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
								<td> <a href="dataType.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Data Types </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="string.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							         String Class  <i class="fa fa-arrow-right ms-3"></i></a> 
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