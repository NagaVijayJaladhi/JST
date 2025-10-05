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
                <h1 class="display-2 text-white animated slideInDown mb-4">Training</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Java</a></li>
                        <li class="breadcrumb-item"><a href="#">J2SE</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> Stream API </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Stream </h1>
                    <p class="mb-4" align="justify"> A Stream is a sequence of data that you can process in a declaration and functional style. </p>
					<p class="mb-4" align="justify"> A Streams are not data structures but tools for performing operations like map-reduce transformation on collections. </p>
					<p class="mb-4" align="justify"> A Streams is an Interface that extends AutoCloseable and BaseStream Interfaces. </p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Advantages of Streams : </h4>
                    <p class="mb-4" align="justify"> 1. Not a data structure. </p>
                    <p class="mb-4" align="justify"> 2. Design for Lambda Expression. </p>
                    <p class="mb-4" align="justify"> 3. Donot support indexes access. </p>
					<p class="mb-4" align="justify"> 5. Lazy access support. </p>
                    <p class="mb-4" align="justify"> 6. Parallelizable. </p>
                    <p class="mb-4" align="justify"> 7. Can easily be outputted as Arrays (or) List. </p>
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> When to use Streams : </h4>
                    <p class="mb-4" align="justify"> 1. Streams is a way to express and process collections of objects. </p>
                    <p class="mb-4" align="justify"> 2. Enable us to perform operations like filtering, mapping, reducing and sorting. </p>
					<p class="mb-4" align="justify"> 3. Use terminal operations when you're ready to initiate the processing and produce a result. </p>
					<p class="mb-4" align="justify"> 4. Use intermediate operations to set up a pipeline of operations you want to perform on the data. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Operations in Streams : </h4>
                    <p class="mb-4" align="justify"> 1. Intermediate Operations. </p>
                    <p class="mb-4" align="justify"> 2. Terminal Operations. </p>
					<p class="mb-4" align="justify"> 3. Short Circuit Operations. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Intermediate Operations : </h4>
                    <p class="mb-4" align="justify"> Intermediate Operations transform the elements of stream and return a new stream as a result. </p>
                    <p class="mb-4" align="justify"> Intermediate Operations do not produce a final result directly they are usually combined using method chaining. </p>
                </div>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List of Methods in Intermediate Operations </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Methods </b> </th> <th scope="col"> <b> Return Type </b> </th> <th scope="col"> <b> Type of Operations </b> </th> <th scope="col"> <b>Declarations </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> filter() </td> <td align="justify"> Stream <T> </td> <td align="justify"> Intermediate </td> <td align="justify"> Returns a stream of elements which satisfy the given predicate </td> </tr>
							<tr> <td align="justify"> map() </td> <td align="justify"> Stream <T> </td> <td align="justify"> Intermediate </td> <td align="justify"> Returns a stream consisting of results after applying given function to elements of the stream. </td> </tr>
							<tr> <td align="justify"> distinct() </td> <td align="justify"> Stream <T> </td> <td align="justify"> Intermediate </td> <td align="justify"> Returns a stream of unique elements. </td> </tr>
							<tr> <td align="justify"> sorted() </td> <td align="justify"> Stream <T> </td> <td align="justify"> Intermediate </td> <td align="justify"> Returns a stream consisting of elements sorted according to natural order. </td> </tr>
							<tr> <td align="justify"> limit() </td> <td align="justify"> Stream <T> </td> <td align="justify"> Intermediate </td> <td align="justify"> Returns a stream consisting first n elements. </td> </tr>
							<tr> <td align="justify"> skip() </td> <td align="justify"> Stream <T> </td> <td align="justify"> Intermediate </td> <td align="justify"> Returns a stream after skipping first n elements. </td> </tr>	
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Terminal Operations : </h4>
                    <p class="mb-4" align="justify"> Terminal Operations produce a result such as a value (or) a collections. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List of Methods in Terminal Operations </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Methods </b> </th> <th scope="col"> <b> Return Type </b> </th> <th scope="col"> <b> Type of Operations </b> </th> <th scope="col"> <b>Declarations </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> forEach() </td> <td align="justify"> void </td> <td align="justify"> Terminal </td> <td align="justify"> Performs an action on all elements of a stream. </td> </tr>
							<tr> <td align="justify"> toArray() </td> <td align="justify"> Object [] </td> <td align="justify"> Terminal </td> <td align="justify"> Returns an array containing elements of a stream. </td> </tr>
							<tr> <td align="justify"> reduce() </td> <td align="justify"> Type T </td> <td align="justify"> Terminal </td> <td align="justify"> Performs reduction operations on elements of a stream using initial value and binary operations. </td> </tr>
							<tr> <td align="justify"> collect() </td> <td align="justify"> container of Type R </td> <td align="justify"> Terminal </td> <td align="justify"> Return mutable result container such as List or Set. </td> </tr>
							<tr> <td align="justify"> min() </td> <td align="justify"> Optional<T> </td> <td align="justify"> Terminal </td> <td align="justify"> Return minimum elements in a stream wrapped in an Optional Object. </td> </tr>
							<tr> <td align="justify"> max() </td> <td align="justify"> Optional<T> </td> <td align="justify"> Terminal </td> <td align="justify"> Return maximum elements in a stream wrapped in an Optional Object. </td> </tr>
							<tr> <td align="justify"> count() </td> <td align="justify"> long </td> <td align="justify"> Terminal </td> <td align="justify"> Retuns the number of elements in a stream. </td> </tr>							
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Short Circuit Operations : </h4>
                    <p class="mb-4" align="justify"> Short-circuit operations are a subset of terminal operations that do not need to process the entire Stream to produce a result. They can provide an early exit from the stream processing pipeline </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> List of Methods in Short Circuit Operations </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Methods </b> </th> <th scope="col"> <b> Return Type </b> </th> <th scope="col"> <b> Type of Operations </b> </th> <th scope="col"> <b>Declarations </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> anyMatch() </td> <td align="justify"> boolean </td> <td align="justify"> Terminal </td> <td align="justify"> Returns true if any one elements of a stream matches with given predicate. </td> </tr>
							<tr> <td align="justify"> allMatch() </td> <td align="justify"> boolean </td> <td align="justify"> Terminal </td> <td align="justify"> Returns true if all elements of a stream matches with given predicate. </td> </tr>
							<tr> <td align="justify"> noneMatch() </td> <td align="justify"> boolean </td> <td align="justify"> Terminal </td> <td align="justify"> Returns true only if all the elements of a streams doesn't match with given predicate.  </td> </tr>
							<tr> <td align="justify"> findFirst() </td> <td align="justify"> Optional<T> </td> <td align="justify"> Terminal </td> <td align="justify"> Returns first elements of a stream wrapped in an Optional Object. </td> </tr>
							<tr> <td align="justify"> findAny() </td> <td align="justify"> Optional<T> </td> <td align="justify"> Terminal </td> <td align="justify"> Randomly returns any one element in a stream. </td> </tr>								
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Intermediate Operations Vs Terminal Operations </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Intermediate Operations </b> </th> <th scope="col"> <b> Terminal Operations </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Intermediate Operations return stream. </td> <td align="justify"> Terminal Operations return non-stream values. </td> </tr>
							<tr> <td align="justify"> Intermediate Operations can be chained together to form a pipeline of operations. </td> <td align="justify"> Terminal Operations can’t be chained together. </td> </tr>
							<tr> <td align="justify"> Pipeline of operations may contain any number of intermediate operations. </td> <td align="justify"> Pipeline of operations can have maximum one terminal operation, that too at the end. </td> </tr>
							<tr> <td align="justify"> Intermediate operations are lazily loaded. </td> <td align="justify"> Terminal operations are eagerly loaded. </td> </tr>
							<tr> <td align="justify"> Intermediate Operations don’t produce end result. </td> <td align="justify"> Intermediate Operations produce end result. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Sequential Stream Vs Parallel Operations </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Sequential Stream </b> </th> <th scope="col"> <b> Parallel Operations </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> Runs on a single core of the computer </td> <td align="justify"> Utilize the multiple cores of the computer </td> </tr>
							<tr> <td align="justify"> The performance is poor </td> <td align="justify"> The performance is high </td> </tr>
							<tr> <td align="justify"> Order is maintained </td> <td align="justify"> Does not care about the order </td> </tr>
							<tr> <td align="justify"> Only a single iteration at a time </td> <td align="justify"> Operates multiple iterations at a time </td> </tr>
							<tr> <td align="justify"> More reliable and less error </td> <td align="justify"> Less reliable and error prone </td> </tr>
							<tr> <td align="justify"> Platform Independent </td> <td align="justify"> Platform Dependent </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Nested Class in Stream API Package (java.util.stream) </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Modifier and Type </b> </th> <th scope="col"> <b> Interface and Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> static interface </td> <td align="justify"> Stream.Builder&#60;T&#62; <br/> A mutable builder for a Stream. </td> </tr>
						</tbody>						
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Methods in Stream API Package (java.util.stream) </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Modifier and Type </b> </th> <th scope="col"> <b> Method and Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> boolean </td> <td align="justify"> allMatch(Predicate&#60;? super T&#62; predicate) <br/> Returns whether all elements of this stream match the provided predicate. </td> </tr>
							<tr> <td align="justify"> boolean </td> <td align="justify"> anyMatch(Predicate&#60;? super T&#62; predicate) <br/> Returns whether any elements of this stream match the provided predicate. </td> </tr>
							<tr> <td align="left"> static &#60;T&#62; Stream.Builder&#60;T&#62; </td> <td align="justify"> builder() <br/> Returns a builder for a Stream. </td> </tr>
							<tr> <td align="justify"> &#60; R, A &#62; R </td> <td align="justify"> collect(Collector&#60;? super T,A,R&#62; collector) <br/> Performs a mutable reduction operation on the elements of this stream using a Collector. </td> </tr>
							<tr> <td align="justify"> &#60; R &#62; R </td> <td align="justify"> collect(Supplier&#60;R&#62; supplier, BiConsumer&#60;R,? super T&#62; accumulator, BiConsumer&#60;R,R&#62; combiner) <br/> Performs a mutable reduction operation on the elements of this stream. </td> </tr>
							<tr> <td align="justify"> static &#60;T&#62; Stream&#60;T&#62; </td> <td align="justify"> concat(Stream&#60;? extends T&#62; a, Stream&#60;? extends T&#62; b) <br/> Creates a lazily concatenated stream whose elements are all the elements of the first stream followed by all the elements of the second stream. </td> </tr>
							<tr> <td align="justify"> long </td> <td align="justify"> count() <br/> Returns the count of elements in this stream. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> distinct() <br/> Returns a stream consisting of the distinct elements (according to Object.equals(Object)) of this stream. </td> </tr>
							<tr> <td align="justify"> static&#60;T&#62; Stream&#60;T&#62; </td> <td align="justify"> empty() <br/> Returns an empty sequential Stream. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> filter(Predicate&#60;? super T&#62; predicate) <br/> Returns a stream consisting of the elements of this stream that match the given predicate. </td> </tr>
							<tr> <td align="justify"> Optional&#60;T&#62; </td> <td align="justify"> findAny() <br/> Returns an Optional describing some element of the stream, or an empty Optional if the stream is empty. </td> </tr>
							<tr> <td align="justify"> Optional&#60;T&#62; </td> <td align="justify"> findFirst() <br/> Returns an Optional describing the first element of this stream, or an empty Optional if the stream is empty. </td> </tr>
							<tr> <td align="justify"> &#60;R&#62; Stream &#60;R&#62; </td> <td align="justify"> flatMap(Function&#60;? super T,? extends Stream&#60;? extends R&#62;&#62; mapper) <br/> Returns a stream consisting of the results of replacing each element of this stream with the contents of a mapped stream produced by applying the provided mapping function to each element. </td> </tr>
							<tr> <td align="justify"> DoubleStream </td> <td align="justify"> flatMapToDouble(Function&#60;? super T,? extends DoubleStream&#60;? extends R&#62;&#62; mapper) <br/> Returns an DoubleStream consisting of the results of replacing each element of this stream with the contents of a mapped stream produced by applying the provided mapping function to each element. </td> </tr>
							<tr> <td align="justify"> IntStream </td> <td align="justify"> flatMapToInt(Function&#60;? super T,? extends IntStream&#60;? extends R&#62;&#62; mapper) <br/> Returns an IntStream consisting of the results of replacing each element of this stream with the contents of a mapped stream produced by applying the provided mapping function to each element. </td> </tr>
							<tr> <td align="justify"> LongStream </td> <td align="justify"> flatMapToLong(Function&#60;? super T,? extends LongStream&#60;? extends R&#62;&#62; mapper) <br/> Returns an LongStream consisting of the results of replacing each element of this stream with the contents of a mapped stream produced by applying the provided mapping function to each element. </td> </tr>
							<tr> <td align="justify"> void </td> <td align="justify"> forEach(Consumer&#60;? super T&#62; action) <br/> Performs an action for each element of this stream. </td> </tr>
							<tr> <td align="justify"> void </td> <td align="justify"> forEachOrdered(Consumer&#60;? super T&#62; action) <br/> Performs an action for each element of this stream. </td> </tr>
							<tr> <td align="justify"> static &#60;T&#62; Stream<T> </td> <td align="justify"> generate(Supplier&#60;T&#62; s) <br/> Returns an infinite sequential unordered stream where each element is generated by the provided Supplier. </td> </tr>
							<tr> <td align="justify"> static &#60;T&#62; Stream&#60;T&#62; </td> <td align="justify"> iterate(T seed, UnaryOperator&#60;T&#62; f) <br/> Returns an infinite sequential ordered Stream produced by iterative application of a function f to an initial element seed, producing a Stream consisting of seed, f(seed), f(f(seed)), etc. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> limit(long maxSize) <br/> Returns a stream consisting of the elements of this stream, truncated to be no longer than maxSize in length. </td> </tr>
							<tr> <td align="justify"> &#60;R&#62; Stream &#60;R&#62; </td> <td align="justify"> map(Function&#60;? super T,? extends R&#62; mapper) <br/> Returns a stream consisting of the results of applying the given function to the elements of this stream. </td> </tr>
							<tr> <td align="justify"> DoubleStream </td> <td align="justify"> mapToDouble(ToDoubleFunction&#60;? super T&#62; mapper) <br/> Returns a DoubleStream consisting of the results of applying the given function to the elements of this stream. </td> </tr>
							<tr> <td align="justify"> IntStream </td> <td align="justify"> mapToInt(ToIntFunction&#60;? super T&#62; mapper) <br/> Returns an IntStream consisting of the results of applying the given function to the elements of this stream. </td> </tr>
							<tr> <td align="justify"> LongStream </td> <td align="justify"> mapToLong(ToLongFunction&#60;? super T&#62; mapper) <br/> Returns a LongStream consisting of the results of applying the given function to the elements of this stream. </td> </tr>
							<tr> <td align="justify"> Optional&#60;T&#62; </td> <td align="justify"> max(Comparator&#60;? super T&#62; comparator) <br/> Returns the maximum element of this stream according to the provided Comparator. </td> </tr>
							<tr> <td align="justify"> Optional&#60;T&#62; </td> <td align="justify"> min(Comparator&#60;? super T&#62; comparator) <br/> Returns the minimum element of this stream according to the provided Comparator. </td> </tr>
							<tr> <td align="justify"> boolean </td> <td align="justify"> noneMatch(Predicate&#60;? super T&#62; predicate) <br/> Returns whether no elements of this stream match the provided predicate. </td> </tr>
							<tr> <td align="justify"> static &#60;T&#62; Stream&#60;T&#62; </td> <td align="justify"> of(T... values) <br/> Returns a sequential ordered stream whose elements are the specified values. </td> </tr>
							<tr> <td align="justify"> static &#60;T&#62; Stream&#60;T&#62; </td> <td align="justify"> of(T t) <br/> Returns a sequential Stream containing a single element. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> peek(Consumer&#60;? super T&#62; action) <br/> Returns a stream consisting of the elements of this stream, additionally performing the provided action on each element as elements are consumed from the resulting stream. </td> </tr>
							<tr> <td align="justify"> Optional&#60;T&#62; </td> <td align="justify"> reduce(BinaryOperator&#60;T&#62; accumulator) <br/> Performs a reduction on the elements of this stream, using an associative accumulation function, and returns an Optional describing the reduced value, if any. </td> </tr>
							<tr> <td align="justify"> T </td> <td align="justify"> reduce(T identity, BinaryOperator&#60;T&#62; accumulator) <br/> Performs a reduction on the elements of this stream, using the provided identity value and an associative accumulation function, and returns the reduced value. </td> </tr>
							<tr> <td align="justify"> &#60;U&#62; U </td> <td align="justify"> reduce(U identity, BiFunction&#60;U,? super T,U&#62; accumulator, BinaryOperator&#60;U&#62; combiner) <br/> Performs a reduction on the elements of this stream, using the provided identity, accumulation and combining functions. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> skip(long n) <br/> Returns a stream consisting of the remaining elements of this stream after discarding the first n elements of the stream. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> sorted() <br/> Returns a stream consisting of the elements of this stream, sorted according to natural order. </td> </tr>
							<tr> <td align="justify"> Stream&#60;T&#62; </td> <td align="justify"> sorted(Comparator&#60;? super T&#62; comparator) <br/> Returns a stream consisting of the elements of this stream, sorted according to the provided Comparator. </td> </tr>
							<tr> <td align="justify"> Object[] </td> <td align="justify"> toArray() <br/> Returns an array containing the elements of this stream. </td> </tr>
							<tr> <td align="justify"> &#60;A&#62; A[] </td> <td align="justify"> toArray(IntFunction<A[]> generator) <br/> Returns an array containing the elements of this stream, using the provided generator function to allocate the returned array, as well as any additional arrays that might be required for a partitioned execution or for resizing. </td> </tr>
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