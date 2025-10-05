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
                        <li class="breadcrumb-item"><a href="#">Development Tools</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"> GIT Repository </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h1 class="mb-3"> GIT Repository </h1>
                    <p class="mb-4" align="justify"> Git is a modern and widely used distributed version control system in the world. It is developed to manage projects with high speed and efficiency. The version control system allows us to monitor and work together with our team members at the same workspace. </P>
					<p class="mb-4" align="justify"> Git is an open-source distributed version control system. It is designed to handle minor to major projects with high speed and efficiency. It is developed to co-ordinate the work among the developers. The version control allows us to track and work together with our team members at the same workspace. </p>
                </div>
            </div>
        </div>
 
		<div class="container-xxl">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1500px;">
                    <h3 class="mb-3" align="left"> GIT Config </h3>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git config command sets the author name and email address respectively to be used with your commits.</td>
                            </tr>
                            <tr>
                                <td> <b> Syntax for Author Name </b> </td> <td> : </td>
                                <td> git config –global user.name "[name]" </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax for Email Address </b> </td> <td> : </td>
                                <td> git config –global user.email "[email address]" </td>
                            </tr>
                            <tr>
                                <td> <b> Example for Author Name </b> </td> <td> : </td>
                                <td> git config –global user.name "JaladhiSoftTechnology" </td>
                            </tr>
                            <tr>
                                <td> <b> Example for Email Address </b> </td> <td> : </td>
                                <td> git config –global user.email "jaladhisofttechnologies@gmail.com" </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                    <h3 class="mb-3" align="left"> GIT INIT </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git init command is used to start a new repository. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git init [repository name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git init /home/jaladhisofttechnology/document/jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 class="mb-3" align="left"> GIT CLONE </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git clone command is used to obtain a repository from an existing URL. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git clone [url] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git clone https://github.com/jaladhisofttech/employee.git </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT BRANCH </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git branch command lists all the local branches in the current repository. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git branch  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git branch </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT BRANCH [BRANCH NAME] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git branch [branch name] command creates a new branch. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git branch [branch name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git branch JST </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT ADD </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git add is used to adds a file to the staging area. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git add [file]  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git add employee </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT COMMIT </h3>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git commit records or snapshots the file permanently in the version history. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git commit -m "[Type in the commit message]" </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git commit -m "Updated the Employee Service Class" </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                    <h3 class="mb-3" align="left"> GIT COMMIT -A</h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git commit -a is used commits any files you have added with the git add command and also commits any files you have changed since then. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git commit -a </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git commit -a </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 class="mb-3" align="left"> GIT DIFF </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git diff command shows the file differences which are not yet staged. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git diff </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git diff </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT DIFF –STAGED </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git diff –staged command shows the differences between the files in the staging area and the latest version present. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git diff –staged  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git diff –staged </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT DIFF [FIRSTBRANCH] [SECONDBRANCH] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git diff [firstBranch] [secondBranch] command shows the differences between the two branches mentioned. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git diff [firstBranch] [secondBranch] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git diff jst jst1 </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT TAG </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git tag [commitID] command is used to give tags to the specified commit. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git tag [commitID]  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git tag b01775f589389ujghf890382m89nkl0091234 </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT SHOW </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git show [commit] command shows the metadata and content changes of the specified commit. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git show [commit]  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git show n091775f589389ujghf890382m89nkl0094 </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT LOG </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git log command is used to list the version history for the current branch. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git log  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git log </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT LOG –FOLLOW [FILE] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git log –follow [file] command lists version history for a file, including the renaming of files also. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git log –follow [file]  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git log -–follow jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 class="mb-3" align="left"> GIT RM </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git rm command deletes the file from your working directory and stages the deletion. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git rm [file]  </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git rm jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 align="left"> GIT STATUS </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git status command lists all the files that have to be committed. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git status </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git status </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					<h3 align="left"> GIT RESET </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git reset command unstages the file, but it preserves the file contents. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git reset [file] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git reset jst.css </td>
                            </tr>
                        </tbody>
                    </table> <br/>
					
                    <h3 class="mb-3" align="left"> GIT RESET [COMMIT] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git reset [commit] command undoes all the commits after the specified commit and preserves the changes locally. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git reset [commit] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git reset u89ijk09836472nhbgf7483920 </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT RESET -HARD [COMMIT] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git reset [commit] command discards all history and goes back to the specified commit. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td>git reset --hard [commit] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git reset u89ijk09836472nhbgf7483d3210 </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT RESET -SOFT [COMMIT] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git reset [commit] command discards some history and goes back to the specified commit. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git reset --soft [commit] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git reset u89ijk09836472nhbgf673h889m83920 </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT BRANCH -D [BRANCH NAME] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git branch -d [branch name] command deletes the feature branch. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git branch -d [branch name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git branch -d jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT CHECKOUT [BRANCH NAME] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git checkout [branch name] command is used to switch from one branch to another branch. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git checkout [branch name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git checkout jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT CHECKOUT -B [BRANCH NAME] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git checkout -b [branch name] command creates a new branch and also switches to it. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git checkout -b [branch name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git checkout -b jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT MERGE </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git merge command merges the specified branch’s history into the current branch. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git merge [branch name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git merge jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT REMOTE </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git remote command is used to connect your local repository to the remote server. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git remote add [variable name] [Remote Server Link] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git remote add origin https://github.com/jaladhisofttech/jst.git </td>
                            </tr>
                        </tbody>
                    </table> <br/>	
                	<h3 align="left"> GIT PUSH </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git push command sends the committed changes of master branch to your remote repository. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git push [variable name] master </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git push origin master </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT PUSH [VARIABLE NAME] [BRANCH] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git push [variable name] [branch] command sends the branch commits to your remote repository. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git push [variable name] [branch] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git push origin master </td>
                            </tr>
                        </tbody>
                    </table> <br/>
                	<h3 align="left"> GIT PUSH -ALL [VARIABLE NAME] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git push -all [variable name] command pushes all branches to your remote repository. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git push –all [variable name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git push --all origin </td>
                            </tr>
                        </tbody>
                    </table> <br/>					
	                <h3 align="left"> GIT PUSH [VARIABLE NAME] : [BRANCH NAME] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git push [variable name] : [branch name] command deletes a branch on your remote repository. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git push [variable name] : [branch name] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git push origin : jst </td>
                            </tr>
                        </tbody>
                    </table> <br/>	
	                <h3 align="left"> GIT PULL [REPOSITORY LINK] </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git pull [Repository Link] command fetches and merges changes on the remote server to your working directory. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git pull [Repository Link] </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git pull https://github.com/jaladhisofttech/jst.git </td>
                            </tr>
                        </tbody>
                    </table> <br/>
	                <h3 align="left"> GIT STASH SAVE </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git stash save command temporarily stores all the modified tracked files.
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git stash save </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git stash save </td>
                            </tr>
                        </tbody>
                    </table> <br/>
	                <h3 align="left"> GIT STASH POP </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git stash pop command restores the most recently stashed files. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git stash pop </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git stash pop </td>
                            </tr>
                        </tbody>
                    </table> <br/>
	                <h3 align="left"> GIT STASH LIST </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git stash list command lists all stashed changesets.</td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git stash list </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git stash list </td>
                            </tr>
                        </tbody>
                    </table> <br/>
	                <h3 align="left"> GIT STASH DROP </h3> <br/>
                    <table class="table">
                        <tbody align="left">
                            <tr>
                                <td> <b> Definition </b> </td> <td> : </td>
                                <td> git stash drop command discards the most recently stashed changeset. </td>
                            </tr>
                            <tr>
                                <td> <b> Syntax </b> </td> <td> : </td>
                                <td> git stash drop </td>
                            </tr>
                            <tr>
                                <td> <b> Example </b> </td> <td> : </td>
                                <td> git stash drop stash@{0} </td>
                            </tr>
                        </tbody>
                    </table> <br/>
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