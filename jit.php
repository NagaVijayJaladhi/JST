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
                        <li class="breadcrumb-item text-white active" aria-current="page"> JIT Compilation </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Just-In-Time (JIT) Compilation </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> JIT Overview </h4>
                    <p class="mb-4" align="justify"> In programming, the challenge lies in translating our elegant, human-readable high-level code into the computer’s strict binary language of ones and zeros. While high-level code allows us to express complex ideas, computers require binary code to execute. Compilers bridge this gap. Compilers act as language translators for computers. They take high-level code in languages like Java, C++, or Python and convert it into machine-level code. Compilers not only translate but also check for errors, optimize code, and create executable files. </p>
                    <p class="mb-4" align="justify"> javac is a well-known Java compiler that turns Java code into bytecode. The ‘javac’ compiler serves as Java’s gatekeeper. It compiles your .java files into bytecode, a platform-independent representation of your code. This bytecode can run on any system with a Java Virtual Machine (JVM). Beyond translation, ‘javac’ enforces Java’s rules and checks for errors, ensuring code quality. </p>
                    <p class="mb-4" align="justify"> JIT (Just-In-Time) compilation is a game-changer in Java. While ‘javac’ compiles code into bytecode, the real magic happens when Java apps run, thanks to JIT. JIT is an integral part of the Java Virtual Machine (JVM). It dynamically optimizes Java app performance during runtime. JIT operates like dynamic compilation, focusing on actively used code paths and generating native machine code to boost speed. JIT ensures that Java apps run efficiently, adapting to their context. It’s a core element of Java’s success, delivering high performance while remaining platform-independent. Java apps aren’t just robust; they’re also exceptionally fast, thanks to JIT’s optimizations. </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Just-In-Time (JIT) Compilation </h4>
                    <p class="mb-4" align="justify"> Just-In-Time (JIT) compilation is a critical component of Java’s execution model. It is a process that dynamically optimizes the performance of a Java application during runtime. In simpler terms, JIT compilation involves translating Java bytecode into native machine code on-the-fly, just in time for execution. Unlike AOT (Ahead Of Time) which compiles code before the program starts, offering fast loop execution but slower startup, JIT translates code on-the-fly as the program runs, providing faster startups and adapting to active code paths. This dynamic approach generates optimized native code for the actual execution context. The JVM runs Java apps and collaborates with JIT. During execution, the JVM communicates with the JIT compiler. JIT identifies frequently used code paths and translates bytecode into efficient native code, speeding up execution. The JVM and JIT together ensure Java apps run smoothly and perform well. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
				<h4 class="mb-3" align="left"> How JIT Works </h4>
				<p class="mb-2" align="justify"> The Just-In-Time (JIT) compiler is a vital component of the Java Runtime Environment (JRE) that significantly enhances the performance of Java applications during runtime. Understanding how JIT works provides insight into Java’s speed and efficiency. Here’s a step-by-step breakdown: </p>
				<p class="mb-2" align="justify"> <b class="text-success"> Step 1 — Java Source to Bytecode : </b> It all begins with your Java source code. As a developer, you craft this code meticulously. But before it can run, it needs to be transformed. Enter the Java compiler, often referred to as ‘javac,’ which compiles your code into bytecode. This bytecode is a platform-neutral version of your source code. It’s like creating a universal recipe for your program. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> Step 2 — Loading and Interpretation : </b> When you hit the “run” button on your Java application, the Java Virtual Machine (JVM) takes the stage. It loads the compiled classes and methods, ready for execution. Initially, the JVM interprets the bytecode. Think of it as reading that universal recipe, step by step. It works, but sometimes, it can be a bit slow, especially for frequently used parts of your code. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> Step 3 — JIT Compilation Activation : </b> Here’s where the real magic starts. When your application calls a method, the JVM identifies commonly used methods and marks them as “hot” code paths. JIT activation kicks in for these “hot” methods. This is dynamic compilation, happening in real-time as your program runs. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> Step 4 — JIT Compilation : </b> The JIT compiler, always ready in the background, springs into action. It takes the bytecode of “hot” methods and transforms it into efficient native machine code. This native code is tailor-made for the specific context of execution, and it’s highly optimized and blazing fast. It’s like having a chef who knows your favorite dish by heart and cooks it perfectly every time. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> Step 5 — Optimized Execution : </b> With the new native code in place, the JVM no longer needs to interpret the bytecode. Instead, it directly runs the highly optimized native code of the “hot” methods. It’s a bit like skipping the translation step and speaking the language fluently. This optimized execution is significantly faster, thanks to the efficiency of native machine code. JIT compilers can perform various optimizations, like simplifying expressions, reducing memory access, and using efficient register operations instead of more complex stack operations. </p>
				<p class="mb-2" align="justify"> <b class="text-success"> Step 6 — Performance Enhancement : </b> The end result is a significant performance boost for your Java application. While JIT compilation does consume some processor time and memory, this investment pays off as your application executes more efficiently. However, during the initial moments when the JVM starts, and many methods are invoked, there might be a short startup delay due to JIT compilation. </p>
                <p class="mb-2" align="justify"> In a nutshell, JIT compilation dynamically converts “hot” code paths from bytecode into highly efficient native machine code while your Java application is running. This optimization ensures that Java programs run smoothly and efficiently, making JIT a cornerstone of Java’s success in delivering high performance and platform independence. The next time you marvel at the speed and responsiveness of a Java application, remember the behind-the-scenes hero — the JIT compiler, working tirelessly to make your Java experience exceptional. </p>
               </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Optimizations by JIT Compilers </h4>
                    <p class="mb-2" align="justify"> The real power of JIT compilation lies in the optimizations it applies to the code. Let’s delve into the phases of JIT compilation: </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Phase 1 — Inlining : </b> Java Beans are simple Java classes that follow certain specifications to develop dynamic content. Java Beans are reusable components that separate the business logic from the presentation logic. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Phase 2 — Local Optimizations : </b> Local optimizations enhance small sections of code at a time, utilizing techniques like local data flow analyses, register usage optimization, and simplifications of Java idioms. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Phase 3 — Control Flow Optimizations : </b> Control flow optimizations analyze and rearrange code paths to improve efficiency. These include code reordering, loop-related enhancements (reduction, inversion, unrolling), and smarter exception handling. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Phase 4 — Global Optimizations : </b> Global optimizations work on the entire method, requiring more compilation time but offering a significant performance boost. They involve global data flow analyses, partial redundancy elimination, escape analysis, and optimizations related to garbage collection and memory allocation. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> Phase 5 — Native Code Generation : </b> In the final phase, trees are translated into machine code instructions, and some platform-specific optimizations are applied. The compiled code is stored in the JVM’s code cache, ready for future use, ensuring faster execution. </p>
                    <p class="mb-2" align="justify"> We can say that JIT compilation is like a magic transformation that turns regular Java code into super-efficient, lightning-fast machine code. It’s the secret sauce that makes your Java apps run really, really quickly! </p>
                </div>
            </div>
        </div>

        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of JIT Compiler </h4>
                    <p class="mb-2" align="justify"> The real power of JIT compilation lies in the optimizations it applies to the code. Let’s delve into the phases of JIT compilation: </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 1. Efficient Memory Usage : </b> JIT compilers consume less memory, as they generate native machine code only for the code paths that are executed, rather than compiling the entire program upfront. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 2. Dynamic Code Optimization : </b> JIT compilers optimize code during runtime, allowing them to adapt to the execution context, leading to improved performance. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 3. Multiple Optimization Levels : </b> JIT compilers employ various optimization levels, tailoring optimizations to the specific code being executed, which can significantly boost execution speed. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 4. Reduced Page Faults : </b> By generating native machine code as needed, JIT compilers reduce the likelihood of page faults and disk I/O, enhancing application responsiveness. </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Disadvantages of JIT Compiler </h4>
                    <p class="mb-2" align="justify"> The real power of JIT compilation lies in the optimizations it applies to the code. Let’s delve into the phases of JIT compilation: </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 1. Increased Program Complexity : </b>  JIT compilation adds complexity to the program execution process, which can make debugging and profiling more challenging. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 2. Limited Benefit for Short Code : </b> JIT compilation might not offer substantial benefits for small code snippets or programs with minimal execution time, as the overhead of compilation may outweigh the advantages. </p>
					<p class="mb-2" align="justify"> <b class="text-success"> 3. Cache Memory Usage : </b> JIT compilers consume significant cache memory, potentially impacting overall system performance, especially in resource-constrained environments. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr>   
								<td> <a href="version.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Java Version </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="variables.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Variable Types <i class="fa fa-arrow-right ms-3"></i></a> 
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