
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
                    }
                    
                }
            });
        }else{
            console.log("Error")
        }
    });
});