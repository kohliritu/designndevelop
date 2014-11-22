<?php


echo "


<div id='resumeleftcontent'>
          <h1>Resume</h1>

</div><!--resumeleftcontent closed-->

        <div id='resumerightcontent'>
          <img src='images/rightContent_image.jpg' width='398' height='300' alt='image' />
          <object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='400' height='100' id='FlashID' title='text_flash'>
            <param name='movie' value='rightcontent.swf' />
            <param name='quality' value='high' />
            <param name='wmode' value='opaque' />
            <param name='swfversion' value='8.0.35.0' />
            <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
            <param name='expressinstall' value='Scripts/expressInstall.swf' />
            <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
            <!--[if !IE]>-->
            <object type='application/x-shockwave-flash' data='rightcontent.swf' width='400' height='100'>
              <!--<![endif]-->
              <param name='quality' value='high' />
              <param name='wmode' value='opaque' />
              <param name='swfversion' value='8.0.35.0' />
              <param name='expressinstall' value='Scripts/expressInstall.swf' />
              <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
              <div>
                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                <p><a href='http://www.adobe.com/go/getflashplayer'><img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' width='112' height='33' /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object>
    </div><!--rightcontent closed-->

";

?>