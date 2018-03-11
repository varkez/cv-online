<?php

$uploadfile = "protected\franck-cariou-cv.pdf";

if( isset($_POST['mon-cv']) === true ) 
{ 
echo "*" . $uploadfile . "*<br>"; 

header("Pragma: public"); 
header("Expires: 0"); 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/force-download"); 
header("Content-Type: application/octet-stream"); 
header("Content-Type: application/download"); 
header("Content-Disposition: attachment; filename=".basename($uploadfile).";"); 
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize($uploadfile)); 
readfile("$uploadfile");
}
?>