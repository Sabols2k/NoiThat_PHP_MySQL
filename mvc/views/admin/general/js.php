    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery/jquery.min.js"?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/jquery-easing/jquery.easing.min.js"?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL ."mvc/Assets/admin/js/sb-admin-2.min.js"?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo URL ."mvc/Assets/admin/vendor/chart.js/Chart.min.js"?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo URL ."mvc/Assets/admin/js/demo/chart-area-demo.js"?>"></script>
    <script src="<?php echo URL ."mvc/Assets/admin/js/demo/chart-pie-demo.js"?>"></script>
    <script src="<?php echo URL ."mvc/Assets/admin/js/demo/chart-bar-demo.js"?>"></script>

    <!-- Ckeditor -->
    <script src="<?php echo URL ."mvc/Assets/admin/js/ckeditor5-build-classic/ckeditor.js"?>"></script>
    
    <script>
        ClassicEditor
        .create( document.querySelector( '#content' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );
    </script>

    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    //   --- Delete Single Page ---
    $('a.deleteReservById').click(function(event){
        event.preventDefault();
        var href=$(this).attr("href");
        // var stt=$(this).attr("data-id");
        // var temp='reserv'+stt;
        // var reserv=$('#'+temp).val();

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
    

