<html>
<head>
  <title>Confirmation Page</title>

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
      <td width="20%">True false question</td> 
      <td><?php echo $_POST['TFQUESTION']?></td>      
    </tr>
    <tr>
      <td width="20%">true false answer</td> 
      <td><?php echo $_POST['TFANSWER']?></td>      
    </tr>
    </table>
</center>

<center><button type="button" onclick="javascript:history.back()">Back</button></center>


</body>
</html> 