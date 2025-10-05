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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Data Types </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Data Types </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-4" align="justify"> Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> There are two data types available in Java : </b> </p>
					<p class="mb-2" align="justify"> 1. Primitive Data Types. </p>
				    <p class="mb-2" align="justify"> 2. Reference/Object Data Types. </p>
				</div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Primitive Data Types: </h4>
                    <p class="mb-2" align="justify"> There are eight primitive data types supported by Java. Primitive data types are predefined by the language and named by a key word. </p>
					<p class="mb-2" align="justify"> 1. byte </p>
					<p class="mb-2" align="justify"> 2. short </p>
					<p class="mb-2" align="justify"> 3. int </p>
					<p class="mb-2" align="justify"> 4. long </p>
					<p class="mb-2" align="justify"> 5. float </p>
					<p class="mb-2" align="justify"> 6. double </p>
					<p class="mb-2" align="justify"> 7. boolean </p>
					<p class="mb-2" align="justify"> 8. char </p>
					</ol>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> byte </h4>
					<p class="mb-2" align="justify"> 1. Byte data type is an 8-bit signed two's complement integer. </p>
				    <p class="mb-2" align="justify"> 2. Minimum value is -128 ( -2 <sup> 7 </sup> ) </p>
					<p class="mb-2" align="justify"> 3. Maximum value is 127 (inclusive)(2 <sup> 7 </sup> -1) </p>
					<p class="mb-2" align="justify"> 4. Default value is 0 </p>
					<p class="mb-2" align="justify"> 5. Byte data type is used to save space in large arrays, mainly in place of integers, since a byte is four times smaller than an int. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> byte a = 100; byte b = -50 </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> short </h4>
					<p class="mb-2" align="justify"> 1. Short data type is a 16-bit signed two's complement integer. </p>
					<p class="mb-2" align="justify"> 2. Minimum value is -32,768 (-2 <sup> 15 </sup> ) </p>
					<p class="mb-2" align="justify"> 3. Maximum value is 32,767 (inclusive)(2 <sup> 15 </sup> -1) </p>
					<p class="mb-2" align="justify"> 4. Short data type can also be used to save memory as byte data type. A short is 2 times smaller than an int </p>
				    <p class="mb-2" align="justify"> 5. Default value is 0. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> short s = 10000, short r = -20000 </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> int </h4>
					<p class="mb-2" align="justify"> 1. Int data type is a 32-bit signed two's complement integer. </li>
					<p class="mb-2" align="justify"> 2. Minimum value is - 2,147,483,648 ( -2 <sup> 31 </sup> ) </li>
					<p class="mb-2" align="justify"> 3. Maximum value is 2,147,483,647 (inclusive)(2 <sup> 31 </sup> -1) </li>
					<p class="mb-2" align="justify"> 4. Int is generally used as the default data type for integral values unless there is a concern about memory. </li>
					<p class="mb-2" align="justify"> 5. The default value is 0. </li>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b>  int a = 100000, int b = -200000 </p>
                </div>
            </div>
        </div>
		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> long </h4>
					<p class="mb-2" align="justify"> 1. Long data type is a 64-bit signed two's complement integer. </li>
					<p class="mb-2" align="justify"> 2. Minimum value is -9,223,372,036,854,775,808. ( -2 <sup> 63 </sup> ) </li>
					<p class="mb-2" align="justify"> 3. Maximum value is 9,223,372,036,854,775,807 (inclusive) (2 <sup> 63 </sup> -1) </li>
					<p class="mb-2" align="justify"> 4. This type is used when a wider range than int is needed. </li>
					<p class="mb-2" align="justify"> 5. Default value is 0L. </li>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> long a = 100000L, long b = -200000L </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> float </h4>
					<p class="mb-2" align="justify"> 1. Float data type is a single-precision 32-bit IEEE 754 floating point. </li>
					<p class="mb-2" align="justify"> 2. Float is mainly used to save memory in large arrays of floating point numbers. </li>
					<p class="mb-2" align="justify"> 3. Default value is 0.0f. </li>
					<p class="mb-2" align="justify"> 4. Float data type is never used for precise values such as currency. </li>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> float f1 = 234.5f </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> double </h4>
					<ol>
						<p class="mb-2" align="justify"> 1. double data type is a double-precision 64-bit IEEE 754 floating point. </p> 
						<p class="mb-2" align="justify"> 2. This data type is generally used as the default data type for decimal values, generally the default choice. </p> 
						<p class="mb-2" align="justify"> 3. Double data type should never be used for precise values such as currency. </p> 
						<p class="mb-2" align="justify"> 4. Default value is 0.0d. </p> 
					</ol>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> double d1 = 123.4 </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> boolean </h4>
					<ol>
						<p class="mb-2" align="justify"> 1. boolean data type represents one bit of information. </p> 
						<p class="mb-2" align="justify"> 2. There are only two possible values: true and false. </p> 
						<p class="mb-2" align="justify"> 3. This data type is used for simple flags that track true/false conditions. </p> 
						<p class="mb-2" align="justify"> 4. Default value is false. </p> 
					</ol>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> boolean one = true </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> char </h4>
					<ol>
						<p class="mb-2" align="justify"> 1. char data type is a single 16-bit Unicode character. </p> 
						<p class="mb-2" align="justify"> 2. Minimum value is '\u0000' (or 0). </p> 
						<p class="mb-2" align="justify"> 3. Maximum value is '\uffff' (or 65,535 inclusive). </p> 
						<p class="mb-2" align="justify"> 4. Char data type is used to store any character. </p> 
					</ol>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> char letterA ='A' </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Reference/Object Data Types </h4>
					<ol>
						<p class="mb-2" align="justify"> 1. Reference variables are created using defined constructors of the classes. They are used to access objects. </p> 
						<p class="mb-2" align="justify"> 2. These variables are declared to be of a specific type that cannot be changed. For example, Employee, Puppy etc. </p> 
						<p class="mb-2" align="justify"> 3. Class objects, and various type of array variables come under reference data type. </p> 
						<p class="mb-2" align="justify"> 4. Default value of any reference variable is null. </p> 
						<p class="mb-2" align="justify"> 5. A reference variable can be used to refer to any object of the declared type or any compatible type. </p> 
					</ol>
					<p class="mb-2" align="justify"> <b class="text-success"> Example : </b> Animal animal = new Animal("giraffe"); </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Default Values of Data Types </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Data Types </b> </th> <th scope="col"> <b> Default Value </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> byte </td> <td> 0 </td> </tr>
							<tr> <td align="justify"> short </td> <td> 0 </td> </tr>
							<tr> <td align="justify"> int </td> <td> 0 </td> </tr>
							<tr> <td align="justify"> long </td> <td> 0L </td> </tr>
							<tr> <td align="justify"> float </td> <td> 0.0f </td> </tr>
							<tr> <td align="justify"> double </td> <td> 0.0d </td> </tr>
							<tr> <td align="justify"> char </td> <td> '\u0000' </td> </tr>
							<tr> <td align="justify"> String </td> <td> null </td> </tr>
							<tr> <td align="justify"> boolean </td> <td> false </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Range of Numeric Primitives in Data Types </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Data Types </b> </th> <th scope="col"> <b> Bits </b> </th> <th scope="col"> <b> Bytes </b> </th> <th scope="col"> <b> Minimum </b> </th> <th scope="col"> <b> Maximum </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> byte </td> <td> 8 </td> <td> 1 </td> <td> -2 <sup> 7 </sup> </td> <td> -2 <sup> 7 </sup> - 1 </td> </tr>
							<tr> <td align="justify"> short </td> <td> 16 </td> <td> 2 </td> <td> -2 <sup> 15 </sup> </td> <td> -2 <sup> 15 </sup> - 1 </td> </tr>
							<tr> <td align="justify"> int </td> <td> 32 </td> <td> 4 </td> <td> -2 <sup> 31 </sup> </td> <td> -2 <sup> 31 </sup> - 1 </td> </tr>
							<tr> <td align="justify"> long </td> <td> 64 </td> <td> 8 </td> <td> -2 <sup> 63 </sup> </td> <td> -2 <sup> 63 </sup> - 1 </td> </tr>	
							<tr> <td align="justify"> float </td> <td> 32 </td> <td> 4 </td> <td> 	-3.4e38 to -1.4e-45 </td> <td> 1.4e-45 to 3.4e38 </td> </tr>
							<tr> <td align="justify"> double </td> <td> 64 </td> <td> 8 </td> <td> -1.8e308 to -4.9e-324 </td> <td> 4.9e-324 to 1.8e308 </td> </tr>
							<tr> <td align="justify"> char </td> <td> 16 </td> <td> 2 </td> <td> 0 (\u0000) </td> <td> 65535 (\uffff) </td> </tr>
							<tr> <td align="justify"> boolean </td> <td> 1 </td> <td> 0.125 </td> <td> false </td> <td> true </td> </tr>							
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