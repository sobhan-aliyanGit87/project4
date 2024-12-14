
<?php
include("head.html");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ثبت نام موفقیت‌آمیز</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>ثبت نام موفقیت‌آمیز</h2>
        <p>اطلاعات زیر با موفقیت ثبت شد:</p>
        <p>نام کاربری: <?php echo $_POST['username']; ?></p>
        <p>ایمیل: <?php echo $_POST['email']; ?></p>
    </div>
</body>
</html>
<?php
include("foot.html");
?>