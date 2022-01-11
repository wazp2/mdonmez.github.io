<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=0">

<title>Hesaplama Aracı</title>	
<link rel="stylesheet" type="text/css" href="style.css">
<body>	


<div class= "center"> 
<form>
<span></span>
<div class= "txt_field"> 
<input type="text" name="Quiz1" required autocomplete="off">
<span></span>
<label>1. Quiz Notu</label>
</div>

<div class= "txt_field"> 
<input type="text" name="Quiz2" required autocomplete="off"> 

<label>2. Quiz Notu</label>
<span></span>
</div>

<div class= "txt_field"> 
<input type="text" name="OdevOrt" required autocomplete="off"> 
<label>Odev Notu</label>
<span></span>
</div>

<div class= "txt_field"> 
<input type="text" name="MidTerm" required autocomplete="off"> 
<label>Mid Term Notu</label>
<span></span>
</div>

<div class= "txt_field"> 
<input type="text" name="Final" required autocomplete="off"> 

<label>Final Notu</label>
<span></span>
</div>
<div class ="copyrg"> 
<p>MehmetDönmez tarafından oluşturuldu, Kaynak kodlara ulaşmak için <a href="https://github.com/wazp2/mdonmez.github.io" target="_blank">tıkla.</a></p>
</div>
<div class ="pass"> 
<button type="submit" name="submit" value="submit" >Hesapla</button>
</div>
</div>
</form>


<?php
 if(isset($_GET['submit'])) {
 	$quiz1 = $_GET['Quiz1'];
 	$quiz2 = $_GET['Quiz2'];
 	$odev = $_GET['OdevOrt'];
 	$midterm = $_GET['MidTerm'];
 	$final = $_GET['Final'];
 	$quizort = ($quiz1 + $quiz2) / 2;
 	$quizodev = ($quizort + $odev) /2;
 	$quizodevmidterm = ($quizodev + $midterm) / 2;
 	$sonuc = ($quizodevmidterm + $final) /2;

 	echo "<div class='sonuc'>";
 	    print "Ders Ortalaması: ";
        print $sonuc; 
        echo "</div>";
 	
 	

 }
?>


</body>


</head>
</html>