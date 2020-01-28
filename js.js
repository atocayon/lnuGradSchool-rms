$(document).ready(function() {

   $("#btn-login").click(function(){
     if ($("#uname").val() !== "") {
       if ($("#pword").val() !== "") {
         $.ajax({
           url: "select.php",
           type: "POST",
           dataType: "json",
           data:{
             uname: $("#uname").val(),
             pword: $("#pword").val()
           },
           cache: false,
           success: function(data){
                if (data.login === "success") {
                  console.log("success");
                  location.reload();
                }else{
                  alert("unregistered user");
                }
           },
           error: function(error){
             console.log(error);
           }

         });
       }else{
         $("#pword").css("border", "1px solid red");
       }
     }else{
       $("#uname").css("border", "1px solid red");
     }
   });

   $("#home_link").click(function(){
     $(".manage_students_content").hide();
     $(".application_forms_content").hide();
     $(".about_content").hide();
     $(".settings_content").hide();
     $(".home_content").show();
     $("#home_link").css("background","#37474F");
     $("#manage_link, #applicationForms_link, #about_link, #settings_link").css("background","#333");

   });

   $("#manage_link").click(function(){

     $(".home_content").hide();
     $(".application_forms_content").hide();
     $(".about_content").hide();
     $(".settings_content").hide();
     $(".manage_students_content").show();
     $("#manage_link").css("background","#37474F");
     $("#home_link, #applicationForms_link, #about_link, #settings_link").css("background","#333");
   });

   $("#applicationForms_link").click(function(){
     $(".home_content").hide();
     $(".manage_students_content").hide();
     $(".about_content").hide();
     $(".settings_content").hide();
     $(".application_forms_content").show();
     $("#applicationForms_link").css("background","#37474F");
     $("#manage_link, #home_link, #about_link, #settings_link").css("background","#333");

   });

   $("#about_link").click(function(){
     $(".home_content").hide();
     $(".manage_students_content").hide();
     $(".application_forms_content").hide();
     $(".settings_content").hide();
     $(".about_content").show();
     $("#about_link").css("background","#37474F");
     $("#applicationForms_link, #manage_link, #home_link, #settings_link").css("background","#333");
   });

   $("#settings_link").click(function(){
     $(".home_content").hide();
     $(".manage_students_content").hide();
     $(".application_forms_content").hide();
     $(".about_content").hide();
     $(".settings_content").show();
     $("#settings_link").css("background","#37474F");
     $("#about_link, #applicationForms_link, #manage_link, #home_link ").css("background","#333");
   });

   $(".btn-registration").click(function(){
     $(".registration-modal").show();
     $(".back-drop").show();
   });

   $(".btn-close-modal").click(function(){
     $(".registration-modal").hide();
     $(".back-drop").hide();
   });

   $(".btn-next-to-secondStep").click(function(){
     $(".step-1").hide();
     $(".step-2").show();
   });

   $(".btn-to-step-1").click(function(){
     $(".step-1").show();
     $(".step-2").hide();
   });

   $(".btn-next-to-thirdStep").click(function(){
     $(".step-3").show();
     $(".step-2").hide();
   });

   $(".btn-to-step-2").click(function(){
     $(".step-3").hide();
     $(".step-2").show();
   });

   $("#btn-sign-up").click(function(){
     $(".login").hide();
     $(".sign-up").show();
     $(".login-container").css("height", "50vh");
     $("#btn-login").hide();
     $("#btn-sign-up").hide();
     $(".btn-register").show();
     $(".btn-back").show();
   });

   $("#btn-back").click(function(){
      $(".login-container").css("height", "45vh");
      $(".login").show();
      $("#btn-login").show();
      $("#btn-sign-up").show();
      $(".sign-up").hide();
      $(".btn-register").hide();
      $(".btn-back").hide();
   });

});
