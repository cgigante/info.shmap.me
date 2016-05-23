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

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        
      <div class="container">
          
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.shmap.me"><img src="http://www.shmap.me/img/logotext.png" alt="Shmap Logo" class="img-responsive animated fadeInLeft" alt="Shmap Logo"></a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav">

            <li <?php if ($page=="home") : ?> class="active" <?php endif; ?> >
              <a href="http://www.shmap.me/index.php">Home</a>
            </li>
            
            <li <?php if ($page=="about") : ?> class="active" <?php endif; ?>>
              <a href="http://info.shmap.me">About</a>
            </li>

            <li <?php if ($page=="contact") : ?> class="active" <?php endif; ?>>
              <a href="http://www.shmap.me/contact.php">Contact</a>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>


  <!-- Page Content -->
    <div class="wrap">

      <div class="container" id="infoPage">

        <div class="row">



  <!-- Begin Tutorial PDF created for Beta Testing -->
          <!-- <div class="col-md-12">
          	<a href="../about/NYU_Tutorial.pdf" download>
          		<h1 class="text-center" style="color:white;">
                <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                <br>
                <span style="text-decoration: underline;">Shmap Beta Testers</span>: <br>To download additional materials to assist with your testing, please click here.
              </h1>
          	</a>
          </div>
          <div class="clear"></div>
  				<hr> -->
  <!-- End Tutorial PDF created for Beta Testing -->				



  <!-- Begin Actual About/Tutorial/FAQs -->

          <div class="col-md-1"></div>

          <div class="col-md-10" id="infoCenterDiv">
            
  <!-- Chat Bubble -->
            <div class="chatBubble animated bounceIn">
              <h1 class="text-center">In-app tutorial screens</h1>

              <hr>



  <!-- **********************************
  Begin "About Shmap" section
  *********************************** -->
              
              <div id="aboutShmap">

                <div class="row">

                  <div class="col-md-12">       

                    <div class="clear"></div>
                    <p></p>

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
  		              
  		              <div id="links">

  		                <a class="thumbnailPhotoLink" href="../img/about/inAppTutorial/1-Tutorial_Welcome.jpg" title="Tutorial Slide 1" data-gallery>
  		                  <img class="inAppTutorialImage" src="../img/about/inAppTutorial/thumbnails/1-Tutorial_Welcome.jpg" alt="Slide 1" />
  		                </a>

  		                <a class="thumbnailPhotoLink" href="../img/about/inAppTutorial/2-Tutorial_P2P.jpg" title="Tutorial Slide 2" data-gallery>
  		                  <img class="inAppTutorialImage" src="../img/about/inAppTutorial/thumbnails/2-Tutorial_P2P.jpg" alt="Slide 2" />
  		                </a>

  		                <a class="thumbnailPhotoLink" href="../img/about/inAppTutorial/3-Tutorial_ExploreShouts.jpg" title="Tutorial Slide 3" data-gallery>
  		                  <img class="inAppTutorialImage" src="../img/about/inAppTutorial/thumbnails/3-Tutorial_ExploreShouts.jpg" alt="Slide 3" />
  		                </a>

  		                <a class="thumbnailPhotoLink" href="../img/about/inAppTutorial/5-Tutorial_Contacts.jpg" title="Tutorial Slide 4" data-gallery>
  		                  <img class="inAppTutorialImage" src="../img/about/inAppTutorial/thumbnails/5-Tutorial_Contacts.jpg" alt="Slide 4" />
  		                </a>

  		              </div>

  <!-- End Bootstrap Image Gallery lightbox -->
                  
                  </div>

                </div>

              </div>
              
  <!-- End "About Shmap" section -->

  <!-- Begin Attributions -->
              <!-- <div class="attributions text-grey well">
                <h4>Arrows in the app tutorial designed by <a class="boldStyle" href="http://cdn.flaticon.com/license/license.pdf" style="font-size: 1em;">Freepik</a></h4>
              </div> -->
  <!-- End Attributions -->


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
