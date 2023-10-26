<?php
class User
{
    var $UserID = null;
    var $Username = null;
    var $Address = null;
    var $Phone = null;
    var $Email = null;
    var $Password = null;
    var $Payment = null;
    var $Permissions = null;

    function getUser()
    {
        $db = new connect();
        $select = "SELECT * FROM tb_user";
        return $db->pdo_query($select);
    }
    public function checkUser($Email, $Password)
    {
        $db = new connect();
        $select = "SELECT * from tb_user WHERE email='$Email' AND password='$Password' AND permissions='Admin'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }
    public function checkUserCustomer($Email, $Password)
    {
        $db = new connect();
        $select = "SELECT * from tb_user WHERE email='$Email' AND password='$Password'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }
    public function userid($Email, $Password)
    {
        $db = new connect();
        $select = "SELECT user_id from tb_user Where email='$Email' AND password='$Password'";
        $result = $db->pdo_query_one($select);
        return $result;
    }

    public function createAcc($Email, $Password){
        $db = new connect();
        $query = "INSERT INTO tb_user (email, password, permissions) VALUES ('$Email', '$Password', 'Admin')";
        $result = $db->pdo_execute($query);
        return $result;
    }
    public function createAccUser($Email, $Password){
        $db = new connect();
        $query = "INSERT INTO tb_user (email, password, permissions) VALUES ('$Email', '$Password', 'User')";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function checkAccount($Email){
        $db = new connect();
        $select = "SELECT * from tb_user WHERE email='$Email'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return false;
        else
            return true;
    }

    public function getByEmail($Email){
        $db = new connect();
        $select = "SELECT * FROM tb_user WHERE email LIKE '%$Email%'";
        $result = $db->pdo_query_one($select);
        return $result;
    }

    public function updateUser($Username, $Address, $Phone, $userID){
        $db = new connect();
        $query = "UPDATE tb_user SET username = '$Username', address = '$Address', phone = '$Phone' WHERE user_id = '$userID'";
        $result = $db->pdo_execute($query);
        return $result;
    }

    public function changePassword($password, $userID){
        $db = new connect();
        $query = "UPDATE tb_user SET password = '$password' WHERE user_id = '$userID'";
        $result = $db->pdo_execute($query);
        return $result;
    }

    public function number_rows(){
        $db = new connect();
        $sql = "SELECT count(*) FROM tb_user"; 
        $result = $db->pdo_execute($sql);
        $number_of_rows = $result->fetchColumn(); 
        return $number_of_rows;
    }

    public function deleUser($userID, $email) {
        $db = new connect();
        $query = "DELETE FROM tb_user WHERE user_id = '$userID' AND email != '$email'";
        $result = $db->pdo_query_one($query);
        return $result;
    }

    public function deleCmtUser($userID){
        $db = new connect();
        $query = "DELETE FROM tb_comment WHERE user_id = '$userID'";
        $result = $db->pdo_query($query);
        return $result;
    }
}

?>