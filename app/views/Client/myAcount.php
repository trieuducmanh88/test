<?php 
    if (isset($_SESSION['curent_user'])) {
        // prin_r($_SESSION['curent_user']);
    }
?>

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">   
        <div class="account_dashboard">
            <div class="row">
                <?php if(isset($thongbao)) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <?= $thongbao ?>
                    </div>
                <?php endif; ?>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="tab-pane" id="account-details">
                        <h3>Tài khoản: <?=  $_SESSION['curent_user'][0]['user_name'] ?></h3>
                        <div class="login">
                            <div class="login_form_container">
                                <div class="account_login_form">
    <form action="index.php?act=updateUser" method="POST" enctype="multipart/form-data">
        <label>Image</label>
        <input multiple type="file" name="image[]"> <br>
        <img src="<?= './public/uploads/'  ?>" alt="Ảnh đại diện"> <br>
        <img src="./public/uploads/adi1.avif" alt="" width="200px"><br>

        <label>User name</label>
        <input type="text" name="user_name" value="<?=   $_SESSION['curent_user'][0]['user_name']  ?>">

        <label>Email</label>
        <input type="text" name="email" value="<?=  $_SESSION['curent_user'][0]['email'] ?>">

        <label>Phone Number</label>
        <input type="number" name="phone_number" value="0<?=  $_SESSION['curent_user'][0]['phone_number'] ?>">

        <label>Address</label>
        <input type="text" name="address" value="<?= isset($_SESSION['curent_user'][0]['address']) ? $_SESSION['curent_user'][0]['address'] : 'No address'  ?>" >

        <div class="save_button primary_btn default_button">
            <button name="btn" type="submit">Save</button>
            <input type="hidden" name="id_user" value="<?= $_SESSION['curent_user'][0]['id_user']  ?>">
            <input type="hidden" name="anh_cu" value="<?= $image_user ?>">
        </div>
    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>        	
</section>
<!-- my account end -->
