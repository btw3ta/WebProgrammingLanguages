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
		<p>The following table lists the Question and Answer.</p>


		<table name="truefalse" cellSpacing=1 cellPadding=1 width="75%"
			border=1 bgColor="lavender">
			<tr bgcolor="#FFFFFF">
				<td align="center"><strong>Parameter</strong></td>
				<td align="center"><strong>Value</strong></td>
			</tr>

			<table name="shortanswer" cellSpacing=1 cellPadding=1 width="75%"
				border=1 bgColor="lavender">
				<tr>
					<td width="20%">Short Answer question</td>
					<td><?php $_SESSION['SAQUESTION'] = $_POST['SAQUESTION'];
					echo $_SESSION['SAQUESTION'];?></td>
				</tr>
				<tr>
					<td width="20%">Short Answer - answer</td>
					<td><?php $_SESSION['SAANSWER'] = $_POST['SAANSWER'];
					echo $_SESSION['SAANSWER'];?></td>
			</table>
			</center>

			<center>
				<button style="height:3%;width:5%;background-color:red" type="button" onclick="javascript:history.back()">Back</button>
			</center>
			<center>
				<button style="height: 3%; width: 5%; background-color: lightgreen"
					type="button" onclick="submitForm()">Confirm</button>
			</center>

</body>
</html>
