function selectProduct(el) {
    var id = $(el).val();
    console.log(id);
    if(id != ''){
        $.ajax({
            url:"fuck ajax",
            method:"POST",
            data:{query:id},
            dataType: 'JSON',
            success:function(data) {
                alert("is success!!!");
                $("#show_detail").removeClass("not-vi");
                $("#product-name").text(data.product_Name);
            },
        });
    }else{
        console.log("Error")
    }
    
}