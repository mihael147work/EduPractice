<?php
//Created By Driv3r Kr Dont Chnage Copyright
?>
<html>
<head>
	<title>DRIV3R KR PRIV8 MAILER</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="">
<style type="text/css">
input {
	font-size: 120%;
	color: #5a5854;
	background-color: #f2f2f2;
	border: 1px solid #bdbdbd;
	padding: 5px 5px 5px 30px;
	background-repeat: no-repeat;
	background-position: 7px 5px ;
	margin-bottom: 10px;
}
textarea {
		font-size: 105%;
	 resize: none;
}
input:focus, input:hover {
	background-color: #ffffff;
	border: 1px solid #b1e1e4;
}
#sendnow {
    width: 7em;  height: 2em;
}
.textbox {
}
.sname {
}
.ssub {
}
.smsg {
	background-color: #f2f2f2;
	border:1px solid #bdbdbd;
	border-left: 13px solid #bdbdbd;
}
.smail {
	background: #f2f2f2;
	border:1px solid #bdbdbd;
	border-left: 13px solid #bdbdbd;	
}
.bott {
}
h1 {
	background-color: DarkCyan;
}
div {
	margin: 50 100 20 100;
	background-color: #F6F6F6;
}
</style>
</head>
<body bgcolor='#011711'>
	<form action="" method="post" enctype="multipart/form-data" name="form1" align='center'>
  <input type="hidden" name="veio" value="sim">

    <tr>
<div align='center's >
<h1><font color='FFFFFF' face='arial'></font>
	<br>
</h1>
<div align='center'>
<input type='text' class='textbox' name='de' placeholder='Your Email' size='50' >  <input type='text' name='nome' class='sname' placeholder='Your Name' >
<br>
<br>
<input name="ssubject" type='text' size='78' class='ssub' placeholder='Subject '> 
</div>
<div align='center'>
<textarea class='smsg' placeholder='Put Your Letter Here' name="bodys" rows='10' cols='63'></textarea> <textarea name='emails' class='smail' placeholder='Put Maillist Here' rows='10' cols='35'></textarea>
<br>
<input type='submit' value="Send" class='bott' id='sendnow'>
<br>
<br>
</form>
</div>
<?php
$testa = $_POST['veio'];
if($testa != "") {
$message = $_POST['bodys'];
$subject = $_POST['ssubject'];
$nome = $_POST['nome'];
$from = $_POST['de'];
$from_mail = $nome.'<'.$from.'>';
$to = $_POST['emails'];
$email = explode("\n", $to);
$message = stripslashes($message);
$i = 0;
$count = 1;
while($email[$i]) {
$ok = "ok";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=UTF-8\n";
$headers .= 'From: ' . $from_mail . "\r\n";
if(mail($email[$i], $subject, $message, $headers))
echo "<font color=DarkCyan>Number: $count <b>".$email[$i]."</b> <font color=DarkCyan>Rezult inchallah....!</font><br><hr>";
else
echo "<font color=red>Number: $count <b>".$email[$i]."</b> <font color=red>Error in Sending ??</font><br><hr>";
$i++;
$count++;
}
$count--;
if($ok == "ok")
echo ""; 
}
?>
</body>