<?php 
include_once 'cdb.inc.php';

$frist=$_POST['username'];
$id=$_POST['userId'];
$email=$_POST['email'];
$pas=$_POST['passid'];
$old=$_POST['old'];
$gen=$_POST['ge'];
$comn1=$_POST['s1'];
$comn2=$_POST['s2'];
$comn3=$_POST['s3'];
$comn4=$_POST['y'];
$comn5=$_POST['add1'];
$comn6=$_POST['add2'];
$comn7=$_POST['add3'];
$sql="INSERT INTO feedback(name,id,email,pass,old,gender,comn1,comn2,comn3,comn4,comn5,comn6,comn7) values ('$frist','$id','$email','$pas','$old','$gen','$comn1','$comn2','$comn3','$comn4','$comn5','$comn6','$comn7');";
        
mysqli_query($conn,$sql);
header("Location: ../sedb.php?signup=success");
