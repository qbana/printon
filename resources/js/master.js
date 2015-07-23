
$( document ).ready(function() {
    flash();
    datePicker();
    select2multiple();
    select2single();
});

function datePicker(){
    $('#datetimepicker1').datetimepicker({
        format: 'yyyy-mm-dd hh:ii:ss',
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
}

function flash(){
    $('#flash-overlay-modal').modal();
    //$('div.alert-success').delay(12500).slideToggle(300);
}

function select2multiple(){
    $("#tags").select2({
        placeholder: "Select or create new tags",
        tags: true
    });
}

function select2single(){
    $("#types").select2({
        placeholder: "Select a state",
        allowClear: true
    });
}

