<?php
if (isset($_POST)){
$im = imagecreatefromjpeg('bunga.jpg');

if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
{
    echo 'Image converted to grayscale.';

    imagejpeg($im, 'bunga.jpg');
}
else
{
    echo 'Conversion to grayscale failed.';
}

imagedestroy($im);
}
?>

<html>
<head>
	<title>Image Filtering</title>
</head>
<body>

</body>
</html>