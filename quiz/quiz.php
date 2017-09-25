<?php
	echo "<html><body>";

	# get values of quiz
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];

	$numCorrect = 0;
	$accuracy = 0;

	# display correct answers
	echo "<p>Question 1: What is 10+10?<br>You answered: " . $q1 . "<br>Correct answer: 1010</p>";
	echo "<p>Question 2: What is 1+01?<br>You answered: " . $q2 . "<br>Correct answer: 2</p>";
	echo "<p>Question 3: What is 1?<br>You answered: " . $q3 . "<br>Correct answer: 1</p>";
	echo "<p>Question 4: What is the capital of Topeka?<br>You answered: " . $q4 . "<br>Correct answer: T</p>";
	echo "<p>Question 5: What is 10+10?<br>You answered: " . $q5 . "<br>Correct answer: 20</p>";

	# calculate number of correct answers
	if($q1=="1010")
		$numCorrect++;
	if($q2=="2")
		$numCorrect++;
	if($q3=="1")
		$numCorrect++;
	if($q4=="T")
		$numCorrect++;
	if($q5=="20")
		$numCorrect++;

	# calculate accuracy
	$accuracy = $numCorrect*20;

	# display number of correct answers and accuracy
	echo "Number of correct answers: " . $numCorrect . "<br>";
	echo "Accuracy: " . $accuracy . "%<br>";
	echo "</body></html>";
?>
