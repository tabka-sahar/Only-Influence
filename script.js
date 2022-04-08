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
const nom = document.getElementById('nom');
const prénom = document.getElementById('prénom')
const form = document.getElementById('demoForm')
const errorElement = document.getElementById('error')
form.addEventListener('submit',(e)=>{
    let messages = []
    if(nom.value && prénom.value&& mail.value==='' || nom.value&&prénom.value&& mail.value== null ){
        messages.push("fill all blanks")
    }
    if(messages.length>0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    
    }})