<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
<html>
<head>
	<title>V-Practical</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style1.css">
</head>
<body>

	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Dashboard<b></b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="" aria-hidden="true"></i>
		<a href="displaymsg.php"><i class="fa fa-bell" aria-hidden="true"></i></a>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.png">
					<h1 p style="color:red">Hello <?php echo $_SESSION['name']; ?></h1>
			</div>
			<ul>
				<li>
					<a href="selectquiz.php">
						<i class="fa fa-question-circle" aria-hidden="true"></i>
						<span>Quiz</span>
					</a>
				</li>
				<li>
					<a href="upload_practical.php">
						<i class="fa fa-upload" aria-hidden="true"></i>
						<span>Upload Practical</span>
					</a>
				</li>
				<li>
					<a href="viewvideo.php">
						<i class="fa fa-video-camera" aria-hidden="true"></i>
						<span>Videos</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>About</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				
			</ul>
		</nav>
		<section class="section-1">
			<h2 style="color:green;">GROUP MEMBERS</h2><br>
			<h2 style="color:green;">Prasad Kashid</h2>
			<h2 style="color:green;">Yash Hajare</h2>
			<h2 style="color:green;">Sanket More</h2>
			<h2 style="color:green;">Shubham Pote</h2><br>
			<h2 style="color:green;">Project Guide :- Miss Prerana Jalgaonkar</h2><br><br>
			</section>
	</div>

</body>
</html>
     
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

 