 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions2";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>V-PRACTICAL</title>
    <style>
      body{
        background: url("https://merriam-webster.com/assets/mw/images/quiz/quiz-games-landing-featured-lg/a%20neon%20question%20mark%20on%20a%20yellow%20background-8182-13f82d056644d7ada0083faba111ae1c@1x.jpg");
        background-size: cover;
  background-position: center;
  display: flex;
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
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>V-PRACTICAL</h1>
	</div>
      </header>
      <main>

      <div class="container">


        <h2>Quiz of WMN Subject</h2>
	<p>This is a multiple choice quize to test your knowledge about something</p>
	<ul>
		<li><strong>Number of Questions: </strong><?php echo $total; ?>
		<li><strong>Type: </strong>Multiple Choice
		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes
	</ul>
	<a href="question2.php?n=1" class="start">Start Quiz</a>
  <a href="home.php" class="start">Go To Dahboard</a>
      </div>
    </div>
    </main>
</li>


   
  </body>
</html>