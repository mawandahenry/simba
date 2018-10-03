<script>
$(function(){
  return_counter();
  return_counter2();
  return_counter3();
  return_counter4();
  return_counter5();//searching for all guards on leave
  return_counter6();// searching for all guards available
  return_counter7();// searching for all men
  return_counter8(); //searching for all women
  return_allgads(); // returns all guards in the system
  fireed();
  return_onleave();
  available();
  var parnt = '';
  var parnt2 = '';
  var accum = 0;
    $("#sea").keyup(function(){
    var detal = $(this).val();
    $.ajax({
        type: "post",
        url: "../server/forms.php",
        data: {"dey":detal}, //search feature on the details guard tab. searches and returns values in tabular format
        dataType:'json',
        success: function(details){
           
            var ht = '';
            $.each(JSON.parse(JSON.stringify(details)),function(index,key){//creates a table structure for outputing the returned information
                ht += '<tr id="xtreme" our_id="'+details[index].id+'" >'+
                '<td><img src = "../server/uploads/'+details[index].profile+'" height = "70" width="80"></td><td>'+details[index].firstname+'</td><td>'+details[index].lastname+'</td><td>'+details[index].gender+'</td><td>'+details[index].village+'</td>'+  
                '</tr>';                   
           });
           $("#resul").show();
           $(".response").html(ht);  
           if($("#search_val").val() == ""){
            $("#resul").hide("slow"); 
        }
        },
        error: function(){
            alert("An error has occured on this page");
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
   $("#saki_gad").click(function(mx){
     mx.preventDefault();
     $(".has_details").fadeIn("slow", function(){
        $(".open_up").fadeOut("slow");
     });
   });
   $("#clos").click(function(di){
     di.preventDefault();
     $(".has_details").hide(1000, function(){
        $(".open_up").show();
     });
   });
   $("#diliti_gad").click(function(cnn){
      cnn.preventDefault();
      $(".summary").slideDown(1000, function(){
         $(".has_details").slideUp("1000", function(){
          $(".open_up").hide(1000);
         });
      });

   });
   $("#bak").click(function(ed){
     ed.preventDefault();
     $(".summary").hide(1000, function(){
       $(".open_up").show();
     });
   });

   function return_counter(){
    var xampp = 0;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello":xampp},
       dataType: 'json',
       success: function(das){
         $.each(JSON.parse(JSON.stringify(das)),function(index,key){
           $(".tot").html("<h4>"+das[index].tot+"</h4>");
         });
         

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter2(){
    var xamp = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello2":xamp},
       dataType: 'json',
       success: function(das2){
          $.each(JSON.parse(JSON.stringify(das2)),function(index,key){
            $(".males").html("<h4>"+das2[index].males+"</h4>");
          });

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter3(){
    var xam = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello3":xam},
       dataType: 'json',
       success: function(das3){
          $.each(JSON.parse(JSON.stringify(das3)),function(index,key){
            $(".females").html("<h4>"+das3[index].females+"</h4>");
          });

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter4(){
    var xa = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello4":xa},
       dataType: 'json',
       success: function(das4){
          $.each(JSON.parse(JSON.stringify(das4)),function(index,key){
            $(".fired").html("<h4>"+das4[index].fired+"</h4>");
          });

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter5(){
    var xy = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello5":xy},
       dataType: 'json',
       success: function(das5){
          $.each(JSON.parse(JSON.stringify(das5)),function(index,key){
            $(".leav").html("<h4>"+das5[index].leav+"</h4>");
          });

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter6(){
    var xw = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello6":xw},
       dataType: 'json',
       success: function(das6){
          $.each(JSON.parse(JSON.stringify(das6)),function(index,key){
            $(".avai").html("<h4>"+das6[index].avai+"</h4>");
          });

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter7(){
    var ww = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello7":ww},
       dataType: 'json',
       success: function(das7){
        var vat = '';
          $.each(JSON.parse(JSON.stringify(das7)),function(index,key){
           vat += '<tr><td>'+das7[index].Employee_id+'</td><td>'+das7[index].firstname+'</td><td>'+das7[index].lastname+'</td><td>'+das7[index].age+'</td><td>'+das7[index].email+'</td><td>'+das7[index].contact+'</td><td>'+das7[index].hiredate+'</td><td>'+das7[index].startdate+'</td><td>'+das7[index].monthlypay+'</td></tr>';
          });

          $(".for_men").html(vat);

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_counter8(){
    var ww2 = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello8":ww2},
       dataType: 'json',
       success: function(das8){
        var vat2 = '';
          $.each(JSON.parse(JSON.stringify(das8)),function(index,key){
           vat2 += '<tr><td>'+das8[index].Employee_id+'</td><td>'+das8[index].firstname+'</td><td>'+das8[index].lastname+'</td><td>'+das8[index].age+'</td><td>'+das8[index].email+'</td><td>'+das8[index].contact+'</td><td>'+das8[index].hiredate+'</td><td>'+das8[index].startdate+'</td><td>'+das8[index].monthlypay+'</td></tr>';
          });

          $(".for_women").html(vat2);

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_onleave(){
    var wzr = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yellox":wzr},
       dataType: 'json',
       success: function(dad){
        var vatx = '';
          $.each(JSON.parse(JSON.stringify(dad)),function(index,key){
           vatx += '<tr><td>'+dad[index].Employee_id+'</td><td>'+dad[index].firstname+'</td><td>'+dad[index].lastname+'</td><td>'+dad[index].age+'</td><td>'+dad[index].leavetype+'</td><td>'+dad[index].startdate+'</td><td>'+dad[index].returndate+'</td><td>'+dad[index].paid+'</td><td>'+dad[index].amount+'</td><td>'+dad[index].reason+'</td></tr>';
          });

          $(".onleav").html(vatx);

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function return_allgads(){
    var ww3 = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yello9":ww3},
       dataType: 'json',
       success: function(das9){
        var vat3 = '';
          $.each(JSON.parse(JSON.stringify(das9)),function(index,key){
           vat3 += '<tr><td><img class = "img-thumbnail" src="../server/uploads/'+das9[index].profile+'" height=50 width=50></td><td>'+das9[index].Employee_id+'</td><td>'+das9[index].firstname+'</td><td>'+das9[index].lastname+'</td><td>'+das9[index].age+'</td><td>'+das9[index].email+'</td><td>'+das9[index].contact+'</td><td>'+das9[index].hiredate+'</td><td>'+das9[index].startdate+'</td><td>'+das9[index].monthlypay+'</td></tr>';
          });

          $(".all").html(vat3);

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function available(){
    var ww4= 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"yel":ww4},
       dataType: 'json',
       success: function(dyd){
        var vatv = '';
          $.each(JSON.parse(JSON.stringify(dyd)),function(index,key){
           vatv += '<tr><td>'+dyd[index].Employee_id+'</td><td>'+dyd[index].firstname+'</td><td>'+dyd[index].lastname+'</td><td>'+dyd[index].age+'</td><td>'+dyd[index].email+'</td><td>'+dyd[index].contact+'</td><td>'+dyd[index].hiredate+'</td><td>'+dyd[index].startdate+'</td><td>'+dyd[index].monthlypay+'</td></tr>';
          });

          $(".vail").html(vatv);

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   function fireed(){
    var wwx = 2;
     $.ajax({
       type: 'post',
       url: '../server/forms.php',
       data: {"burn":wwx},
       dataType: 'json',
       success: function(x){

        var vat4 = '';
          $.each(JSON.parse(JSON.stringify(x)),function(index,key){
            accum +=1;
           vat4 += '<tr secret = "'+x[index].id+'"><td>'+x[index].Employee_id+'</td><td>'+x[index].firstname+'</td><td>'+x[index].lastname+'</td><td>'+x[index].contact+'</td><td>'+x[index].hiredate+'</td><td>'+x[index].startdate+'</td><td>'+x[index].releasedate+'</td><td>'+x[index].reason+'</td><td><button class= "btn btn-primary re_hire">rehire</button></td><td><button class="btn btn-danger del">terminate</button></td><td><div class= "hid" id ="'+x[index].id+'"><img src="../assets/images/loader2.gif"</div></td></tr>';
          });

          $(".fix").html(vat4);

       },
       error: function(){
        alert("proceedure could not be completed");
       }
     });
   }
   $("#total_male").click(function(){
     $(".info_div").show(1000, function(){
        $(".div_x").hide(1000, function(){
          $(".women").hide();
           $(".fdio").hide();
          $(".all_c").hide();
          $(".reavy").hide();
          $(".pis").hide();
           $(".men").slideDown();

        });
     });
   });
   $("#total_female").click(function(){
     $(".info_div").show(1000, function(){
        $(".div_x").hide(1000, function(){
          $(".reavy").hide();
          $(".men").hide();
            $(".fdio").hide();
            $(".all_c").hide();
            $(".pis").hide();
          $(".women").slideDown();
        });
     });
   });
   $("#kiz").click(function(){
     $(".info_div").show(600, function(){
        $(".div_x").hide(600, function(){
          $(".women").hide(600, function(){
            $(".reavy").hide();
            $(".fdio").hide();
            $(".men").hide();
            $(".pis").hide();
            $(".all_c").show();
          });
        });
     });
   });
   $("#reav").click(function(){
     $(".info_div").show(600, function(){
        $(".div_x").hide(600, function(){
          $(".women").hide(600, function(){
            $(".all_c").hide();
            $(".men").hide();
            $(".fdio").hide();
            $(".pis").hide();
            $(".reavy").show();
          });
        });
     });
   });
   $("#bbak").click(function(){
     $(".div_x").show(600, function(){
        $(".info_div").hide(600, function(){
          $(".open_up").hide(600, function(){
            $(".men").hide();
             $(".summary").show();
          });
        });
     });
   });
   $(".frd").click(function(){
     $(".div_x").hide(500, function(){
        $(".info_div").show(500, function(){
          $(".open_up").hide(500, function(){ // activates the fired guards tab
            $(".men").hide();
            $(".all_c").hide();
            $(".women").hide();
            $(".reavy").hide();
            $(".pis").hide();
             $(".fdio").show();
          });
        });
     });
   });
   $(".kis").click(function(){
     $(".div_x").hide(500, function(){
        $(".info_div").show(500, function(){
          $(".open_up").hide(500, function(){ // activates the availabale guards tab
            $(".men").hide();
            $(".all_c").hide();
            $(".women").hide();
             $(".reavy").hide();
             $(".all_c").hide();
             $(".pis").show();
          });
        });
     });
   });
   $("#bbak2").click(function(){
     $(".div_x").show(1000, function(){
        $(".info_div").hide(1000, function(){
          $(".open_up").hide(1000, function(){
             $(".summary").show();
          });
        });
     });
   });
   $("#bbak3").click(function(){
     $(".div_x").show(1000, function(){
        $(".info_div").hide(1000, function(){
          $(".open_up").hide(1000, function(){
             $(".summary").show();
          });
        });
     });
   });
   $("#bbak4").click(function(f){ // loads the details tab which holds the prfile information about security guards
    f.preventDefault();
    $(".pas").hide(1000, function(){
      $(".loy").show();
      $("#loading2").show();
      $(".loy").load("../client/profile.php", function(){
        $("#loading2").hide();
      });
    });

    
    
});
  $("#bbak5").click(function(){
     $(".div_x").show(1000, function(){
        $(".info_div").hide(1000, function(){
          $(".open_up").hide(1000, function(){
             $(".summary").show();
          });
        });
     });
   }); 
  $("#bbak7").click(function(){
     $(".div_x").show(1000, function(){
        $(".info_div").hide(1000, function(){
          $(".open_up").hide(1000, function(){
             $(".summary").show();
          });
        });
     });
   }); 
$(".fix").on("click", ".re_hire", function(){
    var ent = $(this).parent().parent().attr("secret");
    parnt = $(this).parent().parent();
     $('#'+ent).show();
    $.ajax({
        url: '../server/forms.php',
        type: 'post',
        data: {'reh':ent},

        success: function(good){
          alert(good);
          parnt.fadeOut('slow', function() {$(this).remove();});
           $('#'+ent).hide();
        },
        error: function(){
          alert("Operation not successful");
           $('#'+ent).hide();
        }

    });
  });
$(".fix").on("click", ".del", function(){
    var entrix = $(this).parent().parent().attr("secret");
    parnt2 = $(this).parent().parent();
    $('#'+entrix).show();
       
    $.ajax({
        url: '../server/forms.php',
        type: 'post',
        data: {'terminate':entrix},

        success: function(feed){
          if(feed == "success"){
            alert("Guard successfully deleted");
            parnt2.fadeOut('slow', function() {$(this).remove();}); 
           $("#"+entrix).hide();
          }else{
              alert("")
          }
         
        },
        error: function(){
          alert("Operation not successful");
          $("#"+entrix).hide();
        }

    });
  });

});

</script>

<div class="info_div">

  <div class="men container">
    <h3 style="text-align: center;">GENDER[male]</h3>
    <table class="table"><tr>
      <th>Employee ID</th><th>firstname</th><th>lastname</th><th>Age</th><th>email</th><th>contact</th><th>Hire date</th><th>start date</th><th>monthly pay</th></tr>

      <tbody class="for_men">
        
      </tbody>
      
    </table>
    <a href="#" class="btn btn-success col-md-6" id="bbak">Back</a>
  </div>
   <div class="pis container">
    <h3 style="text-align: center;">Guards[Available]</h3>
    <table class="table"><tr>
      <th>Employee ID</th><th>firstname</th><th>lastname</th><th>Age</th><th>email</th><th>contact</th><th>Hire date</th><th>start date</th><th>monthly pay</th></tr>

      <tbody class="vail">
        
      </tbody>
      
    </table>
    <a href="#" class="btn btn-success col-md-6" id="bbak7">Back</a>
  </div>
  <div class="women container">
    <h3 style="text-align: center;">GENDER[female]</h3>

    <table class="table"><tr>
      <th>Employee ID</th><th>firstname</th><th>lastname</th><th>Age</th><th>email</th><th>contact</th><th>Hire date</th><th>start date</th><th>monthly pay</th></tr>

      <tbody class="for_women">
        
      </tbody>
      
    </table>
    <a href="#" class="btn btn-success col-md-6" id="bbak2">Back</a>
  </div>
 <div class="all_c container">
<h3 style="text-align: center;">TOTAL[male & female]</h3>
    <table class="table"><tr>
      <th>Profile</th><th>Employee ID</th><th>firstname</th><th>lastname</th><th>Age</th><th>email</th><th>contact</th><th>Hire date</th><th>start date</th><th>monthly pay</th></tr>

      <tbody class="all">
        
      </tbody>
      
    </table>
    <a href="#" class="btn btn-success col-md-6" id="bbak3">Back</a>
  </div>
  <div class="reavy container">
   <h3 style="text-align: center;">Guards[on leave]</h3>
    <table class="table"><tr>
      <th>Employee ID</th><th>firstname</th><th>lastname</th><th>Age</th><th>leave type</th><th>leave date</th><th>return date</th><th>paid</th><th>amount</th><th>Reason</th></tr>

      <tbody class="onleav">
        
      </tbody>
      
    </table>
    <a href="#" class="btn btn-success col-md-6" id="bbak5">Back</a>
  </div>
  <div class="fdio container">
    <h3 style="text-align: center;">Guards[fired]</h3>

    <table class="table"><tr>
      <th>Employee ID</th><th>firstname</th><th>lastname</th><th>Age</th><th>Leave date</th><th>Leave type</th><th>Return date</th><th>Reason</th><th>Option1</th><th>Option2</th></tr>

      <tbody class="fix">
        
      </tbody>
      
    </table>
    <a href="#" class="btn btn-success col-md-6" id="bbak4">Back</a>
  </div>
  </div>
  <div class="div_x">
<div class="open_up">
<h3 style="text-align: center;"> <u> DETAILS MANAGEMENT</u></h3>
      </header>
      <nav id="menu2" style="text-align: center;">
        <ul class="links">
          <li><a href="#" id = "saki_gad">Search details</a></li>
          <li><a href="#" id = "diliti_gad">Summary</a></li>
        </ul>
      </nav>

  
</div>
<div class="summary">
  <h2 style="text-align: center;">SUMMARY</h2>
  <table class="table">
    <tr class="avin"  id="kiz">
      <td>
        <div>
          Total Guards
        </div>
      </td>
      <td>
        <div class="tot">
          xx
        </div>
      </td>
    </tr>
    <tr class="avin" id="total_male">
      <td>
        <div>
          Male
        </div>
      </td>
      <td>
        <div class="males">
          xx
        </div>
      </td>
    </tr>
    <tr class="avin" id="total_female">
      <td>
        <div>
          Female
        </div>
      </td>
      <td>
        <div class="females">
          xx
        </div>
      </td>
    </tr>
     <tr class="avin frd">
      <td>
        <div>
          Fired
        </div>
      </td>
      <td>
        <div class="fired">
          xx
        </div>
      </td>
    </tr>
     <tr class="avin" id="reav">
      <td>
        <div>
          On Leave
        </div>
      </td>
      <td>
        <div class="leav">
          xx
        </div>
      </td>
    </tr>
    <tr class="avin kis"><td>
    Available
  </td><td><div class="avai">xx</div></td></tr>
  </table>
  <a href="#" class="btn btn-success btn-lg" id="bak">Back to main menue</a>
</div>
<div class="has_details">
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
<div id = "resul" class="container">
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
<div id = "details_table" class = "container">
<table class = "table">    
    <tbody class = "dest">
    
</tbody>       
    </table>   
</div></br>
<div class="itable">
<table class="table">
  <tr>
    <td>
      <a href="#"  id = "mort" class = "btn btn-success" >more</a>
    </td>
    <td>
     <a href="#"  id = "clos" class = "btn btn-success">close</a> 
    </td>
  </tr>
</table>
</div>
<div id = "more" class="container">
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
</div>
</div>