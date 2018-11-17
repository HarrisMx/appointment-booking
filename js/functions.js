//Functions to handle form validations and live changes

$(document).ready(function(){
    
    $('.id').on('input', function(e){
        if($('.id').val().length == 13){
            validate_Id();
        }
        else{
            $('.age').html("");
            $('.gender').html("");
            $('.dob').html("")
        }
    });

    navigate = function(){
        $('.signup').on('click', function(){
            window.location.href = "./new_reg.php";
        });
    }

    function validate_Id(){
        var line = $('.id').val();
        if(line.length != 13){
            alert("Invalid ID Number, Please Enter a 13 digit number");
            $('.age').html("");
            $('.gender').html("");
            $('.dob').html("");
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
            
            //Get Gender Value
            if(parseInt(GEN) >= 5000){
                gender = "Male";
            }else{
                gender = "Female";
            }

            mydate.getFullYear()

            var _age = mydate.getFullYear() - parseInt(date_of_birth.substring(0 , 4));

            var test = $('.age').val().length * $('.gender').val().length * $('.dob').val().length;

            if(test > 0){
                $('.btnSub').removeAttr('disabled');
            }
            
            //adding info to the ceble cells
            $('.age').append(_age);
            $('.gender').append(gender);
            $('.dob').append(date_of_birth);

            //displaying the info in the Modal
            $('#myModal').modal('show');
        }
    }

    $('pdate').datepicker({
        uiLibrary: 'boostrap4'
    });
});