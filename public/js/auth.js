$(document).ready(function (){
    $('#guru-btn').on('click', function(){
        $('#guru-btn').addClass('bg-blue-500')
        $('#murid-btn').removeClass('bg-blue-500')
        $('#login-user-form').attr('action', 'login/guru')
    })

    $('#murid-btn').on('click', function(){
        $('#murid-btn').addClass('bg-blue-500')
        $('#guru-btn').removeClass('bg-blue-500')
        $('#login-user-form').attr('action', 'login/murid')
    })

})
