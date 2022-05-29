<?php
ob_start();
if (isset($_POST['submit'])) {
    if (isset($_FILES['banner_upload'])) {
        $img = $_FILES['banner_upload']['name'];
        $tmp = $_FILES['banner_upload']['tmp_name'];
        if(!empty($img)) {
            move_uploaded_file($tmp, '../img/' . $img);

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = date('d-m-Y h:i:s A');

        $sql_set = "INSERT INTO danhsach_banner(file_upload, created_at) VALUES('$img', '$time')";
        mysqli_query($connect, $sql_set);
        header('location: ../admin/trangquantri.php?Admin=banner_show');
        } else {
            $alert = '<center class="alert alert-danger mt-3">Mời nhập ảnh vào !</center>';
        }
        
    }
}
?>
<h4 class="text-aligncenter mt-5">Thay thế Banner</h4>
<?= $alert ?? "" ?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <input name="banner_upload" type="file" class="dropify">
        <div class="text-aligncenter mt-3">
            <input name="submit" type="submit" class="btn btn-info" value="Xác nhận">
        </div>
    </form>
</div>

<div class="container mt-5">
    <h4 class="text-info">Banner hiện tại</h4>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="slideBanner col-md-7">
            <?php
            $sql_get = "SELECT * FROM danhsach_banner ORDER BY created_at DESC LIMIT 2";
            $query_get = mysqli_query($connect, $sql_get);
            while ($row = mysqli_fetch_array($query_get)) {
            ?>
                <div>
                    <img class="imgBanner" src="../img/<?= $row['file_upload'] ?>" alt="banner">
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php
$content = ob_get_clean();
?>