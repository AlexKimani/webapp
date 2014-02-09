<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

	<title>BBI | Inspiring Generations</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>

		      .carousel .item {
        height: 400px;
      }
      .carousel img {
        width: auto;
        height: 400px;
      }
.carousel {
		margin-top:  130px;
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
        padding: 0 40px;
        margin-top: 100px;
        margin-left:200px;
      }
      .carousel-caption h1 {
        font-size: 20px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }


      /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 0px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }
    body{
    	background-color: #990;
    }

    /* Remove border and change up box shadow for more contrast */
    /*.navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }
*/
    /* Downsize the brand/project name a bit */
   /* .navbar .brand {
      padding: 14px 20px 16px;  Increase vertical padding to match navbar links 
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }*/

    /* Navbar links: increase padding for taller navbar */
    /*.navbar .nav > li > a {
      padding: 15px 20px;
    }*/

    /* Offset the responsive button for proper vertical alignment */
    /*.navbar .btn-navbar {
      margin-top: 10px;
    }
*/
</style>



</head>
<body>

		    <div class="container-fluid">
		    <div class="row-fluid">
		    
		    <div class="span12">
<script type="text/javascript">
// $(document).ready(function() {
// 	$().ready(function() {
// 	$('.carousel').carousel({
// 		autoSlide: true,
//            autoSlideInterval: 6000,
// 		timeOut: 6000,<!--6 sec ie 6000ms-->
// 		autoSlideStopWhenClicked: true
// 	})
//    })
// });
</script>

				<div id="myCarousel" class="carousel slide">
			    <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>
			    <!-- Carousel items -->
			    <div class="carousel-inner">
			    <div class="active item"><img alt="" src="images/slider/2.png">
			    	<div class="container">
			            <div class="carousel-caption">
			              <h1>Example headline.</h1>
			              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			              <a class="btn btn-large btn-primary" href="signup.php">Sign up today</a>
			            </div>
          			</div>
			    </div>
			    <div class="item"><img alt= "" src="images/slider/3.png">
			    	<div class="container">
		            <div class="carousel-caption">
		              <h1>Example headline.</h1>
		              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		              <a class="btn btn-large btn-primary" href="signup.php">Sign up today</a>
		            </div>
		          	</div>
			    </div>
			    <div class="item"><img alt = "" src="images/slider/4.png">
			    	<div class="container">
			            <div class="carousel-caption">
			              <h1>Example headline.</h1>
			              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			              <a class="btn btn-large btn-primary" href="signup.php">Sign up today</a>
			            </div>
          			</div>
			    </div>
			    </div>
			    <!-- Carousel nav -->
			    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			    </div>



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
            <a class="brand" href="#">BBI | Inspiring Generations</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                
                <li><a href="#about">Events</a></li>
                <li><a href="#contact">Resources</a></li>
                <li><a href="#contact">FAQ</a></li>
                <li><a href="blog.php">Blog</a></li>
                
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                
                <li class="divider-vertical"></li>		    
		    	<li> <form class="navbar-search pull-left">
			    <input type="text" class="search-query" placeholder="Search">
			    </form></li>
			    <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#about">Who We Are</a></li>
 					<li><a href="#about">What We Do</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
            <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
             <a href="?id=29308">  </a> <a href="?id=29308"> </a>  <a href="?id=29308">Career Day | Alliance Girls' High School </a> * - * <a href="?id=29308">Prefectorial Training| Makini School </a> * - * <a href="?id=29308">Mentorship / Motivational  talk | Kajiado County </a> * - * <a href="?id=29308">Mentorship / Motivational  talk | Raila Education Centre </a> * - *   <a href="?id=29308">Mentorship / Motivational  talk | Ayani Primary </a> * - * <a href="?id=29308">Mentorship / Motivational  talk | Chiptiret Primary School | Eldoret </a> * - *  <a href="?id=29306"> </a><a href="?id=29308">Career talk, Mentorship / Motivational  talk | Starehe Boys' Centre and School </a> * - *<a href="?id=29306">Motivational Talk|Starehe Girls' Centre  </a> * - *  <a href="?id=29303">Motivational Talk | Hon. Kiragu Stephen Secondary School </a> * - *  <a href="?id=29312"> Community Empowerment Project | Meru County'</a> * - *  <a href="?id=29309"> Motivational Talk | Kathiani Girls High School </a>* - *  <a href="?id=29310">Motivational Talk | Ulanda Girls High School </a> * - *  <a href="?id=29311">Community Empowerment Project - Kibera Constituency </a> * - *             
          </marquee>
         
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
 	</div> <!-- /.container -->
   </div><!-- /.navbar-wrapper -->

   			<div class="span2">
		    <!--Sidebar content-->
		    
		    	 	
		    </div>


		    </div>
		    <div class="row-fluid">
		    <div class="span9">
		    <div class="span3">
		    	
			    	<div class="accordion" id="accordion2">
					<div class="accordion-group">
					<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					Collapsible Group Item #1
					</a>
					</div>
					<div id="collapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
					Anim pariatur cliche...
					</div>
					</div>
					</div>
					<div class="accordion-group">
					<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					Collapsible Group Item #2
					</a>
					</div>
					<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
					Anim pariatur cliche...ksanksdkakdmKnsknkNkncknanknckadsnkdcnxkjabvkBSklkBGDHSXHRTVYKUVTDR CTKYn
					</div>
					</div>
					
				
				</div>
				</div>
				</div>
				</div>
			</div>
		    </div>
		    </div>
		    </div>




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

<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
          interval: 2000
        })
      }(window.jQuery)
    </script>


</body>
</html>