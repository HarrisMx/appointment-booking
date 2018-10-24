//Functions to handle form validations and live changes

$(document).ready(function(){
    $('.verify').on('click', function(){
        alert("Button Pressed");
    });

    $('pdate').datepicker({
        uiLibrary: 'boostrap4'
    });
});