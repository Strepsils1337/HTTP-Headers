<?
header('Content-type: application/jpg');
header('Content-Disposition: attachment; filename="img.jpg"');
readfile('new_img.jpg');

?>