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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Collection Framework </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Collection Framework </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Collection Refresher </h4>
                    <p class="mb-4" align="justify"> The Collections Framework in Java, which took shape with the release of JDK 1.2 and was expanded in 1.4 and again in Java 5, and yet again in Java 6, gives you Lists, Sets, Maps and Queues to satisfy most of your coding needs. They've been tried, tested, and tweaked. Pick the best one for your job and you will get at the least reasonable performance. And when you need something a little more custom, the Collections Framework in the java.util package is loaded with interfaces and utilities.</p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> So What Do You Do with a Collection ? </h4>
                    <p class="mb-2" align="justify"> There are a few basic operations you'll normally use with collections : </p>
					<table class="table table-bordered">
						<tbody>
							<tr> <td> 1 </td> <td align="left"> Add objects to the collection. </td> </tr> 
							<tr> <td> 2 </td> <td align="left"> Remove objects from the collection. </td> </tr> 					
							<tr> <td> 3 </td> <td align="left"> Retrieve an object from the collection (without removing it) </td> </tr> 
							<tr> <td> 4 </td> <td align="left"> Find out if an object (or group of objects) is in the collection. </td> </tr> 
							<tr> <td> 5 </td> <td align="left"> Iterate through the collection, looking at each element (object) one after another. </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>		
	
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Key Interfaces and Classes of the Collections Framework </h4>
                    <p class="mb-2" align="justify"> The collections API begins with a group of interfaces, but also gives you a truckload of concrete classes. The core interfaces you need to know for the developments are the following Nine : </p>
					<table class="table table-bordered">
						<tbody>
							<tr> <td> Collection </td> <td> Set </td> <td> SortedSet </td> </tr>
							<tr> <td> List </td> <td> Map </td> <td> SortedMap </td> </tr>
							<tr> <td> Queue </td> <td> NavigableSet </td> <td> NavigableMap </td> </tr> 
						</tbody> 
					</table> <br/>
					<p class="mb-4" align="justify"> The core concrete implementation classes you need to know for the developments are the following Thirteen : </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Map </b> </th> <th scope="col"> <b> Set </b> </th> <th scope="col"> <b> List </b> </th> <th scope="col"> <b> Queues </b> </th> <th scope="col"> <b> Utilities </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td> HashMap </td> <td> HashSet </td> <td> ArrayList </td> <td> PriorityQueue </td> <td> Collections </td> </tr>
							<tr> <td> Hashtable </td> <td> LinkedHashSet </td> <td> Vector </td> <td> </td> <td> Arrays </td> </tr>
							<tr> <td> TreeMap </td> <td> TreeSet </td> <td> LinkedList </td> <td> </td> <td> </td> </tr> 
							<tr> <td> LinkedHashMap </td> <td>  </td> <td>  </td> <td> </td> <td> </td> </tr> 
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Collection with a Capital " <b> C </b> " ? </h4>
                    <p class="mb-2" align="justify"> There are really three overloaded uses of the word "<b> Collection </b> " : </p>
					
					<table class="table table-bordered">
						<tbody>
							<tr> <td> 1 </td> <td align="left"> <b> collection (Lowercase c) </b>, which represents any of the data structures in which objects are stored and iterated over.</td> </tr> 
							<tr> <td> 2 </td> <td align="left"> <b> Collection (Capital C) </b>, which is actually the java.util.Collection interface from which Set, List, and Queue extend. (That is right, extend, not implement. There are no direct implementations of Collection.) </td> </tr>		
							<tr> <td> 3 </td> <td align="left"> <b> Collections (Capital C and ends with s) </b> is the java.util.Collections class that holds a pile of static utility methods for use with collections. </td> </tr> 
						</tbody> 
					</table> <br/>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> The structure of List, Set, and Map Interfaces </h4>
                    <p class="mb-2" align="justify"> Collections come in four basic flavors : </p>	
					<table class="table table-bordered">
						<tbody>
							<tr> <td align="left"> <b> Lists </b>  </td> <td align="left"> Lists of things (classes that implement List). </td> </tr> 
							<tr> <td align="left"> <b> Sets </b>  </td> <td align="left"> Unique things (classes that implement Set). </td> </tr> 					
							<tr> <td align="left"> <b> Maps </b>  </td> <td align="left"> Things with a unique ID (classes that implement Map). </td> </tr> 
							<tr> <td align="left"> <b> Queues </b>  </td> <td align="left"> Things arranged by the order in which they are to be processed. </td> </tr>  
						</tbody> 
					</table>
					<p class="mb-4" align="justify"> But there are Sub Flavors within those four flavors of collections : </p>
					<table class="table table-bordered">
						<tbody>
							<tr> <td> Sorted </td> <td> Unsorted </td> <td> Ordered </td> <td> Unordered </td> </tr>
						</tbody> 
					</table> <br/>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List Interface </h4>
                    <p class="mb-2" align="justify"> A List cares about the index. The one thing that List has that non-lists don't have is a set of methods related to the index. All three List implementations are ordered by index position—a position that you determine either by setting an object at a specific index or by adding it without specifying position, in which case the object is added to the end. The three List implementations are described in the following sections. </p>
                    <p class="mb-2" align="justify"> <b> 1. ArrayList : </b> ArrayList gives you fast iteration and fast random access. To state the obvious: it is an ordered collection (by index), but not sorted. You might want to know that as of version 1.4, ArrayList now implements the new RandomAccess interface—a marker interface (meaning it has no methods) that says, "this list supports fast (generally constant time) random access." Choose this over a LinkedList when you need fast iteration but aren't as likely to be doing a lot of insertion and deletion. </p>
					<p class="mb-2" align="justify"> <b> 2. Vector : </b> Vector is a holdover from the earliest days of Java; Vector and Hashtable were the two original collections, the rest were added with Java 2 versions 1.2 and 1.4. A Vector is basically the same as an ArrayList, but Vector methods are synchronized for thread safety. You'll normally want to use ArrayList instead of Vector because the synchronized methods add a performance hit you might not need. And if you do need thread safety, there are utility methods in class Collections that can help. Vector is the only class other than ArrayList to implement RandomAccess. </p>					
					<p class="mb-2" align="justify"> <b> 3. LinkedList : </b> A LinkedList is ordered by index position, like ArrayList, except that the elements are doubly-linked to one another. This linkage gives you new methods (beyond what you get from the List interface) for adding and removing from the beginning or end, which makes it an easy choice for implementing a stack or queue. Keep in mind that a LinkedList may iterate more slowly than an ArrayList, but it's a good choice when you need fast insertion and deletion. As of Java 5, the LinkedList class has been enhanced to implement the java.util.Queue interface. As such, it now supports the common queue methods: peek(), poll(), and offer(). </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Set Interface </h4>
                    <p class="mb-4" align="justify"> A Set cares about uniqueness—it doesn't allow duplicates. Your good friend the equals() method determines whether two objects are identical (in which case only one can be in the set). The three Set implementations are described in the following sections. </p>
                    <p class="mb-2" align="justify"> <b> 1. HashSet : </b> A HashSet is an unsorted, unordered Set. It uses the hashcode of the object being inserted, so the more efficient your hashCode() implementation the better access performance you'll get. Use this class when you want a collection with no duplicates and you don't care about order when you iterate through it. </p>
					<p class="mb-2" align="justify"> <b> 2. LinkedHashSet : </b> A LinkedHashSet is an ordered version of HashSet that maintains a doubly-linked List across all elements. Use this class instead of HashSet when you care about the iteration order. When you iterate through a HashSet theorder is unpredictable, while a LinkedHashSet lets you iterate through the elements in the order in which they were inserted. </p>
					<p class="mb-2" align="justify"> <b> 3. TreeSet  : </b> The TreeSet is one of two sorted collections (the other being TreeMap). It uses a Red-Black tree structure (but you knew that), and guarantees that the elements will be in ascending order, according to natural order. Optionally, you can construct a TreeSet with a constructor that lets you give the collection your own rules for what the order should be (rather than relying on the ordering defined by the elements' class) by using a Comparable or Comparator. As of Java 6, TreeSet implements NavigableSet. </p>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Map Interface </h4>
                    <p class="mb-4" align="justify"> A Map cares about unique identifiers. You map a unique key to a specific value, where both the key and the value are, of course, objects. You're probably quite familiar with Maps since many languages support data structures that use a key/value or name/value pair. The Map implementations let you do things like search for a value based on the key, ask for a collection of just the values, or ask for a collection of just the keys. Like Sets, Maps rely on the equals() method to determine whether two keys are the same or different. </p>
                    <p class="mb-4" align="justify"> <b> 1. HashMap : </b>  The HashMap gives you an unsorted, unordered Map. When you need a Map and you don't care about the order (when you iterate through it), then HashMap is the way to go; the other maps add a little more overhead. Where the keys land in the Map is based on the key's hashcode, so, like HashSet, the more efficient your hashCode() implementation, the better access performance you'll get. HashMap allows one null key and multiple null values in a collection. </p>
					<p class="mb-4" align="justify"> <b> 2. Hashtable : </b> Hashtable has existed from prehistoric Java times. For fun, don't forget to note the naming inconsistency: HashMap vs. Hashtable. Where's the capitalization of t? Oh well, you won't be expected to spell it. Anyway, just as Vector is a synchronized counterpart to the sleeker, more modern ArrayList, Hashtable is the synchronized counterpart to HashMap. Remember that you don't synchronize a class, so when we say that Vector and Hashtable are synchronized, we just mean that the key methods of the class are synchronized. Another difference, though, is that while HashMap lets you have null values as well as one null key, a Hashtable doesn't let you have anything that's null. </p>
					<p class="mb-4" align="justify"> <b> 3. LinkedHashMap : </b> The LinkedHashMap collection maintains insertion order (or, optionally, access order). Although it will be somewhat slower than HashMap for adding and removing elements, you can expect faster iteration with a LinkedHashMap. </p>
					<p class="mb-4" align="justify"> <b> 4. TreeMap : </b> A TreeMap is a sorted Map and you already know that by default, this means "sorted by the natural order of the elements." Like TreeSet, TreeMap lets you define a custom sort order (via a Comparable or Comparator) when you construct a TreeMap, that specifies how the elements should be compared to one another when they're being ordered. As of Java 6, TreeMap implements NavigableMap. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Queue Interface </h4>
                    <p class="mb-4" align="justify"> A Queue is designed to hold a list of "to-dos," or things to be processed in some way. Although other orders are possible, queues are typically thought of as FIFO (First In First Out). Queues support all of the standard Collection methods and they also add methods to add and subtract elements and review queue elements.</p>
                    <p class="mb-4" align="justify"> <b> 1. PriorityQueue : </b>  This class is new with Java 5. Since the LinkedList class has been enhanced to implement the Queue interface, basic queues can be handled with a LinkedList. The purpose of a PriorityQueue is to create a "Priority In, Priority Out" queue as opposed to a typical FIFO (First In First Out) Queue. A PriorityQueue's elements are ordered either by natural ordering (in which case the elements that are sorted first will be accessed first) or according to a Comparator. In either case, the elements' ordering represents their relative priority. </p>					
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Collection Interface Concrete Implementation Classes </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Class </b> </th> <th scope="col"> <b> Map </b> </th> <th scope="col"> <b> Set </b> </th> <th scope="col"> <b> List </b> <th scope="col"> <b> Queue </b> </th> </th> <th scope="col"> <b> Ordered </b> </th> <th scope="col"> <b> Sorted </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> HashMap </td> <td> X </td> <td> </td> <td> </td> <td> </td> <td align="justify"> No </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> Hashtable </td> <td> X </td> <td> </td> <td> </td> <td> </td> <td align="justify"> No </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> TreeMap </td> <td> X </td> <td> </td> <td> </td> <td> </td> <td align="justify"> Sorted </td> <td align="justify"> By Natural Order/Custom Comparison Rules </td> </tr>
							<tr> <td align="justify"> LinkedHashMap </td> <td> X </td> <td> </td> <td> </td> <td> </td> <td align="justify"> By Insertion Order/Last Access Order </td> <td align="justify"> No </td> </tr>	
							<tr> <td align="justify"> HashSet </td> <td> </td> <td> X </td> <td> </td> <td> </td> <td align="justify"> No </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> LinkedHashSet </td> <td> </td> <td> X </td> <td> </td> <td> </td> <td align="justify"> No </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> TreeSet </td> <td> </td> <td> X </td> <td> </td> <td> </td> <td align="justify"> Sorted </td> <td align="justify"> By Natural Order/Custom Comparison Rules </td> </tr>
							<tr> <td align="justify"> ArrayList </td> <td> </td> <td> </td> <td> X </td> <td> </td> <td align="justify"> By Insertion Order </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> Vector </td> <td> </td> <td> </td> <td> X </td> <td> </td> <td align="justify"> No </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> LinkedList </td> <td> </td> <td> </td> <td> X </td> <td> </td> <td align="justify"> No </td> <td align="justify"> No </td> </tr>
							<tr> <td align="justify"> PriorityQueue </td> <td> </td> <td> </td> <td> </td> <td> X </td> <td align="justify"> Sorted </td> <td align="justify"> By to-do order </td> </tr>
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
								<td> <a href="iostreams.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Input / Output </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="stream.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							         Stream API <i class="fa fa-arrow-right ms-3"></i></a> 
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