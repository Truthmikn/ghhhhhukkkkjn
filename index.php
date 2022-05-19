<?php
/*

» In The Name Of God «

Source Name » Web Api Time In Photo & Show

Coder » T.me/Aquarvis

Channel » T.me/LegacySource

Channel » T.me/Megaran_Tm

*/
//========== Includes & Headers ==========
error_reporting(0);
date_default_timezone_set("asia/tehran");
header('Content-type: image/jpeg');
/*

» In The Name Of God «

Source Name » Web Api Time In Photo & Show

Coder » T.me/Aquarvis

Channel » T.me/LegacySource

Channel » T.me/Megaran_Tm

*/
// =========================== Create Photo ===========================
$jpg_image = imagecreatefromjpeg(rand(1,6).'.jpg'); // دریافت یک عکس رندوم
$color = imagecolorallocate($jpg_image, 245,239,248); // تنظیم رنگ
imagettftext($jpg_image, 120, 0, 155, 370, $color, 'LegacyMegaran.ttf', date('H:i')); // تنظیم ساعت روی عکس
imagejpeg($jpg_image, null,1000); // ساخت و ذخیره عکس
imagedestroy($jpg_image); // آزاد سازی رم
/*

» In The Name Of God «

Source Name » Web Api Time In Photo & Show

Coder » T.me/Aquarvis

Channel » T.me/LegacySource

Channel » T.me/Megaran_Tm

*/
?>