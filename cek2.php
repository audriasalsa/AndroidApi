<?php 
ini_set("memory_limit","256M");
	$nama = $_POST['nama'];
	//mkdir("upload");
	$file = $_FILES['dokumen'];
	$nama_file = $file['name'];
	$nama_tmp = $file['tmp_name'];
	$upload_dir = "upload/";
	$result = move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
	if (isset($_POST)){
		$im = imagecreatefromjpeg($nama_file);
		if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
		{
    		echo 'Image converted to grayscale.';
    		imagejpeg($im, $nama_file);
		}
		else
		{
    		echo 'Conversion to grayscale failed.';
		}
		imagedestroy($im);
	}
	// echo "File berhasil diunggah.";
	
	// header("Content-type: image/jpeg");
	//$image = imagecreatefromjpeg($nama_file);
	// imagefilter($image, IMG_FILTER_GRAYSCALE);
	// imagejpeg($image);
?>

	<!DOCTYPE html>
	<html>
	<head>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="table-responsive">
			<?php
		 		$nama2 = substr($nama,3);
				$config = array(
					'nama' => $nama,
		 			'hasil'=>$nama2,
		 			'url'=>'http://localhost/andro/'.$nama_file,
		 		);
			echo json_encode($config);
		?>
<!-- 		  	<table class="table">
		  		<tr>
		  			<td>Nama</td>

		  			<td> <?php echo $nama ?> </td>
		  		</tr>
		  	</table> -->
		 </div>
	</body>
	</html>
