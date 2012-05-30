<?php
include 'groupClasses.php';

$imagePath = getImagePath();
$contentText = getContentText();
$contentStyles = getContentStyles();

$generatedImageName = generateImage($imagePath,$contentText,$contentStyles);
 
$profilePicPath = getProfilePicPath();

$profilePicPath = resizeProfilePic($profilePicPath);

$imagePathAfterProfile = addProfilePic($profilePicPath,$generatedImageName);

$firstName = getFirstName();
$lastName = getLastName();

$imagePathAfterName = addName($imagePathAfterProfile,$firstName,'first',$contentStyles);
$imagePathAfterName = addName($imagePathAfterName,$lastName,'last',$contentStyles);

echo '<img src="'.$imagePathAfterName.'"/>';

?>
