<!DOCTYPE html>
<html>
<head>
<title>Time calculator</title>
<meta charset="utf-8">
</head>
<body>
<h1>Time calculator</h1>    
<form action="cours2.php" method="post">
<input type="text" name="time1" placeholder="hh mm ss">
<input type="text" name="time2" placeholder="hh mm ss">
<input type="submit" name="submit" value="Add">
</form>
<?php
if(isset($_POST['submit'])){
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $time1 = explode(" ", $time1);
    $time2 = explode(" ", $time2);
    $time1 = $time1[0] * 3600 + $time1[1] * 60 + $time1[2];
    $time2 = $time2[0] * 3600 + $time2[1] * 60 + $time2[2];
    $time = $time1 + $time2;
    $hours = floor($time / 3600);
    $minutes = floor(($time / 60) % 60);
    $seconds = $time % 60;
    echo "The sum of the times is: $hours:$minutes:$seconds";
}
echo "<br>";
if (isset($_POST['Keep'])) {
    $time1 = $time;
}
?>
<form action="cours2.php" method="post">
<input type='submit' name='keep' value='Keep'>
</form>
</body>
</html>
