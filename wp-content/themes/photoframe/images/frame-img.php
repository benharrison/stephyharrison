<?php
$bg = 'frame_bg.png';
$default_photo='frame_photo.jpg';

$photo=imagecreatetruecolor(315,255);

//Custom image in frame
$imglist=array();
$img_folder = "../custom/";
$imgs = dir($img_folder);

while ($file = $imgs->read()) {
	$tmp_extension = strtoupper(substr($file, -3));
   if($tmp_extension=="JPG")
     		$imglist[]= "$file";
} 
closedir($imgs->handle);

if(count($imglist)>0){
	//generate a random image from list
	shuffle($imglist);
	$image=$imglist[0];
	$pic = imagecreatefromjpeg("{$img_folder}{$image}");
}else{
	$pic = imagecreatefromjpeg($default_photo);
}	
	
	$temp=imagecreatetruecolor(300,240);
	
	$im=imagecreatefrompng($bg);
	
	$new_w=300; $new_h=240;
	$org_w=imagesX($pic); $org_h=imagesY($pic);
	$crop_x=$crop_y=0;
	if($org_h>=$org_w &&$org_h>=240){
		$crop_y=$org_h-(($org_w/$new_w)*$new_h);
	}elseif($org_w>$org_h && $org_w>=300){
		$crop_x=$org_w-(($org_h/$new_h)*$new_w);
	}
	imagecopyresampled($temp, $pic, 0,0,5,5, 300, 240, $org_w-$crop_x, $org_h-$crop_y);
	$pic = imagerotate($temp, 7, 0);
	imagecopyresampled($photo,$pic,0,0,0,0,315,255,315,255);

	imagecopyresampled($photo,$im,0,0,0,0,315,255,315,255);

	

header('Content-type: image/jpeg');
header("Cache-Control: no-cache, must-revalidate");
imagejpeg($photo,'',90);
exit;
?>