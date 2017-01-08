<?php
$bg = 'title_bg.jpg';
if(!function_exists("gd_info"))
	die(header("Location: $bg"));

$im=imagecreatefromjpeg($bg);

// The text to draw
$white = imagecolorallocate($im, 255, 255, 255);
$text=$_GET['var'];
$text=urlencode($text); //need to encode again to prevent "+" missing
$text=urldecode($text);
$text=stripcslashes($text);
$find=array("&amp;");
$replace=array("&");
$text=str_replace($find,$replace,$text);

$font = 'gabrwffr.ttf';
imagettftext($im, 22, 2, 20, 70, $white, $font, $text);

header('Content-type: image/jpeg');
imagejpeg($im,'',85);

exit;
?>