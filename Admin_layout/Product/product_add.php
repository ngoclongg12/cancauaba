<?php
ob_start();
?>

<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $status = $_POST["status"];
    $price = $_POST["price"];
    $top = $_POST["top"];
    $type = $_POST["type"];
    $alert = "";

    if (isset($_POST["accept"])) {

        if (isset($name) && isset($status) && isset($price) && isset($_FILES["img_upload"])) {
            $img = $_FILES['img_upload']['name'];
            $img_tmp = $_FILES['img_upload']['tmp_name'];
            move_uploaded_file($img_tmp, '../img/' . $img);
            
            $sql = "INSERT INTO danhsach_sp (Name, Status, Price, Image, Top, type)
            VALUES ('$name', '$status', '$price', '$img', '$top', '$type')";
            $query = mysqli_query($connect, $sql);
            $alert = '<center class="alert alert-success mt-3 add-sp">Thêm sản phẩm thành công !</center>';
        } else {
            $alert = '<center class="alert alert-danger mt-3">Mời điền đủ thông tin sản phẩm !</center>';
        }
    } else {
        $alert = '<center class="alert alert-danger mt-3">Mời xác nhận trước khi thêm mới !</center>';
    }
}
?>

<h4 class="text-aligncenter mt-3">Thêm sản phẩm mới</h4>

<?= $alert ?? "" ?>

<form id="quickForm" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="text" name="status" class="form-control" placeholder="Nhập số lượng" required>
        </div>
        <div class="form-group">
            <label>Giá thành sản phẩm</label>
            <input type="text" name="price" class="form-control" placeholder="Nhập giá thành sản phẩm" required>
        </div>
        <div class="form-group">
            <label>Loại sản phẩm :</label>
            <select name="type">
                <option value="cancau" class="active">Cần câu</option>
                <option value="daycau">Dây câu</option>
                <option value="phaocau">Phao câu</option>
                <option value="luoicau">Lưỡi câu</option>
                <option value="moicau">Mồi câu</option>
                <option value="thungcau">Thùng câu</option>
                <option value="thoitrangcau">Thời trang câu</option>
            </select>
        </div>
        <div class="form-group">
            <label>Top sản phẩm :</label>
            <select name="top" id="">
                <option value="0" class="active">Sản phẩm thường</option>
                <option value="1">Sản phẩm bán chạy</option>
                <option value="2">Sản phẩm mới</option>
            </select>
            
        </div>
        <div class="form-group mb-4">
            <label>Ảnh mô tả: </label>
            <input type="file" name="img_upload" required>
        </div>
        <div class="form-group mb-0">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="accept" class="custom-control-input" id="exampleCheck1" required>
                <label class="custom-control-label" for="exampleCheck1">Tôi xác nhận chính xác thông tin sản phẩm <a href="#">terms of service</a>.</label>
            </div>
        </div>
    </div>

    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </div>
</form>

<?php
$content = ob_get_clean();
?>