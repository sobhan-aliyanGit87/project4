<!DOCTYPE html>
<?php
$city[0]="نجف اباد ";
$city[1]="اصفهان ";
$city[2]="بوشهر";
$city[3]="تهران";
$city[4]="قم ";
$city[5]="ابادان";
$city[6]="شیراز";
$city[7]="مشهد";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <header>
        <div id="header_right">
             <p id="p_img"> تصویر</p>
             <p id="p_img2"> تصویر</p>
        </div>
        <div id="header_left">
             <p>شرکت کیا فرایند نوتریکا</p>
        </div>

    </header>
    <nav>
        <span>  منو </span>
        <select>
        <?php for($i=0;$i<=7;$i++){
            echo("<option>".$city[$i]."</option>");
        }?>
        <option>تهراان</option>
        <option>اصفهان</option>
    </select>
    </nav>
    <main>
        <p>صفحه  اصلی</p>
    </main>
    <footer>
        <p> حق نشر محفوظ است </p>
    </footer>
</body>
</html>