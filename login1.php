
<?php
include("head.html");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // اینجا می‌توانید اطلاعات ورود کاربر را بررسی کنید
    if ($username == "admin" && $password == "12345") {
        echo "ورود موفقیت آمیز!";
    } else {
        echo "نام کاربری یا رمز عبور اشتباه است.";
    }
}
?>
<?php
include("foot.html");
?>