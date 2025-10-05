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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Design Pattern </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Design Patterns </h1>
                    <p class="mb-4" align="justify"> Design patterns in Java refer to structured approaches involving objects and classes that aim to solve recurring design issues within specific contexts. These patterns offer reusable, general solutions to common problems encountered in software development, representing established best practices. By utilizing design patterns, developers can communicate more effectively about their approaches to problem-solving, fostering collaboration and consistency in their code. </p>
					
					<p class="mb-4" align="justify"> A design pattern is a reusable solution for common problems in software design used in engineering. It is not a full design ready for coding but rather a guideline or model for solving issues. Design patterns can be adapted to different situations and contexts, providing flexibility in problem-solving. </p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> When to Use Design Patterns in Java </h4>
                    <p class="mb-4" align="justify"> 1. Use design patterns for common design problems with established solutions, providing proven strategies for software challenges. </p>
                    <p class="mb-4" align="justify"> 2. Enhance code reusability, flexibility, and maintainability, making modifications easier as requirements evolve. </p>
                    <p class="mb-4" align="justify"> 3. Support key principles like separation of concerns, encapsulation, and dependency inversion, leading to better modularity and reduced dependencies. </p>
                    <p class="mb-4" align="justify"> 4. Improve team communication by offering a shared vocabulary for problem-solving, facilitating collaboration and understanding. </p>
                    <p class="mb-4" align="justify"> 5. Optimize performance by enhancing resource usage, lowering overhead, and boosting execution efficiency. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> When not to Use Design Patterns in Java </h4>
                    <p class="mb-4" align="justify"> 1. Avoid using design patterns unnecessarily for simple problems, as this can complicate the code and make it harder to maintain. </p>
                    <p class="mb-4" align="justify"> 2.Don't implement design patterns just for optimization before identifying actual performance issues; premature optimization can add complexity without real benefits. </p>
                    <p class="mb-4" align="justify"> 3. Refrain from using design patterns if you or your team aren't familiar with them, as misuse can lead to design flaws. </p>
                    <p class="mb-4" align="justify"> 4. Consider project constraints like time, budget, and team skills; if a design pattern complicates development significantly, it may not be suitable. </p>
                    <p class="mb-4" align="justify"> 5. Be cautious applying design patterns in dynamic environments where requirements change frequently, as rigid designs may struggle to adapt. </p>
                </div>
            </div>
        </div>
		
         <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Design Patterns in Java </h4>
                    <p class="mb-4" align="justify"> 1. Creational Design Patterns : Creational design patterns are a category of design patterns in software development that focus on the process of creating objects. They aim to enhance flexibility and efficiency in object creation, allowing systems to remain independent of how their objects are constructed, composed, and represented. This approach helps streamline the instantiation process and can lead to more maintainable and adaptable code </p>
                    <p class="mb-4" align="justify"> 2. Structural Design Patterns : Structural design patterns focus on how classes and objects are arranged to create larger, more complex structures in software development. They help organize relationships between objects, making systems more flexible, reusable, and maintainable. By using these patterns, developers can create easier-to-understand and modify systems. </p>
                    <p class="mb-4" align="justify"> 3. Behavioral Design Patterns : Behavioral design patterns are a group of design patterns that focus on how objects and classes interact and communicate in software development. They emphasize the collaboration between objects to effectively accomplish tasks and responsibilities, making the system more manageable and adaptable </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Singleton Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Singleton class means that any given time only one instance of the class is present in one JVM. </p>
                    <p class="mb-4" align="justify"> <b> Real Time Example : </b> Present of a Country </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Doubleton Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Doubleton class means that any given time only two instance of the class is present in one JVM. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Tripleton Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Tripleton class means that any given time only three instance of the class is present in one JVM. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Factory Method Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Factory Method Design Pattern is typically helpful when it's necessary to separate the construction of an object from its implementation. With the use of this design pattern, objects can be produced without having to define the exact class of object to be created. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Abstract Factory Method Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Abstract Factory pattern is almost similar to Factory Pattern and is considered as another layer of abstraction over factory pattern. Abstract Factory patterns work around a super-factory which creates other factories. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Prototype Method Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Prototype allows us to hide the complexity of making new instances from the client. The concept is to copy an existing object rather than creating a new instance from scratch, something that may include costly operations. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Builder Method Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> To Separate the construction of a complex object from its representation so that the same construction process can create different representations. Builder pattern is used It helps in constructing a complex object step by step and the final step will return the object. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Adapter Method Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> The adapter pattern convert the interface of a class into another interface clients expect.Adapter lets classes work together that couldn’t otherwise because of incompatible interfaces. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Bridge Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> The bridge pattern allows the Abstraction and the Implementation to be developed independently. The client code can access only the Abstraction part without being concerned about the Implementation part. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Composite Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> As a partitioning design pattern, the composite pattern characterizes a collection of items that are handled the same way as a single instance of the same type of object. The intent of a composite is to “compose” objects into tree structures to represent part-whole hierarchies.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Decorator Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> It allows us to dynamically add functionality and behavior to an object without affecting the behavior of other existing objects within the same class. We use inheritance to extend the behavior of the class. This takes place at compile-time, and all the instances of that class get the extended behavior.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Facade Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> Facade Method Design Pattern provides a unified interface to a set of interfaces in a subsystem. Facade defines a high-level interface that makes the subsystem easier to use.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Flyweight Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> This pattern provides ways to decrease object count thus improving application required objects structure. Flyweight pattern is used when we need to create a large number of similar objects.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Proxy Method Design Pattern</h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> Proxy means ‘in place of’, representing’ or ‘in place of’ or ‘on behalf of’ are literal meanings of proxy and that directly explains Proxy Design Pattern. Proxies are also called surrogates, handles, and wrappers. They are closely related in structure, but not purpose, to Adapters and Decorators.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Chain Of Responsibility Method Design Pattern</h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> Chain of responsibility pattern is used to achieve loose coupling in software design where a request from the client is passed to a chain of objects to process them. Later, the object in the chain will decide themselves who will be processing the request and whether the request is required to be sent to the next object in the chain or not.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Command Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> A behavioral design pattern called the Command Pattern transforms a request into an independent object with all of the information's request. This object can be passed around, stored, and executed at a later time.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Interpreter Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> Interpreter pattern is used to defines a grammatical representation for a language and provides an interpreter to deal with this grammar. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Mediator Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> It enables decoupling of objects by introducing a layer in between so that the interaction between objects happen via the layer.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Memento Method Design Patterns </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> It is used to return an object's state to its initial state. You might wish to create checkpoints in your application and return to them at a later time when it develops.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Observer Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> It establishes a one-to-many dependency between objects, meaning that all of the dependents (observers) of the subject are immediately updated and notified when the subject changes.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> State Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> When an object modifies its behavior according to its internal state, the state design pattern is applied. If we have to change the behavior of an object based on its state, we can have a state variable in the Object and use the if-else condition block to perform different actions based on the state.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Strategy Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> It is possible to select an object's behavior at runtime by utilizing the Strategy Design Pattern. Encapsulating a family of algorithms into distinct classes that each implement a common interface is the foundation of the Strategy pattern.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Template Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> The template method design pattern defines an algorithm as a collection of skeleton operations, with the child classes handling the implementation of the specifics. The parent class maintains the overall structure and flow of the algorithm.</p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Visitor Method Design Pattern </h4>
					<p class="mb-4" align="justify"> <b> Definition : </b> It is used when we have to perform an operation on a group of similar kind of Objects. With the help of visitor pattern, we can move the operational logic from the objects to another class.</p>
                </div>
            </div>
        </div>

		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Data Transfer Object (DTO) Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> The Data Transfer Object (DTO) pattern is used to transfer data between software application subsystems or layers, particularly in the context of network calls or database retrieval in Java applications. It reduces the number of method calls by aggregating the data in a single transfer. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Data Access Object (DAO) Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> The Data Access Object (DAO) design pattern aims to separate the application's business logic from the persistence layer, typically a database or any other storage mechanism. By using DAOs, the application can access and manipulate data without being dependent on the specific database implementation details. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Model View Controller Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Model View Controller to separate an application into three interconnected components (Model, View, Controller), enabling modular development of each part independently, which enhances maintainability and scalability. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Null Object Design Pattern </h4>
                    <p class="mb-4" align="justify"> <b> Definition : </b> Null Object to provide a default behavior for an object, avoiding the need for null checks and enhancing code readability. </p>
                </div>
            </div>
        </div>
		
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Different between Singleton Class and Static Members </h4>
                    <p class="mb-4" align="justify"> 1. Singleton is an object whereas static is not an object. </p>
                    <p class="mb-4" align="justify"> 2. Singleton can be extended/sub-classed whereas static cannot be extended/sub classed. </p>
                    <p class="mb-4" align="justify"> 3. Singleton can be passed around as an object whereas static cannot be passed around as an object. </p>
                    <p class="mb-4" align="justify"> 4. Singleton can be garbage collected whereas static cannot be garbage collected. </p>
                    <p class="mb-4" align="justify"> 5. Static provides better performance than singleton class. </p>
                    <p class="mb-4" align="justify"> 6. Static methods are bounded on compiler time whereas singleton class are bounded on runtime. </p>
                    <p class="mb-4" align="justify"> 7. Static method can not be overridden by extending. </p>
                    <p class="mb-4" align="justify"> 8. Singleton class is a design pattern whereas static is a keyword. </p>
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