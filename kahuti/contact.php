<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KAWASCO | &middot; Providing Clean Water To All</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }
    .marketing{
      margin-top: 100px;
    }

    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 20px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/kwsc.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/kwsc.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/kwsc.png">
                    <link rel="apple-touch-icon-precomposed" href="images/ico/kwsc.png">
                                   <link rel="shortcut icon" href="images/ico/kwsc.png">
  </head>

  <body>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                
                <li><a href="about.php">About Us</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="career.php">Careers</a></li>
                <li class="active"><a href="contact.php">Contact Us</a></li>
                
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                
                <li class="divider-vertical"></li>		    
		    	<li> <form class="navbar-search pull-left">
			    <input type="text" class="search-query" placeholder="Search">
			    </form></li>
			   
                
              </ul>

            </div><!--/.nav-collapse -->
            <a class="brand" href="#">KAWASCO | Providing Quality Water</a>
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      


      <!-- START THE FEATURETTES -->
      <div class="span3">
     <div class="well" style="max-width: 340px; padding: 8px 0;">
      <ul class="nav nav-list">
      <li class="nav-header">Contact Us</li>
      <li class="active">
      <a href="#touch">Get In Touch</a>
      </li>
      <li>
      <a href="#billing">Information about Water Billing</a>
      </li>
      <li>
      <a href="#meter">Water and Meter Connection</a>
      </li>
      <li class="divider"></li>
      <li>
      <a href="#">Help</a>
      </li>
      </ul>
      </div>

      <div class="fb" width="200" height="200">
        <div class="fb-follow" data-href="https://www.facebook.com/NjoroAlexaza" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
      

        <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=783083811706197&amp;id=285717618109488" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/permalink.php?story_fbid=783083811706197&amp;id=285717618109488">Post</a> by <a href="https://www.facebook.com/pages/The-Big-Brother-Society-BBS/285717618109488">The Big Brother Society-BBS</a>.</div></div>



<div class="fb-activity" data-site="techpurge.com" data-action="likes, recommends" data-colorscheme="light" data-header="true"></div>

<div class="fb-recommendations" data-site="techpurge.com" data-action="likes, recommends" data-colorscheme="light" data-header="true"></div>
      </div>

      </div>
      

      <div class="span8">

      <section id="touch">
      <div class="featurette">
      <h3>Get In Touch</h3>
       <p>Our Staff are always ready to hear from you and help you in anyway we can. Simply write to us and you query will be responded to as soon as possible.</p>   
		       
          <div class="fb-like" data-href="https://www.facebook.com/groups/223275041139873/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

            <!-- Button to trigger modal -->
    <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Get In Touch Wth US</a>
     
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Send Us Your Feedback</h3>
    </div>
    <div class="modal-body">
    <form class="form-horizontal">
		    <div class="control-group">
		    <label class="control-label" for="inputName">Names</label>
		    <div class="controls">
		    <input type="text" id="inputName" placeholder="Your Name">
		    </div>
		    </div>
		    <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		    <input type="text" id="inputEmail" placeholder="Email">
		    </div>
		    <div class="control-group">
		    <label class="control-label" for="text">Message</label>
		    <div class="controls">
		    <textarea rows="7" id="text" placeholder="text"></textarea>
		    </div>
		    </div>
		    <div class="control-group">
		    <div class="controls">
		    <button type="submit" class="btn btn-primary">Send</button>
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    </div>
		    </div>
		    </form>
    </div>
    
    </div>

            </div>
            </section>

           
      <section id="billing">
      <div class="featurette">
        <h3>Information about Water Billing</h3>
        <p>Any problems about your bills. Our billing office is ready to help you. Simply click on the button and send your query to our offices.</p>
        <a href="#info">More Information</a>
      </div>

            
     </section>

     <section id="meter">       

            <div class="featurette">
              <h3>Water and Meter Connection &middot; Get Connected.</h3>
              <p>Need a new water connection or water reconnection, we now have an online water connection application service available now.</p>
              <div id="accordion2" class="accordion">
                <div class="accordion-group">
                <div class="accordion-heading">
                <a class="accordion-toggle" href="#collapseOne" data-parent="#accordion2" data-toggle="collapse"> Apply Now </a>
                </div>
                <div id="collapseOne" class="accordion-body in collapse" style="height: auto;">
                <div class="accordion-inner"> 
                      <form class="form-horizontal">
                      <legend>Apply For Your Connection</legend>
                    <div class="control-group">
                    <label class="control-label" for="inputSname">Surname</label>
                    <div class="controls">
                    <input type="text" id="inputSname" placeholder="Surname">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputOther">Other Names</label>
                    <div class="controls">
                    <input type="text" id="inputOther" placeholder="Other Names">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputId">Id Number</label>
                    <div class="controls">
                    <input type="text" id="inputId" placeholder="ID">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPhone">Phone Number</label>
                    <div class="controls">
                    <input type="text" id="inputPhone" placeholder="Phone">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputDistrict">District</label>
                    <div class="controls">
                    <select>
                      <option>Kangema</option>
                      <option>Kahuro</option>
                      <option>Kiharu</option>
                      <option>Mathioya</option>
                      
                      </select>
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputDivision">Division</label>
                    <div class="controls">
                    <input type="text" id="inputDivision" placeholder="Division">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputLocation">Location</label>
                    <div class="controls">
                    <input type="text" id="inputLocation" placeholder="Location">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputSub">Sub-Location</label>
                    <div class="controls">
                    <input type="text" id="inputSub" placeholder="Sub-Location">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPlot">Plot Number</label>
                    <div class="controls">
                    <input type="text" id="inputPlot" placeholder="Plot Number">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPhone">Connection Type</label>
                    <div class="controls">
                    <label class="radio">
                    <input id="optionsRadios1" type="radio" checked="" value="1" name="optionsRadios">
                    Private Connection
                    </label>
                    <label class="radio">
                    <input id="optionsRadios2" type="radio" value="2" name="optionsRadios">
                    Commercial Connection
                    </label>
                    </div>
                    </div>
                    <div class="control-group">
                    <div class="controls">
                    
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                </div>

            </div>

            </div>
            </section>
            </form>
           
            <div class="fb-like" data-href="https://www.facebook.com/pages/The-Big-Brother-Initiative/285717618109488" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/jquery-1.3.2.min.js"></script>
    <script src="js/pirobox.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="js/holder/holder.js"></script>
  </body>
</html>
