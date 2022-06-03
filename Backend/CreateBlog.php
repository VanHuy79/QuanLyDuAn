<?php
include "header.php";
?>
<div class="card">
    <div class="card-header">
        
    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tiêu Đề</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="Tieude" name="tieude" placeholder="Text" class="form-control">
                </div>
            </div>
           
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="password-input" name="email" placeholder="email" class="form-control">
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Mô tả</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="MOTA" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>

            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-multiple-input" class="form-control-label">ẢNH</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-multiple-input" name="ANH" multiple="" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class="form-control-label">TRẠNG THÁI</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="TT">
                    <option name="TT" value="TRUE">TRUE</option>
                    <option name="TT" value="FALSE">FALSE</option>
                </select>
                </div>
               
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="IndexBlog.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>   
<?php
include "Connect.php";
$Tieude=$_POST['tieude'];
$MOTA=$_POST['MOTA'];
$Email=$_POST['email'];
$TT=$_POST['TT'];
$FILE = $_FILES['ANH']["name"];
if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
(isset($_FILES['ANH']))) {

        $names      = $_FILES['ANH']['name'];
        $types      = $_FILES['ANH']['type'];
        $tmp_names  = $_FILES['ANH']['tmp_name'];
        $errors     = $_FILES['ANH']['error'];
        $sizes      = $_FILES['ANH']['size'];
 
        
            if ($errors == 0)
            {
                $target_dir    = "Client/img_blog/";
                 $target_file   = basename($_FILES['ANH']['name']);
                 echo "Lưu tại: $target_file <br>";
                 echo "Cỡ file: $sizes <br><hr>";
                 move_uploaded_file($tmp_names, $target_dir .$target_file );
            }
    }
    $sql ="Insert into blog (anh,mota,tieude,email,trangthai)values('$target_file','$MOTA','$Tieude','$Email','$TT')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm  thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
?>

<?php
                               
    include_once "fooder.php";
    ?>