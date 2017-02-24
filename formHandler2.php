<html>
<head>
  <title>Confirmation Page</title>
</head>

<body bgcolor="#EEEEEE">
  <center><h2>Confirm your Input</h2></center>
  <center>
  <p>
    The following table lists the Question and Answers.
  </p>

<table name="multiplechoice" cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavender">

    <tr bgcolor="#FFFFFF">
      <td align="center"><strong>Parameter</strong></td>
      <td align="center"><strong>Value</strong></td>
    </tr>
    <tr>
      <td width="20%">Multiple choice Question</td>
      <td><?php echo $_POST['MCQUESTION']?></td>      
    </tr>
    <tr>
      <td width="20%">Incorrect Answer 1</td>
      <td><?php echo $_POST['MCANSWER1']?></td>      
    </tr>
    <tr>
      <td width="20%">Incorrect Answer 2</td>
      <td><?php echo $_POST['MCANSWER2']?></td>      
    </tr>
    <tr>
      <td width="20%">Incorrect Answer 3</td>
      <td><?php echo $_POST['MCANSWER3']?></td>      
    </tr>
    <tr>
      <td width="20%">Correct Answer</td>
      <td><?php echo $_POST['MCANSWER4']?></td>      
    </tr>
    </table>
    </center>

    <center><button style="height:5%;width:5%;background-color:red" type="button" onclick="javascript:history.back()">Back</button></center>


    </body>
</html> 