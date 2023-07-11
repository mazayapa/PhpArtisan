function chageOnform(formId,lineId){
    $("#"+formId).change(function(){
        var changeVal = $("#"+formId).val();
        var oldlineVal =  $("#def_"+lineId).val();

        var newVal = oldlineVal+changeVal
        $("#line_"+lineId).val(newVal);
        $(".line_"+lineId).html(newVal);
    })
}

jQuery(document).ready(function($) {
    $('.copyThisText').on('click', function(e) {
        e.preventDefault();
        var inputId = $(this).attr('thisid');
        //  alert(inputId);

        /* Get the text field */
        var copyText = document.getElementById(inputId);

        /* Prevent iOS keyboard from opening */
        copyText.readOnly = true;

        /* Change the input's type to text so its text becomes selectable */
        copyText.type = 'text';

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Change the input's type back to hidden */
        copyText.type = 'hidden';
    });
});