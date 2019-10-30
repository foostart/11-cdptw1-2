$(document).ready(function(){
    var date_input=$('input[name="bday"]');
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: "body",
        todayHighlight: true,
        autoclose: false,
    })
});