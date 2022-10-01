<?php
ob_start();

if (isset($_POST['submit'])) {
    if (isset($_FILES['banner_upload'])) {
        $img = $_FILES['banner_upload']['name'];
        $tmp = $_FILES['banner_upload']['tmp_name'];
        $title = $_POST["title"];
        $content = $_POST["content"];
        if(!empty($img)) {
            move_uploaded_file($tmp, $configAdmin.'/img/' . $img);

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = date('d-m-Y h:i:s A');

        $sql_set = "INSERT INTO danhsach_under_banner(title, content, file_upload, created_at) VALUES('$title', '$content', '$img', '$time')";
        mysqli_query($connect, $sql_set);
        header('location: '.$configAdmin.'/admin/trangquantri.php?Admin=under_banner');
        } else {
            $alert = '<center class="alert alert-danger mt-3">Mời nhập ảnh vào !</center>';
        }
        
    }
}
?>
<h4 class="text-aligncenter mt-2">Thay thế lưới quảng cáo</h4>
<?= $alert ?? "" ?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề (không quá 30 chữ)" required>
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <input type="text" name="content" class="form-control" placeholder="Nhập nội dung(không quá 100 chữ)" required>
        </div>
        <input name="banner_upload" type="file" class="dropify">
        <div class="text-aligncenter mt-3">
            <input name="submit" type="submit" class="btn btn-info" value="Xác nhận">
        </div>
    </form>
</div>

<div class="container mt-1">
    <h4 class="text-info">Demo lưới quảng cáo</h4>
    <div class="row">
        <?php
        $sql_get = "SELECT * FROM danhsach_under_banner ORDER BY id DESC LIMIT 3";
        $query_get = mysqli_query($connect, $sql_get);
        while ($row = mysqli_fetch_array($query_get)) {
        ?>
            <div class="col-md-4">
                <div>
                    <img  width="350" height="230" src="'.$configAdmin.'/img/<?= $row['file_upload'] ?>" alt="banner">
                </div>
                <div>
                    <b>Tiêu đề:</b> <?= $row['title'] ?>
                </div>
                <div>
                    <b>Nội dung:</b> <?= $row['content'] ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
$content = ob_get_clean();
?>