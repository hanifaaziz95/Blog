<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
$title = $_GET["title"];
$body = $_GET["body"]; 
date_default_timezone_set('UTC');
$date = date("D jS M Y, H:i a e");
$break = ("<br />");
$openh1 =("<h1>");
$closeh1 = ("</h1>");
$openitalic = ("<i>");
$closeitalic = ("</i>");
$opencolor = ("<font color='white'>");
$closecolor = ("</font color>");
$opensize = ("<font size = '2'>");
$closesize= ("</font>");
$file = file_get_contents("entries.txt");
$line = ("<hr />");

$handle = fopen("entries.txt","w+") or die("unable to open file!");


fwrite($handle,$openitalic);
fwrite($handle,$opencolor);
fwrite($handle, $date);
fwrite($handle,$closeitalic);
fwrite($handle,$closecolor);
fwrite($handle, $break);
fwrite($handle, $openh1);
fwrite($handle, $title);
fwrite($handle, $closeh1);
fwrite($handle, $opensize);
fwrite($handle, $body);
fwrite($handle, $closesize);
fwrite($handle, $line);
fwrite($handle, $break);
fwrite($handle, $file);
fclose($handle);

Header("Location: viewblog.php")


?>
	
</body>
</html>
