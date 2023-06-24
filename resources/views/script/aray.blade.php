<script>

$(document).ready(function(){
    $('#search').on('input', function(){
        let url = $('#search').data('url');
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            method: 'post',
            success: function(data){
                if($('#search').val() == ''){
                return $('#search-dropdown').empty();
                }
                let d = '';
                for(let i = 0; i < data.length; i++){
                    d +=  '<h1 class="p-2 flex aray justify-center hover:bg-gray-50">'+data[i]['judul']+'</h1>'
                }

                $('#search-dropdown').html(d);
            }
        })
    })

    const aray = document.getElementsByClassName('.aray');
        aray[0].on('click', function(e){
            console.log(e)
        })


    for (let i = 0; i < $('.aray').lenth; i++){
        $('.aray')[i].on('click', function(e){
            console.log(e)
        })
    }

})





</script>
