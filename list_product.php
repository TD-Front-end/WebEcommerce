<?php
require_once("./Entities/product.class.php");
?>
<?php
include_once("/header.php");
$prods = Product::list_product();
//...design
foreach ($prods as $item) {
    echo "<p>tên sản phẩm " . $item["ProductName"] . "</p>";
    $img_src = $item["Picture"];
    echo "<img src='$img_src' alt='img'>";
    echo "<p>Mô tả". $item["Description"]. "</p>";
}
include_once("footer.php")

?>