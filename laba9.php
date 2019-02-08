<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="../style/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<header>

    <img src="http://year.pp.ua/wp-content/uploads/2017/10/05ff1214e09478347e221ef2723b472e.jpg">

</header>
<div class="menu" >
    <a href="laba1.php">laba 1  </a>
    <a href="laba2.php">laba 2  </a>
    <a href="laba3.php">laba 3  </a>
    <a href="laba4.php">laba 4  </a>
    <a href="laba5.php">laba 5  </a>
    <a href="laba6.php">laba 6  </a>
    <a href="laba7.php">laba 7  </a>
    <a href="laba8.php">laba 8  </a>
    <a href="laba9.php">laba 9  </a>

</div>
<div class="content">
<?php
$width = 1368;
$height = 667;
$im = ImageCreate($width,$height);

$white = ImageColorAllocate($im, 255, 255, 255);
$blue1 = ImageColorAllocate($im, 32, 32, 76);
$blue2 = ImageColorAllocate($im, 37, 18, 85);
$black = ImageColorAllocate($im, 0, 0, 0);
ImageFill($im, 0, 0, $blue1);

$step = 0.1;
$start = -2 * M_PI;
$end = 2 * M_PI;
$scale = $width / ($end - $start);

ImageLine($im, $width / 2, 0, $width /2, $height, $white);
ImageLine($im, 0, $height / 2, $width, $height / 2, $white);

ImageLine($im, $width / 2 - $scale / 10, 0 + $scale / 10, $width /2, 0, $white);
ImageLine($im, $width / 2, 0, $width /2 + $scale / 10, 0 + $scale / 10, $white);

ImageLine($im, $width - $scale / 10, $height / 2 - $scale / 10, $width, $height / 2, $white);
ImageLine($im, $width, $height / 2, $width - $scale / 10, $height / 2 + $scale / 10, $white);

ImageString($im, 4, $width / 2  - $scale / 5, 0, "y", $white);
ImageString($im, 4, $width - $scale / 10, $height / 2 + $scale / 5, "x", $white);
ImageString($im, 5, $width / 2 + $scale / 10, $height / 20, "y=tg(x)", $white);

for($i = $width / 2; $i <= $width; $i += 35){
    ImageLine($im, $i, $height/2 - $scale / 15, $i, $height/2 + $scale / 15,$white);
    ImageLine($im, $width - $i, $height/2 - $scale / 15, $width - $i, $height/2 + $scale / 15,$white);
}
for($i = $height / 2; $i <= $height; $i += 35){
    ImageLine($im, $width / 2 - $scale / 15, $i, $width / 2 + $scale / 15, $i, $white);
    ImageLine($im, $width / 2 - $scale / 15, $height - $i, $width / 2 + $scale / 15, $height - $i, $white);
}


$xx = $start;
$yy = tan($xx);
for($x = $start + $step; $x <= $end; $x += $step){
    $y = tan($x);
    if (abs(cos($x)) > $step){
        ImageLine($im, ($xx - $start) * $scale , -$yy  * $scale + $height/2, ($x - $start) * $scale, -$y * $scale + $height/2, $black);
    }
    $xx = $x;
    $yy = $y;
}

Header("Content-type: Image/png");
ImagePng($im);
ImageDesroy($im);
?>        </div >
<div class="menu" >
    <a href="laba1.php">laba 1  </a>
    <a href="laba2.php">laba 2  </a>
    <a href="laba3.php">laba 3  </a>
    <a href="laba4.php">laba 4  </a>
    <a href="laba5.php">laba 5  </a>
    <a href="laba6.php">laba 6  </a>
    <a href="laba7.php">laba 7  </a>
    <a href="laba8.php">laba 8  </a>
    <a href="laba9.php">laba 9  </a>

</div>
<footer>
    2018&copy; <a href="/">Кіно портал</a>

</footer>



</body>
</html>