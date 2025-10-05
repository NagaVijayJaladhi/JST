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
                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> Java </a></li>
                        <li class="breadcrumb-item"><a href="#"> Framework </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> REST API </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> REST API </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> REST API Refresher </h4>
                    <p class="mb-4" align="justify"> A REST API stands for Representational State Transfer Application Programming Interface. Rest API is a type of web API that uses HTTP protocol to transfer data between a server and a client. REST APIs are designed to be lightweight and easy to use, making them ideal for building modern, scalable web applications and mobile apps. </p>
					<p class="mb-4" align="justify"> A REST API resources are represented as URLs and are accessed using HTTP methods such as GET, POST, PUT, PATCH and DELETE. The server responds to these requests with appropriate HTTP status codes and, if applicable, a representation of the requested resource in the body of the response. </p>
					<p class="mb-4" align="justify"> REST APIs are designed to be stateless, meaning that each request is self-contained and does not rely on information from previous requests. This allows for flexibility and scalability, as it allows clients to connect and disconnect from the API at will without affecting the overall system. </p>
                </div>
            </div>
        </div>
       
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Overview of REST API Works </h4>
                    <p class="mb-4" align="justify"> A REST API works by sending HTTP requests to a server and receiving HTTP responses in return. The server is typically a web server that is designed to handle these requests and provide the appropriate response. </p>
					<p class="mb-4" align="justify"> 1. A client sends an HTTP request to the server, specifying a particular resource and the desired HTTP method (e.g. GET, POST, PUT, DELETE). </p>
					<p class="mb-4" align="justify"> 2. The server receives the request and processes it, using the resource and HTTP method specified in the request to determine how to handle the request </p>
					<p class="mb-4" align="justify"> 3. If the request is successful, the server sends an HTTP response back to the client, containing the requested resource (if applicable) and an HTTP status code indicating the status of the request. </p>
					<p class="mb-4" align="justify"> 4. If the request is unsuccessful, the server sends an HTTP response with an appropriate HTTP error code (e.g. 500 for internal server error) and an error message in the body of the response. </p>
					<p class="mb-4" align="justify"> A REST API, the client and server communicate using the HTTP protocol, which is a standardized set of rules for transferring data over the internet. The client initiates the request and the server responds with an appropriate response, using the HTTP methods and status codes defined in the HTTP specification. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> HTTP Methods in REST API </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Method </b> </th> <th scope="col"> <b> Purpose </b> </th> <th scope="col"> <b> Property </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> GET </td> <td align="justify"> Get Method is used to retrieve data from a server. </td> <td align="justify"> Safe, Idempotent </td> </tr>
							<tr> <td align="justify"> HEAD </td> <td align="justify"> Headers Method are included in the response. Request resource metadata. </td> <td align="justify"> Safe, Idempotent </td> </tr>
							<tr> <td align="justify"> POST </td> <td align="justify"> POST Method is used to send data to the server, typically to create a new resource. </td> <td align="justify"> Not Safe, Not Idempotent </td> </tr>
							<tr> <td align="justify"> PUT </td> <td align="justify"> PUT Method is used to send data to the server, typically to update an existing resource. </td> <td align="justify"> Not Safe, Idempotent </td> </tr>
							<tr> <td align="justify"> TRACE </td> <td align="justify"> Message body contains the request message as received by the server </td> <td align="justify"> Safe, Idempotent </td> </tr>
							<tr> <td align="justify"> OPTIONS </td> <td align="justify"> OPTIONS Method is request a list of supported methods for a resources. </td> <td align="justify"> Safe, Idempotent </td> </tr>
							<tr> <td align="justify"> DELETE </td> <td align="justify"> DELETE Method is used to delete a resource from the server. </td> <td align="justify"> Not Safe, Idempotent </td> </tr>
							<tr> <td align="justify"> PATCH </td> <td align="justify"> PATCH Method is used to apply partial modifications to a resource, rather than replacing it entirely. </td> <td align="justify"> Not Safe, Not Idempotent </td> </tr>
							<tr> <td align="justify"> CONNECT </td> <td align="justify"> CONNECT Method is request a tunnel from a proxy to a designated server </td> <td align="justify"> Not Safe, Not Idempotent </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Summary of REST API vs SOAP API </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameter </b> </th> <th scope="col"> <b> REST API </b> </th> <th scope="col"> <b> SOAP API </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Acronym </td> 
								 <td align="justify"> Representational State Transfer </td> 
								 <td align="justify"> Simple Object Access Protocol </td> 
							</tr>
							<tr> 
								<td align="justify"> Meaning </td> 
								<td align="justify"> REST is an architecture style for designing communication interfaces. </td> 
								<td align="justify"> SOAP is a protocol for communication between applications </td> 
							</tr>
							<tr> 
								<td align="justify"> Design </td> 
								<td align="justify"> REST API exposes the data. </td> 
								<td align="justify"> SOAP API exposes the operation. </td> 
							</tr>
							<tr> 
								<td align="justify"> Transport Protocol </td> 
								<td align="justify"> REST works only with HTTPS. </td> 
								<td align="justify"> SOAP is independent and can work with any transport protocol. </td> 
							</tr>
							<tr> 
								<td align="justify"> Data format </td> 
								<td align="justify"> REST supports XML, JSON, plain text, HTML. </td> 
								<td align="justify"> SOAP supports only XML data exchange. </td> 
							</tr>
							<tr> 
								<td align="justify"> Performance </td> 
								<td align="justify"> REST has faster performance due to smaller messages and caching support. </td> 
								<td align="justify"> SOAP messages are larger, which makes communication slower. </td> 
							</tr>
							<tr> 
								<td align="justify"> Scalability </td> 
								<td align="justify"> REST is easy to scale. It’s stateless, <br/> so every message is processed independently of previous messages. </td> 
								<td align="justify"> SOAP is difficult to scale. <br/> The server maintains state by storing all previous messages exchanged with a client. </td> 
							</tr>
							<tr> 
								<td align="justify"> Security </td> 
								<td align="justify"> REST supports encryption without affecting performance. </td> 
								<td align="justify"> SOAP supports encryption with additional overheads. </td> 
							</tr>
							<tr> 
								<td align="justify"> Use case </td> 
								<td align="justify"> REST is useful in modern applications and public APIs. </td> 
								<td align="justify"> SOAP is useful in legacy applications and private APIs. </td> 
							</tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Overview of URI </h4>
                    <p class="mb-4" align="justify"> A URI acronym of Uniform Resource Identifier, is a sequence of characters that identify a name or a unique resource on the Internet. A URI contains Scheme, Authority, Path, Query, and a Fragment. </p>
					<p class="mb-4" align="justify"> A URIs can be broken down into two main categories: URLs (Uniform Resource Locators) and URNs (Uniform Resource Names). </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Summary of URI vs URL vs URN </h4>
                    <p class="mb-4" align="justify"> A URI, or Uniform Resource Identifier, is a string of characters that identify a name or a resource. URIs can be used to identify any type of resource, such as a web page, an image, a video, or a specific piece of information. </p>
					
					<p class="mb-4" align="justify"> A URL, or Uniform Resource Locator, is a specific type of URI that specifies the location of a resource on the internet. URLs are used to access web pages and other resources on the internet, and typically include a protocol (such as "http" or "https"), a domain name, and a path to the specific resource. </p>
					
					<p class="mb-4" align="justify"> A URN, or Uniform Resource Name, is another type of URI that is used to identify a resource by its name, rather than its location. URNs are used to provide a persistent and location-independent way to identify resources. </p>

					<p class="mb-4" align="justify"> Between a URI or a URL and their usage is essential for every webmaster. For example, building a REST API using a predictable and hierarchical structure of a URI or a URL can improve the REST API performance. A query is an optional component that contains a query string of non-hierarchical data. It is often a string of key=value pairs. This component is preceded by a question mark. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List of HTTP Status Codes </h4>
					<p class="mb-4" align="justify"> <b class="text-success"> Informational Codes (100 - 199) : </b> The server acknowledges and is processing the request. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Status Code </b> </th> <th scope="col"> <b> Function </b> </th> <th scope="col"> <b> Purpose </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 100 </td> <td align="justify"> Continue </td> <td align="justify"> This interim status code means the server received the initial request, and the client should continue. </td> </tr>
							<tr> <td align="justify"> 101 </td> <td align="justify"> Switching Protocols </td> <td align="justify"> This code is a response to an Upgrade header field request and states the protocol the server will switch to. </td> </tr>
							<tr> <td align="justify"> 102 </td> <td align="justify"> Processing </td> <td align="justify"> This response indicates the server received and is processing the request, but no response is yet available. </td> </tr>
							<tr> <td align="justify"> 103 </td> <td align="justify"> Early hints </td> <td align="justify"> This code is used with the Link header and allows the browser to preload resources while the server prepares a response. </td> </tr>	
						</tbody> 
					</table>
					<p class="mb-4" align="justify"> <b class="text-success"> Success Codes (200 - 299) : </b> The server successfully received, understood, and processed the request. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Status Code </b> </th> <th scope="col"> <b> Function </b> </th> <th scope="col"> <b> Purpose </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 200 </td> <td align="justify"> OK </td> <td align="justify"> This is the standard response for successful HTTP requests. </td> </tr>
							<tr> <td align="justify"> 201 </td> <td align="justify"> Created </td> <td align="justify"> The request succeeded and a new resource was created. This is usually the response after POST or PUT requests. </td> </tr>
							<tr> <td align="justify"> 202 </td> <td align="justify"> Accepted </td> <td align="justify"> The request was accepted but is still in progress. It’s used for cases where another server handles the request or for batch processing. </td> </tr>
							<tr> <td align="justify"> 203 </td> <td align="justify"> Non-Authoritative Information </td> <td align="justify"> The data returned isn’t from the origin server. Instead, it’s a modified version collected from a third party. </td> </tr>	
							<tr> <td align="justify"> 204 </td> <td align="justify"> No Content </td> <td align="justify"> The request was successfully processed, but there is no content. The headers may be useful. </td> </tr>
							<tr> <td align="justify"> 205 </td> <td align="justify"> Reset Content </td> <td align="justify"> The server fulfilled the request but asked the user to reset the document. </td> </tr>
							<tr> <td align="justify"> 206 </td> <td align="justify"> Partial Content </td> <td align="justify"> The server is delivering part of the resource. This response is used when the client sends a Range header to request only part of a resource. </td> </tr>
							<tr> <td align="justify"> 207 </td> <td align="justify"> Multi-Status </td> <td align="justify"> Provides the statuses of multiple resources, depending on how many sub-requests were made. </td> </tr>
							<tr> <td align="justify"> 208 </td> <td align="justify"> Already Reported </td> <td align="justify"> The members of a DAV:propstat element have already been listed and won’t be included again. </td> </tr>
							<tr> <td align="justify"> 226 </td> <td align="justify"> IM Used </td> <td align="justify"> The server completed a GET request. And the response indicates one or more instance-manipulation results. </td> </tr>							
						</tbody> 
					</table>
					<p class="mb-4" align="justify"> <b class="text-success"> Redirection Codes (300 - 399) : </b> The server received the request, but there’s a redirect to somewhere else. </p> 
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Status Code </b> </th> <th scope="col"> <b> Function </b> </th> <th scope="col"> <b> Purpose </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 300 </td> <td align="justify"> Multiple Choices </td> <td align="justify"> The request has more than one possible response. And the user should choose one of them. </td> </tr>
							<tr> <td align="justify"> 301 </td> <td align="justify"> Moved Permanently </td> <td align="justify"> This redirect status code indicates the requested resource has permanently moved to a new URL. The browser displays the new URL. </td> </tr>
							<tr> <td align="justify"> 302 </td> <td align="justify"> Found </td> <td align="justify"> Previously known as “Moved Temporarily,” this code indicates the requested resource has temporarily moved to a new URL. </td> </tr>
							<tr> <td align="justify"> 303 </td> <td align="justify"> See Other </td> <td align="justify"> The server redirects the user to the requested resource with a GET request at another URL. </td> </tr>	
							<tr> <td align="justify"> 304 </td> <td align="justify"> Not Modified </td> <td align="justify"> Used for caching purposes. The response hasn’t been modified, so the client can continue to use the same cached version of the requested resource. </td> </tr>
							<tr> <td align="justify"> 307 </td> <td align="justify"> Temporary Redirect </td> <td align="justify"> The requested resource temporarily moved to a different URL. The only difference vis-a-vis the 302 code is the user must not change the HTTP method used. </td> </tr>
							<tr> <td align="justify"> 308 </td> <td align="justify"> Permanent Redirect </td> <td align="justify"> The requested resource permanently moved to a different URL. The difference between this code and 301 is the user must not change the HTTP request method. </td> </tr>
						</tbody> 
					</table>
					<p class="mb-4" align="justify"> <b class="text-success"> Client Error Codes (400 - 499) : </b> The server couldn’t find (or reach) the page or website. This is an error on the site’s side. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Status Code </b> </th> <th scope="col"> <b> Function </b> </th> <th scope="col"> <b> Purpose </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 400 </td> <td align="justify"> Bad Request </td> <td align="justify"> The server can’t or won’t process the request due to a client error. For example, invalid request message framing, deceptive request routing, size too large. </td> </tr>
							<tr> <td align="justify"> 401 </td> <td align="justify"> Unauthorized </td> <td align="justify"> The user doesn’t have valid authentication credentials to get the requested resource. </td> </tr>
							<tr> <td align="justify"> 402 </td> <td align="justify"> Payment Required </td> <td align="justify"> Reserved for future use; it was initially intended for digital payment systems. It’s very rarely used, and no standard convention regulates it. </td> </tr>
							<tr> <td align="justify"> 403 </td> <td align="justify"> Forbidden </td> <td align="justify"> The client doesn’t have access rights to the content. For example, it may require a password. Unlike the 401 HTTP error code, <br/> the server does know the client’s identity. </td> </tr>	
							<tr> <td align="justify"> 404 </td> <td align="justify"> Not Found </td> <td align="justify"> The server can’t find the requested resource, and no redirection has been set. 404 errors can harm your SEO efforts. </td> </tr>
							<tr> <td align="justify"> 405 </td> <td align="justify"> Method Not Allowed </td> <td align="justify"> The server supports the request method, but the target resource doesn’t. </td> </tr>
							<tr> <td align="justify"> 406 </td> <td align="justify"> Not Acceptable </td> <td align="justify"> The server doesn’t find any content that satisfies the criteria given by the user according to the Accept headers requested. </td> </tr>
							<tr> <td align="justify"> 407 </td> <td align="justify"> Proxy Authentication Required </td> <td align="justify"> This is similar to a 401, but a proxy must authenticate the client to continue. </td> </tr>
							<tr> <td align="justify"> 408 </td> <td align="justify"> Request Timeout </td> <td align="justify"> The server timed out waiting because the client didn’t produce a request within the allotted time. </td> </tr>
							<tr> <td align="justify"> 409 </td> <td align="justify"> Conflict </td> <td align="justify"> The server can’t fulfill the request because there’s a conflict with the resource. It’ll display information about the problem so the client can fix it and resubmit. </td> </tr>
							<tr> <td align="justify"> 410 </td> <td align="justify"> Gone </td> <td align="justify"> The content requested has been permanently deleted from the server and will not be reinstated. </td> </tr>
							<tr> <td align="justify"> 411 </td> <td align="justify"> Length Required </td> <td align="justify"> The server rejects the request because it requires a defined Content-Length header field. </td> </tr>
							<tr> <td align="justify"> 412 </td> <td align="justify"> Precondition Failed </td> <td align="justify"> The client indicates preconditions in the header fields that the server fails to meet. </td> </tr>
							<tr> <td align="justify"> 413 </td> <td align="justify"> Content Too Large </td> <td align="justify"> The client’s request is larger than the server’s defined limits, and the server refuses to process it. </td> </tr>	
							<tr> <td align="justify"> 414 </td> <td align="justify"> URI Too Long </td> <td align="justify"> The URI (Uniform Resource Identifier) requested by the client is too long for the server to process. </td> </tr>
							<tr> <td align="justify"> 415 </td> <td align="justify"> Unsupported Media Type </td> <td align="justify"> The request uses a media format the server does not support. </td> </tr>
							<tr> <td align="justify"> 416 </td> <td align="justify"> Range Not Satisfiable </td> <td align="justify"> The server can’t fulfill the value indicated in the request’s Range header field. </td> </tr>
							<tr> <td align="justify"> 417 </td> <td align="justify"> Expectation Failed </td> <td align="justify"> The server can’t meet the requirements indicated by the Expect request header field. </td> </tr>
							<tr> <td align="justify"> 421 </td> <td align="justify"> Misdirected Request </td> <td align="justify"> The client sends a request to a server that can’t produce a response. </td> </tr>
							<tr> <td align="justify"> 422 </td> <td align="justify"> Unprocessable Content </td> <td align="justify"> The client correctly sends the request, but the server can’t process it because of semantic errors or similar issues. </td> </tr>	
							<tr> <td align="justify"> 423 </td> <td align="justify"> Locked </td> <td align="justify"> The requested method’s resource is locked and inaccessible. </td> </tr>
							<tr> <td align="justify"> 424 </td> <td align="justify"> Failed Dependency </td> <td align="justify"> The request failed because a request the initial request depended on also failed. </td> </tr>
							<tr> <td align="justify"> 425 </td> <td align="justify"> Too Early </td> <td align="justify"> The server is unwilling to process a request that might be replayed. </td> </tr>
							<tr> <td align="justify"> 426 </td> <td align="justify"> Upgrade Required </td> <td align="justify"> The server refuses to process the request using the current protocol unless the client upgrades to a different protocol. </td> </tr>	
							<tr> <td align="justify"> 428 </td> <td align="justify"> Precondition Required </td> <td align="justify"> The server needs the request to be conditional. </td> </tr>
							<tr> <td align="justify"> 429 </td> <td align="justify"> Too Many Requests </td> <td align="justify"> The user sends too many requests in a certain amount of time. </td> </tr>
							<tr> <td align="justify"> 431 </td> <td align="justify"> Request Header Fields Too Large </td> <td align="justify"> The server can’t process the request because the header fields are too large. </td> </tr>
							<tr> <td align="justify"> 451 </td> <td align="justify"> Unavailable for Legal Reasons </td> <td align="justify"> The user requests a resource the server can’t legally provide.  </td> </tr>								
						</tbody> 
					</table>
					<p class="mb-4" align="justify"> <b class="text-success"> Server Error Codes (500 - 599) : </b> The client made a valid request, but the server failed to complete the request. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Status Code </b> </th> <th scope="col"> <b> Function </b> </th> <th scope="col"> <b> Purpose </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 500 </td> <td align="justify"> Internal Server Error </td> <td align="justify"> The server has encountered an unexpected error and cannot complete the request.  </td> </tr>
							<tr> <td align="justify"> 501 </td> <td align="justify"> Not Implemented </td> <td align="justify"> The server can’t fulfill the request or doesn’t recognize the request method.  </td> </tr>
							<tr> <td align="justify"> 502 </td> <td align="justify"> Bad Gateway </td> <td align="justify"> The server acts as a gateway and gets an invalid response from an inbound host. </td> </tr>
							<tr> <td align="justify"> 503 </td> <td align="justify"> Service Unavailable </td> <td align="justify"> The server is unable to process the request. This often occurs when a server is overloaded or down for maintenance.  </td> </tr>	
							<tr> <td align="justify"> 504 </td> <td align="justify"> Gateway Timeout </td> <td align="justify"> The server was acting as a gateway or proxy and timed out, waiting for a response. </td> </tr>
							<tr> <td align="justify"> 505 </td> <td align="justify"> HTTP Version Not Supported </td> <td align="justify"> The server doesn’t support the HTTP version in the request. </td> </tr>
							<tr> <td align="justify"> 506 </td> <td align="justify"> Variant Also Negotiates </td> <td align="justify"> The server has an internal configuration error.  </td> </tr>
							<tr> <td align="justify"> 507 </td> <td align="justify"> Insufficient Storage </td> <td align="justify"> The server doesn’t have enough storage to process the request successfully. </td> </tr>
							<tr> <td align="justify"> 508 </td> <td align="justify"> Loop Detected </td> <td align="justify"> The server detects an infinite loop while processing the request.  </td> </tr>
							<tr> <td align="justify"> 511 </td> <td align="justify"> Network Authentication Required </td> <td align="justify"> The client must be authenticated to access the network. The error should include a link where the user can submit credentials. </td> </tr>							
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