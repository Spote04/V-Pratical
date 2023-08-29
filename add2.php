<?php include "database.php"; ?>

<?php 
if (isset($_POST['submit'])){
   //Get Post variables
   $question_number = $_POST['question_number'];      
   $question_text = $_POST['question_text'];
   $correct_choice = $_POST['correct_choice'];
   $choices = array();
   $choices[1] = $_POST['choice1'];
   $choices[2] = $_POST['choice2'];
   $choices[3] = $_POST['choice3'];
   $choices[4] = $_POST['choice4'];
   $choices[5] = $_POST['choice5'];

   //Question query
   $query="insert into questions2 (question_number, question) 
   	 values('$question_number','$question_text')";
   $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

   //VALIDATE INSERT
   if($insert_row){
      foreach($choices as $choice => $value){
        if($value != ''){
	       if($correct_choice == $choice){
	          $is_correct = 1;
	       } else {
	         $is_correct = 0;
	       }
              $query="insert into choices2 (question_number,is_correct,choice) 
   	          values('$question_number','$is_correct','$value')";
              $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
	          if($insert_row){
	            continue;
	          }else {
	      		die("Error: (".$mysqli->errno.") ".$mysqli->eerror);
	    	}
        }
    }
   $msg="Question has been added";
}
}
//get total questions
$query = "select * from questions2";
$questions = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total=$questions->num_rows;
$next=$total+1;
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
  
  font-size: 22px;
  
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

input[type="submit"]{
  background-color: green;
  font-size: 22px;
  padding: 14px 25px;
   color: white;

}
input[type="text"], input[type="number"]{
  width: 100%;
  padding: 5px 5px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 1px;
  box-sizing: border-box;
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
	     <h2>Add A question for WMN Subject</h2>
	     <?php 
	     	   if(isset($msg)) {
	     	      echo "<p>".$msg."</p>";
	     }
	     ?>
	     <form method="post" action="add2.php">
	     	   <p>
			<label>Question Number</label>
			<input type="number" value="<?php echo $next; ?>" name="question_number" />
		   </p>
	     	   <p>
			<label>Question</label>
			<input type="text" name="question_text" />
		   </p>
	     	   <p>
			<label>Choice #1: </label>
			<input type="text" name="choice1" />
		   </p>
	     	   <p>
			<label>Choice #2: </label>
			<input type="text" name="choice2" />
		   </p>
	     	   <p>
			<label>Choice #3: </label>
			<input type="text" name="choice3" />
		   </p>
	     	   <p>
			<label>Choice #4: </label>
			<input type="text" name="choice4" />
		   </p>
	     	   <p>
			<label>Choice #5: </label>
			<input type="text" name="choice5" />
		   </p>
	     	   <p>
			<label>Correct choice number </label>
			<input type="number" name="correct_choice" />
		   </p>
		   <p>
			<input type="submit" name="submit" value="Submit" />
		   </p>
	     </form>
	</div>
      </main>
<a href="home1.php">Go to Dashboard</a>

    <footer>
      <div class="container">
      	   Copyright &copy; 2021, V-PRACTICAL
      </div>
    </footer>
  </body>
</html>