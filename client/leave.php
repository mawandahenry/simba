
<script>
  $(function(){
    $("#search_leav").keyup(function(){
    var namex = $(this).val();
    $(".loading4").show();
    $.ajax({
        type: 'post',
        url: '../server/forms.php',
        data: {"key_leav":namex}, //search feature on the delete guard tab. searches and returns values in tabular format
        dataType:'json',
        success: function(datam){
          $(".loading4").hide();
          
            var htm = '';
            $.each(JSON.parse(JSON.stringify(datam)),function(index,key){//creates a table structure for outputing the returned information
              counter ++;
                htm += '<tr  leave_id="'+datam[index].id+'" class= "op" >'+
                '<td><img src = "../server/uploads/'+datam[index].profile+'" height = "70" width="80"></td><td>'+datam[index].firstname+'</td><td>'+datam[index].lastname+'</td><td>'+datam[index].gender+'</td><td>'+datam[index].village+'</td>'+  
                '</tr>';                   
           });
           $("#result3").show();
           $(".resx").html(htm);  
           if($("#search_leav").val() == ""){
            $("#result").hide(); 
        }
        },
        error: function(){
            alert("An error has occured");
            $("#result").hide(); 
        }
    });
   });

   $(".resx").on("click",".op",function(){
       var leav_v = $(this).attr("leave_id");
       
       $(".loading4").show();
       $.ajax({
       url:'../server/forms.php',
       type:'post',
         data:{'search_leav':leav_v},
         dataType: 'json',
        success:function(fil){
            $.each(JSON.parse(JSON.stringify(fil)),function(index,key){
              $("input[name=leav1]").val(fil[index].Employee_id).attr("disabled","disabled");  
              $("input[name=leav2]").val(fil[index].firstname).attr("disabled","disabled");  
              $("input[name=leav3]").val(fil[index].lastname).attr("disabled","disabled");     
              $("input[name = leav5]").val(fil[index].age).attr("disabled","disabled"); 
              $("input[name=leav8]").val("DISABLED").attr("disabled","disabled");  
              $("#eh").attr("src","../server/uploads/"+fil[index].profile);                    
           });
             $(".loading4").hide();
     },
  error: function(){
         alert("something went wrong");
     }
 });//......here
    
    
   });

 $("#paid").change(function(){
    var pm = $(this).val();
   
    if(pm == "YES"){
      $("input[name=leav8]").attr("disabled",false).val("Enter Amount please");
    }
    else{
      $("input[name=leav8]").attr("disabled","disabled");
    }
 });
 $("#liv").submit(function(lop){
     lop.preventDefault();
       $("input[name=leav1]").attr("disabled",false);  
        $("input[name=leav2]").attr("disabled",false);  
       $("input[name=leav3]").attr("disabled",false);     
      $("input[name = leav5]").attr("disabled",false); 
    var tix = $(this).serialize();
   $(".loadingx").show();
    $.ajax({
 url:'../server/forms.php',
   type: 'post',
     data: {'leaves':tix},
      success: function(yep){
        if(yep == "success"){
           $("#stat").addClass("alert alert-success").text("Leave successfully granted").fadeOut(3000);
        $(".loadingx").hide();
         $('#liv')[0].reset();
         $("#eh").attr("src","../assets/images/place.png");  
        }else{
          $("#stat").addClass("alert alert-danger").text("Sorry something went wrong").fadeOut(3000);
        $(".loadingx").hide();
        }

 },
 error: function(){
   $("#stat").addClass("alert alert-danger").text("Error 404, Server is unreachable").fadeOut(3000);
   $(".loadingx").hide();
 }


    });
 })

  });
</script>


<h2 style="text-align: center;">Leave Management </h2>
<div class="container">
	<table class="table">
		<tr>
			<td><div class="ouf">
				<div class="card">
             <div class="card-header">
               <h4 style="text-align: center;">Main menue</h3>
             </div>
          <div class="card-body" >
          	<table class="table-hover">
          		<tr>
          			<td>
          			Award leave	
          			</td>
          		</tr>
          		<tr>
          			<td>
          			View leaves
          			</td>
          		</tr>
          		<tr>
          			<td>
          			Adjust Leave
          			</td>
          		</tr>
          		<tr>
          			<td>
          			Remove
          			</td>
          		</tr>
          	</table>

          </div>
       <div class="card-footer">Siimba</div>
     </div>
   </div>
			</td>
			<td>
        <div class="ouf2">
		<div class="card">
  <div class="card-header">
<marquee><h4 style="text-align: center;">Full details</h4></marquee>
  </div>
  <div class="card-body" style="height: 600px; overflow-y: scroll;">
    <div class="award">
  <div>
    <h4 style="text-align: center;">Award Leave</h4>
     <form class="form-inline md-form form-sm">
    <i class="fa fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" autocomplete="off" name ="search_leav" id = "search_leav" type="text" placeholder="Search guard...." aria-label="Search">
   </form></br>
    <div class="loading4">
      <img src="../assets/images/loader5.gif">
      
    </div>
<div id="result3">
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
<tbody class="resx">
    </tbody>
      </table>
       </div>
<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" id="liv">
      <div id="is_photo">
  <img  id = "eh" src="../assets/images/place.png" width="200" height="200" class="img-thumbnail">
</div> 
     <div class="form-group">
    <div class="col-sm-10">
   <label>EmployeeNo.</label><input type="text" class="form-control"  name ="leav1">
  </div>
 </div>
    <div class="form-group">
        <div class="col-sm-10">
        <label>firstname</label>
          <input type="text" class="form-control"   name="leav2">
       </div>
    </div>
 <div class="form-group">
    <div class="col-sm-10">
    <label>lastname</label>
       <input type="text" class="form-control"   name="leav3">
          </div>
       </div>
       <div class="form-group col-md-5">
  <label for="name">Leave Type</label>
<select class="form-control" name = "leav6">
     <option>Annual</option>
     <option>Maternal</option>
     <option>Patternal</option>
     <option>Sick Leave</option>
   </select>
  </div>
   <div class="form-group col-md-5">
  <label for="name">Paid</label>
<select class="form-control" name = "leav7" id="paid">
     <option>NO</option>
     <option>YES</option>
     
   </select>
  </div>
     <div class="form-group">
    <div class="col-sm-10">
    <label>Amount</label>
       <input type="text" class="form-control"   name="leav8">
          </div>
       </div>
  
      <div class="form-group">
   <div class="col-sm-10">
   <label>StartDate </label>
 <input type="text" class="form-control"   name= "leav9">
      </div>
       </div>
        <div class="form-group">
    <div class="col-sm-10">
    <label>Return date</label>
       <input type="text" class="form-control"  name="leav10">
          </div>
       </div>
        <div class="form-group">
           <label style="margin-left: 4%;">Reason</label>
     <div class="col-sm-10">
   <textarea class="form-control" placeholder="reason" name="reasons" rows="10" cols="20" id="reasonx">
  </textarea>
 </div>
  </div>
   
   <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn-primary btn-block">Grant leave</button>
     </div>
   </div>
        </form>
  </div>
</div>
  </div>
  <div class="card-footer">
 <div class="loadingx">
      <img src="../assets/images/loader5.gif">
  </div>
  <div id="stat">
  </div>
  </div>
</div>
</div>
</td>
</tr>
</table>
</div>