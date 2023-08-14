
$(document).ready(function(){
    $("#search").keyup(function(){
        $('#show_list').removeClass("not-vi");
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
    $(document).on('click','#choose_res',function(){
        $('#search').val($(this).text());
        $('#show_list').html('');
    });
    $(document).on("click", function(e){
    if ($(e.target).is("#search") === false) {
      $("#show_list").addClass('not-vi');
    }
    });

    $("#search_mb").keyup(function(){
        $('#show_list_mb').removeClass("not-vi");
        var searchText = $(this).val();
        if(searchText != ''){
            $.ajax({
                url : 'http://localhost:81/motorshop/product/search_product',
                method : 'POST',
                data:{query:searchText},
                success:function(response){
                    $("#show_list_mb").html(response);
                }
            });
        }else{
            $("#show_list_mb").html('');
        }
    });
    $(document).on('click','#choose_res',function(){
        $('#search_mb').val($(this).text());
        $('#show_list_mb').html('');
    });
    $(document).on("click", function(e){
    if ($(e.target).is("#search_mb") === false) {
      $("#show_list_mb").addClass('not-vi');
    }
    });
    $('#login_name').keyup(function(){
        $(this).removeClass('errors');
    });
    $('#login_password').keyup(function(){
        $(this).removeClass('errors');
    });
    $('.delete_product').click(function(e) {
            e.preventDefault();
            var delete_id = $(this).closest("tr").find('.delete_id').val();
            console.log(delete_id);
            Swal.fire({
                title: 'Bạn Muốn Xóa Sản Phẩm Này?',
                text: "Tất cả những hình ảnh và thông tin liên quan sẽ bị xóa!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "http://localhost:81/motorshop/admin/dashboard/delete_product",
                        method: "POST",
                        data: {
                            id: delete_id
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Xóa Thành Công!',
                                text: 'Sản Phẩm Đã Được Xóa Khỏi Database.',
                                icon: 'success'
                            }).then((result) => {
                                location.reload();
                            })
                        }
                    });
                }
            })
        });
        $('.delete_img').click(function(e) {
            e.preventDefault();
            var delete_id = $(this).parent("figure").find('.img_id').val();
            Swal.fire({
                title: 'Bạn Muốn Xóa Hình Ảnh Này?',
                text: "Hình Ảnh Sẽ Bị Xóa Khỏi Database!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "http://localhost:81/motorshop/admin/dashboard/delete_img",
                        method: "POST",
                        data: {
                            id: delete_id
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Xóa Thành Công!',
                                text: 'Hình Ảnh Đã Được Xóa Khỏi Database.',
                                icon: 'success'
                            }).then((result) => {
                                location.reload();
                            })
                        }
                    });
                }
            })
        });
        $('.delete_news').click(function(e) {
            e.preventDefault();
            var delete_id = $(this).closest("tr").find('.delete_id').val();
            Swal.fire({
                title: 'Bạn Muốn Xóa Tin Tức Này?',
                text: "Bản Tin Này Sẽ Bị Xóa Khỏi Database!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "http://localhost:81/motorshop/admin/dashboard/delete_news",
                        method: "POST",
                        data: {
                            id: delete_id
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Xóa Thành Công!',
                                text: 'Bản Tin Đã Được Xóa Khỏi Database.',
                                icon: 'success'
                            }).then((result) => {
                                location.reload();
                            })
                        }
                    });
                }
            })
        });
});
