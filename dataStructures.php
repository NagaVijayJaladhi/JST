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
                        <li class="breadcrumb-item"><a href="#">Home</a></p>
                        <li class="breadcrumb-item"><a href="#">Java</a></p>
                        <li class="breadcrumb-item"><a href="#">J2SE</a></p>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Data Structures </p>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Data Structures </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-4" align="justify"> Data structures are fundamental to any programming language. The choice of a particular data structure has a significant impact on the functionality and performance of Java applications, thus it is worthwhile to master data structures in Java. </p>
				    <p class="mb-2" align="justify"> A data structure is defined as a format for arranging, processing, accessing, and storing data. Data structures are the combination of both simple and complex forms, all of which are made to organise data for a certain use. Users find it simple to access the data they need and use it appropriately thanks to data structures. </p>
				    <p class="mb-4" align="justify"> Data Structure in java is defined as the collection of data pieces that offers an effective means of storing and organising data in a computer. Linked List, Stack, Queue, and arrays are a few examples of java data structures. </p>
				</div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of Data Structures </h4>
					<p class="mb-2" align="justify"> 1. Efficiency </p>
					<p class="mb-2" align="justify"> 2. Reusability </p>
					<p class="mb-2" align="justify"> 3. Processing Speed </p>
					<p class="mb-2" align="justify"> 4. Abstraction </p>
					<p class="mb-2" align="justify"> 5. Data Searching </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Classification of Data Structures </h4>
					<p class="mb-2" align="justify"> Static Data Structures are the Data structures whose size is declared and fixed at Compile Time and cannot be changed later are called Static Data structures.  </p>
					<p class="mb-2" align="justify"> Dynamic Data Structures are the Data Structures whose size is not fixed at compile time and can be decided at runtime depending upon requirements are called Dynamic Data structures.  </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Data Structures in Java </h4>
					<p class="mb-2" align="justify"> 1. Primitive Data Structures </p>
					<p class="mb-2" align="justify"> 2. Non-primitive Data Structures </p>
					</ol>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Primitive Data Structures </h4>
					<p class="mb-2" align="justify"> Primitive data Structures are also called Primitive Data Types. byte, short,  int, float, char, boolean, long, and double are primitive Data types. </p>
					</ol>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Non-primitive data Structures </h4>
					<p class="mb-2" align="justify"> Non-primitive data structures are user-defined structures built from primitive data types, enabling the storage and manipulation of complex data, like arrays, linked lists, stacks, queues, trees, and graphs </p>
					<p class="mb-2" align="justify"> 1. Linear Data Structures </p>
					<p class="mb-2" align="justify"> 2. Non-Linear Data Structures </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Linear Data Structures </h4>
					<p class="mb-2" align="justify"> The elements arranged in a linear fashion are called Linear Data Structures. Here, each element is connected to one other element only. Linear Data Structures are as follows: </p>
					<p class="mb-2" align="justify"> 1. Arrays </p>
					<p class="mb-2" align="justify"> 2. Stack </p>
					<p class="mb-2" align="justify"> 3. Queue </p>
					<p class="mb-2" align="justify"> 4. Linked List  </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Non-Linear Data Structures  </h4>
					<p class="mb-2" align="justify"> The elements arranged in a non-linear fashion are called Non-Linear Data Structures. Here, each element is connected to n-other elements. Non-Linear Data Structures are as follows: </p>
					<p class="mb-2" align="justify"> 1. Trees </p>
					<p class="mb-2" align="justify"> 2. Heap </p>
					<p class="mb-2" align="justify"> 3. Hash </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Array </h4>
					<p class="mb-2" align="justify"> Array is a linear data structure that stores a collection of elements of the same data type. Elements are allocated contiguous memory, allowing for constant-time access. Each element has a unique index number. </p>
					
					<p class="mb-2" align="justify"> An array is the simplest data structure where a collection of similar data elements takes place and each data element can be accessed directly by only using its index number. Arrays are divided by two types : </p>
					
					<p class="mb-2" align="justify"> 1. Single Dimensional Array </p>
					<p class="mb-2" align="justify"> 2. Multi Dimensional Array </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Array Advantages </h4>
					<p class="mb-2" align="justify"> 1. Random access </p>
					<p class="mb-2" align="justify"> 2. Easy sorting and iteration </p>
					<p class="mb-2" align="justify"> 3. Replacement of multiple variables </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Array Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Size is fixed </p>
					<p class="mb-2" align="justify"> 2. Difficult to insert and delete </p>
					<p class="mb-2" align="justify"> 3. If capacity is more and occupancy less, most of the array gets wasted  </p>
					<p class="mb-2" align="justify"> 4. Needs contiguous memory to get allocated </p>
                </div>
            </div>
        </div>
		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Array Applications </h4>
					<p class="mb-2" align="justify"> 1. For storing information in a linear fashion </p>
					<p class="mb-2" align="justify"> 2. Suitable for applications that require frequent searching </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Linked List </h4>
					<p class="mb-2" align="justify"> Linked list is a linear data structure that stores data in nodes, which are connected by pointers. Unlike arrays, nodes of linked lists are not stored in contiguous memory locations and can only be accessed sequentially, starting from the head of list. Linked list data structure helps the required objects to be arranged in a linear order.Linked List are divided by three types : </p>
					
					<p class="mb-2" align="justify"> 1. Singly-linked List </p>
					<p class="mb-2" align="justify"> 2. Doubly Linked List </p>
					<p class="mb-2" align="justify"> 3. Circular Linked List </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Linked List Advantages </h4>
					<p class="mb-2" align="justify"> 1. Dynamic in size </p>
					<p class="mb-2" align="justify"> 2. No wastage as capacity and size is always equal </p>
					<p class="mb-2" align="justify"> 3. Easy insertion and deletion as 1 link manipulation is required </p>
					<p class="mb-2" align="justify"> 4. Efficient memory allocation </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Linked List Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. If head Node is lost, the linked list is lost </p>
					<p class="mb-2" align="justify"> 2. No random access is possible </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Linked List Applications </h4>
					<p class="mb-2" align="justify"> 1. Suitable where memory is limited  </p>
					<p class="mb-2" align="justify"> 2. Suitable for applications that require frequent insertion and deletion </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Stack </h4>
					<p class="mb-2" align="justify"> A stack is a representation of nodes. There are two components to each node: data and next (storing address of next node). Each node’s data portion contains the assigned value, and its next pointer directs the user to the node that has the stack’s subsequent item. The highest node in the stack is referred to as the top. </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Stack </h4>
					<p class="mb-2" align="justify"> 1. Linear Data Structures using Java </p>
					<p class="mb-2" align="justify"> 2. Follows LIFO: Last In First Out </p>
					<p class="mb-2" align="justify"> 3. Only the top elements are available to be accessed </p>
					<p class="mb-2" align="justify"> 4. Insertion and deletion takes place from the top </p>
					<p class="mb-2" align="justify"> 5. All operation works in constant time i.e, O(1) </p>
					<p class="mb-2" align="justify"> Example : A stack of plates, chairs, etc </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4 Major Operations using Stack </h4>
					<p class="mb-2" align="justify"> 1. push(ele) – used to insert element at top </p>
					<p class="mb-2" align="justify"> 2. pop() – removes the top element from stack </p>
					<p class="mb-2" align="justify"> 3. isEmpty() – returns true is stack is empty </p>
					<p class="mb-2" align="justify"> 4. peek() – to get the top element of the stack </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Stack Advantages </h4>
					<p class="mb-2" align="justify"> 1. Maintains data in a LIFO manner </p>
					<p class="mb-2" align="justify"> 2. The last element is readily available for use </p>
					<p class="mb-2" align="justify"> 3. All operations are of O(1) complexity </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Stack Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Manipulation is restricted to the top of the stack </p>
					<p class="mb-2" align="justify"> 2. Not much flexible </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Stack Applications </h4>
					<p class="mb-2" align="justify"> 1. Recursion  </p>
					<p class="mb-2" align="justify"> 2. Parsing </p>
					<p class="mb-2" align="justify"> 3. Browser  </p>
					<p class="mb-2" align="justify"> 4. Editors </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Queue </h4>
					<p class="mb-2" align="justify"> The queue is called an abstract data structure. Data is always added to one end (enqueued), and removed from the other (dequeue). Queue uses the First-In-First-Out approach and data item that was stored initially will be accessed first in a queue. </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Queue </h4>
					<p class="mb-2" align="justify"> 1. Linear Data Structures using Java </p>
					<p class="mb-2" align="justify"> 2. Follows FIFO: First In First Out </p>
					<p class="mb-2" align="justify"> 3. Insertion can take place from the rear end. </p>
					<p class="mb-2" align="justify"> 4. Deletion can take place from the front end. </p>
					<p class="mb-2" align="justify"> 5. All operation works in constant time i.e, O(1) </p>
					<p class="mb-2" align="justify"> Example : Queue at ticket counters, bus station </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> 4 Major Operations using Queue </h4>
					<p class="mb-2" align="justify"> 1. enqueue(ele) – used to insert element at top </p>
					<p class="mb-2" align="justify"> 2. dequeue() – removes the top element from queue </p>
					<p class="mb-2" align="justify"> 3. peekfirst() – to get the first element of the queue </p>
					<p class="mb-2" align="justify"> 4. peeklast() – to get the last element of the queue </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Queue Advantages </h4>
					<p class="mb-2" align="justify"> 1. Maintains data in FIFO manner </p>
					<p class="mb-2" align="justify"> 2. Insertion from beginning and deletion from end takes O(1) time </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Variations in Queue </h4>
					<p class="mb-2" align="justify"> Two popular variations of queues are Circular queues and Dequeues. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Queue Applications </h4>
					<p class="mb-2" align="justify"> 1. Scheduling  </p>
					<p class="mb-2" align="justify"> 2. Maintaining playlist </p>
					<p class="mb-2" align="justify"> 3. Interrupt handling  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Tree </h4>
					<p class="mb-2" align="justify"> Tree is a non-linear, hierarchical data structure consisting of nodes connected by edges, with a top node called the root and nodes having child nodes. It is widely used in file systems, databases, decision-making algorithms, etc. </p>
					<p class="mb-2" align="justify"> 1. Binary Tree  </p>
					<p class="mb-2" align="justify"> 2. Binary Search Tree </p>
					<p class="mb-2" align="justify"> 3. AVL Tree  </p>
					<p class="mb-2" align="justify"> 4. Red-Black Tree  </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Tree </h4>
					<p class="mb-2" align="justify"> The branches of the tree are made up of up to two child nodes for each node. The left and right nodes are the common names for the two youngsters. Child nodes make references to their parents, whereas parent nodes are nodes with children. </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Binary Tree </h4>
					<p class="mb-2" align="justify"> 1. Hierarchical  Data Structure </p>
					<p class="mb-2" align="justify"> 2. The topmost element is known as the root of the tree </p>
					<p class="mb-2" align="justify"> 3. Every Node can have at most 2 children in the binary tree </p>
					<p class="mb-2" align="justify"> 4. Can access elements randomly using index </p>
					<p class="mb-2" align="justify"> Example : File system hierarchy </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Common Traversal Methods Binary Tree </h4>
					<p class="mb-2" align="justify"> 1. preorder(root) : print-left-right </p>
					<p class="mb-2" align="justify"> 2. postorder(root) : left-right-print  </p>
					<p class="mb-2" align="justify"> 3. inorder(root) : left-print-right </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Tree Advantages </h4>
					<p class="mb-2" align="justify"> 1. Can represent data with some relationship </p>
					<p class="mb-2" align="justify"> 2. Insertion and search are much more efficient </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Tree Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Sorting is difficult </p>
					<p class="mb-2" align="justify"> 2. Not much flexible </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Tree Applications </h4>
					<p class="mb-2" align="justify"> 1. File system hierarchy  </p>
					<p class="mb-2" align="justify"> 2. Multiple variations of the binary tree have a wide variety of applications </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Search Tree </h4>
					<p class="mb-2" align="justify"> The binary search tree is an advanced algorithm which is used to analyse the nodes, branches and many more. The BST was developed using the architecture of a fundamental binary search algorithm, allowing for quicker node lookups, insertions, and removals. </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Binary Search Tree </h4>
					<p class="mb-2" align="justify"> 1. A binary tree with the additional restriction </p>
					<p class="mb-2" align="justify"> 2. Restriction the left child must always be less than the root node </p>
					<p class="mb-2" align="justify"> 3. Restriction the right child must always be greater than the root node </p>
					<p class="mb-2" align="justify"> 4. Insertion, Deletion, Search is much more efficient than a binary tree </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Search Tree Advantages </h4>
					<p class="mb-2" align="justify"> 1. Maintains order in elements </p>
					<p class="mb-2" align="justify"> 2. Can easily find the min and max Nodes in the tree </p>
					<p class="mb-2" align="justify"> 3. In order, traversal gives sorted elements </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Search Tree Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Random access is not possible </p>
					<p class="mb-2" align="justify"> 2. Ordering adds complexity </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Binary Search Tree Applications </h4>
					<p class="mb-2" align="justify"> 1. Suitable for sorted hierarchical data </p>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Heap </h4>
					<p class="mb-2" align="justify"> Heap is a complete binary tree data structure that satisfies the heap property. Heaps are usually used to implement priority queues, where the smallest or largest element is always at the root of the tree. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Heap </h4>
					<p class="mb-2" align="justify"> 1. Binary Heap can be visualized array as a complete binary tree </p>
					<p class="mb-2" align="justify"> 2. Arr[0] element will be treated as root </p>
					<p class="mb-2" align="justify"> 3. length(A) – size of array </p>
					<p class="mb-2" align="justify"> 4. heapSize(A) – size of heap </p>
					<p class="mb-2" align="justify"> 5. Generally used when we are dealing with minimum and maximum elements </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Heap Advantages </h4>
					<p class="mb-2" align="justify"> 1. Can be of 2 types: min heap and max heap </p>
					<p class="mb-2" align="justify"> 2. Min heap keeps the smallest element and top and max keep the largest </p>
					<p class="mb-2" align="justify"> 3. O(1) for dealing with min or max elements </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Heap Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Random access is not possible </p>
					<p class="mb-2" align="justify"> 2. Only min or max element is available for accessibility </p>
                </div>
            </div>
        </div>
		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Heap Applications </h4>
					<p class="mb-2" align="justify"> 1. Suitable for applications dealing with priority </p>
					<p class="mb-2" align="justify"> 2. Scheduling algorithm </p>
					<p class="mb-2" align="justify"> 3. caching </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hashing </h4>
					<p class="mb-2" align="justify"> Hashing is a technique that generates a fixed-size output (hash value) from an input of variable size using mathematical formulas called hash functions. Hashing is commonly used in data structures for efficient searching, insertion and deletion and plays a key role in software applications like secure data retrieval, password storage, cryptography, digital signatures, etc. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Features of Hashing </h4>
					<p class="mb-2" align="justify"> 1. Uses special Hash function </p>
					<p class="mb-2" align="justify"> 2. A hash function maps an element to an address for storage </p>
					<p class="mb-2" align="justify"> 3. This provides constant-time access </p>
					<p class="mb-2" align="justify"> 4. Collision resolution techniques handle collision </p>
					<p class="mb-2" align="justify"> 5. Collision resolution technique Chaining </p>
					<p class="mb-2" align="justify"> 6. Collision resolution technique Open Addressing </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hashing Advantages </h4>
					<p class="mb-2" align="justify"> 1. The hash function helps in fetching elements in constant time </p>
					<p class="mb-2" align="justify"> 2. An efficient way to store elements </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hashing Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Collision resolution increases complexity </p>
                </div>
            </div>
        </div>
		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Hashing Applications </h4>
					<p class="mb-2" align="justify"> 1. Suitable for the application needs constant time fetching </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Graph </h4>
					<p class="mb-2" align="justify"> Basically it is a group of edges and vertices. Graph representation G(V, E); where V(G) represents a set of vertices and E(G) represents a set of edges. The graph can be directed or undirected. The graph can be connected or disjoint </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Graph Advantages </h4>
					<p class="mb-2" align="justify"> 1. finding connectivity </p>
					<p class="mb-2" align="justify"> 2. Shortest path </p>
					<p class="mb-2" align="justify"> 3. min cost to reach from 1 pt to other </p>
					<p class="mb-2" align="justify"> 4. Min spanning tree </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Graph Disadvantages </h4>
					<p class="mb-2" align="justify"> 1. Storing graph(Adjacency list and Adjacency matrix) can lead to complexities. </p>
                </div>
            </div>
        </div>
		
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Graph Applications </h4>
					<p class="mb-2" align="justify"> 1. Suitable for a circuit network </p>
					<p class="mb-2" align="justify"> 2. Suitable for applications like Facebook, LinkedIn, etc </p>
					<p class="mb-2" align="justify"> 3. Medical science </p>
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