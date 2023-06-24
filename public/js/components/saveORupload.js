$(document).ready(function (){
    const buttons = document.querySelectorAll('.btn-saveupload')

    buttons.forEach(button => {
        button.addEventListener('click', function(){
            $('#artikelform').attr('action', 'post/' + button.dataset.aksi )
            $('#artikelform').submit()
        })
    });
})
