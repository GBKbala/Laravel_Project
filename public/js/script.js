$(document).ready(function(){

    $('#student').submit(function(e){
        e.preventDefault();


    });
});


// let name = $('.name').val();

$('.name').keyup(function(){
    let name = $('.name').val();

    if(name.length == ''){
        $('.name_error').html('* The Name is field required');
    }else{
        $('.name_error').html('');
    }
});

$('.email').keyup(function(){
    let email = $('.email').val();
    if(email.length == ''){
        $('.email_error').html('* The Email is field required');
    }else{
        $('.email_error').html('');
    }
});

$('.phone').keyup(function(){

    let phone = $('.phone').val();
    if(phone.length == ''){
        $('.phone_error').html('* The Phone is field required');
    }else{
        $('.phone_error').html('');
    }
});


// $('.image').change(function(){
//     let file = $('.image').val();
//     alert(file);
// })

$('#student').submit(function(e){

    e.preventDefault();
    let name = $('.name').val();
    let email = $('.email').val();
    let phone = $('.phone').val();
    let gender = $('.gender').val();
    // let image = $('.image')[0].files();
    // let image = $('.image').val();
    // alert(image);

    function verifyMail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!regex.test(email)) {
                return false;
            }else{
                return true;
            }
    }

    if(name==''){
        $('.name_error').html('* The Name field is required');
        // return false;
    }else{
        $('.name_error').html('');
    }

    if(email.length == ''){
        $('.email_error').html('* The Email is field required');
        // return false;
    }else{
        $('.email_error').html('');
    }

    if(phone.length == ''){
        $('.phone_error').html('* The Phone is field required');
        // return false;
    }else{
        $('.phone_error').html('');
    }

    if(gender==''){
        $('.gender_error').html('Select Your Gender');
        // return false;
    }else{
        $('.gender_error').html('');
    }

    if ($('.languages').filter(':checked').length < 1){
        // $(".note").show();
        // alert('select');
        $('.language_error').html('Select any Language');
        // return false;
    }

    if(verifyMail(email)==false){
        $('.email_error').html('Check your Email Address');
        // return false;
    }

    if( document.getElementById("videoUploadFile").files.length == 0 ){
        console.log("no files selected");
    }

    if($('.image').files[0].length==0){
        $('.image_error').html('Image field is required');
    }

    if(name="" || email=="" || phone=="" || gender==""){
        return false;
    }

});

