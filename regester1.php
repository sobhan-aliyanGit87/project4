
<?php
include("head.html");
?>
   <div class="tecrar">
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>صفحه ثبت نام</title>
    <link rel="stylesheet" href="regester1.css">
</head>
<body>
    <div class="container">
        <h2>ثبت نام</h2>
        <form action="register.php" method="post">
            <label for="username">نام کاربری:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">ثبت نام</button>
        </form>
    </div>
</body>
</html>
</div>
<?php
include("foot.html");
?>