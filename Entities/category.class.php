<?php // IDEA
require_once("config/db.class.php");
// 
class Category
{
    public $CateID;
    public $categoryName;
    public $description;

    public function __construct($cate_name, $desc)
    {
        // 
        $this->categoryName = $cate_name;
        $this->description = $desc;
    }
    // lấy danh sách loại sản phẩm
    public static function list_category()
    {
        $db = new Db();
        $sql = "SELECT * FROM category";
        $result = $db->select_to_array($sql);
        return $result;
    }

}
?>