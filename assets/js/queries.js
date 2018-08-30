$(function(){
     $("#sender").on('click',(function(e) {
        e.preventDefault();
        var x = $("#form1").serialize();
         
        $.ajax({
         url: "../server/forms.php",
         type: "POST",
         data:  {"data1":x},
         
         success: function(data){
         alert(data)
          
            },
           error: function(e) 
            {
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

});