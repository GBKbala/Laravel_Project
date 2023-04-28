

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

function validation(){
    let name = $('.name').val();
    let email = $('.email').val();
    let phone = $('.phone').val();
    let gender = $('.gender').val();
}

$('#student').submit(function(e){

    e.preventDefault();
    let name = $('.name').val();
    let email = $('.email').val();
    let phone = $('.phone').val();
    let gender = $('.gender').val();
    // let image = $('input[name="image"]').val();
    // let image = $('.image').val();
    // alert(image);

    // function verifyMail(email) {
    //     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //         if(!regex.test(email)) {
    //             return false;
    //         }else{
    //             return true;
    //         }
    // }

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
        // if(verifyMail(email)==false){
        //     $('.email_error').html('Check your Email Address');
        //     var email_format = false;
        //     // return false;
        // }
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

    // if(image == ""){
    //     $('.image_error').html('* Image field is required');
    // // }else if(image !== ''){
    // //     var ext = $('.image').val().split('.').pop().toLowerCase();
    // //     if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
    // //         $('.image_error').html('* Invalid extension!');
    // //         // return false;
    // //         var file_ext = false;
    // //     }
    // }else{
    //     $('.image_error').html('');
    // }





    if(name="" || email=="" || phone=="" || gender==""){
        // alert('not submit')
        // e.preventDefault();
        return false;
    }
    else{
        // alert('submit');
        console.log('jensh')
        return true;


    }




});

// -------------------------------Validation Ends---------------------------------



$('#student').submit(function(e){
    e.preventDefault();
    let url = $('#student').attr('data-action');
    let form_data = new FormData($('#student')[0]);

    let redirect = 'http://localhost/balakannan/laravel_crud/public/ajax';

    console.log(form_data['name']);
    // console.log(form_data.name);

    var languages = [];
    $('input:checkbox[name=languages]:checked').each(function(){
       languages.push($(this).val());
    })
    // alert(languages);
    // form_data['languages'] = languages;
    // alert(form_data);


    $.ajax({
        url:url,
        method:'POST',
        data:form_data,
        // dataType:"JSON",
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


$('#student_edit').submit(function(e){
    e.preventDefault();

    let url = $('#student_edit').attr('data-action');
    let update_data = new FormData($('#student_edit')[0]);

    let redirect = 'http://localhost/balakannan/laravel_crud/public/ajax';

    let name = $('.name').val();
    let email = $('.email').val();
    let phone = $('.phone').val();
    let gender = $('.gender').val();
    let id = $('#id').val();

    var languages = [];
        $('input:checkbox[name=languages]:checked').each(function(){
            languages.push($(this).val());
        })

    let image = $('#edit_image')[0].file;
    // let image =  $('input:file[name=image]').val();
    // alert(image);


    // console.log({
    //     name: name,
    //     email: email
    // })
    $.ajax({
        url:url,
        method:"put",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
            id: id,
            name: name,
            email: email,
            phone: phone,
            gender : gender,
            languages : languages,
            image : image
        },
        cache:false,
        success:function(response){
            if(response.success=true){
                window.location.href=redirect;
            }
        }

    });

});
