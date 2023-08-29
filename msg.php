<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
<html>
<head>
	<title>V-Practical</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style1.css">
	<style type="text/css">
		input[type="submit"]{
  background-color: green;
  font-size: 22px;
  padding: 14px 25px;
   color: white;
}
body
{
	background: #3CB371;
}
input[type="text"], input[type="number"], input[type="email"], textarea {
  width: 100%;
  padding: 5px 5px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 1px;
  box-sizing: border-box;
}
	</style>
</head>
<body>
<?php
    
	if(!isset($_SESSION['user_name'])) 
	{
		  header("location:index.php");
	  }

	  ?>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Dashboard<b></b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.png">
					<h1 p style="color:red">Hello <?php echo $_SESSION['name']; ?></h1>
			</div>
			<ul>
				<li>
					<a href="add.php">
						<i class="fa fa-question-circle" aria-hidden="true"></i>
						<span>Add Quiz</span>
					</a>
				</li>
				<li>
					<a href="tdownload.php">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>Download Practical</span>
					</a>
				</li>
					<li>
					<a href="#">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>Add Message</span>
					</a>
				</li>
				<li>
					<a href="index2.php">
						<i class="fa fa-video-camera" aria-hidden="true"></i>
						<span>Add Videos</span>
					</a>
				</li>
				<li>
					<a href="about.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>About</span>
					</a>
				</li>
				<li>
					<a href="logout1.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<?php
        require('db_conn1.php');

        if(isset($_POST['id']) &&isset($_POST['name'])&&isset($_POST['contact'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['message']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $sql = "INSERT INTO `contact`(`id`,`name`, `contact`, `subject`, `email`, `message`, `entryTime`) VALUES ($id,'$name',$contact,'$subject','$email','$message',NOW())";
           $result = mysqli_query($conn, $sql);
           echo "
           <script>
           alert('Submitted');
           </script>";
    
    }
    ?> 

		<section class="section-1">
			<h1> Message for Student </h1><br><br>
			 <form method="POST">
			 	ID: <input type="number" name="id" id="id" required> <span id="err"></span><br>
        Name: <input type="text" name="name" id="name"required><br>
        Contact: <input type="number" name="contact" id="contact" required> <span id="err"></span><br>
        Email: <input type="email" name="email" id="email" required><br>
        Subject: <input type="text" name="subject" id="subject"required><br>
        Message: <textarea name="message" id="message" cols="30" rows="3" required></textarea><br>
        <input type="submit" value="Submit" name="submitBtn"><br>
    </form>

	<form method="POST">
	<h1>Send Mail to CR</h1>
	<input type="submit" value="Send Mail" name="sendmail" onclick="openmail()">
	</form>
	<script>
	function openmail()
	{
		window.open("mail.php");
	
	}
	</script>
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

 