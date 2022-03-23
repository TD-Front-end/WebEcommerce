<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project training - website bán hàng</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cd-slider-nav">
                        <nav class="navbar navbar-expand-lg" id="tm-nav">
                            <a class="navbar-brand" href="index.php">CLMCA</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-supported-content">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item selected">
                                        <a class="nav-link" aria-current="page" href="./index.php">Thêm sản phẩm</a>
                                        <div class="circle"></div>
                                    </li>                               
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid tm-content-container">
            <ul class="cd-hero-slider mb-0 py-5">
                <li class="px-3" data-page-no="1">
                    <div class="page-width-1 page-left">
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark">
                                <h2 class="mb-4">Chào mừng đã đến với Shop CLMCA</h2>
                                <?php
                                require_once("./Entities/product.class.php");
                                require_once("./Entities/category.class.php");
                                // kiểm tra kết nối
                                if (isset($_POST["btnsubmit"])) {
                                    // 
                                    $productName = $_POST["txtName"];
                                    $cateID = $_POST["txtCateID"];
                                    $price = $_POST["txtprice"];
                                    $quantity = $_POST["txtquantity"];
                                    $description = $_POST["txtdesc"];
                                    $picture = $_FILES["txtpic"];
                                    // $picture = $_POST["txtpic"];
                                    // 
                                
                                    $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);
                                    // save in database
                                    
                                    $result = $newProduct->save();

                                    if (!$result) {
                                        header("location: add_product.php?failure");
                                        echo"Thất bại";
                                    } else {
                                        header("location: index.php?inserted");
                                    }
                                }
                                ?>
                                <!--add value in header-->
                                <?php
                                // lấy giá trị tham số có tên inserted
                                if (isset($_GET["inserted"])) {
                                    echo "<h2>Thêm sản phẩm thành công</h2>";
                                }
                                ?>
                                <!-- form sản phẩm -->
                                <form method="post" enctype="multipart/form-data">
                                    <!-- productname -->
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Tên sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" name="txtName" value="
                                                <?php
                                                echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>" />
                                        </div>
                                    </div>
                                    <!-- description product -->
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Mô tả sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="txtdesc" col="21" row="10" value="
                                                <?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>">
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- quantity product -->
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Số lượng sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="number" name="txtquantity" value="
                                                    <?php
                                                    echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>" />
                                        </div>
                                    </div>
                                    <!-- product price -->
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Giá bán</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" name="txtprice" value="
                                                    <?php
                                                    echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>" />
                                        </div>
                                    </div>
                                    <!-- cate product -->
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Chọn loại sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <select name="txtCateID">
                                                <option value="" selected>--Chọn loại--</option>
                                                <?php
                                                    $cates = Category::list_category();
                                                    foreach($cates as $item){
                                                        echo "<option value=".$item["CateID"].">".$item["CategoryName"]."</option>";
                                                    } 
                                                ?>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- picture -->
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Đường dẫn hình ảnh</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="file" id="txtpic" name="txtpic" accept=".PNG, .GIF, .JPG">
                                            <!-- <input type="text" name="txtpic" value="<php echo isset($_POST["txtpic"]) ? $_POST["txtpic"] : ""; ?>"> -->

                                        </div>
                                    </div>
                                    <!-- btn thêm -->
                                    <div class="row">
                                        <div class="submit">
                                            <input type="submit" name="btnsubmit" value="Thêm sản phẩm" style="margin-top: 20px;" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>
                        </div>
                        <div class="text-center">
                            <a href="./index.php"  class="btn btn-primary tm-intro-btn tm-page-link">
                                Trở lại trang chủ
                            </a>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/templatemo-script.js"></script>
</body>

</html>