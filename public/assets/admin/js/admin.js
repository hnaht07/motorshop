
$(document).ready(function(){
    $('#searching').click(function(){
        var id = $('#productList').val();
        if(id != ''){
            $.ajax({
                url:"http://localhost:81/motorshop/admin/dashboard/info_action",
                method:"POST",
                data:{query:id},
                dataType: 'JSON',
                complete:function(response){
                     $("#show_detail").removeClass("not-vi");
                    var text = JSON.parse(response.responseText);
                    for (let item of text){
                        $('#product-name').val(item.product_Name);
                    }
                    
                }
            });
        }else{
            console.log("Error")
        }
    });
});