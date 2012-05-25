<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 
 */

function generateImage($imagePath,$contentText,$contentStyles){
    
    //$contentText = getContentText();
    $statusText = $contentText['status'];
    $backgroundImagePath = $imagePath;
    //$contentStyles = getContentStyles();
// try changing this as well
$fontSize = $contentStyles['status']['size'];
$width = imagefontwidth($fontSize) * strlen($statusText);
$height = imagefontheight($fontSize) ;
$im = imagecreatefrompng($backgroundImagePath);


$red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$fontColor = imagecolorallocate($im, $contentStyles['status']['red'], $contentStyles['status']['green'],$contentStyles['status']['blue']);

// Make the background red
//imagefilledrectangle($im, 0, 0, 299, 99, $red);

// Path to our ttf font file
$font_file = $contentStyles['status']['font'];

// Draw the text 'PHP Manual' using font size 13
imagefttext($im, $fontSize, $contentStyles['status']['angle'], $contentStyles['status']['x'], $contentStyles['status']['y'], $fontColor, $font_file, $statusText);

// Output image to the browser
//header('Content-Type: image/png');
$generatedImagePath = time().'.png';
$generatedImagePath = 'images/tmp/'.$generatedImagePath;
imagepng($im,$generatedImagePath);
imagedestroy($im);

return $generatedImagePath;

}


function getImagePath(){
    
    return "images/tajTemplate.png";
}

function getContentText(){
    
    $content['status'] = "Your status message display here, and you can add more 
        content here,basically it can contain a total of 256 or more characters";
    return $content;
}

function getContentStyles(){
    $style['status']['x'] = 20;
    $style['status']['y'] = 350;
    $style['status']['font'] = 'arial.ttf';
    $style['status']['size'] = 13;
    $style['status']['angle'] = 0;
    $style['status']['red'] = 255;
    $style['status']['green'] = 255;
    $style['status']['blue'] = 255;
    
    return $style;
}


?>
