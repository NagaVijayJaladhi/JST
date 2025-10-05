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
                    <a href="pyHome.php" class="nav-item nav-link active"> Python </a>
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
                        <li class="breadcrumb-item"><a href="#"> Python </a> </li>
                        <li class="breadcrumb-item"><a href="#"> Built-in Function </a> </li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> <?php echo $_SESSION["username"]; ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Python Built-in Function </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Built-in Function Meaning </h4>
                    <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> built-in functions are defined as the functions whose functionality is pre-defined in Python. The python interpreter has several functions that are always present for use. These functions are known as Built-in Functions. There are several built-in functions in Python which are listed below: </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> abs() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> all() function accepts an iterable object (such as list, dictionary, etc.). It returns true if all items in passed iterable are true. Otherwise, it returns False. If the iterable object is empty, the all() function returns True. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> all() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> abs() function is used to return the absolute value of a number. It takes only one argument, a number whose absolute value is to be returned. The argument can be an integer and floating-point number. If the argument is a complex number, then, abs() returns its magnitude. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> bin() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> bin() function is used to return the binary representation of a specified integer. A result always starts with the prefix 0b. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> bool() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> bool() converts a value to boolean(True or False) using the standard truth testing procedure. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> bytes() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> bytes() in Python is used for returning a bytes object. It is an immutable version of the bytearray() function. It can create empty bytes object of the specified size. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> callable() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> callable() function in Python is something that can be called. This built-in function checks and returns true if the object passed appears to be callable, otherwise false. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> compile() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> compile() function takes source code as input and returns a code object which can later be executed by exec() function. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> exec() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> exec() function is used for the dynamic execution of Python program which can either be a string or object code and it accepts large blocks of code, unlike the eval() function which only accepts a single expression. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> sum() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> as the name says, python sum() function is used to get the sum of numbers of an iterable that is list. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> any() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> any() function returns true if any item in an iterable is true. Otherwise, it returns False. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ascii() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> ascii() function returns a string containing a printable representation of an object and escapes the non-ASCII characters in the string using \x, \u or \U escapes. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> bytearray() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> bytearray() returns a bytearray object and can convert objects into bytearray objects, or create an empty bytearray object of the specified size. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> eval() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> eval() function parses the expression passed to it and runs python expression(code) within the program. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> float() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> float() function returns a floating-point number from a number or string. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> format() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> format() function returns a formatted representation of the given value. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> frozenset() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> frozenset() function returns an immutable frozenset object initialized with elements from the given iterable. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> getattr() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> getattr() function returns the value of a named attribute of an object. If it is not found, it returns the default value. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> globals() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> globals() function returns the dictionary of the current global symbol table. A Symbol table is defined as a data structure which contains all the necessary information about the program. It includes variable names, methods, classes. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> hasattr() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> any() function returns true if any item in an iterable is true, otherwise it returns False. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> iter() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> iter() function is used to return an iterator object. It creates an object which can be iterated one element at a time. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> len() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> len() function is used to return the length (the number of items) of an object. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> list() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> list() creates a list in python. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> locals() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> locals() method updates and returns the dictionary of the current local symbol table. A Symbol table is defined as a data structure which contains all the necessary information about the program. It includes variable names, methods, classes </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> map() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> map() function is used to return a list of results after applying a given function to each item of an iterable. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> memoryview() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> memoryview() function returns a memoryview object of the given argument. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> object() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> object() returns an empty object. It is a base for all the classes and holds the built-in properties and methods which are default for all the classes. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> open() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> open() function opens the file and returns a corresponding file object. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> chr() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> chr() function is used to get a string representing a character which points to a Unicode code integer. For example, chr(97) returns the string 'a'. This function takes an integer argument and throws an error if it exceeds the specified range. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> complex() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> complex() function is used to convert numbers or string into a complex number. This method takes two optional parameters and returns a complex number. The first parameter is called a real and second as imaginary parts. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> delattr() Function in Python  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> delattr() function is used to delete an attribute from a class. It takes two parameters, first is an object of the class and second is an attribute which we want to delete. After deleting the attribute, it no longer available in the class and throws an error if try to call it using the class object. </p>
                </div>
            </div>
        </div>
		
				<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> dir() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> dir() function returns the list of names in the current local scope. If the object on which method is called has a method named __dir__(), this method will be called and must return the list of attributes. It takes a single object type argument. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  divmod() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> divmod() function is used to get remainder and quotient of two numbers. This function takes two numeric arguments and returns a tuple. Both arguments are required and numeric. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  enumerate() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> enumerate() function returns an enumerated object. It takes two parameters, first is a sequence of elements and the second is the start index of the sequence. We can get the elements in sequence either through a loop or next() method. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  dict() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> dict() function is a constructor which creates a dictionary. Python dictionary provides three different constructors to create a dictionary: If no argument is passed, it creates an empty dictionary. If a positional argument is given, a dictionary is created with the same key-value pairs. Otherwise, pass an iterable object. If keyword arguments are given, the keyword arguments and their values are added to the dictionary created from the positional argument. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  filter() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> filter() function is used to get filtered elements. This function takes two arguments, first is a function and the second is iterable. The filter function returns a sequence of those elements of iterable object for which function returns true value. The first argument can be none, if the function is not available and returns only elements that are true. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  hash() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> hash() function is used to get the hash value of an object. Python calculates the hash value by using the hash algorithm. The hash values are integers and used to compare dictionary keys during a dictionary lookup. We can hash only the types which are given below: Hashable types: * bool * int * long * float * string * Unicode * tuple * code object. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  help() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> help() function is used to get help related to the object passed during the call. It takes an optional parameter and returns help information. If no argument is given, it shows the Python help console. It internally calls python's help function. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  min() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> min() function is used to get the smallest element from the collection. This function takes two arguments, first is a collection of elements and second is key, and returns the smallest element from the collection. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  set() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> a set is a built-in class, and this function is a constructor of this class. It is used to create a new set using elements passed during the call. It takes an iterable object as an argument and returns a new set object. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  hex() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> hex() function is used to generate hex value of an integer argument. It takes an integer argument and returns an integer converted into a hexadecimal string. In case, we want to get a hexadecimal value of a float, then use float.hex() function. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  id() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> id() function returns the identity of an object. This is an integer which is guaranteed to be unique. This function takes an argument as an object and returns a unique integer number which represents identity. Two objects with non-overlapping lifetimes may have the same id() value. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  setattr() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> setattr() function is used to set a value to the object's attribute. It takes three arguments, i.e., an object, a string, and an arbitrary value, and returns none. It is helpful when we want to add a new attribute to an object and set a value to it. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  slice() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> slice() function is used to get a slice of elements from the collection of elements. Python provides two overloaded slice functions. The first function takes a single argument while the second function takes three arguments and returns a slice object. This slice object can be used to get a subsection of the collection. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  sorted() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> sorted() function is used to sort elements. By default, it sorts elements in an ascending order but can be sorted in descending also. It takes four arguments and returns a collection in sorted order. In the case of a dictionary, it sorts only keys, not values. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  next() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> next() function is used to fetch next item from the collection. It takes two arguments, i.e., an iterator and a default value, and returns an element. This method calls on iterator and throws an error if no item is present. To avoid the error, we can set a default value. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  input() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> input() function is used to get an input from the user. It prompts for the user input and reads a line. After reading data, it converts it into a string and returns it. It throws an error EOFError if EOF is read. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  int() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> int() function is used to get an integer value. It returns an expression converted into an integer number. If the argument is a floating-point, the conversion truncates the number. If the argument is outside the integer range, then it converts the number into a long type. If the number is not a number or if a base is given, the number must be a string. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  isinstance() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> isinstance() function is used to check whether the given object is an instance of that class. If the object belongs to the class, it returns true. Otherwise returns False. It also returns true if the class is a subclass. The isinstance() function takes two arguments, i.e., object and classinfo, and then it returns either True or False. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  oct() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> oct() function is used to get an octal value of an integer number. This method takes an argument and returns an integer converted into an octal string. It throws an error TypeError, if argument type is other than an integer. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  ord() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> ord() function returns an integer representing Unicode code point for the given Unicode character. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  pow() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> pow() function is used to compute the power of a number. It returns x to the power of y. If the third argument(z) is given, it returns x to the power of y modulus z, i.e. (x, y) % z. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  print() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> print() function prints the given object to the screen or other standard output devices. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  range() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> range() function returns an immutable sequence of numbers starting from 0 by default, increments by 1 (by default) and ends at a specified number. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  reversed() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> reversed() function returns the reversed iterator of the given sequence. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  round() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> round() function rounds off the digits of a number and returns the floating point number. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  issubclass() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> issubclass() function returns true if object argument(first argument) is a subclass of second class(second argument). </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> str() Function  Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> str() converts a specified value into a string. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  tuple() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> tuple() function is used to create a tuple object. </p>
                </div>
            </div>
        </div>


		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  type() Function  Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> type() returns the type of the specified object if a single argument is passed to the type() built in function. If three arguments are passed, then it returns a new type object. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  vars() function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> vars() function returns the __dict__ attribute of the given object. </p>
                </div>
            </div>
        </div>


		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  zip() Function Python </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> zip() Function returns a zip object, which maps a similar index of multiple containers. It takes iterables (can be zero or more), makes it an iterator that aggregates the elements based on iterables passed, and returns an iterator of tuples. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr>   
								<td> <a href="pyHome.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Python Home </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="pyVersions.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Versions <i class="fa fa-arrow-right ms-3"></i></a> 
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