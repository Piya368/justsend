
<?php include ('conn.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
  
	<form action="conn.php" method="post">
	 <center>
   <label> Your Name </label><br>
   <input type="text" name="name"> <br><br> 
   <label> Number </label><br>
   <input type="Number" name="number"><br><br>
   <label> Message </label><br>
   <textarea name="msg"></textarea><br>
  <a href="index.php"><input type="submit" name="submit" class="btn"> </a>
    </center>
   </form>



</body>
</html>