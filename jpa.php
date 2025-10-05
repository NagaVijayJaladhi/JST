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
                <h1 class="display-2 text-white animated slideInDown mb-4"> J2EE Training</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">J2EE</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> JPA </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> JPA </h1>
                    <p class="mb-4" align="justify"> <b> JPA </b> stands for <b> Java Persistence API </b>, is just a specification that facilitates object-relational mapping to manage relational data in Java applications. It provides a platform to work directly with objects instead of using SQL statements. The Java Persistence API (JPA) is a specification of Java. It is used to persist data between Java object and relational database. JPA acts as a bridge between object-oriented domain models and relational database systems. As JPA is just a specification, it doesn't perform any operation by itself. It requires an implementation. So, ORM tools like Hibernate, TopLink and iBatis implements JPA specifications for data persistence. </p>
					
					<p class="mb-4" align="justify"> The Java Persistence API (JPA), in 2019 renamed to Jakarta Persistence, is a Java application programming interface specification that describes the management of relational data in applications using Java Platform, Standard Edition and Java Platform, Enterprise Edition/Jakarta EE. Persistence in this context covers three areas: The reference implementation for JPA is EclipseLink. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JPA History </h4>
                    <p class="mb-4" align="justify"> The final release date of the JPA 1.0 specification was 11 May 2006 as part of Java Community Process JSR 220. </p> 
					<p class="mb-4" align="justify"> The JPA 2.0 specification was released 10 December 2009 (The Java EE 6 platform requires JPA 2.0) </p> <p class="mb-4" align="justify"> The JPA 2.1 specification was released 22 April 2013 (The Java EE 7 platform requires JPA 2.1[2].) </p>
					
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JPA Entities </h4>
                    <p class="mb-4" align="justify"> A persistence entity is a lightweight Java class whose state is typically persisted to a table in a relational database. Instances of such an entity correspond to individual rows in the table. Entities typically have relationships with other entities, and these relationships are expressed through object/relational metadata. Object/relational metadata can be specified directly in the entity class file by using annotations, or in a separate XML descriptor file distributed with the application. </p> 
					
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Persistence Query Language </h4>
                    <p class="mb-4" align="justify"> The Java Persistence Query Language (JPQL) makes queries against entities stored in a relational database. Queries resemble SQL queries in syntax, but operate against entity objects rather than directly with database tables. </p> 
					
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Enterprise JavaBeans </h4>
                    <p class="mb-4" align="justify"> The EJB 3.0 specification (itself part of the Java EE 5 platform) included a definition of the Java Persistence API. However, end-users do not need an EJB container or a Java EE application server in order to run applications that use this persistence API.[3] Future versions of the Java Persistence API will be defined in a separate JSR and specification rather than in the EJB JSR/specification. The Java Persistence API replaces the persistence solution of EJB 2.0 CMP (Container Managed Persistence). </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Data Objects API</h4>
                    <p class="mb-4" align="justify"> The Java Persistence API was developed in part to unify the Java Data Objects API, and the EJB 2.0 Container Managed Persistence (CMP) API. (As of 2009) most products supporting each of those APIs support the Java Persistence API. </p> 
					<p class="mb-4" align="justify"> The Java Persistence API specifies persistence only for relational database management systems. That is, JPA focuses on object-relational mapping (ORM) (note that there are JPA providers who support other database models besides relational database, but this is outside the scope of what JPA was designed for). Refer to JPA 2 spec section 1 introduction for clarification of the role of JPA, which states very clearly "The technical objective of this work is to provide an object/relational mapping facility for the Java application developer using a Java domain model to manage a relational database." </p> 
					<p class="mb-4" align="justify"> The Java Data Objects specification supports ORM, as well as persistence to other types of database models, for example flat file databases and NoSQL databases, including document databases, graph databases, as well as literally any other conceivable datastore. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Service Data Object API</h4>
                    <p class="mb-4" align="justify">The designers of the Java Persistence API aimed to provide for relational persistence, with many of the key areas taken from object-relational mapping tools such as Hibernate and TopLink. Java Persistence API improved on and replaced EJB 2.0, evidenced by its inclusion in EJB 3.0. The Service Data Objects (SDO) API (JSR 235) has a very different objective to the Java Persistence API and is considered complementary. The SDO API is designed for service-oriented architectures, multiple data formats rather than only relational data, and multiple programming languages. The Java Community Process manages the Java version of the SDO API; the C++ version of the SDO API is managed via OASIS. </p> 
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hibernate </h4>
                    <p class="mb-4" align="justify"> Hibernate provides an open source object-relational mapping framework for Java. Versions 3.2 and later provide an implementation for the Java Persistence API. Gavin King founded the Hibernate project. He represented JBoss on JSR 220, the JCP expert group charged with developing JPA. This led to ongoing controversy and speculation surrounding the relationship between JPA and Hibernate. Sun Microsystems has stated that ideas came from several frameworks, including Hibernate and Java Data Objects. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Spring Data JPA </h4>
                    <p class="mb-4" align="justify"> An implementation of the repository abstraction that's a key building block of Domain-Driven Design based on the Java application framework Spring. Transparently supports all available JPA implementations and supports CRUD operations as well as the convenient execution of database queries. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Object Relational Mapping (ORM) </h4>
                    <p class="mb-4" align="justify"> Object Relational Mapping (ORM) is a functionality which is used to develop and maintain a relationship between an object and relational database by mapping an object state to database column. It is capable to handle various database operations easily such as inserting, updating, deleting, find, fetch all. </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Object Relational Mapping (ORM) Frameworks </h4>
                    <p class="mb-4" align="justify"> Following are the various frameworks that function on ORM mechanism : </p> 
					<p class="mb-4" align="justify"> 1. Hibernate <br/> 2. TopLink <br/> 3. ORMLite <br/> 4. iBATIS <br/> 5. JPOX </p> 
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Mapping Directions </h4>
                    <p class="mb-4" align="justify"> Mapping Directions are divided into two parts : </p> 
					<p class="mb-4" align="justify"> Unidirectional relationship : In this relationship, only one entity can refer the properties to another. It contains only one owing side that specifies how an update can be made in the database. </p> 
					<p class="mb-4" align="justify"> Bidirectional relationship : This relationship contains an owning side as well as an inverse side. So here every entity has a relationship field or refer the property to other entity. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Mapping </h4>
                    <p class="mb-4" align="justify"> Following are the various ORM mappings : </p> 
					<p class="mb-4" align="justify"> One-to-one : This association is represented by @OneToOne annotation. Here, instance of each entity is related to a single instance of another entity. </p> 
					<p class="mb-4" align="justify"> One-to-many:  This association is represented by @OneToMany annotation. In this relationship, an instance of one entity can be related to more than one instance of another entity. </p>
					
					<p class="mb-4" align="justify"> Many-to-one : This mapping is defined by @ManyToOne annotation. In this relationship, multiple instances of an entity can be related to single instance of another entity. </p> 
					<p class="mb-4" align="justify"> Many-to-many : This association is represented by @ManyToMany annotation. Here, multiple instances of an entity can be related to multiple instances of another entity. In this mapping, any side can be the owing side. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Save Vs SaveAndFlush in Spring Java </h4>
					<p class="mb-4" align="justify"> <b> JDBC </b> Save and saveAndFlush <b> both can be used for saving entities. They both are both belong to the Spring data library. save may or may not write your changes to the DB straight away. When we call saveAndFlush system are enforcing the synchronization of your model state with the DB. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Key </b> </th> <th scope="col"> <b> Save </b> </th> <th scope="col"> <b> SaveAndFlush </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Repository </td> <td align="justify"> It belongs to CrudRepository </td> <td align="justify"> It belongs to JPARepository </td> </tr>
							
							<tr> <td align="justify"> Data flush Strategy </td> <td align="justify"> It doesn't flush data directly to a database until and unless we explicitly call flush and commit method. </td> <td align="justify"> It's flush directly flush data to a database. </td> </tr>
							
							<tr> <td align="justify"> Bulk Save </td> <td align="justify"> CrudRepository provides bulk save method </td> <td align="justify"> saveAndFlush method doesn't support the bulk operation </td> </tr>
							
							<tr> <td align="justify"> Data Visibility after saving </td> <td align="justify"> It doesn't flush data directly to a database, therefore, changes will not be visible outside the transaction unless we explicitly call commit() in this transaction. </td> <td align="justify"> Changes will be visible outside the transaction also. </td> </tr>
							
							<tr> <td align="justify"> Use Case </td> <td align="justify"> We use this method when we don't need to use the saved changes at a later point in the same transaction. </td> <td align="justify"> We use this method when we need to use the saved changes at a later point in the same transaction. </td> </tr>
							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JPA Vs Spring Data JPA </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> JPA </b> </th> <th scope="col"> <b> Spring Data JPA </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> JPA is a specification of Object Relational Mapper in Java. </td> <td align="justify"> Spring Data JPA is a simplified abstraction over JPA. </td> </tr>
							<tr> <td align="justify"> JPA can also manage transactions and is built on top of JDBC, allowing us to continue using our native database language. </td> <td align="justify"> Spring Data JPA adds a layer of abstraction to the JPA and more adaptable than JPA and provides simple repositories. </td> </tr>
							<tr> <td align="justify"> For query language, JPA is JPQL (Java Persistence Query Language) </td> <td align="justify"> For query language, Spring Data JPA is JPQL (Java Persistence Query Language) </td> </tr>
							<tr> <td align="justify"> JPA provides a JPA caching implementation technique for enhancing processes. </td> <td align="justify"> Spring Data JPA also provides a JPA caching process. </td> </tr>
							<tr> <td align="justify"> JPA is mainly depends on the JPA implementation. </td> <td align="justify"> Spring Data JPA also relies on JPA implementations. </td> </tr>
							<tr> <td align="justify"> JPA can work with any JPA-compliant implementation </td> <td align="justify"> Spring Data JPA can not work with any JPA-compliant implementation </td> </tr>
							<tr> <td align="justify"> JPA can be integrated with the Spring </td> <td align="justify"> Spring Data JPA can or can not be integrated with the Spring Data family. </td> </tr>
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