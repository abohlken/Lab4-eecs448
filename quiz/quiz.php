<?php
	echo "<html><body>";

	# get values of quiz
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];

	echo "<p>Question 1: What is 10+10?<br>You answered: " . $q1 . "<br>Correct answer: 1010</p>";
	echo "<p>Question 2: What is 1+01?<br>You answered: " . $q2 . "<br>Correct answer: 2</p>";
	echo "<p>Question 3: What is 1?<br>You answered: " . $q3 . "<br>Correct answer: 1</p>";
	echo "<p>Question 4: What is the capital of Topeka?<br>You answered: " . $q4 . "<br>Correct answer: T</p>";
	echo "<p>Question 5: What is 10+10?<br>You answered: " . $q5 . "<br>Correct answer: 20</p>";

	echo "</body></html>";
?>
