<?php

$name = $_POST["name"];
$usertele = $_POST["user"];
$messagee = $_POST["message"];


$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('africa /Algeria');
$times = date("h:i:s A");
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (3600 * 1);


$API_KEY = "7795004935:AAExLdYhEEPDE3cB20mUPo7Iw5zT6nr4pnY"; //Token
$admin = 5000510953 ; //id admin

$text = urlencode("

• ⏰ الساعة ( $times $aa ) .
• 🗓 بتاريخ ( ".date("Y")."/".date("n")."/".date("d")." ) .

إخْبَارًا جَيِّدَة لَدَيْك رِسَالَة جَدِيدَة 📩

$messagee
");

$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>صارحني - Sarhne</title
<link rel="icon" href="https://a.top4top.io/p_2587yh6k40.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

  <body style="background-color:Black;">
<div class="jumbotron text-center">
	<img src="https://telegra.ph/file/48ff2fcbfe4dd5cc8f7c8.jpg" alt="HTML5 Icon" style="width:128px;height:128px;">
  <h1>تَمّ إرْسَال رِسَالَتَك بِنَجَاح .</h1>
  
 
  <h2><img src="https://k.top4top.io/p_2587ajc8w0.png" style="width: 50px;height: 35px;">theonlyziad 🖤</h2>  

 </div>
 <div class="jumbotron text-center">	

    <h2><label class="iol"><strong>شُكْرًا عَلَى إرْسَالِ رِسَالَتَك</strong></label></h2>
<br>
<h5>&copy; 2023 by theonlyziad 🖤</h5>

 </div>
<meta http-equiv="refresh" content="5;url=https://t.me/theonlyziad" />
