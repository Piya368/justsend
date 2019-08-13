<?php include ('conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php while ($row = mysqli_fetch_array($results)) { ?>

    <table>  
     <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['number']; ?></td>
      <td><?php echo $row['msg']; ?> </td>
      <td><?php echo $row['code']; ?></td>
     </tr>
 </table>

 <?php } ?>

</body>
</html>