<!-- Begin Page Content -->
<div class="container-fluid">

   <div class="row">
     <!-- Page Heading -->
     <div class="col-lg-6 d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Rooms</h1>
    </div>
    <div class="col-lg-6">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 " method="GET">
            <div class="input-group">
                <input name="value" type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-info"  type="submit"  >
                        <i class="fas fa-search fa-sm"></i>
                    </button> 
                </div>
            </div>
        </form>
        
    </div>
   </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Rooms</h6>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?php echo URLAdmin."addroom"?>" class="btn btn-light btn-icon-split mb-3">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>RoomID</th>
                            <th>Image</th>
                            <th>RoomNumber</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Name Guest</th>
                            <th>Email Guest</th>
                            <th>DateCheckIn</th>
                            <th>DateCheckOut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>RoomID</th>
                            <th>Image</th>
                            <th>RoomNumber</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Name Guest</th>
                            <th>Email Guest</th>
                            <th>DateCheckIn</th>
                            <th>DateCheckOut</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody id="allroom" >
                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // console.log(xmlhttp.responseText);
        array = JSON.parse(xmlhttp.responseText);
        console.log(array);

        var stt=1;
        html= array.map(item=>
            `<tr>`+
                `<td>`+item['RoomID']+`</td>`+
                `<td><img style="height: 50px; width: 50px; border-radius:50%" src=" <?php echo imgRoomtype?>`+ item['rImg']+`" alt=""></td>`+
                `<td>`+item['RoomNumber']+`</td>`+
                `<td>`+item['rRoomType']+`</td>`+
                `<td>`+item['rRoomPrice']+`</td>`+
                `<td>`+item['RoomstatusID']+`</td>`+
                `<td>`+item['gName']+`</td>`+
                `<td>`+item['gEmail']+`</td>`+
                `<td>`+item['bDateCheckIn']+`</td>`+
                `<td>`+item['bDateCheckOut']+`</td>`+
                `<td> 
                    <button class="btn btn-edit">`+
                        `<a href="<?php echo URLAdmin ?>editroom/`+item['RoomID']+ `">`+
                            ` <i style="color: #ffff" class="fas fa-pencil-alt"></i>`+
                        `</a>`+
                    `</button>
                    <button class="btn btn-delete">
                        <a onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin?>deleteroom/` +item['RoomID']+` ">
                            <i style="color: #ffff" class="fas fa-trash-alt"></i>
                        </a>
                    </button>`+
                `</td>`+
            `</tr>`
                        );
        $('#allroom').html(html);
    }
    
    };
    xmlhttp.open("GET", "<?php echo URL."/api/AllRoomtype"?>", true);
    xmlhttp.send();

</script>
