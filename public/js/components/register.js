$(document).ready(function(){

    const cekUsername = function(){
          if ($('#username').val().length > 0){
            $('#usernameWarn').html('Good')
            $('#usernameWarn').removeClass('text-red-600')
            $('#usernameWarn').addClass('text-green-600')
          }else if ($('#username').val() < 1){
            $('#usernameWarn').html('Harus di isi')
            $('#usernameWarn').removeClass('text-green-600')
            $('#usernameWarn').addClass('text-red-600')
          }
    }

    const cekEmail = function(){
        const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        let isValid = $('#email').val().match(re);

        if(isValid == null ){
            $('#emailWarn').html('gunakan email yang valid')
            $('#emailWarn').removeClass('text-green-600')
            $('#emailWarn').addClass('text-red-600')
        }else if(isValid != null){
            $('#emailWarn').html('Good')
            $('#emailWarn').removeClass('text-red-600')
            $('#emailWarn').addClass('text-green-600')

        }
        if ($('#email').val() < 1){
            $('#emailWarn').html('Harus di isi')
            $('#emailWarn').removeClass('text-green-600')
            $('#emailWarn').addClass('text-red-600')
        }

        if(isValid != null){
            $.ajax({
                url: '/cekUsernamePassword',
                data: {data : $('#email').val()},
                method: 'post',
                succsess: function(data){
                    console.log(data)
                }
            })
        }

    }

    const cekPassword = function(){
        const cekLength =  $('#password').val().length
        const cekLowerCase =  $('#password').val().match(/([a-z])/g)
        const cekUpperCase = $('#password').val().match(/([A-Z])/g)
        const cekNumber = $('#password').val().match(/([0-9])/g)
        const cekSymbol = $('#password').val().match(/([^0-9a-zA-Z])/g)

        let persen = 100;

        if(cekLowerCase == null){
            persen -= 15
        }

        if(cekUpperCase == null){
            persen -= 15
        }

        if(cekNumber == null){
            persen -= 15.5
        }

        if(cekSymbol == null){
            persen -= 14.5
        }

        if(cekLength < 8){
            persen -= 40
        }else if(cekLength > 30){
            persen += 50
        }

        if(persen >= 100){
            persen = 100;
        }

        if(persen < 60){
            $('#meter').removeClass('bg-green-400')
            $('#meter').removeClass('bg-blue-600')
            $('#meter').addClass('bg-red-600')
        }else if(persen < 86){
            $('#meter').removeClass('bg-red-600')
            $('#meter').removeClass('bg-green-400')
            $('#meter').addClass('bg-blue-600')
        }else if(persen > 85){
            $('#meter').removeClass('bg-red-600')
            $('#meter').removeClass('bg-blue-600')
            $('#meter').addClass('bg-green-400')
        }


        if(persen >= 60){
            $('#passwordWarn').html('Good, buat lebih kuat jika memungkinkan')
            $('#passwordWarn').removeClass('text-red-600')
            $('#passwordWarn').addClass('text-green-500')
        }else{
            $('#passwordWarn').html('Buat sampai bar menjadi biru atau hijau')
            $('#passwordWarn').removeClass('text-green-500')
            $('#passwordWarn').addClass('text-red-600')

        }





        if($('#password').val().length > 0){
            $('#strengMeter').removeClass('hidden')
        }else{
            $('#strengMeter').addClass('hidden')
            $('#passwordWarn').html('Harus di isi')
        }


        $('#meter').css('width', persen + '%')


    }

    cekEmail()
    cekUsername()
    $('#username').on('input',(e) => {
        cekUsername()
    })
    $('#email').on('input', (e)=> {
        cekEmail()
    })
    $('#password').on('input', () => {
        cekPassword()

    })

})
