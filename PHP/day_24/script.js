



$(document).ready(function () {


    function checkFirstName() {
        var firstNameValue = $('#firstName').val();

        if(firstNameValue.length < 8 || firstNameValue.length > 15) {
            $('#fnError').text('First name should be between 8 to 15 character');
            return false;
        } else {
            $('#fnError').text( ' ');
        }
    }

    $('#firstName').keyup(function () {
        checkFirstName();
    });


    function checkLastName(){
        var lastNameValue = $('#lastName').val();

        if (lastNameValue.length <7 || lastNameValue.length >10){
            $('#lnError').text('Last name should be between 7 to 10 character');
            return false;
        }else {
            $('lnError').text(' ');
        }
    }

    $('#lastName').keyup(function () {
        checkLastName();
    });

    function checkEmailAddress() {
        var emailAddressValue = $('#emailAddress').val();

        if (emailAddressValue.length <=0){
            $('#eaError').text('Email address should not be empty');
            return false;
        }else {
            $('eaError').text(' ');
        }
    }



    $('#emailAddress').blur(function () {
        checkEmailAddress();
    });

    function checkPassword() {
        var passwordValue= $('#password').val();
        if(passwordValue.length <6 || passwordValue.length >15) {
            $('#paError').text( 'Password and confirm password are not same ');
            return false;
        } else {
            $('#paError').text( ' ');
        }
    }




    $('#password').keyup(function () {
        checkPassword();
    });


    function checkConfirmPassword() {
        var passwordValue= $('#confirmPassword').val();
        var confirmPasswordValue= $('#password').val();
        if(passwordValue == confirmPasswordValue) {
            $('#cpError').text( ' ');
        } else {
            $('#cpError').text( 'Password and confirm password are not same ');
            return false;
        }
    }


    $('#confirmPassword').keyup(function () {
        checkConfirmPassword();
    });



    function checkGenderStatus() {
        var radioBtn = $("input[type ='radio']:checked");

        if(radioBtn.val()){
            $('#gError').text( '');
        }else{
            $('#gError').text( 'You must select your gender');
            return false;
        }
    }

    function checkSkillStatus() {
        var checkBoxBtn = $("input[type ='radio']:checked");

        if(checkBoxBtn.val()){
            $('#cbError').text( '');
        }else{
            $('#cbError').text( 'You must select checkbox');
            return false;
        }
    }







    checkGenderStatus();
    checkSkillStatus();











    $('#registrationForm').submit(function () {
        checkFirstName();
        checkLastName();
        checkEmailAddress();
        checkPassword();
        checkConfirmPassword();
        checkGenderStatus();
        checkSkillStatus();
        checkSkillStatus();
        
        
        
        
        
        
        

  if(checkFirstName()==false||checkLastName()==false||checkEmailAddress()==false||checkPassword()==false||checkConfirmPassword()==false||checkGenderStatus()==false||checkSkillStatus()==false ){
    
      return false;
      
    
}else {
      return true;
  }




    });
});