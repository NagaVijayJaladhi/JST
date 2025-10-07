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
                        <li class="breadcrumb-item text-white active" aria-current="page"> String Class </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> String Class </h1>
                    <p class="mb-4" align="justify"> 1. <b> String </b> is a sequence of characters (or) group of characters (or) collection of characters. </p> 
                    <p class="mb-4" align="justify"> 2. <b> String </b> is a Final Class and String is a immutable class which means a constant and cannot be changed once created. </p> 
                    <p class="mb-4" align="justify"> 3. <b> String </b> is available in java.lang package and Strings can declared as objects and variables. 
                    <p class="mb-4" align="justify"> 4. <b> String </b> Class extends Object Class and implements Serializable, CharSequence, Comparable &lt;String&gt; </P>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> String are two ways to create String object </h4>
					<table class="table table-bordered">
						<thead class="table-light">
							<tr> <th scope="col"> <b> Creating a String Using Literal </b> </th> <th scope="col"> <b>  Creating a String Using Object </b> </th> </tr>
						</thead>
						<tbody align="left">
							<tr> <td> String str1 = "Delhi"; <br/> String str2 = "Mumbai"; <br/> String str3 = "Chennai"; <br/> String str4 = "Bangalore"; <br/> String str5 = "Jaladhi Naga Vijay"; <br/> String str6 = "Jaladhi Soft Technology"; </td>
							<td> String str1 = new String("New York"); <br/> String str2 = new String("Los Angeles"); <br/> String str3 = new String("Chicago"); <br/> String str1 = new String("Pennsylvania"); <br/> String str2 = new String("California"); <br/> String str3 = new String("San Jose"); </td> </tr>
						</tbody>
					</table> <br/>
                    <h4 class="mb-3" align="left"> Fields in String Class </h4>
                    <table class="table table-bordered">
						<thead class="table-light">
							<tr> <th scope="col"> <b> Field Name </b> </th> <th scope="col"> <b>  Description </b> </th> </tr>
						</thead>
                        <tbody align="left">
                            <tr>
                                <td> <b> CASE_INSENSITIVE_ORDER </b> </td> 
                                <td> A Comparator that orders String objects as by compareToIgnoreCase. </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                    <h4 class="mb-3" align="left"> Methods in String Class </h4>
                   	<table class="table table-bordered">
						<thead class="table-light">
							<tr> <th scope="col"> <b> Method Name </b> </th> <th scope="col"> <b>  Description </b> </th> </tr>
						</thead>
                        <tbody align="left">
                            <tr>
                                <td> <b> charAt(int index) </b> </td> 
                                <td> charAt(int index) method returns the char value at the specified index. </td>
                            </tr>
                            <tr>
                                <td> <b> codePointAt(int index) </b> </td> 
                                <td> codePointAt(int index) method returns the character (Unicode code point) at the specified index. </td>
                            </tr>
							<tr>
								<td> <b> codePointCount(int beginIndex, int endIndex) </b> </td>
								<td> codePointCount(int beginIndex, int endIndex) method returns the number of Unicode code points in the specified text range of this String. </td>
							</tr>
							<tr>
								<td> <b> compareTo(String anotherString) </b> </td>
								<td> compareTo(String anotherString) method compares two strings lexicographically. </td>
							</tr>
							<tr>
								<td> <b> compareToIgnoreCase(String str) </b> </td>
								<td> compareToIgnoreCase(String str) method compares two strings lexicographically, ignoring case differences. </td>
							</tr>
							<tr>
								<td> <b> concat(String str) </b> </td>
								<td> concat(String str) concatenates the specified string to the end of this string. </td>
							</tr>
							<tr>
								<td> <b> contains(CharSequence s) </b> </td>
								<td> contains(CharSequence s) method returns true if and only if this string contains the specified sequence of char values. </td>
							</tr>
							<tr>
								<td> <b> contentEquals(CharSequence cs) </b> </td>
								<td> contentEquals(CharSequence cs) method compares this string to the specified CharSequence. </td>
							</tr>
							<tr>
								<td> <b> contentEquals(StringBuffer sb) </b> </td>
								<td> contentEquals(StringBuffer sb) method compares this string to the specified StringBuffer. </td>
							</tr>
							<tr>
								<td> <b> copyValueOf(char[] data) </b> </td>
								<td> copyValueOf(char[] data) method returns a String that represents the character sequence in the array specified. </td>
							</tr>
							<tr>
								<td> <b> copyValueOf(char[] data, int offset, int count) </b> </td>
								<td> copyValueOf(char[] data, int offset, int count) method returns a String that represents the character sequence in the array specified. </td>
							</tr>
							<tr>
								<td> <b> endsWith(String suffix) </b> </td>
								<td> endsWith(String suffix) mthod tests if this string ends with the specified suffix. </td>
							</tr>
							<tr>
								<td> <b> equals(Object anObject) </b> </td>
								<td> equals(Object anObject) method compares this string to the specified object. </td>
							</tr>
							<tr>
								<td> <b> equalsIgnoreCase(String anotherString) </b> </td>
								<td> equalsIgnoreCase(String anotherString) method compares this String to another String, ignoring case considerations. </td>
							</tr>
							<tr>
								<td> <b> format(Locale l, String format, Object... args) </b> </td>
								<td> format(Locale l, String format, Object... args) method returns a formatted string using the specified locale, format string, and arguments. </td>
							</tr>
							<tr>
								<td> <b> format(String format, Object... args) </b> </td>
								<td> format(String format, Object... args) method returns a formatted string using the specified format string and arguments. </td>
							</tr>
							<tr>
								<td> <b> getBytes() </b> </td>
								<td> getBytes() method encodes this String into a sequence of bytes using the platform's default charset, storing the result into a new byte array. </td>
							</tr>
							<tr>
								<td> <b> getBytes(Charset charset) </b> </td>
								<td> getBytes(Charset charset) method encodes this String into a sequence of bytes using the given charset, storing the result into a new byte array. </td>
							</tr>
							<tr>
								<td> <b> getBytes(int srcBegin, int srcEnd, byte[] dst, int dstBegin) </b> </td>
								<td> getBytes(int srcBegin, int srcEnd, byte[] dst, int dstBegin) method does not properly convert characters into bytes. As of JDK 1.1, the preferred way to do this is via the getBytes() method, which uses the platform's default charset. The Method was Deprecated. </td>
							</tr>
							<tr>
								<td> <b> getBytes(String charsetName) </b> </td>
								<td> getBytes(String charsetName) encodes this String into a sequence of bytes using the named charset, storing the result into a new byte array. </td>
							</tr>
							<tr>
								<td> <b> getChars(int srcBegin, int srcEnd, char[] dst, int dstBegin) </b> </td>
								<td> getChars(int srcBegin, int srcEnd, char[] dst, int dstBegin) metdhod copies characters from this string into the destination character array. </td>
							</tr>
							<tr>
								<td> <b> hashCode() </b> </td>
								<td> hashCode() method returns a hash code for this string. </td>
							</tr>
							<tr>
								<td> <b> indexOf(int ch) </b> </td>
								<td> indexOf(int ch) method returns the index within this string of the first occurrence of the specified character. </td>
							</tr>
							<tr>
								<td> <b> indexOf(int ch, int fromIndex) </b> </td>
								<td> indexOf(int ch, int fromIndex) method returns the index within this string of the first occurrence of the specified character, starting the search at the specified index. </td>
							</tr>
							<tr>
								<td> <b> indexOf(String str) </b> </td>
								<td> indexOf(String str) method returns the index within this string of the first occurrence of the specified substring. </td>
							</tr>
							<tr>
								<td> <b> indexOf(String str, int fromIndex) </b> </td>
								<td> indexOf(String str, int fromIndex) method returns the index within this string of the first occurrence of the specified substring, starting at the specified index. </td>
							</tr>
							<tr>
								<td> <b> intern() </b> </td>
								<td> intern() method returns a canonical representation for the string object. </td>
							</tr>
							<tr>
								<td> <b> isEmpty() </b> </td>
								<td> isEmpty() method returns true if, and only if, length() is 0. </td>
							</tr>
							<tr>
								<td> <b> lastIndexOf(int ch) </b> </td>
								<td> lastIndexOf(int ch) method returns the index within this string of the last occurrence of the specified character. </td>
							</tr>
							<tr>
								<td> <b> lastIndexOf(int ch, int fromIndex) </b> </td>
								<td> lastIndexOf(int ch, int fromIndex) method returns the index within this string of the last occurrence of the specified character, searching backward starting at the specified index. </td>
							</tr>
							<tr>
								<td> <b> lastIndexOf(String str) </b> </td>
								<td> lastIndexOf(String str) method returns the index within this string of the last occurrence of the specified substring. </td>
							</tr>
							<tr>
								<td> <b> lastIndexOf(String str, int fromIndex) </b> </td>
								<td> lastIndexOf(String str, int fromIndex) method returns the index within this string of the last occurrence of the specified substring, searching backward starting at the specified index. </td>
							</tr>
							<tr>
								<td> <b> length() </b> </td>
								<td> length() method returns the length of this string. </td>
							</tr>
							<tr>
								<td> <b> matches(String regex) </b> </td>
								<td> matches(String regex) method tells whether or not this string matches the given regular expression. </td>
							</tr>
							<tr>
								<td> <b> offsetByCodePoints(int index, int codePointOffset) </b> </td>
								<td> offsetByCodePoints(int index, int codePointOffset) method returns the index within this String that is offset from the given index by codePointOffset code points. </td>
							</tr>
							<tr>
								<td> <b> regionMatches(boolean ignoreCase, int toffset, String other, int ooffset, int len) </b> </td>
								<td> regionMatches(boolean ignoreCase, int toffset, String other, int ooffset, int len) method tests if two string regions are equal. </td>
							</tr>
							<tr>
								<td> <b> regionMatches(int toffset, String other, int ooffset, int len) </b> </td>
								<td> regionMatches(int toffset, String other, int ooffset, int len) method tests if two string regions are equal. </td>
							</tr>
							<tr>
								<td> <b> replace(char oldChar, char newChar) </b> </td>
								<td> replace(char oldChar, char newChar) method returns a new string resulting from replacing all occurrences of oldChar in this string with newChar. </td>
							</tr>
							<tr>
								<td> <b> replace(CharSequence target, CharSequence replacement) </b> </td>
								<td> replace(CharSequence target, CharSequence replacement) method replaces each substring of this string that matches the literal target sequence with the specified literal replacement sequence. </td>
							</tr>
							<tr>
								<td> <b> replaceAll(String regex, String replacement) </b> </td>
								<td> replaceAll(String regex, String replacement) method replaces each substring of this string that matches the given regular expression with the given replacement. </td>
							</tr>
							<tr>
								<td> <b> replaceFirst(String regex, String replacement) </b> </td>
								<td> replaceFirst(String regex, String replacement) method replaces the first substring of this string that matches the given regular expression with the given replacement. </td>
							</tr>
							<tr>
								<td> <b> split(String regex) </b> </td>
								<td> split(String regex) methods splits this string around matches of the given regular expression. </td>
							</tr>
							<tr>
								<td> <b> split(String regex, int limit) </b> </td>
								<td> split(String regex, int limit) method splits this string around matches of the given regular expression. </td>
							</tr>
							<tr>
								<td> <b> startsWith(String prefix) </b> </td>
								<td> startsWith(String prefix) method tests if this string starts with the specified prefix. </td>
							</tr>
							<tr>
								<td> <b> startsWith(String prefix, int toffset) </b> </td>
								<td> startsWith(String prefix, int toffset) method tests if the substring of this string beginning at the specified index starts with the specified prefix. </td>
							</tr>
							<tr>
								<td> <b> subSequence(int beginIndex, int endIndex) </b> </td>
								<td> subSequence(int beginIndex, int endIndex) method returns a new character sequence that is a subsequence of this sequence. </td>
							</tr>
							<tr>
								<td> <b> substring(int beginIndex) </b> </td>
								<td> substring(int beginIndex) method returns a new string that is a substring of this string. </td>
							</tr>
							<tr>
								<td> <b> substring(int beginIndex, int endIndex) </b> </td>
								<td> substring(int beginIndex, int endIndex) method returns a new string that is a substring of this string. </td>
							</tr>
							<tr>
								<td> <b> toCharArray() </b> </td>
								<td> toCharArray() method converts this string to a new character array. </td>
							</tr>
							<tr>
								<td> <b> toLowerCase() </b> </td>
								<td> toLowerCase() method converts all of the characters in this String to lower case using the rules of the default locale. </td>
							</tr>
							<tr>
								<td> <b> toLowerCase(Locale locale) </b> </td>
								<td> toLowerCase(Locale locale) method converts all of the characters in this String to lower case using the rules of the given Locale. </td>
							</tr>
							<tr>
								<td> <b> toString() </b> </td>
								<td> This object (which is already a string!) is itself returned. </td>
							</tr>
							<tr>
								<td> <b> toUpperCase() </b> </td>
								<td> toUpperCase() method converts all of the characters in this String to upper case using the rules of the default locale. </td>
							</tr>
							<tr>
								<td> <b> toUpperCase(Locale locale) </b> </td>
								<td> toUpperCase(Locale locale) method converts all of the characters in this String to upper case using the rules of the given Locale. </td>
							</tr>
							<tr>
								<td> <b> trim() </b> </td>
								<td> trim() method returns a copy of the string, with leading and trailing whitespace omitted. </td>
							</tr>
							<tr>
								<td> <b> valueOf(boolean b) </b> </td>
								<td> valueOf(boolean b) method returns the string representation of the boolean argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(char c) </b> </td>
								<td> valueOf(char c) method returns the string representation of the char argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(char[] data) </b> </td>
								<td> valueOf(char[] data) method returns the string representation of the char array argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(char[] data, int offset, int count) </b> </td>
								<td> valueOf(char[] data, int offset, int count) method returns the string representation of a specific subarray of the char array argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(double d) </b> </td>
								<td> valueOf(double d) method returns the string representation of the double argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(float f) </b> </td>
								<td> valueOf(float f) method returns the string representation of the float argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(int i) </b> </td>
								<td> valueOf(int i) met returns the string representation of the int argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(long l) </b> </td>
								<td> valueOf(long l) returns the string representation of the long argument. </td>
							</tr>
							<tr>
								<td> <b> valueOf(Object obj) </b> </td>
								<td> valueOf(Object obj) method returns the string representation of the Object argument. </td>
							</tr>
                        </tbody>
                    </table> <br/>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                     <table class="table table-borderless">
                        <tbody align="left">
                            <tr>   
								<td> <a href="exception.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Exceptions </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="innerClass.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							         Inner Class  <i class="fa fa-arrow-right ms-3"></i></a> 
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