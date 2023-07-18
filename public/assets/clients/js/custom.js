$(document).ready(function(){
    $("#search").keyup(function(){
        var searchText = $(this).val();
        if(searchText != ''){
            $.ajax({
                url : 'http://localhost:81/motorshop/product/search_product',
                method : 'POST',
                data:{query:searchText},
                success:function(response){
                    $("#show_list").html(response);
                }
            });
        }else{
            $("#show_list").html('');
        }
    });
    $(document).on('click','a',function(){
        $('#search').val($(this).text());
        $('#show_list').html('');
    });
});