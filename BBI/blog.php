<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BBI | Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	    <link href="css/bootstrap.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

	<style type="text/css">
	.blog-wrapper{
		background-color: #006400; 
		margin-left: 100px;
		margin-right: 100px;
		margin-top: 50px;

	}
	/*body{
		color: #006400;
	}*/
	.comments{
		margin-right: -200px;
	}
	</style>

	</head>
	<body bgcolor="#006400">
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
                <li><a href="index.php">Home</a></li>
                
                <li><a href="#about">Events</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="#contact">FAQ</a></li>
                <li class="active"><a href="#contact">Blog</a></li>
                
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



   	<div class="row-fluid">
   		<div class="wrap">
   		
   		
   		<div class="blog-wrapper">
   		<div class="span10">
   <!--Blog starts here -->
   			<div class="row">
   				<div class="span4">
		   			<form class="navbar-form pull-left" id="form1" name="form1" method="POST" action="php/comment.php">
		   			<h3>Leave a Comment</h3>
		   			<p>Name</p>
		   			<input type="text" name="cname" id="cname" class="span10" placeholder="Name"><br />
		   			<p>Email Address</p>
		   			<input type="email" name="email" id="email" class="span10" placeholder="Email"><br />
		   			<p>Comment</p>
		   			<textarea rows="10" name="comment" id="email" cols="34" placeholder="Type Here"></textarea><br/>
		   			<button type="submit" class="btn btn-primary">Post Comment</button>
		   			<button type="reset" class="btn">Cancel</button>
		   			</form>
		   			<!-- <a href="#myModal" role="button" class="btn" data-toggle="modal">Post a Comment</a>
		 
					<!- Modal -->
					<!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Post a Comment</h3>
					</div>
					<div class="modal-body">
					<p>Post your Comment here</p>
					    <form class="navbar-form pull-left">

					    <div class="alert alert-success">
					   	<input type="text" class="span4">
					    <button type="submit" class="btn btn-primary">Post</button> -->

					   <!--  <h4>Thank You!</h4>
					    Your Post has been updated. -->
					    <!-- /div>
					    </form>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
					</div> -->
					</div>
				</div>
				<div class="span5">
				<div class="comments">
				<?php
				include "php/connect.php";

				$query="select cname,email,comment,pdate from Blog";
				$result=mysql_query($query);
				if(!$result) die("failed" .mysql_error());
				$rows= mysql_num_rows($result);

				echo "<table>
					<thead>
						<tr>
							<td>
								<th>
							<h3>Recent Posts</h3>
						</th>
							</td>
						</tr>
						<tr><th>
						<h4>Who Posted</h4>
						</th>
						<th>
						<h3>Post</h4>
						</th>	
						<th><h4>Date and Time</h4></th></tr>

					</thead>
					<tr>
						
				</table>";
				for($j=0; $j<$rows; ++$j){

					$row=mysql_fetch_row($result);
					echo "<tr>";
					for($k =0; $k<$rows; ++$k) echo "<td>$row[$k]</td>";
						echo "</tr>";
					
				}
				echo "</table>";
				mysql_close();
				?>
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
          $(".alert").alert()
        })
      }(window.jQuery)

      function validate() {
if (document.form1.name.value.length < 1) {
alert(“Please enter your full name.”);
return false;
}
if (document.form1.email.value.length < 3) {
alert(“Please enter your address.”);
return false;
}

if (document.form1.phone.value.length < 3) {
alert(“Please enter a comment.”);
return false;
}
return true;
}

    </script>
	</body>
</html>