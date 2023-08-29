<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>UPLOAD VIDEO</title>
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
  <?php
    include("config1.php");
 
    if(isset($_POST['upload'])){
       $maxsize = 104857600; // 100 MB
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 100MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO video(name,location) VALUES('".$name."','".$target_file."')";

              $query = mysqli_query($con,$query);
              if($query)
              {
              echo "Upload successfully.";
              }
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
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
      <h1> Upload Videos </h1><br><br>
       <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='upload'>
    </form>
    
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

 