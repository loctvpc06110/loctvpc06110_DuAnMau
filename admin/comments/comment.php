<?php
    class Comment{
        var $cmtID = null;
        var $prodID = null;
        var $content = null;
        var $userID = null;
        var $createAt = null;
        
        public function getList() {
            $db = new connect();
            $query = "SELECT * FROM tb_comment"; // viết câu lệnh sql select *
            $result = $db->pdo_query($query);
            return $result;
        }

        public function createComment($prodID, $content, $userID){
            $db = new connect();
            $query = "INSERT INTO tb_comment (prod_id, content, user_id) values ('$prodID', '$content', '$userID')";
            $result = $db->pdo_execute($query);
            return $result;
        }

        public function showCommentByProdID($prodID){
            $db = new connect();
            $query = "SELECT * FROM tb_comment INNER JOIN tb_user ON tb_comment.user_id = tb_user.user_id WHERE prod_id = $prodID";
            $result = $db->pdo_query($query);
            return $result;
        }
    }
?>