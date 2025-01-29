<h1><a href="index.html">←返回首页</a></h1>
<hr><hr>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload_file">
    <br><br>
    <input type="submit" value="上传">
</form>

<?php
// $_FILES['upload_file'][name]
// $_FILES['upload_file'][type]
// $_FILES['upload_file'][tmp_name]
// $_FILES['upload_file'][error]
// $_FILES['upload_file'][size]
if (!empty($_FILES['upload_file'][name])) {
    move_uploaded_file($_FILES['upload_file'][tmp_name],"files\\".$_FILES['upload_file'][name]);
    echo "<script>alert('上传成功！')</script>";
}
?>