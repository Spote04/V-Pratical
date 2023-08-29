<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DOWNLOAD PRACTICAL</title>
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
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.png">
					<h1 p style="color:red">Hello <?php echo $_SESSION['name']; ?></h1>
			</div>
			<ul>
				<li>
					<a href="updatequiz.php">
						<i class="fa fa-question-circle" aria-hidden="true"></i>
						<span>Add Quiz</span>
					</a>
				</li>
				<li>
					<a href="tdownload.php">
						<i class="fa fa-download" aria-hidden="true"></i>
						<span>Download Practical</span>
					</a>
				</li>
					<li>
					<a href="msg.php">
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
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<?php include 'filesLogic.php';?>
			<h1 align="Center">Download Student Practical</h1><br>
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="tdownload.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>



			</section>
	</div>

</body>
</html>
     
<?php 
}else
{
     header("Location: index.php");
     exit();
}
 ?>
