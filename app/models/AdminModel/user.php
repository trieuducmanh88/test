<?php  
    function listUser(){
        $sql = "SELECT * FROM `users` WHERE 1";
        $list_taikhoan = pdo_query($sql);
        return $list_taikhoan;
    }

    function destroy_taikhoan($id){
        $sql = "delete from users where id=".$id;
        pdo_execute($sql);
    }

?>