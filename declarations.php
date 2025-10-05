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
                        <li class="breadcrumb-item"><a href="#">J2SE</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Declarations </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Declarations </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Refresher </h4>
                    <p class="mb-4" align="justify"> <b class="text-success"> Definition : </b> A Java program is mostly a collection of objects talking to other objects by invoking each other's methods. Every object is of a certain type, and that type is defined by a class or an interface. Most Java programs use a collection of objects of many different types.</p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java and Sun Full Form :  </h4>
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr> <td> <b> J </b> </td> <td> - </td> <td> James Gosling </td> <td> <b> J </b> </td> <td> - </td> <td> Just </td> <td> <b> S </b> </td> <td> - </td> <td> Stanford </td> </tr>
                            <tr> <td> <b> A </b> </td> <td> - </td> <td> Arthur </td> <td> <b> A </b> </td> <td> - </td> <td> Another </td> <td> <b> U </b> </td> <td> - </td> <td> University </td> </tr>
                            <tr> <td> <b> V </b> </td> <td> - </td> <td> Van Hoff and </td> <td> <b> V </b> </td> <td> - </td> <td> Virtual and </td> <td> <b> N </b> </td> <td> - </td> <td> Network </td> </tr> 
                            <tr> <td> <b> A </b> </td> <td> - </td> <td> Andy Bechtolsheim </td> <td> <b> A </b> </td> <td> - </td> <td> Architecture </td> </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Runtime Environment (JRE) </h4>
					<p class="mb-2" align="justify"> 1. Java Runtime Environment (JRE) is included in JDK. It is one of the main parts of a JDK to run java application. It is a minimum requirement to run any Java application. </p>
					<p class="mb-2" align="justify"> 2. Java Runtime Environment (JRE) consists of Java Virtual Machine (JVM), various core classes, libraries and various other components to run Java programs and applets. </p>
				    <p class="mb-2" align="justify"> 3. Java Runtime Environment (JRE) plug-in is installed in every browser to run java applets and to deploy Java Web Start. Java Web Start is used to deploy individual application over the network. </p>
					<p class="mb-2" align="justify"> 4. Java Runtime Environment (JRE) is a sub-set of JDK and it is can also be downloaded separately. Java Runtime Environment (JRE) is required on all operating systems to run java applications. </p>
					<p class="mb-2" align="justify"> 5. Java Runtime Environment (JRE) is also present on mobile devices which are capable of running Java applications. </p>
					<p class="mb-2" align="justify"> 6. Java Runtime Environment is the very basic requirement to run java programs. It loads and runs java applications with the use of JVM. </p>
					<p class="mb-2" align="justify"> 7. When a java file is complied it generates a byte code file i.e. “.class” file. The byte code file is platform independent but the Java Runtime Environment is platform dependent. </p>
					<p class="mb-2" align="justify"> 8. It means if you need to run java programs on Linux, you need a JRE for Linux. JRE is present for most of the operating system. </p>
					<p class="mb-2" align="justify"> 9. Hence java programs are platform independent but Java Runtime Environment is platform dependent means different platform have different JRE. </p>
                </div>
            </div>
        </div>

        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Java Virtual Machine (JVM) </h4>
                    <p class="mb-2" align="justify"> 1. Java Virtual Machine also known as JVM is a virtual machine that is included in Java Runtime Environment to run java applications. </p>
					<p class="mb-2" align="justify"> 2. JVM can also be called as the heart of Java platform. If you have JRE installed on your computer or any device it means you have JVM installed in it. </p>
					<p class="mb-2" align="justify"> 3. JVM is acts like a virtual environment to run platform independent java byte codes. </p>
					<p class="mb-2" align="justify"> 4. Byte codes are the files with “.class” extension that are generated after compilation of java file. </p>
					<p class="mb-2" align="justify"> 5. Byte codes are the intermediate code between java and machine language. JVM provides across platform functionality to java applications. </p>
					<p class="mb-2" align="justify"> 6. Most programming languages like C compiled the programs according to the operating system and processor architecture; it means they cannot run on machines having different processor architecture. </p>
					<p class="mb-2" align="justify"> 7. The JVM is a machine within original machine that acts as intermediate between the application and the original machine. </p>
					<p class="mb-2" align="justify"> 8. The JVM converts the byte code files according to the original machine requirement. </p>
					<p class="mb-2" align="justify"> 9. Hence java applications are platform independent as the JVM take care of all the platform dependencies. </p>
					<p class="mb-2" align="justify"> 10. JVM also runs the “.jar” files that are Java Archive files. Java API is also bundled with JVM in Java Runtime Environment. </p>
					<p class="mb-2" align="justify"> 11. The JVM is responsible for “write once run anywhere” (WORA) nature of java programs. </p>
					<p class="mb-2" align="justify"> 12. JVM also have lots of other feature like automated exception handling, memory management, garbage collection. </p>
                </div>
            </div>
        </div>

        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">  Source File Declaration </h4>
                    <p class="mb-2" align="justify"> 1. There can be only one public class per source code file. </p>
					<p class="mb-2" align="justify"> 2. Comments can appear at the beginning or end of any line in the source code file. </p>
					<p class="mb-2" align="justify"> 3. They are independent of any of the positioning rules discussed here. </p>
					<p class="mb-2" align="justify"> 4. If there is a public class in a file, the name of the file must match the name of the public class. </p>
					<p class="mb-2" align="justify"> 5. For example, a class declared as public class Dog { } must be in a source code file named Dog.java. </p>
					<p class="mb-2" align="justify"> 6. If the class is part of a package, the package statement must be the first line in the source code file, before any import statements that may be present. </p>
					<p class="mb-2" align="justify"> 7. If there are import statements, they must go between the package statement and the class declaration. </p>
					<p class="mb-2" align="justify"> 8. If there isn't a package statement, then the import statement(s) must be the first line(s) in the source code file. </p>
					<p class="mb-2" align="justify"> 9. If there are no package or import statements, the class declaration must be the first line in the source code file. </p>
					<p class="mb-2" align="justify"> 10. import and package statements apply to all classes within a source code file. </p>
					<p class="mb-2" align="justify"> 11. In other words, there's no way to declare multiple classes in a file and have them in different packages, or use different imports. </p>
					<p class="mb-2" align="justify"> 12. A file can have more than one nonpublic class. Files with no public classes can have a name that does not match any of the classes in the file. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Legal Identifiers </h4>
					<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> Legal identifiers must be composed of only Unicode characters, numbers, currency symbols, and connecting characters (like underscores). </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
                    <p class="mb-2" align="justify"> 1. Identifiers must start with a letter, a currency character ($), or a connecting character such as the underscore ( _ ). </p>
					<p class="mb-2" align="justify"> 2. Identifiers cannot start with a number! </p>
					<p class="mb-2" align="justify"> 3. After the first character, identifiers can contain any combination of letters, currency characters, connecting characters, or numbers. </p>
					<p class="mb-2" align="justify"> 4. In practice, there is no limit to the number of characters an identifier can contain. </p>
					<p class="mb-2" align="justify"> 5. You can't use a Java keyword as an identifier. </p>
					<p class="mb-2" align="justify"> 6. Identifiers in Java are case-sensitive; foo and FOO are two different identifiers. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
				<h4 class="mb-3" align="left"> Class Declaration </h4>
				<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> The first letter should be capitalized, and if several words are linked together to form the name, the first letter of the inner words should be uppercase. For classes, the names should typically be nouns. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> For Examples : </b> Dog, Account, and PrintWriter </p>
               </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
				<h4 class="mb-3" align="left"> Interface Declaration </h4>
				<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> The first letter should be capitalized, and if several words are linked together to form the name, the first letter of the inner words should be uppercase. For interface, the names should typically be nouns. For interfaces, the names should typically be adjectives. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> For Examples : </b> Runnable, Serializable </p>
               </div>
            </div>
        </div>		

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
				<h4 class="mb-3" align="left"> Method Declaration </h4>
				<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> The first letter should be lowercase, and then normal camelCase rules should be used. In addition, the names should typically be verb-noun pairs. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> For Examples : </b> getBalance, doCalculation, setCustomerName, addDetails. </p>
               </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
				<h4 class="mb-3" align="left"> Variable Declaration </h4>
				<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> Like methods, the camelCase format should be used, starting with a lowercase letter. Sun recommends short, meaningful names, which sounds good to us. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> For Examples : </b> buttonWidth, accountBalance, myString, goodWell. </p>
               </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
				<h4 class="mb-3" align="left"> Constants Declaration </h4>
				<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> Java constants are created by marking variables static and final. They should be named using uppercase letters with underscore characters as separators. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> For Examples : </b> MIN_HEIGHT, MAX_HEIGHT, MIN_WIDTH, MAX_WIDTH. </p>
               </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Bean </h4>
					<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> Java Beans are simple Java classes that follow certain specifications to develop dynamic content. Java Beans are reusable components that separate the business logic from the presentation logic. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Rules : </b> </p>
                    <p class="mb-2" align="justify"> 1. Class must be public. </p>
					<p class="mb-2" align="justify"> 2. Properties (variables) must be private. The setter method’s prefix must be set. </p>
					<p class="mb-2" align="justify"> 3. Class must have a public default constructor. </p>
					<p class="mb-2" align="justify"> 4. Each private property should have one public setter and getter methods. </p>
					<p class="mb-2" align="justify"> 5. Class has to implement serializable interface. </p>
					<p class="mb-2" align="justify"> 6. If the property is not a boolean. The getter method’s prefix must be get. </p>
					<p class="mb-2" align="justify"> 7. If the property is a boolean, the getter method’s prefix is either get (or) is. </p>
					<p class="mb-2" align="justify"> 8. Setter method signatures must be marked public, with a void return type and an argument that represents the property type. </p>
					<p class="mb-2" align="justify"> 9. To complete the name of a getter (or) setter method, change the first letter of the property name to uppercase and then append it to the appropriate prefix. </p>
					<p class="mb-2" align="justify"> 10. Getter method signatures must be marked public, take no arguments, and have a return type that matches the argument type of the setter method for that property. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Here is a list of other Escape Sequences in Java </h4>
					<p class="mb-2" align="justify"> <b class="text-success"> Definition : </b> Java Beans are simple Java classes that follow certain specifications to develop dynamic content. Java Beans are reusable components that separate the business logic from the presentation logic. </p>
                    <p class="mb-2" align="justify"> 1. <b> \t - </b> Insert a tab in the text at this point. </p>
					<p class="mb-2" align="justify"> 2. <b> \b - </b> Insert a backspace in the text at this point.
					<p class="mb-2" align="justify"> 3. <b> \n - </b> Insert a newline in the text at this point.
					<p class="mb-2" align="justify"> 4. <b> \r - </b> Insert a carriage return in the text at this point.
					<p class="mb-2" align="justify"> 5. <b> \f - </b> Insert a form feed in the text at this point.
					<p class="mb-2" align="justify"> 6. <b> \' - </b> Insert a single quote character in the text at this point.
					<p class="mb-2" align="justify"> 7. <b> \" - </b> Insert a double quote character in the text at this point.
					<p class="mb-2" align="justify"> 8. <b> \\ - </b> Insert a backslash character in the text at this point.
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr>   
								<td> <a href="javaHistory.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Java History </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="versions.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
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