<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Message</title>
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
					<li>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1 align="Center">View Teacher Message</h1><br>
    <table cellpadding="5" cellspacing="0" border="1" width="100%">
        <thead>
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
               <!--  <th>Operations</th> -->
            </tr>
        </thead>
        <tbody>
            
            <?php
             require('db_conn1.php');
            $sql = "SELECT * FROM `contact`";
            $result =  mysqli_query($conn, $sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['message']; ?></td>
               <!--  <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->
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

 