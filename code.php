<?php


$to = $_POST['number'];
$msg = $_POST['msg'];
$submit = $_POST['submit'];

if($submit){

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.twilio.com/2010-04-01/Accounts/[YOUR ACCOUNT NUMBER]/SMS/Messages.xml');

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, array('From' => '15122714854', 'To' => "$to", 'Body' => "$msg"));
curl_setopt($ch, CURLOPT_USERPWD, '[YOUR ACCOUNT TOKEN]');

$buffer = curl_exec($ch);

curl_close($ch);

if (empty($buffer))
{
    print "Sorry, Error.";
}
else
{
    print "";
}
}

$xml = '<?xml version="1.0" encoding="utf-8"?>'; 

echo $xml;

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Twil OE</title>
<body>

<form action="" method=post>

<input type=text placeholder="number ex: 5128881212" name=number style="width:80%;"/> <br/><br/>

<textarea name=msg placeholder="text msg" style="width:80%;height:50%;"></textarea> <br/><br/><br/>

<button type=submit name=submit value=1>Send</button> <br/><br/> <a href="">Click here after sending [fixes bug]</a>

</form>

</body>
</html>
