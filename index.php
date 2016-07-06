<?php
  $page = "about";
?>

<!DOCTYPE html>
<html lang="en">

  <?php include_once("_head.php") ?>

  <body>

  <!-- Google Analytics tracking code -->
  <?php include_once("analyticstracking.php") ?>
  <?php include_once("navigation.html") ?>

  <!-- Page Content -->
    <div class="wrap">

      <div class="container" id="infoPage">

        <div class="row">

  <!-- Begin Actual About/Tutorial/FAQs -->
          <div class="col-md-12" id="infoCenterDiv">
            
  <!-- Chat Bubble -->
            <div class="chatBubble animated bounceIn">
              <img class="img-responsive" style="margin:0 auto; padding-top:20px;" src="http://www.shmap.me/img/footerlogo.png" alt="Shmap Logo" />
              <h1 class="text-center"><em class="orangeColor scriptFont">About, Tutorial &amp; FAQ's</em></h1>
              <div class="row">
                <div class="col-sm-4">
                  <h3 class="text-center"><a href="#aboutShmap"><strong><u>About Shmap</u></strong></a></h3>
                  <h3 class="text-center"><a href="#tutorial"><strong><u>Shmap Tutorial</u></strong></a></h3>
                  <h4 class="text-center"><a href="#signingUp">Signing Up</a></h4>
                  <h4 class="text-center"><a href="#basics">Shmap Basics</a></h4>
                  <h4 class="text-center"><a href="#sendingShmaps">Sending Shmaps</a></h4>                  
                </div>
                <div class="col-sm-4">
                  <h3 class="text-center"><a href="#mainSections"><strong><u>Main Sections of Shmap</u></strong></a></h3>
                  <h4 class="text-center"><a href="#tabs">Intro to Shmap Tabs</a></h4>
                  <h4 class="text-center"><a href="#messages">Messages Tab</a></h4>
                  <h4 class="text-center"><a href="#explore">Explore Tab</a></h4>
                  <h4 class="text-center"><a href="#contacts">Contacts Tab</a></h4>
                  <h4 class="text-center"><a href="#settings">Settings Tab</a></h4>
                                
                </div>
                <div class="col-sm-4">
                  <h3 class="text-center"><a href="#FAQs"><strong><u>Frequently Asked Questions</u></strong></a></h3>
                </div>


              </div>
              <br>
              <h5 class="text-center">Confused? Having trouble with the app? Drop us a line:<br><a href="mailto:help@ideally.net">help[at]ideally.net</a></h5>

              <hr>

  <!-- **********************************
  Begin "About Shmap" section
  *********************************** -->
              
              <div id="aboutShmap">

                <div class="aboutLabelDiv">
                  <h3 class="text-center aboutLabel scriptFont">About Shmap</h3>
                </div>
                <div class="clear"></div>

                <div class="row">

                  <div class="col-md-12">       
                    <!-- About Shmap Logo -->           
                    <img class="img-responsive lazyload" id="shmapLogo" src="img/about/icons/soft_appicon.png">

  <!-- About Shmap Text -->
                    
                    <h4 id="shmapIntro"><span class="boldStyle orangeColor">Shmap</span> is a location-based mobile messaging application <a href="https://appsto.re/us/NM4o7.i" target="_blank">now available on iPhone</a>. 
                    <br><br>
                    <span class="boldStyle orangeColor">Shmap</span> changes the game by transforming ordinary messages into <em>moments</em>.
                    Its magic comes from messages that are delivered – either privately, to groups or to the general public – only when the recipients enter a location associated with the message. Connecting digital conversations with <em>PLACE</em> changes the game  by enabling a new way of communicating.<br><br>
                    <span class="boldStyle orangeColor">Shmap</span> allows you to leave a message for your friend when she walks into the coffee shop, reminding her you bought last time and she owes you one!<br><br>
                    <span class="boldStyle orangeColor">Shmap</span> reminds your pal to take it easy this time as he enters bar that he got blotto in during your last wild night out.<br><br>
                    <span class="boldStyle orangeColor">Shmap</span> makes you the sweetest guy in the world when your lady receives a note the moment she gets home.<br><br>
                    <span class="boldStyle orangeColor">Shmap</span> tells your friend  to make sure not to forget the guac this time when picking up the Chipotle order.
                    <br><br>
                    Below is an <a class="boldStyle" href="#tutorial">app tutorial</a> which details the application's main functionality. For answers to our frequently asked questions, please <a href="#FAQs" class="boldStyle">scroll down to the FAQs</a>. 
                    <br>
                    <br>
                    <a class="boldStyle" href="inapptutorial.php">Click here</a> for the in-app tutorial screens (in case you missed them the first time around.)</h4>

                    <div class="clear"></div>


  <!-- Begin Bootstrap Image Gallery lightbox -->
  		              <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;" data-use-bootstrap-modal="false">
  	                  <!-- The container for the modal slides -->
  	                  <div class="slides"></div>
  	                  <!-- Controls for the borderless lightbox -->
  	                  <h3 class="title"></h3>
  	                  <a class="prev">‹</a>
  	                  <a class="next">›</a>
  	                  <a class="close">×</a>
  	                  <a class="play-pause"></a>
  	                  <ol class="indicator"></ol>
  	                  <!-- The modal dialog, which will be used to wrap the lightbox content -->
  	                  <div class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next"></div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                                Previous
                              </button>
                              <button type="button" class="btn btn-primary next">
                                Next
                                <i class="glyphicon glyphicon-chevron-right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
  	                  </div>
  		              </div>
                    <!-- end blueimp-gallery controls -->
  		              
                  </div>
                  <!-- end col-md-12 -->

                </div>
                <!-- end row -->

              </div>
              <!-- end aboutShmap div -->
              
  <!-- End "About Shmap" section -->


  <!-- **********************************
  Begin Tutorial
  *********************************** -->

              <div id="tutorial" class="aboutLabelDiv">
                <h3 class="text-center aboutLabel scriptFont">Shmap Tutorial</h3>
              </div>  

  <!-- 1. Begin Signing Up for Shmap -->
              <div class="col-md-12">
                
                <ul id="signingUp" class="list-group">

                  <li class="list-group-item disabled">
                    <h4 class="listHeader"><!-- <img src="img/about/icons/profilepic.png" style="max-width:25px;"> --> Signing Up for Shmap</h4>
                    <p>Before you do anything, you need to register as a Shmap user. This can be done either by using Facebook or registering manually by Email. After you've downloaded the app and read through the app tutorial, you'll be brought to the Sign-up/Log-in Page. From there, you have three options:</p>
                  </li>


                  <li class="list-group-item">
                    <p class="listHeader">Sign Up with Email</p>
                    
                    <ul>
                      <li><p>Click "<span class=" orangeColor">Sign Up</span>"</p></li>
                      <li><p>Upload a profile image (optional but recommended)</p></li>
                      <li><p>Enter all required fields [username, email address, password]</p></li>
                      <li><p>Check off that you have read the <a href="http://terms.shmap.me" target="_blank">Terms of Service and Privacy Policy</a></p></li>
                      <li><p>Click "Next"</p></li>
                      <li><p>Allow location access</p></li>
                      <li><p>Enter your phone number. This is optional, but highly recommended. This will allow Shmap to add friends in your device's contact book to your Shmap Contacts page without you having to invite them manually. Don't worry, we won't send mass invites to your contacts list. This process only uses your device's contacts to find <em>existing</em> Shmap users.</p></li>
                      <!-- <li><p>Below are screenshots detailing the Sign Up with Email process</p></li> -->
                    </ul>

                    <div id="links2">
                      <a href="../img/about/1-registration.png" title="Sign-up/Log-in Page" data-gallery>
                        <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/1-registration.png" alt="Sign-up/Log-in Page" />
                      </a> 
                      <a href="../img/about/4-registration.png" title="Register By Email - Sign Up Form" data-gallery>
                        <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/4-registration.png" alt="Register By Email - Sign Up Form" />
                      </a>
                    </div>
                    <div class="clear"></div>

                  </li>

                  <li class="list-group-item">
                    <p class="listHeader">Facebook Sign Up</p>
                    <div class="row">
                      <div class="col-md-12">
                        <ul>
                          <li><p>Click "Facebook Sign Up" to create a Shmap profile using your existing Facebook information.</p></li>
                          <li><p>Click "Open" to allow Shmap to open Facebook.</p></li>
                          <li><p>Log in with Facebook if you aren't currently logged in.</p></li>
                          <li><p>Allow Facebook to open Shmap.</p></li>
                          <li><p>Follow instructions to complete.</p></li>
                        </ul> 
                        <div id="links22">
                          <a href="../img/about/1-registration.png" title="Sign-up/Log-in Page" data-gallery>
                            <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/1-registration.png" alt="Sign-up/Log-in Page" />
                          </a>                         
                          <a href="../img/about/3-registration.png" title="Register By Facebook" data-gallery>
                            <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/3-registration.png" alt="Register By Facebook" />
                          </a>
                        </div>                       
                      </div>
                    
                      
                    </div>
                    <div class="clear"></div>

                  </li>

                  <li class="list-group-item">
                    <p class="listHeader">Login</p>
                    <ul>
                      <li><p>Click "<span class="orangeColor">Login</span>"</p></li>
                      <li><p>Enter your username and password to sign in to an existing Shmap account.</p></li>
                    </ul>
                    <div id="links23">
                      <a href="../img/about/1-registration.png" title="Sign-up/Log-in Page" data-gallery>
                        <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/1-registration.png" alt="Sign-up/Log-in Page" />
                      </a>                     
                      <a href="../img/about/2-registration.png" title="Login with Email" data-gallery>
                        <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/2-registration.png" alt="Login with Email" />
                      </a>
                    </div>
                    <div class="clear"></div>
                  </li>

                </ul>
              </div>     
  <!-- End Signing Up for Shmap -->


  <!-- 2. Begin Shmap Basics -->
              <div class="col-md-12">
                <ul id="basics" class="list-group">
                  <li class="list-group-item disabled">
                    <h4 class="listHeader"><img src="img/about/icons/shmap_logo.png" style="max-width:20px;"> Shmap Basics</h4>
                    <p>After you've created your account, you're ready to begin Shmapping. Before you do so, it's good to get acquainted with some basic functionality.</p>
                  </li>

                  <!-- Begin Shmap Types Defined -->
  								<li class="list-group-item">
                    <p class="listHeader">Shmap Message Types Defined</p>
                    <p>There are several distinct Shmap message types you can send and/or receive in the app. The main message types are listed below. The accompanying icons presented denote these message types in the app.</p>
                    
                    <ul class="ulShmapTypes">
											<li id="liShout">
                      	<p><img src="../img/about/icons/shout.png" style="max-width:25px;">&nbsp;<span style="font-weight:bold;"> <a href="#shouts">Shouts</a></span> - These messages are publicly-visible location-based messages that can be found in the "<a href="#explore">Explore</a>" tab of the app. If a Shout becomes popular enough, then Shmap users who enter the location it was left at will receive a notification. If you don't want to receive notifications for Shouts that you encounter, simply go to <a href="#settings">app settings</a> and toggle off the "<em>You're near something cool</em>" switch.</p>
                      </li>                    
  					  				<li id="liPersonal">
                      	<p><img src="../img/about/icons/personal.png" style="max-width:25px;">&nbsp;<span style="font-weight:bold;"> <a href="#personal">Personal Shmaps</a></span> - These messages are sent privately from you to one or more (i.e. groups) of your Shmap contacts. These Shmaps can be sent directly to your contact or be tied to a geolocation. It's up to you!</p>
                      </li>
                      
                      <li id="liSponsored">
                      	<p><img src="../img/about/icons/sponsored.png" style="max-width:25px;">&nbsp;<span style="font-weight:bold;"> Sponsored Shmaps</span> - These messages are created by the Shmap team or our business partners. Like Shouts, they are found in the <a href="#explore">Explore</a> Tab and you will receive a notification if you enter their location. If you don't want to receive notifications for Sponsored Shouts that you encounter, simply go to <a href="#settings">app settings</a> and toggle off the "You're near something cool" switch.</p>
                      </li>
                      <li id="liReminder">
                        <p><img src="../img/about/icons/reminder.png" style="max-width:25px;">&nbsp;<span style="font-weight:bold;"> <a href="#reminders">Reminders</a></span> - A "Reminder" is a location-based message you send to yourself. On the "New Message" screen, press the Reminder icon, add a location, type your message, and click "send." When you physically enter the location you added, you'll receive your reminder!</p>
                      </li>
                      <li id="liGroup">
                        <p><span style="font-weight:bold;"> <a href="#group">Group Messages</a></span> - Group messages are simply any message thread which contains more than two people in it. These can be sent with or without a location trigger.</p>
                      </li>
                    </ul>
                  </li>
                  <!-- End Shmap Types Defined -->

                </ul>

              </div>
  <!-- End The Basics -->




<!-- *************************************************************************************************************
******************************************************************************************************************
******************************************************************************************************************
******************************************************************************************************************
******************************************************************************************************************
Begin SENDING SHMAPS 
******************************************************************************************************************
******************************************************************************************************************
******************************************************************************************************************
******************************************************************************************************************
***************************************************************************************************************-->

              <div class="col-md-12">
                <ul id="sendingShmaps" class="list-group">
                  <li class="list-group-item disabled">
                    <h4 class="listHeader" id="sendingShmaps">Sending Messages in Shmap</h4>
                    <p>To compose a Shmap message, click the "<span class="boldStyle" style="color: #e69f12;">New</span>" link (found at the top right of the screen in the "Messages" and "Explore" tabs). For details on how to send each variety of Shmap, continue reading below.</p>
                  </li>

<!-- Shouts -->
                  <li class="list-group-item">

                    <p id="shouts" class="listHeader">Shouts</p>
										<p>Shouts are publicly-visible location messages. When you post a Shout, it becomes visible in the Explore feed, where other users can like or comment on it. If your Shout becomes popular enough, then Shmap users who enter the location it was left at will receive a notification!</p>
                    <div class="row">

                      <div class="col-md-12">
                      	<h4 class="boldStyle">Sending Shouts</h4>
                        <ul>
                          <li><p>Click "<span class="boldStyle orangeColor">New</span>" (from the top right of the Messages and Explore tabs). This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                          <li><p>Type an address or select a location in the "Location" field.</p></li>
                          <li><p>Click the "Shout" icon <img src="../img/about/icons/shout_blue.png" style="max-width:25px;"></p></li>
                          <li><p>Type your message in the text field.</p></li>
                          <li><p>Optional: Attach a photo.</p></li>
                          <li><p>Click "<span class="boldStyle orangeColor">Send</span>"</p></li>
                        </ul>

                      	<h4 class="boldStyle">Expiring Shouts</h4>
                        <ul>
                          <li><p>Coming soon...</p></li>
                        </ul>

                      	<h4 class="boldStyle">Flagging Shouts</h4>
                        <ul>
                          <li><p>Coming soon...</p></li>
                        </ul>

												<h4 class="boldStyle">Deleting Your Shouts</h4>
                        <ul>
                          <li><p>All of the Shouts you send are visible in your Messages inbox. If you choose to delete a Shout, you can simply delete it from your inbox by swiping left on it and clicking the revealed "delete" button.</p></li>
                          <li><p>You may also delete Shouts from your profile. Under your Profile information you will see all of your Shouts. Swipe left on them to reveal a "delete" button. Click this to delete the Shout.</p></li>
                        </ul>
                        <h4 class="boldStyle">Deleting Comments on your Shouts</h4>
                        <h5>Someone left a comment on your Shout you don't like? You can delete it!</h5>
                        <ul>
                          <li><p>Browse to the Shout containing the comments you want to remove. </p></li>
                          <li><p>Click the "<span class="orangeColor boldStyle">...</span>" menu link at the top right. You will then see a button titled "<em>Comment Options</em>". (<a href="../img/about/delete_comments1.PNG" target="_blank">see example</a>)</p></li>
                          <li><p>After clicking "<em>Comment Options</em>," you will then see circles appear to the left of each of the comments. Click the circles next to the Comments you want to delete.</p></li>
                          <li><p>Click the Delete button at the bottom of the screen to delete the selected comments. (<a href="../img/about/delete_comments2.PNG" target="_blank">see example</a>)</p></li>
                        </ul> 
                      </div>

											<div>
												
											</div>

                      <!-- Shout Images: -->
                      <div id="linksShoutImages">
                      	
                      		<div class="col-md-6">
                      			<h4 class="text-center"><strong>Compose your Shout</strong> (click to enlarge)</h4>
			                      <a href="../img/about/shout_new_msg.png" title="Composing a Shout" data-gallery>
			                        <img class="img-responsive lazyload" src="../img/about/shout_new_msg.png" alt="Composing a Shout" />
			                      </a>
                      		</div>
													<div class="col-md-6">
                      			<h4 class="text-center"><strong>Anatomy of a Shout</strong> (click to enlarge)</h4>
			                      <a href="../img/about/shout_anatomy.png" title="Anatomy of a Shout" data-gallery>
			                        <img class="img-responsive lazyload" src="../img/about/shout_anatomy.png" alt="Anatomy of a Shout" />
			                      </a>
                      		</div>
                      	
                      	
                    	</div>
                    	<div class="clear"></div>

                    </div>

                  </li>

<!-- Personal Location Message -->
                  <li class="list-group-item">
                    <p id="personal" class="listHeader">How to send a Personal Location Message</p>
                    <p>Personal Location Messages are messages which are tied to a place or address. For example, you could leave your friend a location message at their home address, reminding them to call you when they get home. That friend will receive a notification and your message as soon as they arrive at their house. Here's how you do it:</p>
                    <ul>
                      <li><p>Click "<span class="boldStyle orangeColor">New</span>" (from the top right of the Messages and Explore tabs). This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                      <li>
                        <p>
                        Enter a location name in the "<span class="boldStyle">Location:</span>" field.
                        </p>
                      </li>                      
                      <li><p>Enter a recipient in the "<span class="boldStyle">To:</span>" field. A recipiant's name can be searched for simply by typing. Or you can click a user's name from the list of your contacts displayed. <br>Note: the recipient <em>must be in your Contacts</em> in order for you to send them a Shmap message.</p></li>

                      <li><p>Type your message in the text field.</p></li>
                      <li><p>Optional: Attach a photo.</p></li>
                      <li><p>Click "<span class="boldStyle orangeColor">Send</span>"</p></li>
                    </ul>
                    
                    <h4 class="text-center">click to enlarge:</h4>
                    
                    <div id="linksPersonalLocationMessages">
                      <div class="col-md-6">
                        <a href="../img/about/personal/3personal-yesLocation.jpg" title="Personal Message - Composing With a Location" data-gallery>
                          <img class="img-responsive lazyload" src="../img/about/personal/3personal-yesLocation.jpg" alt="Personal Message - Composing Without Location" />
                        </a>
                      </div>

                      <div class="col-md-6">
                        <a href="../img/about/personal/4personal-yesLocation.jpg" title="Personal Message - Sent With a Location" data-gallery>
                          <img class="img-responsive lazyload" src="../img/about/personal/4personal-yesLocation.jpg" alt="Personal Message - Sent Without Location" />
                        </a>
                      </div>
                    </div>
                    <div class="clear"></div>                    
                  </li>


<!-- direct Personal Message -->
                  <li class="list-group-item">
                    <p id="personal" class="listHeader">How to send a direct Personal Message (without a location)</p>
                    <p>Personal messages without a location behave like any other text message. They are sent immediately to your contact and a location is not necessary.</p>
                    <ul>
                      <li><p>Click "<span class="boldStyle orangeColor">New</span>" (from the top right of the Messages and Explore tabs). This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                      <li><p>Enter a recipient in the "<span class="boldStyle">To:</span>" field. A recipiant's name can be searched for simply by typing. Or you can click a user's name from the list of your contacts displayed. <br>Note: the recipient <em>must be in your Contacts</em> in order for you to send them a Shmap message.</p></li>
                      <li><p>Type your message in the text field.</p></li>
                      <li><p>Optional: Attach a photo.</p></li>
                      <li><p>Click "<span class="boldStyle orangeColor">Send</span>"</p></li>
                    </ul>
                    
                    <h4 class="text-center">click to enlarge:</h4>
                    <div id="linksPersonalMessages">
                      <div class="col-md-6">                      
                        <a href="../img/about/personal/1personal-noLocation.jpg" title="Personal Message - Composing Without Location" data-gallery>
                          <img class="img-responsive lazyload" src="../img/about/personal/1personal-noLocation.jpg" alt="Personal Message - Composing Without Location" />
                        </a>
                      </div>

                      <div class="col-md-6">                      
                        <a href="../img/about/personal/2personal-noLocation.jpg" title="Personal Message - Sent Without Location" data-gallery>
                          <img class="img-responsive lazyload" src="../img/about/personal/2personal-noLocation.jpg" alt="Personal Message - Sent Without Location" />
                        </a>
                      </div>
                    </div>
                    <div class="clear"></div>                    
                  </li>
                  


<!-- Group Messages -->
                  <li class="list-group-item">
                    <p id="group" class="listHeader">Group Messages</p>
                    <p>Sending Group Messages in Shmap is easy. Follow these basic steps:</p>
                      <div class="row">
                        <div class="col-md-9">
                          <ul>
                            <li><p>Click "<span class="boldStyle orangeColor">New</span>" (from the top right of the Messages and Explore tabs). This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                            <li><p>Optional: Add a "Location." (If you choose a Location, then the message will only be delivered to the recipients who actually enter the location's physical proximity.)</p></li>
                            <li><p>Enter a first recipient in the "To:" field.</p></li>
                            <li><p>Enter another recipient in the "To:" field. (Enter as many contacts as you like.)</p></li>                            
                            <li><p>Type your message in the text field.</p></li>
                            <li><p>Optional: Attach a photo.</p></li>
                            <li><p>Click "<span class="boldStyle orangeColor">Send</span>"</p></li>
                          </ul>
                        </div>

                        <!-- Screenshot on right -->
                        <div class="col-md-3">
                          <a href="../img/about/group.png" target="_blank"><img class="img-responsive lazyload thumbnailPhotoMain thumbnail" src="../img/about/group.png" alt="Group Message" /></a>
                        </div>

                      </div>
                  </li>



<!-- Reminders -->
                  <li class="list-group-item">
                    <p id="reminders" class="listHeader">Reminders</p>
                    <div class="row">
                      <div class="col-md-9">
                        <ul>
                          <li><p>Click "<span class="boldStyle orangeColor">New</span>" to open the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>. Click the <img src="../img/about/icons/reminder.png" style="max-width:25px;">&nbsp;<span style="font-weight:bold;">"Remind Me"</span> icon, which populates "Me" in the "To" field.</p></li>
                          <li><p>Type an address or select a location in the "Location" field.</p></li>
                          <li><p>Type your Reminder message in the text field.</p></li>
                          <li><p>Optional: Attach a photo.</p></li>
                          <li><p>Click "<span class="boldStyle orangeColor">Send</span>"</p></li>
                        </ul>
                      </div>

                      <!-- Screenshot on right -->
                      <div class="col-md-3">
                        <a href="../img/about/reminder.png" target="_blank"><img class="img-responsive lazyload thumbnailPhotoMain thumbnail" src="../img/about/reminder.png" alt="Reminder Message" /></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

  <!-- End Sending Shmaps -->



  <!-- 4. Begin App Sections -->
              <div class="col-md-12">
                <ul id="mainSections" class="list-group">
                  <li class="list-group-item disabled">
                    <h4 class="listHeader"><img src="img/about/icons/settings.png" style="max-width:20px;"> Main Sections of Shmap</h4>
                    <p>This section provides details on each of the main Tabs in Shmap.</p>
                  </li>

                  <!-- Begin Tabs -->
                  <li class="list-group-item">
                    <p id="tabs" class="listHeader">Intro to the Shmap Tabs</p>
                    <p>There are four tabs in Shmap. Below is a brief introduction to them.</p>
                    <ul>
                      <li>
                        <p>"<span style="font-weight:bold;">Messages</span>" - The Messages tab is where all of your sent and received Shmaps are located.</p>
                      </li>
                      <li>
                        <p>"<span style="font-weight:bold;">Explore</span>" - The Explore tab is a feed of content containing Shouts and Sponsored messages from other Shmap users around you. Towards the top of the list are the Shmaps closest in proximity to you. As you scroll down, Explore displays Shmaps which are located further away. Keep scrolling to see what's been Shmapped in nearby cities, states, or even other countries!</p>
                      </li>
                      <li>
                        <p>"<span style="font-weight:bold;">Contacts</span>" - The Contacts tab is where you can find existing Shmap contacts, send out invites to others, and approve incoming Shmap contact requests.</p>
                      </li>
                      <li>
                        <p>"<span style="font-weight:bold;">Settings</span>" - The Settings tab is where you can edit your Profile, change your username, log out of Shmap, and more.</p>
                      </li>
                    </ul>
                    <br>
                    <img class="img-responsive lazyload thumbnailPhotoMain" src="../img/about/tabs.png" alt="Tabs" />
                    <div class="clear"></div>
                  </li>
                  <!-- End Tabs -->

                  <!-- Begin Messages Tab -->
                  <li class="list-group-item">
                    <p id="messages" class="listHeader">Messages Tab</p>
                      <ul>
                        <li><p><span class="boldStyle">Sending New Messages</span>: Click "<span class="boldStyle" style="color: #e69f12;">New</span>" (from the top right of the Messages and Explore tabs). This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>. </p></li>

                        <li><p><span class="boldStyle">Welcome Message</span>: When you first download Shmap, there will be at least one message in your inbox. That's from us!</p></li>
                        
                        <li><p><span class="boldStyle">Unread Messages</span>: Unread messages in your inbox are denoted with a blue dot at the far right of the message preview. Additionally, the sender's username is <span class="boldStyle">bolded</span>.</p></li>

                        <li><p><span class="boldStyle">Message Threads</span>: Message threads in Shmap behave as follows: Your messages appear in bubbles on the right side of the screen. The person or persons you are chatting with appear on the left side of the screen. Your message bubbles are blue. The message bubbles of the person(s) you are chatting with are grey (and their profile pictures are visible). See screenshot below for an example of a group message thread:</p></li>
                        <div id="links4">
                          <a href="../img/about/messagesTab/message_thread.png" title="Message Thread example" data-gallery>
                            <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/messagesTab/message_thread.png" alt="Message Thread example" />
                          </a> 
                        </div>
                        <p></p>
                        <div class="clear"></div>

                        <li><p><span class="boldStyle">Time Stamps</span>: Timestamps appear directly above each message in a thread.</p></li>
                        <div class="clear"></div>

                        <li><p><span class="boldStyle">Message Thread Options</span>: To reveal message thread options, click the "<span style="color: #e69f12;">...</span>" link at the top right corner of a message thread. A button titled "Message Options" will be visible. Click it. From here, you can select individual messages in the thread to either delete or forward.</p></li>
                        
                        <li><p><span class="boldStyle">Deleting Message Threads</span>: To delete threads from your inbox, simply swipe left on any message from your inbox view. This will reveal a red <span class="boldStyle" style="color:red">delete</span> button. Click this to permanently delete the entire thread.</p></li>
                      </ul>
                    <br>
                    
                    <p class="listHeader">Inbox Filters for Messages</p>
                    <p>There are four filters in the inbox. Click the header text (which should default to "All messages") to produce a list of the filters for you to select from. As you select a filter, the text in the header will change and your inbox messages will display only the corresponding message types.</p>
                    <ul>
                      <li>
                        <p>"<span class="boldStyle">All Shmaps</span>" - This is the default inbox view and it contains all of your Shmaps, regardless of their type.</p>
                      </li>
                      <li>
                        <p>"<span class="boldStyle">Personal</span>" - The next filter displays only Personal Shmaps. Shouts and Sponsored Shmaps will not be visible.</p>
                      </li>
                      <li>
                        <p>"<span class="boldStyle">Shouts</span>" - This filter displays only Shouts in your inbox. Personal and Sponsored Shmaps will not be visible.</p>
                      </li>
                      <li>
                        <p>"<span class="boldStyle">Sponsored</span>" - This filter displays only Sponsored Shmaps in your inbox. Personal Shmaps and Shouts will not be visible.</p>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </li>
                  <!-- End Messages Tab -->

                  <!-- Begin Explore Tab -->
                  <li class="list-group-item">
                    <p id="explore" class="listHeader">Explore Tab</p>
                      <div class="row">
                        <div class="col-md-12">
                          <p><span class="boldStyle">Overview</span>: Simply put, the <em>Explore</em> feed is your view into all of the Shouts around you! The Shouts closest to your current location will appear near the top. As you scroll down, the radius widens, giving you a look at Shouts further and further away. Think of Explore much like your Twitter or Instagram feeds. This is where you explore the Shmap universe.</p>
                          <ul>
                            <li><p><span class="boldStyle">"Like" Shouts</span>: Click into any Shout and you'll see an outline of a heart (<a href="../img/about/explore/not_liked.png" target="_blank">see example</a>). Tap on it to "Like" it, and it will turn solid red (<a href="../img/about/explore/liked.png" target="_blank">see example</a>)</p></li>
                            <li><p><span class="boldStyle">Comment on Shouts</span>: Click into any Shout and you'll see a text box at the bottom. Click into it to leave a response on the Shout.</p></li>
                            <li>
                              <p><span class="boldStyle">Grouped Shouts</span>: In Explore, sometimes you will see text that indicates that more than one Shout exists at a single location (<a href="../img/about/explore/multiple_shouts.png" target="_blank">see example</a>). The Shout you see in Explore is the newest Shout left at that location and the text beneath it indicaties that there are "x" number of additional Shouts at that same location. For example, if 10 people each left a Shout at the Empire State Building, the newest Shout left there would be shown in Explore and it would indicate that "9 other messages exist here." beneath it.</p>
                              <p>To view all of the Shouts at a location, click into the Grouped Shout visible in Explore and you will see a header at the top of the screen with the location name. Beneath this will be a list of all the Shouts at that location. You can then click into any of these Shouts to comment or Like them.</p>
                            </li>
                            <li><p><span class="boldStyle">Making friends in Explore</span>: Shmap is a social app, so the more contacts you have, the more fun it is to use! In Explore, you can meet other Shmap users and send contact invites to them. To do so, you'll need to visit their Profile. You can access any user's Profile by clicking on their Profile picture.</p></li>
                            <li><p><span class="boldStyle">Map View</span>: Click the "<span style="color: #e69f12;">Map</span>" link at the top left of the Explore screen. This will toggle your view from the standard list view to a Map view of the Explore feed. From this view, you can click on various Shouts and get driving directions to the locations they were left at!</p></li>
                          </ul>
                        </div>
                      </div> <!-- End Row -->

                  </li>
                  <!-- End Explore Tab -->

                  <!-- Begin Contacts Tab -->
                  <li class="list-group-item">
                    <p id="contacts" class="listHeader">Contacts Tab</p>
                    <div class="row">
                      <div class="col-md-9">
                        <p>The "Contacts" tab is where all of your Shmap contacts are collected. It is also here where you can invite other Shmap users to be contacts with you or even send invites to your iPhone contacts so that they can download Shmap.</p>
                        <ul>
                          <li>
                            <p>Your Contacts after installing Shmap for first time:</p>
                            <p>1. If you entered your phone number during registration and other friends of yours who were in your device contacts have downloaded Shmap, then they will be auto-added to your Contacts (assuming they also have you in their device contacts).</p> 
                            <p>2. If you didn't enter your phone number or none of your device contacts are using Shmap, then your Contacts list will only list yourself ("Me") and "Shmap Admin".</p>
                          </li>
                          <li>
                            <p><span class="boldStyle">"Add Contacts"</span> screen: To invite friends from your phone or other Shmap users to be contacts, <a href="../img/about/17-Contacts_Add.png" target="_blank">click the "Add" button</a> at the top right corner of the Contacts Tab. On this new screen, there are two tabs visible:</p>
                            <ul>
                              <li>
                                <p><span class="boldStyle">My Contacts: </span>This is a list of all of your phone's contacts. It is on this list that you can send invites to friends that you want to join Shmap. You can send either a text message or an email. See example below:</p>
                              </li>
                              <div id="links5">
                                <a href="../img/about/contacts_my_contacts.png" title="Invite Phone Contact - List View" data-gallery>
                                  <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_my_contacts.png" alt="Invite Phone Contact - List View" />
                                </a> 
                              </div>
                              <div id="links6">
                                <a href="../img/about/contacts_my_contacts2.png" title="Invite Phone Contact - Invite Options appear after clicking on a name" data-gallery>
                                  <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_my_contacts2.png" alt="Invite Phone Contact - Invite Options appear after clicking on a name" />
                                </a> 
                              </div>
                              <div class="clear"></div>
                              <li>
                                <p><span class="boldStyle">Shmap Users: </span>This is where you can search for existing Shmap users. Start typing their username in the search box and you'll see results immediately. When you've found the user you'd like to add to your contacts, click on them to go to their profile. From their profile, you can click the "<span class="orangeColor">Add</span>" button to send an invite. See example below:</p>
                              </li>
                              <div id="links7">
                                <a href="../img/about/contacts_search_shmap_users.png" title="Add New Shmap Contacts - Search by username" data-gallery>
                                  <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_search_shmap_users.png" alt="Add New Shmap Contacts - Search by username" />
                                </a> 
                              </div>
                              <div id="links8">
                                <a href="../img/about/contacts_search_shmap_users2.png" title="Add New Shmap Contacts - From Profile, Click Add" data-gallery>
                                  <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_search_shmap_users2.png" alt="Add New Shmap Contacts - From Profile, Click Add" />
                                </a> 
                              </div>
                              <div class="clear"></div>
                            </ul>
                          </li>

                          <li>
                            <p><span class="boldStyle">Contact Approvals &amp; Pending requests</span>: </p>
                            <div class="row">
                              <div class="col-md-6">
                                <p>When another user has invited you to be contacts in Shmap, you will see them appear in your contacts with two buttons. The X will reject their invite. The check mark will accept it.</p>
                                <div id="links9">
                                  <a href="../img/about/contacts_approve_invite.png" title="Contact Approvals" data-gallery>
                                    <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_approve_invite.png" alt="Contact Approvals" />
                                  </a> 
                                </div> 
                                <div class="clear"></div>   
                              </div>
                              <div class="col-md-6">
                                <p>When you send an invite to a Shmap user they appear in your contacts with a note: "Pending request". If they approve you, this note will disappear and you can begin messaging them.</p>
                                <div id="links10">
                                  <a href="../img/about/contacts_pending_invite.png" title="Contact Approvals - Pending Invite" data-gallery>
                                    <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_pending_invite.png" alt="Contact Approvals - Pending Invite" />
                                  </a> 
                                </div> 
                                <div class="clear"></div>
                              </div>
                            </div>                                              
                          </li>

                          <li>
                            <p><span class="boldStyle">Remove Contact</span>:</p>
                            <p>To remove an existing contact, simply browse to their profile from your Contacts Tab and click the "Remove" button.</p>
                            <div id="links11">
                              <a href="../img/about/contacts_remove_contact.png" title="Remove Contact" data-gallery>
                                <img class="img-responsive lazyload thumbnailPhotoSmall" src="../img/about/contacts_remove_contact.png" alt="Remove Contact" />
                              </a> 
                            </div>    
                            <div class="clear"></div>                             
                          </li>

                        </ul>
                      </div>

                      <!-- Screenshot on right -->
                      <div class="col-md-3">
                        <a href="../img/about/16-Contacts.png" target="_blank"><img class="img-responsive lazyload thumbnailPhotoMain thumbnail" src="../img/about/16-Contacts.png" alt="Contacts" /></a>
                      </div>
                    </div> <!-- End Row -->
                  </li>
                  <!-- End Contacts Tab -->

                  <!-- Begin Settings Tab -->
                  <li class="list-group-item">
                    <p id="settings" class="listHeader">Settings Tab</p>
                    <div class="row">
                      <div class="col-md-9">
                        <p>The "Settings" tab includes links to the following:</p>
                        <ul>
                          <li>
                            <p><span class="boldStyle">My Profile</span>: Clicking this brings you to your <a href="../img/about/25-profile.png" target="_blank">"Profile" page</a>. Your Profile provides the following functionality:</p>
                            <ul>
                              <li>
                                <p><span class="boldStyle">Profile</span>: Click the box containing your Profile image / Name / Username to visit your profile. On Your Profile you may do the following:</p>
                              </li>
                              <ul>
                                <li><p><span class="boldStyle">Edit your profile information</span>. Click the "<span class="orangeColor">Edit</span>" link at the top right to engage the <a href="../img/about/27-editProfile.png" target="_blank">Edit Profile screen</a>. Change or update your personal information here. Then click "<span class="orangeColor">Save</span>".</p></li>
                                <li>
                                  <p><span class="boldStyle">Remove Profile</span>: This link appears at the <a href="../img/about/26-delete.png" target="_blank">bottom your Edit Profile screen</a>. Clicking it produces a popup asking you to confirm the deletion. If you confirm, then your Shmap account and all of your messages will be deleted permanently. Your information and messages cannot be retrieved, so please think about it before deleting.</p>
                                </li>                                   
                                <li><p><span class="boldStyle">Delete Shouts</span>. Your most recent Shout appears below your Profile information. As you scroll down, you'll see older Shouts. To delete a Shout from here, simply swipe to the left. This reveals a "Delete" button. Click it. Poof - away goes your Shout.</p></li>
                              </ul>
                              <li>
                                <p><span class="boldStyle">Add Your Phone Number</span>: Remember when you registered for Shmap? Well, if you skipped the part where you can add your phone number, then fear not - you can still add it here. Now, if you already did add your number, then it will appear here and no further action is needed.</p>
                              </li>
                              <li>
                                <p><span class="boldStyle">Logout</span>: Clicking this will log you out of Shmap and bring you to the Log In screen.</p>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <p><span class="boldStyle">Notifications</span>: Here you you can toggle on and off notifications for the following:</p>
                            <ul>
                              <li>
                                <p><span class="boldStyle">"You're Near Something Cool"</span>: Toggling this on means that when you are in the physical vicinity of a Shout, you'll receive a notification.</p>
                              </li>
                              <li>
                                <p><span class="boldStyle">"Comment on your post"</span>: Toggling this on means that when another Shamp user comments on any of your Shouts, you'll receive a notification.</p>
                              </li>
                            </ul>
                          </li>
                          <li><p><span class="boldStyle">Terms of Service &amp; Privacy</span>: Clicking this brings up a web page with Shmap's Terms of Service and Privacy Policy details.</p></li>
                          <li><p><span class="boldStyle">About Shmap</span>: This screen provides the Shmap version number, a link to the "About" webpage, and the "<a href="mailto:help@ideally.net">help@ideally.net</a>" email address.</p></li>
                        </ul>
                      </div>
                      
                      <!-- Screenshot on right -->
                      <div class="col-md-3">
                        <a href="../img/about/24-settings.png" target="_blank"><img class="img-responsive lazyload thumbnailPhotoMain thumbnail" src="../img/about/24-settings.png" alt="Settings" /></a>
                      </div>
                    </div>
                  </li>
                  <!-- End Settings Tab -->

                </ul>
              </div>

  <!-- End App Sections -->


  <!-- End Tutorial  -->

              <hr><!-- break between main sections -->

              <div class="clear"></div>

  <!-- 
  **********************************
  Begin FAQs
  ********************************** 
  -->

              <div id="FAQs">
                <div class="aboutLabelDiv">
                  <h3 class="text-center aboutLabel scriptFont">Frequently Asked Questions</h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: How do I send a Shmap?</p>
                    <p class="faqAnswer">A: <a href="#sendingShmaps">Here you go!</a></p>
                  </li>
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: Hey, why do you want my phone number?</p>
                    <p class="faqAnswer">A: We give you the option to add your phone number, because this will allow Shmap to match you with your existing contacts from your phone and automatically add them to your Shmap contacts.</p>
                  </li>                  
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: How do I delete my account?</p>
                    <p class="faqAnswer">A: Click on the "Settings" tab. Click your name or photo in the "My Profile" section (it's the first link at the top of the page). At the top right of your profile there is an "<span class="orangeColor">edit</span>" link. Click this. On your Edit Profile screen, you will see a red "Remove Profile" link. Click this and then confirm that you want to delete your profile. Note that if you delete your profile, all of your messages and contacts will be permanently gone.</p>
                  </li>
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: How do I change my password?</p>
                    <p class="faqAnswer">A: Click on the "Settings" tab. Click into your Profile. Click "<span class="orangeColor">edit</span>". Then click on "Change Password" and follow the instructions from there.</p>
                  </li>                  
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: I have an idea that will make Shmap even Shmappier. Who can I tell?</p>
                    <p class="faqAnswer">A: We'd love your feedback. Drop us a note here: <a href="mailto:info@ideally.net">info [at] ideally.net</a></p>
                  </li>
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: What's a "Shout" and why should I care?</p>
                    <p class="faqAnswer">A: Shouts are publicly-visible location-based messages that can be found in the "Explore" tab of the app. If you happen to enter the vicinity where a Shout was left, then you will receive a notification and the Shout will appear in your Messages inbox. You can read about sending Shouts <a href="#shouts">here</a>. Why should you care? Well, Shouts are really the best way to interact and connect with other Shmap users!</p>
                  </li>
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: Do you have any jobs?</p>
                    <p class="faqAnswer">A: Not at the moment, but if you want to send us your resume, please go right ahead. As Shmap grows, so will our office! <a href="mailto:info@ideally.net">info [at] ideally.net</a></p>
                  </li>
                </ul>
<!-- Begin Attributions -->
              <div class="attributions text-grey well">
                <h4>Hand-drawn arrows in the tutorial above were designed by <a class="boldStyle" href="http://www.freepik.com/" style="font-size: 1em;">Freepik</a></h4>
              </div>
  <!-- End Attributions -->
              </div>
  <!-- End FAQs -->

            </div><!-- end Big Chat Bubble -->

          </div><!-- end main content -->
            
        </div><!-- /.row -->
        
      </div><!-- /.container -->
      <div class="clear"></div>


  <!-- **********************************
  Begin Footer
  *********************************** -->
      <footer>
        <div class="container">
            <div class="col-md-4 animated fadeIn">
              <a href="index.php"><img src="http://www.shmap.me/img/footerlogo.png" alt="Shmap Logo" class="shmap-logo-footer img-responsive"></a>
              <p class="text-muted">Copyright &copy; <?php echo date("Y") ?> ideally, LLC | Shmap</p>
            </div>

            <div class="col-md-4">
              <a href="index.php">
                <div class="social-icon-div animated fadeIn">
                  <a href="https://www.facebook.com/shmap" target="_blank"><img src="img/social/Facebook.png" alt="Facebook Icon" class="social-icon"></a>
                  <a href="https://twitter.com/shmapapp" target="_blank"><img src="img/social/Twitter.png" alt="Twitter Icon" class="social-icon"></a>
                  <a href="http://www.instagram.com/shmapapp" target="_blank"><img src="img/social/Instagram.png" alt="Instagram Icon" class="social-icon"></a>
                  <a href="https://itunes.apple.com/us/app/shmap/id993757607" target="_blank"><img src="img/social/appStore.png" alt="App Store Icon" class="social-icon"></a>
                </div>
              </a>
            </div>

            <div class="col-md-4">
              <p class="text-muted footer-links-p">
                <a href="contact.php" class="footer-link">Contact Us</a>
                <br>
                <a href="http://terms.shmap.me" class="footer-link">Terms &amp; Privacy Policy</a>
                <br>
                <a href="http://www.ideally.net" target="_blank" class="footer-link">ideally.net</a>
              </p>
            </div>

        </div>

      </footer>

    </div> 
    <!-- end WRAP -->

  <!-- Javascript/Jquery -->
  <?php
    include ("_code.php")
  ?>

  </body>

</html>