




<?php
include("config.php");
    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];

$result=mysqli_query($mysqli,"INSERT into  ugac values('$id','$name','$email')");

if($result)
{
    header("location:insert.php");
}
    else{
        echo "failed";
    }
}
?>