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
                        <li class="breadcrumb-item text-white active" aria-current="page"> Input &amp; Output Streams </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Input &amp; Output Streams </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-4" align="justify"> The java.io package contains nearly every class you might ever need to perform input and output in Java. An Input And Output Stream represents an input source or an output destination. A stream can represent many different kinds of sources and destinations, including disk files, devices, other programs, and memory arrays. Streams support many different kinds of data, including simple bytes, primitive data types, localized characters, and objects. </p>

					<p class="mb-4" align="justify"> Some streams simply pass on data, others manipulate and transform the data in useful ways. No matter how they work internally, all streams present the same simple model to programs that use them, A stream is a sequence of data. We will see streams that can handle all kinds of data, from primitive values to advanced objects. The data source and data destination pictured above can be anything that holds, generates, or consumes data. Obviously this includes disk files, but a source or destination can also be another program, a peripheral device, a network socket, or an array. A program uses an input stream to read data from a source, one item at a time. A program uses an output stream to write data to a destination, one item at time.</p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Types of Input and Output Streams </h4>
					<p class="mb-2" align="justify">  There are two kinds of Streams : </p>
					<ol>
						<li class="mb-2" align="justify"> <b class="text-success"> InPutStream : </b> The InputStream is used to read data from a source. </li>
						<li class="mb-2" align="justify"> <b class="text-success"> OutPutStream : </b> The OutputStream is used for writing data to a destination. </li>
					</ol>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Java Provided Standard Streams </h4>
					<p class="mb-2" align="justify">  All the programming languages provide support for standard I/O where the user's program can take input from a keyboard and then produce an output on the computer screen. Java provides the following Three Streams are created for us automatically and all these streams are attached with the console. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" width="15%"> <b> Standard Streams </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> System Output </td> <td align="justify"> System Output is used to output the data produced by the user's program and usually a computer screen is used for standard output stream and represented as System.out. </td> </tr>
							<tr> <td align="justify"> System Input </td> <td align="justify">System Input is used to feed the data to user's program and usually a keyboard is used as standard input stream and represented as System.in. </td> </tr>
							<tr> <td align="justify"> System Error </td> <td align="justify"> System Error is used to output the error data produced by the user's program and usually a computer screen is used for standard error stream and represented as System.err. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Closeable Interface </h4>
					<p class="mb-2" align="justify"> A Closeable is an Interface. A Closeable Interface extends AutoCloseable Interface. A Closeable is a source or destination of data that can be closed. The close method is invoked to release resources that the object is holding (such as open files). </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" width="23%"> <b> Methods </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> void close() </td> <td align="justify"> void close() method closes this stream and releases any system resources associated with it. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> DataInput Interface </h4>
					<p class="mb-2" align="justify"> A DataInput is an Interface. The DataInput interface provides for reading bytes from a binary stream and reconstructing from them data in any of the Java primitive types. There is also a facility for reconstructing a String from data in modified UTF-8 format. It is generally true of all the reading routines in this interface that if end of file is reached before the desired number of bytes has been read, an EOFException (which is a kind of IOException) is thrown. If any byte cannot be read for any reason other than end of file, an IOException other than EOFException is thrown. In particular, an IOException may be thrown if the input stream has been closed. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" width="23%"> <b> Methods </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> boolean readBoolean() </td> <td align="justify"> boolean readBoolean() method reads one input byte and returns true if that byte is nonzero, false if that byte is zero. </td> </tr>
							<tr> <td align="justify"> byte readByte() </td> <td align="justify">  byte readByte() method reads and returns one input byte. </td> </tr> 
							<tr> <td align="justify"> char 	readChar() </td> <td align="justify"> char readChar() method reads two input bytes and returns a char value. </td> </tr>
							<tr> <td align="justify"> double readDouble() </td> <td align="justify"> double readDouble() method reads eight input bytes and returns a double value. </td> </tr>
							<tr> <td align="justify"> float readFloat() </td> <td align="justify"> float readFloat() method reads four input bytes and returns a float value. </td> </tr>
							<tr> <td align="justify"> void readFully(byte[] b) </td> <td align="justify"> void readFully(byte[] b) method reads some bytes from an input stream and stores them into the buffer array b. </td> </tr>
							<tr> <td align="justify"> void readFully(byte[] b, int off, int len) </td> <td align="justify"> void readFully(byte[] b, int off, int len) method reads len bytes from an input stream. </td> </tr>
							<tr> <td align="justify"> int readInt() </td> <td align="justify"> int readInt() method reads four input bytes and returns an int value. </td> </tr>
							<tr> <td align="justify"> String readLine() </td> <td align="justify"> String readLine() method reads the next line of text from the input stream. </td> </tr>
							<tr> <td align="justify"> long readLong() </td> <td align="justify"> long readLong() method reads eight input bytes and returns a long value. </td> </tr>
							<tr> <td align="justify"> short readShort() </td> <td align="justify"> short readShort() method reads two input bytes and returns a short value. </td> </tr>
							<tr> <td align="justify"> int readUnsignedByte() </td> <td align="justify"> int readUnsignedByte() method reads one input byte, zero-extends it to type int, and returns the result, which is therefore in the range 0 through 255. </td> </tr>
							<tr> <td align="justify"> int readUnsignedShort() </td> <td align="justify"> int readUnsignedShort() method reads two input bytes and returns an int value in the range 0 through 65535. </td> </tr>
							<tr> <td align="justify"> String readUTF() </td> <td align="justify"> String readUTF() method reads in a string that has been encoded using a modified UTF-8 format. </td> </tr>
							<tr> <td align="justify"> int skipBytes(int n) </td> <td align="justify"> int skipBytes(int n) method makes an attempt to skip over n bytes of data from the input stream, discarding the skipped bytes. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> File Class </h4>
					<p class="mb-2" align="justify"> The API says that the class File is "An abstract representation of file and directory pathnames." The File class isn't used to actually read or write data; it's used to work at a higher level, making new empty files, searching for files, deleting files, making directories, and working with paths. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> FileReader Class </h4>
					<p class="mb-2" align="justify"> This class is used to read character files. Its read() methods are fairly low-level, allowing you to read single characters, the whole stream of characters, or a fixed number of characters. FileReaders are usually wrapped by higher-level objects such as BufferedReaders, which improve performance and provide more convenient ways to work with the data. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> BufferedReader Class </h4>
					<p class="mb-2" align="justify"> This class is used to make lower-level Reader classes like FileReader more efficient and easier to use. Compared to FileReaders, BufferedReaders read relatively large chunks of data from a file at once, and keep this data in a buffer. When you ask for the next character or line of data, it is retrieved from the buffer, which minimizes the number of times that time-intensive, file read operations are performed. In addition, BufferedReader provides more convenient methods such as readLine(), that allow you to get the next line of characters from a file. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> FileWriter Class </h4>
					<p class="mb-2" align="justify"> This class is used to write to character files. Its write() methods allow you to write character(s) or Strings to a file. FileWriters are usually wrapped by higher-level Writer objects such as BufferedWriters or PrintWriters, which provide better performance and higher-level, more flexible methods to write data. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> BufferedWriter Class </h4>
					<p class="mb-2" align="justify">  This class is used to make lower-level classes like FileWriters more efficient and easier to use. Compared to FileWriters BufferedWriters write relatively large chunks of data to a file at once, minimizing the number of times that slow, file writing operations are performed. The BufferedWriter class also provides a newLine() method to create platform-specific line separators automatically. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> PrintWriter Class </h4>
					<p class="mb-2" align="justify"> This class has been enhanced significantly in Java 5. Because of newly created methods and constructors (like building a PrintWriter with a File or a String), you might find that you can use PrintWriter in places where you previously needed a Writer to be wrapped with a FileWriter and/or a BufferedWriter. New methods like format(), printf(), and append() make PrintWriters very flexible and powerful. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Console Class </h4>
					<p class="mb-2" align="justify">  This new, Java 6 convenience class provides methods to read input from the console and write formatted output to the console. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Output Stream Class </h4>
					<p class="mb-2" align="justify">  OutputStream class is an Abstract Class. OutputStream class extends Object Class. OutputStream class implements Closeable and Flushable. OutputStream class has contains Single Constructor that means Normal Constructor. OutputStream is the super class of all classes representing an output stream of bytes. An output stream accepts output bytes and sends them to some sink. Java application uses an output stream to write data to a destination. it may be a file, an array, peripheral device or socket. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" width="23%"> <b> Methods </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> void close() </td> <td align="justify"> void close() method closes this output stream and releases any system resources associated with this stream. </td> </tr>
							<tr> <td align="justify"> void flush() </td> <td align="justify"> void flush() method flushes this output stream and forces any buffered output bytes to be written out. </td> </tr>
							<tr> <td align="justify"> void write(byte[] b) </td> <td align="justify"> void write(byte[] b) method writes b.length bytes from the specified byte array to this output stream. </td> </tr>
							<tr> <td align="justify"> void write(byte[] b, int off, int len) </td> <td align="justify"> void write(byte[] b, int off, int len) method writes len bytes from the specified byte array starting at offset off to this output stream. </td> </tr>
							<tr> <td align="justify"> abstract void write(int b) </td> <td align="justify"> abstract void write(int b) method writes the specified byte to this output stream. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Input Stream Class </h4>
					<p class="mb-2" align="justify">  InputStream class is an Abstract Class. InputStream class extends Object Class. InputStream class implements Closeable. InputStream class has contains Single Constructor that means Normal Constructor. InputStream is the super class of all classes representing an input stream of bytes. Applications that need to define a subclass of InputStream must always provide a method that returns the next byte of input. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" width="23%"> <b> Methods </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> int available() </td> <td align="justify"> int available() method returns an estimate of the number of bytes that can be read (or skipped over) from this input stream without blocking by the next invocation of a method for this input stream. </td> </tr>
							<tr> <td align="justify"> void close() </td> <td align="justify"> void close() method closes this input stream and releases any system resources associated with the stream. </td> </tr>
							<tr> <td align="justify"> void mark(int readlimit) </td> <td align="justify"> void mark(int readlimit) method marks the current position in this input stream. </td> </tr>
							<tr> <td align="justify"> boolean markSupported() </td> <td align="justify"> boolean markSupported() method tests if this input stream supports the mark and reset methods. </td> </tr>
							<tr> <td align="justify"> int read(byte[] b) </td> <td align="justify"> int read(byte[] b) method reads some number of bytes from the input stream and stores them into the buffer array b. </td> </tr>							
							<tr> <td align="justify"> int read(byte[] b, int off, int len) </td> <td align="justify"> long skip(long n) method skips over and discards n bytes of data from this input stream. </td> </tr>
							<tr> <td align="justify"> void reset() </td> <td align="justify"> void reset() method repositions this stream to the position at the time the mark method was last called on this input stream. </td> </tr>
							<tr> <td align="justify"> long skip(long n) </td> <td align="justify"> long skip(long n) method skips over and discards n bytes of data from this input stream. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> FileInputStream Class </h4>
					<p class="mb-2" align="justify"> FileInputStream class is Class. FileInputStream class extends InputStream Class. FileInputStream class implements Closeable and AutoCloseable. FileInputStream class has contains three parameter Construcots. A FileInputStream obtains input bytes from a file in a file system. FileInputStream is meant for reading streams of raw bytes such as image data. For reading streams of characters, consider using FileReader. </p>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col" width="23%"> <b> Methods </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> void close() </td> <td align="justify"> void close () method Closes this file input stream and releases any system resources associated with the stream. </td> </tr>
							<tr> <td align="justify"> int available() </td> <td align="justify"> void available () method Returns an estimate of the number of remaining bytes that can be read (or skipped over) from this input stream without blocking by the next invocation of a method for this input stream. </td> </tr>
							<tr> <td align="justify"> protected void finalize() </td> <td align="justify"> void finalize() method Ensures that the close method of this file input stream is called when there are no more references to it. </td> </tr>
							<tr> <td align="justify"> FileChannel getChannel() </td> <td align="justify"> void getChannel method Returns the unique FileChannel object associated with this file input stream. </td> </tr>
							<tr> <td align="justify"> FileDescriptor getFD() </td> <td align="justify"> void getFD() method Returns the FileDescriptor object that represents the connection to the actual file in the file system being used by this FileInputStream. </td> </tr>							
							<tr> <td align="justify"> int read() </td> <td align="justify"> int read() method Reads a byte of data from this input stream. </td> </tr>
							<tr> <td align="justify"> int read(byte[] b) </td> <td align="justify"> int read(byte[] b) method Reads up to b.length bytes of data from this input stream into an array of bytes. </td> </tr>
							<tr> <td align="justify"> int read(byte[] b, int off, int len) </td> <td align="justify"> int read(byte[] b, int off, int len) method Reads up to len bytes of data from this input stream into an array of bytes. </td> </tr>
							<tr> <td align="justify"> long skip(long n) </td> <td align="justify"> long skip(long n) method Skips over and discards n bytes of data from the input stream. </td> </tr>
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
								<td> <a href="innerClass.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Inner Class </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="collections.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							         Collections Framework <i class="fa fa-arrow-right ms-3"></i></a> 
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