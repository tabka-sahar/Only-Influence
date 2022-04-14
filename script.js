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

var form = document.getElementById("my-form");
    
async function handleSubmit(event) {
  event.preventDefault();
  var status = document.getElementById("my-form-status");
  var data = new FormData(event.target);
  fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
        'Accept': 'application/json'
    }
  }).then(response => {
    if (response.ok) {
      status.innerHTML = "Thanks for your submission!";
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