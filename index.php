<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
     <h1>V-PRACTICAL</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body {
	background: #008B8B;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

	</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Student Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Enter your User name"required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter your Password"required><br>
          <a href="index1.php">Teacher Login</a>
          <a href="signup.php">Create an account</a>
          <button type="submit">Login</button>
     </form>
</body>
</html>  