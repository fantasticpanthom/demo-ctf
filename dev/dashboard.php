<?php

$userdetails=<<<XML
<users>
        <user>
        <username>Guest</username>
        <password>2Yj$41zGxJdQxh</password>
	<message>Retrieve "secret" to complete the challenge</message>
	<secret>flag{xpath_injection}</secret>
	</user>
        </users>
XML;

if ($_POST['username'] === 'Guest'){
$xml = new SimpleXMLElement($userdetails);
$query = "//user[username/text()='".$_POST['username']."' and password/text()='".$_POST['password']."']/message/text()";
$result = $xml->xpath($query);
if(count($result) == 0)
{
	echo "<?xml version='1.0' encoding='UTF-8'?><message><error>Wrong Password</error></message>";
								        } else {
										echo "<?xml version='1.0' encoding='UTF-8'?><message><success>".$result[0]."</success></message>";
														        }
															} else {
																echo "Invalid username or password!";
															}
?>
