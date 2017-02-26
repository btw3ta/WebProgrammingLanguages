<?php session_start()?>
<html>
<head>
<title>Confirmation Page</title>
<script type="text/javascript">
	function submitForm() {
		window.location = "writeFile.php"
	}
</script>
</head>

<body bgcolor="#EEEEEE">
	<center>
		<h2>Confirm your Input</h2>
	</center>
	<center>
		<p>The following table lists the Question and Answers.</p>

		<table name="multiplechoice" cellSpacing=1 cellPadding=1 width="75%"
			border=1 bgColor="lavender">

			<tr bgcolor="#FFFFFF">
				<td align="center"><strong>Parameter</strong></td>
				<td align="center"><strong>Value</strong></td>
			</tr>
			<tr>
				<td width="20%">Multiple choice Question</td>
				<td><?php $_SESSION['MCQUESTION'] = $_POST['MCQUESTION'];
				echo $_SESSION['MCQUESTION'];?></td>
			</tr>
			<tr>
				<td width="20%">Incorrect Answer 1</td>
				<td><?php $_SESSION['MCANSWER1'] = $_POST['MCANSWER1'];
				echo $_SESSION['MCANSWER1'];?></td>
			</tr>
			<tr>
				<td width="20%">Incorrect Answer 2</td>
				<td><?php $_SESSION['MCANSWER2'] = $_POST['MCANSWER2'];
				echo $_SESSION['MCANSWER2'];?></td>
			</tr>
			<tr>
				<td width="20%">Incorrect Answer 3</td>
				<td><?php $_SESSION['MCANSWER3'] = $_POST['MCANSWER3'];
				echo $_SESSION['MCANSWER3'];?></td>
			</tr>
			<tr>
				<td width="20%">Correct Answer</td>
				<td><?php $_SESSION['MCANSWER4'] = $_POST['MCANSWER4'];
				echo $_SESSION['MCANSWER4'];?></td>
			</tr>
		</table>
	</center>

	<center>
		<button style="height: 3%; width: 5%; background-color: red"
			type="button" onclick="javascript:history.back()">Back</button>
	</center>
	<center>
		<button style="height: 3%; width: 5%; background-color: lightgreen"
			type="button" onclick="submitForm()">Confirm</button>
	</center>

</body>
</html>
