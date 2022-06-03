<?php
include "header.php";
?>
<div class="card">
    <div class="card-header">
        <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        
        <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">TÊN KHÁCH HÀNG</label>
                </div>
                <div class="col-12 col-md-9">
            
                    <input type="text" id="TENKH" name="TENKH" class="form-control">
                    
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">SỐ ĐIỆN THOẠI</label>
            </div>
            <div class="col-12 col-md-9">
        
                <input type="text" id="SDT" name="SDT" class="form-control">
                
            </div>
        </div>
        <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">ĐỊA CHỈ</label>
        </div>
        <div class="col-12 col-md-9">
    
            <input type="text" id="TENKH" name="DIACHI" class="form-control">
            
        </div>
    </div>
    <div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">TÍCH ĐIỂM</label>
    </div>
    <div class="col-12 col-md-9">

        <input type="text" id="TD" name="TD" class="form-control">
        
    </div>
</div>
<div class="row form-group">
<div class="col col-md-3">
    <label for="text-input" class=" form-control-label">EMAIL</label>
</div>
<div class="col-12 col-md-9">

    <input type="text" id="TENKH" name="EMAIL" class="form-control">
    
</div>
</div>
            <div class="card-footer">
        <button type="submit" name="add" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="IndexProduct.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>    
<?php
include "Connect.php";

if(isset($_POST["add"]))
{
    $TENKH=$_POST['TENKH'];
    $SDT=$_POST['SDT'];
    $DC=$_POST['DIACHI'];
    $TD=$_POST['TD'];
    $EMAIL=$_POST['EMAIL'];

    $sql ="Insert into KHACHHANG (TENKH,SDT,DIACHI,TICHDIEM,EMAIL)values('".$TENKH."','.$SDT.','".$DC."','".$TD."','".$EMAIL."')";
    if ($conn->query($sql) === TRUE) {
    echo "Thêm  thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
}
?>




<?php
    include_once "fooder.php";
    ?>