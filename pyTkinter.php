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
					<a href="jstHome.php" class="nav-item nav-link"> Java </a>
                    <a href="pyHome.php" class="nav-item nav-link active"> Python </a>
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
                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> Python </a> </li>
                        <li class="breadcrumb-item"><a href="#"> Tkinter </a> </li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> <?php echo $_SESSION["username"]; ?> </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Python Tkinter </h1>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Python Tkinter </h4>
                    <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> provides the standard library Tkinter for creating the Graphical User Interface (GUI) for desktop based applications. Tkinter is pronounced as tea-kay-inter and serves as the Python interface to Tk, the GUI toolkit for Tcl/Tk. Tcl (pronounced as tickle) is a scripting language frequently used in testing, prototyping, and GUI development. Tk, on the other hand, is an open-source, cross-platform widget toolkit utilized by various programming languages to construct GUI programs. Python implements Tkinter as a module, serving as a wrapper for C extensions that utilize Tcl/Tk libraries. Tkinter allows you to develop desktop applications, making it a valuable tool for GUI programming in Python. Developing desktop based applications with python Tkinter is not a complex task. </p>
					
                </div>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Geometry Management in Tkinter  </h4>
                     <p class="mb-4" align="justify"> The <b class="text-success"> Python </b> Efficiently managing the geometry of Tkinter windows and widgets is essential for creating polished user interfaces. In this section, we'll cover everything from setting window dimensions to handling resizing, padding, and widget positioning. We'll explore methods like place(), grid(), and pack() to help you create organized and responsive layouts. Additionally, we'll delve into advanced techniques like the PanedWindow widget. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Tkinter pack() method  </h4>
                     <p class="mb-4" align="justify"> The pack() widget is used to organize widget in the block. The positions widgets added to the python application using the pack() method can be controlled by using the various options specified in the method call. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Tkinter grid() method  </h4>
                     <p class="mb-4" align="justify"> The grid() geometry manager organizes the widgets in the tabular form. We can specify the rows and columns as the options in the method call. We can also specify the column span (width) or rowspan(height) of a widget. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Tkinter place() method  </h4>
                     <p class="mb-4" align="justify"> The place() geometry manager organizes the widgets to the specific x and y coordinates. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Modules in Tkinter Package  </h4>
                     <table class="table table-bordered">
						<tbody>
							<tr> <td align="justify"> tkinter </td> <td align="justify"> Main Tkinter module. </td> </tr>
							<tr> <td align="justify"> tkinter.colorchooser </td> <td align="justify"> Dialog to let the user choose a color. </td> </tr>
							<tr> <td align="justify"> tkinter.commondialog </td> <td align="justify"> Base class for the dialogs defined in the other modules listed here. </td> </tr>
							<tr> <td align="justify"> tkinter.filedialog </td> <td align="justify"> Common dialogs to allow the user to specify a file to open or save. </td> </tr>
							<tr> <td align="justify"> tkinter.font </td> <td align="justify"> Utilities to help work with fonts. </td> </tr>
							<tr> <td align="justify"> tkinter.messagebox </td> <td align="justify"> Access to standard Tk dialog boxes. </td> </tr>
							<tr> <td align="justify"> tkinter.scrolledtext </td> <td align="justify"> Text widget with a vertical scroll bar built in. </td> </tr>
							<tr> <td align="justify"> tkinter.simpledialog </td> <td align="justify"> Basic dialogs and convenience functions. </td> </tr>
							<tr> <td align="justify"> tkinter.ttk </td> <td align="justify"> Themed widget set introduced in Tk 8.5, providing modern alternatives for many of the classic widgets in the main tkinter module. </td> </tr>
							<tr> <td align="justify"> tkinter.constants </td> <td align="justify"> Symbolic constants that can be used in place of strings when passing various parameters to Tkinter calls. Automatically imported by the main tkinter module. </td> </tr>
							<tr> <td align="justify"> tkinter.dnd </td> <td align="justify"> Drag-and-drop support for tkinter. This will become deprecated when it is replaced with the Tk DND. </td> </tr>
							<tr> <td align="justify"> turtle </td> <td align="justify">Turtle graphics in a Tk window. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Tkinter Widgets in Python  </h4>
                     <table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> S.No </b> </th> <th scope="col"> <b> Widget </b> </th> <th scope="col"> <b> Description </b> </th>  </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1 </td> <td align="justify"> Button </td> <td align="justify"> The Button is used to add various kinds of buttons to the python application. </td> </tr>
							<tr> <td align="justify"> 2 </td> <td align="justify"> Canvas </td> <td align="justify"> The canvas widget is used to draw the canvas on the window. </td> </tr>
							<tr> <td align="justify"> 3 </td> <td align="justify"> Checkbutton </td> <td align="justify"> The Checkbutton is used to display the CheckButton on the window. </td> </tr>
							<tr> <td align="justify"> 4 </td> <td align="justify"> Entry </td> <td align="justify"> The entry widget is used to display the single-line text field to the user. It is commonly used to accept user values. </td> </tr>
							<tr> <td align="justify"> 5 </td> <td align="justify"> Frame </td> <td align="justify"> It can be defined as a container to which, another widget can be added and organized. </td> </tr>
							<tr> <td align="justify"> 6 </td> <td align="justify"> Label </td> <td align="justify"> A label is a text used to display some message or information about the other widgets. </td> </tr>
							<tr> <td align="justify"> 7 </td> <td align="justify"> ListBox </td> <td align="justify"> The ListBox widget is used to display a list of options to the user. </td> </tr>
							<tr> <td align="justify"> 8 </td> <td align="justify"> Menubutton </td> <td align="justify"> The Menubutton is used to display the menu items to the user. </td> </tr>
							<tr> <td align="justify"> 9 </td> <td align="justify"> Menu </td> <td align="justify"> It is used to add menu items to the user. </td> </tr>
							<tr> <td align="justify"> 10 </td> <td align="justify"> Message </td> <td align="justify"> The Message widget is used to display the message-box to the user. </td> </tr>
							<tr> <td align="justify"> 11 </td> <td align="justify"> Radiobutton </td> <td align="justify"> The Radiobutton is different from a checkbutton. Here, the user is provided with various options and the user can select only one option among them. </td> </tr>
							<tr> <td align="justify"> 12 </td> <td align="justify"> Scale </td> <td align="justify"> It is used to provide the slider to the user. </td> </tr>
							<tr> <td align="justify"> 13 </td> <td align="justify"> Scrollbar </td> <td align="justify"> It provides the scrollbar to the user so that the user can scroll the window up and down. </td> </tr>
							<tr> <td align="justify"> 14 </td> <td align="justify"> Text </td> <td align="justify"> It is different from Entry because it provides a multi-line text field to the user so that the user can write the text and edit the text inside it. </td> </tr>
							<tr> <td align="justify"> 15 </td> <td align="justify"> Toplevel </td> <td align="justify"> It is used to create a separate window container. </td> </tr>
							<tr> <td align="justify"> 16 </td> <td align="justify"> Spinbox </td> <td align="justify"> It is an entry widget used to select from options of values. </td> </tr>
							<tr> <td align="justify"> 17 </td> <td align="justify"> PanedWindow </td> <td align="justify"> It is like a container widget that contains horizontal or vertical panes </td> </tr>.
							<tr> <td align="justify"> 18 </td> <td align="justify"> LabelFrame </td> <td align="justify"> A LabelFrame is a container widget that acts as the container </td> </tr>
							<tr> <td align="justify"> 19 </td> <td align="justify"> MessageBox </td> <td align="justify"> This module is used to display the message-box in the desktop based applications. </td> </tr>
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
								<td> <a href="pyHome.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
								      <i class="fa fa-arrow-left ms-3"></i> Python Home </a> </td> 
								<td width="70%">  </td>	  
								<td> <a href="pyVersions.php" class="btn btn-primary rounded-pill d-none d-lg-block"> 
							          Versions <i class="fa fa-arrow-right ms-3"></i></a> 
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