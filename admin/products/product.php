<?php 
// code class Products
// Khai báo thuộc tính của Product

class Product {
    var $id = null;
    var $name = null;
    var $status = null;
    var $image = null;
    var $price = null;
    var $inventory = null;
    var $desc = null;
    var $cateID = null;

    // hàm lấy tất cả dữ liệu của bảng products
    public function getList() {
        $db = new connect();
        $query = "SELECT * FROM tb_product ORDER BY productID"; // viết câu lệnh sql select *
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getListLimit($start, $limit) {
        $db = new connect();
        $query = "SELECT * FROM tb_product INNER JOIN tb_prod_cate ON tb_product.cateID = tb_prod_cate.cateID  ORDER BY productID ASC LIMIT $start, $limit";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getSimilar($cate_name, $prodID){
        $db = new connect();
        $query = "SELECT * FROM tb_product INNER JOIN tb_prod_cate ON tb_product.cateID = tb_prod_cate.cateID WHERE cate_name = '$cate_name' AND productID != '$prodID' LIMIT 4";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getList_InnerJoin_Cate() {
        $db = new connect();
        $query = "SELECT * FROM tb_product INNER JOIN tb_prod_cate ON tb_product.cateID = tb_prod_cate.cateID"; // viết câu lệnh sql select *
        $result = $db->pdo_query($query);
        return $result;
    }

    public function get4product($position, $value){
        $db = new connect();
        $query = "SELECT * FROM tb_product INNER JOIN tb_prod_cate ON tb_product.cateID = tb_prod_cate.cateID LIMIT $position, $value";
        $result = $db->pdo_query($query);
        return $result;
    }
    
    // hàm lấy 1 dòng dữ liệu của bảng products dựa trên id
    public function getByID($id) {
        $db = new connect();
        $query = "SELECT * FROM tb_product where productID = '$id'";
        $result = $db->pdo_query_one($query);
        return $result;
    }

    public function getDetailProductByID($id) {
        $db = new connect();
        $query = "SELECT * FROM tb_product INNER JOIN tb_prod_cate ON tb_product.cateID = tb_prod_cate.cateID WHERE productID ='$id'";
        $result = $db->pdo_query_one($query);
        return $result;
    }

    //hàm insert dữ liệu, create dữ liệu, thêm mới dữ liệu
    public function add($name, $status, $image, $price, $inventory, $desc, $cateID){
        $db = new connect();
        $query = "INSERT INTO tb_product (prd_name, prd_status, image, price, inventory, description, cateID) values ('$name', '$status' ,'$image', '$price', '$inventory', '$desc', '$cateID')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    //hàm cập nhập dữ liệu
    public function update($prodID, $name, $status, $image, $price, $inventory, $desc, $cateID){
        $db = new connect();
        $query = "UPDATE tb_product SET prd_name = '$name', prd_status = '$status', image = '$image', price = '$price', inventory = '$inventory', description = '$desc', cateID = $cateID WHERE productID = '$prodID'";
        $result = $db->pdo_execute($query);
        return $result;
    }

    public function delete($id){
        $db = new connect();
        $query = "DELETE FROM tb_product WHERE productID = '$id'";
        $result = $db->pdo_query_one($query);
        return $result;
    }

    public function number_rows(){
        $db = new connect();
        $sql = "SELECT count(*) FROM tb_product"; 
        $result = $db->pdo_execute($sql);
        $number_of_rows = $result->fetchColumn(); 
        return $number_of_rows;
    }

    public function checkSearch($keyS){
        $db = new connect();
        $sql = "SELECT count(*) FROM tb_product WHERE prd_name LIKE '%$keyS%'"; 
        $result = $db->pdo_execute($sql);
        $number_of_rows = $result->fetchColumn(); 
        return $number_of_rows;
    }
    public function getByKey($keyS) {
        $db = new connect();
        $query = "SELECT * FROM tb_product INNER JOIN tb_prod_cate ON tb_product.cateID = tb_prod_cate.cateID WHERE prd_name LIKE '%$keyS%'";
        $result = $db->pdo_query($query);
        return $result;
    }

}
?>