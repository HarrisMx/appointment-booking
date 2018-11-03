//Functions to handle form validations and live changes

$(document).ready(function(){

    $('.id').on('input', function(e){
        if($('.id').val().length == 13){
            validate_Id();
        }
        else{
            $('.dob').val('');
            $('.gender').val('');
            $('.age').val('');
        }
    });

    function validate_Id(){
        var line = $('.id').val();
        if(line.length != 13){
            alert("Invalid ID Number, Please Enter a 13 digit number");
        }else{
            var DOB = line.substring(0 , 6);
            var GEN = line.substring(6 , 10);
            var gender = "";
            var date_of_birth = "";
            var age = "";
            var mydate = new Date();
            //Get Date of Birth
            date_of_birth = DOB.substring(0, 2) + " - " + DOB.substring(2, 4) + " - " + DOB.substring(4, 6);
            if(parseInt(DOB[0]) == 0){
                date_of_birth = "20" + date_of_birth;
            }else{
                date_of_birth = "19" + date_of_birth;
            }
            $('.dob').val(date_of_birth);
            
            //Get Gender Value
            if(parseInt(GEN) >= 5000){
                gender = "Male";
            }else{
                gender = "Female";
            }

            $('.gender').val(gender);

            mydate.getFullYear()

            var _age = mydate.getFullYear() - parseInt(date_of_birth.substring(0 , 4));

            $('.age').val(_age);

            var test = $('.age').val().length * $('.gender').val().length * $('.dob').val().length;

            if(test > 0){
                $('.btnSub').removeAttr('disabled');
            }
        }
    }

    $('pdate').datepicker({
        uiLibrary: 'boostrap4'
    });
});