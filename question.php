<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>V-PRACTICAL</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
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
          <h1>V-Quiz</h1>
	</div>
      </header>


      <main>
      <div class="container">
        <div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
	<p class="question">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php">
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
	      <input type="submit" value="submit" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
    </main>


     </body>
</html>