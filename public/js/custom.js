"use strict";

jQuery(document).ready(function($){
    //your custom js code here
    $('[data-toggle="datepicker"]').datepicker({
        format: 'yyyy/mm/dd'
    });
    $('#studentstable').DataTable(

    );

});


function checkAll(bx) {
    var cbs = document.getElementsByTagName('input');
    for(var i=0; i < cbs.length; i++) {
        if(cbs[i].type == 'checkbox') {
            cbs[i].checked = bx.checked;
        }
    }
}