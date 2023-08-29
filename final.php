 <?php 
 include "database.php"; 
 ?>

<?php session_start(); ?>

<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($con,$query);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      body{
       background: url("https://merriam-webster.com/assets/mw/images/quiz/quiz-games-landing-featured-lg/a%20neon%20question%20mark%20on%20a%20yellow%20background-8182-13f82d056644d7ada0083faba111ae1c@1x.jpg");
      background-size: cover;
  background-position: center;
font-size: 20px;
}
a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}

    </style>
    <meta charset="utf-8" />
    <title>V-PRACTICAL</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
  
    <div id="container">
      <header>
        <div class="container">
          <h1>V-Quiz</h1>
	</div>

      </header>


      <main>
	<div class="container">
	     <h2>You are Done!</h2>
	     <p>Congrats! You have completed the test</p>
	     <p>Final socre: <?php echo $_SESSION['score']; ?></p>
	     <a href="question.php?n=1" class="start">Take Test Again</a>
	     <?php session_destroy(); ?>
       <a href="home.php" class="start">Go to Dashboard</a>
	</div>
      </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2021, V-PRACTICAL
      </div>
    </footer>
  </body>
</html>