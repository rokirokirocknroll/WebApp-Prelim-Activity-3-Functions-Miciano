<!DOCTYPE html>
<html>
<head> <title> PHP Functions </title>
<style>body {font-family:Arial,Helvetica, sans-serif; font-size: 16px;}</style>
<body>
<h1>PHP Functions</h1>
<p>PHP script for Selecting Traffic Color using Functions</p>
<h2>Select Traffic Light State</h2>

    
<form method="post" action="">
<label for="trafficLight">Choose the traffic light color (1=Red, 2=Yellow, 3=Green):</label>
<input type="number" id="trafficLight" name="trafficLight" min="1" max="3" required><br><br>
<input type="submit" value="Show Light Color">
</form>

<?php

function getTrafficLightColor($state) {
switch ($state) {
case 1:
return "Red";
case 2:
return "Yellow";
case 3:
return "Green";
default:
return "Invalid input. Please choose 1, 2, or 3.";
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {     
$lightState = $_POST['trafficLight'];
$lightColor = getTrafficLightColor($lightState);
echo "<h3>The traffic light color is: $lightColor</h3>";
}

?>
</body>
</html>
