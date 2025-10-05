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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Java Question &amp; Answers </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Java Question &amp; Answers </h1>
                    <p class="mb-4" align="justify"> <b>  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 1. What is a Java Refresher ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> A Java program is mostly a collection of objects talking to other objects by invoking each other's methods. Every object is of a certain type, and that type is defined by a class or an interface. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 2. What is Java Virtual Machine (JVM) ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> JVM is an abstract computing machine. JVM is a platform independent execution environment that converts Java byte code into machine language and executes it. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 3. What is a Class ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> A Template that describes the kinds of state and behavior that objects of its type support. </p>
					 <p class="mb-4" align="justify"> <b> Answers : </b> A Class is group of objects that have common property. It is a template or blue print from which objects are created. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4. What is an Object ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> At runtime, when the Java Virtual Machine (JVM) encounters the new keyword, it will use the appropriate class to make an object which is an instance of that class. That object will have its own state, and access to all of the behaviors defined by its class. </p>
					 <p class="mb-4" align="justify"> <b> Answers : </b> A runtime entity that has state and behavior is known as an Object. </p>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 5. What is a State (Instance Variables) ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Each object (instance of a class) will have its own unique set of instance variables as defined in the class. Collectively, the values assigned to an object's instance variables make up the object's state. </p>
                </div>
            </div>
        </div>
	
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 6. What is a Behavior (Methods) ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> When a programmer creates a class, she creates methods for that class. Methods are where the class' logic is stored. Methods are where the real work gets done. They are where algorithms get executed, and data gets manipulated. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 7. What is a Encapsulation ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Encapsulation is the process of wrapping up of data and methods together into single unit. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 8. What is a Abstraction ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Abstraction is the process of hiding the implementation details and showing only functionalities to the user. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 9. What is a Inheritance ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Inheritance is a mechanism in which one object acquires all the properties and behaviors of parent object. Inheritance represent IS-A relationship. </p>
					<p class="mb-4" align="justify"> <b> Answers : </b> Inheritance is the method by which objects of one class get the properties of objects of another class. Inheritance represent IS-A relationship. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 10. What is a Polymorphism ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Polymorphism is the ability of methods to behave differently based on the object calling it. </p>
					<p class="mb-4" align="justify"> <b> Answers : </b> Polymorphism allows the same functions to act differently classes. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 11. What is a Public ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Public members are visible to sub classes if those sub classes are in the same package as the super class. For a sub class outside the packages, the public members can be access. (or) A class declaration with the public keyword gives all class from all packages access to the public class. </p>
                </div>
            </div>
        </div>	

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 12. What is a Private ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Private members are visible only current class only. Private member are not visible other classes in same package. </p>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 13. What is a Protected ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Protected members are visible to sub classes if those sub classes are in the same package as the super class. For a sub class outside the packages, the protected members can be access through inheritance. </p>
                </div>
            </div>
        </div>	

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 14. What is a Default ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Default members are visible to sub classes if those sub classes are in the same package as the super class. </p>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 15. What is a Volatile ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> The volatile modifier tells the JVM that a thread accessing variable must always reconcile its own private copy of the variable with the master copy in memory. </p>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 16. What are the rules need to follow for Volatile Keyword ? </h4>
					<p class="mb-4" align="justify"> <b> Rules : </b> </p>
					<p class="mb-4" align="justify"> 1. Volatile applied variable only. </p>
					<p class="mb-4" align="justify"> 2. Volatile can be applied to static variables. </p>
					<p class="mb-4" align="justify"> 3. Volatile can not be applied to final variables. </p>
					<p class="mb-4" align="justify"> 4. Volatile is used in multi-processor environment. </p>
					<p class="mb-4" align="justify"> 5. Volatile and transient cannot come together. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 17. What is a Transient ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> A Transient variable is a variable that can not be serialized. The transient keyword can be used to indicate the Java Virtual Machine that the variable is not part of the persistent state of the object. Transient is a keyword. Transient can be applied only variables. Transient variable can not be seriablized. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 18. What is a Native Method ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> The Native method indicates that a method is implemented in platform dependent. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 19. What are the rules need to follow for Native Keyword ? </h4>
					<p class="mb-4" align="justify"> <b> Rules : </b> </p>
					<p class="mb-4" align="justify"> 1. Native can be applies to only methods. </p>
					<p class="mb-4" align="justify"> 2. Native can be applied to static method also. </p>
					<p class="mb-4" align="justify"> 3. Native cannot be applied abstract. </p>
					<p class="mb-4" align="justify"> 4. Native can throw exception. </p>
					<p class="mb-4" align="justify"> 5. Native method is like an abstract method. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 20. What is a Synchronized ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Synchronized is a keyword. Synchronized can be applied only methods. Synchronized method can be accessed only one thread at a time. (or) The synchronized keyword indicates that a method can be accessed by only one thread at a time. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 21. What is a Strictfp ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Strictfp is a keyword in the Java programming language that restricts floating point calculations to ensure portability. The Strictfp was introduced into Java with the Java Virtual Machine version 1.2. Strictfp applied classes and methods only. Strictfp can be applied methods and classes. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 22. What is an abstract ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> An abstract is a keyword. An abstract can be applied classes and methods. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 23. What is an Abstract Method ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b>  An Abstract Method is a method that can be declared but not implemented. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 24. What is an Abstract Class ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b>  An abstract class is a class that can be declared abstract key word. An abstract class may or may not be abstract methods. An abstract class can not make an object but can be sub classed. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 25. What is a final ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b>  Final is a keyword. Final can be applied variables, methods and classes. Final Variables can not be modified. Final methods can be overloading but can not overriding. Final Classes can not extended. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 26. What is a final Variable ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b>  A final variable that is not initialized at the time of declaration is known as blank final variable. It can be initialized only in constructor. </p>
					<p class="mb-4" align="justify"> <b> Example : </b>  final String panCardNo; </p>
                </div>
            </div>
        </div>


		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 27. What is a static final Variable ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b>  A static final variable that is not initialized at the time of declaration is known as static blank final variable. It can be initialized only in static block. </p>
					<p class="mb-4" align="justify"> <b> Example : </b>  final String panCardNo; </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 28. What is a Throwable ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Throwable is a class that represents all errors and exception which may occur in Java Virtual Machine.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 29. What is a Exception ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Exception is an event that disrupt the normal flow of the program. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 30. What is a Exception Handling ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Exception Handling is a mechanism to handle the run time error. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 31. What is a Try Block ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Try Block is used to enclose the code that might throw an exception. Try Block must be declared inside the method only. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 32. What is a Catch Block ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Catch Block is used to handle the exceptions. Catch Block must be declared after the try block inside the method only. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                   <h4 class="mb-3" align="left"> 33. What is a Constructor in Java ? </h4>
                   <p class="mb-4" align="justify"> <b> Answers : </b> Constructor is a special type of method that is used to initialize the objects. Constructors is invoked at the time of object creation. It constructs the value. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                   <h4 class="mb-3" align="left"> 34. What is Inner Class ? </h4>
                   <p class="mb-4" align="justify"> <b> Answers : </b> Inner Class is a class which is declared inside the class or interface. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
			<div class="container">
				<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 35. What is SIB ? </h4>
					<p class="mb-4" align="justify"> <b> Answers : </b> SIB Stands for Static Initialization Block. SIB executes when the class gets loaded and executed only once in entire execution. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
			<div class="container">
				<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 36. What is IIB ? </h4>
					<p class="mb-4" align="justify"> <b> Answers : </b> IIB Stands for Instance Initialization Block. IIB executes when the constructor is called but before the execution of constructor. So, it executes as many times as constructor gets executed. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 37. Which is ListIterator ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> ListIterator is an interface. ListIterator can retrieve the elements in forward and backword direction from a collection object. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
			<div class="container">
				<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 38. What is SerialVersionID ? </h4>
					<p class="mb-4" align="justify"> <b> Answers : </b> Whenever, an object is serialized the object is stamped with a version Id number for the object class. </p>
					<p class="mb-4" align="justify"> <b> Answers : </b> serialVersionUID is a unique identifier assigned to a class during the serialization process. It ensures that a serialized object corresponds to the same class definition during deserialization.  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 39. Which is Resouce Bundle ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> The Resouce Bundle class is used to internationalize the message. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 40. Which is a File ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> File is a class. File can not used to actually read (or) write data. File can used to making new files, searching for files, deleting files, making directories and working with pathes etc. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 41. Which is FileReader ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> FileReader is a class. FileReader can used to read single character files, the whole stream of character (or a fixed number of characters. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 42. Which is OutOfMemoryError in Java ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> OutOfMemoryError is a sub class of java.lang.VirtualMachineError and its throws by JVM when it ran out of heap memory. <br/> C:\> java MyProgram -Xms 1024m - Xmx 1024m - XX:PermSize=64M -XX:MaxPermSize = 256m. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 43. Which is the famous team used to describe Java ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> WORA mean Write One Run Anywhere. Java is guaranteed to be Write Once, Run Anywhere. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 44. Why is SerialVersionUID Important ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Serialization converts an object into a byte stream, enabling it to be saved to a file or transferred over a network. During deserialization, Java reconstructs the object from the byte stream. For this process to succeed, the serialVersionUID of the serialized object must match the serialVersionUID of the class being deserialized. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
			<div class="container">
				<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 45. What is FileWriter ? </h4>
					<p class="mb-4" align="justify"> <b> Answers : </b> FileWriter is a class. FileWriter class is used to write single characters, the whole stream of characters (or) fixed number of character. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
			<div class="container">
				<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<h4 class="mb-3" align="left"> 46. What is BufferReader ? </h4>
					<p class="mb-4" align="justify"> <b> Answers : </b> BufferReader is a class. BufferReader is used to read large chunks of data from a file at once and keep this data in a buffer. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 47. Is it possible to re-throw exception ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, We can re-throw exceptions from catch block to another class where it can be handled. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 48. What is the super class for all exceptions ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Throwable is the super class of all exceptions in Java. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 49. Can we define an interface inside the class ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, If we can define an Interface inside the class. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 50. Can you store a primitive data type into a collection ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> No, Collections store only objects. </p>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 51. Can we intialize black final variable ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes but only in Constructor. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 52. Can you make List elements synchronized ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, Collections class provides methods to make List elements as synchronized. <br/> public static List SynchronizedList(List list) {  } </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 53. Can you make Set elements synchronized ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, Collections class provides methods to make Set elements as synchronized. <br/> public static Set SynchronizedSet(Set set) { } <br/> public static SortedSet SynchronizedSortedSet(SortedSet set) { } </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 54. Can you make Map elements synchronized ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, Collections class provides methods to make Map elements as synchronized. <br/> public static Map SynchronizedMap(Map map) { } <br/> public static SortedMap SynchronizedSortedMap(SortedMap map) { } </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 55. Can we override the overloaded methods ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, we can override the overloaded methods. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 56. Can you declare the main method as final ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, such as public static final void main (String [] args) { } </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 57. Can you have virtual functions in Java ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, all functions in Java are virtual functions by default. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 58. Can we override main() method ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> No, main() method is a static method and is thus not polymorphic. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 59. Can we return any value in try block ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, we can return any value in try block. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 60. Can we return any value in catch block ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, we can return any value in catch block. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 61. Can we return any value in finally block ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, we can return any value in finally block. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 62. Can we return any value in try, catch, finally block at a time ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> No, we can return any value either from try block or catch block or finally block. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 63. Can we define a class inside the interface ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, If we define a class inside the interface. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 64. Can we overload main() method ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, by method overloading. You can have any number of main() methods in a class by method overloading. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 65. What is instanceOf Keyword ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> instanceof is a binary operator used to determine whether an object is an instance of a specific class, subclass, or implements a particular interface. It is also referred to as a "type comparison operator" because it compares an object's runtime type against a specified type. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 66. is final method inherited ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, final method is inherited but you can not override it. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 67. Can we call one constructor from another if a class has multiple constructor ? </h4>
                    <p class="mb-4" align="justify"> <b> Answers : </b> Yes, use this() method. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Java Difference Interview Questions </h1>
                    <p class="mb-4" align="justify"> <b>  </p>
                </div>
            </div>
        </div>
				
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 1. Differentiate between xxxValue(), valueOf() and parseXXX() ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> xxxValue() </b> </th> <th scope="col"> <b> valueOf() </b> </th> <th scope="col"> <b> parseXXX() </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Convert a wrapper to a Primitive </td> <td align="justify"> Convert a String to a Wrapper </td> <td align="justify"> Convert a String to a Primitive </td> </tr>							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 2. Differentiate between Compiler and Interpreter ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Compiler </b> </th> <th scope="col"> <b> Interpreter </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Compiler takes entire program as input </td> <td align="justify"> Interpreter takes single instruction as input. </td> </tr>	
							<tr> <td align="justify"> Intermediate object code is generated </td> <td align="justify"> No intermediate object code is generated. </td> </tr>
							<tr> <td align="justify"> Conditional control statements are executed faster  </td> <td align="justify"> Conditional control statements are executed slower. </td> </tr>
							<tr> <td align="justify"> Memory requirement is more  </td> <td align="justify">  Memory requirement is less. </td> </tr>
							<tr> <td align="justify"> Program need not be compiled every time  </td> <td align="justify">  Every time higher level program is converted into lower level program. </td> </tr>
							<tr> <td align="justify"> Errors are displayed after entire program is checked  </td> <td align="justify">  Errors are displayed for every instruction interpreted. </td> </tr>
							<tr> <td align="justify"> Compiler Exmple : C, C++, Cobol  </td> <td align="justify">  Interpreter Example : Basic, Visual Basic, Python, Ruby, PHP, Perl, MatLab. </td> </tr>						
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 3. Differentiate between ArrayList and CopyOnWriteArray ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> ArrayList </b> </th> <th scope="col"> <b> CopyOnWriteArray </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Synchronized </td> <td align="justify"> No </td> <td align="justify"> Yes </td> </tr>
							<tr> <td align="justify"> Thread Safe </td> <td align="justify"> No </td> <td align="justify"> Yes </td> </tr>
							<tr> <td align="justify"> Iterator </td> <td align="justify"> Fail Fast </td> <td align="justify"> Fail Safe </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Fast </td> <td align="justify"> Slow </td> </tr>	
							<tr> <td align="justify"> Added </td> <td align="justify"> Java 1.2 </td> <td align="justify"> Java 1.5 </td> </tr>
							<tr> <td align="justify"> Throw CurrentModificationException </td> <td align="justify"> Yes </td> <td align="justify"> No </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4. Differentiate between Failsafe and Failfast? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Failsafe </b> </th> <th scope="col"> <b> Failfast </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Behavior </td> <td align="justify"> Iterates over a copy of the collection to avoid errors </td> <td align="justify"> Fails immediately upon detecting structural changes </td> </tr>
							<tr> <td align="justify"> Concurrent Modification </td> <td align="justify"> Does not throw ConcurrentModificationException </td> <td align="justify"> Throws ConcurrentModificationException </td> </tr>
							<tr> <td align="justify"> Implementation </td> <td align="justify"> Uses a separate copy or snapshot during iteration </td> <td align="justify"> Directly iterates over the actual collection </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Higher memory usage due to a copy </td> <td align="justify"> More efficient as it does not create a copy </td> </tr>	
							<tr> <td align="justify"> Examples </td> <td align="justify"> CopyOnWriteArrayList, ConcurrentHashMap </td> <td align="justify"> ArrayList, HashMap, HashSet </td> </tr>							
						</tbody> 
					</table>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 5. Differentiate between List and Set ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> List </b> </th> <th scope="col"> <b> Set </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Duplicates </td> <td align="justify"> Allows duplicate elements </td> <td align="justify"> Does not allow duplicate elements </td> </tr>
							<tr> <td align="justify"> Order </td> <td align="justify"> Maintains insertion order </td> <td align="justify"> Does not maintain insertion order except LinkedHashSet </td> </tr>
							<tr> <td align="justify"> Null Values </td> <td align="justify"> Allows multiple null values </td> <td align="justify"> Allows at most one null value </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Generally faster for indexed access</td> <td align="justify"> 	Optimized for searching and uniqueness </td> </tr>	
							<tr> <td align="justify"> Examples </td> <td align="justify"> ArrayList, LinkedList </td> <td align="justify"> HashSet, TreeSet, LinkedHashSet </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 6. Differentiate between HashMap and TreeMap ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> HashMap </b> </th> <th scope="col"> <b> TreeMap </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Ordering </td> <td align="justify"> No specific order </td> <td align="justify"> Maintains natural or custom (via Comparator) order </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Faster for most operations (O(1) for get/put) </td> <td align="justify"> Slower (O(log n) for get/put) due to tree structure </td> </tr>
							<tr> <td align="justify"> Null Keys/Values </td> <td align="justify"> Allows one null key and multiple null values </td> <td align="justify"> Does not allow null keys, but allows null values </td> </tr>
							<tr> <td align="justify"> Underlying Structure </td> <td align="justify"> Uses a hash table </td> <td align="justify"> Uses a Red-Black tree </td> </tr>	
							<tr> <td align="justify"> Examples </td> <td align="justify"> HashMap, LinkedHashMap </td> <td align="justify"> TreeMap </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 7. Differentiate between Stack and Queue ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Stack </b> </th> <th scope="col"> <b> Queue </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Order </td> <td align="justify"> Follows LIFO (Last In, First Out) </td> <td align="justify"> Follows FIFO (First In, First Out) </td> </tr>
							<tr> <td align="justify"> Operations </td> <td align="justify"> push, pop, peek </td> <td align="justify"> add, remove, peek </td> </tr>
							<tr> <td align="justify"> Use Cases </td> <td align="justify"> Backtracking, parsing </td> <td align="justify"> Task scheduling, buffering </td> </tr>	
							<tr> <td align="justify"> Examples </td> <td align="justify"> Stack (Legacy class) </td> <td align="justify"> LinkedList, PriorityQueue </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 8. Differentiate between Queue and Deque ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Stack </b> </th> <th scope="col"> <b> Queue </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Order </td> <td align="justify"> Follows FIFO </td> <td align="justify"> Supports FIFO and LIFO </td> </tr>
							<tr> <td align="justify"> Operations </td> <td align="justify"> add, remove, peek </td> <td align="justify"> addFirst, addLast, removeFirst, removeLast </td> </tr>
							<tr> <td align="justify"> Examples </td> <td align="justify"> LinkedList, PriorityQueue </td> <td align="justify"> ArrayDeque, LinkedList </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 9. Differentiate between Singly Linked List and Doubly Linked List ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Singly Linked List </b> </th> <th scope="col"> <b> Doubly Linked List </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Links </td> <td align="justify"> Each node points to the next </td> <td align="justify"> Each node points to both next and previous nodes </td> </tr>
							<tr> <td align="justify"> Memory Usage </td> <td align="justify"> Requires less memory </td> <td align="justify"> Requires more memory due to additional pointer </td> </tr>
							<tr> <td align="justify"> Traversal </td> <td align="justify"> Can be traversed in one direction </td> <td align="justify"> Can be traversed in both directions </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Simpler and faster </td> <td align="justify"> Slightly slower due to additional operations </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 10. Differentiate between PriorityQueue and TreeSet ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> PriorityQueue </b> </th> <th scope="col"> <b> TreeSet </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Ordering </td> <td align="justify"> Natural order or custom Comparator; duplicates allowed </td> <td align="justify"> Sorted order, no duplicates </td> </tr>
							<tr> <td align="justify"> Null Values </td> <td align="justify"> Does not allow null elements </td> <td align="justify"> Does not allow null elements </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> O(log n) for insertion/removaln </td> <td align="justify"> O(log n) for insertion/removal </td> </tr>
							<tr> <td align="justify"> Use Cases </td> <td align="justify"> Priority-based tasks, heaps </td> <td align="justify"> Unique elements in sorted order </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 11. Differentiate between HashSet and TreeSet ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> HashSet </b> </th> <th scope="col"> <b> TreeSet </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Ordering </td> <td align="justify"> No specific order </td> <td align="justify"> Maintains sorted order </td> </tr>
							<tr> <td align="justify"> Null Values </td> <td align="justify"> Allows one null element </td> <td align="justify"> Does not allow null elements </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Faster (O(1) for most operations) </td> <td align="justify"> Slower (O(log n) for operations) </td> </tr>
							<tr> <td align="justify"> Examples </td> <td align="justify"> HashSet, LinkedHashSet </td> <td align="justify"> TreeSet </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 12. Differentiate between Iterable and Iterator </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Iterable </b> </th> <th scope="col"> <b> Iterator </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Definition </td> <td align="justify"> Represents a collection that can be iterated </td> <td align="justify"> Used to traverse through elements in a collection </td> </tr>
							<tr> <td align="justify"> Methods </td> <td align="justify"> iterator()	 </td> <td align="justify"> hasNext(), next(), remove() </td> </tr>
							<tr> <td align="justify"> Usage </td> <td align="justify"> Enable for-each loop </td> <td align="justify"> Enables manual iteration </td> </tr>
							<tr> <td align="justify"> Examples </td> <td align="justify"> ArrayList, HashSet </td> <td align="justify"> Returned by iterator() on collections </td> </tr>

						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 13. Differentiate between HashMap and TreeMap </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> HashMap </b> </th> <th scope="col"> <b> TreeMap </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Ordering </td> <td align="justify"> No specific order  </td> <td align="justify"> Maintains natural or custom (via Comparator) order </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> Faster for most operations (O(1) for get/put) </td> <td align="justify"> Slower (O(log n) for get/put) due to tree structure </td> </tr>
							<tr> <td align="justify"> Null Keys/Values </td> <td align="justify"> Allows one null key and multiple null values </td> <td align="justify"> Does not allow null keys, but allows null values </td> </tr>
							<tr> <td align="justify"> Underlying Structure </td> <td align="justify"> Uses a hash table </td> <td align="justify"> Uses a Red-Black tree </td> </tr>
							<tr> <td align="justify"> Examples </td> <td align="justify"> HashMap, LinkedHashMap	TreeMap </td> </tr>

						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 14. Differentiate between List and Map </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> List </b> </th> <th scope="col"> <b> Map </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Data Structure </td> <td align="justify"> Ordered collection of elements </td> <td align="justify"> Key-value pairs </td> </tr>
							<tr> <td align="justify"> Duplicates </td> <td align="justify"> Allows duplicates </td> <td align="justify"> Keys must be unique, values can be duplicates </td> </tr>
							<tr> <td align="justify"> Null Values </td> <td align="justify"> Allows multiple null values </td> <td align="justify"> Allows one null key and multiple null values </td> </tr>
							<tr> <td align="justify"> Examples </td> <td align="justify"> ArrayList, LinkedList </td> <td align="justify"> HashMap, TreeMap </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 15. Differentiate between Singleton Class and Static Members ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Singleton Class </b> </th> <th scope="col"> <b> Static Members </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Singleton is an object </td> <td align="justify"> Static is not an object </td> </tr>
							<tr> <td align="justify"> Singleton can be extended/sub classed </td> <td align="justify"> Static cannot be extended/sub classed </td> </tr>
							<tr> <td align="justify"> Singleton can be passed around as an object </td> <td align="justify"> Static cannot be passed around as an object </td> </tr>
							<tr> <td align="justify"> Singleton can be garbage collected </td> <td align="justify"> Static can not be garbage collected </td> </tr>
							<tr> <td align="justify"> Singleton class is a design pattern </td> <td align="justify"> Static is a keyword </td> </tr>
							<tr> <td align="justify"> Singleton class can be overridden by extending </td> <td align="justify"> Static method can not be overridden </td> </tr>
							<tr> <td align="justify"> Singleton class are bounded on runtime </td> <td align="justify"> Static methods are bounded on compiler time </td> </tr>
						</tbody> 
					</table>
					 <p class="mb-4" align="justify"> <b> Note : </b> Static provides better performance than Singleton Class. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 16. Differentiate between Constructor and Method </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Constructor </b> </th> <th scope="col"> <b> Method </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Purpose </td> <td align="justify"> Used to initialize the state of an object. </td> <td align="justify"> Used to exhibit the behaviour of an object. </td> </tr>
							<tr> <td align="justify"> Name </td> <td align="justify"> It must have the same name as the class. </td> <td align="justify"> Can have any name different from the class. </td> </tr>
							<tr> <td align="justify"> Return Type </td> <td align="justify"> Does not have a return type, not even void. </td> <td align="justify"> Must have a return type, can be void. </td> </tr>
							<tr> <td align="justify"> Calling </td> <td align="justify"> Automatically called when an object is created. </td> <td align="justify"> It must be called explicitly. </td> </tr>
							<tr> <td align="justify"> Inheritance </td> <td align="justify"> It cannot be inherited. </td> <td align="justify"> It can be inherited. </td> </tr>
							<tr> <td align="justify"> Overloading </td> <td align="justify"> It can be overloaded. </td> <td align="justify"> It can be overloaded and overridden. </td> </tr>
							<tr> <td align="justify"> Invoking </td> <td align="justify"> It cannot be invoked explicitly, invoked by new. </td> <td align="justify"> It can be invoked by object reference. </td> </tr>
							<tr> <td align="justify"> Default Version </td> <td align="justify"> A default constructor is provided if none is specified. </td> <td align="justify"> No default method is provided. </td> </tr>

						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 17. Differentiate between Comparable and Comparator ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Comparable </b> </th> <th scope="col"> <b> Comparator </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Comparable provides only one sort of sequence </td> <td align="justify"> Comparator provides multiple sort of sequence. </td> </tr>
							<tr> <td align="justify"> Comparable is used to compare itself by using with another object </td> <td align="justify"> Comparator is used to compare two data types or objects. </td> </tr>
							<tr> <td align="justify"> Comparable provides only one method namely compareTo ( ) method </td> <td align="justify"> Comparator provides two methods namely compare ( ) and equals ( ) methods. </td> </tr>
							<tr> <td align="justify"> Comparable is found in java.lang package where as Comparator is found in java.util package. </td> </tr>
							<tr> <td align="justify"> If we implement Comparable interface actual class is modified </td> <td align="justify"> if we implement Comparator interface actual class is not modified. </td> </tr>

						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 18. Differentiate between CPP (C++) and Java ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> CPP (C++) </b> </th> <th scope="col"> <b> Java </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> C++ has functions </td> <td align="justify"> Java have methods. </td> </tr> 
							<tr> <td align="justify"> C++ has destructors </td> <td align="justify"> Java does not have destructors. </td> </tr> 
							<tr> <td align="justify"> C++ has three access modifiers </td> <td align="justify"> Java have four access modifiers. </td> </tr> 
							<tr> <td align="justify"> C++ has goto statement </td> <td align="justify"> Java does not have goto statement. </td> </tr> 
							<tr> <td align="justify"> Pointers are available in C++ </td> <td align="justify"> pointers are not available in Java. </td> </tr> 
							<tr> <td align="justify"> C++ support multiple inheritance </td> <td align="justify"> Java does not support multiple inheritance. </td> </tr> 
							<tr> <td align="justify"> C++ is not a purely object-oriented programming language </td> <td align="justify"> Java is a purely object-oriented programming language. </td> </tr> 
							<tr> <td align="justify"> We can write C++ program without using a class or an object </td> <td align="justify"> we cannot write Java Program without using a class or an object. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 19. Differentiate between throw and throws ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> throw </b> </th> <th scope="col"> <b> throws </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Throw is used to handle user defined exception </td> <td align="justify"> JVM handles the exceptions which are specified by thows. </td> </tr>
							<tr> <td align="justify"> Throw is used for to through exception system explicitly </td> <td align="justify"> Throws is used for to throws exception means throws IOException and ServletException etc. </td> </tr> 
							<tr> <td align="justify"> Throw is used to throw the exception to catch block and handle it </td> <td align="justify"> throws is used to throw an exception from the method without handling that exception. </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 20. Differentiate between HashMap and CurrentHashMap ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> HashMap </b> </th> <th scope="col"> <b> CurrentHashMap </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> HashMap is not a thread safe </td> <td align="justify"> CurrentHashMap can allow a thread safe. </td> </tr>
							<tr> <td align="justify"> HashMap can allow one null key </td> <td align="justify"> CurrentHashMap cannot allow null key. </td> </tr>
							<tr> <td align="justify"> HashMap can throw CurrentModificationException </td> <td align="justify"> CurrentHashMap cannot throw CurrentModificationException. </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 21. Differentiate between HashTable and CurrentHashMap ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> CurrentHashMap </b> </th> <th scope="col"> <b> HashTable </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> We will get thread safety without locking the total map object just with a bucket level lock. </td> <td align="justify"> We will get thread safety by locking the whole map object. </td> </tr> 					
							<tr> <td align="justify"> At a time multiple threads are allowed to operate on map objects safely. </td> <td align="justify"> At a time one thread is allowed to operate on a map object. </td> </tr> 
							<tr> <td align="justify"> Read operation can be performed without lock but write operation can be performed with bucket level lock. </td> <td align="justify"> Every read and write operations required total map object. </td> </tr> 
							<tr> <td align="justify"> While one thread iterating map objects the other thread is allowed to modify the map and won't get ConcurrentModificationException. </td> <td align="justify"> While one thread iterating map object the other threads are not allowed to modify the map otherwise we will get ConcurrentModificationException. </td> </tr> 
							<tr> <td align="justify"> Iterator of ConcurrentHashMap is fail-safe and won't raise ConcurrentModificationException </td> <td align="justify"> Iterator of HashTable is fail-fast and it will raise ConcurrentModificationException. </td> </tr> 
							<tr> <td align="justify"> Null is not allowed for both keys and values. </td> <td align="justify"> Null is not allowed for both keys and values. </td> </tr> 
							<tr> <td align="justify"> Introduce in Java 1.5 Version </td> <td align="justify"> Introduce in Java 1.0 Version </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 22. Differentiate between SynchronizedMap and HashTable ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> SynchronizedMap </b> </th> <th scope="col"> <b> HashTable </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> We will get thread safety by locking the whole map object </td> <td align="justify"> We will get thread safety by locking the whole map object. </td> </tr> 					
							<tr> <td align="justify"> At a time only one thread is allowed to perform any operation on a map object. </td> <td align="justify"> At a time one thread is allowed to operate on a map object. </td> </tr> 
							<tr> <td align="justify"> Every read and write operations required total map object </td> <td align="justify"> Every read and write operations required total map object. </td> </tr> 
							<tr> <td align="justify"> While one thread iterating map object the other threads are not allowed to modify the map otherwise we will get ConcurrentModificationException. </td> <td align="justify"> While one thread iterating map object the other threads are not allowed to modify the map otherwise we will get ConcurrentModificationException. </td> </tr> 
							<tr> <td align="justify"> Iterator of SynchronizedMap is fail-fast and it will raise ConcurrentModificationException </td> <td align="justify"> Iterator of HashTable is fail-fast and it will raise ConcurrentModificationException. </td> </tr> 
							<tr> <td align="justify"> Null is allowed for both keys and values </td> <td align="justify"> Null is not allowed for both keys and values. </td> </tr> 
							<tr> <td align="justify"> Introduce in Java 1.2 Version </td> <td align="justify"> Introduce in Java 1.0 Version </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 23. Differentiate between SynchronizedMap and ConcurrentHashMap ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> SynchronizedMap </b> </th> <th scope="col"> <b> ConcurrentHashMap </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> We will get thread safety by locking the whole map object </td> <td align="justify"> We will get thread safety without locking the total map object just with a bucket level lock. </td> </tr> 					
							<tr> <td align="justify"> At a time only one thread is allowed to perform any operation on a map object. </td> <td align="justify"> At a time multiple threads are allowed to operate on map objects safely. </td> </tr> 
							<tr> <td align="justify"> Every read and write operations required total map object </td> <td align="justify"> Read operation can be performed without lock but write operation can be performed with bucket level lock. </td> </tr> 
							<tr> <td align="justify"> While one thread iterating map object the other threads are not allowed to modify the map otherwise we will get ConcurrentModificationException. </td> <td align="justify"> While one thread iterating map objects the other thread is allowed to modify the map and won't get ConcurrentModificationException. </td> </tr> 
							<tr> <td align="justify"> Iterator of SynchronizedMap is fail-fast and it will raise ConcurrentModificationException </td> <td align="justify"> Iterator of ConcurrentHashMap is fail-safe and won't raise ConcurrentModificationException. </td> </tr> 
							<tr> <td align="justify"> Null is allowed for both keys and values </td> <td align="justify"> Null is not allowed for both keys and values. </td> </tr> 
							<tr> <td align="justify"> Introduce in Java 1.2 Version </td> <td align="justify"> Introduce in Java 1.5 Version </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 24. Difference between HashMap and IdentityHashMap ? </h4>
                    <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> HashMap </b> </th> <th scope="col"> <b> IdentityHashMap </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> HashMap implements the Map interface but it doesn't violate the map general contract. </td> <td align="justify"> IdentityHashMap also implements the Map interface but it intentionally violates the map general contract. </td> </tr>
							<tr> <td align="justify"> HashMap uses object equality to compare the key and values. </td> <td align="justify"> IdentityHashMap uses reference equality to compare the key and values. </td> </tr>
							<tr> <td align="justify"> HashMap uses the hashCode() method of HashMap class to find the bucket location. </td> <td align="justify"> IdentityHashMap doesn't use the hashCode() method instead it uses the System.IdentityHashCode() method to find the bucket location. </td> </tr>
							<tr> <td align="justify"> HashMap uses chaining. </td> <td align="justify"> IdentityHashMap uses a simple liner probe hash table. </td> </tr>
							<tr> <td align="justify"> To safely store the objects in HashMap the keys need to be immutable. </td> <td align="justify"> IdentityHashMap doesn't require the key to be immutable. </td> </tr>
							<tr> <td align="justify"> HashMap performs slightly less than the IdentityHashMap. </td> <td align="justify"> IdentityHashMap performs better than HashMap.</td> </tr> 
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