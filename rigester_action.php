<?php
include("head.html");
?>
<center>
<?php

if(
isset($_POST["FirstName"]) && !empty($_POST["FirstName"])
&& isset($_POST["FirstName"]) && !empty($_POST["FirstName"])
&& isset($_POST["LastName"]) && !empty($_POST["LastName"])
&& isset($_POST["Email"]) && !empty($_POST["Email"])
&& isset($_POST["password"]) && !empty($_POST["password"])
&& isset($_POST["repassword"]) && !empty($_POST["repassword"])
){
    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $Email=$_POST["Email"];
    $userName=$_POST["userName"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];

    echo("<p>".$FirstName."</p>");
    echo("<p>".$LastName."</p>");
    echo("<p>".$Email."</p>");
    echo("<p>".$userName."</p>");
    echo("<p>".$password."</p>");
    echo("<p>".$repassword."</p>");

}else{
    ("پر کردن فیلد ها الزامی است");
}

?>
</center>
<?php
include("foot.html");
?>