
  <?php


include("config.php");
  
  $result=mysqli_query($mysqli,"SELECT*from ugac ORDER BY id");
  
  
  
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ugac</title>
</head>
<body>
    <form action="function.php" method="POST">
id<input type="id" name="id"><br>
    name<input type="text" name="name"><br>
   email<input type="email" name="email"><br>
   <input type="submit" name="submit"><br>
    </form>
    <table border="2px solid green" align="center" style="line-height:25px;">
    <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>ID</th>
    </tr>
<?php
while($res=mysqli_fetch_array($result)){
echo '<tr>';
echo '<td>'.$res['name'].'</td>';
echo '<td>'.$res['email'].'</td>';
echo '<td>'.$res['id'].'</td>';
echo '</tr>';
}

?>

</table>
</body>


</html>