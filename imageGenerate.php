<?php
//header('Content-type: image/png');
include 'groupClasses.php';

$imagePath = getImagePath();
$contentText = getContentText();
$contentStyles = getContentStyles();

$generatedImageName = generateImage($imagePath,$contentText,$contentStyles);
 






$profilePicPath = 'images/profilePic.png';

$profilePicPath = resizeProfilePic($profilePicPath);

$imagePathAfterProfile = addProfilePic($profilePicPath,$generatedImageName);

echo '<img src="'.$imagePathAfterProfile.'"/>';

?>
