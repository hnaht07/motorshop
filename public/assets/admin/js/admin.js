
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
                    if(text.length > 0){
                        for (let item of text){
                        $('#product-weight').val(item.info_Weight);
                        $('#product-long').val(item.info_Long);
                        $('#product-wide').val(item.info_Wide);
                        $('#product-high').val(item.info_High);
                        $('#product-saddle').val(item.info_Saddle);
                        $('#product-clean').val(item.info_Clean);
                        $('#product-tank').val(item.info_Tank);
                        $('#product-frtWheel').val(item.info_frtWheel);
                        $('#product-bckWheel').val(item.info_bckWheel);
                        $('#product-frtFork').val(item.info_frtFork);
                        $('#product-bckFork').val(item.info_bckFork);
                        $('#product-Engine').val(item.info_Engine);
                        $('#product-maxWatt').val(item.info_maxWatt);
                        $('#product-Oil').val(item.info_Oil);
                        $('#product-Fuel').val(item.info_Fuel);
                        $('#product-Gear').val(item.info_Gear);
                        $('#product-Start').val(item.info_Starting);
                        $('#product-maxMoment').val(item.info_maxMoment);
                        $('#product-Xylanh').val(item.info_volCylind);
                        $('#product-Piston').val(item.info_DiameterxPistonStroke);
                        $('#product-Ratio').val(item.info_CompRatio);
                        $('#btnSave').text("Sửa Thông Tin");
                        $('#iptSave').val("Sửa");
                    }
                    }else{
                        $('#product-weight').val(null);
                        $('#product-long').val(null);
                        $('#product-wide').val(null);
                        $('#product-high').val(null);
                        $('#product-saddle').val(null);
                        $('#product-clean').val(null);
                        $('#product-tank').val(null);
                        $('#product-frtWheel').val(null);
                        $('#product-bckWheel').val(null);
                        $('#product-frtFork').val(null);
                        $('#product-bckFork').val(null);
                        $('#product-Engine').val(null);
                        $('#product-maxWatt').val(null);
                        $('#product-Oil').val(null);
                        $('#product-Fuel').val(null);
                        $('#product-Gear').val(null);
                        $('#product-Start').val(null);
                        $('#product-maxMoment').val(null);
                        $('#product-Xylanh').val(null);
                        $('#product-Piston').val(null);
                        $('#product-Ratio').val(null);
                        $('#btnSave').text("Lưu Thông Tin");
                        $('#iptSave').val("Lưu");
                    }
                    
                    
                }
            });
        }else{
            console.log("Error")
        }
    });
    $('#product_name').keyup(function(){
        $(this).removeClass('errors');
        $('#error_name').addClass('not-vi');
    });
    $('#product_price').keyup(function(){
        $(this).removeClass('errors');
        $('#error_price').addClass('not-vi');
    });
    $('#product_desc').keyup(function(){
        $(this).removeClass('errors');
        $('#error_desc').addClass('not-vi');
    });
    $('#news_Title').keyup(function(){
        $(this).removeClass('errors');
        $('#error_title').addClass('not-vi');
    });
    $('#news_Block').keyup(function(){
        $(this).removeClass('errors');
        $('#error_block').addClass('not-vi');
    });
});