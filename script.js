$('#modal-content').on('shown.bs.modal', function () {
  $("#txtname").focus();
});

// show the modal onload
$('#modal-content').modal({
  show: true
});

// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
$('#openBtn').click(function () {
  $('#modal-content').modal({
      show: true
  });
});
$(document).ready(function(){
$('.popup-btn').click(function(){ 
  var popupBlock = $('#'+$(this).data('popup'));
  popupBlock.addClass('active')
    .find('.fade-out').click(function(){
      popupBlock.css('opacity','0').find('.popup-content').css('margin-top','350px');        
      setTimeout(function(){
        $('.popup').removeClass('active');
        popupBlock.css('opacity','').find('.popup-content').css('margin-top','');
      }, 600);
    });
});
});
// const nom = document.getElementById('nom');
// const prénom = document.getElementById('prénom')
// const form = document.getElementById('demoForm')
// const errorElement = document.getElementById('error')
// form.addEventListener('submit',(e)=>{
//     let messages = []
//     if(nom.value && prénom.value&& mail.value==='' || nom.value&&prénom.value&& mail.value== null ){
//         messages.push("fill all blanks")
//     }
//     if(messages.length>0){
//         e.preventDefault()
//         errorElement.innerText = messages.join(', ')
  
//     }})
  myBlurFunction = function(state) {
    var containerElement = document.getElementById('main_container');
    var overlayEle = document.getElementById('popup');

    if (state) {
        overlayEle.style.display = 'block';
        containerElement.setAttribute('class', 'blur');
    } else {
        overlayEle.style.display = 'none';
        containerElement.setAttribute('class', null);
    }
};
//   $(document).ready(function() {
//     var $sendEmailEl = $('#send-email');
  
//     var $bodyEl = $('#body');
//     function updateEmailLink() {
//         $sendEmailEl.attr('href', 'mailto:tabkasahar3@gmail.com' +
         
//             '&body=' + encodeURIComponent($bodyEl.val()));
//     }
//     $('#body').on('input', updateEmailLink);
//     updateEmailLink();
// });
// var frmvalidator  = new Validator("contactform");
// frmvalidator.addValidation("name","req","Please provide your name");
// frmvalidator.addValidation("email","req","Please provide your email");
// frmvalidator.addValidation("email","email",
//   "Please enter a valid email address");


var form = document.getElementById("demoForm");
  
async function handleSubmit(event) {
event.preventDefault();
var status = document.getElementById("status");
var data = new FormData(event.target);
fetch(event.target.action, {

  method: form.method,
  body: data,
  headers: {
      'Accept': 'application/json'
  }
}).then(response => {
  if (response.ok) {
    status.innerHTML = "Téléchargement reussi!";
    form.reset()
  } else {
    response.json().then(data => {
      if (Object.hasOwn(data, 'errors')) {
        status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
      } else {
        status.innerHTML = "Oops! There was a problem submitting your form"
      }
    })
  }
}).catch(error => {
  status.innerHTML = "Oops! There was a problem submitting your form"
});
}
form.addEventListener("submit", handleSubmit)


var form = document.getElementById("contactForm");
  
async function handleSubmit(event) {
event.preventDefault();
var status = document.getElementById("statuss");
var data = new FormData(event.target);
fetch(event.target.action, {
  method: form.method,
  body: data,
  headers: {
      'Accept': 'application/json'
  }
}).then(response => {
  if (response.ok) {
    status.innerHTML = "Merci pour votre réaction!";
    form.reset()
  } else {
    response.json().then(data => {
      if (Object.hasOwn(data, 'errors')) {
        status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
      } else {
        status.innerHTML = "Oops! There was a problem submitting your form"
      }
    })
  }
}).catch(error => {
  status.innerHTML = "Oops! There was a problem submitting your form"
});
}





form.addEventListener("submit", handleSubmit)

$(function(){
$("#buttonn").click(function(){
  $(".cover").fadeIn("300");
})
$(".cover,.close").click(function(){
  $(".cover").fadeOut("300");
})
$(".contents").click(function(e){
  e.stopPropagation();
})
})




function closeForm() {
$('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {

/* Contact Form Interactions */
$('#btnOpenForm').on('click', function(event) {
  event.preventDefault();

  $('.form-popup-bg').addClass('is-visible');
});
$('#btnOpenFormm').on('click', function(event) {
  event.preventDefault();

  $('.form-popup-bg').addClass('is-visible');
});
$('#btnOpenFormmm').on('click', function(event) {
  event.preventDefault();

  $('.form-popup-bg').addClass('is-visible');
});




  //close popup when clicking x or off popup
$('.form-popup-bg').on('click', function(event) {
  if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
    event.preventDefault();
    $(this).removeClass('is-visible');
  }
});



});



var popu = $('.popu');
$(window).scroll(function(){
  
/*    
 	var show = $(document).scrollTop() / (600);
    popup.css('opacity', show);  
  */
  
  if($(window).scrollTop() > $(document).height()/4){
    popu.addClass('popu_show'); 
  };
  
  $( '.close' ).click(function() {
  		popu.css('display', 'none');
	});
  
  
});







