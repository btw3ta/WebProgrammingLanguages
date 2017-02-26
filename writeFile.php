<?php session_start()?>
<html>
<head>
<title>Submission Confirmation</title>
<script type="text/javascript">
function submitNewQuestion() {
	window.location = "assignment3.php"
}
</script>
</head>
<body>
<?php 
	//echo $_SESSION['TFQUESTION'];
	if (!empty($_SESSION['TFQUESTION'])) {
		echo "You submitted a true-false question. Next up- reimplement the write file code here";
		session_destroy();/*otherwise the variable remains filled, and returning to the question submission page, 
		regardless of what you enter, returns you here*/
	} else if (!empty($_SESSION['MCQUESTION'])) {
		echo "You submitted as multiple choice question. Next up- reimplement the write file code here";
		session_destroy();
	} else if (!empty($_SESSION['SAQUESTION'])) {
		echo "You submitted a short answer question. Next up- reimplement the write file code here";
		session_destroy();
	} else {
		echo "Something has gone wrong, no session variables are filled!";
	}
?>
<center><button style="height:3%;width:auto;background-color:lightgreen" type="button" onclick="submitNewQuestion()">Submit Another Question</button></center>
</body>
</html>