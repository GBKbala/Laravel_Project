$(document).ready(function(){

    $('#student').submit(function(e){
        e.preventDefault();


    });
});


// let name = $('.name').val();

// --------------------validation Code  starts----------------------------------

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

function validation(){

}

$('#student').submit(function(e){

    e.preventDefault();
    let name = $('.name').val();
    let email = $('.email').val();
    let phone = $('.phone').val();
    let gender = $('.gender').val();
    let image = $('input[name="image"]').val();
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
        if(verifyMail(email)==false){
            $('.email_error').html('Check your Email Address');
            var email_format = false;
            // return false;
        }
    }

    if(phone.length == ''){
        $('.phone_error').html('* The Phone is field required');
        // return false;
    }else{
        $('.phone_error').html('');
    }

    if(gender==''){
        $('.gender_error').html('* Select Your Gender');
        // return false;
    }else{
        $('.gender_error').html('');
    }

    if ($('.languages').filter(':checked').length < 1){
        // $(".note").show();
        // alert('select');
        $('.language_error').html('* Select any Language');
        // return false;
    }else{
        $('.language_error').html('');
    }

    // if(verifyMail(email)==false){
    //     $('.email_error').html('Check your Email Address');
    //     var email_format = false;
    //     // return false;
    // }

    // if( document.getElementById("videoUploadFile").files.length == 0 ){
    //     console.log("no files selected");
    // }

    if(image == ""){
        $('.image_error').html('* Image field is required');
    }else if(image !== ''){
        var ext = $('.image').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            $('.image_error').html('* Invalid extension!');
            // return false;
            var file_ext = false;
        }
    }else{
        $('.image_error').html('');
    }





    if(name="" || email=="" || phone=="" || gender=="" || image=="" || file_ext==false || email_format==false){
        // alert('not submit')
        return false;
    }
    else{
        // alert('submit');
        return true;

    }

});

// -------------------------------Validation Ends---------------------------------



$('#student').submit(function(e){
    e.preventDefault();
    let url = $('#student').attr('data-action');
    let form_data = new FormData(this);
    let redirect = 'http://localhost/balakannan/laravel_crud/public/ajax';

    let languages = [];
    $('input:checkbox[name=languages]:checked').each(function(){
       languages.push($(this).val());
    })
    // form_data['languages'] = languages;
    // alert(form_data['languages']);
    console.log(form_data.name);

    $.ajax({
        url:url,
        method:'POST',
        data:form_data,
        dataType:"JSON",
        contentType:false,
        processData:false,
        cache:false,
        success:function(response){
            if(response.success=true){
                window.location.href=redirect;
            }

        }

    });

});

// $('.edit').click(function(e){
//     e.preventDefault();
//     let url = $('.edit').attr('data-action');
//     let id = $(this).data('id');
//     // alert(id);

//     $.ajax({
//         url:url,
//         method:'GET',
//         data:{id:id},
//         success:function(response){

//         }

//     });


// });




