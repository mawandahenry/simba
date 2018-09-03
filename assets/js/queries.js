$(function(){
     $("#sender").on('click',(function(e) {
        e.preventDefault();
         var x = $("#form1").serialize();
           $.ajax({
            url: "../server/forms.php",
           type: "POST",
         data:{"data1":x},
       success: function(data){
     if(data == "success"){
         $("#err").text("data successfully insserted");// pending operations. not yet fully done
     }
   },
error: function(e) {
  $("#err").html(e).fadeIn();
    }          
     });
       }));
      $("#add_gad").click(function(m){
        m.preventDefault();
        $(".div_1").show("slow", function(){
            $(".div_2").hide("slow");
        });
    });
    $("#edit_gad").click(function(y){
        y.preventDefault();
        $(".div_2").show("slow", function(){
            $(".div_1").hide("slow");
        });
    });
    
   $("#search1").keyup(function(){
    var name = $(this).val();
    $.ajax({
        type: 'post',
        url: '../server/forms.php',
        data: {"key":name},
        dataType:'json',
        success: function(data){
            var ht = '';
            $.each(JSON.parse(JSON.stringify(data)),function(index,key){
                ht += '<tr id="datam" mak="'+data[index].id+'" class="op">'+
                '<td>'+data[index].firstname+'</td><td>'+data[index].lastname+'</td><td>'+data[index].gender+'</td><td>'+data[index].village+'</td>'+  
                '</tr>';                   
           });
           $("#result").show();
           $(".resp").html(ht);  
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
              $("input[name=edit_email]").val(feed[index].email);  
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
            alert(back);
         },
         error:function(){
             alert("something went wrong");
         }


     });

 });
 

});