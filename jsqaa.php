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
                <h1 class="display-2 text-white animated slideInDown mb-4"> Java Tutorial </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">J2EE</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Servlets Question &amp; Answers </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Servlets Question &amp; Answers </h1>
                    <p class="mb-4" align="justify"> <b>  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 1. How many objects of a servlet is created ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> Only one object at the time of first request by servlet or web container. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 2. What is the life cycle of a servlet ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> 1. Servlet is loaded <br/> 2. Servlet is instantiated <br/> 3. Servlet is initialized <br/> 4. Service the request <br/> 5. Servlet is destroyed </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 3. Who is responsible to create the object of servlet ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> The web container or servlet container. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4. What is servlet collaboration ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> When one servlet communicates to another servlet, it is known as servlet collaboration. </p>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 5. What are the ways of servlet collaboration ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> 1. RequestDispacher Interface <br/> 2. sendRedirect() Method </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 6. What is the purpose of RequestDispatcher Interface ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> The RequestDispacher interface provides the facility of dispatching the request to another resource it may be html, servlet or jsp. This interceptor can also be used to include the content of antoher resource. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 7. Can you call a jsp from the servlet ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> Yes, one of the way is RequestDispatcher Interface. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 8. What are Cookies ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> A cookie is a small piece of information that is persisted between the multiple client requests. A cookie has a name, a single value, and optional attributes such as a comment, path and domain qualifiers, a maximum age, and a version number. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 9. What if we pass negative value in load-on-startup ? </h4>
					<p class="mb-4" align="justify"> It will not affect the container, now servlet will be loaded at first request. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 10. What is load-on-startup in servlet ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> The load-on-startup element of servlet in web.xml is used to load the servlet at the time of deploying the project or server start. So it saves time for the response of first request. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 11. How can we upload the file to the server using servlet ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> One of the way is by MultipartRequest class provided by third party.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 12. What is the disadvantage of cookies ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> It will not work if cookie is disabled from the browser. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 13. How can we perform any action at the time of deploying the project ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> By the help of ServletContextListener interface. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 14. What is filter ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> A filter is an object that is invoked either at the preprocessing or postprocessing of a request. It is pluggable. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 15. What is Session Tracking ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b>  Session simply means a particular interval of time. Session Tracking is a way to maintain state of an user.Http protocol is a stateless protocol.Each time user requests to the server, server treats the request as the new request.So we need to maintain the state of an user to recognize to particular user. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 16. What is war file ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b>  A war (web archive) file specifies the web elements. A servlet or jsp project can be converted into a war file. Moving one servlet project from one place to another will be fast as it is combined into a single file. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 17. How to create war file ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b>  The war file can be created using jar tool found in jdk/bin directory. If you are using Eclipse or Netbeans IDE, you can export your project as a war file. To create war file from console, you can write following code: <br/> jar -cvf jst.war * <br/> Now all the files of current directory will be converted into jst.war file.  </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 18. Which event is fired at the time of project deployment and undeployment ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b>  There are mainly 3 annotations used for the servlet. </p>
					<ol>
						<li class="mb-4" align="justify"> <b class="text-success"> @WebServlet </b>  for servlet class. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> @WebListener </b>  for listener class. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> @WebFilter </b>  for filter class. </li>
					</ol>
                </div>
            </div>
        </div>


		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 19. Which event is fired at the time of session creation and destroy ? </h4>
					<p class="mb-4" align="justify"> <b class="text-success"> Answers : </b>  HttpSessionEvent. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 20. Which event is fired at the time of setting, getting or removing attribute from application scope ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> ServletContextAttributeEvent.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 21. What is the use of welcome-file-list ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> It is used to specify the welcome file for the project. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 22. What is the use of attribute in servlets ? </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Answers : </b> Attribute is a map object that can be used to set, get or remove in request, session or application scope. It is mainly used to share information between one servlet to another. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Servlets Difference Interview Questions </h1>
                    <p class="mb-4" align="justify"> <b class="text-success">  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 1. What is difference between Get and Post method ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Get </b> </th> <th scope="col"> <b> Post </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Limited amount of data can be sent because data is sent in header. </td> <td align="justify"> Large amount of data can be sent because data is sent in body. </td> </tr>	
							<tr> <td align="justify"> Not Secured because data is exposed in URL bar. </td> <td align="justify"> Secured because data is not exposed in URL bar. </td> </tr>
							<tr> <td align="justify"> Can be bookmarked  </td> <td align="justify"> Can not be bookmarked </td> </tr>
							<tr> <td align="justify"> Idempotent  </td> <td align="justify"> Non Idempotent </td> </tr>
							<tr> <td align="justify">  It is more efficient and used than Post </td> <td align="justify"> It is less efficient and used. </td> </tr>						
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 2. What is difference between PrintWriter and ServletOutputStream ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> PrintWriter </b> </th> <th scope="col"> <b> ServletOutputStream </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> PrintWriter is a character-stream class </td> <td align="justify"> ServletOutputStream is a byte-stream class </td> </tr>
							<tr> <td align="justify"> The PrintWriter class can be used to write only character-based information </td> <td align="justify">ServletOutputStream class can be used to write primitive values as well as character-based information. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 3. What is difference between GenericServlet and HttpServlet ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> GenericServlet </b> </th> <th scope="col"> <b> HttpServlet </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> GenericServlet is protocol independent </td> <td align="justify"> HttpServlet is HTTP protocol specific. </td> </tr>
							<tr> <td align="justify"> GenericServlet not provides additional functionalities </td> <td align="justify"> HttpServlet provides additional functionalities </td> </tr>							
						</tbody> 
					</table>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4. Difference between forward() method and sendRedirect() method ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> forward() method </b> </th> <th scope="col"> <b> sendRedirect() method </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> forward() sends the same request to another resource. </td> <td align="justify"> sendRedirect() method sends new request always because it uses the URL bar of the browser. </td> </tr>
							<tr> <td align="justify"> forward() method works at server side. </td> <td align="justify"> sendRedirect() method works at client side. </td> </tr>
							<tr> <td align="justify"> forward() method works within the server only. </td> <td align="justify"> sendRedirect() method works within and outside the server. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 5. What is difference between ServletConfig and ServletContext ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> ServletConfig </b> </th> <th scope="col"> <b> ServletContext </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> The container creates object of ServletConfig for each servlet </td> <td align="justify"> object of ServletContext is created for each web application. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 6. What is difference between Cookies and HttpSession ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Feature </b> </th> <th scope="col"> <b> Cookies </b> </th> <th scope="col"> <b> HttpSession </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Storage Location </td> <td align="justify"> Stored on the client side (browser). </td> <td align="justify"> Stored on the server side. </td></tr>
							<tr> <td align="justify"> Data Security </td> <td align="justify"> Less secure, as it is exposed to the client. </td> <td align="justify"> More secure, as data is stored on the server. </td></tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Faster as data is stored on the client. </td> <td align="justify"> Slightly slower as each request requires server processing. </td></tr>
							<tr> <td align="justify"> Data Size Limit </td> <td align="justify"> Limited to 4KB per cookie. </td> <td align="justify"> Can store large amounts of data. </td></tr>
							<tr> <td align="justify"> Expiration </td> <td align="justify"> Can be set manually (maxAge, expires). </td> <td align="justify"> Expires automatically after inactivity or when explicitly destroyed. </td></tr>
							<tr> <td align="justify"> Data Persistence </td> <td align="justify"> Persists even after the browser is closed (unless expired). </td> <td align="justify"> Data is lost once the session expires or the server restarts (unless stored in a database). </td></tr>
							<tr> <td align="justify"> Used for Authentication </td> <td align="justify"> Often used for storing authentication tokens like JWT. </td> <td align="justify"> Commonly used for session-based authentication. </td></tr>
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