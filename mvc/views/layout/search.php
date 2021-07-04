<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evo Nội Thất</title>
    <?php 
        require_once "general/css.php";
    ?>
  </head>
<body>
     <!-- ========== HEADER ========== -->
     <?php $page = 'home'; require_once('general/header.php');?>
    <!-- ========== SECTION-BREAD-CRUMP ========== -->
    <section class="bread-crump">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kết quả tìm kiếm</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ========== SECTION-PAGE-INTRO ========== -->
    <section class="search-result">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="result-title" class="title-head text-center">Kết quả tìm kiếm</h1>
                    <h1 id="no-result-title" class="title-head text-center" style="display: none">KHÔNG TÌM THẤY BẤT KỲ KẾT QUẢ NÀO VỚI TỪ KHÓA TRÊN</h1>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="products-view-search">
                        <div class="row mb-5" id="list-products-search">
                            <!-- ... Render products search from API -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== FOOTER ========== -->
    <?php
        require_once('general/footer.php');
    ?> 
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <?php 
        require_once('general/js.php');
    ?>
    <script>
        function format(n) {
            return (n * 1000).toLocaleString('vi', {
                style: 'currency',
                currency: 'VND'
            })
        }

        $('.search-auto').keypress(function(e){
            var keycode = (event.keyCode);
            e.preventDefault()
                if (keycode == '13') {
                    var nameProduct=$(this).val();
                    // $.get('search.php?ten=' + nameProduct,function(data,status){
                    //     $('#list-products-search').html(data)
                    // })
                }
        })
        
    </script>