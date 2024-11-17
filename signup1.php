<?php
 
$link=mysqli_connect("localhost","root","","voyage");
 
$name=$_POST['textbox1'];
$email=$_POST['textbox2'];
$gender=$_POST['textbox3'];
$gender1=$_POST['textbox4'];
 
$query="insert into signup1 values('$name','$email','$gender','$gender1')";
 
$result=mysqli_query($link, $query);
 
 header('Location: new.html');
 mysqli_close($link);
 
?>