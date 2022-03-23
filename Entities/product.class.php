<?php //IDEA:
require_once("./config/db.class.php");
// 
class Product
{
    public $productID;
    public $productName;
    public $cateID;
    public $price;
    public $quantity;
    public $description;
    public $picture;
    // cons
    public function __construct($pro_name, $cate_id, $price, $quantity, $desc, $picture)
    {
        $this->productName = $pro_name;
        $this->cateID = $cate_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $desc;
        $this->picture = $picture;
    }
    // lưu sản phẩm
    public function save()
    {
        $filetemp = $this->picture['tmp_name'];
        $user_file = $this->picture['name'];
        $timestamp = date("Y").date("m").date("d").date("h").date("i").date("s");
        $filepath = "uploads/".$timestamp.$user_file;
        if(move_uploaded_file($filetemp, $filepath)==false){
            return false;
        }
        //end upload file
        $db = new Db();
        // adđ product into database
        $sql = "INSERT INTO product (ProductName, CateID, Price, Quantity, description, Picture) VALUE
        ('$this->productName', '$this->cateID', '$this->price', '$this->quantity', '$this->description', '$filepath')";
        echo $sql;
        $result = $db->query_execute($sql);
       
        
        return $result;
    }
    // list product
    public static function list_product()
    {
        $db = new Db();
        $sql = "SELECT * FROM product";
        $result = $db->select_to_array($sql);
        return $result;
    }


}

?>