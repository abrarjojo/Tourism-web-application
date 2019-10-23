<?php
  include ("../includes/cdb.php");


$email = $_POST["email"];	

$sql ="SELECT  infoUser.fname , infoUser.lname , infoUser.email ,  infoUser.brith , infoUser.nationalty,infoUser.city,infoUser.state,infoUser.ZipCod , user.userId
FROM infoUser,user
WHERE infoUser.email=user.email AND user.email='$email';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       	
$fname =$row["fname"];	
$lname = $row["lname"];	
$email = $row["email"];	
$gender = $row["brith"];	
$age = $row["nationalty"];	
$comments = $row["city"];	
$st=$row["state"];
$zic=$row["ZipCod"];  
$id=$row["userId"];

 echo "frist name " . $fname."<br>". " last Name: " . $lname."<br>". "email " .$email."<br>". " brith day ".$gender."<br>". " nationalty " . $age."<br>"." city " . $comments ."<br>"." state ".$st."<br>". "ZipCod ".$zic."<br>"." User Id ".$id."<br>";
    }  
}else {
    echo "0 results";
}
?>

<html>
<head>
    <title>Travel Time </title>
<div class="inc"><?php include ("../includes/logo.php");?></div>
    <link href="../style/style.css" rel="stylesheet" />
<div class="inc"><?php include ("../includes/logo.php");?></div>
</head>
<body>
       
<div class="topPage">
  <br/> <br/>
    <div class="centered"></div>
<br/> <br/>
</div><br/> <br/>
    <div id ="header" >
        <br/>
        <br/>
       <a href="../index.php">Home TT </a>
        <a href="about.php">About Us TT</a>
        <a href="contact.html"> Contact TT </a>
        <a href="feedback.php">Feedback TT</a>
         <a href="getuserinfo.php">User profile TT </a>
         <a href="table.html">Schedule travelars TT </a>
        <a href="ImageGallery.php">Picture Gallery TT </a>
        <a href="travel2.php">Video TT </a>
 <a href="https://abrarblog.000webhostapp.com/">Blog TT </a>

        <br/>
        <br/>
        <br/>
    </div>
     <br/><br/>
   <div id="bodyPage">
<!-- start of form -->
<form action="getuserinfo.php" method="post">
	
	<p>Email : <input type="text" name="email" size="40" maxlength="40" /></p>
	
	<br />
	
	<input type="submit" name="submit"/>
	
       </form></div>
<div class="inc"><?php include ("../includes/footer.php");?></div>
    </body>
</html>