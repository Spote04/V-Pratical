<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
<html>
<head>
	<title>V-Practical</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style1.css">
	<style>
		body
{
	background:  #3CB371;
}

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

input[type=button] {
    width: 50%;
    background-color: yellow;
    color: #000;
   padding: 14px 20px;
   /* margin: 8px 0;
    border: none;
    border-radius: 4px;*/
    cursor: pointer;
  }

	</style>
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
		<i class="fa fa-bell" aria-hidden="true" href="displaymsg.php"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.png">
					<h1 p style="color:red">Hello <?php echo $_SESSION['name']; ?></h1>
			</div>
			<ul>
				<li>
					<a href="#">
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
					<li>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1 align="Center">Select The subject to start the quiz</h1><br>
    <table cellpadding="5" cellspacing="0" border="1" width="100%">
        <thead>
            <tr>
            	<th>SR</th>
                <th>Subject</th>
                <th>Start Quiz Button</th>
               <!--  <th>Operations</th> -->
            </tr>
        </thead>
        <tbody>
            
            <?php
             require('db_conn.php');
            $sql = "SELECT * FROM `quiz`";
            $result =  mysqli_query($conn, $sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
               
                <td><?php echo $row['subject']; ?></td>
                <td> <input type="button" value="Start Quiz" onclick="window.location.href='<?php echo $row['startquiz']; ?>'"></td>
             
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br>
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

 