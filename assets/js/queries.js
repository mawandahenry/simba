$(function(){

  var hinks = 0;
  var parent = '';
    $(window).ajaxStart(function(){ //doing ajax start operations. executes  when an ajax call is fired
        $("#loader").show("slow",function(){
          $("#loader2").show();
        });
       });

       $(window).ajaxComplete(function(){
        $("#loader").hide(1000, function(){
          $("#loader2").hide();
        });
       });

     $("#sender").on('click',function(e) {
        e.preventDefault();
        var x = $("#form1").serialize();//stringify all the form data into a long string that is sent to the php script
       
        $.ajax({
        url: "../server/forms.php",  //The adding in of users / security guards is implemented from here
        type: "POST",
        data:{"data1":x},
        success: function(data){
           if(data == "success"){
         $('#form1')[0].reset();
         $("#err").addClass("successful").text("Guard successfully inserted").hide(4000);// pending operations. not yet fully done
         
           }else{
               alert("Data could not be sent because of an error");
           }
     
   },
    error: function() {
   alert("An error has occured. please contact the system engineers");
    }          
     });
    });
    $("#add_gad").click(function(m){
        m.preventDefault();
        $(".pas").show();
        $(".loy").hide(1000, function(){
          $(".div_1").show("slow", function(){ //switching between different tabs [edit and add guards ]
            $(".div_2").hide("slow", function(){//add guard tab enabler
                $(".profile").hide("slow", function(){
                    $(".delete").hide("slow");
                });
            });
        });
        });
        
    });
    $("#edit_gad").click(function(y){
        y.preventDefault();
        $(".pas").show();
        $(".loy").hide(1000, function(){
          $(".div_2").show("slow", function(){
            $(".div_1").hide("slow", function(){ //switching between different tabs [edit and add guards ]
                $(".profile").hide("slow",function(){
                    $(".delete").hide("slow");  
                });  //edit guard tab enabler
            });
        });
        });
    });
    $("#profile").click(function(m){
        m.preventDefault();
         $(".pas").show();
          $(".loy").hide(1000, function(){
            $(".profile").show("slow", function(){  //switching between different tabs [edit and add guards ]
             $(".div_2").hide("slow", function(){ //profile picture tab enabler
                $(".div_1").hide("slow",function(){
                    $(".delete").hide("slow");
                });
            });
           });
        });
    });
    $("#delete_gad").click(function(u){
        u.preventDefault();
         $(".pas").show();
          $(".loy").hide(1000, function(){
            $(".delete").fadeIn("slow", function(){  //switching between different tabs [edit and add guards ]
            $(".div_2").hide("slow", function(){ //profile picture tab enabler
                $(".div_1").hide("slow",function(){
                    $(".profile").hide("slow");
                });
            });
          });
        });
      });
    
   $("#search1").keyup(function(){
    var name = $(this).val();
    
    $.ajax({
        type: 'post',
         url: '../server/forms.php',
          data: {"key":name}, //search feature on the edit guard tab. searches and returns values in tabular format
           dataType:'json',
          success: function(data){
             
        var ht = '';
      $.each(JSON.parse(JSON.stringify(data)),function(index,key){
    ht += '<tr id="datam" mak="'+data[index].id+'" class="op">'+
  '<td><img src = "../server/uploads/'+data[index].profile+'" height = "70" width="80"></td><td>'+data[index].firstname+'</td><td>'+data[index].lastname+'</td><td>'+data[index].gender+'</td><td>'+data[index].village+'</td>'+  
'</tr>';                   
});
$("#result").show();
  $(".resp").html(ht);  
    if($("#search1").val() == ""){
     $("#result").hide(); 
        }
        },
        error: function(){
            alert("An error has occured");
        }
    });
   });

$(".resp").on('click','.op',function(){
    var my_id = $(this).attr("mak");
  $.ajax({
     url:'../server/forms.php',
       type:'post',
         data:{'edit':my_id},
         dataType: 'json',
        success:function(feed){
            $.each(JSON.parse(JSON.stringify(feed)),function(index,key){
              $("input[name=edit_number]").val(feed[index].Employee_id);  
              $("input[name=edit_first]").val(feed[index].firstname);  
              $("input[name=edit_last]").val(feed[index].lastname);  
              $("input[name=edit_Gender]").val(feed[index].gender);  
              $("input[name=edit_age]").val(feed[index].age);  
              $("input[name=edit_dob]").val(feed[index].DOB);  
              $("input[name=edit_NIN]").val(feed[index].NIN);  
              $("input[name=edit_status]").val(feed[index].status);  
              $("input[name=edit_email]").val(feed[index].email);   // populating fields in the edit tab. when a name is clicked on
              $("input[name=edit_contact]").val(feed[index].contact);  
              $("input[name=edit_hiscontact]").val(feed[index].hiscontact);  
              $("input[name=edit_bank]").val(feed[index].bankname);  
              $("input[name=edit_branch]").val(feed[index].branch);  
              $("input[name=edit_account]").val(feed[index].accountnumber);  
              $("input[name=edit_nssf]").val(feed[index].NSSFno);  
              $("input[name=edit_home]").val(feed[index].Employee_id);  
              $("input[name=edit_county]").val(feed[index].county);  
              $("input[name=edit_sub]").val(feed[index].subcounty);  
              $("input[name=edit_village]").val(feed[index].village);   
              $("input[name=edit_district]").val(feed[index].district);  
              $("input[name=edit_kids]").val(feed[index].kids);   
              $("input[name=edit_kin]").val(feed[index].next_of_kin);   
              $("input[name=edit_res]").val(feed[index].residence);  
              $("input[name=edit_hire]").val(feed[index].hiredate);  
              $("input[name=edit_start]").val(feed[index].startdate);   
              $("input[name=edit_month]").val(feed[index].monthlypay);    
              $("input[name=edit_emergency]").val(feed[index].emergencycontact);  
              $("input[name = id]").val(feed[index].id);   
              $("#locked").attr("src","../server/uploads/"+feed[index].profile);  
              //..............................................................
              $("input[name=edit_mum]").val(feed[index].mum);   
              $("input[name=edit_dad]").val(feed[index].dad);   
              $("input[name=edit_lvillage]").val(feed[index].lvillage);  
              $("input[name=edit_lccontact]").val(feed[index].lccontact);  
              $("input[name=edit_lhome]").val(feed[index].lhome);   
              $("input[name=edit_lcounty]").val(feed[index].lcounty);    
              $("input[name=edit_ldistrict]").val(feed[index].ldistrict); 
              $("input[name=edit_llccontact]").val(feed[index].llcontact);
              $("input[name=edit_4]").val(feed[index].llcname);
              $("input[name=edit_2]").val(feed[index].lcname);
              $("input[name=edit_3]").val(feed[index].lccontact);
                  
           });
     },
  error(){
         alert("something went wrong");
     }
 });
 }); 

 $("#form2").on('submit',function(x){
     x.preventDefault();
     var edit_data = $(this).serialize();
     $.ajax({
         type: 'post',
         url:'../server/forms.php',
         data:{'edited':edit_data},
         success: function(back){
            if(back == "success"){
            $("#err2").addClass("successful").html("<b>user successfullly updated</b>").hide(5000);
            $('#form2')[0].reset();
            }
         },
         error:function(){
             alert("something went wrong");
         }


     });

 });
 $("#search2").keyup(function(){
    var name2 = $(this).val();
    $.ajax({
        type: 'post',
        url: '../server/forms.php',
        data: {"key2":name2}, //search feature on the delete guard tab. searches and returns values in tabular format
        dataType:'json',
        success: function(datam){
           var counter = 0;
            var ht = '';
            $.each(JSON.parse(JSON.stringify(datam)),function(index,key){//creates a table structure for outputing the returned information
              counter ++;
                ht += '<tr id="datam" the_id="'+datam[index].id+'" >'+
                '<td><img src = "../server/uploads/'+datam[index].profile+'" height = "70" width="80"></td><td>'+datam[index].firstname+'</td><td>'+datam[index].lastname+'</td><td>'+datam[index].gender+'</td><td>'+datam[index].village+'</td><td><button class="btn btn-danger" id="is_delete">Fire!</button></td>'+  
                '</tr>';                   
           });
           $("#result2").show();
           $(".res").html(ht);  
           if($("#search1").val() == ""){
            $("#result").hide(); 
           $("#counter").html("<b>"+counter+"</b> <i>Guards in Total</i>");
        }
        },
        error: function(){
            alert("An error has occured");
        }
    });
   });
   $(".res").on("click","#is_delete",function(){
    hinks = $(this).parent().parent().attr("the_id");
    parent = $(this).parent().parent();
    $(".is_hidden").show("slow");
    
    
   });
   $("#editorx").click(function(cmx){
      cmx.preventDefault();
      var fired_date = $("#firedate").val();
      var reason = $("#reason").val();
      var transfer = "id="+hinks+"&fired="+fired_date+"&reason="+reason;
      if(confirm("Do you really want to fire This Guard")){
        $.ajax({
            url: "../server/forms.php",
            type: "post",
            data:{"deleted":transfer},  //works on firing of the security guards. 
            success: function(back){
                if (back == "success"){
                  $(".is_hidden").empty().addClass("alert alert-success").html("Guard successfully fired").fadeOut(3000);
                  parent.fadeOut('slow', function() {$(this).remove();});
                    $("input[name=fire_date]").val("");
                    $("input[type=textarea]").val("");
                }
                else{
                  alert("operation not successful");
                }
    
            },
            error: function(){
                alert("An error has occured suddenly!!!!");
            }
        });
    }


   });
   // $(".res").on("click","#is_delete",function(){
   //  var hinks = $(this).parent().parent().attr("the_id");
   //  var parent = $(this).parent().parent();
   //  if(confirm("Do you really want to fire This Guard")){
   //      $.ajax({
   //          url: "../server/forms.php",
   //          type: "post",
   //          data:{"deleted":hinks},  //works on firing of the security guards.   || **********duplicated*******
   //          success: function(back){
   //              alert(back);
   //              parent.fadeOut('slow', function() {$(this).remove();});
    
   //          },
   //          error: function(){
   //              alert("An error has occured suddenly!!!!");
   //          }
   //      });
   //  }
    
   // });
$("#details").click(function(f){ // loads the details tab which holds the prfile information about security guards
    f.preventDefault();
    $(".pas").hide(1000, function(){
      $(".loy").show().empty().load("../client/profile.php");
    });
    
});
$("#leave").click(function(fb){ // loads the details tab which holds the prfile information about security guards
    fb.preventDefault();
    $(".pas").hide(1000, function(){
      $(".loy").show().empty().load("../client/leave.php");
    });
    
});
});