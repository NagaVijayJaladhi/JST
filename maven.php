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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Maven </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Maven </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Maven </h4>
                    <p class="mb-4" align="justify"> Maven is a powerful build tool for Java software projects. Actually, you can build software projects using other languages too, but Maven is developed in Java, and is thus historically used more for Java projects. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Maven </h4>
					<p class="mb-4" align="justify"> Maven is a powerful project management and build automation tool in the software industry. developed by the Apache software foundation. It is primarily used for java based projects only now It can support other languages also for building the project. Maven tool provides a complete build life cycle to the development team to build a product following different build phases in the build process. Maven manages project build, dependencies, documentation, and other releases in a standard and consistent manner. Its primary goal is to simplify the build process by providing a uniform system that can manage project dependencies and deploy projects. </p>
					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2" align="justify"> <b> Project Management and Comprehension Tool </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Consistency </td> <td align="justify"> Standardizes project structures and conventions. </td> </tr>
							<tr> <td align="justify"> 2. Documentation </td> <td align="justify"> Automatically generates project documentation. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Dependency Management </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Centralized Repository </td> <td align="justify"> Manages and downloads project dependencies from a central repository. </td> </tr>
							<tr> <td align="justify"> 2. Transitive Dependencies </td> <td align="justify"> Automatically includes dependencies of dependencies. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Build Automation </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Life cycle Management </td> <td align="justify"> Defines a set of build phases (e.g., compile, test, package).</td> </tr>
							<tr> <td align="justify"> 2. Plugins </td> <td align="justify"> Extensible through a wide range of plugins for different build tasks. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Reproducible Builds </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Project Object Model (POM) </td> <td align="justify"> Uses a POM file to define project configurations, ensuring reproducible builds. </td> </tr>
							<tr> <td align="justify"> 2. Profiles </td> <td align="justify"> Supports build profiles for different environments (e.g., development, testing, production). </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Integration with Development Tools </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. IDE Integration </td> <td align="justify"> Supports integration with popular IDEs like Eclipse, IntelliJ IDEA, and NetBeans. </td> </tr>
							<tr> <td align="justify"> 2. Continuous Integration </td> <td align="justify"> Easily integrates with CI tools like Jenkins, Bamboo, and Travis CI. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col" colspan="2"> <b> Version Control </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1. Versioning </td> <td align="justify"> Manages project versions and facilitates continuous delivery. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Maven Build Phases </h4>
                    <p class="mb-4" align="justify"> Maven build phases are a sequence of steps or stages that Maven follows when executing a build lifecycle. These build phases are standardized and define the order in which Maven executes various goals. Each build phase represents a different stage in the lifecycle of a project. </p>
					<table class="table table-bordered">
						<tbody>
							<tr> <td align="justify"> Validate </td> <td align="justify"> This step validates if the project structure is correct. For example – It checks if all the dependencies have been downloaded and are available in the local repository. </td> </tr>
							<tr> <td align="justify"> Compile </td> <td align="justify"> It compiles the source code, converts the .java files to .class, and stores the classes in the target/classes folder. </td> </tr>
							<tr> <td align="justify"> Test </td> <td align="justify"> It runs unit tests for the project. </td> </tr>
							<tr> <td align="justify"> Package </td> <td align="justify"> This step packages the compiled code in a distributable format like JAR or WAR. </td> </tr>
							<tr> <td align="justify"> Integration Test </td> <td align="justify"> It runs the integration tests for the project. </td> </tr>
							<tr> <td align="justify"> Verify </td> <td align="justify"> This step runs checks to verify that the project is valid and meets the quality standards. </td> </tr>
							<tr> <td align="justify"> Install </td> <td align="justify"> This step installs the packaged code to the local Maven repository. </td> </tr>
							<tr> <td align="justify"> Deploy </td> <td align="justify"> It copies the packaged code to the remote repository for sharing it with other developers. </td> </tr>
						</tbody> 
					</table>
						
					</ol>
                </div>
            </div>
        </div>
               
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Common Maven Commands </h4>
                    <p class="mb-4" align="justify"> Maven provides various commands to manage the project life cycle. Some of the common commands include : </p>
					<table class="table table-bordered">
						<tbody>
							<tr> <td align="justify"> mvn clean </td> <td align="justify"> It cleans the project by removing its target directory. </td> </tr>
							<tr> <td align="justify"> mvn compile </td> <td align="justify"> It compiles the source code. </td> </tr>
							<tr> <td align="justify"> mvn test-compile </td> <td align="justify"> It compiles the test source code. </td> </tr>
							<tr> <td align="justify"> mvn test </td> <td align="justify"> It runs the tests. </td> </tr>
							<tr> <td align="justify"> mvn package </td> <td align="justify"> It packages the compiled code into a JAR file. </td> </tr>
							<tr> <td align="justify"> mvn install </td> <td align="justify"> It installs the package into the local repository. </td> </tr>
							<tr> <td align="justify"> mvn site </td> <td align="justify"> Generate the project documentation. </td> </tr>
							<tr> <td align="justify"> mvn validate </td> <td align="justify"> Validate the project’s POM and configuration. </td> </tr>
							<tr> <td align="justify"> mvn idea:idea </td> <td align="justify"> Generate project files for IntelliJ IDEA or Eclipse. </td> </tr>
							<tr> <td align="justify"> mvn release:perform </td> <td align="justify"> Performs a release build. </td> </tr>
							<tr> <td align="justify"> mvn deploy </td> <td align="justify"> Copies the packaged JAR/ WAR file to the remote repository after compiling, running tests and building the project. </td> </tr>
							<tr> <td align="justify"> mvn archetype:generate </td> <td align="justify"> This command is used to generate a new project from an archetype, which is a template for a project. <br/> This command is typically used to create new projects based on a specific pattern or structure. </td> </tr>
							<tr> <td align="justify"> mvn dependency:tree </td> <td align="justify"> This command is used to display the dependencies of the project in a tree format. <br/> This command is typically used to understand the dependencies of the project and troubleshoot any issues. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Elements in pom.xml File </h4>
                    <p class="mb-4" align="justify"> Maven provides various commands to manage the project life cycle. Some of the common commands include : </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Element </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> project </td> <td align="justify"> It is the root element of pom.xml file. </td> </tr>
							<tr> <td align="justify"> modelVersion </td> <td align="justify"> It is the sub element of project. It specifies the modelVersion. It should be set to 4.0.0. </td> </tr>
							<tr> <td align="justify"> groupId </td> <td align="justify"> 	It is the sub element of project. It specifies the id for the project group. </td> </tr>
							<tr> <td align="justify"> artifactId </td> <td align="justify"> It is the sub element of project. It specifies the id for the artifact (project). An artifact is something that is either produced or used by a project.  </td> </tr>
							<tr> <td align="justify"> version </td> <td align="justify"> It is the sub element of project. It specifies the version of the artifact under given group. </td> </tr>
							<tr> <td align="justify"> packaging </td> <td align="justify"> defines packaging type such as jar, war etc. </td> </tr>
							<tr> <td align="justify"> name </td> <td align="justify"> defines name of the maven project. </td> </tr>
							<tr> <td align="justify"> url </td> <td align="justify"> defines url of the project. </td> </tr>
							<tr> <td align="justify"> dependencies </td> <td align="justify"> defines dependencies for this project. </td> </tr>
							<tr> <td align="justify"> dependency </td> <td align="justify"> defines a dependency. It is used inside dependencies. </td> </tr>
							<tr> <td align="justify"> scope </td> <td align="justify"> defines scope for this maven project. It can be compile, provided, runtime, test and system. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Difference between Ant and Maven </h4>
					<p class="mb-4" align="justify"> Ant and Maven both are build tools provided by Apache. The main purpose of these technologies is to ease the build process of a project. </p>
					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Ant </b> </th> <th scope="col" colspan="2"> <b> Maven </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> There is no life cycle in Ant. </td> <td align="justify"> There is life cycle in Maven. </td> </tr>
							<tr> <td align="justify"> It is a tool box. </td> <td align="justify"> It is a framework. </td> </tr>
							<tr> <td align="justify"> It is mainly a build tool. </td> <td align="justify"> It is mainly a project management tool. </td> </tr>
							<tr> <td align="justify"> The ant scripts are not reusable. </td> <td align="justify"> The maven plugins are reusable. </td> </tr>
							<tr> <td align="justify"> It is less preferred than Maven. </td> <td align="justify"> It is more preferred than Ant. </td> </tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Difference between Gradle and Maven </h4>					
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Parameters </b> </th> <th scope="col"> <b> Gradle </b> </th> <th scope="col" colspan="2"> <b> Maven </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Based on </td> <td align="justify"> Gradle is based on developing domain-specific language projects. </td> <td align="justify"> Maven is based on developing pure Java language-based software. </td> </tr>
							<tr> <td align="justify"> Configuration </td> <td align="justify"> It uses a Groovy-based Domain-specific language (DSL) for creating project structure. </td> <td align="justify"> It uses Extensible Markup Language (XML) for creating project structure. </td> </tr>
							<tr> <td align="justify"> Focuses on </td> <td align="justify"> Developing applications by adding new features to them. </td> <td align="justify"> Developing applications in a given time limit. </td> </tr>
							<tr> <td align="justify"> Performance </td> <td align="justify"> It performs better than maven as it optimized for tracking only current running task. </td> <td align="justify"> It does not create local temporary files during software creation and is hence - slower. </td> </tr>
							<tr> <td align="justify"> Java Compilation </td> <td align="justify"> It avoids compilation. </td> <td align="justify"> It is necessary to compile. </td> </tr>
							<tr> <td align="justify"> Usability </td> <td align="justify"> It is a new tool, which requires users to spend a lot of time to get used to it. </td> <td align="justify"> This tool is a known tool for many users and is easily available. </td> </tr>	
							<tr> <td align="justify"> Customization </td> <td align="justify"> This tool is highly customizable as it supports a variety of IDE. </td> <td align="justify"> This tool serves a limited number of developers and is not that customizable. </td> </tr>
							<tr> <td align="justify"> Languages Supported </td> <td align="justify"> It supports software development in Java, C, C++, and Groovy. </td> <td align="justify"> It supports software development in Java, Scala, C#, and Ruby. </td> </tr>
							<tr> <td align="justify"> Project Configuration </td> <td align="justify"> For declaring the project configuration, it does not use the XML files. </td> <td align="justify"> For declaring the project configuration, it uses the XML files. </td> </tr>
							<tr> <td align="justify"> Goal </td> <td align="justify"> To add functionality in the project is the main goal of the Gradle. </td> <td align="justify"> To finish the project in the given timeline is the main goal of the Maven. </td> </tr>
							
						</tbody>
					</table>
                </div>
            </div>
        </div>
		
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Maven Plugins </h4>
                    <p class="mb-4" align="justify"> The maven plugins are central part of maven framework, it is used to perform specific goal. According to Apache Maven, there are 2 types of maven plugins. </p>
                    <p class="mb-4" align="justify"> 1. Build Plugins : These plugins are executed at the time of build. These plugins should be declared inside the &lt;build&gt; element. </p>
                    <p class="mb-4" align="justify"> 2. Reporting Plugins : These plugins are executed at the time of site generation. These plugins should be declared inside the &lt;reporting&gt; element.  </p>
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