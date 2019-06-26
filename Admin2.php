 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<title>Admin2</title>
</head>
<style >

body{
	
	font-family: "Lato", sans-serif;
}
.table th{
  width: 20%;
}

#addfac{
  
  visibility: hidden; 
  height: 150px;
  
  position: relative;
  top: -380px;
  

  }
.sidenav{
	height: 100%;
	width: 200px;
	position: fixed;
	z-index: 1;
	top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.button2:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

	
</style>
<style>
	.topnav{
	overflow: hidden;
	background-color: #333;
}
topnav a{
	float: left;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}
topnav a:hover{
	background-color: #ddd;
	color: black;
}
.topnav a.active{
	background-color: #4CAF50;
	color: white;
}
.topnav-right{
	float: right;

}
#managefac{
  visibility: hidden;
  position: relative;
  top: -820px;
  width: 100%;
}
#managestud{
  visibility: hidden;
  position: relative;
  top: -950px;
   width: 100%;
}
#addstud{
  position: relative;
  visibility: hidden;
  top: -1080px;
}

</style>
<body>
	<div class="topnav" id="top">
			<div class="navbar-right">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
				<li><a href="#">Change Password</a></li>
			</ul>

		</div>
	</div>

	<div class="sidenav">
		<div class="navbar-header">
		<a href="#" class="nav navbar-brand"><span class="glyphicon glyphicon-user"></span>Faculty</a>

        </div>
        

        
        <!--<button class="dropdown-btn"><span class="glyphicon glyphicon-cog"></span> Faculty
        	<i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        	<a href="#" onclick="managefac()"><span class="glyphicon glyphicon-eye-open"></span> Manage Faculty</a>
        	<a href="#" onclick="addfac()"><span class="glyphicon glyphicon-plus"></span>Add Faculty</a>
        </div>

        <button class="dropdown-btn"><span class="glyphicon glyphicon-education"></span>Student
        	<i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
        	<a href="#" onclick="managestud()"><span class="glyphicon glyphicon-eye-open"></span>Manage Student</a>
        	<a href="#" onclick="addstud()"><span class="glyphicon glyphicon-plus"></span>Add Student</a>
        </div>

        <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span>Feedback</a>
        <a href="#"><span class="glyphicon glyphicon-search"></span>Search Faculty</a>


	</div>-->

	<!--<div id="dashboard" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Total Faculties</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Total Students</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Number of Feedback</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->

          <div id="addfac" class="container" style="top: -350px; position: relative;">
            <h2>Add Faculty</h2>
            <form action="addfac.php" method="POST" class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-2" for="fname" style="right: -15px;">First Name:</label>
                <div class="col-sm-9">
                  <input type="text" name="fname" class="form-control" placeholder="Enter First Name" name="fname">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="lname" style="right: -15px;">Last Name:</label>
                <div class="col-sm-9">
                  <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" name="lname">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email" style="right: -15px;">E-mail:</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" placeholder="Enter Your E-mail" name="email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password" style="right: -15px;">Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" placeholder="Enter Password" name="password">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="contact" style="right: -15px;">Mobile No:</label>
                <div class="col-sm-9">
                  <input type="number" name="contact" class="form-control" placeholder="Enter Mobile Number" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="dept" style="position: relative; right: -4px;">Department:</label>
                <select name="dept" class="col-sm-9" style="position: relative; left: 15px; float: left; right: 20px;">
                  <option value="CSE">CSE</option>
                  <option value="ME">ME</option>
                  <option value="EC">EC</option>
                  <option value="EX">EX</option>
                  <option value="CE">CE</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="qualif" style="right: 4px;">Qualification:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="qualif" placeholder="Enter Qualification" name="qualif">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="address" style="right: -12px;">Address:</label>
                <div class="col-sm-9">
                  <textarea name="address" class="form-control" id="address"></textarea>
                </div>
              </div>
              <button type="Submit" name="addfac" class="button button2" style="background-color: indigo; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; -webkit-transition-duration: 0.4s; transition-duration: 0.4s; position: relative; right: -390px;">Add Faculty</button>   
              
            </form>
          </div>
          <div class="container" id="managefac">
            <h2>Manage Faculty</h2>
            
            <form method="POST" action="managefac.php">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Department</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <?php
            $con=mysqli_connect("localhost","root","","feed1");
            if (mysqli_connect_errno()) {
              echo "Failed to connect to Database: ".mysqli_connect_error;
            }
            $result=mysqli_query($con,"select firstname,lastname,email,dept from faculty");

              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['dept']."</td>";
                echo "<td>"."<button type='Submit' name='action' value='edit'>Edit</button>"."</td>";
                echo "<td>"."<button type='Submit' name='action' value='delete'>Delete</button>"."</td>";
                
              }
            echo"</table>";
            mysqli_close($con);
            ?>
          </form>
          </div>
          <div class="container" id="managestud">
            <h2>Manage Student</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
            </table>
          </div>
           <div id="addstud" class="container" >
            <h2>Add Student</h2>
            <form action="" method="POST" class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-2" for="fname" style="right: -15px;">First Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="lname" style="right: -15px;">Last Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email" style="right: -15px;">E-mail:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" placeholder="Enter Your E-mail" name="email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password" style="right: -15px;">Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="contact" style="right: -15px;">Mobile No:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="contact" placeholder="Enter Mobile Number" name="contact">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="dept" style="position: relative; right: -4px;">Department:</label>
                <select class="col-sm-9" style="position: relative; left: 15px; float: left; right: 20px;">
                  <option value="CSE">CSE</option>
                  <option value="ME">ME</option>
                  <option value="EC">EC</option>
                  <option value="EX">EX</option>
                  <option value="CE">CE</option>
                </select>
              </div>
            
              <button type="Submit" class="button button2" style="background-color: indigo; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; -webkit-transition-duration: 0.4s; transition-duration: 0.4s; position: relative; right: -390px;">Add Student</button>   
              
            </form>
          </div>


<script type="text/javascript">
  function addfac(){
    document.getElementById("dashboard").style.visibility = "hidden";
    document.getElementById("addfac").style.visibility = "visible";
    document.getElementById("managefac").style.visibility = "hidden";
    document.getElementById("managestud").style.visibility = "hidden";
    document.getElementById("addstud").style.visible = "hidden";
    
  }
</script>
<!--<script type="text/javascript">
  function managefac(){
    //document.getElementById("dashboard").style.visibility = "hidden";
    document.getElementById("addfac").style.visibility = "hidden";
    document.getElementById("managefac").style.visibility = "visible";
    document.getElementById("managestud").style.visibility = "hidden";
    document.getElementById("addstud").style.visibility = "hidden";
   }
</script>
<script type="text/javascript">
  function managestud(){
    document.getElementById("dashboard").style.visibility = "hidden";
    document.getElementById("addfac").style.visibility = "hidden";
    document.getElementById("managefac").style.visibility = "hidden";
    document.getElementById("managestud").style.visibility = "visible";
    document.getElementById("addstud").style.visibility = "hidden";
   }
</script>
<script type="text/javascript">
  function addstud(){
     document.getElementById("dashboard").style.visibility = "hidden";
    document.getElementById("addfac").style.visibility = "hidden";
    document.getElementById("managefac").style.visibility = "hidden";
    document.getElementById("managestud").style.visibility = "hidden";
    document.getElementById("addstud").style.visibility = "visible";
  }
</script>-->
	<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>




</body>
</html>