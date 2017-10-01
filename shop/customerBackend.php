<?php

$uName = $_POST["username"];
$pass = $_POST["password"];

$ffxiv = $_POST["ffxiv"];
$ow = $_POST["overwatch"];
$bb = $_POST["bloodborne"];

$shipping = $_POST["shipping"];

echo "<p class='header'>Thanks for shopping at our store, " . $uName . "!</p>";
echo "<p>Your password was: ". $pass . "</p>";

echo "<table><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";
echo "<tr><td>Final Fantasy XIV: Stormblood</td><td>" . $ffxix . "</td><td>$30</td><td>$" . ($ffxiv*30) . "</td></tr>";
echo "<tr><td>Overwatch</td><td>" . $ow . "</td><td>$40</td><td>$" . ($ow*40) . "</td></tr>";
echo "<tr><td>Bloodborne</td><td>" . $bb . "</td><td>$10</td><td>$" . ($ffxiv*10) . "</td></tr></table>";

?>