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
                        <li class="breadcrumb-item"><a href="#"> Framework </a> </li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Hibernate Framework </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Hibernate Framework </h1>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hibernate Refresher </h4>
                    <p class="mb-2" align="justify"> <b class="text-success"> Hibernate </b> is a Java framework that simplifies the development of Java application to interact with the database. Hibernate was started in 2001 by Gavin King as an alternative to EJB style Entity Bean. Hibernate is an Open Source, Lightweight, ORM (Object Relational Mapping) Tool. Hibernate implements the specifications of JPA (Java Persistence API) for data persistence. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ORM (Object Relational Mapping) Tool </h4>
                    <p class="mb-2" align="justify"> An <b class="text-success"> ORM (Object Relational Mapping) </b> Tool simplifies the Data Creation, Data Manipulation and Data Access. Hibernate is a programming technique that maps the object to the data stored in the database. The ORM Tool internally uses the JDBC API to interact with the database. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Persistence API (JPA) Refresher </h4>
                    <p class="mb-2" align="justify"> An <b class="text-success"> Java Persistence API (JPA) </b> is a Java specification that provides certain functionality and standard to ORM tools. The javax.persistence package contains the JPA classes and interfaces. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of Hibernate Framework </h4>
					<table class="table table-bordered">
						<tbody>
							<tr> 
								<td align="justify"> Open Source and Lightweight </td> 
								<td align="justify"> Hibernate framework is open source under the LGPL (Lesser General Public Liceense) and lightweight. </td> 
							</tr>
							<tr> 
								<td align="justify"> Fast Performance </td> 
								<td align="justify"> The performance of hibernate framework is fast because cache is internally used in hibernate framework. <br/> There are two types of cache in hibernate framework first level cache and second level cache. <br/> First level cache is enabled by default. </td> 
							</tr>
							<tr> 
								<td align="justify"> Database Independent Query </td> 
								<td align="justify"> HQL (Hibernate Query Language) is the object-oriented version of SQL. <br/> HQL generates the database independent queries. <br/> So you don't need to write database specific queries. </td> 
							</tr>
							<tr> 
								<td align="justify"> Automatic Table Creation </td> 
								<td align="justify"> Hibernate framework provides the facility to create the tables of the database automatically. <br/> So there is no need to create tables in the database manually. </td> 
							</tr>	
							<tr> 
								<td align="justify"> Simplifies Complex Join </td> 
								<td align="justify"> Fetching data from multiple tables is easy in hibernate framework. </td> 
							</tr>	
							<tr> 
								<td align="justify"> Provides Query Statistics and Database Status </td> 
								<td align="justify"> Hibernate supports Query cache and provide statistics about query and database status. </td> 
							</tr>	
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hibernate Lifecycle </h4>
					<p class="mb-2" align="justify"> We create an object of an entity and save it into the database or we fetch the data of an entity from the database. Each entity is associated with the lifecycle. The entity object passes through the 3 stages of the lifecycle. </p>
					<p class="mb-2" align="justify"> 1. Transient State </p>
					<p class="mb-2" align="justify"> 2. Persistent State </p>
					<p class="mb-2" align="justify"> 3. Detached State </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Transient State </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. The transient state is the initial state of an object. </td> </tr>
							<tr> <td align="justify"> 2. Once we create an instance of POJO class, then the object entered in the transient state. </td> </tr>
							<tr> <td align="justify"> 3. An object is not associated with the Session. So, the transient state is not related to any database. </td> </tr>
							<tr> <td align="justify"> 4. Modifications in the data don't affect any changes in the database. </td> </tr>	
							<tr> <td align="justify"> 5. The transient objects exist in the heap memory. They are independent of Hibernate. </td> </tr>	
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Persistent State </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. As soon as the object associated with the Session, it entered in the persistent state. </td> </tr>
							<tr> <td align="justify"> 2. Hence, we can say that an object is in the persistence state when we save or persist it. </td> </tr>
							<tr> <td align="justify"> 3. Here, each object represents the row of the database table. </td> </tr>
							<tr> <td align="justify"> 4. So, modifications in the data make changes in the database. </td> </tr>	
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Detached State </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Once we either close the session or clear its cache, then the object entered into the detached state. </td> </tr>
							<tr> <td align="justify"> 2. As an object is no more associated with the Session, modifications in the data don't affect any changes in the database. </td> </tr>
							<tr> <td align="justify"> 3. However, the detached object still has a representation in the database. </td> </tr>
							<tr> <td align="justify"> 4. If we want to persist the changes made to a detached object, it is required to reattach the application to a valid Hibernate session. </td> </tr>	
							<tr> <td align="justify"> 5. To associate the detached object with the new hibernate session, use any of these methods - load(), merge(), refresh(), update() or save() on a new session with the reference of the detached object. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Generator classes in Hibernate </h4>
                    <p class="mb-2" align="justify"> The <b class="text-success"> Generator Class </b> is a sub-element of id. It is used to generate the unique identifier for the objects of persistent class. There are many generator classes defined in the Hibernate Framework. </p>
					
					 <p class="mb-2" align="justify"> All the <b class="text-success"> Generator Class </b> implements the <b class="text-success"> org.hibernate.id.IdentifierGenerator Interface </b> . The application programmer may create one's own generator classes by implementing the IdentifierGenerator interface. Hibernate framework provides many built-in generator classes: </p>
					 
					<table class="table table-borderless">
						<tbody>
							<tr> 
								<td align="justify"> 1. </td> 
								<td align="justify"> <b class="text-success"> assigned </b> is the default generator strategy if there is no &le; generator&ge; element . In this case, application assigns the id. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 2. </td> 
								<td align="justify"> <b class="text-success"> increment </b> generates the unique id only if no other process is inserting data into this table. It generates short, int or long type identifier. If a table contains an identifier then the application considers its maximum value else the application consider that the first generated identifier is 1. For each attribute value, the hibernate increment the identifier by 1. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 3. </td> 
								<td align="justify"> <b class="text-success"> sequence </b> uses the sequence of the database. if there is no sequence defined, it creates a sequence automatically e.g. in case of Oracle database, it creates a sequence named HIBERNATE_SEQUENCE. In case of Oracle, DB2, SAP DB, Postgre SQL or McKoi, it uses sequence but it uses generator in interbase. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 4. </td> 
								<td align="justify"> <b class="text-success"> hilo </b> It uses high and low algorithm to generate the id of type short, int and long.  </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 5. </td> 
								<td align="justify"> <b class="text-success"> native </b> uses identity, sequence or hilo depending on the database vendor. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 6. </td> 
								<td align="justify">  <b class="text-success"> identity </b> is used in Sybase, My SQL, MS SQL Server, DB2 and HypersonicSQL to support the id column. The returned id is of type short, int or long. It is responsibility of database to generate unique identifier. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 7. </td> 
								<td align="justify"> <b class="text-success"> seqhilo </b> uses high and low algorithm on the specified sequence name. The returned id is of type short, int or long. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 8. </td> 
								<td align="justify"> <b class="text-success"> uuid </b> uses 128-bit UUID algorithm to generate the id. The returned id is of type String, unique within a network (because IP is used). The UUID is represented in hexadecimal digits, 32 in length. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 9. </td> 
								<td align="justify"><b class="text-success"> guid </b> uses GUID generated by database of type string. It works on MS SQL Server and MySQL. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 10. </td> 
								<td align="justify"> <b class="text-success"> select </b> uses the primary key returned by the database trigger. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 11. </td> 
								<td align="justify"> <b class="text-success"> foreign </b> uses the id of another associated object, mostly used with &le; one-to-one&ge; association. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 12. </td> 
								<td align="justify"> <b class="text-success"> sequence-identity </b> uses a special sequence generation strategy. It is supported in Oracle 10g drivers only. </td> 
							</tr>
							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> SQL Dialects in Hibernate </h4>
					<p class="mb-2" align="justify"> The dialect specifies the type of database used in hibernate so that hibernate generate appropriate type of SQL statements. For connecting any hibernate application with the database, it is required to provide the configuration of SQL dialect. </p>
					<p class="mb-2" align="justify"> Syntax of SQL Dialect </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> RDBMS </b> </th> <th scope="col"> <b> Dialect </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Oracle </td> <td align="justify"> org.hibernate.dialect.OracleDialect </td> </tr>
							<tr> <td align="justify"> Oracle9i </td> <td align="justify"> org.hibernate.dialect.Oracle9iDialect </td> </tr>
							<tr> <td align="justify"> Oracle10g </td> <td align="justify"> org.hibernate.dialect.Oracle10gDialect </td> </tr>
							<tr> <td align="justify"> MySQL </td> <td align="justify"> org.hibernate.dialect.MySQLDialect </td> </tr>
							<tr> <td align="justify"> MySQL with InnoDB </td> <td align="justify"> org.hibernate.dialect.MySQLInnoDBDialect </td> </tr>
							<tr> <td align="justify"> MySQL with MyISAM </td> <td align="justify"> org.hibernate.dialect.MySQLMyISAMDialect </td> </tr>
							<tr> <td align="justify"> DB2 </td> <td align="justify"> org.hibernate.dialect.DB2Dialect </td> </tr>
							<tr> <td align="justify"> DB2 AS/400 </td> <td align="justify"> org.hibernate.dialect.DB2400Dialect </td> </tr>
							<tr> <td align="justify"> DB2 OS390 </td> <td align="justify"> org.hibernate.dialect.DB2390Dialect </td> </tr>
							<tr> <td align="justify"> Microsoft SQL Server </td> <td align="justify"> org.hibernate.dialect.SQLServerDialect </td> </tr>
							<tr> <td align="justify"> Sybase </td> <td align="justify"> org.hibernate.dialect.SybaseDialect </td> </tr>
							<tr> <td align="justify"> Sybase Anywhere </td> <td align="justify"> org.hibernate.dialect.SybaseAnywhereDialect </td> </tr>
							<tr> <td align="justify"> PostgreSQL </td> <td align="justify"> org.hibernate.dialect.PostgreSQLDialect </td> </tr>
							<tr> <td align="justify"> SAP DB </td> <td align="justify"> org.hibernate.dialect.SAPDBDialect </td> </tr>
							<tr> <td align="justify"> Informix </td> <td align="justify"> org.hibernate.dialect.InformixDialect </td> </tr>
							<tr> <td align="justify"> HypersonicSQL </td> <td align="justify"> org.hibernate.dialect.HSQLDialect </td> </tr>
							<tr> <td align="justify"> Ingres </td> <td align="justify"> org.hibernate.dialect.IngresDialect </td> </tr>
							<tr> <td align="justify"> Progress </td> <td align="justify"> org.hibernate.dialect.ProgressDialect </td> </tr>
							<tr> <td align="justify"> Mckoi SQL </td> <td align="justify"> org.hibernate.dialect.MckoiDialect </td> </tr>
							<tr> <td align="justify"> Interbase </td> <td align="justify"> org.hibernate.dialect.InterbaseDialect </td> </tr>
							<tr> <td align="justify"> Pointbase </td> <td align="justify"> org.hibernate.dialect.PointbaseDialect </td> </tr>
							<tr> <td align="justify"> FrontBase </td> <td align="justify"> org.hibernate.dialect.FrontbaseDialect </td> </tr>
							<tr> <td align="justify"> Firebird </td> <td align="justify"> org.hibernate.dialect.FirebirdDialect </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Inheritance Mapping in Hibernate </h4>
                    <p class="mb-2" align="justify"> We can map the inheritance hierarchy classes with the table of the database. There are three inheritance mapping strategies defined in the hibernate:. </p>
					<table class="table table-borderless">
						<tbody>
							<tr> 
								<td align="justify"> 1. Table Per Hierarchy </td> 
								<td align="justify"> Single Table is required to map the whole hierarchy, an extra column (known as discriminator column) <br/> is added to identify the class. But nullable values are stored in the table . </td> 
							</tr>
							<tr> 
								<td align="justify"> 2. Table Per Concrete class </td> 
								<td align="justify"> Tables are created as per class. But duplicate column is added in subclass tables. </td> 
							</tr>
							<tr> 
								<td align="justify"> 3. Table Per Subclass </td> 
								<td align="justify"> Tables are created as per class but related by foreign key. So there are no duplicate columns. </td> 
							</tr>							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Caching in Hibernate </h4>
                    <p class="mb-2" align="justify"> Hibernate caching improves the performance of the application by pooling the object in the cache. <br/> It is useful when we have to fetch the same data multiple times. </p>
					 
					<table class="table table-borderless">
						<tbody>
							<tr> 
								<td align="justify"> 1. First Level Cache </td> 
								<td align="justify"> Session object holds the First Level Cache data. <br/> The First Level Cache is enabled by default. <br/> The First Level Cache data will not be available to entire application. </br/> An application can use many session object. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> 2. Second Level Cache </td> 
								<td align="justify"> SessionFactory object holds the Second Level Cache data. <br/> The data stored in the Second Level Cache will be available to entire application. <br/> Second Level Cache need to enable it explicitely. <br/> Different vendors have provided the implementation of Second Level Cache. <br/>
								1. EH (Easy Hibernate) Cache <br/> 2. Swarm Cache <br/> 3. OS Cache <br/> 4. JBoss Cache </td> 
							</tr>							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Second Level Cache in Hibernate </h4>
					<p class="mb-2" align="justify"> Hibernate second level cache uses a common cache for all the session object of a session factory. It is useful if you have multiple session objects from a session factory. SessionFactory holds the second level cache data. It is global for all the session objects and not enabled by default. </p>

					<table class="table table-borderless">
						<tbody>
							<tr> <td align="justify"> <b class="text-success"> 1. read-only </b> caching will work for read only operation. caching will work for read only operation. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> 2. nonstrict-read-write </b> caching will work for read and write but one at a time. </td>  </tr>
							<tr> <td align="justify"> <b class="text-success"> 3. read-write </b> caching will work for read and write, can be used simultaneously. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> 4. transactional </b> caching will work for transaction. </td> </tr>
						</tbody> 
					</table>
					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Implementation </b> </th> <th scope="col"> <b> read-only </b> </th> 
							<th scope="col"> <b> nonstrict-read-write </b> </th> <th scope="col"> <b> read-write </b> </th> 
							<th scope="col"> <b> transactional </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> EH Cache </td> <td align="justify"> Yes </td> <td align="justify"> Yes </td> <td align="justify"> Yes </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> OS Cache </td> <td align="justify"> Yes </td> <td align="justify"> Yes </td> <td align="justify"> Yes </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> Swarm Cache </td> <td align="justify"> Yes </td> <td align="justify"> Yes </td> <td align="justify"> No </td> <td align="justify"> No </td></tr>
							<tr> <td align="justify"> JBoss Cache </td> <td align="justify"> No </td> <td align="justify"> No </td> <td align="justify"> No </td> <td align="justify"> Yes </td> </tr>
							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Get Method Vs Load Method in Hibernate </h4>
					<p class="mb-2" align="justify"> Get Method and Load Method are two methods which is used to fetch data for the given identifier. They both belong to Hibernate Session class. Get Method return null, If no row is available in the session cache or the database for the given identifier whereas Load method throws object not found exception. </p>					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Key </b> </th> <th scope="col"> <b> Get Method </b> </th> 
							<th scope="col"> <b> Load Method </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Basic </td> <td align="justify"> It  is used to fetch data from the database for the given identifier </td> <td align="justify"> It  is also used to fetch data from the database for the given identifier </td> </tr>
							<tr> <td align="justify"> Null Object  </td> <td align="justify"> It object not found for the given identifier then it will return null object </td> <td align="justify"> It will throw object not found exception </td> </tr>
							<tr> <td align="justify"> Lazy or <br/> Eager loading </td> <td align="justify"> It returns fully initialized object so this method eager load the object </td> <td align="justify"> It always returns proxy object so this method is lazy load the object </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> It is slower than Load Method because it return fully initialized object which impact the performance of the application </td> <td align="justify"> It is slightly faster. </td> </tr>
							<tr> <td align="justify"> Use Case </td> <td align="justify"> If you are not sure that object exist then use Get Method </td> <td align="justify"> If you are sure that object exist then use Load Method </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Save Method Vs Persist Method in Hibernate </h4>
					<p class="mb-2" align="justify"> Save Method and Persist Method both methods are used for saving object in the database. </p>	
					<p class="mb-2" align="justify"> <b class="text-success"> Save Method </b> Persist the given transient instance, first assigning a generated identifier. (Or using the current value of the identifier property if the assigned generator is used.) This operation cascades to associated instances if the association is mapped with cascade="save-update". </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Persist Method </b> Make a transient instance persistent. This operation cascades to associated instances if the association is mapped with cascade="persist". The semantics of this method are defined by JSR-220. </p>					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Key </b> </th> <th scope="col"> <b> Save Method </b> </th> 
							<th scope="col"> <b> Persist Method </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Basic </td> <td align="justify"> It stores object in database </td> <td align="justify"> It also stores object in database </td> </tr>
							<tr> <td align="justify"> Return Type </td> <td align="justify"> It return generated id and return type is serializable </td> <td align="justify"> It does not return anything. Its void return type. </td> </tr>
							<tr> <td align="justify"> Transaction Boundaries </td> <td align="justify"> It can save object within boundaries and outside boundaries </td> <td align="justify"> It can only save object within the transaction boundaries </td> </tr>
							<tr> <td align="justify"> Detached Object </td> <td align="justify"> It will create a new row in the table for detached object </td> <td align="justify"> It will throw persistence exception for detached object </td> </tr>
							<tr> <td align="justify"> Supported by </td> <td align="justify"> It is only supported by Hibernate  </td> <td align="justify"> It is also supported by JPA </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Lazy Loading in Hibernate </h4>
					<p class="mb-2" align="justify"> Definition:Hibernate delays the loading of related entities until they are actually accessed in your code. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Advantages </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Reduced Memory Consumption: Only loads the data that is immediately needed, saving memory.</td> </tr>
							<tr> <td align="justify"> 2. Fewer Initial Queries: Reduces the initial number of database queries. </td> </tr>	
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Disadvantages </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Potential for "N+1" Problem: If you access a collection of related entities in a loop, it can lead to multiple database queries (one for the parent and one for each related entity). </td> </tr>
							<tr> <td align="justify"> 2. LazyInitializationException: Can occur if you try to access a lazy-loaded entity outside of a Hibernate session. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> When to Use </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. When you don't always need related data. </td> </tr>
							<tr> <td align="justify"> 2. When related entities are large and not always required. </td> </tr>
							<tr> <td align="justify"> 3. When you want to minimize initial database load. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Eager Loading in Hibernate </h4>
					<p class="mb-2" align="justify"> Definition: Hibernate fetches all associated entities when the parent entity is loaded </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Advantages </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Reduced Database Queries: All related data is fetched in a single query, potentially improving performance. </td> </tr>
							<tr> <td align="justify"> 2. Simplified Code: You don't need to worry about accessing related entities outside of a session.  </td> </tr>	
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Disadvantages </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1.Increased Memory Consumption: Loads all related data into memory, even if it's not used. </td> </tr>
							<tr> <td align="justify"> 2. More Initial Queries: Can lead to more database queries if the parent entity is frequently accessed with related data that is not always needed. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> When to Use </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. When you always need related data.  </td> </tr>
							<tr> <td align="justify"> 2. When you want to minimize database round trips. </td> </tr>
							<tr> <td align="justify"> 3. When you are sure that the related data will be used. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Lazy Loading Vs Eager Loading in Hibernate </h4>
					<p class="mb-2" align="justify"> Lazy and Eager are two types of data loading strategies in ORMs such as hibernate and eclipse Link.  These data loading strategies we used when one entity class is having references to other Entities like Student and Address (Address in the Student). </p>

					<p class="mb-2" align="justify"> These data loading strategies we used when one entity class is having references to other Entities like Student and Address (Address in the Student). </p>					
									
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Key </b> </th> <th scope="col"> <b> Lazy </b> </th> 
							<th scope="col"> <b> Eager </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Fetching strategy </td> <td align="justify"> In Lazy loading, associated data loads only when we explicitly call getter or size method. </td> <td align="justify"> In Eager loading, data loading happens at the time of their parent is fetched </td> </tr>
							<tr> <td align="justify"> Default Strategy </td> <td align="justify"> ManyToMany and OneToMany associations used lazy loading strategy by default. </td> <td align="justify"> ManyToOne and OneToOne associations used lazy loading strategy by default. </td> </tr>
							<tr> <td align="justify"> Loading Configurations </td> <td align="justify"> It can be enabled by using the annotation parameter : <br/> fetch = FetchType.LAZY </td> <td align="justify"> It can be enabled by using the annotation parameter : <br/> fetch = FetchType.EAGER </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Initial load time much smaller than Eager loading </td> <td align="justify"> Loading too much unnecessary data might impact performance </td> </tr>
							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hibernate Mapping Annotations </h4>
					<table class="table table-bordered">
						<tbody>
							
							<tr> 
								<td align="justify"> @AccessType </td> 
								<td align="justify"> The @AccessType annotation is deprecated. You should use either the JPA @Access or the Hibernate native @AttributeAccessor annotation. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Any </td> 
								<td align="justify"> The @Any annotation is used to define the any-to-one association which can point to one one of several entity types. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @AnyMetaDef </td> 
								<td align="justify"> The @AnyMetaDef annotation is used to provide metadata about an @Any or @ManyToAny mapping. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @AnyMetaDefs </td> 
								<td align="justify"> The @AnyMetaDefs annotation is used to group multiple @AnyMetaDef annotations.	 </td> 
							</tr>
							<tr> 
								<td align="justify"> @AttributeAccessor </td> 
								<td align="justify"> The @AttributeAccessor annotation is used to specify a custom PropertyAccessStrategy. Should only be used to name a custom PropertyAccessStrategy. For property/field access type, the JPA @Accessannotation should be preferred. However, if this annotation is used with either value="property" or value="field", it will act just as the corresponding usage of the JPA @Access annotation. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @BatchSize </td> 
								<td align="justify"> The @BatchSize annotation is used to specify the size for batch loading the entries of a lazy collection. </td> 
							</tr>
							<tr> 
								<td align="justify"> @Cache </td> 
								<td align="justify"> The @Cache annotation is used to specify the CacheConcurrencyStrategy of a root entity or a collection. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Cascade </td> 
								<td align="justify"> The @Cascade annotation is used to apply the Hibernate specific CascadeType strategies (e.g. CascadeType.LOCK, CascadeType.SAVE_UPDATE, CascadeType.REPLICATE) on a given association. For JPA cascading, prefer using the javax.persistence.CascadeType instead. When combining both JPA and Hibernate CascadeType strategies, Hibernate will merge both sets of cascades. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Check </td> 
								<td align="justify"> The @Check annotation is used to specify an arbitrary SQL CHECK constraint which can be defined at the class level. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @CollectionId </td> 
								<td align="justify"> The @CollectionId annotation is used to specify an identifier column for an idbag collection. You might want to use the JPA @OrderColumn instead. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @CollectionType </td> 
								<td align="justify"> The @CollectionType annotation is used to specify a custom collection type. The collection can also name a @Type, which defines the Hibernate Type of the collection elements. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ColumnDefault </td> 
								<td align="justify"> The @ColumnDefault annotation is used to specify the DEFAULT DDL value to apply when using the automated schema generator. The same behavior can be achieved using the definition attribute of the JPA @Column annotation. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Columns </td> 
								<td align="justify"> The @Columns annotation is used to group multiple JPA @Column annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ColumnTransformer </td> 
								<td align="justify"> The @ColumnTransformer annotation is used to customize how a given column value is read from or write into the database. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ColumnTransformers </td> 
								<td align="justify"> The @ColumnTransformers annotation is used to group multiple @ColumnTransformer annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @CreationTimestamp </td> 
								<td align="justify"> The @CreationTimestamp annotation is used to specify that the currently annotated temporal type must be initialized with the current JVM timestamp value. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @DiscriminatorFormula </td> 
								<td align="justify"> The @DiscriminatorFormula annotation is used to specify a Hibernate @Formula to resolve the inheritance discriminator value. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @DiscriminatorOptions </td> 
								<td align="justify"> The @DiscriminatorOptions annotation is used to provide the force and insert Discriminator properties. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @DynamicInsert </td> 
								<td align="justify"> The @DynamicInsert annotation is used to specify that the INSERT SQL statement should be generated whenever an entity is to be persisted. Hibernate uses a cached INSERT statement that sets all table columns. When the entity is annotated with the @DynamicInsert annotation, the PreparedStatement is going to include only the non-null columns. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @DynamicUpdate </td> 
								<td align="justify"> The @DynamicUpdate annotation is used to specify that the UPDATE SQL statement should be generated whenever an entity is modified. Hibernate uses a cached UPDATE statement that sets all table columns. When the entity is annotated with the @DynamicUpdate annotation, the PreparedStatement is going to include only the columns whose values have been changed. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Entity </td> 
								<td align="justify"> The @Entity annotation is deprecated. Use the JPA @Entity annotation instead. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Fetch </td> 
								<td align="justify"> The @Fetch annotation is used to specify the Hibernate specific FetchMode (e.g. JOIN, SELECT, SUBSELECT) used for the currently annotated association: </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FetchProfile </td> 
								<td align="justify"> The @FetchProfile annotation is used to specify a custom fetching profile, similar to a JPA Entity Graph. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FetchProfile.FetchOverride </td> 
								<td align="justify"> The @FetchProfile.FetchOverride annotation is used in conjunction with the @FetchProfile annotation, and it’s used for overriding the fetching strategy of a particular entity association. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FetchProfiles </td> 
								<td align="justify"> The @FetchProfiles annotation is used to group multiple @FetchProfile annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Filter </td> 
								<td align="justify"> The @Filter annotation is used to add filters to an entity or the target entity of a collection. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FilterDef </td> 
								<td align="justify"> The @FilterDef annotation is used to specify a @Filter definition (name, default condition and parameter types, if any). </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FilterDefs </td> 
								<td align="justify"> The @FilterDefs annotation is used to group multiple @FilterDef annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FilterJoinTable </td> 
								<td align="justify"> The @FilterJoinTable annotation is used to add @Filter capabilities to a join table collection. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @FilterJoinTables </td> 
								<td align="justify"> The @FilterJoinTables annotation is used to group multiple @FilterJoinTable annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Filters </td> 
								<td align="justify"> The @Filters annotation is used to group multiple @Filter annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ForeignKey </td> 
								<td align="justify"> The @ForeignKey annotation is deprecated. Use the JPA 2.1 @ForeignKey annotation instead. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Formula </td> 
								<td align="justify"> The @Formula annotation is used to specify an SQL fragment that is executed in order to populate a given entity attribute. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Generated </td> 
								<td align="justify"> The @Generated annotation is used to specify that the currently annotated entity attribute is generated by the database. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @GeneratorType </td> 
								<td align="justify"> The @GeneratorType annotation is used to provide a ValueGenerator and a GenerationTime for the currently annotated generated attribute. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @GenericGenerator </td> 
								<td align="justify"> The @GenericGenerator annotation can be used to configure any Hibernate identifier generator. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @GenericGenerators </td> 
								<td align="justify"> The @GenericGenerators annotation is used to group multiple @GenericGenerator annotations.@Immutable The @Immutable annotation is used to specify that the annotated entity, attribute, or collection is immutable. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Index </td> 
								<td align="justify"> The @Index annotation is deprecated. Use the JPA @Index annotation instead. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @IndexColumn </td> 
								<td align="justify"> The @IndexColumn annotation is deprecated. Use the JPA @OrderColumn annotation instead. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @JoinColumnOrFormula </td> 
								<td align="justify"> The @JoinColumnOrFormula annotation is used to specify that the entity association is resolved either through a FOREIGN KEY join (e.g. @JoinColumn) or using the result of a given SQL formula (e.g. @JoinFormula). </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @JoinColumnsOrFormulas </td> 
								<td align="justify"> The @JoinColumnsOrFormulas annotation is used to group multiple @JoinColumnOrFormula annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @JoinFormula </td> 
								<td align="justify"> The @JoinFormula annotation is used as a replacement for @JoinColumn when the association does not have a dedicated FOREIGN KEY column. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @LazyCollection </td> 
								<td align="justify"> The @LazyCollection annotation is used to specify the lazy fetching behavior of a given collection. The TRUE and FALSE values are deprecated since you should be using the JPA FetchType attribute of the @ElementCollection, @OneToMany, or @ManyToMany collection. The EXTRA value has no equivalent in the JPA specification, and it’s used to avoid loading the entire collection even when the collection is accessed for the first time. Each element is fetched individually using a secondary query. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @LazyGroup </td> 
								<td align="justify"> The @LazyGroup annotation is used to specify that an entity attribute should be fetched along with all the other attributes belonging to the same group. To load entity attributes lazily, bytecode enhancement is needed. By default, all non-collection attributes are loaded in one group named "DEFAULT". This annotation allows defining different groups of attributes to be initialized together when access one attribute in the group. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @LazyToOne </td> 
								<td align="justify"> The @LazyToOne annotation is used to specify the laziness options, represented by LazyToOneOption, available for a @OneToOne or @ManyToOne association. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ListIndexBase </td> 
								<td align="justify"> The @ListIndexBase annotation is used to specify the start value for a list index, as stored in the database. List indexes are stored starting at zero. Generally used in conjunction with @OrderColumn. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Loader </td> 
								<td align="justify"> The @Loader annotation is used to override the default SELECT query used for loading an entity loading. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ManyToAny </td> 
								<td align="justify"> The @ManyToAny annotation is used to specify a many-to-one association when the target type is dynamically resolved. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @MapKeyType </td> 
								<td align="justify"> The @MapKeyType annotation is used to specify the map key type. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @MetaValue </td> 
								<td align="justify"> The @MetaValue annotation is used by the @AnyMetaDef annotation to specify the association between a given discriminator value and an entity type. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NamedNativeQueries </td> 
								<td align="justify"> The @NamedNativeQueries annotation is used to group multiple @NamedNativeQuery annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NamedNativeQuery </td> 
								<td align="justify"> The @NamedNativeQuery annotation extends the JPA @NamedNativeQuery with Hibernate specific features. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NamedQueries </td> 
								<td align="justify"> The @NamedQueries annotation is used to group multiple @NamedQuery annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NamedQuery </td> 
								<td align="justify"> The @NamedQuery annotation extends the JPA @NamedQuery with Hibernate specific features. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Nationalized </td> 
								<td align="justify"> The @Nationalized annotation is used to specify that the currently annotated attribute is a character type (e.g. String, Character, Clob) that is stored in a nationalized column type (NVARCHAR, NCHAR, NCLOB). </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NaturalId </td> 
								<td align="justify"> The @NaturalId annotation is used to specify that the currently annotated attribute is part of the natural id of the entity. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NaturalIdCache </td> 
								<td align="justify"> The @NaturalIdCache annotation is used to specify that the natural id values associated with the annotated entity should be stored in the second-level cache. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @NotFound </td> 
								<td align="justify"> The @NotFound annotation is used to specify the NotFoundAction strategy for when an element is not found in a given association. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @OnDelete </td> 
								<td align="justify"> The @OnDelete annotation is used to specify the delete strategy employed by the currently annotated collection, array or joined subclasses. This annotation is used by the automated schema generation tool to generate the appropriate FOREIGN KEY DDL cascade directive. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @OptimisticLock </td> 
								<td align="justify"> The @OptimisticLock annotation is used to specify if the currently annotated attribute will trigger an entity version increment upon being modified. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @OrderBy </td> 
								<td align="justify"> The @OrderBy annotation is used to specify a SQL ordering directive for sorting the currently annotated collection. It differs from the JPA @OrderBy annotation because the JPA annotation expects a JPQL order-by fragment, not an SQL directive. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @ParamDef </td> 
								<td align="justify"> The @ParamDef annotation is used in conjunction with @FilterDef so that the Hibernate Filter can be customized with runtime-provided parameter values. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Parameter </td> 
								<td align="justify"> The @Parameter annotation is a generic parameter (basically a key/value combination) used to parametrize other annotations, like @CollectionType, @GenericGenerator, and @Type, @TypeDef. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Parent </td> 
								<td align="justify"> The @Parent annotation is used to specify that the currently annotated embeddable attribute references back the owning entity. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Persister </td> 
								<td align="justify"> The @Persister annotation is used to specify a custom entity or collection persister. For entities, the custom persister must implement the EntityPersister interface. For collections, the custom persister must implement the CollectionPersister interface. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Polymorphism </td> 
								<td align="justify"> The @Polymorphism annotation is used to define the PolymorphismType Hibernate will apply to entity hierarchies. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Proxy </td> 
								<td align="justify"> The @Proxy annotation is used to specify a custom proxy implementation for the currently annotated entity. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @RowId </td> 
								<td align="justify"> The @RowId annotation is used to specify the database column used as a ROWID pseudocolumn. For instance, Oracle defines the ROWID pseudocolumn which provides the address of every table row. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @SelectBeforeUpdate </td> 
								<td align="justify"> The @SelectBeforeUpdate annotation is used to specify that the currently annotated entity state be selected from the database when determining whether to perform an update when the detached entity is reattached. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Sort </td> 
								<td align="justify"> The @Sort annotation is deprecated. Use the Hibernate specific @SortComparator or @SortNatural annotations instead. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @SortComparator </td> 
								<td align="justify"> The @SortComparator annotation is used to specify a Comparator for sorting the Set/Map in-memory. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @SortNatural </td> 
								<td align="justify"> The @SortNatural annotation is used to specify that the Set/Map should be sorted using natural sorting. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Source </td>
								<td align="justify"> The @Source annotation is used in conjunction with a @Version timestamp entity attribute indicating the SourceTypeof the timestamp value. </td>
							</tr>
							
							<tr> 
								<td align="justify"> @SQLDelete </td> 
								<td align="justify"> The @SQLDelete annotation is used to specify a custom SQL DELETE statement for the currently annotated entity or collection. </td>
							</tr>
							
							<tr> 
								<td align="justify"> @SQLDeleteAll </td>
								<td align="justify"> The @SQLDeleteAll annotation is used to specify a custom SQL DELETE statement when removing all elements of the currently annotated collection. </td>
							</tr>
							
							<tr> 
								<td align="justify"> @SqlFragmentAlias </td>
								<td align="justify"> The @SqlFragmentAlias annotation is used to specify an alias for a Hibernate @Filter. The alias (e.g. myAlias) can then be used in the @Filter condition clause using the {alias} (e.g. {myAlias}) placeholder. </td>
							</tr>
							
							<tr> 
								<td align="justify"> @SQLInsert </td>
								<td align="justify"> The @SQLInsert annotation is used to specify a custom SQL INSERT statement for the currently annotated entity or collection. </td>
							</tr>
							
							<tr> 
								<td align="justify"> @SQLUpdate </td>
								<td align="justify"> The @SQLUpdate annotation is used to specify a custom SQL UPDATE statement for the currently annotated entity or collection. </td>
							</tr>

							<tr> 
								<td align="justify"> @Subselect </td> 
								<td align="justify"> The @Subselect annotation is used to specify an immutable and read-only entity using a custom SQL SELECT statement. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Synchronize </td> 
								<td align="justify"> The @Synchronize annotation is usually used in conjunction with the @Subselect annotation to specify the list of database tables used by the @Subselect SQL query. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Table </td> 
								<td align="justify"> The @Table annotation is used to specify additional information to a JPA @Table annotation, like custom INSERT, UPDATE or DELETE statements or a specific FetchMode. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Tables </td> 
								<td align="justify"> The @Tables annotation is used to group multiple @Table annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Target </td> 
								<td align="justify"> The @Target annotation is used to specify an explicit target implementation when the currently annotated association is using an interface type. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Tuplizer </td> 
								<td align="justify"> The @Tuplizer annotation is used to specify a custom tuplizer for the currently annotated entity or embeddable. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Tuplizers </td> 
								<td align="justify"> The @Tuplizers annotation is used to group multiple @Tuplizer annotations. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @Type </td> 
								<td align="justify"> The @Type annotation is used to specify the Hibernate @Type used by the currently annotated basic attribute. </td> 
							</tr>
							
							<tr> 
								<td align="justify"> @TypeDef </td> 
								<td align="justify"> The @TypeDef annotation is used to specify a @Type definition which can later be reused for multiple basic attribute mappings. </td> 
							</tr>
							<tr> 
								<td align="justify"> @TypeDefs </td> 
								<td align="justify"> The @TypeDefs annotation is used to group multiple @TypeDef annotations. </td> 
							</tr>
							<tr> 
								<td align="justify"> @UpdateTimestamp </td> 
								<td align="justify"> The @UpdateTimestamp annotation is used to specify that the currently annotated timestamp attribute should be updated with the current JVM timestamp whenever the owning entity gets modified. </td> 
							</tr>
							<tr> 
								<td align="justify"> @ValueGenerationType </td> 
								<td align="justify"> The @ValueGenerationType annotation is used to specify that the current annotation type should be used as a generator annotation type. </td> 
							</tr>	
							<tr> 
								<td align="justify"> @Where </td> 
								<td align="justify"> The @Where annotation is used to specify a custom SQL WHERE clause used when fetching an entity or a collection. </td> 
							</tr>	
							<tr> 
								<td align="justify"> @WhereJoinTable </td> 
								<td align="justify"> The @WhereJoinTable annotation is used to specify a custom SQL WHERE clause used when fetching a join collection </td> 
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