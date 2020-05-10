<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Nhập số tiền muốn chuyển (USD-VNĐ)</h3>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <input type="text" name="usd"><br>
    <input type="submit" value="Convert">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $rate = 23000;
    $usd =$_POST["usd"];
    $vnd = $usd*$rate;
    echo "Giá trị chuyển đổi từ USD-VNĐ là ".$vnd."VNĐ";
}
?>
</body>
</html>
