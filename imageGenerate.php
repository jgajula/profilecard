<?php

include 'groupClasses.php';

$imagePath = getImagePath();
$contentText = getContentText();
$contentStyles = getContentStyles();

$generatedImageName = generateImage($imagePath,$contentText,$contentStyles);
 
echo '<img src="'.$generatedImageName.'"/>';

?>
