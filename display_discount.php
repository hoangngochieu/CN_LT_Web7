<?php
 $ten = filter_input(INPUT_POST, 'product_description');
    $giagoc = filter_input(INPUT_POST, 'list_price',FILTER_VALIDATE_FLOAT);
    $chietkhau = filter_input(INPUT_POST, 'discount_percent',FILTER_VALIDATE_FLOAT);

 $tienchietkhau = $giagoc * $chietkhau* 0.01;
 $sauchietkhau = $giagoc - $tienchietkhau;

 $giagoc_f = "$".number_format($giagoc,2);
 $chietkhau_f = $chietkhau."%";
 $tienchietkhau_f = "$".number_format($tienchietkhau,2);
 $sauchietkhau_f = "$".number_format($sauchietkhau,2);

?>
commit 1
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Trang này đã được sửa chữa =))</h1>

     

        <label>Tên sản phẩm:</label>
        <span><?php echo htmlspecialchars($ten); ?></span><br>

        <label>Giá gốc:</label>
        <span><?php echo htmlspecialchars($giagoc_f); ?></span><br>

        <label>Chiết khấu:</label>
        <span><?php echo htmlspecialchars($chietkhau_f); ?></span><br>

        <label>Số tiền chiết khấu:</label>
        <span><?php echo htmlspecialchars($tienchietkhau_f); ?></span><br>

        <label>Sau chiết khấu:</label>
        <span><?php echo htmlspecialchars($sauchietkhau_f); ?></span><br>
    </main>
</body>
</html>