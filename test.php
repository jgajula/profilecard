<?php
phpinfo();
try{
    echo "ddddd";
    if(function_exists('imagegrabscreen'))
        {echo "true"; }else{echo "false";}
//$im = imagegrabscreen();
//imagepng($im, "myscreenshot.png");
//imagedestroy($im);
}catch(Exception $e){
    echo $e->getMessage();
}

echo "asdfa";
?>