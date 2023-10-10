<?php
class Category
{
    // Khai báo thuộc tính
    var $id = null;
    var $name = null;
    var $createDate = null;
    var $updateDate = null;

    // hàm lấy tất cả dữ liệu của bảng Categoris
    public function getList() {
        $db = new connect();
        $query = "SELECT * FROM tb_prod_cate"; // viết câu lệnh sql select *
        $result = $db->pdo_query($query);
        return $result;
    }

    // hàm lấy 1 dòng dữ liệu của bảng categoris dựa trên id
    public function getByID($id) {
        $db = new connect();
        $query = "SELECT * FROM tb_prod_cate where cateID = '$id'";
        $result = $db->pdo_query_one($query);
        return $result;
    }

    //hàm insert dữ liệu, create dữ liệu, thêm mới dữ liệu
    public function add($name){
        $db = new connect();
        $query = "INSERT INTO tb_prod_cate (cateID, cate_name) values (null, '$name')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    //hàm cập nhập dữ liệu
    public function update($name, $cateID ){
        $db = new connect();
        $query = "UPDATE tb_prod_cate SET cate_name = '$name', update_date = now() WHERE cateID = '$cateID'";
        $result = $db->pdo_execute($query);
        return $result;
    }

    public function delete($id){
        $db = new connect();
        $query = "DELETE FROM tb_prod_cate WHERE cateID = '$id'";
        $result = $db->pdo_query_one($query);
        return $result;
    }
}
?>
