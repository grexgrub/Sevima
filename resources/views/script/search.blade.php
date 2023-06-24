<script>
$(document).ready(function(){
    $('#search-dropdown').on('keyup', function(){
        console.log($('#search-dropdown').data('url'))
        let url = $('#search-dropdown').data('url')
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            method: 'post',
            data: {data : $('#search-dropdown').val()},
            success: function(data){
                let artikel = '';
                let paginate = '';
                let perv_page = ''
                let next_page = ''
                for(let i = 0; i < data.data.length; i++){
                 artikel += '<div class="lg:max-w-sm md:w-5/12 w-max p-6 bg-white border border-gray-200 rounded-lg shadow m-3"><a href="#"><h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">'+data.data[i].judul+'</h5></a><p class="mb-3 font-normal text-gray-700">'+data.data[i].deskripsi+'</p><h5>'+data.data[i].id_artikel+'</h5><h5 class="mb-2">'+data.data[i].created_at+'</h5><a href="/artikel/'+data.data[i].slug+'" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Read more</a></div>'
                }
                $('#card-isi').html(artikel)
                if(data.perv_page_url != null ){
                  perv_page =  '<a href="'+data.perv_page_url+'" class="rounded-sm p-2 bg-white border border-gray-300"> <i class="fa-solid fa-angle-left" style="color: #813d9c;"></i> </a>'
                }
                if(data.next_page_url != null){
                    next_page = '<a href="'+data.next_page_url+'" class="rounded-sm p-2 bg-white border border-gray-300"><i class="fa-solid fa-angle-right" style="color: #813d9c;"></i> </a>'
                }
                if(data.last_page >= 2){
                paginate = '<nav aria-label="Page navigation example" class="mx-9"><ul class="inline-flex items-center -space-x-px"><li><a href="'+data.first_page_url+'" class="rounded-l-lg p-2 bg-white border border-gray-300" >First</a></li><li>'+ perv_page +'</li><div class="p-3">'+data.current_page+'</div><li>'+ next_page +'</li><li><a href="'+data.last_page_url+'" class="rounded-r-lg p-2 bg-white border border-gray-300 ">Last</a></li></ul></nav>'
                $('#pagin').html(paginate)
                }else{
                    $('#pagin').empty()
                }

            }

        })
    })
})

</script>
