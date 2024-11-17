<?php
 
$link=mysqli_connect("localhost","root","","voyage");
 
$name=$_POST['textbox'];
$email=$_POST['datepicker1'];
$gender=$_POST['datepicker2'];
$gender1=$_POST['roomsnguests'];
 
$query="insert into booking3 values('$name','$email','$gender','$gender1')";
 
$result=mysqli_query($link, $query);
 
 header('Location: samepage.html');
 mysqli_close($link);
 
?>