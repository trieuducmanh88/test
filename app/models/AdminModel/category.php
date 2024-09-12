<?php
    // load all cate
    function loadAllCate(){
        $sql = "SELECT * FROM `categories` WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }

      // store cate
    function insertCate($nameCate,$imgCate){
        $sql = "INSERT INTO `categories` (`id_cate`, `nameCate`, `imgCate`) VALUES (NULL, '$nameCate', '$imgCate')";
        pdo_execute($sql);
    }

    // load one cate
    function loadOneCate($id){
        $sql = "SELECT * FROM `categories` WHERE id_cate=".$id;
        $result = pdo_query_one($sql);
        return $result;
    }

    // update cate
    function updateCate($id,$nameCate,$imgCate){
        $sql ="UPDATE `categories` SET `nameCate` = '$nameCate', `imgCate` = '$imgCate' WHERE `categories`.`idCate` =".$id;
        pdo_execute($sql);
    }

    // delete  cate
    function DestroyCate($id){
        $sql = "DELETE  FROM `categories` WHERE id_cate=".$id;
        pdo_execute($sql);
    }


?>