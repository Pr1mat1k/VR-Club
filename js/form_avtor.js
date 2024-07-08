// function registBt(){
//     const email_entrance =  document.getElementById("email_entrance");
//     email_entrance = '';
// }

$(document).ready(function(){
    var valid_email = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var email = $('#email');
    var email_texst =  $('#email_texst');
    
    var password = $('#password');
    var password_texst =  $('#password_texst');
    
    var password_check = $('#password_check');
    var password_check_texst =  $('#password_check_texst');

    
    email.blur(function(){
        if(email.val() != ''){
            if(email.val().search(valid_email) == 0){
                email_texst.text("Email введен корректно");
                email.removeClass("false").addClass("true");
                email_texst.removeClass("false_texst").addClass("true_texst");
            }else{
                email_texst.text("Введите корректный email!");
                email.removeClass("true").addClass("false");
                email_texst.removeClass("true_texst").addClass("false_texst");
            }
    
        }else{
            email_texst.text("Поле email не должно быть пустым!");
            email.removeClass("true").addClass("false");
            email_texst.removeClass("true_texst").addClass("false_texst");
        }
    })
    
    password.blur(function(){
        let passwordValue = $("#password").val(); 
    
        if(passwordValue.length < 3 || passwordValue.length > 20){
            password_texst.text("Длина вашего пароля должна составлять от 3 до 20!");
            password.removeClass("true").addClass("false");
            password_texst.removeClass("true_texst").addClass("false_texst");
            $('#password_check').prop('disabled', true);
        }else{
            password_texst.text("Пароль введен корректно");
            password.removeClass("false").addClass("true");
            password_texst.removeClass("false_texst").addClass("true_texst");
            $('#password_check').prop('disabled', false);
        }
    
    })
    
    password_check.blur(function(){
        let passwordValue = $("#password").val(); 
        let passwordValue_check = $("#password_check").val();
    
        if(passwordValue.length == passwordValue_check.length){
            password_check_texst.text("Пароли совпадают");
            password_check.removeClass("false").addClass("true");
            password_check_texst.removeClass("false_texst").addClass("true_texst");
            $('#registrationeBt').prop('disabled', false);
        }
        else{
            password_check_texst.text("Пароли не совпадают!");
            password_check.removeClass("true").addClass("false");
            password_check_texst.removeClass("true_texst").addClass("false_texst");
        }
    
    })
    
});










