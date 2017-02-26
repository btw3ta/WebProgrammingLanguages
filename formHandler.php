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
  <center><h2>Confirm your Input</h2></center>
  <center>
  <p>
    The following table lists the Question and Answer.
  </p>
  
  <table name="truefalse" cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavender">
    <tr bgcolor="#FFFFFF">
      <td align="center"><strong>Parameter</strong></td>
      <td align="center"><strong>Value</strong></td>
    </tr>

    <tr>
      <td width="20%">True-False Question</td> 
      <td><?php $_SESSION['TFQUESTION'] = $_POST['TFQUESTION'];
      			echo $_SESSION['TFQUESTION'];?></td>      
    </tr>
    <tr>
      <td width="20%">True-False Answer</td> 
      <td><?php $_SESSION['TFANSWER'] = $_POST['TFANSWER'];
      echo $_SESSION['TFANSWER'];?></td>      
    </tr>
    </table>
</center>

<center><button style="height:3%;width:5%;background-color:red" type="button" onclick="javascript:history.back()">Back</button></center>
<center><button style="height:3%;width:5%;background-color:lightgreen" type="button" onclick="submitForm()">Confirm</button></center>


</body>
</html> 