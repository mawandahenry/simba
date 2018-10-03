<!doctype html>
 <html lang="en">
	<head>
		<title>SIIMBA SHIELD</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />	
    
	</head>
	<body class="is-preload" style="background-color: #F0FFFF;"> 

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">SIMBA SHIELD</a>
				<nav>
					<a href="#menu">Siimba Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
			<h2>Admin</h2>
				<ul class="links">
					<li><a href="#" id = "add_gad">Add Guard</a></li>
					<li><a href="#" id = "delete_gad">Fire! Guard</a></li>
					<li><a href="#" id = "edit_gad">Edit Guard</a></li>
					<li><a href="#" id = "profile">Profile_pic</a></li>
          <li><a href="#" id = "details">Details</a></li>
					<li><a href="#" id = "leave">Leaves</a></li>
            <li><a href="#" id = "salary">Guards salaries</a></li>
					<li><a href="#">Supervisors</a></li>
          <li><a href="#">Reports</a></li>
				</ul>
			</nav>



<div id="heading" class="col-md-12 col-sm-12">
<h1>SIIMBA SHIELD</h1>
<img src = "../assets/images/samban.png" width="220" height = "200" style="float:right;">
</div>
<!-- heading -->

</br>
<div class="loy">
 <div id='loading2' >
  <img src="../assets/images/phonix.gif">
</div>
<div id='loadingy' >
  <img src="../assets/images/loader6.gif">
</div> 
</div>
<div class="pas">

 <div class="div_1">
   <h3 style="text-align:center;">Add Security Guard</h3></br>

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
          <input type="text" class="form-control"  placeholder="Enter First Name" name="first">
       </div>
    </div>
 <div class="form-group">
    <div class="col-sm-10">
       <input type="text" class="form-control"  placeholder="Enter Last Name" name="last">
          </div>
       </div>
     <div class="form-group col-md-5">
  <label for="name">Gender</label>
<select class="form-control" name = "gender">
     <option>Male</option>
	   <option>Female</option>
        
</div>
</td><td>
     <div class="form-group">
   <div class="col-sm-10">
<input type="text" class="form-control"  placeholder="Age" name = "age">
   </div>
     </div>
      <div class="form-group">
   <div class="col-sm-10">
 <input type="text" class="form-control"  placeholder="date of birth" name="dob">
    </div>
      </div>
   <div class="form-group">
<div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="NIN" name= "NIN">
     </div>
   </div>
<div class="form-group col-md-5">
    <label for="name">Status</label>
       <select class="form-control" name = "status">
    <option>Single</option>
  <option>Married</option>
</select>
   </div>
	 </td></tr>
	 <tr>
	 <td>
	 <div class="form-group">
  <div class="col-sm-10">
  <input type="text" class="form-control"  placeholder="Email" name="email">
    </div>
      </div>	 
	 </td>
	 <td>
	 <div class="form-group">
     <div class="col-sm-10">
   <input type="text" class="form-control"  placeholder="Contact" name="contact">
</div>
   </div>
	 </td>
</tr>
<tr>
	<td>
	<div class="form-group">
        <div class="col-sm-10">
     <input type="text" class="form-control"  placeholder="Emergency contact" name ="emergency">
   </div>
</div>
	</td><td>
	<div class="form-group">
      <div class="col-sm-10">
   <input type="text" class="form-control"  placeholder="number of kids" name="kids">
</div>
    </div>
	</td>
</tr>
<tr>
	<td>
	<div class="form-group">
        <div class="col-sm-10">
     <input type="text" class="form-control"  placeholder="father's name" name ="dad">
   </div>
</div>
	</td><td>
	<div class="form-group">
      <div class="col-sm-10">
   <input type="text" class="form-control"  placeholder="mother's name" name="mum">
</div>
    </div>
	</td>
</tr>
	</table>
        <h4 class="special"><u>Bank details</u> </h4>
     <table class="table"><tr><td>
	 <div class="form-group">
      <div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="Bank name" name="bank">
</div>
    </div>
    </td><td>
    <div class="form-group">
        <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Branch" name="branch">
    </div>
</div>
</td></tr>
<tr><td>
   <div class="form-group">
     <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Account number" name="account">
    </div>
</div>
</td><td>
   <div class="form-group">
     <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="NSSF number" name="nssf">
     </div>
  </div>
</td></tr></table>
     <h4 class="special"><u>Origin Info</u></h4>
         <table class="table"><tr><td>
     <div class="form-group">
   <div class="col-sm-10">
<input type="text" class="form-control"  placeholder="Home address" name="home">
     </div>
      </div>
        <div class="form-group">
     <div class="col-sm-10">
   <input type="text" class="form-control"  placeholder="county" name="county">
</div>
    </div>
     <div class="form-group">
       <div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="LC1 contact" name="lccontact">
   </div>
</div>
    </td><td>
     <div class="form-group">
       <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="village" name = "village">
      </div>
    </div>
  <div class="form-group">
<div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="LC1 name" name="lcname">
      </div>
        </div>
        <div class="form-group">
<div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="District" name="district">
      </div>
        </div>     
      </td></tr></table>
      <h4 class="special"><u>Location Info</u></h4>
         <table class="table"><tr><td>
     <div class="form-group">
   <div class="col-sm-10">
<input type="text" class="form-control"  placeholder="Home address" name="lhome">
     </div>
      </div>
        <div class="form-group">
     <div class="col-sm-10">
   <input type="text" class="form-control"  placeholder="county" name="lcounty">
</div>
    </div>
     <div class="form-group">
       <div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="LC1 contact" name="llccontact">
   </div>
</div>
    </td><td>
     <div class="form-group">
       <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="village" name = "lvillage">
      </div>
    </div>
  <div class="form-group">
<div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="LC1 name" name="llcname">
      </div>
        </div>
        <div class="form-group">
<div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="District" name="ldistrict">
      </div>
        </div>     
      </td></tr></table>
       <h4 class="special"><u>Next of kin</u></h4>
    <table class="table"><tr><td>
  <div class="form-group">
<div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="Next of kin" name="kin">
      </div>
       </div>
        <div class="form-group">
     <div class="col-sm-10">
    <input type="text" class="form-control"  placeholder="Contact" name="hiscontact">
  </div>
</div></td><td>
   <div class="form-group">
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Residence" name = "res">
      </div>
    </div>
   
</td></tr>

<tr><td>

     <div class="form-group">

        <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Hire date" name="hire">
     </div>
   </div></td><td>
<div class="form-group">
   <div class="col-sm-10">
     <input type="text" class="form-control"  placeholder="start date" name="start">
       </div>
    </div></td></tr><tr><td>
  <div class="form-group">
   <div class="col-sm-10">
     <input type="text" class="form-control"  placeholder="Monthly pay" name = "month">
       </div>
     </div>
    </td>
    <tr>
      <td>
         <div id="err">

   </div>
   <div id="errn">
          
   </div>
      </td>
      <td>
        <div id="loader">
       <img src="../assets/images/loader.gif">
      </div>
      </td>
    </tr>
  </tr>
   </table>
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-success btn-block" id ="sender">Add Guard</button>
     </div>
   </div>
 </form>
  
     
  </div>

     <div class="div_2">
       <h3 style="text-align:center;">Edit Security Guard</h3></br>
         <section>
         <form class="form-inline md-form form-sm">
    <i class="fa fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" autocomplete="off" name ="search" id = "search1" type="text" placeholder="Search guard...." aria-label="Search">
</form>
         
<div id="result">
  <div id="shed">
    <img src="../assets/images/loader2.gif">
    <p style="color: green">Loading please wait ......</p>
  </div>
	<table class="table">
        <thead>
     <tr>
     <td>Profile</td>
<td>firstname</td>
  <td>lastname</td>
	<td>Gender</td>
	 <td>village
</td>
  </tr>
    </thead>
     <tbody class="resp">  
       </tbody>
  </table>
</div>
<hr width="50">
 
	<h4 class="special">Personal Info</h4>
	<table class="table">
  <tr><td>
  <div class="form-group">
    <div class="col-sm-10">
     <img id="locked" class = "img-thumbnail" src="../assets/images/edits.png" width="210" height="200" />
      </div>
    </div>
  </td>
</tr>
        <tr>
	      <td>
       <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" id ="form2">
       
	   <div class="form-group">
    <div class="col-sm-10">
   <label>EmployeeNo.</label><input type="text" class="form-control"  name ="edit_number">
   <input type="hidden" name = "id" >
  </div>
 </div>
    <div class="form-group">
        <div class="col-sm-10">
        <label>firstname</label>
          <input type="text" class="form-control"   name="edit_first">
       </div>
    </div>
 <div class="form-group">
    <div class="col-sm-10">
    <label>lastname</label>
       <input type="text" class="form-control"   name="edit_last">
          </div>
       </div>
	   <div class="form-group">
    <div class="col-sm-10">
    <label>Gender</label>
       <input type="text" class="form-control"   name="edit_Gender">
          </div>
       </div>
 </td><td>
    <div class="form-group">
      <div class="col-sm-10">
      <label>Age</label>
        <input type="text" class="form-control"   name = "edit_age">
     </div>
   </div>
  <div class="form-group">
    <div class="col-sm-10">
    <label>Date of Birth</label>
      <input type="text" class="form-control"  name="edit_dob">
        </div>
          </div>
      <div class="form-group">
   <div class="col-sm-10">
   <label>NIN no.</label>
 <input type="text" class="form-control"   name= "edit_NIN">
      </div>
       </div>
        <div class="form-group">
    <div class="col-sm-10">
    <label>marital status</label>
       <input type="text" class="form-control"  name="edit_status">
          </div>
       </div>
   </td>
   <td>
    <div class="form-group">
      <div class="col-sm-10">
      <label>Father's name</label>
        <input type="text" class="form-control"   name = "edit_dad">
     </div>
   </div>
  <div class="form-group">
    <div class="col-sm-10">
    <label>mother's name</label>
      <input type="text" class="form-control"  name="edit_mum">
        </div>
          </div>
     
   </td></tr>
     </table>
      <h4 class="special"><u>Bank details</u> </h4>
        <table class="table"><tr><td>
    <div class="form-group">
  <div class="col-sm-10">
  <label>email</label>
 <input type="text" class="form-control"  placeholder="Email" name="edit_email">
    </div>
     </div>
      <div class="form-group">
        <div class="col-sm-10">
        <label>Contact</label>
     <input type="text" class="form-control"  placeholder="Contact" name="edit_contact">
  </div>
   </div>
     <div class="form-group">
       <div class="col-sm-10">
       <label>Emergency</label>
         <input type="text" class="form-control"  placeholder="Emergency contact" name ="edit_emergency">
        </div>
     </div>
   </td><td>
 <div class="form-group">
   <div class="col-sm-10">
   <label>Bank name</label>
     <input type="text" class="form-control"  placeholder="Bank name" name="edit_bank">
       </div>
        </div>
   <div class="form-group">
 <div class="col-sm-10">
 <label>Branch</label>
  <input type="text" class="form-control"  placeholder="Branch" name="edit_branch">
   </div>
    </div>
      <div class="form-group">
        <div class="col-sm-10">
        <label>Account Number</label>
    <input type="text" class="form-control"  placeholder="Account number" name="edit_account">
  </div>
 </div>
  <div class="form-group">
    <div class="col-sm-10">
    <label>NSSFno.</label>
      <input type="text" class="form-control"  placeholder="NSSF number" name="edit_nssf">
       </div>
 </div>
  </td></tr></table>
    <h4 class="special"><u>Origin</u></h4>
      <table class="table"><tr><td>
   <div class="form-group">
 <div class="col-sm-10">
 <label>Home address</label>
   <input type="text" class="form-control"  placeholder="Home address" name="edit_home">
     </div>
       </div>
        <div class="form-group">
     <div class="col-sm-10">
     <label>County</label>
    <input type="text" class="form-control"  placeholder="county" name="edit_county">
  </div>
   </div>
    <div class="form-group">
      <div class="col-sm-10">
      <label>Sub-County</label>
       <input type="text" class="form-control"  placeholder="Sub-county" name="edit_sub">
     </div>
    </div>
 </td><td>
  <div class="form-group">
    <div class="col-sm-10">
    <label>Village</label>
      <input type="text" class="form-control"  placeholder="village" name = "edit_village">
       </div>
   </div>
   <div class="form-group">
    <div class="col-sm-10">
    <label>District</label>
     <input type="text" class="form-control"  placeholder="District" name="edit_district">
      </div>
    </div>
   <div class="form-group">
 <div class="col-sm-10">
 <label>No of Kids</label>
   <input type="text" class="form-control" placeholder="number of kids" name="edit_kids">
     </div>
      </div>
   </td></tr>
   <tr>
   <td><div class="form-group">
 <div class="col-sm-10">
 <label>LC1 name</label>
   <input type="text" class="form-control" placeholder="lc1 name" name="edit_2">
     </div>
      </div></td><td>
      <div class="form-group">
 <div class="col-sm-10">
 <label>LC1 contact</label>
   <input type="text" class="form-control" placeholder="lc1 contact" name="edit_3">
     </div>
      </div>
      </td>
   </tr>
 </table>
 <h4 class="special"><u>Location Info</u></h4>
         <table class="table"><tr><td>
     <div class="form-group">
   <div class="col-sm-10">
   <label>Home address</label>
<input type="text" class="form-control"  placeholder="Home address" name="edit_lhome">
     </div>
      </div>
        <div class="form-group">
     <div class="col-sm-10">
     <label>county</label>
   <input type="text" class="form-control"  placeholder="county" name="edit_lcounty">
</div>
    </div>
     <div class="form-group">
       <div class="col-sm-10">
       <label>LC1 contact</label>
    <input type="text" class="form-control"  placeholder="LC1 contact" name="edit_llccontact">
   </div>
</div>
    </td><td>
     <div class="form-group">
       <div class="col-sm-10">
       <label>village</label>
        <input type="text" class="form-control"  placeholder="village" name = "edit_lvillage">
      </div>
    </div>
  <div class="form-group">
<div class="col-sm-10">
<label>LC1 name</label>
    <input type="text" class="form-control"  placeholder="LC1 name" name="edit_4">
      </div>
        </div>
        <div class="form-group">
<div class="col-sm-10">
<label>LC1 district</label>
    <input type="text" class="form-control"  placeholder="District" name="edit_ldistrict">
      </div>
        </div>     
      </td></tr></table>
  <h4 class="special"><u>INFO</u></h4>
   <table class="table"><tr><td>
    <div class="form-group">
  <div class="col-sm-10">
  <label>Next of Kin</label>
 <input type="text" class="form-control"  placeholder="Next of kin" name="edit_kin">
  </div>
   </div>
    <div class="form-group">
  <div class="col-sm-10">
  <label>Contact</label>
 <input type="text" class="form-control"  placeholder="Contact" name="edit_hiscontact">
  </div>
   </div>
   <div class="form-group">
 <div class="col-sm-10">
 <label>Residence</label>
  <input type="text" class="form-control"  placeholder="Residence" name = "edit_res">
   </div>
    </div>
     </td><td>
   <div class="form-group">
  <div class="col-sm-10">
  <label>Hire date</label>
  <input type="text" class="form-control"  placeholder="Hire date" name="edit_hire">
  </div>
   </div>
    <div class="form-group">
     <div class="col-sm-10">
     <label>Start date</label>
   <input type="text" class="form-control"  placeholder="start date" name="edit_start">
 </div>
  </div>
   <div class="form-group">
     <div class="col-sm-10">
     <label>Monthly Pay</label>
  <input type="text" class="form-control"  placeholder="Monthly pay" name = "edit_month">
 </div>
   </div>
    </td></tr>

    <tr>
      <td>
        <div id="err3"></div>
 <div id="err4"></div>
  
      </td>
      <td>
        <div id="loader2">
    <img src="../assets/images/loader.gif">
     </div>
      </td>
    </tr></table>

     <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
 <button type="submit" class="btn btn-info btn-block" id ="editor">Edit Guard</button>
   </div>
    </div>
  </form>

 
 </section>
</div>
<div class = "profile">
<div class="mainy">
<h1 style="text-align: center;">Photo Upload</h1><br/>
<hr>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div class="form-group">
 <div class="col-sm-10" style = "margin-left: 10%;">
  <input type="text" class="form-control"  placeholder = "Employee Number" name = "numbs">
 </div>
   </div>
<div id="image_preview">
  <img id="previewing" src="../assets/images/place.png" width="180" height="180" />
</div>

<div id="selectImage">
<label id="libel">Select Your Image</label><br/>
<input type="file" name="file" id="file" required />
<input type="submit" value="Upload" class="submit" />
</div>
</form>
</div>
<div id='loading' >
  <img src="../assets/images/phonix.gif">
</div>
<div id="message"></div>
</div>

 <div class = "delete">
 <h3 style = "text-align: center;">Firing!! Guards</h3>

<div id="searched">
  <form class="form-inline md-form form-sm active-cyan active-cyan-2">
    <i class="fa fa-search" aria-hidden="true"></i>
      <input class="form-control form-control-sm ml-3 w-75" type="text" autocomplete="off" id = "search2" name ="search2" placeholder="Search Security Guard....." aria-label="Search">
</form>
</div>
<div id="counter"></div>
<div id="sachi">
  <img src="../assets/images/loader1.gif">
</div>
<div id="result2">
<table class="table">
<thead>
  <tr>
    <td>Profile</td>
   <td>firstname</td>
  <td>lastname</td>
	 <td>Gender</td>
	  <td>village</td>
     <td>Delete</td>
  </tr>
 </thead>
<tbody class="res">
    </tbody>
      </table>
       </div>
       <hr>
        <div class="is_hidden">
  <div class="form-group">
<div class="col-sm-10">
  <input type="text" class="form-control"  placeholder="firedate" name="fire_date" id="firedate">
    </div>
      </div>
        <div class="form-group">
     <div class="col-sm-10">
   <textarea class="form-control" placeholder="reason" name="fire_reason" rows="10" cols="30" id="reason">
  </textarea>
 </div>
  </div>
   <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
 <button type="submit" class="btn btn-danger btn-block" id ="editorx">Confirm</button>
   </div>
    </div>
    </div>
    <div id="sachi2">
  <img src="../assets/images/loader1.gif">
</div>
     </div>
 </div>
</div>
			</footer>
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/photo.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
			<script src="../assets/js/queries.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>