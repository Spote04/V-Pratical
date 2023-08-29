<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Practical</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style>
		   body
{
  background: #3CB371;
}
		input[type=file]{
    width: 100%;
  border: 1px solid green;
  border-radius: 2px;
  padding: 5px 8px;
  outline: none;
  cursor: pointer;
}
input[type=submit] {
    width: 100%;
    background-color: yellow;
    color: #000;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
input[type=submit]:hover {
    background-color: #45a049;
  }
	</style>
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
					<a href="about1.php">
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
			<h1>Upload File</h1><br>
			<?php include 'filesLogic.php';?>
			        <form action="upload_practical.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile"> <br><br>
          <input type="submit" name="save" value="Upload">
        </form>
			</section>
	</div>

</body>
</html>
<!--      
<?php 
}
// else{
//      header("Location: index.php");
//      exit();
// }
 ?> -->
