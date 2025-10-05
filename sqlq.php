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
                    <a href="dbHome.php" class="nav-item nav-link active"> Data Base </a>
					<a href="gkHome.php" class="nav-item nav-link"> General Knowledge </a>
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
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">J2EE</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> SQL Questions </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> SQL Questions </h1>
                    <p class="mb-4" align="justify"> <b>  </p>
                </div>
            </div>
        </div>
 
         <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 1. What is SQL ? </h4>
                    <p class="mb-4" align="justify"> SQL stands for Structured Query Language, and it's a programming language used for interaction with relational database management systems (RDBMS). SQL includes Fetching, Updating, Inserting, and Removing data from tables. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 2. What are SQL dialects ? </h4>
                    <p class="mb-4" align="justify"> The various versions of SQL, both free and paid, are also called SQL dialects. All the flavors of SQL have a very similar syntax and vary insignificantly only in additional functionality. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 3. What are the main applications of SQL? </h4>
                    <p class="mb-4" align="justify"> 1. Create, Read, Fetch, Delete, Update Tables in a Data Base. </p>
					<p class="mb-4" align="justify"> 2. access, manipulate, and modify data in a table. </p>
					<p class="mb-4" align="justify"> 3. retrieve and summarize the necessary information from a table or several tables. </p>
					<p class="mb-4" align="justify"> 4. add or remove certain rows or columns from a table. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4. What is an SQL statement? </h4>
                    <p class="mb-4" align="justify"> SQL Statement a string of characters interpreted by the SQL engine as a legal command and executed accordingly. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 5. What types of SQL Commands ? </h4>
                    <p class="mb-4" align="justify"> <b> Data Definition Language (DDL) </b> to define and modify the structure of a database. </p>
					<p class="mb-4" align="justify"> <b> Data Manipulation Language (DML) </b> to access, manipulate, and modify data in a database. </p>
					<p class="mb-4" align="justify"> <b> Data Control Language (DCL) </b> to control user access to the data in the database and give or revoke privileges to a specific user or a group of users. </p>
					<p class="mb-4" align="justify"> <b> Transaction Control Language (TCL) </b> to control transactions in a database. </p>
					<p class="mb-4" align="justify"> <b> Data Query Language (DQL) </b> to perform queries on the data in a database to retrieve the necessary information from it. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 6. What are the SQL commands of each Type ? </h4>
                    <p class="mb-4" align="justify"> <b> DDL : </b> CREATE, ALTER TABLE, DROP, TRUNCATE, ADD COLUMN </p>
					<p class="mb-4" align="justify"> <b> DML : </b> UPDATE, DELETE, INSERT </p>
					<p class="mb-4" align="justify"> <b> DCL : </b> GRANT, REVOKE </p>
					<p class="mb-4" align="justify"> <b> TCL : </b> COMMIT, SET TRANSACTION, ROLLBACK, SAVEPOINT </p>
					<p class="mb-4" align="justify"> <b> DQL : </b> SELECT </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 7. What is a Data Base ? </h4>
                    <p class="mb-4" align="justify"> A structured storage space where the data is kept in many tables and organized so that the necessary information can be easily fetched, manipulated, and summarized. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 8. What is DBMS, and what types of DBMS do you know? </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> DBMS stands for Database Management System, a software package used to perform various operations on the data stored in a database, such as Accessing, Updating, Wrangling, Inserting and Removing data. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 9. What are the types of DBMS ? </h4>
                    <p class="mb-4" align="justify"> There are various types of DBMS, such as Relational, Hierarchical, Network, Graph, or Object Oriented. These types are based on the way the data is organized, structured, and stored in the system. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 10. What is RDBMS ? </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> RDBMS stands for Relational Database Management System. RDBMS the most common type of DBMS used for working with data stored in multiple tables related to each other by means of shared keys. The SQL programming language is designed to interact with RDBMS. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 11. Tell me list of RDBMS ? </h4>
                    <table class="table table-bordered">
						<tbody>
							<tr> 
								<td align="justify"> MySQL </td> <td align="justify"> PostgreSQL </td> <td align="justify"> IBM Db2 </td> <td align="justify"> Microsoft SQL Server </td> <td align="justify"> Oracle Database </td> <td align="justify"> MariaDB </td> 
							</tr>
							<tr> 
								<td align="justify"> SQLite  </td> <td align="justify"> Amazon RDS  </td> <td align="justify"> MongoDB  </td> <td align="justify"> Amazon Aurora  </td> <td align="justify"> Microsoft Azure SQL Database  </td> <td align="justify"> Firebird  </td> 
							</tr> 
							<tr> <td align="justify"> Redis  </td> <td align="justify">  Elasticsearch
								</td> <td align="justify"> Google Cloud </td> <td align="justify"> Informix </td> <td align="justify"> Oracle Database XE </td> <td align="justify"> Apache Phoenix </td> 
							</tr> 
							<tr>
								</td> <td align="justify"> Apache Cassandra </td> <td align="justify"> CockroachDB </td> <td align="justify"> CUBRID </td> <td align="justify"> Database Management Library </td> <td align="justify"> Microsoft Access </td> <td align="justify"> Neo4j </td> 
							</tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 12. What are Tables and Fields in SQL ? </h4>
                    <p class="mb-4" align="justify"> A <b> Table </b> is an organized set of related data stored in a tabular form that is in rows and columns. </p>
					<p class="mb-4" align="justify"> A <b> Field </b> is another term for a column of a table. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 13. What is an SQL Query ? </h4>
                    <p class="mb-4" align="justify"> A <b> Query </b> is a piece of code written in SQL to access or modify data from a database. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 14. What types of SQL Queries ? </h4>
					<p class="mb-4" align="justify"> There are two types of SQL Queries : Select and Action Queries. </p>
                    <p class="mb-4" align="justify"> <b> Select </b> are used to retrieve the necessary data. Select also includes limiting, grouping, ordering the data, extracting the data from multiple tables. </p>
					<p class="mb-4" align="justify"> <b> Action </b> are used to create, add, delete, update, rename the data. </p>
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