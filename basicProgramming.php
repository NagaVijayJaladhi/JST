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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Java Programming </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Java Programming </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 1. Basic Java Program </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
							        public class HelloWorld { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Hello! You are Learning Java Programming."); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
                                </td> 
							    <td> <h3> Output : </h3> <b> <i> Hello! You are Learning Java Programming. </i> </b>
                            </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 2. Addition of Two Variables </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
							        public class Addition { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int c = a + b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Addition of Two variables : " + c); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
                                </td> 
							    <td> <h3> Output : </h3> <b> <i> Addition of Two variables : 20. </i> </b> </td> 
                            </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 3. Subtraction of Two Variables </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class Subtraction { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 20; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int c = a > b ? a - b : b - a; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Subtraction of Two variables : " + c); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td> <h3> Output : </h3> <b> <i> Subtraction of Two variables : 10. </i> </b> </td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 4. Multiplication of Two Variables </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class Multiplication { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int c = a * b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Multiplication of Two variables : " + c); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Multiplication of Two variables : 100. </i> </b>
								</td>
							</tr>
						</tbody>
												
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 5. Division of Two Variables </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class Division { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 20; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int c = a > b ? a / b : b / a; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Division of Two variables : " + c); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Division of Two variables : 4. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 6. Modulus of Two Variables </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class Modulo { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 20; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 3; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int c = a % b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Modulo of Two variables : " + c); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
                                <td>
                                    <h3> Output : </h3> <b> <i> Modulus of Two variables : 2. </i> </b>
                                </td>
                            </tr>
                        </tbody>
                        <thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 7. Print Integers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
                                    public class PrintIntegers { <br />
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.print("Display the Integers Numbers are : "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  for(int i = 0; i &leq; 10; i++) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  } <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
                                </td>
                                <td>
                                    <h3> Output : </h3> <b> <i> Display the Integers Numbers are : 0  1  2  3  4  5  6  7  8  9  10. </i> </b>
                                </td>
                            </tr>
                        </tbody>
                        <thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b>  8. Even Numbers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class EvenNumbers { <br />
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.print("Display the Even Numbers are : "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  for(int i = 0; i &leq; 10; i++) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i%2 == 0) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  } <br/>
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Display the Even Numbers are : 0  2  4  6  8  10. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 9. Odd Numbers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class OddNumbers { <br/>
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.print("Display the Odd Numbers are : "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  for(int i = 0; i &leq; 10; i++) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i%2 != 0) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  } <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Display the Even Numbers are : 1  3  5  7  9. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 10. Alphabets </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Alphabets { <br/>
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  char ch; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.print("Display the Alphabets (A - Z) : "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  for(ch = 'a'; ch &leq; 'z'; ch++) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(ch + " "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  } <br />
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Display the Alphabets (A - Z) : a b c d e f g h i j k l m n o p q r s t u v w x y z. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 11. Convert Fahrenheit to Celsius </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class FahrenheitToCelsius { <br/>
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  float temperatue = 100F; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  temperatue = ((temperatue - 32)*5)/9; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.print(" Temperatue in Celsius : "); <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Temperatue in Celsius : 37.77778 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 12. Multiplication Table </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/>
									public class MultiplicationTable { <br />
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 8; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Display the Multiplication Table : "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  for(int i = 1; i &leq; 10; i++) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(n + " * " + i + " = " + n*i); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  } <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Display the Multiplication Table :   <br/> 8 * 1 = 8 <br/> 8 * 2 = 16 <br/> 8 * 3 = 24 <br/> 8 * 4 = 32 <br/> 8 * 5 = 40 <br/> 8 * 6 = 48 <br/> 8 * 7 = 56 <br/> 8 * 8 = 64 <br/> 8 * 9 = 72 <br/> 8 * 10 = 80  </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 13. Find Odd or Even Numbers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class EvenOdd { <br />
										&nbsp; &nbsp; &nbsp;  public static void main(String [ ] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int b = 5; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(b%2 == 0) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(b + " is a Even Number."); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(b + " is a Odd Number."); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 5 is a Odd Number. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 14. Swapping with Third Variable </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class SwappingTemporary { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 20; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int temp; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Before Swapping a = " + a + "  b = " + b); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  temp = a; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  a = b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  b = temp; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("After Swapping \n a = " + a + " \n b = " + b); <br/>
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Before Swapping a = 20  b = 10 <br/> After Swapping a = 10   b = 20 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 15. Swapping without Third Variable </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class SwappingVariable { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int a = 20; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  int b = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("Before Swapping a = " + a + "  b = " + b); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  a = a + b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  b = a - b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  a = a - b; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  System.out.println("After Swapping \n a = " + a + " \n b = " + b); <br/>
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Before Swapping a = 20  b = 10 <br/> After Swapping a = 10   b = 20 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 16. Finds Largest of Three Numbers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class Largest { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int x = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int y = 9; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int z = 4; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( x > y &amp;&amp; x > z ) <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("First number is largest."); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if ( y > x &amp;&amp; y > z ) <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Second number is largest."); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if ( z > x &amp;&amp; z > y ) <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Third number is largest."); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Entered numbers are not distinct."); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> First number is largest. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 17. Finds Smallest of Three Numbers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class Smallest { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int x = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int y = 9; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int z = 4; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( x &lt; y &amp;&amp; x &lt; z ) <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("First number is smallest."); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if ( y &lt; x &amp;&amp; y &lt; z ) <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Second number is smallest."); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if ( z &lt; x &amp;&amp; z &lt; y ) <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Third number is smallest."); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Entered numbers are not distinct."); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> First number is smallest. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 18. Finds Quotient and Remainer of two integers. </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class QuotientRemainer { <br />
										&nbsp; &nbsp; &nbsp; public static void main(String [ ] args) { <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int x = 10; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int y = 9; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rem = x % y; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Remainer : " + rem); <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int quot = x / y; <br />
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Quotient : " + quot); <br />
										&nbsp; &nbsp; &nbsp; } <br />
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Remainer : 1,  Quotient : 1 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 19. Counts Number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a String </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public void class StringExample { <br/>
										&nbsp; &nbsp; &nbsp; public static void main(String args[]) throws IOException { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; String str = "Kiran, I am Studying 10 Class"; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int vowels = 0, digits = 0, blanks = 0; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; char ch; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int i = 0; i < str.length(); i ++) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ch = str.charAt(i); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(ch == 'a' || ch == 'A' || ch == 'e' || ch == 'E' || ch == 'i' || ch == 'I' || ch == 'o' || ch == 'O' || ch == 'u' || ch == 'U') <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; vowels ++; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if(Character.isDigit(ch)) <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; digits ++; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if(Character.isWhitespace(ch)) <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; blanks ++; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Vowels : " + vowels); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Digits : " + digits); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Blanks : " + blanks); <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Vowels : 7,  Digits : 2, Blanks : 5 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 20. Check Vowel (or) Consonant in a String </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class VowelConsonant { <br/>
										&nbsp; &nbsp; &nbsp; public static void main(String[] args) throws Exception { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; char n = 'a'; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; switch(n) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case 'a': <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("The given character "+ n +" is vowel"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case 'e': <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("The given character "+ n +" is vowel"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case 'i': <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("The given character "+ n +" is vowel"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case 'o': <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("The given character "+ n +" is vowel"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case 'u': <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("The given character "+ n +" is vowel"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; default: <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("The given character "+ n +" is consonant"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> The given character a is vowel. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 21. Convert Binary To Decimal </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class BinaryToDecimal { <br/>
										&nbsp; &nbsp; &nbsp; public int getDecimalFromBinary(int binary) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int decimal = 0; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int power = 0; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while(true) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(binary == 0) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int tmp = binary%10; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; decimal += tmp*Math.pow(2, power); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; binary = binary/10; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; power++; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return decimal; <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; public static void main(String a[]) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; BinaryToDecimal bd = new BinaryToDecimal(); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("10010 ===> " + bd.getDecimalFromBinary(10010)); <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 10010 ===> 38. </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 22. Print Diamond Pattern </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class Diamond {  <br/>
										&nbsp; &nbsp; &nbsp; public static void main(String args [ ] )  { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int n, i, j, space = 1; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n = 5; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; space = n - 1; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (j = 1; j &leq; n; j++)  { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (i = 1; i &leq; space; i++) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; space--; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (i = 1; i &leq; 2 * j - 1; i++) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("*"); <br/>                
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(""); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; space = 1; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (j = 1; j&leq;n - 1; j++) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (i = 1; i &leq; space; i++)  { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; space++; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (i = 1; i &leq; 2 * (n - j) - 1; i++)  { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("*"); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(""); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									}  <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <br/>
										&nbsp;&nbsp;&nbsp;*** <br/>
										&nbsp;&nbsp;***** <br/>
										&nbsp;******* <br/>
										********* <br/>
										&nbsp;******* <br/>
										&nbsp;&nbsp;***** <br/>
										&nbsp;&nbsp;&nbsp;*** <br/>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <br/>
										</i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 23. Reverse Number Program </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class ReverseNumber { <br/>
										&nbsp; &nbsp; &nbsp; public static void main(String args[]) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int n = 12345, reverse = 0; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while( n != 0 ) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; reverse = reverse * 10; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; reverse = reverse + n%10; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n = n/10; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Reverse number is "+reverse); <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> Reverse number is : 54321 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 24. Bizz Fizz Program </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
									public class BuzzFizz { <br/>
										&nbsp;&nbsp;&nbsp; public static void main(String [] args) { <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; int no = 5; <br/> 
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; for(int i = 1; i&leq;no; i++) { <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; if((i % (3*5)) == 0) { <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; System.out.println("FizzBuzz"); <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } else if ((i % 5) == 0) { <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; System.out.println("Buzz"); <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } else if ((i % 3) == 0) { <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; System.out.println("Fizz"); <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } else { <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; System.out.println(i); <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } <br/>
										&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } <br/>
										&nbsp;&nbsp;&nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 1 <br/> 2 <br/> Fizz <br/> 4 <br/> Buzz </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 25. Count the Range of Prime Numbers </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> 
								public class CountPrime { <br/>
									&nbsp;&nbsp;&nbsp; public static void main(String[] args) { <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; int n = 100, value = 0; <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; for(int i = 0; i&leq;n; i++) { <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; int count = 0; <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; for(int j = 2; j&lt;i; j++) { <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; if(i%j == 0) { <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; count++; <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; break; <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; if(count == 0) { <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; value = value + 1; <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; } <br/>
									&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; System.out.println("Count the Range of Prime Number : " + value); <br/>
									&nbsp;&nbsp;&nbsp; } <br/>
								} <br/>
							</td>
							<td>
								<h3> Output : </h3> <b> <i> Count the Range of Prime Number : 27 </i> </b>
							</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h4> <b> 26. A integer array is given as input. find the difference between each element. Return the index of the largest element which has the largest difference gap. </b> </h4> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> 
									Input: {2,3,4,2,3} <br/>
									Logic: 2 - 3 = 1, 3 - 4 = 1, 4 - 2 = 2, 2 - 3 = 1. 2 is the max diff between 4 and 2,return the index of 4(2) <br/>
									Output: 2 <br/>
								
									<b> package com.jaladhi; <br/> 
									public class Third { <br/>
									&nbsp; &nbsp; &nbsp; public static int getDiffArray(int[] n1){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int n2,n3 = 0,n4 = 0,i; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(i = 0;i&lt;n1.length-1;i++){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n2 = Math.abs(n1[i]-n1[i+1]); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(n2 > n3){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n3 = n2; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n4 = i+1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return n4; <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] n1 = {2,9,4,7,6}; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(getDiffArray(n1)); <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 1 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 27. Given two integer arrays. merge the common elements into a new array. find the sum of the elements. </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> Input 1: {1,2,3,4} <br/> Input 2: {3,4,5,6} <br/> <br/> Logic : {3,4} <br/> Output : 7 <br/> <br/>
									<b> package com.jaladhi; <br/>
										import java.util.*; <br/>
										public class Four { <br/>
										&nbsp; &nbsp; &nbsp; public static int mergeArray(int a[],int b[]){ <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; List<Integer> l1 = new ArrayList<Integer>(); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; List<Integer> l2 = new ArrayList<Integer>(); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int i,d = 0; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(i = 0;i&lt;a.length;i++) <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; l1.add(a[i]); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(i = 0;i&lt;b.length;i++) <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; l2.add(b[i]); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; l1.retainAll(l2); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(i = 0;i&lt;l1.size();i++) <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d += (Integer) l1.get(i); <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return d; <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
										&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] a = {1,2,3,4}; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] b = {3,4,5,6}; <br/>
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(mergeArray(a,b)); <br/>
										&nbsp; &nbsp; &nbsp; } <br/>
									}  <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 7 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h4> <b>28. Given two arrayslist. retrieve the odd position elements form first input and even position elements from second list. Put it into the new arraylist at the same positions from where they are retrieved from. (consider zeroth position as even position, and two lists are of same size) </b> </h4> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> Input 1 :{12,1,32,3} <br/> Input 2 :{0,12,2,23} <br/> Output : {0,1,2,3} <br/>
									<b> package com.jaladhi; <br/> 
									public class Five { <br/>
									&nbsp; &nbsp; &nbsp; public static int[] retrievePosition(int[] a,int[] b){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] c=new int[a.length]; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int i; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(i = 0; i&lt;a.length;i++){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i%2 == 0) <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c[i] = b[i]; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i%2 != 0) <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c[i] = a[i]; <br/> 
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return c; <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] a = {12,1,32,3}; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] b = {0,12,2,23}; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int[] c = retrievePosition(a,b); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int d : c) <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(d); <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 0&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3 </i> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 29. Sum of fibonaaci series upto given input. </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify">  
									Input : 3 <br/> Logic : 1 + 1 + 2 <br/> Output : 4 <br/>
									<b> package com.jaladhi; <br/>
									import java.util.*; <br/>
									public class Six { <br/>
									&nbsp; &nbsp; &nbsp; public static int sumOfFibonacci(int n){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int a = -1,b = 1,c = 0,d = 0; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int i = 0;i &leq; n;i++){ <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c = a+b; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a = b; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b = c; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d += c; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return d; <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner s = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int n = s.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(sumOfFibonacci(n)); <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									}  <br/>
								</td>
								<td>
									<h3> Output : </h3> <b> <i> 4 </i> </b>
								</td>
							</tr>
						</tbody>				
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> 30. Retrieve the odd numbers till given input number. add and subtract it consecutively and return the result. </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> 
							Input : 9 <br/>
							Output : 1 + 3 - 5 + 7 - 9 = -3 <br/>
							<b> package com.jaladhi; <br/> 
							import java.util.*; <br/>
							public class Seven { <br/>
							&nbsp; &nbsp; &nbsp; public static int consecutiveSumSubofOddNos(int n){ <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; List<Integer> l1 = new ArrayList<Integer>(); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int i = 1;i&leq;n;i++) <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i%2!=0) <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; l1.add(i); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int n1 = l1.get(0); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int i = 1; i &lt; l1.size();i++) <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i%2 != 0) <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n1 = n1 + l1.get(i); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; n1 = n1 - l1.get(i); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return n1; <br/>
							&nbsp; &nbsp; &nbsp; } <br/>
							&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner s = new Scanner(System.in); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int n = s.nextInt(); <br/>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(consecutiveSumSubofOddNos(n)); <br/>
							&nbsp; &nbsp; &nbsp; } <br/>
							} <br/>
						</td>
						<td>
							<h3> Output : </h3> <b> <i> -3 </i> </b>
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