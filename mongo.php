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
                <h1 class="display-2 text-white animated slideInDown mb-4"> J2EE Training </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Base</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Mongo Data Base </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Mongo Data Base </h1>
                    <p class="mb-4" align="justify"> <b>  </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Mongo Data Base Introduction </h4>
                    <p class="mb-4" align="justify"> The MongoDB is an open-source document database and leading NoSQL database. MongoDB is written in C++. This tutorial will give you great understanding on MongoDB concepts needed to create and deploy a highly scalable and performance-oriented database. MongoDB features are flexible data models that allows the storage of unstructured data. This provides full support indexing, replication, capabilities and also user friendly APIs. The MongoDB is a multipurpose dataset that is used for modern application development and cloud environments. This scalable architecture enables us to handle system demands and also adding more nodes to distribute the load. MongoDB is a cross-platform, document oriented database that provides, high performance, high availability, and easy scalability. MongoDB works on concept of collection and document. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Collection </h4>
                    <p class="mb-4" align="justify"> Collection is a group of MongoDB documents. It is the equivalent of an RDBMS table. A collection exists within a single database. Collections do not enforce a schema. Documents within a collection can have different fields. Typically, all documents in a collection are of similar or related purpose. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Document </h4>
                    <p class="mb-4" align="justify"> A document is a set of key-value pairs. Documents have dynamic schema. Dynamic schema means that documents in the same collection do not need to have the same set of fields or structure, and common fields in a collection's documents may hold different types of data. </p>
                </div>
            </div>
        </div>  
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Relationship of RDBMS Terminology with MongoDB </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> RDBMS </b> </th> <th scope="col"> <b> MongoDB </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Database </td> <td align="justify"> Database </td> </tr>
							<tr> <td align="justify"> Table </td> <td align="justify"> 	Collection </td> </tr>
							<tr> <td align="justify"> Tuple/Row </td> <td align="justify"> Document </td> </tr>
							<tr> <td align="justify"> column </td> <td align="justify"> Field </td> </tr>
							<tr> <td align="justify"> Table Join </td> <td align="justify"> Embedded Documents </td> </tr>
							<tr> <td align="justify"> Primary Key </td> <td align="justify"> Primary Key (Default key _id provided by MongoDB itself) </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Database Server and Client </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> mysqld/Oracle </td> <td align="justify"> 	mongod </td> </tr>
							<tr> <td align="justify"> mysql/sqlplus </td> <td align="justify"> mongo </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of MongoDB </h4>
                    <p class="mb-4" align="justify"> 1. <b> Schema Less - </b> MongoDB is a document database in which one collection holds different documents.  </p>
					<p class="mb-4" align="justify"> 2. Number of fields, content and size of the document can differ from one document to another. </p>
					<p class="mb-4" align="justify"> 3. Structure of a single object is clear, No complex joins and Turning. </p>
					<p class="mb-4" align="justify"> 4. Deep query-ability. MongoDB supports dynamic queries on documents using a document-based query language that's nearly as powerful as SQL. </p>
					<p class="mb-4" align="justify"> 5. Ease of scale-out − MongoDB is easy to scale. </p>
					<p class="mb-4" align="justify"> 6. Conversion/mapping of application objects to database objects not needed. </p>
					<p class="mb-4" align="justify"> 7. Uses internal memory for storing the (windowed) working set, enabling faster access of data. </p>	
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Why Use MongoDB </h4>
                    <p class="mb-4" align="justify"> 1. <b> Document Oriented Storage - </b> Data is stored in the form of JSON style documents. </p>
					<p class="mb-4" align="justify"> 2. Index on any attribute </p>
					<p class="mb-4" align="justify"> 3. Replication and high availability </p>
					<p class="mb-4" align="justify"> 4. Auto-Sharding and Rich queries </p>
					<p class="mb-4" align="justify"> 5. Fast in-place updates </p>
					<p class="mb-4" align="justify"> 6. Professional support by MongoDB </p>	
                </div>
            </div>
        </div>
	
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Where to Use MongoDB </h4>
                    <p class="mb-4" align="justify"> 1. Big Data and Data Hub </p>
					<p class="mb-4" align="justify"> 2. Content Management and Delivery </p>
					<p class="mb-4" align="justify"> 3. Mobile and Social Infrastructure </p>
					<p class="mb-4" align="justify"> 4. User Data Management</p>	
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Data Model Design </h4>
                    <p class="mb-4" align="justify"> MongoDB provides two types of data models </p>
					<p class="mb-4" align="justify"> 1. Embedded Data Model : you can have (embed) all the related data in a single document, it is also known as de-normalized data model.</p>
					<p class="mb-4" align="justify"> 2. Normalized Data Model : you can refer the sub documents in the original document, using references.  </p>	
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Create Data Base </h4>
					<p class="mb-4" align="justify"> MongoDB use DATABASE_NAME is used to create database. The command will create a new database if it doesn't exist, otherwise it will return the existing database. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> use DATA_BASE_NAME </p>
					<p class="mb-4" align="justify"> <b> Example : </b> use jstdb </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Drop Data Base </h4>
					<p class="mb-4" align="justify"> MongoDB db.dropDatabase() command is used to drop a existing database. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db.dropDatabase() </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db.dropDatabase() </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Check the currently selected Data Base </h4>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Create Collection </h4>
					<p class="mb-4" align="justify"> MongoDB db.createCollection(name, options) is used to create collection. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db.createCollection(name, options) </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db.createCollection("myjst") </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Drop Collection </h4>
					<p class="mb-4" align="justify"> MongoDB's db.collection.drop() is used to drop a collection from the database. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db.COLLECTION_NAME.drop() </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db.myjst.drop() </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Data Types in MongoDB </h4>
					<table class="table table-bordered">
						<tbody>
							<tr> <td align="justify"> String </td> <td align="justify"> This is the most commonly used datatype to store the data. String in MongoDB must be UTF-8 valid. </td> </tr>
							<tr> <td align="justify"> Integer </td> <td align="justify"> This type is used to store a numerical value. Integer can be 32 bit or 64 bit depending upon your server. </td> </tr>
							<tr> <td align="justify"> Boolean </td> <td align="justify"> This type is used to store a boolean (true/ false) value. </td> </tr>
							<tr> <td align="justify"> Double	 </td> <td align="justify"> This type is used to store floating point values. </td> </tr>
							<tr> <td align="justify"> Min keys </td> <td align="justify"> This type is used to compare a value against the lowest BSON elements. </td> </tr>
							<tr> <td align="justify"> Max keys </td> <td align="justify"> This type is used to compare a value against the highest BSON elements. </td> </tr>
							<tr> <td align="justify"> Arrays  </td> <td align="justify"> This type is used to store arrays or list or multiple values into one key. </td> </tr>
							<tr> <td align="justify"> Timestamp </td> <td align="justify"> ctimestamp. This can be handy for recording when a document has been modified or added. </td> </tr>
							<tr> <td align="justify"> Object </td> <td align="justify"> This datatype is used for embedded documents. </td> </tr>
							<tr> <td align="justify"> Null </td> <td align="justify"> This type is used to store a Null value. </td> </tr>
							<tr> <td align="justify"> Symbol </td> <td align="justify"> This datatype is used identically to a string; however, it's generally reserved for languages that use a specific symbol type. </td> </tr>
							<tr> <td align="justify"> Date </td> <td align="justify"> This datatype is used to store the current date or time in UNIX time format. You can specify your own date time by creating object of Date and passing day, month, year into it. </td> </tr>
							<tr> <td align="justify"> Object ID </td> <td align="justify"> This datatype is used to store the documents ID. </td> </tr>
							<tr> <td align="justify"> Binary Data </td> <td align="justify"> This datatype is used to store binary data. </td> </tr>
							<tr> <td align="justify"> Code </td> <td align="justify"> This datatype is used to store JavaScript code into the document. </td> </tr>
							<tr> <td align="justify"> Regular Expression </td> <td align="justify"> This datatype is used to store regular expression. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Insert Document </h4>
					<p class="mb-4" align="justify"> To insert data into MongoDB collection, you need to use MongoDB's insert() or save() method. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db.COLLECTION_NAME.insert(document) </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db.myjst.drop() </p>
					
					<p class="mb-4" align="justify"> If you need to insert only one document into a collection you can use this method. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db.COLLECTION_NAME.insertOne(document) </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db.myjst.drop() </p>
					
					<p class="mb-4" align="justify"> You can insert multiple documents using the insertMany() method. To this method you need to pass an array of documents. </p>
                    <p class="mb-4" align="justify"> <b> Syntax : </b> db.COLLECTION_NAME.insertMany(document) </p>
					<p class="mb-4" align="justify"> <b> Example : </b> db.myjst.drop() </p>
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