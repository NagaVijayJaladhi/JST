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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Servlets </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Servlets </h1>
                    <p class="mb-4" align="justify"> <b class="text-success"> Servlets </b> is a Web Technology from <b class="text-success"> Sun Micro Systems </b>. Servlets is J2EE Technology. Servlets is a specification to Web Server (Container) manufactures. Servlets API is used by the web application developers to make web sites inter active. A Servlet extends the funcationality of a web server. A servlet is a server side piece of code known as "Web Component". Web Component are JSP and Servlets. A Servlet produces dynamic web content. A Servlet is a dynamic web resource in a web application. A Servlet is a Java Class. A Servlet contains Java Code plus HTML Code. Java Code means dynamic Sake and HTML Code means Presentation Sake. Servlets using Web Application Development (WAD). </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Servlet Development </h4>
                    <p class="mb-4" align="justify"> A <b class="text-success"> Servlet </b> is a container (Server Software) managed public java class that implement directly or indirectly. javax.servlet is package. Servlet is an Interface. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Web Container Model </h4>
                    <p class="mb-4" align="justify"> A Web Container is Server Software that Comprises of Three Modules. </p>
					<p class="mb-4" align="justify"> 1. HTTP Service (or) Default Handler (or) Web Server. </p>
					<p class="mb-4" align="justify"> 2. Servlet Engine (or) Container. </p>
					<p class="mb-4" align="justify"> 3. JSP Engine (or) Container. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> We have two kinds of applications in Java </h4>
                    <p class="mb-4" align="justify"> Any <b class="text-success"> Computer Applications </b> is said to be a web application if we can access it’s services from web (Internet Service). To offer online business services to customers, we go for web applications. </p>
					<p class="mb-4" align="justify"> 1. Windows Based (or) Desktop Applications </p>
					<p class="mb-4" align="justify"> 2. Web Applications. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Web Applications </h4>
                    <p class="mb-4" align="justify"> A <b class="text-success"> Web Applications </b> is an application accessible from the web. A web application is composed of web components like Servlet, JSP, Filter, etc. and other elements such as HTML, CSS, and JavaScript. The web components typically execute in Web Server and respond to the HTTP request. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> CGI (Common Gateway Interface) </h4>
                    <p class="mb-4" align="justify"> A <b class="text-success"> CGI (Common Gateway Interface) </b> Technology enables the web server to call an external program and pass HTTP request information to the external program to process the request. For each request, it starts a new process. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Disadvantages of CGI </h4>
                    <p class="mb-4" align="justify"> There are many problems in CGI Technology : </p>
					<ol>
						<li class="mb-4" align="justify"> If the number of clients increases, it takes more time for sending the response. </li>
						<li class="mb-4" align="justify"> For each request, it starts a process, and the web server is limited to start processes. </li>
						<li class="mb-4" align="justify"> It uses Platform Dependent Language. Examples:  C, C++, Perl. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Purpose of Server Side Programming </h4>
                    <p class="mb-4" align="justify"> To overcome, the limitation of the Web Server, Server Side Programming is required. Server Side Program performs the following duties in general. </p>
					<ol>
						<li class="mb-4" align="justify"> Capturing Web Form Data. </li>
						<li class="mb-4" align="justify"> Building the dynamic data (or) Processing the Retrieved Data. </li>
						<li class="mb-4" align="justify"> Creating dynamic web content (Dynamic Web Page) basing on the data produced in second step and giving the page to the Web Server. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of Servlet </h4>
                    <p class="mb-4" align="justify"> The web container creates threads for handling the multiple requests to the Servlet. Threads have many benefits over the Processes such as they share a common memory area, lightweight, cost of communication between the threads are low. The advantages of Servlet are as follows: </p>
					<ol>
						<li class="mb-4" align="justify"> <b class="text-success"> Secure </b> because it uses Java Language. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Portability </b> because it uses Java Language. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Better Performance </b> because it creates a thread for each request, not process. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Robust </b> JVM Manages Servlets, so we don't need to worry about the memory leak, garbage collection, etc. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Servlet Life Cycle </h4>
					<ol>
						<li class="mb-4" align="justify"> <b class="text-success"> Servlet Class : </b> The Class Loader is responsible to load the Servlet Class. The Servlet Class is loaded when the first request for the servlet is received by the web container. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Servlet Instance : </B> The web container creates the instance of a servlet after loading the Servlet Class. The Servlet Instance is created only once in the Servlet Life Cycle. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Initialized Method : </b> The web container calls the init method only once after creating the servlet instance. The init method is used to initialize the servlet. It is the life cycle method of the javax.servlet.Servlet interface. <br/> <b class="text-success"> Initialized Method Syntax : </b> public void init(ServletConfig config) throws ServletException </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Service Method : </b> The web container calls the service method each time when request for the servlet is received. If servlet is not initialized, it follows the first three steps as described above then calls the service method. If servlet is initialized, it calls the service method. Notice that servlet is initialized only once. <br/> <b class="text-success"> Service Method Syntax : </b> public void service(ServletRequest request, ServletResponse response) throws ServletException, IOException </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Destroy Bethod : </b> The web container calls the destroy method before removing the servlet instance from the service. It gives the servlet an opportunity to clean up any resource like memory, thread etc. <br/> <b class="text-success"> Destroy Method Syntax : </b> public void destroy() </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> ServletRequest Interface </h4>
                    <p class="mb-4" align="justify"> An object of ServletRequest is used to provide the client request information to a servlet such as content type, content length, parameter names and values, header informations, attributes etc. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> RequestDispatcher Interface </h4>
                    <p class="mb-4" align="justify"> The RequestDispatcher interface provides the facility of dispatching the request to another resource it may be html, servlet or jsp. This interface can also be used to include the content of another resource also. It is one of the way of servlet collaboration. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> SendRedirect Method </h4>
                    <p class="mb-4" align="justify"> The sendRedirect() method of HttpServletResponse interface can be used to redirect response to another resource, it may be servlet, jsp or html file. The sendRedirect() method accepts relative as well as absolute URL. The sendRedirect() method works at client side because it uses the url bar of the browser to make another request. So, it can work inside and outside the server. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> ServletConfig Interface </h4>
                    <p class="mb-4" align="justify"> An object of ServletConfig is created by the web container for each servlet. This object can be used to get configuration information from web.xml file. If the configuration information is modified from the web.xml file, we don't need to change the servlet. So it is easier to manage the web application if any specific content is modified from time to time. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> ServletContext Interface </h4>
                    <p class="mb-4" align="justify"> An object of ServletContext is created by the web container at time of deploying the project. This object can be used to get configuration information from web.xml file. There is only one ServletContext object per web application. If any information is shared to many servlet, it is better to provide it from the web.xml file using the &lt;context-param&gt; element. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Session </h4>
                    <p class="mb-4" align="justify"> Session simply means a particular interval of time. Session Tracking is a way to maintain state of an user. It is also known as session management in servlet. Sessions in Express enable the server to maintain user specific data across multiple requests by storing information server side and associating it with a unique session identifier. </p> 
					
					<p class="mb-4" align="justify"> This approach allows for persistent user interactions and state management within web applications. Http protocol is a stateless so we need to maintain state using session tracking techniques. Each time user requests to the server, server treats the request as the new request. So we need to maintain the state of an user to recognize to particular user. HTTP is stateless that means each request is considered as the new request. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Session Tracking Techniques </h4>
					<ol>
						<li class="mb-4" align="justify"> Cookies </li>
						<li class="mb-4" align="justify"> Hidden Form Field </li>		
						<li class="mb-4" align="justify"> URL Rewriting </li>
						<li class="mb-4" align="justify"> HttpSession </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Features of Session </h4>
                    <ol>
						<li class="mb-4" align="justify"> <b class="text-success"> Server Side Storage : </b> Stores user data securely on the server instead of the clients browser. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Stateful Authentication : </B> Maintains user login status during a session without storing credentials in cookies. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Large Data Storage : </b> Unlike cookies, sessions are not limited to 4KB and can store complex data structures. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Automatic Expiration : </b> Sessions expire after a certain period of inactivity or when the user logs out. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Session ID in Cookies : </b> A small cookie (session ID) is used to identify the session stored on the server. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Security : </b> Since the actual data is on the server, it is more secure than cookies, reducing risks like data tampering or exposure. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Use Cases of Session </h4>
					<ol>
						<li class="mb-4" align="justify"> Storing temporary user data. </li>
						<li class="mb-4" align="justify"> Managing user authentication in web applications. </li>		
						<li class="mb-4" align="justify"> Implementing stateful applications where user data persists across multiple pages. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> When can use Session </h4>
					<ol>
						<li class="mb-4" align="justify"> You need to store sensitive or larger amounts of data. </li>
						<li class="mb-4" align="justify"> You require stateful authentication. </li>		
						<li class="mb-4" align="justify"> You want to avoid exposing data to the client for security reasons. </li>
						<li class="mb-4" align="justify"> You need temporary storage for user-specific data. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Cookie </h4>
                    <p class="mb-4" align="justify"> Creates a cookie, a small amount of information sent by a servlet to a Web browser, saved by the browser, and later sent back to the server. A cookie's value can uniquely identify a client, so cookies are commonly used for session management. A cookie has a name, a single value, and optional attributes such as a comment, path and domain qualifiers, a maximum age, and a version number. </p> 
					
					<p class="mb-4" align="justify"> Some Web browsers have bugs in how they handle the optional attributes, so use them sparingly to improve the interoperability of your servlets. The servlet sends cookies to the browser by using the HttpServletResponse.addCookie(javax.servlet.http.Cookie) method, which adds fields to HTTP response headers to send cookies to the browser, one at a time. The browser is expected to support 20 cookies for each Web server, 300 cookies total, and may limit cookie size to 4 KB each.  </p> 
					
					<p class="mb-4" align="justify"> The browser returns cookies to the servlet by adding fields to HTTP request headers. Cookies can be retrieved from a request by using the HttpServletRequest.getCookies() method. Several cookies might have the same name but different path attributes. Cookies affect the caching of the Web pages that use them. HTTP 1.0 does not cache pages that use cookies created with this class. This class does not support the cache control defined with HTTP 1.1.  </p> 
					
					<p class="mb-4" align="justify"> This class supports both the Version 0 (by Netscape) and Version 1 cookie specifications. By default, cookies are created using Version 0 to ensure the best interoperability. Cookies are small data stored on the client side (browser) as key-value pairs. They are commonly used for session management, user preferences, and behaviour tracking. When a user loads a website, the browser sends the stored cookies with the request, allowing the server to track and personalize the user's experience. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Features of Cookies </h4>
                    <ol>
						<li class="mb-4" align="justify"> <b class="text-success"> Client Side Storage : </b> Data is stored in the user's browser, reducing the servers load. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Persistence : </B> Can be set to expire after a specific time, allowing data to persist across sessions. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Small Storage Size : </b> Limited to 4KB per cookie, making it suitable for lightweight data like preferences and authentication tokens. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Security : </b> Can be configured with Http only (to prevent JavaScript access), Secure (to allow only HTTPS), and SameSite (to prevent cross-site attacks). </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Automatic Transmission : </b> Cookies are automatically sent with every request to the same domain, enabling tracking and authentication. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> User Tracking : </b> Commonly used for session tracking, remembering login status, and personalization across different visits. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Types of Cookie </h4>
                    <ol>
						<li class="mb-4" align="justify"> <b class="text-success"> Non Persistent Cookie : </b> It is valid for single session only. It is removed each time when user closes the browser. </li>
						<li class="mb-4" align="justify"> <b class="text-success"> Persistent Cookie : </B> It is valid for multiple session . It is not removed each time when user closes the browser. It is removed only if user logout or signout. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Use Cases of Cookies </h4>
					<ol>
						<li class="mb-4" align="justify"> Stores user preferences. </li>
						<li class="mb-4" align="justify"> Keep users logged in via authentication tokens. </li>
						<li class="mb-4" align="justify"> Track website analytics and user behavior. </li>
						<li class="mb-4" align="justify"> Manage shopping cart data in e-commerce websites. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> When can use Cookies </h4>
					<ol>
						<li class="mb-4" align="justify"> You need to store small amounts of user-related data. </li>
						<li class="mb-4" align="justify"> You want persistent user data across browser sessions. </li>		
						<li class="mb-4" align="justify"> You are working with stateless authentication. </li>
						<li class="mb-4" align="justify"> You want to store user preferences and settings. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantage of Cookies </h4>
					<ol>
						<li class="mb-4" align="justify"> Simplest technique of maintaining the state. </li>
						<li class="mb-4" align="justify"> Cookies are maintained at client side. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Disadvantage of Cookies </h4>
					<ol>
						<li class="mb-4" align="justify"> It will not work if cookie is disabled from the browser. </li>
						<li class="mb-4" align="justify"> Only textual information can be set in Cookie object. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> Hidden Form Field </h4>
                    <p class="mb-4" align="justify"> Hidden Form Field a hidden (invisible) textfield is used for maintaining the state of an user. In such case, we store the information in the hidden field and get it from another servlet. This approach is better if we have to submit form in all the pages and we don't want to depend on the browser. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantage of Hidden Form Field </h4>
					<ol>
						<li class="mb-4" align="justify"> It will always work whether cookie is disabled or not. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Disadvantage of Hidden Form Field </h4>
					<ol>
						<li class="mb-4" align="justify"> It is maintained at server side. </li>
						<li class="mb-4" align="justify"> Extra form submission is required on each pages. </li>
						<li class="mb-4" align="justify"> Only textual information can be used. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3"> URL Rewriting </h4>
                    <p class="mb-4" align="justify"> we append a token or identifier to the URL of the next Servlet or the next resource. We can send parameter name/value pairs. A name and a value is separated using an equal = sign, a parameter name/value pair is separated from another parameter using the ampersand(&). When the user clicks the hyperlink, the parameter name/value pairs will be passed to the server. From a Servlet, we can use getParameter() method to obtain a parameter value. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantage of URL Rewriting </h4>
					<ol>
						<li class="mb-4" align="justify"> It will always work whether cookie is disabled or not (browser independent). </li>
						<li class="mb-4" align="justify"> Extra form submission is not required on each pages. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Disadvantage of URL Rewriting </h4>
					<ol>
						<li class="mb-4" align="justify"> It will work only with links. </li>
						<li class="mb-4" align="justify"> It can send Only textual information. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Package javax.servlet </h4>
                    <p class="mb-4" align="justify"> The javax.servlet package contains a number of classes and interfaces that describe and define the contracts between a servlet class and the runtime environment provided for an instance of such a class by a conforming servlet container. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Interface </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>						
							<tr> <td align="justify"> AsyncContext </td> <td align="justify"> Class representing the execution context for an asynchronous operation that was initiated on a ServletRequest. </td> </tr>
							<tr> <td align="justify"> AsyncListener </td> <td align="justify"> Listener that will be notified in the event that an asynchronous operation initiated on a ServletRequest to which the listener had been added has completed, timed out, or resulted in an error. </td> </tr>
							<tr> <td align="justify"> Filter </td> <td align="justify"> A filter is an object that performs filtering tasks on either the request to a resource (a servlet or static content), or on the response from a resource, or both. </td> </tr>
							<tr> <td align="justify"> FilterChain </td> <td align="justify"> A FilterChain is an object provided by the servlet container to the developer giving a view into the invocation chain of a filtered request for a resource. </td> </tr>
							<tr> <td align="justify"> FilterConfig </td> <td align="justify"> A filter configuration object used by a servlet container to pass information to a filter during initialization. </td> </tr>
							<tr> <td align="justify"> FilterRegistration </td> <td align="justify"> Interface through which a Filter may be further configured. </td> </tr>
							<tr> <td align="justify"> FilterRegistration.Dynamic </td> <td align="justify"> Interface through which a Filter registered via one of the addFilter methods on ServletContext may be further configured. </td> </tr>
							<tr> <td align="justify"> ReadListener </td> <td align="justify"> This class represents a call-back mechanism that will notify implementations as HTTP request data becomes available to be read without blocking. </td> </tr>
							<tr> <td align="justify"> Registration </td> <td align="justify"> Interface through which a Servlet or Filter may be further configured. </td> </tr>
							<tr> <td align="justify"> Registration.Dynamic </td> <td align="justify"> Interface through which a Servlet or Filter registered via one of the addServlet or addFilter methods, respectively, on ServletContext may be further configured. </td> </tr>
							<tr> <td align="justify"> RequestDispatcher </td> <td align="justify"> Defines an object that receives requests from the client and sends them to any resource (such as a servlet, HTML file, or JSP file) on the server. </td> </tr>
							<tr> <td align="justify"> Servlet </td> <td align="justify"> Defines methods that all servlets must implement. </td> </tr>
							<tr> <td align="justify"> ServletConfig </td> <td align="justify"> A servlet configuration object used by a servlet container to pass information to a servlet during initialization. </td> </tr>
							<tr> <td align="justify"> ServletContainerInitializer </td> <td align="justify"> Interface which allows a library/runtime to be notified of a web application's startup phase and perform any required programmatic registration of servlets, filters, and listeners in response to it. </td> </tr>
							<tr> <td align="justify"> ServletContext </td> <td align="justify">  	
							Defines a set of methods that a servlet uses to communicate with its servlet container, for example, to get the MIME type of a file, dispatch requests, or write to a log file. </td> </tr>
							<tr> <td align="justify"> ServletContextAttributeListener </td> <td align="justify"> Interface for receiving notification events about ServletContext attribute changes. </td> </tr>
							<tr> <td align="justify"> ServletContextListener </td> <td align="justify"> Interface for receiving notification events about ServletContext lifecycle changes. </td> </tr>
							<tr> <td align="justify"> ServletRegistration </td> <td align="justify"> Interface through which a Servlet may be further configured. </td> </tr>
							<tr> <td align="justify"> ServletRegistration.Dynamic </td> <td align="justify"> Interface through which a Servlet registered via one of the addServlet methods on ServletContext may be further configured. </td> </tr>
							<tr> <td align="justify"> ServletRequest </td> <td align="justify"> Defines an object to provide client request information to a servlet. </td> </tr>
							<tr> <td align="justify"> ServletRequestAttributeListener </td> <td align="justify"> Interface for receiving notification events about ServletRequest attribute changes. </td> </tr>
							<tr> <td align="justify"> ServletRequestListener </td> <td align="justify"> Interface for receiving notification events about requests coming into and going out of scope of a web application. </td> </tr>
							<tr> <td align="justify"> ServletResponse </td> <td align="justify"> Defines an object to assist a servlet in sending a response to the client. </td> </tr>
							<tr> <td align="justify"> SessionCookieConfig </td> <td align="justify"> Class that may be used to configure various properties of cookies used for session tracking purposes. </td> </tr>
							<tr> <td align="justify"> SingleThreadModel </td> <td align="justify"> Deprecated. As of Java Servlet API 2.4, with no direct replacement. </td> </tr>
							<tr> <td align="justify"> WriteListener </td> <td align="justify"> Callback notification mechanism that signals to the developer it's possible to write content without blocking. </td> </tr>							
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Classes </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>	
							<tr> <td align="justify"> AsyncEvent </td> <td align="justify"> Event that gets fired when the asynchronous operation initiated on a ServletRequest (via a call to ServletRequest.startAsync() or ServletRequest.startAsync(ServletRequest, ServletResponse)) has completed, timed out, or produced an error. </td> </tr>
							<tr> <td align="justify"> GenericServlet </td> <td align="justify"> Defines a generic, protocol-independent servlet. </td> </tr>
							<tr> <td align="justify"> HttpConstraintElement </td> <td align="justify"> Java Class representation of an HttpConstraint annotation value. </td> </tr>
							<tr> <td align="justify"> HttpMethodConstraintElement </td> <td align="justify"> Java Class represntation of an HttpMethodConstraint annotation value. </td> </tr>
							<tr> <td align="justify"> MultipartConfigElement </td> <td align="justify"> Java Class represntation of an MultipartConfig annotation value. </td> </tr>
							<tr> <td align="justify"> ServletContextAttributeEvent </td> <td align="justify"> Event class for notifications about changes to the attributes of the ServletContext of a web application. </td> </tr>
							<tr> <td align="justify"> ServletContextEvent </td> <td align="justify"> This is the event class for notifications about changes to the servlet context of a web application. </td> </tr>
							<tr> <td align="justify"> ServletInputStream </td> <td align="justify"> Provides an input stream for reading binary data from a client request, including an efficient readLine method for reading data one line at a time. </td> </tr>
							<tr> <td align="justify"> ervletOutputStream </td> <td align="justify"> Provides an output stream for sending binary data to the client. </td> </tr>
							<tr> <td align="justify"> ServletRequestAttributeEvent </td> <td align="justify"> This is the event class for notifications of changes to the attributes of the servlet request in an application. </td> </tr>
							<tr> <td align="justify"> ServletRequestEvent </td> <td align="justify"> Events of this kind indicate lifecycle events for a ServletRequest. </td> </tr>
							<tr> <td align="justify"> ServletRequestWrapper </td> <td align="justify"> Provides a convenient implementation of the ServletRequest interface that can be subclassed by developers wishing to adapt the request to a Servlet. </td> </tr>
							<tr> <td align="justify"> ServletResponseWrapper </td> <td align="justify"> Provides a convenient implementation of the ServletResponse interface that can be subclassed by developers wishing to adapt the response from a Servlet. </td> </tr>
							<tr> <td align="justify"> ServletSecurityElement </td> <td align="justify"> Java Class represntation of a ServletSecurity annotation value. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Enum </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> DispatcherType </td> <td align="justify"> Enumeration of filter dispatcher types. </td> </tr>
							<tr> <td align="justify"> SessionTrackingMode </td> <td align="justify"> Enumeration of session tracking modes. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Exception </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> ServletException </td> <td align="justify"> Defines a general exception a servlet can throw when it encounters difficulty. </td> </tr>
							<tr> <td align="justify"> UnavailableException </td> <td align="justify"> Defines an exception that a servlet or filter throws to indicate that it is permanently or temporarily unavailable. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Package javax.servlet.annotation </h4>
                    <p class="mb-4" align="justify"> The javax.servlet.annotation package contains a number of annotations that allow users to use annotations to declare servlets, filters, listeners and specify the metadata for the declared component. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Enum </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> ServletSecurity.EmptyRoleSemantic </td> <td align="justify"> Defines the access semantic to be applied to an empty rolesAllowed array. </td> </tr>
							<tr> <td align="justify"> ServletSecurity.TransportGuarantee </td> <td align="justify"> Defines the data protection requirements that must be satisfied by the transport </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Annotation Type </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> HandlesTypes </td> <td align="justify"> This annotation is used to declare the class types that a ServletContainerInitializer can handle. </td> </tr>
							<tr> <td align="justify"> HttpConstraint </td> <td align="justify"> This annotation is used within the ServletSecurity annotation to represent the security constraints to be applied to all HTTP protocol methods for which a corresponding HttpMethodConstraint element does NOT occur within the ServletSecurity annotation. </td> </tr>
							<tr> <td align="justify"> HttpMethodConstraint </td> <td align="justify"> This annotation is used within the ServletSecurity annotation to represent security constraints on specific HTTP protocol messages. </td> </tr>
							<tr> <td align="justify"> MultipartConfig </td> <td align="justify"> Annotation that may be specified on a Servlet class, indicating that instances of the Servlet expect requests that conform to the multipart/form-data MIME type. </td> </tr>
							<tr> <td align="justify"> ServletSecurity </td> <td align="justify"> This annotation is used on a Servlet implementation class to specify security constraints to be enforced by a Servlet container on HTTP protocol messages. </td> </tr>
							<tr> <td align="justify"> WebFilter </td> <td align="justify"> Annotation used to declare a servlet filter. </td> </tr>
							<tr> <td align="justify"> WebInitParam </td> <td align="justify"> This annotation is used on a Servlet or Filter implementation class to specify an initialization parameter. </td> </tr>
							<tr> <td align="justify"> WebListener </td> <td align="justify"> This annotation is used to declare a WebListener. </td> </tr>
							<tr> <td align="justify"> WebServlet </td> <td align="justify"> Annotation used to declare a servlet. </td> </tr>
						</tbody>	
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Package javax.servlet.descriptor </h4>
                    <p class="mb-4" align="justify"> Provides programmatic access to a web application's configuration information that was aggregated from the web.xml and web-fragment.xml descriptors. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Interface </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> JspConfigDescriptor </td> <td align="justify"> This interface provides access to the <jsp-config> related configuration of a web application. </td> </tr>
							<tr> <td align="justify"> JspPropertyGroupDescriptor </td> <td align="justify"> This interface provides access to the <jsp-property-group> related configuration of a web application. </td> </tr>
							<tr> <td align="justify"> TaglibDescriptor </td> <td align="justify"> This interface provides access to the <taglib> related configuration of a web application. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Package javax.servlet.http </h4>
                    <p class="mb-4" align="justify"> The javax.servlet.http package contains a number of classes and interfaces that describe and define the contracts between a servlet class running under the HTTP protocol and the runtime environment provided for an instance of such a class by a conforming servlet container. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Interface </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>		
							<tr> <td align="justify"> HttpServletRequest </td> <td align="justify"> Extends the ServletRequest interface to provide request information for HTTP servlets. </td> </tr>
							<tr> <td align="justify"> HttpServletResponse </td> <td align="justify"> Extends the ServletResponse interface to provide HTTP-specific functionality in sending a response. </td> </tr>
							<tr> <td align="justify"> HttpSession </td> <td align="justify"> Provides a way to identify a user across more than one page request or visit to a Web site and to store information about that user. </td> </tr>
							<tr> <td align="justify"> HttpSessionActivationListener </td> <td align="justify"> Objects that are bound to a session may listen to container events notifying them that sessions will be passivated and that session will be activated. </td> </tr>
							<tr> <td align="justify"> HttpSessionAttributeListener </td> <td align="justify"> Interface for receiving notification events about HttpSession attribute changes. </td> </tr>
							<tr> <td align="justify"> HttpSessionBindingListener </td> <td align="justify"> Causes an object to be notified when it is bound to or unbound from a session. </td> </tr>
							<tr> <td align="justify"> HttpSessionContext </td> <td align="justify"> Deprecated. As of Java(tm) Servlet API 2.1 for security reasons, with no replacement. </td> </tr>
							<tr> <td align="justify"> HttpSessionIdListener </td> <td align="justify"> Interface for receiving notification events about HttpSession id changes.
							<tr> <td align="justify"> HttpSessionListener </td> <td align="justify"> Interface for receiving notification events about HttpSession lifecycle changes. </td> </tr>
							<tr> <td align="justify"> HttpUpgradeHandler </td> <td align="justify"> This interface encapsulates the upgrade protocol processing.
							<tr> <td align="justify"> Part </td> <td align="justify"> This class represents a part or form item that was received within a multipart/form-data POST request. </td> </tr>
							<tr> <td align="justify"> WebConnection </td> <td align="justify"> This interface encapsulates the connection for an upgrade request. </td> </tr>							
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Classes </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>	
							<tr> <td align="justify"> Cookie </td> <td align="justify"> Creates a cookie, a small amount of information sent by a servlet to a Web browser, saved by the browser, and later sent back to the server. </td> </tr>
							<tr> <td align="justify"> HttpServlet </td> <td align="justify"> Provides an abstract class to be subclassed to create an HTTP servlet suitable for a Web site. </td> </tr>
							<tr> <td align="justify"> HttpServletRequestWrapper </td> <td align="justify"> Provides a convenient implementation of the HttpServletRequest interface that can be subclassed by developers wishing to adapt the request to a Servlet. </td> </tr>
							<tr> <td align="justify"> HttpServletResponseWrapper </td> <td align="justify"> Provides a convenient implementation of the HttpServletResponse interface that can be subclassed by developers wishing to adapt the response from a Servlet. </td> </tr>
							<tr> <td align="justify"> HttpSessionBindingEvent </td> <td align="justify"> Events of this type are either sent to an object that implements HttpSessionBindingListener when it is bound or unbound from a session, or to a HttpSessionAttributeListener that has been configured in the deployment descriptor when any attribute is bound, unbound or replaced in a session. </td> </tr>
							<tr> <td align="justify"> HttpSessionEvent </td> <td align="justify"> This is the class representing event notifications for changes to sessions within a web application. </td> </tr>
							<tr> <td align="justify"> HttpUtils </td> <td align="justify"> Deprecated. As of Java(tm) Servlet API 2.3. </td> </tr>
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
								<td> <a href="jdbc.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> JDBC </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="jsp.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          JSP <i class="fa fa-arrow-right ms-3"></i></a> 
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