$(document).ready(function(){
    $('.ck-editor__editable').on('keydown',function (e) {
            if(e.key == 'Backspace'){
                $('#second_desc').val($('#second_desc').val().slice(0, -1));

            }else if(e.key != 'Backspace' && e.key != 'CapsLock' && e.key != 'Enter' && e.key != 'Shift' && $('#second_desc').val().length < 100){
                $('#second_desc').val($('#second_desc').val() + e.key)
            }


    })
})
