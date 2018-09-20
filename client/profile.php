<script>
$(function(){
    $("#sea").keyup(function(){
    var detail_name = $(this).val();
    
    $.ajax({
        type: "post",
        url: "../server/forms.php",
        data: {"details":detail_name}, //search feature on the details guard tab. searches and returns values in tabular format
        dataType:'json',
        success: function(details){
            alert(details);
        //     var ht = '';
        //     $.each(JSON.parse(JSON.stringify(details)),function(index,key){//creates a table structure for outputing the returned information
        //         ht += '<tr id="xtreme" our_id="'+details[index].id+'" >'+
        //         '<td><img src = "../server/uploads/'+details[index].profile+'" height = "70" width="80"></td><td>'+details[index].firstname+'</td><td>'+details[index].lastname+'</td><td>'+details[index].gender+'</td><td>'+details[index].village+'</td>'+  
        //         '</tr>';                   
        //    });
        //    $("#resul").show();
        //    $(".response").html(ht);  
        //    if($("#search_val").val() == ""){
        //     $("#resul").hide("slow"); 
        // }
        },
        error: function(){
            alert("An error has occured");
        }
    });
   });
   $(".response").on("click","#xtreme",function(){
    var ginks = $(this).attr("our_id");
   
   
        $.ajax({
            url: "../server/forms.php",
            type: "post",
            data:{"det":ginks},
            dataType:'json',  //works on firing of the security guards. 
            success: function(bad){
                var tab = '';
                var tab2 = '';
                var tab3 = '';
                var tab4 = '';
                var tab5 = '';
                var tab6 = '';
                $.each(JSON.parse(JSON.stringify(bad)),function(index,key){
                    //creates a table structure for outputing the returned information
                    
              tab += '<tr><th rowspan="5"><div><img id ="hello" class = "img-thumbnail" src="../server/uploads/'+bad[index].profile+'" height="180" width = "190"></div></th><td >Guard ID</td><td class = "ti">'+bad[index].Employee_id+'</td></tr>'+
              '<tr><td >First Name</td><td class = "ti">'+bad[index].firstname+'</td></tr>'+
              '<tr><td >Last Name</td><td class = "ti">'+bad[index].lastname+'</td></tr>'+
              '<tr><td >Age</td><td class = "ti">'+bad[index].age+'</td></tr>'+
              '<tr><td >Gender</td><td class = "ti">'+bad[index].gender+'</td></tr>';
              tab2 += '<tr><td >Date of Birth</td><td class = "ti">'+bad[index].DOB+'</td ><td >Status</td><td class = "ti">'+bad[index].status+'</td></tr> '+
              '<tr><td >No. of Kids</td><td class = "ti">'+bad[index].kids+'</td><td >NIN</td><td class = "ti">'+bad[index].NIN+'</td></tr>'+
              '<tr><td >Hired on</td><td class = "ti">'+bad[index].hiredate+'</td><td >Started on</td><td class = "ti">'+bad[index].startdate+'</td></tr>'+
              '<tr><td >Monthly Salary</td><td class = "ti">'+bad[index].monthlypay+'</td><td >Total earned</td><td class = "ti">'+bad[index].earnedsofar+'</td></tr>'+
              '<tr><td >Fathers name</td><td class = "ti">'+bad[index].dad+'</td><td >mothers name</td><td class = "ti">'+bad[index].mum+'</td></tr>'+
              '<tr><td >NSSF no.</td><td class = "ti">'+bad[index].NSSFno+'</td><td >Email</td><td class = "ti">'+bad[index].email+'</td></tr>';
              tab3 += '<tr><td >LC1 name.</td><td class = "ti">'+bad[index].lcname+'</td><td >LC1 contact</td><td class = "ti">'+bad[index].lccontact+'</td></tr>'+
              '<tr><td >District</td><td class = "ti">'+bad[index].district+'</td><td >County</td><td class = "ti">'+bad[index].county+'</td></tr>'+
              '<tr><td >Village</td><td class = "ti">'+bad[index].village+'</td><td >Sub County</td><td class = "ti">'+bad[index].subcounty+'</td></tr>';
              tab4 += '<tr><td >Bank name</td><td class = "ti">'+bad[index].bankname+'</td><td >Branch</td><td class = "ti">'+bad[index].branch+'</td></tr>'+
              '<tr><td >A/CNumber</td><td class = "ti">'+bad[index].accountnumber+'</td><td>Account name</td><td></td></tr>';
              tab5 += '<tr><td >Village</td><td class = "ti">'+bad[index].lvillage+'</td><td >County</td><td class = "ti">'+bad[index].lcounty+'</td></tr>'+
              '<tr><td >District</td><td class = "ti">'+bad[index].ldistrict+'</td><td >Home Addr</td><td class = "ti">'+bad[index].lhome+'</td></tr>'+
              '<tr><td >LC1 name</td><td class = "ti">'+bad[index].llcname+'</td><td >LC1 Contact</td><td class = "ti">'+bad[index].llcontact+'</td></tr>';
              tab6 += '<tr><td >Next of Kin</td><td class = "ti">'+bad[index].next_of_kin+'</td><td >Contact</td><td class = "ti">'+bad[index].hiscontact+'</td></tr>'+
              '<tr><td >Residence</td><td class = "ti">'+bad[index].residence+'</td><td ></td><td class = "ti"></td></tr>';
                                 
           });
             $(".dest").html(tab);  
             $(".dest2").html(tab2);
             $(".dest3").html(tab3);
             $(".dest4").html(tab4);
             $(".dest5").html(tab5);
             $(".dest6").html(tab6);
            },
            error: function(){
                alert("An error has occured suddenly!!!!");
            }
        });
    
    
   });
   $("#mort").click(function(vim){
       vim.preventDefault();
       $("#more").slideToggle("slow");
   });
});
</script>

<div class="container">
    <br/>
	<div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm" id = "detail_form" method = "POST" >
         <div class="card-body row no-gutters align-items-center">
     <div class="col-auto">
 <i class="fas fa-search h4 text-body"></i>
</div>
<!--end of col-->
  <div class="col">
     <input type = "text" class="form-control form-control-lg form-control-borderless" id ="sea" placeholder="Search guards details">
        </div>
        <!--end of col-->
    <div class="col-auto">
<button class="btn btn-lg btn-success" type="submit">Search</button>
  </div>
    </div>
</form>
</div>
 <!--end of col-->
 </div>
</div>

<div id = "resul">
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
     <tbody class="response">
    </tbody>
  </table>
</div>
<h2 style = "text-align: center;">FULL DETAILS</h2>
<div id = "details_table">
<table class = "table">    
    <tbody class = "dest">
    
</tbody>       
    </table>   
</div></br>
<a href="#"  id = "mort" class = "btn btn-success" style = "margin-left:90%;">more</a>

<div id = "more">
<table class = "table">   
    <tbody class = 'dest2'> 
    
</tbody>    
    </table>  
 <div>
     <table class = "table">
         <tbody>
</tbody>
</table>
</div> 
</br>
<div class = "cl">
    <h3 style="text-align: center;">Origin</h3>
    <table class = "table">
        <tbody class = "dest3">
</tbody>
</table>
</div>
</br>
<div class = "cl">
    <h3 style="text-align: center;">Bank Details</h3>
    <table class = "table">
        <tbody class = "dest4">
</tbody>
</table>
</div>
</br>
<div class = "cl">
    <h3 style="text-align: center;">Location Info</h3>
    <table class = "table">
        <tbody class = "dest5">
</tbody>
</table>
</div>
</br>
<div class = "cl">
    <h3 style="text-align: center;">Next Of Kin</h3>
    <table class = "table">
        <tbody class = "dest6">
</tbody>
</table>
</div>
</div>