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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Number Pattern </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Number Pattern Programming </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ondhu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/> 
							        public class Ondhu { <br/>
                                        &nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                        &nbsp; &nbsp; &nbsp; } <br/>
                                    } </b>
                                </td> 
							    <td> <h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
                                    Printing The Pattern : <br/>
                                    1 <br/>
                                    1 2  <br/>
                                    1 2 3  <br/>
                                    1 2 3 4  <br/>
                                    1 2 3 4 5 </b> 
                                </td> 
                            </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Yeradu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/> 
							        public class Yeradu { <br/>
                                       &nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                       &nbsp; &nbsp; &nbsp; } <br/>
                                      } </b>
                                </td> 
							    <td> <h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
                                    Printing The Pattern : <br/>
                                    1 <br/>
                                    2 2  <br/>
                                    3 3 3  <br/>
                                    4 4 4 4 <br/>
                                    5 5 5 5 5 </b> 
                                </td> 
                            </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Mooru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									package com.jaladhi; <br/>
									import java.util.Scanner; <br/>
									public class Mooru { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} </b>
								</td>
								<td> <h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									1 <br/> 
									1 2 <br/> 
									1 2 3 <br/> 
									1 2 3 4 <br/> 
									1 2 3 4 5 <br/>
									1 2 3 4 <br/> 
									1 2 3 <br/> 
									1 2 <br/> 
									1 </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Naalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									package com.jaladhi; <br/>
									import java.util.Scanner; <br/>
									public class Naalku { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} </b>
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									1 2 3 4 5 <br/> 
									1 2 3 4 <br/>
									1 2 3 <br/>
									1 2 <br/> 
									1 <br/>
									1 <br/> 
									1 2 <br/> 
									1 2 3 <br/> 
									1 2 3 4 <br/> 
									1 2 3 4 5 </b>
								</td>
							</tr>
						</tbody>
												
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aidhu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Aidhu { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j >= 1; j--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j >= 1; j--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} </b>
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									5 4 3 2 1 <br/> 
									4 3 2 1 <br/> 
									3 2 1 <br/> 
									2 1 <br/> 
									1 <br/> 
									1 <br/> 
									2 1 <br/> 
									3 2 1 <br/> 
									4 3 2 1 <br/> 
									5 4 3 2 1 </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aaru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
                                    public class Aaru { <br/>
                                    &nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &#8804; rows; i++) { <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int x = 0; <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int y = 1; <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(y+" "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; i; j++) { <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int z = x + y; <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(z + " "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; x = y; <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; y = z; <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                    &nbsp; &nbsp; &nbsp; } <br/>
                                    } </b>
                                </td>
                                <td>
                                    <h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
                                    Printing The Pattern : <br/> 
                                    1 <br/> 
                                    1 1 <br/> 
                                    1 1 2 <br/> 
                                    1 1 2 3 <br/> 
                                    1 1 2 3 5 <br/>
                                    1 1 2 3 5 8 </b>
                                </td>
                            </tr>
                        </tbody>
                        <thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Yelu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
                                    public class Yelu { <br/>
                                    &nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &#8804; rows; i++) { <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print((int) Math.pow(j, i) + " "); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
                                    &nbsp; &nbsp; &nbsp; } <br/>
                                    } </b>
                                </td>
                                <td>
                                    <h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
                                    Printing The Pattern : <br/> 
                                    1 <br/> 
                                    1 4 <br/> 
                                    1 8 27 <br/> 
                                    1 16 81 256 <br/> </b>
                                </td>
                            </tr>
                        </tbody>
                        <thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Yentu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Yentu { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &lt; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int num = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i ==0 || j ==0) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; num = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; num = num * (i - j + 1)/ j; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(num + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} </b>
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/> 
									1 <br/> 
									1 1 <br/> 
									1 2 1 <br/> 
									1 3 3 1 <br/> 
									1 4 6 4 1 <br/> </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ombattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Ombattu { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j > i; j--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									} </b>
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; 1 <br/> 
									&nbsp; &nbsp; &nbsp; 1 2 <br/> 
									&nbsp; &nbsp; 1 2 3 <br/> 
									&nbsp; 1 2 3 4 <br/> 
									1 2 3 4 5 </b> 
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hatthu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hatthu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; 3; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; 3; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i == j) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("1 "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i &lt; j) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("# "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i > j) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("&amp; "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3>
1 # # <br/>
$ 1 # <br/>
$ $ 1 <br/>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hannondu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hannondu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j >= i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
5 <br/> 
5 4 <br/> 
5 4 3 <br/> 
5 4 3 2 <br/> 
5 4 3 2 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hanneraḍu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hanneraḍu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; 5; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("*"); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> 
1* <br/>
12** <br/>
123*** <br/>
1234**** <br/>
12345***** <br/>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hadimuru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hadimuru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; 6; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = i; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i % 2 == 0) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp--; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3>
1 <br/>
21 <br/>
123 <br/>
4321 <br/>
12345 <br/>
654321 <br/>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hadinalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hadinalku { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j >= i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
5 4 3 2 1 <br/> 
5 4 3 2 <br/> 
5 4 3 <br/> 
5 4 <br/> 
5 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hadinaidu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hadinaidu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 2 3 4 5  <br/>
1 2 3 4  <br/>
1 2 3  <br/>
1 2  <br/>
1 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hadinaaru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hadinaaru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int k = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; k++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; }
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/>
2 3 <br/> 
4 5 6 <br/> 
7 8 9 10 <br/> 
11 12 13 14 15 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hadinelu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hadineḷu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j >= 1; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; }
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 1 <br/> 
3 2 1 <br/> 
4 3 2 1 <br/> 
5 4 3 2 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hadinentu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hadinentu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = i; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j >= 1; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp + rows; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/>
2 7 <br/>
3 8 13 <br/>
4 9 14 19 <br/>
5 10 15 20 25 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Hattombattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Hattombattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j > i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp * (i - k) / (k); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;1 <br/> 
&nbsp;&nbsp;&nbsp;1 1 <br/> 
&nbsp;&nbsp;1 2 1 <br/> 
&nbsp;1 3 3 1 <br/> 
1 4 6 4 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i - 1; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/>
1 2 1 <br/> 
1 2 3 2 1 <br/> 
1 2 3 4 3 2 1 <br/> 
1 2 3 4 5 4 3 2 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattondu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippattondu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; 6; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i == 1) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (j == i &amp;&amp; j != 1) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i - 1); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3>
1 <br/>
12 <br/>
223 <br/>
3334 <br/>
44445 <br/>
555556 <br/>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippatteradu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippatteradu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; rows - i + 1; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 2 3 4 5 <br/> 
&nbsp;1 2 3 4 <br/> 
&nbsp;&nbsp;1 2 3 <br/> 
&nbsp;&nbsp;&nbsp;1 2 <br/> 
&nbsp;&nbsp;&nbsp;&nbsp;1 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippatmuru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippatmuru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k &#8804; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k &#8804; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 2 3 4 5 <br/> 
&nbsp;2 3 4 5 <br/> 
&nbsp;&nbsp;3 4 5 <br/> 
&nbsp;&nbsp;&nbsp;4 5 <br/> 
&nbsp;&nbsp;&nbsp;&nbsp;5 <br/> 
&nbsp;&nbsp;&nbsp;&nbsp;5 <br/> 
&nbsp;&nbsp;&nbsp;4 5 <br/> 
&nbsp;&nbsp;3 4 5 <br/> 
&nbsp;2 3 4 5 <br/>
1 2 3 4 5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippatnalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippatnalku { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; 6; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i == 1) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (j == i &amp;&amp; j != 1) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i - 1); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
<td>
<h3> Output : </h3> 
1 <br/>
12 <br/>
223 <br/>
3334 <br/>
44445 <br/>
555556 <br/>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattaidu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class ippattaidu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) {<br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k &#8804; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;5 <br/> 
&nbsp;&nbsp;&nbsp;4 5 <br/> 
&nbsp;&nbsp;3 4 5 <br/> 
&nbsp;2 3 4 5 <br/> 
1 2 3 4 5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattaru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippattaru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>        
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int j = i; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; rows; k++) { <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; j++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (j > rows) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; j = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 2 3 4 5 <br/>
2 3 4 5 1 <br/> 
3 4 5 1 2 <br/> 
4 5 1 2 3 <br/> 
5 1 2 3 4 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattelu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippattelu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &#8804; rows; j++) { <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int k = i-1; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 2 3 4 5 <br/> 
2 3 4 5 1 <br/> 
3 4 5 2 1 <br/> 
4 5 3 2 1 <br/> 
5 4 3 2 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattentu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippattentu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int j = (i * 2) - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; rows; k++) { <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; j += 2; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (j > (rows * 2) - 1) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; j = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 3 5 7 9 <br/> 
3 5 7 9 1 <br/> 
5 7 9 1 3 <br/> 
7 9 1 3 5 <br/> 
9 1 3 5 7 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Ippattombattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Ippattombattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int j = (i * 2) - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k &#8804; rows; k++) { <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; j += 2; <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = (i * 2) - 3; l >= 1; l-=2) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 3 5 7 9 <br/> 
3 5 7 9 1 <br/> 
5 7 9 3 1 <br/> 
7 9 5 3 1 <br/> 
9 7 5 3 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>        
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j= i*2 ; j &lt; rows*2; j++) { <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = i; l >= 1; l--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; }
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1        1 <br/>
12      21 <br/>
123    321 <br/>
1234  4321 <br/>
1234554321 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattondu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattondu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k &#8804; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;5 <br/> 
&nbsp;&nbsp;&nbsp;4 5 <br/> 
&nbsp;&nbsp;3 4 5 <br/> 
&nbsp;2 3 4 5 <br/> 
1 2 3 4 5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvatteraḍu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvatteraḍu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j > i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = i - 1; l >= 1; l--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;1 <br/>
&nbsp;&nbsp;&nbsp;121 <br/>
&nbsp;&nbsp;12321 <br/>
&nbsp;1234321 <br/>
123454321 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvatmuru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvatmuru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j % 2 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
1 0 <br/> 
1 0 1 <br/> 
1 0 1 0 <br/> 
1 0 1 0 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvatnalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvatnalku { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("0 "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k &lt; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("0 "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 0 0 0 0 <br/>
0 2 0 0 0 <br/> 
0 0 3 0 0 <br/> 
0 0 0 4 0 <br/> 
0 0 0 0 5 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattaidu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattaidu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j > i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(1 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 1 1 1 1 <br/>
1 1 1 2 2 <br/> 
1 1 3 3 3 <br/> 
1 4 4 4 4 <br/> 
5 5 5 5 5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattaaru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattaaru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &#8804; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = rows - 1; k >= i; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 2 3 4 5 4 3 2 1 <br/> 
2 3 4 5 4 3 2 <br/> 
3 4 5 4 3 <br/> 
4 5 4 <br/> 
5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattelu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattelu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j > i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(i + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;1 <br/> 
&nbsp;&nbsp;&nbsp;2 2 <br/> 
&nbsp;&nbsp;3 3 3 <br/> 
&nbsp;4 4 4 4 <br/> 
5 5 5 5 5 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattentu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattentu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>     
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &lt; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = rows - i; k &lt; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(5 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
5 5 5 5 5 <br/> 
4 5 5 5 5 <br/> 
3 4 5 5 5 <br/>
2 3 4 5 5 <br/>
1 2 3 4 5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Muvattombattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Muvattombattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int k = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>      
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; k=i; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; k = k + rows - j; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 6 <br/> 
3 7 10 <br/> 
4 8 11 13 <br/> 
5 9 12 14 15 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>     
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int i=1; i &#8804; rows/2+1; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int j=1;j &#8804; i;j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp * j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int i=1; i &#8804; rows/2; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for(int j=1;j &#8804; rows/2+1-i;j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp*j+" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 4 <br/> 
3 6 9 <br/> 
4 8 12 16 <br/> 
5 10 15 <br/> 
6 12 <br/> 
7 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattondu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattondu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>     
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &lt; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (j % 2 == 0) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(1 + j * rows - (j - 1) * j / 2 + i - j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(1 + j * rows - (j - 1) * j / 2 + rows - 1 - i + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 9 <br/> 
3 8 10 <br/> 
4 7 11 14 <br/> 
5 6 12 13 15 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavatteradu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavatteradu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>     
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &lt; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (j % 2 == 0) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print((rows * (j)) + i + 1 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print((rows * (j + 1)) - i + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("\n"); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 10 11 20 21 <br/>
2 9  12 19 22 <br/> 
3 8  13 18 23 <br/> 
4 7  14 17 24 <br/> 
5 6  15 16 25 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattamooru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattamooru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 0; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>     
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows ; j >= i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = j; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = rows - i+1; k &lt; rows; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
5 5 5 5 5 <br/> 
5 4 4 4 4 <br/> 
5 4 3 3 3 <br/> 
5 4 3 2 2 <br/> 
5 4 3 2 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavatnaalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavatnaalku { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 0; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int a = 0; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int b = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int c = a + b; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(c + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a = b; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b = c; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
1 2 <br/> 
1 2 3 <br/> 
1 2 3 5 <br/> 
1 2 3 5 8 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattaidu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattaidu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 0; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &#8804; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = rows-1; k >= i; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 2; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &#8804; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = rows-1; k >= i; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
5 <br/> 
4 5 4 <br/> 
3 4 5 4 3 <br/> 
2 3 4 5 4 3 2 <br/> 
1 2 3 4 5 4 3 2 1 <br/> 
2 3 4 5 4 3 2 <br/> 
3 4 5 4 3 <br/> 
4 5 4 <br/> 
5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattaru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattaru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i=1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i % 2 == 0) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int reverse = currentRow + counter - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(reverse--  +" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(counter  +" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; currentRow++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
3 2 <br/> 
4 5 6 <br/> 
10 9 8 7 <br/> 
11 12 13 14 15 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattelu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattelu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i=1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i % 2 == 0) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(counter  +" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int reverse = currentRow + counter - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(reverse--  +" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; currentRow++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 3 <br/> 
6 5 4 <br/> 
7 8 9 10 <br/> 
15 14 13 12 11 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattentu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattentu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j >= 1+rows-i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j= i*2 ; j &lt; rows*2-1; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = 1+rows-i; l &#8804; rows; l++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(l!=1) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
543212345 <br/>
5432 2345 <br/>
543   345 <br/>
54     45 <br/>
5       5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Nalavattombattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Nalavattombattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>         
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j= i*2 ; j &lt; rows*2-1; j++) { <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = i; l >= 1; l--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(l!=rows) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; scanner.close(); <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
123454321 <br/>
1234 4321 <br/>
123   321 <br/>
12     21 <br/>
1       1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i - 1; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows-1; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i - 1; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
1 2 1 <br/> 
1 2 3 2 1 <br/> 
1 2 3 4 3 2 1 <br/> 
1 2 3 4 5 4 3 2 1 <br/> 
1 2 3 4 3 2 1 <br/> 
1 2 3 2 1 <br/> 
1 2 1 <br/> 
1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattondu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattondu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = i; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp + 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp - 2; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i - 1; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows - 1; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = i; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp + 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp - 2; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i - 1; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = temp - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 3 2 <br/> 
3 4 5 4 3 <br/> 
4 5 6 7 6 5 4 <br/> 
5 6 7 8 9 8 7 6 5 <br/> 
4 5 6 7 6 5 4 <br/> 
3 4 5 4 3 <br/> 
2 3 2 <br/> 
1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivatteradu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivatteradu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows - 1; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 2 <br/> 
3 3 3 <br/> 
4 4 4 4 <br/> 
5 5 5 5 5 <br/> 
6 6 6 6 <br/> 
7 7 7 <br/> 
8 8 <br/> 
9 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattamooru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattamooru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = 2; l &#8804; i; l++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows - 1; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = i; k >= 1; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = 2; l &#8804; i; l++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(l + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 1 2 <br/> 
3 2 1 2 3 <br/> 
4 3 2 1 2 3 4 <br/> 
5 4 3 2 1 2 3 4 5 <br/> 
4 3 2 1 2 3 4 <br/> 
3 2 1 2 3 <br/> 
2 1 2 <br/> 
1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivatnaalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivatnaalku { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = rows; j > i; j--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int val1 = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 1; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(val1 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; val1 = val1 * 2; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; val1 = val1 / 4; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = i - 1; l >= 1; l--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(val1 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; val1 = val1 / 2; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;1 <br/> 
&nbsp;&nbsp;&nbsp;1 2 1 <br/> 
&nbsp;&nbsp;1 2 4 2 1 <br/> 
&nbsp;1 2 4 8 4 2 1 <br/> 
1 2 4 8 16 8 4 2 1 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattaidu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattaidu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &#8804; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
5 <br/> 
4 5 <br/> 
3 4 5 <br/> 
2 3 4 5 <br/> 
1 2 3 4 5 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattaaru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattaaru { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 2; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while (!isPrime(temp)) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; public static boolean isPrime(int num) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean flag = false; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 2; k &#8804; num / 2; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (num % k == 0) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; flag = true; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (flag) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return true; <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
2 <br/> 
3 5 <br/>
7 11 13 <br/> 
17 19 23 29 <br/> 
31 37 41 43 47 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattelu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattelu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("0"); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = rows; i >= 1; i--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = i; j &#8804; rows; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(j); <br/> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print("0");  <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = rows; k >= i; k--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(k); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
0 <br/>
505 <br/>
45054 <br/>
3450543 <br/>
234505432 <br/>
12345054321 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattentu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattentu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp1 = temp - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 2; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(--temp1 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
1 <br/> 
2 3 2 <br/> 
4 5 6 5 4 <br/> 
7 8 9 10 9 8 7 <br/> 
11 12 13 14 15 14 13 12 11 </b> 
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aivattombattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
public class Aivattombattu { <br/>
&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = rows; l > i; l--) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp1 = temp - 1; <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 2; k &#8804; i; k++) { <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(--temp1 + " "); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
&nbsp; &nbsp; &nbsp; } <br/>
}
</td>
<td>
<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
Printing The Pattern : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;1 <br/> 
&nbsp;&nbsp;&nbsp;2 3 2 <br/> 
&nbsp;&nbsp;4 5 6 5 4 <br/> 
&nbsp;7 8 9 10 9 8 7 <br/> 
11 12 13 14 15 14 13 12 11 </b>
</td>
</tr>
</tbody>
<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aravattu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Aravattu { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = rows; l > i; l--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; (i * 2 - 1); j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print((int) Math.pow(temp, 2) + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									}
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									&nbsp;&nbsp;&nbsp;1 <br/> 
									&nbsp;&nbsp;4 9 16 <br/> 
									&nbsp;25 36 49 64 81 <br/> 
									100 121 144 169 196 225 256 </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aravattontu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Aravattontu { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = rows; l > i; l--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (temp &lt; 10) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp = 0; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(temp + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp++; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int temp1 = temp - 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int k = 2; k &#8804; i; k++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (temp1 == 0) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; temp1 = 10; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(--temp1 + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(--temp1 + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									}
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									&nbsp;&nbsp;&nbsp;&nbsp;1 <br/> 
									&nbsp;&nbsp;&nbsp;2 3 2 <br/> 
									&nbsp;&nbsp;4 5 6 5 4 <br/> 
									&nbsp;7 8 9 0 9 8 7 <br/> 
									1 2 3 4 5 4 3 2 1 </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aravatteradu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Aravatteradu { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int counter = 1;
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int currentRow = 1;
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int l = rows; l > i; l--) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(" "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (i % 2 == 0) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int reverse = currentRow + counter - 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(reverse-- + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter++; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(counter + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; counter++; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; currentRow++; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									}
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									&nbsp;&nbsp;&nbsp;&nbsp;1 <br/> 
									&nbsp;&nbsp;&nbsp;3 2 <br/> 
									&nbsp;&nbsp;4 5 6 <br/> 
									&nbsp;10 9 8 7 <br/> 
									11 12 13 14 15 </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aravattamooru </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Aravattamooru { <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 1; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 1; j &#8804; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print((int) Math.pow(j, i) + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									}
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									1 <br/> 
									1 4 <br/> 
									1 8 27 <br/> 
									1 16 81 256 </b>
								</td>
							</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aravatnaalku </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
								public class Aravatnaalku { <br/>
								&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &lt; rows; i++) { <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int num = 1; <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &#8804; i; j++) { <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i ==0 || j ==0) { <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; num = 1; <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else { <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; num = num * (i - j + 1)/ j; <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/> 
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(num + " "); <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
								&nbsp; &nbsp; &nbsp; } <br/>
								}
							</td>
							<td>
								<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
								Printing The Pattern : <br/>
								1 <br/> 
								1 1 <br/> 
								1 2 1 <br/> 
								1 3 3 1 <br/> 
								1 4 6 4 1 </b>
							</td>
						</tr>
						</tbody>
						<thead class="table-light"> 
							<tr align="left"> <th scope="col" colspan="2"> <h3> <b> Number Pattern Aravattaidu </b> </h3> </th> </tr>
						</thead>
						<tbody>
							<tr> 
							    <td align="justify"> <b> package com.jaladhi; <br/> import java.util.Scanner; <br/>
									public class Aravattaidu{ <br/>
									&nbsp; &nbsp; &nbsp; public static void main(String[] args) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Scanner scanner = new Scanner(System.in); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println("Enter The Number of Rows To Print The Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int rows = scanner.nextInt(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(" Printing the Pattern : "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int i = 0; i &#8804; rows; i++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int x = 0; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int y = 1; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(y+" "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (int j = 0; j &lt; i; j++) { <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; int z = x + y; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(z + " "); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; x = y; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; y = z; <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); <br/>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <br/>
									&nbsp; &nbsp; &nbsp; } <br/>
									}
								</td>
								<td>
									<h3> Output : </h3> <b> Enter The Number of Rows To Print The Pattern : 5 <br/>
									Printing The Pattern : <br/>
									1 <br/> 
									1 1 <br/> 
									1 1 2 <br/> 
									1 1 2 3 <br/> 
									1 1 2 3 5 <br/> 
									1 1 2 3 5 8 </b>
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