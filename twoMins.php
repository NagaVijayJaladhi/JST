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
                <h1 class="display-2 text-white animated slideInDown mb-4"> J2EE Training </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> Java </a></li>
                        <li class="breadcrumb-item"><a href="#"> J2SE </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">  Two Minute Drill </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3">  Two Minute Drill </h1>
                </div>
            </div>
        </div>
		
		 <div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Identifiers </h4>
                    <ol align="left">
					  <li align="left"> Identifiers can begin with a letter, an underscore, or a currency character. </li>
					  <li align="left"> After the first character, identifiers can also include digits. </li>
					  <li align="left"> Identifiers can be of any length. </li>
					  <li align="left"> JavaBeans methods must be named using camelCase, and depending on the method's purpose, must start with set, get, is, add, or  remove. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Declaration Rules </h4>
                    <ol align="left">
						<li align="left"> A source code file can have only one public class. </li>
						<li align="left"> If the source file contains a public class, the filename must match the public class name. </li>
						<li align="left"> A file can have only one package statement, but multiple imports. </li>
						<li align="left"> The package statement (if any) must be the first (non-comment) line in a source file. </li>
						<li align="left"> The import statements (if any) must come after the package and before the class declaration. </li>
						<li align="left"> If there is no package statement, import statements must be the first (non comment) statements in the source file. </li>
						<li align="left"> package and import statements apply to all classes in the file. </li>
						<li align="left"> A file can have more than one nonpublic class. </li>
						<li align="left"> Files with no public classes have no naming restrictions. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Class Access Modifiers </h4>
                    <ol align="left">
						<li align="left"> There are three access modifiers: public, protected, and private. </li>
						<li align="left"> There are four access levels: public, protected, default, and private. </li>
						<li align="left"> Classes can have only public or default access. </li>
						<li align="left"> A class with default access can be seen only by classes within the same package. </li>
						<li align="left"> A class with public access can be seen by all classes from all packages. </li>
						<li align="left"> Class visibility revolves around whether code in one class can
							<ol>
								<li> Create an instance of another class </li>
								<li> Extend (or subclass), another class </li>
								<li> Access methods and variables of another class </li>
							</ol>
						</li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Class Modifiers (Non Access) </h4>
                    <ol align="left">
						<li align="left"> Classes can also be modified with final, abstract, or strictfp. </li>
						<li align="left"> A class cannot be both final and abstract. </li>
						<li align="left"> A final class cannot be subclassed. </li>
						<li align="left"> An abstract class cannot be instantiated. </li>
						<li align="left"> A single abstract method in a class means the whole class must be abstract. </li>
						<li align="left"> An abstract class can have both abstract and nonabstract methods. </li>
						<li align="left"> The first concrete class to extend an abstract class must implement all of its abstract methods. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Interface Implementation </h4>
                    <ol align="left">
						<li align="left"> Interfaces are contracts for what a class can do, but they say nothing about the way in which the class must do it. </li>
						<li align="left"> Interfaces can be implemented by any class, from any inheritance tree. </li>
						<li align="left"> An interface is like a 100-percent abstract class, and is implicitly abstract whether you type the abstract modifier in the declaration or not. </li>
						<li align="left"> An interface can have only abstract methods, no concrete methods allowed. </li>
						<li align="left"> Interface methods are by default public and abstract—explicit declaration of these modifiers is optional. </li>
						<li align="left"> Interfaces can have constants, which are always implicitly public, static, and final. </li>
						<li align="left"> Interface constant declarations of public, static, and final are optional in any combination. </li>
						<li align="left"> A legal nonabstract implementing class has the following properties
							<ol>
								<li> It provides concrete implementations for the interface's methods. </li>
								<li> It must follow all legal override rules for the methods it implements. </li>
								<li> It must not declare any new checked exceptions for an implementation method. </li>
								<li> It must not declare any checked exceptions that are broader than the exceptions declared in the interface method. </li>
								<li> It may declare runtime exceptions on any interface method implementation regardless of the interface declaration. </li>
								<li>  It must maintain the exact signature (allowing for covariant returns) and return type of the methods it implements (but does not have to declare the exceptions of the interface). </li>
							</ol>
						</li>
						<li align="left"> A class implementing an interface can itself be abstract. </li>
						<li align="left"> An abstract implementing class does not have to implement the interface methods (but the first concrete subclass must). </li>
						<li align="left"> A class can extend only one class (no multiple inheritance), but it can implement many interfaces. </li>
						<li align="left"> Interfaces can extend one or more other interfaces. </li>
						<li align="left"> Interfaces cannot extend a class, or implement a class or interface. </li>
						<li align="left"> When taking the exam, verify that interface and class declarations are legal before verifying other code logic. </li>
					</ol>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Member Access Modifiers </h4>
                    <ol align="left">
						<li align="left"> Methods and instance (nonlocal) variables are known as "members." </li>
						<li align="left"> Members can use all four access levels: public, protected, default, private. </li>
						<li align="left"> Member access comes in two forms:
							<ol>
								<li> Code in one class can access a member of another class. </li>
								<li> A subclass can inherit a member of its superclass. </li>
							</ol>
						</li>
						<li align="left"> If a class cannot be accessed, its members cannot be accessed. </li>
						<li align="left"> Determine class visibility before determining member visibility. </li>
						<li align="left"> public members can be accessed by all other classes, even in other packages. </li>
						<li align="left"> If a superclass member is public, the subclass inherits it—regardless of package. </li>
						<li align="left"> Members accessed without the dot operator (.) must belong to the same class. </li>
						<li align="left"> this. always refers to the currently executing object. </li>
						<li align="left"> this.aMethod() is the same as just invoking aMethod(). </li>
						<li align="left"> private members can be accessed only by code in the same class. </li>
						<li align="left"> private members are not visible to subclasses, so private members cannot be inherited. </li>
						<li align="left"> Default and protected members differ only when subclasses are involved:
							<ol>
								<li> Default members can be accessed only by classes in the same package. </li>
								<li> protected members can be accessed by other classes in the same package, plus subclasses regardless of package. </li>
								<li> protected = package plus kids (kids meaning subclasses). </li>
								<li> For subclasses outside the package, the protected member can be accessed only through inheritance; a subclass outside the package cannot access a protected member by using a reference to a superclass instance (in other words, inheritance is the only mechanism for a subclass outside the package to access a protected member of its superclass). </li>
								<li> A protected member inherited by a subclass from another package is not accessible to any other class in the subclass package, except for the subclass' own subclasses. </li>
							</ol>
						</li>
					</ol>
                </div>
            </div>
        </div>
						
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Local Variables </h4>
                    <ol align="left">
						<li align="left"> Local (method, automatic, or stack) variable declarations cannot have access modifiers. </li>
						<li align="left"> final is the only modifier available to local variables. </li>
						<li align="left"> Local variables don't get default values, so they must be initialized before use. </li>
 					</ol>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Other Modifiers Members  </h4>
                    <ol align="left">
						<li align="left"> final methods cannot be overridden in a subclass. </li>
						<li align="left"> abstract methods are declared, with a signature, a return type, and an optional throws clause, but are not implemented. </li>
						<li align="left"> abstract methods end in a semicolon—no curly braces. </li>
						<li align="left"> Three ways to spot a non-abstract method:
							<ol>
								<li align="left"> The method is not marked abstract. </li>
								<li align="left"> The method has curly braces. </li>
								<li align="left"> The method has code between the curly braces. </li>
							</ol>
						</li>
						<li align="left"> The first nonabstract (concrete) class to extend an abstract class must implement all of the abstract class' abstract methods. </li>
						<li align="left"> The synchronized modifier applies only to methods and code blocks. </li>
						<li align="left"> synchronized methods can have any access control and can also be marked final. </li>
						<li align="left"> abstract methods must be implemented by a subclass, so they must be inheritable. For that reason:
							<ol>
								<li align="left"> abstract methods cannot be private. </li>
								<li align="left"> abstract methods cannot be final. </li>
							</ol>
						</li>
						<li align="left"> The native modifier applies only to methods. </li>
						<li align="left"> The strictfp modifier applies only to classes and methods. </li>
					</ol>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Methods with var-args </h3>
					<ol align="left">
						<li align="left"> As of Java 5, methods can declare a parameter that accepts from zero to many arguments, a so-called var-arg method. </li>
						<li align="left"> A var-arg parameter is declared with the syntax type... name; for instance: doStuff(int... x) { } </li>
						<li align="left"> A var-arg method can have only one var-arg parameter. </li>
						<li align="left"> In methods with normal parameters and a var-arg, the var-arg must come last. </li>
 					</ol>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Variable Declarations </h3>
					<ol align="left">
						<li align="left"> Instance variables can
							<ol>
								<li align="left"> Have any access control </li>
								<li align="left"> Be marked final or transient </li>
							</ol>
						</li>
						<li align="left"> Instance variables can't be abstract, synchronized, native, or strictfp. </li>
						<li align="left"> It is legal to declare a local variable with the same name as an instance variable; this is called "shadowing." </li>
						<li align="left"> final variables have the following properties:
							<ol>
								<li align="left"> final variables cannot be reinitialized once assigned a value. </li>
								<li align="left"> final reference variables cannot refer to a different object once the object has been assigned to the final variable. </li>
								<li align="left"> final reference variables must be initialized before the constructor completes. </li>
							</ol>
						</li>
						<li align="left"> There is no such thing as a final object. An object reference marked final does not mean the object itself is immutable. </li>
						<li align="left"> The transient modifier applies only to instance variables. </li>
						<li align="left"> The volatile modifier applies only to instance variables. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Array Declarations </h4>
                    <ol align="left">
						<li align="left"> Arrays can hold primitives or objects, but the array itself is always an object. </li>
						<li align="left"> When you declare an array, the brackets can be to the left or right of the variable name. </li>
						<li align="left"> It is never legal to include the size of an array in the declaration. </li>
						<li align="left"> An array of objects can hold any object that passes the IS-A (or instanceof) test for the declared type of the array. For example, if Horse extends Animal, then a Horse object can go into an Animal array. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Static Variables and Methods </h4>
                    <ol align="left">
						<li align="left"> They are not tied to any particular instance of a class. </li>
						<li align="left"> No classes instances are needed in order to use static members of the class. </li>
						<li align="left"> There is only one copy of a static variable / class and all instances share it. </li>
						<li align="left"> Static methods do not have direct access to non-static members. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Enums </h4>
                    <ol align="left">
						<li align="left"> An enum specifies a list of constant values assigned to a type. </li>
						<li align="left"> An enum is NOT a String or an int; an enum constant's type is the enum type. For example, SUMMER and FALL are of the enum type Season. </li>
						<li align="left"> An enum can be declared outside or inside a class, but NOT in a method. </li>
						<li align="left"> An enum declared outside a class must NOT be marked static, final, abstract, protected, or private. </li>
						<li align="left"> Enums can contain constructors, methods, variables, and constant class bodies. </li>
						<li align="left"> enum constants can send arguments to the enum constructor, using the syntax BIG(8), where the int literal 8 is passed to the enum constructor </li>
						<li align="left"> enum constructors can have arguments, and can be overloaded. </li>
						<li align="left"> enum constructors can NEVER be invoked directly in code. They are always called automatically when an enum is initialized. </li>
						<li align="left"> The semicolon at the end of an enum declaration is optional. These are legal: <br/>
								enum Foo { ONE, TWO, THREE} <br/> enum Foo { ONE, TWO, THREE}; </li>
						</li>
						<li align="left"> MyEnum.values() returns an array of MyEnum's values. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Encapsulation, IS-A, HAS-A </h4>
                    <ol align="left">
						<li align="left"> Encapsulation helps hide implementation behind an interface (or API).</li>
						<li align="left"> Encapsulated code has two features : 
							<ol>
								<li> Instance variables are kept protected (usually with the private modifier). </li>
								<li> Getter and setter methods provide access to instance variables. </li>
							</ol>
						</li>
						<li align="left"> IS-A refers to inheritance or implementation. </li>
						<li align="left"> IS-A is expressed with the keyword extends. </li>
						<li align="left"> IS-A, "inherits from," and "is a subtype of " are all equivalent expressions. </li>
						<li align="left"> HAS-A means an instance of one class "has a" reference to an instance of another class or another instance of the same class. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Inheritance </h4>
                    <ol align="left">
						<li align="left"> Inheritance allows a class to be a subclass of a superclass, and thereby inherit public and protected variables and methods of the superclass. </li>
						<li align="left"> Inheritance is a key concept that underlies IS-A, polymorphism, overriding, overloading, and casting. </li>
						<li align="left"> All classes (except class Object), are subclasses of type Object, and therefore they inherit Object's methods. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Polymorphism </h4>
                    <ol align="left">
						<li align="left"> Polymorphism means "many forms." </li>
						<li align="left"> A reference variable is always of a single, unchangeable type, but it can refer to a subtype object. </li>
						<li align="left"> A single object can be referred to by reference variables of many different types —as long as they are the same type or a supertype of the object. </li>
						<li align="left"> The reference variable's type (not the object's type), determines which methods can be called! </li>
						<li align="left"> Polymorphic method invocations apply only to overridden instance methods. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Overriding and Overloading </h4>
                    <ol align="left">
						<li align="left"> Methods can be overridden or overloaded; constructors can be overloaded but not overridden. </li>
						<li align="left"> Abstract methods must be overridden by the first concrete (non-abstract) subclass. </li>
						<li align="left"> With respect to the method it overrides, the overriding method 
							<ol>
								<li> Must have the same argument list. </li>
								<li> Must have the same return type, except that as of  Java 5, the return type can be a subclass—this is known as a covariant return. </li>
								<li> Must not have a more restrictive access modifier. </li>
								<li> May have a less restrictive access modifier. </li>
								<li> Must not throw new or broader checked exceptions. </li>
								<li>  May throw fewer or narrower checked exceptions, or any unchecked exception. </li>
							</ol>
						</li>
						<li align="left"> final methods cannot be overridden </li>
						<li align="left"> Only inherited methods may be overridden, and remember that private methods are not inherited. </li>
						<li align="left"> A subclass uses super.overriddenMethodName() to call the superclass version of an overridden method. </li>
						<li align="left"> Overloading means reusing a method name, but with different arguments. </li>
						<li align="left"> Overloaded methods
							<ol>
								<li> Must have different argument lists </li>
								<li> May have different return types, if argument lists are also different </li>
								<li> May have different access modifiers </li>
								<li> May throw different exceptions </li>
							</ol>
						</li>
						<li align="left"> Methods from a superclass can be overloaded in a subclass. </li>
						<li align="left"> Polymorphism applies to overriding, not to overloading. </li>
						<li align="left"> Object type (not the reference variable's type), determines which overridden method is used at runtime. </li>
						<li align="left"> Reference type determines which overloaded method will be used at compile time. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Reference Variable Casting </h4>
                    <ol align="left">
						<li align="left"> There are two types of reference variable casting: downcasting and upcasting. </li>
						<li align="left"> Downcasting: If you have a reference variable that refers to a subtype object, you can assign it to a reference variable of the subtype. You must make an explicit cast to do this, and the result is that you can access the subtype's members with this new reference variable. </li>
						<li align="left"> Upcasting: You can assign a reference variable to a supertype reference variable explicitly or implicitly. This is an inherently safe operation because the assignment restricts the access capabilities of the new variable. </li>		
					</ol>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Implementing an Interface </h4>
                    <ol align="left">
						<li align="left"> When you implement an interface, you are fulfilling its contract. </li>
						<li align="left"> You implement an interface by properly and concretely overriding all of the methods defined by the interface. </li>
						<li align="left"> A single class can implement many interfaces. </li>		
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Return Types </h4>
                    <ol align="left">
						<li align="left"> Overloaded methods can change return types; overridden methods cannot, except in the case of covariant returns.
						<li align="left"> Object reference return types can accept null as a return value. </li>
						<li align="left"> An array is a legal return type, both to declare and return as a value. </li>
						<li align="left"> For methods with primitive return types, any value that can be implicitly converted to the return type can be returned. </li>
						<li align="left"> Nothing can be returned from a void, but you can return nothing. You're allowed to simply say return, in any method with a void return type, to bust out of a method early. But you can't return nothing from a method with a non-void return type. </li>
						<li align="left"> Methods with an object reference return type, can return a subtype. </li>
						<li align="left"> Methods with an interface return type, can return any implementer. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Constructors and Instantiation  </h4>
                    <ol align="left">
						<li align="left"> A constructor is always invoked when a new object is created. </li>
						<li align="left"> Each superclass in an object's inheritance tree will have a constructor called. </li>
						<li align="left"> Every class, even an abstract class, has at least one constructor. </li>
						<li align="left"> Constructors must have the same name as the class.. </li>
						<li align="left"> Constructors don't have a return type. If you see code with a return type, it's a method with the same name as the class, it's not a constructor. </li>
						<li align="left"> Typical constructor execution occurs as follows:
							<ol>
								<li> The constructor calls its superclass constructor, which calls its superclass constructor, and so on all the way up to the Object constructor. </li>
								<li> The Object constructor executes and then returns to the calling constructor, which runs to completion and then returns to its calling constructor, and so on back down to the completion of the constructor of the actual instance being created. </li>
							</ol>
						</li>
						<li align="left"> Constructors can use any access modifier (even private!). </li>
						<li align="left"> The compiler will create a default constructor if you don't create any constructors in your class. </li>
						<li align="left"> The default constructor is a no-arg constructor with a no-arg call to super(). </li>
						<li align="left"> The first statement of every constructor must be a call to either this() (an overloaded constructor) or super(). </li>
						<li align="left"> The compiler will add a call to super() unless you have already put in a call to this() or super(). </li>
						<li align="left"> Instance members are accessible only after the super constructor runs. </li>
						<li align="left"> Abstract classes have constructors that are called when a concrete subclass is instantiated. </li>
						<li align="left"> Interfaces do not have constructors. </li>
						<li align="left"> If your superclass does not have a no-arg constructor, you must create a constructor and insert a call to super() with arguments matching those of the superclass constructor. </li>
						<li align="left"> Constructors are never inherited, thus they cannot be overridden. </li>
						<li align="left"> A constructor can be directly invoked only by another constructor (using a call to super() or this()). </li>
						<li align="left"> Issues with calls to this()
							<ol>
								<li> May appear only as the first statement in a constructor. </li>
								<li> The argument list determines which overloaded constructor is called. </li>
								<li> Constructors can call constructors can call constructors, and so on, but sooner or later one of them better call super() or the stack will explode. </li>
								<li> Calls to this() and super() cannot be in the same constructor. You can have one or the other, but never both. </li>
							</ol>
						</li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Statics  </h4>
                    <ol align="left">
						<li align="left"> Use static methods to implement behaviors that are not affected by the state of any instances. </li>
						<li align="left"> Use static variables to hold data that is class specific as opposed to instance specific—there will be only one copy of a static variable. </li>
						<li align="left"> All static members belong to the class, not to any instance. </li>
						<li align="left"> A static method can't access an instance variable directly. </li>
						<li align="left"> Use the dot operator to access static members, but remember that using a reference variable with the dot operator is really a syntax trick, and the compiler will substitute the class name for the reference variable, for instance : <br/> &nbsp;&nbsp;&nbsp; d.doStuff(); <br/> becomes: <br/> &nbsp;&nbsp;&nbsp; Dog.doStuff(); </li>
						<li align="left"> static methods can't be overridden, but they can be redefined. </li>
					</ol>
                </div>
            </div>
        </div>
 		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Coupling and Cohesion </h4>
                    <ol align="left">
						<li align="left"> Coupling refers to the degree to which one class knows about or uses members of another class. </li>
						<li align="left"> Loose coupling is the desirable state of having classes that are well encapsulated, minimize references to each other, and limit the breadth of API usage. </li>
						<li align="left"> Tight coupling is the undesirable state of having classes that break the rules of loose coupling. </li>
						<li align="left"> Cohesion refers to the degree in which a class has a single, well-defined role or responsibility. </li>
						<li align="left"> High cohesion is the desirable state of a class whose members support a single, well-focused role or responsibility. </li>
						<li align="left"> Low cohesion is the undesirable state of a class whose members support multiple, unfocused roles or responsibilities. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Stack and Heap </h4>
                    <ol align="left">
						<li align="left"> Local variables (method variables) live on the stack. </li>
						<li align="left"> Objects and their instance variables live on the heap. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Literals and Primitive Casting </h4>
                    <ol align="left">
						<li align="left"> Integer literals can be decimal, octal or hexadecimal. </li>
						<li align="left"> Literals for longs end in L or l. </li>
						<li align="left"> Float literals end in F or f, double literals end in a digit or D or d. </li>
						<li align="left"> The boolean literals are true and false. </li>
						<li align="left"> Literals for chars are a single character inside single quotes: 'd'. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Scope  </h4>
                    <ol align="left">
						<li align="left"> Scope refers to the lifetime of a variable. </li>
						<li align="left"> There are four basic scopes
							<ol>
								<li> Static variables live basically as long as their class lives. </li>
								<li> Instance variables live as long as their object lives. </li>
								<li> Local variables live as long as their method is on the stack; however, if their method invokes another method, they are temporarily unavailable. </li>
								<li> Block variables live until the block completes.</li>
							</ol>
						</li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Basic Assignments </h4>
                    <ol align="left">
						<li align="left"> Literal integers are implicitly ints.</li>
						<li align="left"> Integer expressions always result in an int-sized result, never smaller.</li>
						<li align="left"> Floating-point numbers are implicitly doubles (64 bits).</li>
						<li align="left"> Narrowing a primitive truncates the high order bits.</li>
						<li align="left"> Compound assignments (e.g. +=), perform an automatic cast.</li>
						<li align="left"> A reference variable holds the bits that are used to refer to an object.</li>
						<li align="left"> Reference variables can refer to subclasses of the declared type but not to superclasses.</li>
						<li align="left"> When creating a new object, e.g., Button b = new Button();, three things happen:
							<ol>
								<li> Make a reference variable named b, of type Button</li>
								<li> Create a new Button object</li>
								<li> Assign the Button object to the reference variable b </li>
							</ol>
						</li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Using a Variable or Array Element That Is Uninitialized and Unassigned </h4>
                    <ol align="left">
						<li align="left"> When an array of objects is instantiated, objects within the array are not instantiated automatically, but all the references get the default value of null. </li>
						<li align="left"> When an array of primitives is instantiated, elements get default values. </li>
						<li align="left"> Instance variables are always initialized with a default value. </li>
						<li align="left"> Local/automatic/method variables are never given a default value. If you attempt to use one before initializing it, you'll get a compiler error. </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Passing Variables into Methods </h4>
                    <ol align="left">
						<li align="left"> Methods can take primitives and/or object references as arguments. </li>						
						<li align="left"> Method arguments are always copies. </li>
						<li align="left"> Method arguments are never actual objects (they can be references to objects). </li>
						<li align="left"> A primitive argument is an unattached copy of the original primitive. </li>
						<li align="left"> A reference argument is another copy of a reference to the original object. </li>
						<li align="left"> Shadowing occurs when two variables with different scopes share the same name. This leads to hard-to-find bugs, and hard-to-answer exam questions. </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Array Declaration, Construction, and Initialization </h4>
                    <ol align="left">
						<li align="left"> Arrays can hold primitives or objects, but the array itself is always an object. </li>
						<li align="left"> When you declare an array, the brackets can be left or right of the name. </li>
						<li align="left"> It is never legal to include the size of an array in the declaration. </li>
						<li align="left"> You must include the size of an array when you construct it (using new) unless you are creating an anonymous array. </li>
						<li align="left"> Elements in an array of objects are not automatically created, although primitive array elements are given default  values. </li>
						<li align="left"> You'll get a NullPointerException if you try to use an array element in an object array, if that element does not refer to a real object. </li>
						<li align="left"> Arrays are indexed beginning with zero. </li>
						<li align="left"> An ArrayIndexOutOfBoundsException occurs if you use a bad index value. </li>
						<li align="left"> Arrays have a length variable whose value is the number of array elements. </li>
						<li align="left"> The last index you can access is always one less than the length of the array. </li>
						<li align="left"> Multidimensional arrays are just arrays of arrays. </li>
						<li align="left"> The dimensions in a multidimensional array can have different lengths. </li>
						<li align="left"> An array of primitives can accept any value that can be promoted implicitly to the array's declared type;. e.g., a byte variable can go in an int array. </li>
						<li align="left"> An array of objects can hold any object that passes the IS-A (or instanceof) test for the declared type of the array. For example, if Horse extends Animal, then a Horse object can go into an Animal array. </li>
						<li align="left"> If you assign an array to a previously declared array reference, the array you are assigning must be the same dimension as the reference you're assigning it to. </li>
						<li align="left"> You can assign an array of one type to a previously declared array reference of one of its supertypes. For example, a Honda array can be assigned to an array declared as type Car (assuming Honda extends Car).</li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Initialization Blocks </h4>
                    <ol align="left">
						<li align="left"> Static initialization blocks run once, when the class is first loaded.
						<li align="left"> Instance initialization blocks run every time a new instance is created. They run after all super-constructors and before the constructor's code has run.
						<li align="left"> If multiple init blocks exist in a class, they follow the rules stated above, AND they run in the order in which they appear in the source file. </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Using Wrappers  </h4>
                    <ol align="left">
						<li align="left"> The wrapper classes correlate to the primitive types.</li>
						<li align="left"> Wrappers have two main functions:
							<ol>
								<li> To wrap primitives so that they can be handled like objects</li>
								<li> To provide utility methods for primitives (usually conversions)</li>
							</ol>
						</li>
						<li align="left"> The three most important method families are
							<ol>
								<li> xxxValue() Takes no arguments, returns a primitive</li>
								<li> parseXxx() Takes a String, returns a primitive, throws NFE</li>
								<li> valueOf() Takes a String, returns a wrapped object, throws NFE</li>
							</ol>
						</li>
						<li align="left"> Wrapper constructors can take a String or a primitive, except for Character, which can only take a char.</li>
						<li align="left"> Radix refers to bases (typically) other than 10; octal is radix = 8, hex = 16.</li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Boxing  </h4>
                    <ol align="left">
						<li align="left"> As of Java 5, boxing allows you to convert primitives to wrappers or to convert wrappers to primitives automatically. </li>
						<li align="left"> Using == with wrappers created through boxing is tricky; those with the same small values (typically lower than 127), will be ==, larger values will not be ==. </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advanced Overloading </h4>
                    <ol align="left">
						<li align="left"> Primitive widening uses the "smallest" method argument possible. </li>
						<li align="left"> Used individually, boxing and var-args are compatible with overloading. </li>
						<li align="left"> You CANNOT widen from one wrapper type to another. (IS-A fails.) </li>
						<li align="left"> You CANNOT widen and then box. (An int can't become a Long.) </li>
						<li align="left"> You can box and then widen. (An int can become an Object, via an Integer.) </li>
						<li align="left"> You can combine var-args with either widening or boxing. </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Garbage Collection </h4>
                    <ol align="left">
						<li align="left"> In Java, garbage collection (GC) provides automated memory management. </li>
						<li align="left"> The purpose of GC is to delete objects that can't be reached. </li>
						<li align="left"> Only the JVM decides when to run the GC, you can only suggest it. </li>
						<li align="left"> You can't know the GC algorithm for sure. </li>
						<li align="left"> Objects must be considered eligible before they can be garbage collected. </li>
						<li align="left"> An object is eligible when no live thread can reach it. </li>
						<li align="left"> To reach an object, you must have a live, reachable reference to that object. </li>
						<li align="left"> Java applications can run out of memory. </li>
						<li align="left"> Islands of objects can be GCed, even though they refer to each other. </li>
						<li align="left"> Request garbage collection with System.gc(); (only before the SCJP 6). </li>
						<li align="left"> Class Object has a finalize() method. </li>
						<li align="left"> The finalize() method is guaranteed to run once and only once before the garbage collector deletes an object. </li>
						<li align="left"> The garbage collector makes no guarantees, finalize() may never run. </li>
						<li align="left"> You can uneligibilize an object for GC from within finalize(). </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Relational Operators </h4>
                    <ol align="left">
						<li align="left"> Relational operators always result in a boolean value (true or false). </li>
						<li align="left"> There are six relational operators: &gt;, &gt;&equals;, &lt;, &lt;&equals;, &equals;&equals;, and !=. The last two (== and !=) are sometimes referred to as equality operators.  </li>
						<li align="left"> When comparing characters, Java uses the Unicode value of the character as the numerical value. </li>
						<li align="left"> Equality operators
							<ol>
								<li> There are two equality operators: == and !=. </li>
								<li> Four types of things can be tested: numbers, characters, booleans, and reference variables. </li>
							</ol>
						</li>
						<li align="left"> When comparing reference variables, == returns true only if both references refer to the same object. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> instanceof Operator </h4>
					<ol align="left">
						<li align="left"> instanceof is for reference variables only, and checks for whether the object is of a particular type. </li>
						<li align="left"> The instanceof operator can be used only to test objects (or null) against class types that are in the same class hierarchy. </li>
						<li align="left"> For interfaces, an object passes the instanceof test if any of its superclasses implement the interface on the right side of the instanceof operator. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Arithmetic Operators </h4>
					<ol align="left">					
						<li align="left"> There are four primary math operators: add, subtract, multiply, and divide. </li>
						<li align="left"> The remainder operator (%), returns the remainder of a division. </li>
						<li align="left"> Expressions are evaluated from left to right, unless you add parentheses, or unless some operators in the expression have higher precedence than others. </li>
						<li align="left"> The *, /, and % operators have higher precedence than + and -. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> String Concatenation Operator </h4>
					<ol align="left">
						<li align="left"> If either operand is a String, the + operator concatenates the operands. </li>
						<li align="left"> If both operands are numeric, the + operator adds the operands. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Increment/Decrement Operators </h4>
					<ol align="left">
						<li align="left"> Prefix operators (++ and --) run before the value is used in the expression. </li>
						<li align="left"> Postfix operators (++ and --) run after the value is used in the expression. </li>
						<li align="left"> In any expression, both operands are fully evaluated before the operator is applied. </li>
						<li align="left"> Variables marked final cannot be incremented or decremented. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Ternary (Conditional Operator) </h4>
					<ol align="left">
						<li align="left"> Returns one of two values based on whether a boolean expression is true or false.
							<ol>
								<li> Returns the value after the ? if the expression is true. </li>
								<li> Returns the value after the : if the expression is false. </li>
							</ol>
						</li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Logical Operators </h4>
                    <ol align="left">
						<li align="left"> The exam covers six "logical" operators: &, |, ^, !, &&, and ||. </li>
						<li align="left"> Logical operators work with two expressions (except for !) that must resolve to boolean values. </li>
						<li align="left"> The && and & operators return true only if both operands are true. </li>
						<li align="left"> The || and | operators return true if either or both operands are true. </li>
						<li align="left"> The && and || operators are known as short-circuit operators. </li>
						<li align="left"> The && operator does not evaluate the right operand if the left operand is false. </li>
						<li align="left"> The || does not evaluate the right operand if the left operand is true. </li>
						<li align="left"> The & and | operators always evaluate both operands. </li>
						<li align="left"> The ^ operator (called the "logical XOR"), returns true if exactly one oper- and is true. </li>
						<li align="left"> The ! operator (called the "inversion" operator), returns the opposite value of the boolean operand it precedes. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Writing Code Using if and switch Statements </h4>
					<ol align="left">
						<li align="left"> The only legal expression in an if statement is a boolean expression, in other words an expression that resolves to a boolean or a Boolean variable. </li>
						<li align="left"> Watch out for boolean assignments (=) that can be mistaken for boolean equality (==) tests: <br/> boolean x = false; 
						<br/> if (x = true) { } // an assignment, so x will always be true! </li>
						<li align="left"> Curly braces are optional for if blocks that have only one conditional statement. But watch out for misleading indentations. </li>
						<li align="left"> switch statements can evaluate only to enums or the byte, short, int, and char data types. You can't say, <br/> long s = 30; <br/> switch(s) { } </li>
						<li align="left"> The case constant must be a literal or final variable, or a constant expression, including an enum. You cannot have a case that includes a non-final variable, or a range of values. </li>
						<li align="left"> If the condition in a switch statement matches a case constant, execution will run through all code in the switch following the matching case statement until a break statement or the end of the switch statement is encountered. In other words, the matching case is just the entry point into the case block, but unless there's a break statement, the matching case is not the only case code that runs. </li>
						<li align="left"> The default keyword should be used in a switch statement if you want to run some code when none of the case values match the conditional value. <li>
						<li align="left"> The default block can be located anywhere in the switch block, so if no case matches, the default block will be entered, and if the default does not contain a break, then code will continue to execute (fall-through) to the end of the switch or until the break statement is encountered. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Writing Code Using Loops </h4>
					<ol align="left">
						<li align="left"> A basic for statement has three parts: declaration and/or initialization, boolean evaluation, and the iteration expression. </li>
						<li align="left"> If a variable is incremented or evaluated within a basic for loop, it must be declared before the loop, or within the for loop declaration. </li>
						<li align="left"> A variable declared (not just initialized) within the basic for loop declaration cannot be accessed outside the for loop (in other words, code below the for loop won't be able to use the variable). </li>
						<li align="left"> You can initialize more than one variable of the same type in the first part of the basic for loop declaration; each initialization must be separated by a comma. </li>
						<li align="left"> An enhanced for statement (new as of Java 6), has two parts, the declaration and the expression. It is used only to loop through arrays or collections. </li>
						<li align="left"> With an enhanced for, the expression is the array or collection through which you want to loop. </li>
						<li align="left"> With an enhanced for, the declaration is the block variable, whose type is compatible with the elements of the array or collection, and that variable contains the value of the element for the given iteration. </li>
						<li align="left"> You cannot use a number (old C-style language construct) or anything that does not evaluate to a boolean value as a condition for an if statement or looping construct. You can't, for example, say if(x), unless x is a boolean variable. </li>
						<li align="left"> The do loop will enter the body of the loop at least once, even if the test condition is not met. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Using break and continue </h4>
					<ol align="left">
						<li align="left"> An unlabeled break statement will cause the current iteration of the innermost looping construct to stop and the line of code following the loop to run. </li>
						<li align="left"> An unlabeled continue statement will cause: the current iteration of the innermost loop to stop, the condition of that loop to be checked, and if
						the condition is met, the loop to run again. </li>
						<li align="left"> If the break statement or the continue statement is labeled, it will cause similar action to occur on the labeled loop, not the innermost loop. </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Handling Exceptions </h4>
					<ol align="left">
						<li align="left"> Exceptions come in two flavors: checked and unchecked. </li>
						<li align="left"> Checked exceptions include all subtypes of Exception, excluding classes that extend RuntimeException. </li>
						<li align="left"> Checked exceptions are subject to the handle or declare rule; any method that might throw a checked exception (including methods that invoke methods that can throw a checked exception) must either declare the exception using throws, or handle the exception with an appropriate try/catch. </li>
						<li align="left"> Subtypes of Error or RuntimeException are unchecked, so the compiler doesn't enforce the handle or declare rule. You're free to handle them, or to declare them, but the compiler doesn't care one way or the other. </li>
						<li align="left"> If you use an optional finally block, it will always be invoked, regardless of whether an exception in the corresponding try is thrown or not, and regardless of whether a thrown exception is caught or not. </li>
						<li align="left"> The only exception to the finally-will-always-be-called rule is that a finally will not be invoked if the JVM shuts down. That could happen if code from the try or catch blocks calls System.exit(). </li>
						<li align="left"> Just because finally is invoked does not mean it will complete. Code in the finally block could itself raise an exception or issue a System.exit(). </li>
						<li align="left"> Uncaught exceptions propagate back through the call stack, starting from the method where the exception is thrown and ending with either the first method that has a corresponding catch for that exception type or a JVM shutdown (which happens if the exception gets to main(), and main() is "ducking" the exception by declaring it). </li>
						<li align="left"> You can create your own exceptions, normally by extending Exception or one of its subtypes. Your exception will then be considered a checked exception, and the compiler will enforce the handle or declare rule for that exception. </li>
						<li align="left"> All catch blocks must be ordered from most specific to most general. If you have a catch clause for both IOException and Exception, you must put the catch for IOException first in your code. Otherwise, the IOException would be caught by catch(Exception e), because a catch argument can catch the specified exception or any of its subtypes! The compiler will stop you from defining catch clauses that can never be reached. </li>
						<li align="left"> Some exceptions are created by programmers, some by the JVM. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Working with the Assertion Mechanism </h4>
					<ol align="left">
						<li align="left"> Assertions give you a way to test your assumptions during development and debugging. </li>
						<li align="left"> Assertions are typically enabled during testing but disabled during deployment. </li>
						<li align="left"> You can use assert as a keyword (as of version 1.4) or an identifier, but not both together. To compile older code that uses assert as an identifier (for example, a method name), use the -source 1.3 command-line flag to javac. </li>
						<li align="left"> Assertions are disabled at runtime by default. To enable them, use a command-line flag -ea or -enableassertions. </li>
						<li align="left"> Selectively disable assertions by using the -da or -disableassertions flag. </li>
						<li align="left"> If you enable or disable assertions using the flag without any arguments, you're enabling or disabling assertions in general. You can combine enabling and disabling switches to have assertions enabled for some classes and/or packages, but not others. </li>
						<li align="left"> You can enable and disable assertions on a class-by-class basis, using the following syntax: <br/> java -ea -da:MyClass TestClass </li>
						<li align="left"> You can enable and disable assertions on a package-by-package basis, and any package you specify also includes any subpackages (packages further down the directory hierarchy). </li>
						<li align="left"> Do not use assertions to validate arguments to public methods. </li>
						<li align="left"> Do not use assert expressions that cause side effects. Assertions aren't guaranteed to always run, and you don't want behavior that changes depending on whether assertions are enabled. </li>
						<li align="left"> Do use assertions—even in public methods—to validate that a particular code block will never be reached. You can use assert false; for code that should never be reached, so that an assertion error is thrown immediately if the assert statement is executed. </li>
					</ol>
                </div>
            </div>
        </div>
	
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Using String, StringBuffer, and StringBuilder </h4>
					<ol align="left">
						<li align="left"> String objects are immutable, and String reference variables are not. </li>
						<li align="left"> If you create a new String without assigning it, it will be lost to your program </li>
						<li align="left"> If you redirect a String reference to a new String, the old String can be lost. </li>
						<li align="left"> String methods use zero-based indexes, except for the second argument of substring(). </li>
						<li align="left"> The String class is final—its methods can't be overridden. </li>
						<li align="left"> When the JVM finds a String literal, it is added to the String literal pool. </li>
						<li align="left"> Strings have a method: length(); arrays have an attribute named length. </li>
						<li align="left"> The StringBuffer's API is the same as the new StringBuilder's API, except that StringBuilder's methods are not synchronized for thread safet. </li>
						<li align="left"> StringBuilder methods should run faster than StringBuffer methods. </li>
						<li align="left"> All of the following bullets apply to both StringBuffer and StringBuilde : 
							<ol>
								<li> They are mutable—they can change without creating a new object. </li>
								<li> StringBuffer methods act on the invoking object, and objects can change without an explicit assignment in the statement. </li>
								<li> StringBuffer equals() is not overridden; it doesn't compare values. </li>
							</ol>
						</li>
						<li align="left"> Remember that chained methods are evaluated from left to right. </li>
						<li align="left"> String methods to remember: charAt(), concat(), equalsIgnoreCase(), length(), replace(), substring(), toLowerCase(), toString(), toUpperCase(), and trim(). </li>
						<li align="left"> StringBuffer methods to remember: append(), delete(), insert(), reverse(), and toString(). </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> File Input/Output </h4>
					<ol align="left">
						<li align="left"> The classes you need to understand in java.io are File, FileReader, BufferedReader, FileWriter, BufferedWriter, PrintWriter, and Console. </li>
						<li align="left"> A new File object doesn't mean there's a new file on your hard drive. </li>
						<li align="left"> File objects can represent either a file or a directory. </li>	
						<li align="left"> The File class lets you manage (add, rename, and delete) files and directories. </li>
						<li align="left"> The methods createNewFile() and mkdir() add entries to your file system. </li>
						<li align="left"> FileWriter and FileReader are low-level I/O classes. You can use them to write and read files, but they should usually be wrapped. </li>
						<li align="left"> Classes in java.io are designed to be "chained" or "wrapped." (This is a common use of the decorator design pattern.) </li>
						<li align="left"> It's very common to "wrap" a BufferedReader around a FileReader or a BufferedWriter around a FileWriter, to get access to higher-level (more convenient) methods. </li>
						<li align="left"> PrintWriters can be used to wrap other Writers, but as of Java 5 they can be built directly from Files or Strings. </li>
						<li align="left"> Java 5 PrintWriters have new append(), format(), and printf() methods. </li>
						<li align="left"> Console objects can read non-echoed input and are instantiated using System.console(). </li>
					</ol>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Serialization </h4>
					<ol align="left">
						<li align="left"> The classes you need to understand are all in the java.io package; they include: ObjectOutputStream and ObjectInputStream primarily, and FileOutputStream and FileInputStream because you will use them to create the low-level streams that the ObjectXxxStream classes will use. </li>
						<li align="left"> A class must implement Serializable before its objects can be serialized. </li>
						<li align="left"> The ObjectOutputStream.writeObject() method serializes objects, and the ObjectInputStream.readObject() method deserializes objects. </li>	
						<li align="left"> If you mark an instance variable transient, it will not be serialized even thought the rest of the object's state will be </li>
						<li align="left"> You can supplement a class's automatic serialization process by implementing the writeObject() and readObject() methods. If you do this, embedding calls to defaultWriteObject() and defaultReadObject(), respectively, will handle the part of serialization that happens normally. </li>
						<li align="left"> If a superclass implements Serializable, then its subclasses do automatically. </li>
						<li align="left"> If a superclass doesn't implement Serializable, then when a subclass object is deserialized, the superclass constructor will be invoked, along with its superconstructor(s).</li>
						<li align="left"> DataInputStream and DataOutputStream aren't actually on the exam, in spite of what the Sun objectives say. </li>
					</ol>
                </div>
            </div>
        </div>	

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Dates, Numbers, and Currency </h4>
					<ol align="left">
						<li align="left"> The classes you need to understand are java.util.Date, java.util.Calendar, java.text.DateFormat, java.text.NumberFormat, and java.util.Locale. </li>
						<li align="left"> Most of the Date class's methods have been deprecated. </li>
						<li align="left"> A Date is stored as a long, the number of milliseconds since January 1, 1970. </li>	
						<li align="left"> Date objects are go-betweens the Calendar and Locale classes </li>
						<li align="left"> The Calendar provides a powerful set of methods to manipulate dates, performing tasks such as getting days of the week, or adding some number of months or years (or other increments) to a date </li>
						<li align="left"> Create Calendar instances using static factory methods (getInstance()). </li>
						<li align="left"> The Calendar methods you should understand are add(), which allows you to add or subtract various pieces (minutes, days, years, and so on) of dates, and roll(), which works like add() but doesn't increment a date's bigger pieces. (For example: adding 10 months to an October date changes the month to August, but doesn't increment the Calendar's year value. </li>
						<li align="left"> DateFormat instances are created using static factory methods (getInstance() and getDateInstance()) </li>	
						<li align="left"> There are several format "styles" available in the DateFormat class </li>
						<li align="left"> DateFormat styles can be applied against various Locales to create a wide array of outputs for any given date. </li>
						<li align="left"> The DateFormat.format() method is used to create Strings containing properly formatted dates </li>
						<li align="left"> The Locale class is used in conjunction with DateFormat and NumberForma </li>
						<li align="left"> Both DateFormat and NumberFormat objects can be constructed with a specific, immutable Locale </li>	
						<li align="left"> For the exam you should understand creating Locales using language, or a combination of language and country. </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Parsing,Tokenizing, and Formatting </h4>
					<ol align="left">
						<li align="left"> regex is short for regular expressions, which are the patterns used to search for data within large data sources. </li>
						<li align="left"> regex is a sub-language that exists in Java and other languages (such as Perl). </li>
						<li align="left"> regex lets you to create search patterns using literal characters or metacharacters. Metacharacters allow you to search for slightly more abstract data like "digits" or "whitespace". </li>
						<li align="left"> Study the \d, \s, \w, and . metacharacters. </li>
						<li align="left"> regex provides for quantifiers which allow you to specify concepts like: "look for one or more digits in a row." </li>
						<li align="left"> Study the ?, *, and + greedy quantifiers. </li>
						<li align="left"> Remember that metacharacters and Strings don't mix well unless you remember to "escape" them properly. For instance String s = "\\d"; </li>
						<li align="left"> The Pattern and Matcher classes have Java's most powerful regex capabilities. </li>
						<li align="left"> You should understand the Pattern compile() method and the Matcher matches(), pattern(), find(), start(), and group() methods. </li>
						<li align="left"> You WON'T need to understand Matcher's replacement-oriented methods. </li>
						<li align="left"> You can use java.util.Scanner to do simple regex searches, but it is primarily intended for tokenizing. </li>
						<li align="left"> Tokenizing is the process of splitting delimited data into small pieces. </li>
						<li align="left"> In tokenizing, the data you want is called tokens, and the strings that separate the tokens are called delimiters. </li>
						<li align="left"> Tokenizing can be done with the Scanner class, or with String.split(). </li>
						<li align="left"> Delimiters are single characters like commas, or complex regex expressions. </li>
						<li align="left"> The Scanner class allows you to tokenize data from within a loop, which allows you to stop whenever you want to. </li>
						<li align="left"> The Scanner class allows you to tokenize Strings or streams or files. </li>
						<li align="left"> The String.split() method tokenizes the entire source data all at once, so large amounts of data can be quite slow to process. </li>
						<li align="left"> New to Java 5 are two methods used to format data for output. These methods are format() and printf(). These methods are found in the PrintStream class, an instance of which is the out in System.out. </li>
						<li align="left"> The format() and printf() methods have identical functionality. </li>
						<li align="left"> Formatting data with printf() (or format()) is accomplished using formatting strings that are associated with primitive or string arguments. </li>
						<li align="left"> The format() method allows you to mix literals in with your format strings. </li>
						<li align="left"> The format string values you should know are <br/> Flags: -, +, 0, "," , and ( <br/> Conversions: b, c, d, f, and s </li>
						<li align="left"> If your conversion character doesn't match your argument type, an exception will be thrown. </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Overriding hashCode() and equals() </h4>
					<ol align="left"> 
						<li align="left"> equals(), hashCode(), and toString() are public. </li>
						<li align="left"> Override toString() so that System.out.println() or other methods can see something useful, like your object's state. </li>
						<li align="left"> Use == to determine if two reference variables refer to the same object. </li>
						<li align="left"> Use equals() to determine if two objects are meaningfully equivalent. </li>
						<li align="left"> If you don't override equals(), your objects won't be useful hashing keys. </li>
						<li align="left"> If you don't override equals(), different objects can't be considered equal. </li>
						<li align="left"> Strings and wrappers override equals() and make good hashing keys. </li>
						<li align="left"> When overriding equals(), use the instanceof operator to be sure you're evaluating an appropriate class. </li>
						<li align="left"> When overriding equals(), compare the objects' significant attributes. </li>
						<li align="left"> Highlights of the equals() contract :
							<ol>
								<li> Reflexive: x.equals(x) is true. </li>
								<li> Symmetric: If x.equals(y) is true, then y.equals(x) must be true. </li>
								<li> Transitive: If x.equals(y) is true, and y.equals(z) is true, then z.equals(x) is true. </li>
								<li> Consistent: Multiple calls to x.equals(y) will return the same result. </li>
								<li> Null: If x is not null, then x.equals(null) is false. </li>
							</ol>
						</li>
						<li align="left"> If x.equals(y) is true, then x.hashCode() == y.hashCode() is true. </li>
						<li align="left"> If you override equals(), override hashCode(). </li>
						<li align="left"> HashMap, HashSet, Hashtable, LinkedHashMap, & LinkedHashSet use hashing. </li>
						<li align="left"> An appropriate hashCode() override sticks to the hashCode() contract. </li>
						<li align="left"> An efficient hashCode() override distributes keys evenly across its buckets. </li>
						<li align="left"> An overridden equals() must be at least as precise as its hashCode() mate. </li>
						<li align="left"> To reiterate: if two objects are equal, their hashcodes must be equal. </li>
						<li align="left"> It's legal for a hashCode() method to return the same value for all instances (although in practice it's very inefficient).  </li>
						<li align="left"> Highlights of the hashCode() contract:
							<ol>
								<li> Consistent: multiple calls to x.hashCode() return the same integer. </li>
								<li> If x.equals(y) is true, x.hashCode() == y.hashCode() is true. </li>
								<li> If x.equals(y) is false, then x.hashCode() == y.hashCode() can be either true or false, but false will tend to create better efficiency. </li>
							</ol>
						</li>
						<li align="left"> transient variables aren't appropriate for equals() and hashCode(). </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Collections </h4>
					<ol align="left">
						<li align="left"> Common collection activities include adding objects, removing objects, verifying object inclusion, retrieving objects, and iterating. </li>
						<li align="left"> Three meanings for "collection":
							<ol>
								<li> collection Represents the data structure in which objects are stored</li>
								<li> Collection java.util interface from which Set and List extend</li>
								<li> Collections A class that holds static collection utility methods</li>
							</ol>
						</li>	
						<li align="left"> Four basic flavors of collections include Lists, Sets, Maps, Queues:
							<ol>
								<li> Lists of things Ordered, duplicates allowed, with an index.</li>
								<li> Sets of things May or may not be ordered and/or sorted; duplicates not allowed.</li>
								<li> Maps of things with keys May or may not be ordered and/or sorted; duplicate keys are not allowed.</li>
								<li> Queues of things to process Ordered by FIFO or by priority.</li>
						</ol>
						</li>
						<li align="left"> Four basic sub-flavors of collections Sorted, Unsorted, Ordered, Unordered.
							<ol>
								<li> Ordered Iterating through a collection in a specific, non-random order.</li>
								<li> Sorted Iterating through a collection in a sorted order.</li>
							</ol>
						</li>
						<li align="left"> Sorting can be alphabetic, numeric, or programmer-defined. </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Key Attributes of Common Collection Classes </h4>
					<ol align="left">
						<li align="left"> ArrayList: Fast iteration and fast random access.</li>
						<li align="left"> Vector: It's like a slower ArrayList, but it has synchronized methods.</li>
						<li align="left"> LinkedList: Good for adding elements to the ends, i.e., stacks and queues.</li>
						<li align="left"> HashSet: Fast access, assures no duplicates, provides no ordering.</li>
						<li align="left"> LinkedHashSet: No duplicates; iterates by insertion order.</li>
						<li align="left"> TreeSet: No duplicates; iterates in sorted order.</li>
						<li align="left"> HashMap: Fastest updates (key/values); allows one null key, many null values.</li>
						<li align="left"> Hashtable: Like a slower HashMap (as with Vector, due to its synchronized methods). No null values or null keys allowed.</li>
						<li align="left"> LinkedHashMap: Faster iterations; iterates by insertion order or last accessed; allows one null key, many null values.</li>
						<li align="left"> TreeMap: A sorted map.</li>
						<li align="left"> PriorityQueue: A to-do list ordered by the elements' priority.</li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Using Collection Classes </h4>
					<ol align="left">
						<li align="left"> Collections hold only Objects, but primitives can be autoboxed.</li>
						<li align="left"> Iterate with the enhanced for, or with an Iterator via hasNext() & next().</li>
						<li align="left"> hasNext() determines if more elements exist; the Iterator does NOT move.</li>
						<li align="left"> next() returns the next element AND moves the Iterator forward.</li>
						<li align="left"> To work correctly, a Map's keys must override equals() and hashCode().</li>
						<li align="left"> Queues use offer() to add an element, poll() to remove the head of the queue, and peek() to look at the head of a queue.</li>
						<li align="left"> As of Java 6 TreeSets and TreeMaps have new navigation methods like floor() and higher().</li>
						<li align="left"> You can create/extend "backed" sub-copies of TreeSets and TreeMaps.</li>
					</ol>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Sorting and Searching Arrays and Lists </h4>
					<ol align="left">
						<li align="left"> Sorting can be in natural order, or via a Comparable or many Comparators.</li>
						<li align="left"> Implement Comparable using compareTo(); provides only one sort order.</li>
						<li align="left"> Create many Comparators to sort a class many ways; implement compare().</li>
						<li align="left"> To be sorted and searched, a List's elements must be comparable.</li>
						<li align="left"> To be searched, an array or List must first be sorted.</li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Utility Classes: Collections and Arrays </h4>
					<ol align="left">
						<li align="left"> Both of these java.util classes provide
							<ol>
								<li> A sort() method. Sort using a Comparator or sort using natural order.</li>
								<li> A binarySearch() method. Search a pre-sorted array or List.</li>
							</ol>
						</li>
						<li align="left"> Arrays.asList() creates a List from an array and links them together.</li>
						<li align="left"> Collections.reverse() reverses the order of elements in a List.</li>
						<li align="left"> Collections.reverseOrder() returns a Comparator that sorts in reverse.</li>
						<li align="left"> Lists and Sets have a toArray() method to create arrays.</li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Generics </h4>
					<ol align="left">
						<li align="left"> Generics let you enforce compile-time type safety on Collections (or other classes and methods declared using generic type parameters).</li>
						<li align="left"> An ArrayList&lt;Animal&gt; can accept references of type Dog, Cat, or any other subtype of Animal (subclass, or if Animal is an interface, implementation).</li>
						<li align="left"> When using generic collections, a cast is not needed to get (declared type) elements out of the collection. With non-generic collections, a cast is required: <br/> List&lt;String&gt; gList = new ArrayList&lt;String&gt;(); <br/> List list = new ArrayList(); <br/> // more code <br/> String s = gList.get(0); // no cast needed <br/> String s = (String)list.get(0); // cast required </li>
						<li align="left"> You can pass a generic collection into a method that takes a non-generic collection, but the results may be disastrous. The compiler can't stop the method from inserting the wrong type into the previously type safe collection. </li>
						<li align="left"> If the compiler can recognize that non-type-safe code is potentially endangering something you originally declared as type-safe, you will get a compiler warning. For instance, if you pass a List&lt;String&gt; into a method declared as <br/> void foo(List aList) { aList.add(anInteger); } <br/> You'll get a warning because add() is potentially "unsafe". </li>
						<li align="left"> "Compiles without error" is not the same as "compiles without warnings." A compilation warning is not considered a compilation error or failure. </li>
						<li align="left"> Generic type information does not exist at runtime—it is for compile-time safety only. Mixing generics with legacy code can create compiled code that may throw an exception at runtime. </li>
						<li align="left"> Polymorphic assignments applies only to the base type, not the generic type parameter. You can say <br/> List&lt;Animal&gt; aList = new ArrayList&lt;Animal&gt;(); // yes <br/> You can't say <br/> List&lt;Animal&gt; aList = new ArrayList&lt;Dog&gt;(); // no </li>
						<li align="left"> The polymorphic assignment rule applies everywhere an assignment can be made. The following are NOT allowed: <br/> void foo(List&lt;Animal&gt; aList) { } // cannot take a List&lt;Dog&gt; <br/> List&lt;Animal&gt; bar() { } // cannot return a List&lt;Dog&gt; </li>
						<li align="left"> Wildcard syntax allows a generic method, accept subtypes (or supertypes) of the declared type of the method argument: <br/> void addD(List&lt;Dog&gt; d) {} // can take only &lt;Dog&gt; <br/> void addD(List&lt;? extends Dog&gt;) {} // take a &lt;Dog&gt; or &lt;Beagle&gt; </li>
						<li align="left"> The wildcard keyword extends is used to mean either "extends" or "implements." So in &lt;? extends Dog&gt;, Dog can be a class or an interface. </li>
						<li align="left"> When using a wildcard, List&lt;? extends Dog&gt;, the collection can be accessed but not modified. </li>
						<li align="left"> When using a wildcard, List&lt;?&gt;, any generic type can be assigned to the reference, but for access only, no modifications. </li>
						<li align="left"> List&lt;Object&gt; refers only to a List&lt;Object&gt;, while List&lt;?&gt; or List&lt;? extends Object&gt; can hold any type of object, but for access only. </li>
						<li align="left"> Declaration conventions for generics use T for type and E for element: <br/> public interface List&lt;E&gt; // API declaration for List <br/> boolean add(E o) // List.add() declaration </li>
						<li align="left"> The generics type identifier can be used in class, method, and variable declarations: <br/> class Foo<t> { } // a class <br/> T anInstance; // an instance variable <br/> Foo(T aRef) {} // a constructor argument <br/> void bar(T aRef) {} // a method argument <br/> T baz() {} // a return type <br/> The compiler will substitute the actual type. </li>
						<li align="left"> You can use more than one parameterized type in a declaration: public class UseTwo&lt;T, X&gt; { } </li>
						<li align="left"> You can declare a generic method using a type not defined in the class: <br/> public &lt;T&gt; void makeList(T t) { } <br/> is NOT using T as the return type. This method has a void return type, but to use T within the method's argument you must declare the &lt;T&gt;, which happens before the return type </li>
					</ol>
                </div>
            </div>
        </div>				
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Inner Classes </h4>
					<ol align="left">
						<li align="left"> A "regular" inner class is declared inside the curly braces of another class, but outside any method or other code block. </li>
						<li align="left"> An inner class is a full-fledged member of the enclosing (outer) class, so it can be marked with an access modifier as well as the abstract or final modifiers. (Never both abstract and final together— remember that abstract must be subclassed, whereas final cannot be subclassed). </li>
						<li align="left"> An inner class instance shares a special relationship with an instance of the enclosing class. This relationship gives the inner class access to all of the outer class's members, including those marked private. </li>
						<li align="left"> To instantiate an inner class, you must have a reference to an instance of the outer class. </li>
						<li align="left"> From code within the enclosing class, you can instantiate the inner class using only the name of the inner class, as follows: <br/> MyInner mi = new MyInner(); </li>
						<li align="left"> From code outside the enclosing class's instance methods, you can instantiate the inner class only by using both the inner and outer class names, and a reference to the outer class as follows: <br/> MyOuter mo = new MyOuter(); <br/> MyOuter.MyInner inner = mo.new MyInner(); </li>
						<li align="left"> From code within the inner class, the keyword this holds a reference to the inner class instance. To reference the outer this (in other words, the instance of the outer class that this inner instance is tied to) precede the keyword this with the outer class name as follows: <br/> MyOuter.this; </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Method Local Inner Classes  </h4>
					<ol align="left">
						<li align="left"> A method-local inner class is defined within a method of the enclosing class. </li>
						<li align="left"> For the inner class to be used, you must instantiate it, and that instantiation must happen within the same method, but after the class definition code. </li>
						<li align="left"> A method-local inner class cannot use variables declared within the method (including parameters) unless those variables are marked final. </li>
						<li align="left"> The only modifiers you can apply to a method-local inner class are abstract and final. (Never both at the same time, though.) </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Anonymous Inner Classes </h4>
					<ol align="left">
						<li align="left"> Anonymous inner classes have no name, and their type must be either a subclass of the named type or an implementer of the named interface.
						<li align="left"> An anonymous inner class is always created as part of a statement; don't forget to close the statement after the class definition with a curly brace. This is a rare case in Java, a curly brace followed by a semicolon.
						<li align="left"> Because of polymorphism, the only methods you can call on an anonymous inner class reference are those defined in the reference variable class (or interface), even though the anonymous class is really a subclass or implementer of the reference variable type.
						<li align="left"> An anonymous inner class can extend one subclass or implement one interface. Unlike non-anonymous classes (inner or otherwise), an anonymous inner class cannot do both. In other words, it cannot both extend a class and implement an interface, nor can it implement more than one interface.
						<li align="left"> An argument-defined inner class is declared, defined, and automatically instantiated as part of a method invocation. The key to remember is that the class is being defined within a method argument, so the syntax will end the class definition with a curly brace, followed by a closing parenthesis to end the method call, followed by a semicolon to end the statement: });
						
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Static Nested Classes </h4>
					<ol align="left">
						<li align="left"> Static nested classes are inner classes marked with the static modifier. </li>
						<li align="left"> A static nested class is not an inner class, it's a top-level nested class. </li>
						<li align="left"> Because the nested class is static, it does not share any special relationship with an instance of the outer class. In fact, you don't need an instance of the outer class to instantiate a static nested class. </li>
						<li align="left"> Instantiating a static nested class requires using both the outer and nested class names as follows: <br/> BigOuter.Nested n = new BigOuter.Nested(); </li>
						<li align="left"> A static nested class cannot access non-static members of the outer class, since it does not have an implicit reference to any outer instance (in other words, the nested class instance does not get an outer this reference). </li>
		
					</ol>
                </div>
            </div>
        </div>		

		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Defining, Instantiating, and Starting Threads </h4>
					<ol align="left">
						<li align="left"> Threads can be created by extending Thread and overriding the public void run() method. </li>
						<li align="left"> Thread objects can also be created by calling the Thread constructor that takes a Runnable argument. The Runnable object is said to be the target of the thread. </li>
						<li align="left"> You can call start() on a Thread object only once. If start() is called more than once on a Thread object, it will throw a RuntimeException. </li>
						<li align="left"> It is legal to create many Thread objects using the same Runnable object as the target. </li>
						<li align="left"> When a Thread object is created, it does not become a thread of execution until its start() method is invoked. When a Thread object exists but hasn't been started, it is in the new state and is not considered alive. </li>
					</ol>
                </div>
            </div>
        </div>	
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Transitioning Between Thread States </h4>
					<ol align="left">
						<li align="left"> Once a new thread is started, it will always enter the runnable state. </li>
						<li align="left"> The thread scheduler can move a thread back and forth between the runnable state and the running state. </li>
						<li align="left"> For a typical single-processor machine, only one thread can be running at a time, although many threads may be in the runnable state. </li>
						<li align="left"> There is no guarantee that the order in which threads were started determines the order in which they'll run. </li>
						<li align="left"> There's no guarantee that threads will take turns in any fair way. It's up to the thread scheduler, as determined by the particular virtual machine implementation. If you want a guarantee that your threads will take turns regardless of the underlying JVM, you can use the sleep() method. This prevents one thread from hogging the running process while another thread starves. (In most cases, though, yield() works well enough to encourage your threads to play together nicely.) </li>
						<li align="left"> A running thread may enter a blocked/waiting state by a wait(), sleep(), or join() call. </li>
						<li align="left"> A running thread may enter a blocked/waiting state because it can't acquire the lock for a synchronized block of code. </li>
						<li align="left"> When the sleep or wait is over, or an object's lock becomes available, the thread can only reenter the runnable state. It will go directly from waiting to running (well, for all practical purposes anyway). </li>
						<li align="left"> A dead thread cannot be started again </li>
					</ol>
                </div>
            </div>
        </div>		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Sleep,Yield, and Join </h4>
					<ol align="left">
						<li align="left"> Sleeping is used to delay execution for a period of time, and no locks are released when a thread goes to sleep. </li>
						<li align="left"> A sleeping thread is guaranteed to sleep for at least the time specified in the argument to the sleep() method (unless it's interrupted), but there is no guarantee as to when the newly awakened thread will actually return to running. </li>
						<li align="left"> The sleep() method is a static method that sleeps the currently executing thread's state. One thread cannot tell another thread to sleep. </li>
						<li align="left"> The setPriority() method is used on Thread objects to give threads a priority of between 1 (low) and 10 (high), although priorities are not guaranteed, and not all JVMs recognize 10 distinct priority levels—some levels may be treated as effectively equal. </li>
						<li align="left"> If not explicitly set, a thread's priority will have the same priority as the priority of the thread that created it. </li>
						<li align="left"> The yield() method may cause a running thread to back out if there are runnable threads of the same priority. There is no guarantee that this will happen, and there is no guarantee that when the thread backs out there will be a different thread selected to run. A thread might yield and then immediately reenter the running state. </li>
						<li align="left"> The closest thing to a guarantee is that at any given time, when a thread is running it will usually not have a lower priority than any thread in the runnable state. If a low-priority thread is running when a high-priority thread enters runnable, the JVM will usually preempt the running low-priority thread and put the high-priority thread in. </li>
						<li align="left"> When one thread calls the join() method of another thread, the currently running thread will wait until the thread it joins with has completed. Think of the join() method as saying, "Hey thread, I want to join on to the end of you. Let me know when you're done, so I can enter the runnable state."	 </li>
					</ol>
                </div>
            </div>
        </div>			
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Concurrent Access Problems and Synchronized Threads </h4>
					<ol align="left">
						<li align="left"> synchronized methods prevent more than one thread from accessing an object's critical method code simultaneously. </li>
						<li align="left"> You can use the synchronized keyword as a method modifier, or to start a synchronized block of code. </li>
						<li align="left"> To synchronize a block of code (in other words, a scope smaller than the whole method), you must specify an argument that is the object whose lock you want to synchronize on. </li>
						<li align="left"> While only one thread can be accessing synchronized code of a particular instance, multiple threads can still access the same object's unsynchronized code. </li>
						<li align="left"> When a thread goes to sleep, its locks will be unavailable to other threads. </li>
						<li align="left"> static methods can be synchronized, using the lock from the java.lang.Class instance representing that class. </li>
					</ol>
                </div>
            </div>
        </div>				
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Communicating with Objects by Waiting and Notifying </h4>
					<ol align="left">
						<li align="left"> The wait() method lets a thread say, "there's nothing for me to do now, so put me in your waiting pool and notify me when something happens that I care about." Basically, a wait() call means "wait me in your pool," or "add me to your waiting list." </li>
						<li align="left"> The notify() method is used to send a signal to one and only one of the threads that are waiting in that same object's waiting pool. </li>
						<li align="left"> The notify() method can NOT specify which waiting thread to notify. </li>
						<li align="left"> The method notifyAll() works in the same way as notify(), only it sends the signal to all of the threads waiting on the object. </li>
						<li align="left"> All three methods—wait(), notify(), and notifyAll()—must be called from within a synchronized context! A thread invokes wait() or notify() on a particular object, and the thread must currently hold the lock on that object. </li>
					</ol>
                </div>
            </div>
        </div>		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Deadlocked Threads </h4>
					<ol align="left">
						<li align="left"> Deadlocking is when thread execution grinds to a halt because the code is waiting for locks to be removed from objects. </li>
						<li align="left"> Deadlocking can occur when a locked object attempts to access another locked object that is trying to access the first locked object. In other words both threads are waiting for each other's locks to be released; therefore, the locks will never be released. </li>
						<li align="left"> Deadlocking is bad. Don't do it. </li>
					</ol>
                </div>
            </div>
        </div>		
			
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Using javac and java </h4>
					<ol align="left">
						<li align="left"> Use -d to change the destination of a class file when it's first generated by the javac command. </li>
						<li align="left"> The -d option can build package-dependent destination classes on-the-fly if the root package directory already exists. </li>
						<li align="left"> Use the -D option in conjunction with the java command when you want to set a system property. </li>
						<li align="left"> System properties consist of name=value pairs that must be appended directly behind the -D, for example, java -Dmyproperty=myvalue. </li>
						<li align="left"> Command-line arguments are always treated as Strings. </li>
						<li align="left"> The java command-line argument 1 is put into array element 0, argument 2 is put into element 1, and so on. </li>
					</ol>
                </div>
            </div>
        </div>		
			
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Searching with java and javac </h4>
					<ol align="left">
						<li align="left"> Both java and javac use the same algorithms to search for classes. </li>
						<li align="left"> Searching begins in the locations that contain the classes that come standard with J2SE. </li>
						<li align="left"> Users can define secondary search locations using classpaths. </li>
						<li align="left"> Default classpaths can be defined by using OS environment variables. </li>
						<li align="left"> A classpath can be declared at the command line, and it overrides the default classpath. </li>
						<li align="left"> A single classpath can define many different search locations. </li>
						<li align="left"> In Unix classpaths, forward slashes (/) are used to separate the directories that make up a path. In Windows, backslashes (\) are used. </li>
						<li align="left"> In Unix, colons (:) are used to separate the paths within a classpath. In Windows, semicolons (;) are used. </li>
						<li align="left"> In a classpath, to specify the current directory as a search location, use a dot (.) </li>
						<li align="left"> In a classpath, once a class is found, searching stops, so the order of locations to search is important. </li>
					</ol>
                </div>
            </div>
        </div>		
			
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Packages and Searching </h4>
					<ol align="left">
						<li align="left"> When a class is put into a package, its fully qualified name must be used. </li>
						<li align="left"> An import statement provides an alias to a class's fully qualified name. </li>
						<li align="left"> In order for a class to be located, its fully qualified name must have a tight relationship with the directory structure in which it resides. </li>
						<li align="left"> A classpath can contain both relative and absolute paths. </li>
						<li align="left"> An absolute path starts with a / or a \. </li>
						<li align="left"> Only the final directory in a given path will be searched. </li>
					</ol>
                </div>
            </div>
        </div>		
			
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left">JAR Files </h4>
					<ol align="left">
						<li align="left"> An entire directory tree structure can be archived in a single JAR file. </li>
						<li align="left"> JAR files can be searched by java and javac. </li>
						<li align="left"> When you include a JAR file in a classpath, you must include not only the directory in which the JAR file is located, but the name of the JAR file too. </li>
						<li align="left"> For testing purposes, you can put JAR files into .../jre/lib/ext, which is somewhere inside the Java directory tree on your machine. </li>
					</ol>
                </div>
            </div>
        </div>		
			
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Static Imports </h4>
					<ol align="left">
						<li align="left"> You must start a static import statement like this: import static </li>
						<li align="left"> You can use static imports to create shortcuts for static members (static variables, constants, and methods) of any class. </li>
					</ol>
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