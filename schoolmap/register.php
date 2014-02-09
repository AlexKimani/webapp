<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colorbox.css" />
	<title>The School Map | Revolutionize Your School</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<style>
	.register:after {
    background-color: #F5F5F5;
    border: 1px solid #DDDDDD;
    border-radius: 4px 0;
    color: #9DA0A4;
    content: "Student Registration";
    font-size: 12px;
    font-weight: bold;
    left: -1px;
    padding: 3px 7px;
    position: absolute;
    top: -1px;
    margin-top: 100px;

}

</style>
</head>
<body>
	<div class="container">
	<div class="menu">
		<div class="navbar navbar-inverse">
		  <div class="navbar-inner">
		    <div class="container">
		 
		      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		 
		      <!-- Be sure to leave the brand out there if you want it shown -->
		      <a class="brand" href="#">School Manager</a>
		 
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="nav-collapse collapse">
		        <!-- .nav, .navbar-search, .navbar-form, etc -->
		        <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                
                <li><a href="exam.php">Exams</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="finance.php">Finance</a></li>
                <li><a href="notice.php">Notice Board</a></li>
                
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
                <li class="active"><a href="sign.php">Sign In</a></li>
              </ul>
            </div>
		      </div>
		 
		    </div>
		  </div>
		</div>
	</div>
	<div class="span3">
		
	</div>

	<div class="span10">
	<section id="reg">
		<div class="register">
		<form class="form-horizontal">
			<fieldset>
				<legend>Student Details</legend>
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
                    <label class="control-label" for="inputDate">Date of Birth</label>
                    <div class="controls">
                    <input type="date" id="inputDate" >
                    </div>
                    </div>
                   
                    <div class="control-group">
                    <label class="control-label" for="inputGender">Gender</label>
                    <div class="controls">
                    <select>
                      <option>Male</option>
                      <option>Female</option>
                      
                      </select>
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputClass">Class</label>
                    <div class="controls">
                    <select>
                      <option>Nursery</option>
                      <option>One</option>
                      <option>Two</option>
                      <option>Three</option>
                      <option>Four</option>
                      <option>Five</option>
                      <option>Six</option>
                      <option>Seven</option>
                      <option>Eight</option>
                      </select>
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputGuard">Parent/Guardian Names</label>
                    <div class="controls">
                    <input type="text" id="inputGuard" placeholder="Guardian Name">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputGcontact">Guardian Contact</label>
                    <div class="controls">
                    <span class="add-on">+254</span>
                    <input type="text" id="inputGcontact">
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPhone">Special Needs</label>
                    <div class="controls">
                    <label class="radio">
                    <input id="optionsRadios1" type="radio" checked="" value="1" name="optionsRadios">
                    Normal Child
                    </label>
                    <label class="radio">
                    <input id="optionsRadios2" type="radio" value="2" name="optionsRadios">
                    Special Child
                    </label>
                    </div>
                    </div>
                    <div class="control-group">
                    <div class="controls">
                    
                    <button type="submit" class="btn btn-primary">Register Student</button>
                    </div>
                    </div>
			</fieldset>
		</form>
			
		</div>
	</section>
	</div>
		
	</div>
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
</body>
	
</html>