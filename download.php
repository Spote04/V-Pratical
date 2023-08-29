
<!doctype html>
<html>
  <head>
  	
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
    
 

