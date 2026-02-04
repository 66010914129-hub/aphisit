<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อภิสิทธิ์ สีโยเฮียง</title>
</head>

<body>
<h1>อภิสิทธิ์ สีโยเฮียง</h1>
<form method ="post" action="">
กรอกคะแนน <input type="number"min="0" max="100"name="a"autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>
<?php
if(isset($_POST['Submit'])){
  $score=$_POST['a'];
  if($score>=80){
	  echo"ได้เกรดA";
  }else if($score>=70){
	  echo"ได้เกรดB";
  }else if($score>=60){
	  echo"ได้เกรดC";
  }else if($score>=50){
	  echo"ได้เกรดD";
	   }else{
		   echo"ได้เกรดF";
	   }
}
?>

	   
</body>
</html>