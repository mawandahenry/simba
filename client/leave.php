
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
              $("input[name=leav4]").val(fil[index].gender).attr("disabled","disabled");   
              $("input[name = leav5]").val(fil[index].age).attr("disabled","disabled");   
              $("#eh").attr("src","../server/uploads/"+fil[index].profile);                    
           });
             $(".loading4").hide();
     },
  error: function(){
         alert("something went wrong");
     }
 });//......here
    
    
   });
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
          	<table class="table">
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
<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" >
      <div id="is_photo">
  <img  id = "eh" src="../assets/images/place.png" width="200" height="200" class="img-thumbnail">
</div> 
     <div class="form-group">
    <div class="col-sm-10">
   <label>EmployeeNo.</label><input type="text" class="form-control"  name ="leav1">
   <input type="hidden" name = "id" >
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
     <div class="form-group">
    <div class="col-sm-10">
    <label>Gender</label>
       <input type="text" class="form-control"   name="leav4">
          </div>
       </div>
    <div class="form-group">
      <div class="col-sm-10">
      <label>Age</label>
        <input type="text" class="form-control"   name = "leav5">
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
      <div class="form-group">
   <div class="col-sm-10">
   <label>Leave date date</label>
 <input type="text" class="form-control"   name= "leav7">
      </div>
       </div>
        <div class="form-group">
    <div class="col-sm-10">
    <label>Return date</label>
       <input type="text" class="form-control"  name="leav8">
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
  <div class="card-footer">Footer</div>
</div>
</div>
</td>
</tr>
</table>
</div>