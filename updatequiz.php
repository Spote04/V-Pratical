<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>UPDATE QUIZ</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
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
                <h1 align="Center">Select The subject to update the quiz</h1><br>
    <table cellpadding="5" cellspacing="0" border="1" width="100%">
        <thead>
            <tr>
                <th>SR</th>
                <th>Subject</th>
                <th>Update Quiz Button</th>
               <!--  <th>Operations</th> -->
            </tr>
        </thead>
        <tbody>
            
            <?php
             require('db_conn.php');
            $sql = "SELECT * FROM `updatequiz`";
            $result =  mysqli_query($conn, $sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
               
                <td><?php echo $row['subject']; ?></td>
                <td> <input type="button" value="Update Quiz Questions" onclick="window.location.href='<?php echo $row['upquiz']; ?>'"></td>
             
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
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

 