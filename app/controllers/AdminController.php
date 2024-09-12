<?php 
    session_start();

    include '../views/Admin/header.php';
    include '../views/Admin/menuleft.php';
    include '../models/pdo.php';

   


    include '../models/AdminModel/user.php';
    include '../models/AdminModel/category.php';

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){

            case 'listUser':
                $list_taikhoan = listUser();
                include '../views/Admin/user/index.php';
                break;

            case 'createUser':
                include '../views/Admin/user/create.php';
                break;

                case 'editUser':
                    include '../views/Admin/user/edit.php';
                    break;
            // case 'destroytaikhoan':
            //     if(isset($_GET['id'])&& $_GET['id']>0){
            //         $id = $_GET['id'];
            //         destroy_taikhoan($id);
            //     };
            //     $list_taikhoan = load_user();
            //     include '../views/Admin/user/list.php';
            //     break;

            // case 'binhluan':
            //     $list_binhluan = loadAll_binhluan();
            //     include ('../views/Admin/binhluan/list.php');
            //     break;

            case 'listCate':
                $loadAllCate = loadAllCate();
                include '../views/Admin/category/index.php';
                break;  
            case 'createCategory':  
                include '../views/Admin/category/create.php';
                break;     
            
        };

    }
    else{
        include '../views/Admin/home_thongKe.php';
    }
    include '../views/Admin/footer.php';

     
?>