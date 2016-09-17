
<?php
    $folder_path = '../assets/img/services/tools1/'; //image's folder path
	// $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
	$num_files = glob($folder_path . "*.{jpg}", GLOB_BRACE);
	// $folder = opendir($folder_path);
	$numberImg = count($num_files);
	$total = count($num_files);
	// closedir($folder);
	echo json_encode($total);
    

?>
