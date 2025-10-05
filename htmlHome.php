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
		function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };
		$(document).ready(function(){ $(document).on("keydown", disableF5); });
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
                    <a href="pyHome.php" class="nav-item nav-link"> Python </a>
					<a href="htmlHome.php" class="nav-item nav-link active"> HTML </a>
                    <a href="dbHome.php" class="nav-item nav-link"> Data Base </a>
					<a href="gkHome.php" class="nav-item nav-link"> General Knowledge </a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"> Logout <i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4"> General Knowledge </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> HTML </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> <?php echo $_SESSION["username"]; ?> </li>
                    </ol>
                </nav>
            </div>
        </div>

		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> Hyper Text Markup Language </h1>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <p class="mb-4" align="justify"> HTML stands for HyperText Markup Language. It is the standard language used to create and structure content on the web. It tells the web browser how to display text, links, images, and other forms of multimedia on a webpage. HTML sets up the basic structure of a website </p>
				</div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> HTML Attributes </h4>
                    <p class="mb-2" align="justify"> Attributes provide additional information about an element. They are placed inside the opening tag and are written as name="value". Common attributes include class, id, href, and src. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> HTML Tags </h4>
                    <p class="mb-2" align="justify"> HTML tags are the keywords that can be used for a specific purpose to display and format the content on the webpage. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Web Browser </h4>
                    <p class="mb-2" align="justify"> Web browsers reads HTML files and determines how to show content with the help of HTML tags. Any web browser can be used to open a . HTML file and view the results. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> &lt;!DOCTYPE&gt; Declaration </h4>
                    <p class="mb-2" align="justify"> The &lt;!DOCTYPE&gt; declaration tag is used by the web browser to understand the version of the HTML used in the document. The current version of HTML is 5 </p>
                </div>
            </div>
        </div>
	
		<div class="container-xxl">
            <div class="container">
                <div class="text-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> HTML History </h4>
					<table class="table table-bordered">
						<thead class="table-light"> 
							<tr> <th scope="col"> <b> Year </b> </th> <th scope="col"> <b> Description </b> </th> </tr>
						</thead>
						<tbody>
							<tr> <td align="justify"> 1991 </td> <td> Tim Berners-Lee created HyperText Markup Language but it was not officially released. </td> </tr>
							<tr> <td align="justify"> 1993 </td> <td> Tim Berners-Lee created the first version of HTML that was published and available to the public.  </td> </tr>
							<tr> <td align="justify"> 1995 </td> <td> HTML 2.0 was released with a few additional features along with the existing features. </td> </tr>
							<tr> <td align="justify"> 1997 </td> <td> There was an attempt to extend HTML with HTML 3.0, but it was replaced by the more practical HTML 3.2. </td> </tr>
							<tr> <td align="justify"> 1998 </td> <td> The W3C (World Wide Web Consortium) decided to shift focus to an XML-based HTML equivalent called XHTML. </td> </tr>
							<tr> <td align="justify"> 1999 </td> <td> HTML 4.01, which became an official standard in December 1999, was the most widely used version in the early 2000s. </td> </tr>
							<tr> <td align="justify"> 2000 </td> <td> XHTML 1.0, completed in 2000, was a combination of HTML4 in XML. </td> </tr>
							<tr> <td align="justify"> 2003 </td> <td> The introduction of XForms reignited interest in evolving HTML itself rather than replacing it with new technologies. This new theory recognized that XML was better suited for new technologies like RSS and Atom, while HTML remained the cornerstone of the web. </td> </tr>
							<tr> <td align="justify"> 2004 </td> <td> A W3C workshop took place to explore reopening HTML's evolution. Mozilla and Opera jointly presented the principles that later influenced HTML5. </td> </tr>
							<tr> <td align="justify"> 2006 </td> <td> The W3C expressed interest in HTML5 development and formed a working group to collaborate with the WHATWG. The W3C aimed to publish a "finished" HTML5 version, whereas the WHATWG focused on a Living Standard, continuously evolving HTML. </td> </tr>
							<tr> <td align="justify"> 2012 </td> <td> HTML5 can be seen as an extended version of HTML 4.01, which was officially published in 2012. </td> </tr>
						</tbody> 
					</table>
                </div>
            </div>
        </div>
				
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Body Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;body&gt; tag in HTML defines the main content of a web page and is always placed within the &lt;html&gt; tag as its last child. It contains everything that is visible on the page, including headings,paragraphs,images,links, tables, and lists. The &lt;body&gt; tag is required in every HTML document. If omitted, most browsers will still render the content as if the tag were present, but it’s not considered good practice.</p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Head Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;head&gt; tag in HTML is an essential element used to define the head section of an HTML document. It is placed inside the &lt;html&gt; tag, and used to store information that doesn't appear directly on the webpage itself. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Style Sheet </h4>
                    <p class="mb-2" align="justify"> CSS (Cascading Style Sheets) is a tool that defines how web documents look on screens or in print. Since its introduction in 1994, the W3C has encouraged the use of style sheets for web design. CSS lets you control the presentation of your content, whether it's on a screen, in print, or for accessibility, making web design more flexible and efficient. CSS provide easy and effective alternatives to specify various attributes for the HTML tags. Using CSS, you can specify a number of style properties for a given HTML element. Each property has a name and a value, separated by a colon. Each property declaration is separated by a semicolon. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Use CSS (Style Sheets) in HTML </h4>
                    <p class="mb-2" align="justify"> <b> External CSS </b> Define style sheet rules in a separate .css file and then include that file in your HTML document using HTML &lt;link&gt; tag. </p>
					 <p class="mb-2" align="justify"> <b> Internal CSS </b> Define style sheet rules in the header section of the HTML document using &lt;style&gt; tag. </p>
					<p class="mb-2" align="justify"> <b> Inline CSS </b> Define style sheet rules directly along-with the HTML elements using style attribute. </p>

                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Comments Tag </h4>
                    <p class="mb-2" align="justify"> The comment tag (&lt;!-- ..... --&gt;) is used to insert comments in the source code. Comments are not displayed in the browsers. You can use comments to explain your code, which can help you when you edit the source code at a later date. This is especially useful if you have a lot of code. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Abbreviatio Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;abbr&gt; tag defines an abbreviation or an acronym, like "HTML", "CSS", "Mr.", "Dr.", "ASAP", "ATM". Use the global title attribute to show the description for the abbreviation/acronym when you mouse over the element. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Acronym Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;acronym&gt; in HTML is used to define the acronym that gives useful information to browsers, translation systems, and search engines. Not supported in HTML5. Use &lt;abbr&gt; instead. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Address Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;address&gt; tag defines the contact information for the author/owner of a document or an article. The contact information can be an email address, URL, physical address, phone number, social media handle, etc. The text in the &lt;address&gt; element usually renders in italic, and browsers will always add a line break before and after the &lt;address&gt; element. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Applet Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;applet&gt; in HTML was used to embed Java applets into any HTML document, discontinued starting from HTML 5. Plug-ins are a computer programs that extend the standard functionality of the browser. Not Supported in HTML5. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Area Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;area&gt; tag defines an area inside an image map (an image map is an image with clickable areas). &lt;area&gt; elements are always nested inside a &lt;map&gt; tag. The usemap attribute in &lt;img&gt; is associated with the &lt;map&gt; element's name attribute, and creates a relationship between the image and the map. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Article Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;article&gt; tag specifies independent, self-contained content. An article should make sense on its own and it should be possible to distribute it independently from the rest of the site. Potential sources for the &lt;article&gt; element are Forum Post, Blog Post, News Story. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Aside Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;aside&gt; tag defines some content aside from the content it is placed in. The aside content should be indirectly related to the surrounding content. The &lt;aside&gt; content is often placed as a sidebar in a document. The &lt;aside&gt; element does not render as anything special in a browser. However, you can use CSS to style the &lt;aside&gt; element. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Audio Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;audio&gt; tag is used to embed sound content in a document, such as music or other audio streams. The &lt;audio&gt; tag contains one or more &lt;source&gt; tags with different audio sources. The browser will choose the first source it supports. The text between the &lt;audio&gt;  and &lt;/audio&gt;  tags will only be displayed in browsers that do not support the &lt;audio&gt; element. There are three supported audio formats in HTML: MP3, WAV, and OGG. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Bold Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;b&gt; tag  specifies bold text without any extra importance. According to the HTML5 specification, the &lt;b&gt; tag should be used as a LAST resort when no other tag is more appropriate. The specification states that headings should be denoted with the &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, and &lt;h6&gt; tags, emphasized text should be denoted with the &lt;em&gt; tag, important text should be denoted with the &lt;strong&gt; tag, and marked/highlighted text should be denoted with the &lt;mark&gt; tag. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Base Tags </h4>
                    <p class="mb-2" align="justify"> The &lt;base&gt; tag specifies the base URL and/or target for all relative URLs in a document. The &lt;base&gt; tag must have either an href or a target attribute present, or both. There can only be one single &lt;base&gt; element in a document, and it must be inside the &lt;head&gt; element. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Basefont Tags </h4>
                    <p class="mb-2" align="justify"> The &lt;basefont&gt; tag was used in HTML 4 to specify a default text-color, font-size or font-family for all the text in an HTML document. Not Supported in HTML5. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Bi-Directional Isolation Tags </h4>
                    <p class="mb-2" align="justify"> BDI stands for Bi-Directional Isolation. The &lt;bdi&gt; tag isolates a part of text that might be formatted in a different direction from other text outside it. This element is useful when embedding user-generated content with an unknown text direction. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Bi-Directional Override Tags </h4>
                    <p class="mb-2" align="justify"> BDI stands for Bi-Directional Override. The &lt;bdo&gt; tag is used to override the current text direction. (or) The &lt;bdo&gt; tag is used to specify the text direction or used to change the current direction. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Heading Tags </h4>
                    <p class="mb-2" align="justify"> Heading Tags are used to define headings of documents. You can use different sizes for your headings. HTML also has six levels of headings, which use the elements &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, and &lt;h6&gt;. While displaying any heading, the browser adds one line before and one line after that heading. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Paragraph Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;p&gt; tag offers a way to structure your text into different paragraphs. Each paragraph of text should go in between an opening &lt;p&gt; and a closing &lt;/p&gt; tag. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Line Break Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;br&gt; tag is used to insert a line break in the text. It forces the content after it to appear on the next line. This tag is used whenever you want the text to break into a new line without starting a new paragraph. The &lt;br&gt; tag is an empty tag and does not need a closing tag. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Center Tag </h4>
                    <p class="mb-2" align="justify"> The alignment should be handled using CSS rather than deprecated tags. The &lt;center&gt; tag, previously used to align content to the center of a web page, is deprecated in HTML5. You can use the text-align: center; property of CSS to center text or inline elements. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Horizonal Rule Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;hr&gt; tag is used to insert a horizontal line across the page. It is commonly used to separate sections of content visually. Like &lt;br&gt; tag, the &lt;hr&gt; tag is also an empty tag and does not need a closing tag. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Preserve Formatting Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;pre&gt; tag is used to preserve the formatting. Whenever you want to display content on the webpage exactly in the same format as it was written in the HTML document, you can use the &lt;pre&gt; tag. It preserves the formatting of source code, including line breaks and indentation. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Non-breaking Spaces </h4>
                    <p class="mb-2" align="justify"> Non-breaking spaces prevent an automatic line break and are displayed using the &amp;nbsp; entity. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Anchor Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;a&gt; tag defines a hyperlink, which is used to link from one page to another. The most important attribute of the &lt;a&gt; element is the href attribute, which indicates the link's destination. This attribute determines where the user is directed upon clicking the link. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> HTML Lists </h4>
                    <p class="mb-2" align="justify"> HTML lists are group or collection of items. These items can be both organized and unorganized depending on the requirement. They help in organizing, structuring, and presenting information to make it more user-friendly, readable, and accessible. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Unordered Lists </h4>
                    <p class="mb-2" align="justify"> Unordered lists display lists of items that are not in a specific order. The unordered lists are marked with bullet points. To create an unordered list, the &lt;ul&gt; tag is used along with the &lt;li&gt; tag. Here, the &lt;li&gt; tag specifies the list items. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Ordered Lists </h4>
                    <p class="mb-2" align="justify"> Ordered lists are lists of items that are in a specific order. The ordered lists are marked with numbers by default; you can change the numbers into alphabets, roman numbers, etc. by using the type attribute or the CSS list-style-type property. To create an ordered list, the &lt;ol&gt; tag is used along with the &lt;ol&gt; tag, where &lt;li&gt; specifies the list items. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Definition Lists </h4>
                    <p class="mb-2" align="justify"> Definition lists are lists of items with their corresponding descriptions. The definition lists are created by using the &lt;dl&gt;, &lt;dt&gt;, and &lt;dd&gt; tags. Where the &lt;dl&gt; tag specifies the Definition List, the &lt;dt&gt; tag specifies the Definition Term, and the &lt;dd&gt; tag specifies the Definition Description. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Nested Lists </h4>
                    <p class="mb-2" align="justify"> A list created within another list is known as a nested list. HTML also allows nesting of lists within one another to generate complex document structures. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Font Tag </h4>
                    <p class="mb-2" align="justify"> HTML fonts play an important role in making a website more user-friendly and increasing content readability. Font face and color depend entirely on the computer and browser that are being used to view your page, but you can use the HTML &lt;font&gt; tag to add style, size, and color to the text on your website. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Underline Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;u&gt; tag represents some text that is unarticulated and styled differently from normal text, such as misspelled words or proper names in Chinese text. The content inside is typically displayed with an underline. You can change this with CSS. Avoid using the &lt;u&gt; element where it could be confused for a hyperlink! </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Table Head Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;thead&gt; tag is used to group header content in an HTML table. The &lt;thead&gt; element is used in conjunction with the &lt;tbody&gt; and &lt;tfoot&gt; elements to specify each part of a table (header, body, footer). Browsers can use these elements to enable scrolling of the table body independently of the header and footer. Also, when printing a large table that spans multiple pages, these elements can enable the table header and footer to be printed at the top and bottom of each page. The &lt;thead&gt; element must have one or more &lt;tr&gt; tags inside. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Time Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;time&gt; tag defines a specific time (or datetime). The datetime attribute of this element is used translate the time into a machine-readable format so that browsers can offer to add date reminders through the user's calendar, and search engines can produce smarter search results. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Title Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;title&gt; tag defines the title of the document. The title must be text-only, and it is shown in the browser's title bar or in the page's tab. The &lt;title&gt; tag is required in HTML documents. The contents of a page title is very important for search engine optimization (SEO). The page title is used by search engine algorithms to decide the order when listing pages in search results. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Track Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;track&gt; tag specifies text tracks for &lt;audio&gt; or &lt;video&gt; elements. This element is used to specify subtitles, caption files or other files containing text, that should be visible when the media is playing. Tracks are formatted in WebVTT format (.vtt files). </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Teletype Text Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;tt&gt; tag in HTML stands for teletype text. It was used in HTML 4 to define text in a monospaced, teletype-style font. However, the tag has been deprecated in HTML5 because it only served a presentational purpose without adding any semantic meaning to the content. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Variable Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;var&gt; tag is used to defines a variable in programming or in a mathematical expression. The content inside is typically displayed in italic. This tag is not deprecated. However, it is possible to achieve richer effect by using CSS. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Video Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;video&gt; tag is used to embed video content in a document, such as a movie clip or other video streams. The &lt;video&gt; tag contains one or more &lt;source&gt; tags with different video sources. The browser will choose the first source it supports. The text between the &lt;video&gt; and &lt;/video&gt; tags will only be displayed in browsers that do not support the &lt;video&gt; element. There are three supported video formats in HTML: MP4, WebM, and OGG. </p>
                </div>
            </div>
        </div>
		
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h4 class="mb-3" align="left"> Word Break Tag </h4>
                    <p class="mb-2" align="justify"> The &lt;wbr&gt; (Word Break Opportunity) tag specifies where in a text it would be ok to add a line-break. When a word is too long, the browser might break it at the wrong place. You can use the &lt;wbr&gt; element to add word break opportunities. </p>
                </div>
            </div>
        </div>
		
		<br/> <br/> <br/>
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