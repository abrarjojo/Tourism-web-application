<?php
	
if ($_SERVER['REQUEST_METHOD']== 'POST'){
	
$fname = $_POST["fname"];	
$lname = $_POST["userId"];	
$email = $_POST["email"];	
$gender = $_POST["gender"];	
$age = $_POST["age"];	
$comments = $_POST["comments"];	
$password = $_POST=['password'];		
	
	if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($password)) {
		
		include("../includes/cdb.php");
		
$result =mysqli_query($dbc, "SELECT email FROM infoUser");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       	
if($email == $row["email"])	
{$mssg=" بريدك الالكتروني مسجل لدينا ";break;}
else{$mssg=" بريدك الالكتروني غير مسجل لدينا ";}
        
} 

}else {
 $mssg="0 results";
}
		mysqli_query($dbc, "INSERT INTO feedback(name, id, email, pass, old, gender, comments ) VALUES('$fname','$lname','$email','$gender','$age','$comments','$password')");
		
		$registered = mysqli_affected_rows($dbc);
		
		echo "<script type=\"text/javascript\">"."alert('".$mssg." ,شكراً، ارائكم مصدر الهامنا "."');".
        "</script> "; 
		
	} else {
		
		echo "<h3><em><u><p style='color:red'><script type=\"text/javascript\">".
        "alert('ارجو اكمال الحقول اولاً');".
        "</script></p></u></em></h3>";
        
        
		
	}
		
	
}else {
	
	echo "<h3><em><u>Please enter your details below</u></em></h3>";
	
}	

		

?>


<!DOCTYPE html>
<html>
    
<head>
    <title>Travel Time </title>
<div class="inc">
    <?php include ("../includes/logo.php");?></div>
    <link href="../style/style.css" rel="stylesheet" />
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
<!-- start of form -->
<form action="feedback.php" method="post" >
	     <h3> لمعرفة ارائكم عن المدونة</h3>
        
        <br/> 
<fieldset id="feedback">
<legend>ارائكم تهمنا</legend>
<br/>
<label > ماذا هو اكثر شيء عجبك </label>
    <br/>
<label > لاشيء
<input type="checkbox" name="comments"  style="margin-bottom:15px">
</label><label>الجدولة للسفرات وحساب التكلفة
 <input type="checkbox"  name="comments" style="margin-bottom:15px">
                                </label>
   <label>حبكة التخطيط
  <input type="checkbox"  name="comments" style="margin-bottom:15px">                                 
</label>
<ul>
<li><label >: هل الموقع يعتبر مفيد بالنسبة لك</label></li>
<li><input type="radio" name="comments" value="yas" /><span>نعم </span></li>
<li><input type="radio" name="comments" value="no" /><span>لا</span></li>
<li><label for="add1">:اي موضوع اعجبك</label></li>
<li><input type="text" name="comments" size="12" /></li>
<li><label for="add2">: هل تستخدم الموقع بإستمرار</label></li>
<li><input type="add2" name="comments" size="12" /></li>
 <li><label for="add3">:التعليق</label></li><br/>
<li><textarea name="comments" id="comments"></textarea></li><br/>
</ul>
</fieldset>
    <br/>
          
         
<!--<div id="opener">
<a href="#1" name="1" onclick="return show(); "> اذا كنت مستخدم جديد</a>
         </div>
<div id="benefits" style="display:none;"> -->
<fieldset id="info">
              
<legend>املأ المعلومات الشخصية</legend> <br>     
<ul>
<li><label for="fname">الاسم:</label></li>
<li><input type="text" name="fname" size="12" /></li>
<li><label for="userId">رقم المستخدم</label></li>
<li><input type="text" name="userId" size="12" /></li>
<li><label for="password">:كلمة السر </label></li>
<li><input type="password" name="password" size="12" /></li>
<li><label for="age">العمر:</label></li>
<li><input type="text" name="age" size="12" /></li>
<li><label for="ge">الحالة:</label></li>
<li><select id=selectel name="gender"  >
<option value="-1" selected>اختر الحالة</option>
<option value="1">رجل  </option>
<option value="2">إمرأة</option>
</select></li>
<li><label for="email">اليميل:</label></li>
<li><input type="text" name="email" size="40" /></li>
</ul>
</fieldset>
<input type="submit" name="submit"/>
	
</form>
<div class="inc"><?php include ("../includes/footer.php");?></div></body>
</html>