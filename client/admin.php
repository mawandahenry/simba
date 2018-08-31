<html>
	<head>
		<title>SIMBA SHIELD</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

		<script>
			$(function(){
				$(document).ajaxStart(function(){
					$("#loader").fadeIn("slow");
					alert("am started");
				});

				$(document).ajaxStop(function(){
					$("#loader").fadeOut("slow");
				});
			});
			</script>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">SIMBA SHIELD</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
			<h2>Admin</h2>
				<ul class="links">
					<li><a href="#" id = "add_gad">Add Guard</a></li>
					<li><a href="#" id = "delete_gad">Delete Guard</a></li>
					<li><a href="#" id = "edit_gad">Edit Guard</a></li>
					<li><a href="#">Add supervisor</a></li>
					<li><a href="#">Delete Sup</a></li>
					<li><a href="#">Edit Sup</a></li>
				</ul>
			</nav>



<div id="heading" >
<h1>SIMBA SHIELED</h1>
<img src = "../assets/images/samban.png" width="220" height = "200" style="float:right;">
</div></br>
<div class="div_1">
   <h3 style="text-align:center;">Add Security Guard</h3></br>
       <section>
<h4 class="special">Personal Info</h4>
	<table class="table">
        <tr>
	      <td>
		   <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" id ="form1">
	   <div class="form-group">
    <div class="col-sm-10">
   <input type="text" class="form-control" placeholder="Enter Employee number" name ="number">
  </div>
</div>
    <div class="form-group">
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lastname" placeholder="Enter First Name" name="first">
       </div>
    </div>
<div class="form-group">
    <div class="col-sm-10">
       <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="last">
          </div>
       </div>
     <div class="form-group col-md-5">
  <label for="name">Gender</label>
<select class="form-control" name = "gender">
     <option>Male</option>
<option>Female</option>
</select>
</div>
</td><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Age" name = "age">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="date of birth" name="dob">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="NIN" name= "NIN">
</div>
</div>
<div class="form-group col-md-5">
<label for="name">Status</label>
<select class="form-control" name = "status">
<option>Single</option>
<option>Married</option>

</select>
</div>

</td></tr></table>
<h4 class="special"><u>Bank details</u> </h4>
<table class="table"><tr><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Email" name="email">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Contact" name="contact">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Emergency contact" name ="emergency">
</div>
</div>
</td><td>

<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Bank name" name="bank">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Branch" name="branch">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Account number" name="account">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="NSSF number" name="nssf">
</div>
</div>
</td></tr></table>
<h4 class="special"><u>location</u></h4>
<table class="table"><tr><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Home address" name="home">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="county" name="county">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Sub-county" name="sub">
</div>
</div>
</td><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="village" name = "village">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="District" name="district">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="number of kids" name="kids">
</div>
</div>
</td></tr></table>
<h4 class="special"><u>INFO</u></h4>
<table class="table"><tr><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Next of kin" name="kin">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Contact" name="hiscontact">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Residence" name = "res">
</div>
</div>
</td><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Hire date" name="hire">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="start date" name="start">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Monthly pay" name = "month">
</div>
</div>
</td></tr></table>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-success btn-block" id ="sender">Add Guard</button>
</div>
</div>

</form>
<div id="err"></div>
<div id="loader">
<img src="../assets/images/loader.gif">
</div>
</section>
</div>
<!-- edit div -->
<div class="div_2">
   <h3 style="text-align:center;">Edit Security Guard</h3></br>
       <section>
	   <div class="search-box">
        <input type="text" autocomplete="off" name ="search" id ="search"class="form-control col-md-11" placeholder="Search Guard...." />
        <div id="result"></div>
    </div>
  
</div>
		</form>
		<div id = "results"></div>
		   	   
<h4 class="special">Personal Info</h4>
	<table class="table">
        <tr>
	      <td>
		   <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" id ="form2">
	   <div class="form-group">
    <div class="col-sm-10">
   <input type="text" class="form-control"  name ="number">
  </div>
</div>
    <div class="form-group">
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lastname"  name="first">
       </div>
    </div>
<div class="form-group">
    <div class="col-sm-10">
       <input type="text" class="form-control" id="lastname"  name="last">
          </div>
       </div>
	   <div class="form-group">
    <div class="col-sm-10">
       <input type="text" class="form-control" id="lastname"  name="Gender">
          </div>
       </div>
</td><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname"  name = "age">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname"  name="dob">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname"  name= "NIN">
</div>
</div>
<div class="form-group">
    <div class="col-sm-10">
       <input type="text" class="form-control"  name="status">
          </div>
       </div>

</td></tr></table>
<h4 class="special"><u>Bank details</u> </h4>
<table class="table"><tr><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Email" name="email">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Contact" name="contact">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Emergency contact" name ="emergency">
</div>
</div>
</td><td>

<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Bank name" name="bank">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Branch" name="branch">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Account number" name="account">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="NSSF number" name="nssf">
</div>
</div>
</td></tr></table>
<h4 class="special"><u>location</u></h4>
<table class="table"><tr><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Home address" name="home">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="county" name="county">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Sub-county" name="sub">
</div>
</div>
</td><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="village" name = "village">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="District" name="district">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="number of kids" name="kids">
</div>
</div>
</td></tr></table>
<h4 class="special"><u>INFO</u></h4>
<table class="table"><tr><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Next of kin" name="kin">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Contact" name="hiscontact">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Residence" name = "res">
</div>
</div>
</td><td>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Hire date" name="hire">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="start date" name="start">
</div>
</div>
<div class="form-group">
<div class="col-sm-10">
<input type="text" class="form-control" id="lastname" placeholder="Monthly pay" name = "month">
</div>
</div>
</td></tr></table>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-info btn-block" id ="editor">Edit Guard</button>
</div>
</div>

</form>
<div id="err"></div>
<div id="loader">
<img src="../assets/images/loader.gif">
</div>
</section>
</div>

		<!-- Footer -->
			<footer id="footer" style="height:100px;">
		<div class="content">
    <section>
	<h4>Simba Shield</h4>
	   </section>
		</div
			</footer>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/queries.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>