<?php
// membuat grayscale image
header("Content-type: image/jpeg");
$image = imagecreatefromjpeg('bunga.jpg');
imagefilter($image, IMG_FILTER_NEGATE);
imagejpeg($image);
?> 