/*lightbox*/
function openModal() {
  document.getElementById('galerie-modal').style.display = "block";
}

function closeModal() {
  document.getElementById('galerie-modal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("galerie-slides");
  var dots = document.getElementsByClassName("galerie-indicator");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" galerie-active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " galerie-active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
/*bounce effect on images*/
$("section#funbar figure img").hover(function(){
  $(this).effect("bounce",{times:3},200);
});
/*toggle goodies*/
$("#goodies").click(function () {
  $(".galerie-synopsis").slideToggle("slow");
});
/*modal Hero*/
function openCarsModal() {
  document.getElementById('cars-modal').style.display = "block";
}

function closeCarsModal() {
  document.getElementById('cars-modal').style.display = "none";
}
// Contact //
var firstName;
var lastName;
var email;
var subject;
var message;
$('.form-control').focusout(function (event) {
  console.log(event.target.id);
  console.log('Logged focus out');
  switch (event.target.id) {
    case "firstName":
      var firstName_id = event.target.id;
      if ($("#"+firstName_id).val() == "") {
        $("#"+firstName_id).css("border","1px solid red");
        $("#"+firstName_id).css("background-color", "rgba(214,0,0,0.75)");
        $(".first_name").remove();
        $("#"+firstName_id).parent().append("<p class='first_name' style='color:red;'>Ce champs doit etre renseigne</p>");
      } else {
        firstName = $("#"+firstName_id).val();
        $(".first_name").remove();
        $("#"+firstName_id).css("border","1px solid green");
        $("#"+firstName_id).css("background-color", "rgba(0,214,0,0.75)");
      }
      console.log(firstName);
      break;
    case "lastName":
      var lastName_id = event.target.id;
      if ($("#"+lastName_id).val() == "") {
        $("#"+lastName_id).css("border","1px solid red");
        $("#"+lastName_id).css("background-color", "rgba(214,0,0,0.75)");
        $(".last_name").remove();
        $("#"+lastName_id).parent().append("<p class='last_name' style='color:red;'>Ce champs doit etre renseigne</p>");
      } else {
        lastName = $("#"+lastName_id).val();
        $(".last_name").remove();
        $("#"+lastName_id).css("border","1px solid green");
        $("#"+lastName_id).css("background-color", "rgba(0,214,0,0.75)");
      }
      console.log(lastName);
      break;
    case "email":
      var email_id = event.target.id;
      if ($("#"+email_id).val() == "") {
        $("#"+email_id).css("border","1px solid red");
        $("#"+email_id).css("background-color", "rgba(214,0,0,0.75)");
        $(".that_email").remove();
        $("#"+email_id).parent().append("<p class='that_email' style='color:red;'>Ce champs doit etre renseigne</p>");
      } else {
        email = $("#"+email_id).val();
        $(".that_email").remove();
        $("#"+email_id).css("border","1px solid green");
        $("#"+email_id).css("background-color", "rgba(0,214,0,0.75)");
      }
      console.log(email);
      break;
    case "subject":
      var subject_id = event.target.id;
      if ($("#"+subject_id).val() == "") {
        $("#"+subject_id).css("border","1px solid red");
        $("#"+subject_id).css("background-color", "rgba(214,0,0,0.75)");
        $(".that_subject").remove();
        $("#"+subject_id).parent().append("<p class='that_subject' style='color:red;'>Ce champs doit etre renseigne</p>");
      } else {
        subject = $("#"+subject_id).val();
        $(".that_subject").remove();
        $("#"+subject_id).css("border","1px solid green");
        $("#"+subject_id).css("background-color", "rgba(0,214,0,0.75)");
      }
      console.log(subject);
      break;
    case "message":
      var message_id = event.target.id;
      if ($("#"+message_id).val() == "") {
        $("#"+message_id).css("border","1px solid red");
        $("#"+message_id).css("background-color", "rgba(214,0,0,0.75)");
        $(".that_message").remove();
        $("#"+message_id).parent().append("<p class='that_message' style='color:red;'>Ce champs doit etre renseigne</p>");
      } else {
        message = $("#"+message_id).val();
        $(".that_message").remove();
        $("#"+message_id).css("border","1px solid green");
        $("#"+message_id).css("background-color", "rgba(0,214,0,0.75)");
      }
      console.log(message);
      break;
    default:
      console.log('Error');
      break;
  }
});
//panier
var price;
var total =0;
$("#btn-item-1").click(function () {
  price =$("section#goodies ul li#item-1").text();
  total+=parseFloat(price);
  $("#cart").text("Total "+total+" euros");

});
$('#story').click(function () {
  $('#story_img').show().hide();
  $('#story_text').hide().show();
});
$('#mages').click(function () {
  $('#story_text').show().hide();
  $('#story_img').hide().show();
});
