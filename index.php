<?php
  $page = "about";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shmap">

    <link rel="shortcut icon" href="http://www.shmap.me/img/icon.png" />

    <!-- Bootstrap Core CSS -->
    <link href="http://www.shmap.me/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://www.shmap.me/css/main.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    
    <!-- Image Gallery -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="http://www.shmap.me/css/bootstrap-image-gallery.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

    <!-- This code will notify users if they are using an out-of-date browser  -->
    <script> 
        var $buoop = {c:2}; 
        function $buo_f(){ 
         var e = document.createElement("script"); 
         e.src = "//browser-update.org/update.js"; 
         document.body.appendChild(e);
        };
        try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
        catch(e){window.attachEvent("onload", $buo_f)}
    </script>



    <title>About Shmap | Info &amp; Help</title>

  </head>

  <body>

  <!-- Google Analytics tracking code -->
  <?php include_once("analyticstracking.php") ?>
  <?php include_once("navigation.html") ?>





  <!-- Page Content -->
    <div class="wrap">

      <div class="container" id="infoPage">

        <div class="row">
	
          <div class="col-md-1"></div>

  <!-- Begin Actual About/Tutorial/FAQs -->
          <div class="col-md-10" id="infoCenterDiv">
            
  <!-- Chat Bubble -->
            <div class="chatBubble animated bounceIn">
              <h1 class="text-center">About Shmap, Tutorial &amp; FAQ's</h1>

              <hr>

  <!-- **********************************
  Begin "About Shmap" section
  *********************************** -->
              
              <div id="aboutShmap">

                <div class="aboutLabelDiv">
                  <h3 class="text-center aboutLabel">About Shmap</h3>
                </div>
                <div class="clear"></div>

                <div class="row">

                  <div class="col-md-12">       
                    <!-- About Shmap Logo -->           
                    <img class="img-responsive" id="shmapLogo" src="img/about/icons/soft_appicon.png">

  <!-- About Shmap Text -->

                    <h4 id="shmapIntro"><span class="boldStyle">Shmap</span> is a location-based mobile messaging application coming soon on iPhone. 
                    <br><br>
                    <span class="boldStyle">Shmap</span> changes the game by transforming ordinary messages into <em>moments</em>.
                    Its magic comes from messages that are delivered – either privately, to groups or to the general public – only when the recipients enter a location associated with the message. Connecting digital conversations with <em>PLACE</em> changes the game  by enabling a new way of communicating.<br><br>
                    <span class="boldStyle">Shmap</span> allows you to leave a message for your friend when she walks into the coffee shop, reminding her you bought last time and she owes you one!<br><br>
                    <span class="boldStyle">Shmap</span> reminds your pal to take it easy this time as he enters bar that he got blotto in during your last wild night out.<br><br>
                    <span class="boldStyle">Shmap</span> makes you the sweetest guy in the world when your lady receives a note the moment she gets home.<br><br>
                    <span class="boldStyle">Shmap</span> tells your friend  to make sure not to forget the guac this time when picking up the Chipotle order.
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
                <h3 class="text-center aboutLabel">Shmap Tutorial</h3>
              </div>  

  <!-- 1. Begin Signing Up for Shmap -->
              <div class="col-md-12">
                
                <ul id="signingUp" class="list-group">

                  <li class="list-group-item disabled">
                    <h4 class="listHeader"><img src="img/about/icons/profilepic.png" style="max-width:25px;"> Signing Up for Shmap</h4>
                    <p>Before you do anything, you need to register as a Shmap user. This can be done either by using Facebook or registering manually by Email. After you've downloaded the app and read through the app tutorial, you'll be brought to the Sign-up/Log-in Page. From there, you have three options:</p>
                  </li>

                  <li class="list-group-item">
                    <p class="listHeader">Facebook Sign Up</p>
                    <div class="row">
                      <div class="col-md-12">
                        <ul>
                          <li><p>Click "Facebook Sign Up" to create a Shmap profile using your existing Facebook information.</p></li>
                          <li><p>Click "Open" to allow Shmap to open the Facebook app.</p></li>
                          <li><p>Click "OK" to Log in with Facebook.</p></li>
                          <li><p>Click "Open" to allow Facebook to open Shmap.</p></li>
                          <li><p>Follow instructions to complete</p></li>
                        </ul>                        
                      </div>
                     <!--  <div class="col-md-3">
                        <img class="img-responsive" src="img/about/icons/fb_icon.png" style="max-width: 125px; margin: 0 auto;">
                      </div> -->
                    </div>

                  </li>


                  <li class="list-group-item">
                    <p class="listHeader">Sign Up with Email (see screenshots for further details)</p>
                    
                    <ul>
                      <li><p>Click "Sign Up with Email"</p></li>
                      <li><p>Enter all required fields.</p></li>
                      <li><p>Enter your phone number. This is optional, but highly recommended. This will allow Shmap to add your friends to your Shmap Contacts page without you having to invite them manually. Don't worry, we won't send mass invites to your contacts list. This process only uses your device's contacts to find <em>existing</em> Shmap users.</p></li>
                      <li><p>Below are screenshots detailing the Sign Up with Email process</p></li>
                    </ul>

                    <div id="links2">
                      <a href="../img/about/1-registration.png" title="Sign-up/Log-in Page" data-gallery>
                        <img class="img-responsive thumbnailPhotoSmall" src="../img/about/1-registration.png" alt="Sign-up/Log-in Page" />
                      </a> 

                      <a href="../img/about/2-registration.png" title="Register By Email - Sign Up Form" data-gallery>
                        <img class="img-responsive thumbnailPhotoSmall" src="../img/about/2-registration.png" alt="Register By Email - Sign Up Form" />
                      </a>

                      <a href="../img/about/3-registration.png" title="Register By Email - Filled In" data-gallery>
                        <img class="img-responsive thumbnailPhotoSmall" src="../img/about/3-registration.png" alt="Register By Email - Filled In" />
                      </a>

                      <a href="../img/about/3.1-registrationPhone.png" title="Register By Email - Add Phone Number" data-gallery>
                        <img class="img-responsive thumbnailPhotoSmall" src="../img/about/3.1-registrationPhone.png" alt="Register By Email - Add Phone Number" />
                      </a>
                    </div>
                    <div class="clear"></div>

                  </li>

                  <li class="list-group-item">
                    <p class="listHeader">Login</p>
                    <ul>
                      <li><p>Click "Login"</p></li>
                      <li><p>Enter your username and password to sign in to an existing Shmap account.</p></li>
                    </ul>
                  </li>

                </ul>
              </div>
          
  <!-- 1. End Signing Up for Shmap -->




  <!-- 2. Begin The Basics -->
              <div class="col-md-12">
                
                <ul id="basics" class="list-group">
                  
                  <li class="list-group-item disabled">
                    <h4 class="listHeader"><img src="img/about/icons/shmap_logo.png" style="max-width:20px;"> Shmap Basics</h4>
                    <p>After you've created your account, you're ready to begin Shmapping. Before you do so, it's good to get acquainted with some basic functionality.</p>
                  </li>

                  <!-- Begin Shmap Types Defined -->
  								<li class="list-group-item">
                    
                    <p class="listHeader">Shmap Types Defined</p>
                    
                    <p>There are several distinct Shmap message types you can send and/or receive in the app. The main message types are listed below. The accompanying icons presented denote these message types in the app.</p>
                    
                    <ul class="ulShmapTypes">
  										<li id="liPersonal">
                      	<p><img src="../img/about/icons/personal.png">&nbsp;<span style="font-weight:bold;"> <a href="#personal">Personal Shmaps</a></span> - These messages are sent privately from you to one or more (i.e. groups) of your Shmap contacts. These Shmaps can be sent directly to your contact or be tied to a geolocation. It's up to you!</p>
                      </li>
                      
                      <li id="liShout">
                      	<p><img src="../img/about/icons/shout.png">&nbsp;<span style="font-weight:bold;"> <a href="#shouts">Shouts</a></span> - These messages are publicly-visible location-based messages that can be found in the "<a href="#explore">Explore</a>" tab of the app. If you happen to enter the vicinity where a Shout was left, then you will receive a notification.</p>
                      </li>
  										
                      <li id="liSponsored">
                      	<p><img src="../img/about/icons/sponsored.png">&nbsp;<span style="font-weight:bold;"> Sponsored Shmaps</span> - These messages are created by the Shmap team or our business partners. Like Shouts, are found in the <a href="#explore">Explore</a> Tab or received when you enter their location.</p>
                      </li>

                      <li id="liReminder">
                        <p><img src="../img/about/icons/reminder.png">&nbsp;<span style="font-weight:bold;"> <a href="#reminders">Reminders</a></span> - A "Reminder" is a location-based message you send to yourself. Press the Reminder icon at the top right of the app, add a location, type your message, and click "send" - When you physically enter that location, you'll receive your reminder!</p>
                      </li>

                      <li id="liGroup">
                        <p><img src="../img/about/icons/group.png" style="max-width:25px;">&nbsp;<span style="font-weight:bold;"> <a href="#group">Group Messages</a></span> - Group messages are simply any message thread which contains more than two people in it. These can be sent with or without a location trigger.</p>
                      </li>                    

                    </ul>
                  </li>
                  <!-- End Shmap Types Defined -->

                </ul>

              </div>
  <!-- 2. End The Basics -->




                      


  <!-- 3. Begin Sending Shmaps -->
              <div class="col-md-12">
                <ul id="sendingShmaps" class="list-group">
                  <li class="list-group-item disabled">
                    <h4 class="listHeader" id="sendingShmaps"><img src="img/about/icons/composeicon2.png" style="max-width:20px;"> Sending Shmaps</h4>
                    <p>To compose a Shmap message, click the "Compose Message" icon at the top right of most screens (see <a href="../img/about/icons/compose.png" target="_blank">screenshot</a>). For details on how to send each variety of Shmap, continue reading below.</p>
                  </li>

                  <li class="list-group-item">
                    <p id="personal" class="listHeader">Personal Message</p>
                      <ul>
                        <li><p>Click the "<a href="../img/about/icons/compose.png" target="_blank">Compose Message</a>" icon. This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                        <li><p>Enter a recipient in the "<span class="boldStyle">To:</span>" field. A recipiant's name can be searched for simply by typing. Or you can click the "+" icon in the text field to engage a drop-down which contains all of your contacts to choose from. <br>Note: the recipient <em>must be in your Contacts</em> in order for you to send them a Shmap message.</p></li>
                        <li>
                          <p>
                          Optional: Enter a location name in the "<span class="boldStyle">Location:</span>" field.
                          <br>
                          * This field is optional and only required for Shmaps that are tied to a location. Personal Shmaps that are not attached to a location behave just like they do in standard text messaging apps. No location is needed.
                          <br>

                          </p>
                        </li>
                        <li><p>Type your message in the text field.</p></li>
                        <li><p>Optional: Attach a photo.</p></li>
                        <li><p>Click "<span class="boldStyle">Send</span>"</p></li>
                      </ul>
                  </li>

                  <li class="list-group-item">
                    
                    <p id="group" class="listHeader">Group Messages</p>
                      
                      <div class="row">
                        
                        <div class="col-md-9">
                          <ul>
                            <li><p>Click the "<a href="../img/about/icons/compose.png" target="_blank">Compose Message</a>" icon. This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                            <li><p>Enter a first recipient in the "To:" field.</p></li>
                            <li><p>Enter another recipient in the "To:" field. (Enter as many contacts as you like.) Note that usernames in the "To:" field are separated by a comma.</p></li>
                            <li><p>Optional: Add a "Location." (If you choose a Location, then the message will only be delivered to the recipients who actually enter the location's physical proximity.)</p></li>
                            <li><p>Type your message in the text field.</p></li>
                            <li><p>Optional: Attach a photo.</p></li>
                            <li><p>Click "<span class="boldStyle">Send</span>"</p></li>
                          </ul>
                        </div>

                        <!-- Screenshot on right -->
                        <div class="col-md-3">
                          <a href="../img/about/group.png" target="_blank"><img class="img-responsive thumbnailPhotoMain thumbnail" src="../img/about/group.png" alt="Group Message" /></a>
                        </div>
                        
                      </div>

                  </li>

                  <li class="list-group-item">

                    <p id="shouts" class="listHeader">Shouts</p>

                    <div class="row">

                      <div class="col-md-9">
                        <ul>
                          <li><p>Click the "<a href="../img/about/icons/compose.png" target="_blank">Compose Message</a>" icon. This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>.</p></li>
                          <li><p>Type "Shout" as the recipient name in the "To:" field. ("Shout" is also the first recipient listed in the "+" dropdown.)</p></li>
                          <li><p>Type an address or select a location from the "Location" dropdown.</p></li>
                          <li><p>Type your message in the text field.</p></li>
                          <li><p>Optional: Attach a photo.</p></li>
                          <li><p>Click "<span class="boldStyle">Send</span>"</p></li>
                        </ul>
                      </div>

                      <!-- Screenshot on right -->
                      <div class="col-md-3">
                        <video class="videoTutorial" controls muted>
                        <source src="http://www.shmap.me/videos/shoutVideo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                      </div>

                    </div>

                  </li>


                  <li class="list-group-item">

                    <p id="reminders" class="listHeader">Reminders</p>

                    <div class="row">

                      <div class="col-md-9">
                        <ul>
                          <li><p>Click the <img src="../img/about/icons/reminder.png">&nbsp;<span style="font-weight:bold;">Reminder</span> icon. This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>, but this time, a recipient called "Me" is prepopulated in the "To" field. (Reminders are Location Shmaps you send to yourself!)</p></li>
                          <li><p>Type an address or select a location from the "Location" dropdown.</p></li>
                          <li><p>Type your Reminder message in the text field.</p></li>
                          <li><p>Optional: Attach a photo.</p></li>
                          <li><p>Click "<span class="boldStyle">Send</span>"</p></li>
                        </ul>
                      </div>

                      <!-- Screenshot on right -->
                      <div class="col-md-3">
                        <a href="../img/about/reminder.png" target="_blank"><img class="img-responsive thumbnailPhotoMain thumbnail" src="../img/about/reminder.png" alt="Reminder Message" /></a>
                      </div>
                      
                    </div>

                  </li>


                </ul>
              </div>

  <!-- 3. End Sending Shmaps -->



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
                        <p>"<span style="font-weight:bold;">Explore</span>" - The Explore tab is a feed of content containing Shouts and Sponsored messages from other Shmap users around you. Twoards the top of the list are the Shmaps closest in proximity to you. As you scroll down, Explore displays Shmaps which are located further away. Keep scrolling to see what's been Shmapped in nearby cities, states, or even other countries!</p>
                      </li>

                      <li>
                        <p>"<span style="font-weight:bold;">Contacts</span>" - The Contacts tab is where you can find existing Shmap contacts, send out invites to others, and approve incoming Shmap contact requests.</p>
                      </li>

                      <li>
                        <p>"<span style="font-weight:bold;">Settings</span>" - The Settings tab is where you can edit your Profile, change your username, log out of Shmap, and more.</p>
                      </li>

                    </ul>
                    
                    <br>
                     
                    <img class="img-responsive thumbnailPhotoMain" src="../img/about/tabs.png" alt="Tabs" />
                    <div class="clear"></div>

                  </li>
                  <!-- End Tabs -->





                  <li class="list-group-item">
                    <p id="messages" class="listHeader">Messages Tab</p>
                      <ul>
                        
                        <li><p><span class="boldStyle">Sending New Messages</span>: Click the "<a href="../img/about/icons/compose.png" target="_blank">Compose Message</a>" icon. This opens the <a href="../img/about/5-newmessage.png" target="_blank">"New Message" screen</a>. </p></li>
                        
                        <li><p><span class="boldStyle">Read vs. Unread Messages</span>: See screenshots below:</p></li>

                        <div id="links3">
                          <a href="../img/about/messagesTab/unread_description.png" title="Unread Message" data-gallery>
                            <img class="img-responsive thumbnailPhotoSmall" src="../img/about/messagesTab/unread_description.png" alt="Unread Message" />
                          </a> 
                          <a href="../img/about/messagesTab/read_description.png" title="Read Message" data-gallery>
                            <img class="img-responsive thumbnailPhotoSmall" src="../img/about/messagesTab/read_description.png" alt="Read Message" />
                          </a>
                        </div>
                        <div class="clear"></div>

                        <li><p><span class="boldStyle">Message Threads</span>: Message threads in Shmap behave as follows: Your messages appear in bubbles coming from the right side of the screen. The person or persons you are chatting with appear on the left side of the screen. Your message bubbles are blue. The message bubbles of the person(s) you are chatting with are grey (and their profile pictures are visible). See screenshot below for an example of a group message thread:</p></li>
                        <div id="links4">
                          <a href="../img/about/messagesTab/message_thread.png" title="Message Thread example" data-gallery>
                            <img class="img-responsive thumbnailPhotoSmall" src="../img/about/messagesTab/message_thread.png" alt="Message Thread example" />
                          </a> 
                        </div>
                        <p></p>
                        <div class="clear"></div>

                        <li><p><span class="boldStyle">Time Stamps</span>: To see the timestamps for when each message was sent in a thread, simply pull left on the message thread to reveal timestamps on the right. See screenshot here:</p></li>
                        <div id="links5">
                          <a href="../img/about/messagesTab/timestamps.png" title="Message Thread Timestamps" data-gallery>
                            <img class="img-responsive thumbnailPhotoSmall" src="../img/about/messagesTab/timestamps.png" alt="Message Thread Timestamps" />
                          </a> 
                        </div>
                        <p></p>
                        <div class="clear"></div>

                        <li><p><span class="boldStyle">Message Thread Options</span>: To reveal message thread options, press and hold on any of the messages in the thread. The default iOS text options will be visible along with a "more" button which, when clicked, allows you to forward messages.</p></li>
                        
                        <li><p><span class="boldStyle">Deleting Message Threads</span>: To delete one or more messages from your inbox, simply click the "<span class="boldStyle">edit</span>" link at the top left of the screen, then select the message(s) you want to delete. The "<span class="boldStyle">edit</span>" link will now read: "<span class="boldStyle" style="color:red">delete</span>." Click this to permanently delete your selected messages.</p></li>
                      </ul>
                    <br>
                    
                    <p class="listHeader">Inbox Filters for Messages</p>
                    
                    <p>There are four filters in the inbox. Swipe left or right to toggle between them. As you do so, the text in the header will change, and your inbox messages will display only the corresponding message types.</p>
                    
                    <ul>
                      <li>
                        <p>"<span class="boldStyle">All Shmaps</span>" - This is the default inbox view and it contains all of your Shmaps, regardless of their type.</p>
                      </li>
                      <li>
                        <p>"<span class="boldStyle">Personal</span>" - The next filter displays only Personal Shmaps. Shouts and Sponsored Shmaps will not be visible.</p>
                      </li>
                      <li>
                        <p>"<span class="boldStyle">Shouts</span>" - This filter displays only Shouts in your inbox.</p>
                      </li>
                      <li>
                        <p>"<span class="boldStyle">Sponsored</span>" - This filter displays only Sponsored Shmaps in your inbox.</p>
                      </li>
                    </ul>
                    
                    <!-- Below are the inbox filters screenshots -->
                    <!-- <a href="../img/about/filters/1.png" title="All Shmaps Filter" data-gallery>
                      <img class="img-responsive thumbnailPhotoSmall" src="../img/about/filters/1.png" alt="All Shmaps Filter" />
                    </a>
                    <a href="../img/about/filters/2.png" title="Personal Filter" data-gallery>
                      <img class="img-responsive thumbnailPhotoSmall" src="../img/about/filters/2.png" alt="Personal Filter" />
                    </a>
                    <a href="../img/about/filters/3.png" title="Shouts Filter" data-gallery>
                      <img class="img-responsive thumbnailPhotoSmall" src="../img/about/filters/3.png" alt="Shouts Filter" />
                    </a>
                    <a href="../img/about/filters/4.png" title="Sponsored Filter" data-gallery>
                      <img class="img-responsive thumbnailPhotoSmall" src="../img/about/filters/4.png" alt="Sponsored Filter" />
                    </a>      -->                   

                    <div class="clear"></div>

                  </li>



                  <li class="list-group-item">
                    
                    <p id="explore" class="listHeader">Explore Tab</p>
                      
                      <div class="row">
                        
                        <div class="col-md-12">
                          <p><span class="boldStyle">Overview</span>: Simply put, the <em>Explore</em> feed is your view into all of the Shouts around you! The Shouts closest to your current location will be near the top. As you scroll down, the radius widens, giving you a look at Shouts further and further away. From Explore, you can "Like" or comment on Shouts. Think of Explore much like your Twitter or Instagram feeds. This is where you explore the Shmap universe.</p>
                          <ul>
                            <li><p><span class="boldStyle">"Like" Shouts</span>: Click into any Shout and you'll always see an option to "Like" it. Let others know their Shout was appreciated by clicking "Like"!</p></li>
                            <li><p><span class="boldStyle">Comment on Shouts</span>: Click into any Shout and you'll see a "Comment" button. Click it to both view all of the comments left and also to leave your own.</p></li>
                            <li>
                              <p><span class="boldStyle"><img style="max-width:35px;" src="../img/about/icons/nested.png"> Grouped Shouts</span>: In Explore, sometimes you will see this icon that indicates that more than one Shout exists at a single location. From the Explore feed, you will see the newest Shout listed next to this icon with text beneath it indicating that there are "x" number of additional Shouts at that address. For example, if 10 people each left a Shout at the Empire State Building, the newest Shout left there would be shown in Explore and it would indicate that "9 other messages exist here." beneath it.</p>
                              <p>To view all of the Shouts at a location, click into the Grouped Shout from Explore and you will see a map at the top of the screen. Beneath the map will be a list of all the Shouts at that location. You can then click into any of these Shouts to comment or Like them.</p>
                            </li>
                            <li><p><span class="boldStyle">Making friends in Explore</span>: Shmap is a social app, so the more contacts you have, the more fun it is to use! In Explore, you can meet other Shmappers and send contact invites to them. To do so, you'll need to visit their Profile. You can access any user's Profile by either clicking on their username or their Profile picture.</p></li>
                            <li><p><span class="boldStyle">Foursquare</span>: Sometimes you might come across Foursquare content in Explore. We automagically pull some interesting locations from Foursquare's vast database to give your Shmap-hungry eyes more local content to feast on!</p></li>
                            <li><p><span class="boldStyle"><img style="max-width:35px;" src="../img/about/icons/map.png"> Map View</span>: Click the Shmap map icon at the top left of the Explore screen. This will toggle your view from the standard list view to a Map view of the Explore feed. From this view, you can click on various Shouts and get driving directions to the locations they were left at!</p></li>
                          </ul>
                        </div>
                        
                      </div>

                  </li>

                  <li class="list-group-item">

                    <p id="contacts" class="listHeader">Contacts Tab</p>

                    <div class="row">

                      <div class="col-md-9">
                        <ul>
                          <li><p>Tutorial coming soon...</p></li>
                        </ul>
                      </div>

                      <!-- Screenshot on right -->
                      <div class="col-md-3">

                      </div>

                    </div>

                  </li>


                  <li class="list-group-item">

                    <p id="settings" class="listHeader">Settings Tab</p>

                    <div class="row">

                      <div class="col-md-9">
                        <p>The "Settings" tab includes links to the following:</p>
                        <ul>
                          <li>
                            <p><span class="boldStyle">Profile</span>: Clicking this brings you to your <a href="../img/about/25-profile.png" target="_blank">"Profile" page</a>. Your Profile provides the following functionality:</p>
                            <ul>
                              <li>
                                <p><span class="boldStyle">Delete</span>: This link appears at the <a href="../img/about/26-delete.png" target="_blank">top right of your Profile</a>. Clicking it produces a popup asking you to confirm the deletion. If you confirm, then your Shmap account and all of your messages will be deleted permanently. Your information and messages cannot be retrieved, so please think about it before deleting.</p>
                              </li>
                              <li>
                                <p><span class="boldStyle">Bio</span>: Your photo, bio and personal URL are at <a href="../img/about/25b-profile.png" target="_blank">the top of the Profile screen</a>.</p>
                              </li>
                              <li>
                                <p><span class="boldStyle">Edit Your Profile</span>: A link to "<a href="../img/about/25c-profile.png" target="_blank">edit your profile</a>" is visible. Clicking this brings you to your "<a href="../img/about/27-editProfile.png" target="_blank">Edit Profile</a>" page, which is where you can make changes to all of your information.</p>
                              </li>
                              <li>
                                <p><span class="boldStyle">Shouts</span>: <a href="../img/about/25d-profile.png" target="_blank">Under the "edit your profile" link is a list of all the Shouts</a> you've sent. The most recent Shout is at the top of the list and as you scroll down, you'll see older ones. To delete a Shout from here, simply swipe to the left. <a href="../img/about/28-deleteShout.png" target="_blank">This reveals a "Delete" button</a>. Click it. Poof - away goes your Shout.</p>
                              </li>                              
                            </ul>

                          </li>
                          <li><p><span class="boldStyle">Logout</span>: Clicking this will log you out of Shmap and bring you to the Log In screen.</p></li>
                          <li>
                            <p><span class="boldStyle">Notifications</span>: Clicking on the Notifications link <a href="../img/about/29-notifications.png" target="_blank">brings you to a page</a> where you can toggle on and off notifications for the following:</p>
                            <ul>
                              <li>
                                <p><span class="boldStyle">"You're Near Something Cool"</span>: Toggling this on means that when you are in the physical vicinity of a Shout, you'll receive a notification.</p>
                              </li>
                              <li>
                                <p><span class="boldStyle">"Comment on Your Post"</span>: Toggling this on means that when another Shamp user comments on any of your Shouts, you'll receive a notification.</p>
                              </li>
                            </ul>
                          </li>
                          <li><p><span class="boldStyle">Terms of Service and Privacy</span>: Clicking this brings up a web page with Shmap's Terms of Service and Privacy Policy details.</p></li>
                          <li><p><span class="boldStyle">Change Username</span>: This screen allows you to update your username. Popups will inform you if your desired username is already taken.</p></li>
                          <li><p><span class="boldStyle">Add Your Phone Number</span>: Remember when you registered for Shmap? Well, if you skipped the part where you can add your phone number, then fear not - you can still add it here. Now, if you already did add your number, then it will appear here and no further action is needed.</p></li>
                          <li><p><span class="boldStyle">About &amp; Help</span>: This screen provides the Shmap version number, a link to the "About" webpage, and the "help@ideally.net" email address.</p></li>
                        </ul>
                      </div>

                      <!-- Screenshot on right -->
                      <div class="col-md-3">
                        <a href="../img/about/24-settings.png" target="_blank"><img class="img-responsive thumbnailPhotoMain thumbnail" src="../img/about/24-settings.png" alt="Settings" /></a>
                      </div>
                      
                    </div>

                  </li>


                </ul>
              </div>

  <!-- 4. End App Sections -->




  <!-- End Tutorial  -->
              

              <hr><!-- break between main sections -->

              <div class="clear"></div>



  <!-- **********************************
  Begin FAQs
  *********************************** -->



              <div id="FAQs">
                
                <div class="aboutLabelDiv">
                  <h3 class="text-center aboutLabel">Frequently Asked Questions</h3>
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
                    <p class="faqAnswer">A: Click on the "Settings" tab. Click "Profile" (it's the first link). At the top right of the screen, there is a "delete" link. Click this. You will then see a popup asking you to confirm that you want to delete your profile. Click "Delete" to do so. Note that if you delete your profile, all of your messages and contacts will be permanently gone.</p>
                  </li>
                  <li class="list-group-item">
                    <p class="faqQuestion listHeader">Q: How do I change my password?</p>
                    <p class="faqAnswer">A: Click on the "Settings" tab. Click "Profile" (it's the first link). Click "edit your profile." Then click on "Change Password" and follow the instructions from there.</p>
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
              </div>
  <!-- End FAQs -->






            </div><!-- end Chat Bubble -->

          </div><!-- end main content -->

          <div class="col-md-1"></div>      
            
        </div><!-- /.row -->
        
      </div><!-- /.container -->
      <div class="clear"></div>


  <!-- **********************************
  Begin Footer
  *********************************** -->
      <footer>
        <div class="container">

          <div class="col-md-4 animated fadeIn">
            <a href="http://www.shmap.me"><img src="http://www.shmap.me/img/footerlogo.png" alt="Shmap Logo" class="shmap-logo-footer img-responsive"></a>
            <p class="text-muted">Copyright &copy; 20<?php echo date("y");?> ideally, LLC | Shmap</p>
          </div>

          <div class="col-md-4">
            <div class="social-icon-div animated fadeIn">
              <a href="https://www.facebook.com/shmap" target="_blank"><img src="http://www.shmap.me/img/social/Facebook.png" alt="Facebook" class="social-icon"></a>
              <a href="https://twitter.com/shmapapp" target="_blank"><img src="http://www.shmap.me/img/social/Twitter.png" alt="Twitter" class="social-icon"></a>
              <a href="http://www.instagram.com/shmapapp" target="_blank"><img src="http://www.shmap.me/img/social/Instgram.png" alt="Instagram" class="social-icon"></a>
            </div>
          </div>


          <div class="col-md-4">
            <p class="text-muted footer-links-p">
              <a href="http://www.shmap.me/contact.php" class="footer-link">Contact Us</a>
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


  <!-- The following script changes the navbar when scrolling down -->
  <script>
    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".navbar");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 50) {
                header.addClass("navbarOnScroll");
            } else {
                header.removeClass("navbarOnScroll");
            }
        });
    });
  </script>



  <!-- Bootstrap Core JavaScript -->
  <script src="http://www.shamp.me/js/bootstrap.min.js"></script>

  <!-- Image Gallery Javascript Links -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
  <script src="http://www.shamp.me/js/bootstrap-image-gallery.min.js"></script>

  </body>

</html>
