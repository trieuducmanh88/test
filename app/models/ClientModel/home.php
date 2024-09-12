<?php 

    function prin_r($a){
        echo '<pre>';
            print_r($a);
        echo '</pre>';
    }

    function checkLogIn($email,$password){
        $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
        $result = pdo_query($sql);
        return $result;
    }

    function register($user_name ,$password,$email){
        $sql = "INSERT INTO `users` (`id_user`,`user_name`, `password`, `email`) VALUES (NULL, '$user_name', '$password', '$email')";
        pdo_execute($sql);
    }
    
    
    
?>