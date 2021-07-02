    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery/jquery.min.js"?>"></script>
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery-easing/jquery.easing.min.js"?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL ."mvc/Assets/admin/js/sb-admin-2.min.js"?>"></script>

    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    //   --- Delete Single Page ---
    $('a.deleteReservById').click(function(event){
        event.preventDefault();
        var href=$(this).attr("href");

        $.ajax({
            url:href,
            type:'POST',
            // data:{reserv:reserv},
            success:function(res){
                $.trim(res)=='Xóa thành công'
                    swal(res,"","success");
            }
        });
    });
    </script>
    

