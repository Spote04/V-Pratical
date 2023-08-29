<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Videos</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
<html>
<head>
  <title>V-Practical</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <style type="text/css">
    .section-1 h1 {
 
  font-size: 60px;
}
body
{
  background: #3CB371;
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
          <a href="#">
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
      <h1> View Videos </h1><br>
      <?php
    include("config1.php");
 
    
     ?>
     <div>
    <?php
     $fetchVideos = mysqli_query($con, "SELECT location FROM video ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
 
       echo "<div >";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";
     }
     ?>
    </div>

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

 