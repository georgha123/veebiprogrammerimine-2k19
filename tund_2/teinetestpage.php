<?php
  $userName = "Georg";
  $fullTimeNow = date("d.m.Y H:i:s");
  $hourNow = date("H") ;
  $partOfDay = "öö";
  
  if($hourNow >= 5){
	  $partOfDay = "hommik";
  }
  elseif($hourNow >= 11) {
	  $partOfDay = "lõuna";
  }
  else ($hourNow >=16) {
	  $partOfDay = "õhtu";
  }
?>

<!DOCTYPE html>
<html lang="et" >
<head>
  <meta charset="utf-8">
  <title>
  <?php
  echo $userName;
  ?>
  programmeerib lehte</title>


</head>
<body>
<?php
echo "<h1>" .$userName .", veebiprogrammeerimine</h1>";

  ?>
  <p>See veebilieht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu</p>
<hr>
 <?php
  echo "<P> Lehe avamise hetkel oli aeg: " .$fullTimeNow .".</p>" .$partOfDay
 ?>
</body>

</html>