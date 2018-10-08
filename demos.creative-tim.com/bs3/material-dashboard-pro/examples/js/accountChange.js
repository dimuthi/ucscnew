$('.selectpicker').change(function () {
    if ($('.selectpicker').find(':selected').text() == "Applicant") {
        console.log($('.selectpicker').find(':selected').text());
        $('#signUpApp').hide();
    } else if ($('.selectpicker').find(':selected').text() == "User") {
        $('#signUpApp').show();
    }
});