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
                        <li class="breadcrumb-item text-white active" aria-current="page"> JDBC </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Java Data Base Connectivity </h1>
                    <p class="mb-4" align="justify"> <b> JDBC </b> stands for <b> Java Data Base Connectivity</b>, which is a standard Java API for database-independent connectivity between the Java Programming Language and a wide range of Data Bases. JDBC is a Java API to connect and execute the query with the database. JDBC is a part of JavaSE (Java Standard Edition). JDBC API uses JDBC drivers to connect with the database. This is Service Technology. Any Java program connecting any data base in the standard. Any kind of Java Programme in order to communicate with any kind of data base in a standard manner, JDBC Technology is used. Java is mostly used in business applications. Business data (Enterprise Data] is stored in a data base. To offer business services to the customers, Java Applications should contact the data bases. Java Programs can make only method calls. These method calls are not understandable to the data bases. Data Bases (DBMS) understand only SQL. This is nothing but Hetrogeneous Environment. </p>
                </div>
            </div>
        </div>
		
		 <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JDBC API </h4>
                    <p class="mb-4" align="justify"> JDBC also provides support for handling database metadata that allows us to retrieve information about the database, such as its tables, columns, and indexes. We can use the DatabaseMetaData interface to obtain this information that can be useful for dynamically generating SQL queries or for database schema introspection. Another important feature of JDBC is its support for batch processing that allows us to group multiple SQL statements into a batch and execute them together. It can improve performance by reducing the number of round trips between the application and the database. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Applications of JDBC </h4>
                    <p class="mb-4" align="justify"> Fundamentally, JDBC is a specification that provides a complete set of interfaces that allows for portable access to an underlying database. Java can be used to write different types of executables. </p>
					<p class="mb-4" align="justify"> 1. Java Application  </p>
					<p class="mb-4" align="justify"> 2. Java Applets  </p>
					<p class="mb-4" align="justify"> 3. Java Servlets  </p>
					<p class="mb-4" align="justify"> 4. Java Server Pages (JSP) </p>
					<p class="mb-4" align="justify"> 5. Enterprise Java Beans (EJB) </p>
					<p class="mb-4" align="justify"> 6. Struts Framework  </p>
					<p class="mb-4" align="justify"> 7. Spring Framework  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JDBC Driver </h4>
                    <p class="mb-4" align="justify"> JDBC Driver is a software component that enables java application to interact with the database. There are 4 types of JDBC drivers: </p>
					<p class="mb-4" align="justify"> 1. JDBC-ODBC Bridge Driver  </p>
					<p class="mb-4" align="justify"> 2. Native-API Driver </p>
					<p class="mb-4" align="justify"> 3. Network Protocol Driver </p>
					<p class="mb-4" align="justify"> 4. Thin Driver </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JDBC-ODBC Bridge Driver </h4>
                    <p class="mb-4" align="justify"> The JDBC-ODBC bridge driver uses ODBC driver to connect to the database. The JDBC-ODBC bridge driver converts JDBC method calls into the ODBC function calls. This is now discouraged because of thin driver. Oracle does not support the JDBC-ODBC Bridge from Java 8. Oracle recommends that you use JDBC drivers provided by the vendor of your database instead of the JDBC-ODBC Bridge. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Native API Driver </h4>
                    <p class="mb-4" align="justify"> The Native API driver uses the client-side libraries of the database. The driver converts JDBC method calls into native calls of the database API. It is not written entirely in java. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Network Protocol Driver </h4>
                    <p class="mb-4" align="justify"> The Network Protocol driver uses middleware (application server) that converts JDBC calls directly or indirectly into the vendor-specific database protocol. It is fully written in java. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Thin Driver </h4>
                    <p class="mb-4" align="justify"> The thin driver converts JDBC calls directly into the vendor-specific database protocol. That is why it is known as thin driver. It is fully written in Java language. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Connect Database in Java </h4>
                    <p class="mb-4" align="justify"> There are 5 steps to connect any java application with the database using JDBC. These steps are as follows: </p>
					<p class="mb-4" align="justify"> 1. Register the Driver class  </p>
					<p class="mb-4" align="justify"> 2. Create Connection </p>
					<p class="mb-4" align="justify"> 3. Create Statement </p>
					<p class="mb-4" align="justify"> 4. Execute Queries </p>
					<p class="mb-4" align="justify"> 5. Close Connection </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Database Connectivity with Oracle </h4>
                    <p class="mb-4" align="justify"> To connect java application with the oracle database, we need to follow 4 following steps. </p>
					<p class="mb-4" align="justify"> 1. Driver class: The driver class for the oracle database is oracle.jdbc.driver.OracleDriver.  </p>
					<p class="mb-4" align="justify"> 2. Connection URL: The connection URL for the oracle10G database is jdbc:oracle:thin:@localhost:1521:xe where jdbc is the API. </p>
					<p class="mb-4" align="justify"> 3. Username: The default username for the oracle database is system. </p>
					<p class="mb-4" align="justify"> 4. Password: It is the password given by the user at the time of installing the oracle database. </p>
					<p class="mb-4" align="justify"> 5. Close Connection </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Database Connectivity with MySQL </h4>
                    <p class="mb-4" align="justify"> To connect java application with the oracle database, we need to follow 4 following steps. </p>
					<p class="mb-4" align="justify"> 1. Driver class: The driver class for the oracle database is com.mysql.jdbc.Driver.  </p>
					<p class="mb-4" align="justify"> 2. Connection URL: The connection URL for the oracle10G database is jdbc:mysql://localhost:3306/sonoo where jdbc is the API. </p>
					<p class="mb-4" align="justify"> 3. Username: The default username for the oracle database is system. </p>
					<p class="mb-4" align="justify"> 4. Password: It is the password given by the user at the time of installing the oracle database. </p>
					<p class="mb-4" align="justify"> 5. Close Connection </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> DriverManager class </h4>
                    <p class="mb-4" align="justify"> The DriverManager class is the component of JDBC API and also a member of the java.sql package. The DriverManager class acts as an interface between users and drivers. It keeps track of the drivers that are available and handles establishing a connection between a database and the appropriate driver. It contains all the appropriate methods to register and deregister the database driver class and to create a connection between a Java application and the database. The DriverManager class maintains a list of Driver classes that have registered themselves by calling the method DriverManager.registerDriver(). Note that before interacting with a Database, it is a mandatory process to register the driver; otherwise, an exception is thrown. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Connection Interface </h4>
                    <p class="mb-4" align="justify"> A Connection is a session between a Java application and a database. It helps to establish a connection with the database. The Connection interface is a factory of Statement, PreparedStatement, and DatabaseMetaData, i.e., an object of Connection can be used to get the object of Statement and DatabaseMetaData. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Statement Interface </h4>
                    <p class="mb-4" align="justify"> The Statement interface provides methods to execute queries with the database. The statement interface is a factory of ResultSet i.e. it provides factory method to get the object of ResultSet. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ResultSet Interface </h4>
                    <p class="mb-4" align="justify"> The object of ResultSet maintains a cursor pointing to a row of a table. Initially, cursor points to before the first row. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> PreparedStatement Interface </h4>
                    <p class="mb-4" align="justify"> The PreparedStatement interface is a subinterface of Statement. It is used to execute parameterized query. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ResultSetMetaData Interface </h4>
                    <p class="mb-4" align="justify"> The metadata means data about data i.e. we can get further information from the data. If you have to get metadata of a table like total number of column, column name, column type etc. , ResultSetMetaData interface is useful because it provides methods to get metadata from the ResultSet object. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> DatabaseMetaData Interface </h4>
                    <p class="mb-4" align="justify"> DatabaseMetaData interface provides methods to get meta data of a database such as database product name, database product version, driver name, name of total number of tables, name of total number of views. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> CallableStatement Interface </h4>
                    <p class="mb-4" align="justify">CallableStatement interface is used to call the stored procedures and functions. We can have business logic on the database by the use of stored procedures and functions that will make the performance better because these are precompiled. Suppose you need the get the age of the employee based on the date of birth, you may create a function that receives date as the input and returns age of the employee as the output. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> RowSet Interface </h4>
                    <p class="mb-4" align="justify"> An instance of RowSet is the Java bean component because it has properties and Java bean notification mechanism. It is the wrapper of ResultSet. A JDBC RowSet facilitates a mechanism to keep the data in tabular form. It happens to make the data more flexible as well as easier as compared to a ResultSet. The connection between the data source and the RowSet object is maintained throughout its life cycle. The RowSet supports development models that are component-based such as JavaBeans, with the standard set of properties and the mechanism of event notification. It was in the JDBC 2.0, the support for the RowSet was introduced using the optional packages. But the implementations were standardized for RowSet in the JDBC RowSet Implementations Specification by the Sun Microsystems that is being present in the JDK (Java Development Kit) 5.0. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Connection Pooling </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> Connection pooling in JDBC is a technique used to manage and reuse database connections, significantly improving the performance and scalability of applications that frequently interact with a database. Connection pooling in Java is a technique used to improve the performance of database-driven applications. Instead of creating a new connection every time the application needs to interact with the database, a pool of connections is created and managed by a connection pool manager. This eliminates the overhead of establishing a new connection each time, resulting in faster response times and better resource utilization. </p>
					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> How it works Connection Pooling </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> <b class="text-success"> Pool Creation </b> </td> <td align="justify"> A connection pool is initialized with a set number of database connections when the application starts or when the pool is first accessed. <br/> These connections are maintained in a pool or cache. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Connection Request </b> </td> <td align="justify">  When an application needs to perform a database operation, instead of creating a new physical connection using DriverManager.getConnection(). <br/> It requests a connection from the pool. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Connection Loan  </b> </td> <td align="justify"> The connection pool provides an available connection to the application. <br/> If no connections are available, the request might wait or a new connection might be created, depending on the pool's configuration. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Connection Usage  </b> </td> <td align="justify"> The application uses the loaned connection to execute SQL queries and perform database operations. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Connection Return  </b> </td> <td align="justify"> Once the application finishes its database operations, it "closes" the connection. <br/> However, instead of physically closing the connection, the connection is returned to the pool, making it available for reuse by other parts of the application or other threads. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Benefits of Connection Pooling </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> <b class="text-success"> Reduced Overhead </b> </td> <td align="justify"> Creating and closing database connections are resource-intensive operations. <br/> Connection pooling eliminates this overhead for subsequent requests by reusing existing connections. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Improved Performance </b> </td> <td align="justify"> Applications can access database connections more quickly, leading to faster response times and improved overall performance. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Increased Scalability </b> </td> <td align="justify"> By efficiently managing a limited number of connections, connection pooling allows more concurrent users or threads to access the database without <br/> overwhelming it with connection requests.  </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Resource Management </b> </td> <td align="justify"> Connection pools provide a centralized mechanism to manage and monitor database connections, ensuring efficient resource utilization and preventing resource leaks. </td> </tr>
							<tr> <td align="justify"> <b class="text-success"> Controlled Concurrency </b> </td> <td align="justify"> Connection pools can be configured to limit the maximum number of active connections, preventing the database from being overloaded. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Benefits of Connection Pooling </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify" colspan="2"> Several popular libraries and application servers offer JDBC connection pooling capabilities, such as HikariCP, Apache Commons DBCP, C3P0, and built-in pooling in Web and Application Servers like Apache Tomcat, JBoss, Glassfish, WebSphere and Oracle WebLogic. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Package of java.sql </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Interface </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Array </td> <td align="justify"> The mapping in the Java programming language for the SQL type ARRAY. </td> </tr>
							<tr> <td align="justify"> Blob </td> <td align="justify"> The representation (mapping) in the Java™ programming language of an SQL BLOB value. </td> </tr>
							<tr> <td align="justify"> CallableStatement </td> <td align="justify"> The interface used to execute SQL stored procedures. </td> </tr>
							<tr> <td align="justify"> Clob </td> <td align="justify"> The mapping in the Java™ programming language for the SQL CLOB type. </td> </tr>
							<tr> <td align="justify"> Connection </td> <td align="justify"> A connection (session) with a specific database. </td> </tr>
							<tr> <td align="justify"> DatabaseMetaData </td> <td align="justify"> Comprehensive information about the database as a whole. </td> </tr>
							<tr> <td align="justify"> Driver </td> <td align="justify"> The interface that every driver class must implement. </td> </tr>
							<tr> <td align="justify"> DriverAction </td> <td align="justify"> An interface that must be implemented when a Driver wants to be notified by DriverManager. </td> </tr>
							<tr> <td align="justify"> NClob </td> <td align="justify"> The mapping in the Java™ programming language for the SQL NCLOB type. </td> </tr>
							<tr> <td align="justify"> ParameterMetaData </td> <td align="justify"> An object that can be used to get information about the types and properties for each parameter marker in a PreparedStatement object. </td> </tr>
							<tr> <td align="justify"> PreparedStatement </td> <td align="justify">  	
							An object that represents a precompiled SQL statement. </td> </tr>
							<tr> <td align="justify"> Ref </td> <td align="justify"> The mapping in the Java programming language of an SQL REF value, which is a reference to an SQL structured type value in the database. </td> </tr>
							<tr> <td align="justify"> ResultSet </td> <td align="justify"> A table of data representing a database result set, which is usually generated by executing a statement that queries the database. </td> </tr>
							<tr> <td align="justify"> ResultSetMetaData </td> <td align="justify"> An object that can be used to get information about the types and properties of the columns in a ResultSet object. </td> </tr>
							<tr> <td align="justify"> RowId </td> <td align="justify"> The representation (mapping) in the Java programming language of an SQL ROWID value. </td> </tr>
							<tr> <td align="justify"> Savepoint </td> <td align="justify"> The representation of a savepoint, which is a point within the current transaction that can be referenced from the Connection.rollback method. </td> </tr>
							<tr> <td align="justify"> SQLData </td> <td align="justify"> The interface used for the custom mapping of an SQL user-defined type (UDT) to a class in the Java programming language. </td> </tr>
							<tr> <td align="justify"> SQLInput </td> <td align="justify"> An input stream that contains a stream of values representing an instance of an SQL structured type or an SQL distinct type. </td> </tr>
							<tr> <td align="justify"> SQLOutput </td> <td align="justify"> The output stream for writing the attributes of a user-defined type back to the database. </td> </tr>
							<tr> <td align="justify"> SQLType </td> <td align="justify"> An object that is used to identify a generic SQL type, called a JDBC type or a vendor specific data type. </td> </tr>
							<tr> <td align="justify"> SQLXML </td> <td align="justify"> The mapping in the JavaTM programming language for the SQL XML type. </td> </tr>
							<tr> <td align="justify"> Statement </td> <td align="justify"> The object used for executing a static SQL statement and returning the results it produces. </td> </tr>
							<tr> <td align="justify"> Struct </td> <td align="justify"> The standard mapping in the Java programming language for an SQL structured type. </td> </tr>
							<tr> <td align="justify"> Wrapper </td> <td align="justify"> Interface for JDBC classes which provide the ability to retrieve the delegate instance when the instance in question is in fact a proxy class. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Classes </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Date </td> <td align="justify"> A thin wrapper around a millisecond value that allows JDBC to identify this as an SQL DATE value. </td> </tr>
							<tr> <td align="justify"> DriverManager  </td> <td align="justify"> The basic service for managing a set of JDBC drivers.<br/> NOTE: The DataSource interface, new in the JDBC 2.0 API, provides another way to connect to a data source. </td> </tr>
							<tr> <td align="justify"> DriverPropertyInfo </td> <td align="justify"> Driver properties for making a connection. </td> </tr>
							<tr> <td align="justify"> SQLPermission  </td> <td align="justify"> The permission for which the SecurityManager will check when code that is running an application with a SecurityManager enabled, calls the DriverManager.deregisterDriver method, DriverManager.setLogWriter method, DriverManager.setLogStream (deprecated) method, SyncFactory.setJNDIContext method, SyncFactory.setLogger method, Connection.setNetworktimeout method, or the Connection.abort method. </td> </tr>
							<tr> <td align="justify"> Time  </td> <td align="justify"> A thin wrapper around the java.util.Date class that allows the JDBC API to identify this as an SQL TIME value. </td> </tr>
							<tr> <td align="justify"> Timestamp  </td> <td align="justify"> A thin wrapper around java.util.Date that allows the JDBC API to identify this as an SQL TIMESTAMP value. </td> </tr>
							<tr> <td align="justify"> Types  </td> <td align="justify"> The class that defines the constants that are used to identify generic SQL types, called JDBC types. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Enum </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> ClientInfoStatus </td> <td align="justify"> Enumeration for status of the reason that a property could not be set via a call to Connection.setClientInfo </td> </tr>
							<tr> <td align="justify"> JDBCType </td> <td align="justify"> Defines the constants that are used to identify generic SQL types, called JDBC types. </td> </tr>
							<tr> <td align="justify"> PseudoColumnUsage </td> <td align="justify"> Enumeration for pseudo/hidden column usage. </td> </tr>
							<tr> <td align="justify"> RowIdLifetime </td> <td align="justify"> Enumeration for RowId life-time values. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Exception </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> BatchUpdateException </td> <td align="justify"> The subclass of SQLException thrown when an error occurs during a batch update operation. </td> </tr>
							<tr> <td align="justify"> DataTruncation </td> <td align="justify"> An exception thrown as a DataTruncation exception (on writes) or reported as a DataTruncation warning (on reads) when a data values is unexpectedly truncated for reasons other than its having exceeded MaxFieldSize. </td> </tr>
							<tr> <td align="justify"> SQLClientInfoException </td> <td align="justify"> The subclass of SQLException is thrown when one or more client info properties could not be set on a Connection. </td> </tr>
							<tr> <td align="justify"> SQLDataException </td> <td align="justify"> The subclass of SQLException thrown when the SQLState class value is '22', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLException </td> <td align="justify"> An exception that provides information on a database access error or other errors. </td> </tr>
							<tr> <td align="justify"> SQLFeatureNotSupportedException </td> <td align="justify"> The subclass of SQLException thrown when the SQLState class value is '0A' ( the value is 'zero' A). </td> </tr>
							<tr> <td align="justify"> SQLIntegrityConstraintViolationException </td> <td align="justify"> The subclass of SQLException thrown when the SQLState class value is '23', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLInvalidAuthorizationSpecException </td> <td align="justify"> The subclass of SQLException thrown when the SQLState class value is '28', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLNonTransientConnectionException </td> <td align="justify"> The subclass of SQLException thrown for the SQLState class value '08', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLNonTransientException </td> <td align="justify"> The subclass of SQLException thrown when an instance where a retry of the same operation would fail unless the cause of the SQLException is corrected. </td> </tr>
							<tr> <td align="justify"> SQLRecoverableException </td> <td align="justify"> The subclass of SQLException thrown in situations where a previously failed operation might be able to succeed if the application performs some recovery steps and retries the entire transaction or in the case of a distributed transaction, the transaction branch. </td> </tr>
							<tr> <td align="justify"> SQLSyntaxErrorException </td> <td align="justify"> The subclass of SQLException thrown when the SQLState class value is '42', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLTimeoutException </td> <td align="justify"> The subclass of SQLException thrown when the timeout specified by Statement.setQueryTimeout, DriverManager.setLoginTimeout, DataSource.setLoginTimeout,XADataSource.setLoginTimeout has expired.  </td> </tr>
							<tr> <td align="justify"> SQLTransactionRollbackException </td> <td align="justify"> The subclass of SQLException thrown when the SQLState class value is '40', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLTransientConnectionException </td> <td align="justify"> The subclass of SQLException for the SQLState class value '08', or under vendor-specified conditions. </td> </tr>
							<tr> <td align="justify"> SQLTransientException </td> <td align="justify"> The subclass of SQLException is thrown in situations where a previously failed operation might be able to succeed when the operation is retried without any intervention by application-level functionality. </td> </tr>
							<tr> <td align="justify"> SQLWarning </td> <td align="justify"> An exception that provides information on database access warnings. </td> </tr>
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
								<td> <a href="jstHome.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Home </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="servlets.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Servlets <i class="fa fa-arrow-right ms-3"></i></a> 
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