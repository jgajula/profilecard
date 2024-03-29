<!DOCTYPE html>
<html>
    <head>
        <link href="/css/styles.css" rel="stylesheet" type="text/css">
        <link media="screen" rel="stylesheet" href="css/colorbox.css" />
    </head>
  
  
    
<body style="margin: 0px;font: 12px/18px 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, Verdana, sans-serif;
font-family: 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, Verdana, sans-serif;
font-size: 12px;
font-style: normal;
font-variant: normal;
font-weight: normal;
line-height: 18px;">
    
  <?php include 'imageGenerate.php'; ?>  
    
<?php if(!empty($_POST['firstName'])){
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $statusMessage = $_POST['aboutYou']; 
    $originalProfilePath = 'original'.time();
    $target_path = "/images/tmp/";
    //print_r($_FILES['profilePic']);
    $target_path = $target_path .$originalProfilePath.basename( $_FILES['profilePic']['name']); 
    try{
        $target_path = "images/tmp/";
        $target_path = $target_path .$originalProfilePath. basename( $_FILES['uploadedfile']['name']); 
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
            // echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
            // " has been uploaded";
        } else{
            echo "There was an error uploading the file, please try again!";
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    
    
    $content['status'] = $statusMessage;
    $profileCardPath = generateProfileCard($target_path,$firstName,$lastName,$content);
    
    
    
    echo "<img src='".$profileCardPath."'/>";
   // echo "first name = ".$firstName."---last name = ".$lastName.'---- status messagge = '.$statusMessage;
}
    





//    $target_path = "images/users/profilePic.png";
//    $firstName = "Jagadeesh";
//$lastName = "Gajula";
$aboutYou = "This is about me. its jagadeesh, i like to dance,i work as a software engineer, and i live in los angels.";
$city = "Los Angels, CA";
$school = "University of Illinois at Chicago";
$quote = "Dream is not what you see in sleep, its what does not let you sleep!";
$hobbies = "Dancing,Singing,Camping";
    
?>
    
    <div id="customImageHolderWrapper" style="margin: auto;background-image: url(images/tajTemplate.png); height: 400px; width: 600px;">
        <div id="customFirstRow" style="padding-left: 10px;padding-top: 10px;">
            <div id="customPic" style="float: left;">
                <img src="<?php echo $target_path?>" style="width: 100px;"/>
            </div>
            <div id="customName" style="text-transform: uppercase;font-size: 20px;margin-top: -10px;padding-left: 10px;line-height: 10px;float:left;">
                <p><?php echo $firstName?></p>
                <p><?php echo $lastName?></p>
            </div>
            <div id="customAbout" style="clear: right;text-align: right;">
                <div id="innerAboutDiv" style="width: 300px;float: right;padding-right: 10px;padding-top: 5px;">  
                <span><?php echo $aboutYou?></span>
                </div>
            </div>
        </div>
        <div id="customSecondRow">
            
        </div>
        <div id="customThirdRow" style="clear: left;margin-top: 320px;color: white;padding-left: 10px;">
            <div  id="thridLeftCorner" style="width: 250px;float: left;border-right: solid 1px white;margin-right: 10px;">
                <div id="customCity">
                    <span><?php echo "LIVING: ".$city?></span>
                </div>
                <div id="customSchool">
                    <span><?php echo "SCHOOL: ".$school?></span>
                </div>
                <div id="customCity">
                    <span><?php echo $hobbies?></span>
                </div> 
                
            </div>
            <div id="thirdRightCorner">
                <span><?php echo $quote?></span>
            </div>
        </div>
    </div>
    
    
    <div id="bodyWrapper">
        <div id="headerWrapper">
            <div id="header" style="width:100%;background-color: #fdb82b;height:80px;">
                <div id="headerContentWrapper" style="width:900px;margin: auto;">
                    <div id="logoWrapper" style="width: 94px;float: left;padding-top: 20px;">
                        <img src="/images/logo.png"/>
                    </div>
                    <div id="demoLinkWrapper" style="width: 200px;margin: auto;padding-top: 30px;">
                        <span>HOW DOES IT WORK?</span>
                    </div>
                    <div id="accountRibbon" style="float: right;margin-top: -20px;">
                        <span>REGISTER | LOGIN | HELP</span>
                    </div>    
                </div>
            </div>
        </div>
        <div id="contentWrapper">
            <div id="contentBodyWrapper" style="width: 900px;margin: auto;">
                <div id="contentBody" style="padding-left: 100px;">
                    <div id="getYoursDiv" style="margin-top: 100px;margin-bottom: 20px;">
                        <div id="getYoursTextDiv" style="float: left;padding-right: 20px;">
                            <span>GET YOURS USING</span>
                        </div>
                        <div id="facebookLogoWrapper" style="float: left;margin-top: -5px;padding-right: 20px;">
                            <img src="/images/facebook_logo.png"/>
                        </div>
                        <div id="twitterLogoWrapper" style="float: left;margin-top: -5px;padding-right: 20px;">
                            <img src="/images/twitter_logo.png"/>
                        </div>
                        <div id="onTheFlyWrapper">
                            <span><a class='inline' href="#onTheFlyContentWrapper">ON THE FLY</a></span>
                        </div>
                    </div>
                    <div id="imageGalleryWrapper">
                        <div id="imageHolderWrapper" style="float: left;padding-right: 10px;">
                            <img id="tajCardImage" src="/images/tajCard.png" width="600px;" style="box-shadow: 3px 3px 4px #000;"/>
                            <img id="effielCardImage" src="/images/effielCard.png" width="600px;" style="display:none;box-shadow: 3px 3px 4px #000;"/>
                        </div>
                        
                        <div id="imageAlbumWrapper">
                            <div id="albumEntryOne" onmouseover="document.getElementById('effielCardImage').style.display='none';document.getElementById('tajCardImage').style.display='block';">
                                <img src="/images/effielTower.png" class="albumEntry"/>
                            </div>
                             <div id="albumEntryTwo" onmouseover="document.getElementById('tajCardImage').style.display='none';document.getElementById('effielCardImage').style.display='block';">
                                <img src="/images/londonTower.png" class="albumEntry"/>
                             </div>
                             <div id="albumEntryThree" onmouseover="document.getElementById('effielCardImage').style.display='none';document.getElementById('tajCardImage').style.display='block';">
                                <img src="/images/effielTower.png" class="albumEntry"/>
                            </div>
                             <div id="albumEntryFour" onmouseover="document.getElementById('tajCardImage').style.display='none';document.getElementById('effielCardImage').style.display='block';">
                                <img src="/images/londonTower.png" class="albumEntry"/>
                            </div>
                            <div id="albumEntryFive" onmouseover="document.getElementById('effielCardImage').style.display='none';document.getElementById('tajCardImage').style.display='block';">
                                <img src="/images/effielTower.png" class="albumEntry"/>
                            </div>
                            <div id="albumEntryFour" onmouseover="document.getElementById('tajCardImage').style.display='none';document.getElementById('effielCardImage').style.display='block';">
                                <img src="/images/londonTower.png" class="albumEntry" />
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div style='display:none'>
		<div id='onTheFlyContentWrapper' style='padding:10px; background:#fff;'>
                    <div id="onTheFlyContent" style="width: 350px;margin: auto;">
                        <form enctype="multipart/form-data" name="onTheFlyForm" id="onTheFlyForm" action="/index.php" method="POST">
                            <div id="flyFirstRow">
                                <div class="firstColumn">
                                    First Name: 
                                </div>
                                <div class="secondColumn">
                                    <input class="inputText" type="text" name="firstName" id="firstName"/>
                                </div>
                            </div>
                            <div id="flySecondRow">
                                <div class="firstColumn">
                                    Last Name : 
                                </div>
                                <div class="secondColumn">
                                    <input class="inputText" type="text" name="lastName" id="lastName"/>
                                </div>
                            </div>
                            <div id="flyThirdRow">
                                <div class="firstColumn">
                                About You:  
                                </div>
                                 <div class="secondColumn">
                                    <textarea class="inputText" style="height: 200px;" name="aboutYou" id="aboutYou"></textarea>
                                 </div>
                            </div>
                            <div id="flyEightRow">
                              <div class="firstColumn">
                                Upload your pic:
                              </div>
                              <div class="secondColumn">
<!--                                <input  type="file" name="profilePic" id="profilePic" />-->
                                <input class="inputText" name="uploadedfile" type="file" />
                              </div>
                            </div>  
                            <div id="flySubmit" style="text-align: right;padding-right: 50px;padding-top: 20px;">
                                <input type="submit" value="Generate"/>
                            </div>
                        </form>
                    </div>
		</div>
	</div>
        <div id="footerWrapper" style="clear: both;margin-top: 100px;width: 100%;background-color: #999;height: 80px;">
            <div id="footer" style="width: 900px;margin: auto;">
                <div id="footerLinks" style="padding-top: 30px;text-align: center;">
                <span>YOUR ACCOUNT | ABOUT US | SUPPORT | BLOG | PRIVACY | TERMS</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/jsapi"></script>
    <script>
        google.load('jquery', '1.3.2');
    </script>
    <script type="text/javascript" src="/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript">
        $(".inline").colorbox({inline:true, width:"50%"});
        $('#onTheFlyFormTest').submit(function(){
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var aboutYou = $('#aboutYou').val();
            var city = $('#city').val();
            var school = $('#school').val();
            var quote = $('#quote').val();
            var hobbies = $('#hobbies').val();
            var profilePic = $('#profilePic').val();
            alert(firstName+lastName+aboutYou+city+school+quote+hobbies+'----'+profilePic);
            
                var formData = new FormData($('form')[0]);
                for(key in formData){
                    alert(key+'='+formData[key]);
                }
                alert(formData);
            $.ajax({
                url: 'upload.php',  //server script to process data
                type: 'POST',
                xhr: function() {  // custom xhr
                myXhr = $.ajaxSettings.xhr();
                if(myXhr.upload){ // check if upload property exists
                   // myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // for handling the progress of the upload
                }
                return myXhr;
            },
            //Ajax events
            //beforeSend: beforeSendHandler,
            success: completeHandler,
            //error: errorHandler,
            // Form data
            data: formData,
            //Options to tell JQuery not to process data or worry about content-type
            cache: false,
            contentType: false,
            processData: false
            });
            
            alert('ajax completed');
            
            //document.write("<img src='"+profilePic+"'/>");
            return false;});
        
        
            function completeHandler(jqXHR, textStatus){
                alert('request completed');
            }
            
            function errorHanlder(jqXHR, textStatus, errorThrown){
                alert('error occured');
            }
        
    </script>
</body>
</html>
