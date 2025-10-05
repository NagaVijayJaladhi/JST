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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Executor Framework </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Executor Framework </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
					<p class="mb-4" align="justify"> The Executor Framework in Java is a powerful and essential component for managing and controlling the execution of concurrent tasks within a Java application. The Executor framework makes it easier to handle multiple tasks at the same time without needing to deal with the tricky details of managing them individually. It does this by providing a group of worker threads that can do these tasks all at once, which helps the application work better and use resources more effectively. </p>
				 
                    <p class="mb-4" align="justify"> The Java Executor framework provides a higher-level replacement for the traditional way of managing threads. It abstracts the details of thread creation, management, and execution, making it easier to develop concurrent applications. The framework is part of the java.util.concurrent package. </p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Executor Interface </h4>
                    <p class="mb-2" align="justify"> The central interface of the framework is the Executor. It has a single method, execute(Runnable command), which is used to submit a task for execution. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ExecutorService Interface </h4>
                    <p class="mb-2" align="justify"> ExecutorService extends Executor and provides additional methods for managing the lifecycle of the executor and controlling the execution of tasks. Examples of classes implementing ExecutorService include ThreadPoolExecutor, ScheduledThreadPoolExecutor, and ForkJoinPool. </p>
                </div>
            </div>
        </div>
        
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ThreadPoolExecutor Class </h4>
                    <p class="mb-2" align="justify"> Thread pools are a common use case for the Executor framework. They reuse worker threads to execute tasks, which can improve performance and resource utilization. It manages a pool of worker threads and provides fine-grained control over thread management, allowing you to specify parameters like the core pool size, maximum pool size, and various queueing strategies </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> ScheduledExecutorService Interface </h4>
                    <p class="mb-2" align="justify"> ScheduledExecutorService Inteface extends the Executor framework to support scheduling tasks to run at specific times or with fixed time intervals. It's particularly useful for implementing tasks that need to be executed periodically, such as cleanup tasks or periodic data updates and provides methods for scheduling tasks with fixed-rate or fixed-delay execution. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Executors Utility Class </h4>
                    <p class="mb-2" align="justify"> Java provides the Executors utility class, which offers factory methods for creating instances of Executor and ScheduledExecutorService. It simplifies the process of creating thread pools with various configurations. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> CompletableFuture </h4>
                    <p class="mb-2" align="justify"> Introduced in Java 8, CompletableFuture is a powerful extension of the Executor framework. It supports composing asynchronous operations, handling errors, and more. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Callable Interface </h4>
                    <p class="mb-2" align="justify"> The Callable interface is similar to the Runnable interface, but it allows a task to return a result and throw exceptions. The Callable interface is parameterized by the type of result it produces. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Future Interface </h4>
                    <p class="mb-2" align="justify"> The Future interface represents the result of an asynchronous computation. It provides methods to check if the computation is complete, retrieve the result, and wait for the computation to complete. </p>
                </div>
            </div>
        </div>
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Executor Framework </h4>
					<table class="table table-bordered">
						<tbody>
							<tr> <td align="justify"> SingleThreadExecutor </td> <td align="justify">The SingleThreadExecutor is one of the executor types provided by the Executor Framework in Java. It is designed to execute tasks sequentially, one at a time, on a single worker thread. </td> </tr>
							<tr> <td align="justify"> FixedThreadPool </td> <td align="justify"> FixedThreadPool maintains a fixed number of worker threads in the pool, exactly as specified by the parameter 'n' when creating the executor. These threads are created at initialization and remain active throughout the lifetime of the executor. </td> </tr>
							<tr> <td align="justify"> CachedThreadPool </td> <td align="justify"> The CachedThreadPool is another type of executor provided by the Executor Framework in Java. It creates a thread pool that can dynamically adjust the number of worker threads based on the workload.  </td> </tr>
							<tr> <td align="justify"> ScheduledExecutor </td> <td align="justify"> The ScheduledExecutor is a type of executor provided by the Executor Framework in Java that is specifically designed for scheduling tasks to run at specified times or with fixed time intervals. </td> </tr>	
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Package of java.util.concurrent </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Interface </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> BlockingDeque </td> <td align="justify"> A Deque that additionally supports blocking operations that wait for the deque to become non-empty when retrieving an element, and wait for space to become available in the deque when storing an element. </td> </tr>
							<tr> <td align="justify"> BlockingQueue </td> <td align="justify"> A Queue that additionally supports operations that wait for the queue to become non-empty when retrieving an element, and wait for space to become available in the queue when storing an element. </td> </tr>
							<tr> <td align="justify"> Callable </td> <td align="justify"> A task that returns a result and may throw an exception. </td> </tr>
							<tr> <td align="justify"> CompletableFuture.AsynchronousCompletionTask </td> <td align="justify"> A marker interface identifying asynchronous tasks produced by async methods. </td> </tr>	
							<tr> <td align="justify"> CompletionService </td> <td align="justify">A service that decouples the production of new asynchronous tasks from the consumption of the results of completed tasks. </td> </tr>
							<tr> <td align="justify"> CompletionStage </td> <td align="justify">
							A stage of a possibly asynchronous computation, that performs an action or computes a value when another CompletionStage completes. </td> </tr>
							<tr> <td align="justify"> ConcurrentMap </td> <td align="justify">	
							A Map providing thread safety and atomicity guarantees. </td> </tr>
							<tr> <td align="justify"> ConcurrentNavigableMap </td> <td align="justify">	
							A ConcurrentMap supporting NavigableMap operations, and recursively so for its navigable sub-maps. </td> </tr>
							<tr> <td align="justify"> Delayed 	</td> <td align="justify">
							A mix-in style interface for marking objects that should be acted upon after a given delay. </td> </tr>
							<tr> <td align="justify"> Executor 	</td> <td align="justify">
							An object that executes submitted Runnable tasks. </td> </tr>
							<tr> <td align="justify"> ExecutorService 	</td> <td align="justify">
							An Executor that provides methods to manage termination and methods that can produce a Future for tracking progress of one or more asynchronous tasks. </td> </tr>
							<tr> <td align="justify"> ForkJoinPool.ForkJoinWorkerThreadFactory 	</td> <td align="justify">
							Factory for creating new ForkJoinWorkerThreads. </td> </tr>
							<tr> <td align="justify"> ForkJoinPool.ManagedBlocker 	</td> <td align="justify">
							Interface for extending managed parallelism for tasks running in ForkJoinPools. </td> </tr>
							<tr> <td align="justify"> Future </td> <td align="justify">
							A Future represents the result of an asynchronous computation. </td> </tr>
							<tr> <td align="justify"> RejectedExecutionHandler</td> <td align="justify"> 	
							A handler for tasks that cannot be executed by a ThreadPoolExecutor. </td> </tr>
							<tr> <td align="justify"> RunnableFuture </td> <td align="justify">
							A Future that is Runnable. </td> </tr>
							<tr> <td align="justify"> RunnableScheduledFuture </td> <td align="justify">	
							A ScheduledFuture that is Runnable. </td> </tr>
							<tr> <td align="justify"> ScheduledExecutorService 	</td> <td align="justify">
							An ExecutorService that can schedule commands to run after a given delay, or to execute periodically. </td> </tr>
							<tr> <td align="justify"> ScheduledFuture </td> <td align="justify">
							A delayed result-bearing action that can be cancelled. </td> </tr>
							<tr> <td align="justify"> ThreadFactory </td> <td align="justify"> An object that creates new threads on demand. </td> </tr>
							<tr> <td align="justify"> TransferQueue	</td> <td align="justify"> A BlockingQueue in which producers may wait for consumers to receive elements. </td> </tr>
						</tbody> 
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Classes </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> AbstractExecutorService </td> <td align="justify"> Provides default implementations of ExecutorService execution methods. </td> </tr>
							
							<tr> <td align="justify"> ArrayBlockingQueue </td> <td align="justify"> A bounded blocking queue backed by an array. </td> </tr>
							<tr> <td align="justify"> CompletableFuture </td> <td align="justify"> A Future that may be explicitly completed (setting its value and status), and may be used as a CompletionStage, supporting dependent functions and actions that trigger upon its completion. </td> </tr>
							<tr> <td align="justify"> ConcurrentHashMap </td> <td align="justify"> A hash table supporting full concurrency of retrievals and high expected concurrency for updates. </td> </tr>
							<tr> <td align="justify"> ConcurrentHashMap.KeySetView </td> <td align="justify"> A view of a ConcurrentHashMap as a Set of keys, in which additions may optionally be enabled by mapping to a common value. </td> </tr>
							<tr> <td align="justify"> ConcurrentLinkedDeque </td> <td align="justify"> An unbounded concurrent deque based on linked nodes. </td> </tr>
							<tr> <td align="justify"> ConcurrentLinkedQueue </td> <td align="justify"> An unbounded thread-safe queue based on linked nodes. </td> </tr>
							<tr> <td align="justify"> ConcurrentSkipListMap </td> <td align="justify"> A scalable concurrent ConcurrentNavigableMap implementation. </td> </tr>
							<tr> <td align="justify"> ConcurrentSkipListSet </td> <td align="justify"> A scalable concurrent NavigableSet implementation based on a ConcurrentSkipListMap. </td> </tr>
							<tr> <td align="justify"> CopyOnWriteArrayList </td> <td align="justify"> A thread-safe variant of ArrayList in which all mutative operations (add, set, and so on) are implemented by making a fresh copy of the underlying array. </td> </tr>
							<tr> <td align="justify"> CopyOnWriteArraySet </td> <td align="justify"> A Set that uses an internal CopyOnWriteArrayList for all of its operations. </td> </tr>
							<tr> <td align="justify"> CountDownLatch </td> <td align="justify"> A synchronization aid that allows one or more threads to wait until a set of operations being performed in other threads completes. </td> </tr>
							<tr> <td align="justify"> CountedCompleter </td> <td align="justify"> A ForkJoinTask with a completion action performed when triggered and there are no remaining pending actions. </td> </tr>
							<tr> <td align="justify"> CyclicBarrier </td> <td align="justify"> A synchronization aid that allows a set of threads to all wait for each other to reach a common barrier point. </td> </tr>
							<tr> <td align="justify"> DelayQueue </td> <td align="justify"> An unbounded blocking queue of Delayed elements, in which an element can only be taken when its delay has expired. </td> </tr>
							<tr> <td align="justify"> Exchanger </td> <td align="justify"> A synchronization point at which threads can pair and swap elements within pairs. </td> </tr>
							<tr> <td align="justify"> ExecutorCompletionService </td> <td align="justify"> A CompletionService that uses a supplied Executor to execute tasks. </td> </tr>
							<tr> <td align="justify"> Executors </td> <td align="justify"> Factory and utility methods for Executor, ExecutorService, ScheduledExecutorService, ThreadFactory, and Callable classes defined in this package. </td> </tr>
							<tr> <td align="justify"> ForkJoinPool </td> <td align="justify"> An ExecutorService for running ForkJoinTasks. </td> </tr>
							<tr> <td align="justify"> ForkJoinTask </td> <td align="justify"> Abstract base class for tasks that run within a ForkJoinPool. </td> </tr>
							<tr> <td align="justify"> ForkJoinWorkerThread </td> <td align="justify"> A thread managed by a ForkJoinPool, which executes ForkJoinTasks. </td> </tr>
							<tr> <td align="justify"> FutureTask </td> <td align="justify"> A cancellable asynchronous computation. </td> </tr>
							<tr> <td align="justify"> LinkedBlockingDeque </td> <td align="justify"> An optionally-bounded blocking deque based on linked nodes. </td> </tr>
							<tr> <td align="justify"> LinkedBlockingQueue </td> <td align="justify"> An optionally-bounded blocking queue based on linked nodes. </td> </tr>
							<tr> <td align="justify"> LinkedTransferQueue </td> <td align="justify"> An unbounded TransferQueue based on linked nodes. </td> </tr>
							<tr> <td align="justify"> Phaser </td> <td align="justify"> A reusable synchronization barrier, similar in functionality to CyclicBarrier and CountDownLatch but supporting more flexible usage. </td> </tr>
							<tr> <td align="justify"> PriorityBlockingQueue </td> <td align="justify"> An unbounded blocking queue that uses the same ordering rules as class PriorityQueue and supplies blocking retrieval operations. </td> </tr>
							<tr> <td align="justify"> RecursiveAction </td> <td align="justify"> A recursive resultless ForkJoinTask. </td> </tr>
							<tr> <td align="justify"> RecursiveTask </td> <td align="justify"> A recursive result-bearing ForkJoinTask. </td> </tr>
							<tr> <td align="justify"> ScheduledThreadPoolExecutor </td> <td align="justify"> A ThreadPoolExecutor that can additionally schedule commands to run after a given delay, or to execute periodically. </td> </tr>
							<tr> <td align="justify"> Semaphore </td> <td align="justify"> A counting semaphore. </td> </tr>
							<tr> <td align="justify"> SynchronousQueue </td> <td align="justify"> A blocking queue in which each insert operation must wait for a corresponding remove operation by another thread, and vice versa. </td> </tr>
							<tr> <td align="justify"> ThreadLocalRandom </td> <td align="justify"> A random number generator isolated to the current thread. </td> </tr>
							<tr> <td align="justify"> ThreadPoolExecutor </td> <td align="justify"> An ExecutorService that executes each submitted task using one of possibly several pooled threads, normally configured using Executors factory methods. </td> </tr>
							<tr> <td align="justify"> ThreadPoolExecutor.AbortPolicy </td> <td align="justify"> A handler for rejected tasks that throws a RejectedExecutionException. </td> </tr>
							<tr> <td align="justify"> ThreadPoolExecutor.CallerRunsPolicy </td> <td align="justify"> A handler for rejected tasks that runs the rejected task directly in the calling thread of the execute method, unless the executor has been shut down, in which case the task is discarded. </td> </tr>
							<tr> <td align="justify"> ThreadPoolExecutor.DiscardOldestPolicy </td> <td align="justify"> A handler for rejected tasks that discards the oldest unhandled request and then retries execute, unless the executor is shut down, in which case the task is discarded. </td> </tr>
							<tr> <td align="justify"> ThreadPoolExecutor.DiscardPolicy </td> <td align="justify"> A handler for rejected tasks that silently discards the rejected task. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Enum </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> TimeUnit </td> <td align="justify"> A TimeUnit represents time durations at a given unit of granularity and provides utility methods to convert across units, and to perform timing and delay operations in these units. </td> </tr>
						</tbody>
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Exception </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> BrokenBarrierException </td> <td align="justify"> Exception thrown when a thread tries to wait upon a barrier that is in a broken state, or which enters the broken state while the thread is waiting. </td> </tr>
							<tr> <td align="justify"> CancellationException </td> <td align="justify"> Exception indicating that the result of a value-producing task, such as a FutureTask, cannot be retrieved because the task was cancelled. </td> </tr>
							<tr> <td align="justify"> CompletionException </td> <td align="justify"> Exception thrown when an error or other exception is encountered in the course of completing a result or task. </td> </tr>
							<tr> <td align="justify"> ExecutionException </td> <td align="justify"> Exception thrown when attempting to retrieve the result of a task that aborted by throwing an exception. </td> </tr>
							<tr> <td align="justify"> RejectedExecutionException </td> <td align="justify"> Exception thrown by an Executor when a task cannot be accepted for execution. </td> </tr>
							<tr> <td align="justify"> TimeoutException </td> <td align="justify"> Exception thrown when a blocking operation times out. </td> </tr>
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