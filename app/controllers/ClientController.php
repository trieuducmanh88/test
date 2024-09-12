<?php 
    session_start();
    ob_start();

    include './app/views/Client/header.php';

    include 'app/models/pdo.php';
    include 'app/models/ClientModel/home.php';
   
    if(isset($_GET['act'])){
        $act = $_GET['act'];

        switch($act){
            case 'ChitietSP':
                include './app/views/Client/ChiTietSanPham.php';
                break;

            case 'logIn':
                include './app/views/Client/LogIn.php';
                break;
            case 'checkLogIn':
                if(isset($_POST['btn'])){
                    $gmail = $_POST['email'];
                    $password = $_POST['password'];
                    $result = checkLogIn($gmail,$password);
                    // var_dump($result);
                    if($result){
                        $thongbao_dangnhap = 'Đăng nhập thành công ';
                        $_SESSION['curent_user'] = $result;
                        // var_dump($_SESSION['curent_user']);
                    }else{
                        $thongbao_dangnhap = 'Sai tài khoản hoặc mật khẩu';
                    }
                }
                include './app/views/Client/LogIn.php';
                break;
            
            case 'register':
                if(isset($_POST['btn'])){
                    $user_name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $result = register($user_name ,$password,$email);
                    if(!$result){
                        $thongbao = 'Đăng ký tài khoản thành công';
                    }else{
                        $thongbao = 'Đăng ký tài khoản không hợp lệ';
                    }
                    // var_dump($result);
                }
                include './app/views/Client/LogIn.php';
                break;
            
            case 'myAccount':
                include './app/views/Client/myAcount.php';
                break;
            case 'logOut':
                if(isset($_SESSION['curent_user'])){
                    unset($_SESSION['curent_user']);
                    $thongbao = 'Đăng xuất thành công';
                }
                include './app/views/Client/home.php';
                break;
            case 'updateUser':
                if(isset($_POST['btn'])){
                    prin_r($_FILES['image']);
                    echo 'Uploadding';
                    exit();
                };
                include './app/views/Client/myAcount.php';
                break;
            


        }
    } else {
        include './app/views/Client/home.php';
    }

    include './app/views/Client/footer.php';
    ob_end_flush();
?>
