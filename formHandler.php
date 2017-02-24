<html>
<head>
  <title>Simple form handler</title>
</head>

<body bgcolor="#EEEEEE">
  <center><h2>Simple Form Handler</h2></center>
  <p>
    The following table lists all parameter names and their values that were submitted from your form.
  </p>

  <table cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavender">
    <tr bgcolor="#FFFFFF">
      <td align="center"><strong>Parameter</strong></td>
      <td align="center"><string>Value</string></td>
    </tr>
    <tr>
      <td width="20%">True false question</td> 
      <td><?php echo $_POST['TFQUESTION']?></td>      
    </tr>
    <tr>
      <td width="20%">true false answer</td> 
      <td><?php echo $_POST['TFANSWER']?></td>      
    </tr>
    <tr>
      <td width="20%">Multiple choice Question</td>
      <td><?php echo $_POST['MCQUESTION']?></td>      
    </tr>
    <tr>
      <td width="20%">Multiple Choice Answer</td>
      <td><?php echo $_POST['MCANSWER']?></td>      
    </tr>
    <tr>
      <td width="20%">Short Answer question</td>
      <td><?php echo $_POST['SAQUESTION']?></td>      
    </tr>
    <tr>
      <td width="20%">Short Answer - answer</td>
      <td><?php echo $_POST['SAANSWER']?></td>      
 
  </table>

</body>
</html> 