<?php 
 
   
   $name = "";
   $number = "";
   $msg = "";
   $id = 0;

   $db = mysqli_connect('localhost','root', '', 'bc');


   function code()
   {
    $codegeneration = '0123456789abcdefghijklmnopqrstuvwxyz';

      $b = substr(str_shuffle($codegeneration), 0, 5);
      return $b;
   }
    
    if (isset($_POST['submit'])) 
    {
    	$name = $_POST['name'];
    	$number = $_POST['number'];
    	$msg = $_POST['msg'];
      $code=code();

    	$query = " INSERT INTO bc (name,number,msg,code) VALUES ('$name','$number','$msg','$code')";


    	mysqli_query($db,$query);
    	header('location:index.php');
    }


    $results = mysqli_query($db, "SELECT * FROM bc");

?>