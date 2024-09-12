<!-- Main content -->
<section class="content_add" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
        <div class="flex-grow-1 mb-3">
            <h4 class="fs-18 fw-bold text-primary text-center m-0">✏️ Edit User ✏️</h4>
        </div>
        <div class="row">
            <div>
                <?php if(isset($thongbao)) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $thongbao ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12">
                <div class="card border-0" style="border-radius: 10px; background-color: #ffffff;">
                    <div class="card-header" style="background-color: #e9ecef;">
                        <h5 class="card-title fw-semibold text-secondary">👤 User Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="AdminController.php?act=updateUser&id=" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Username</label>
                                <input type="text" class="form-control shadow-sm" id="user_name" name="user_name" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control shadow-sm" id="email" name="email" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-sm" id="password" name="password" placeholder="Leave blank to keep current password">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select shadow-sm" id="role" name="role" required>
                                    <!-- <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                    <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option> -->
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="img_user" class="form-label">User Image</label>
                                <input type="file" class="form-control shadow-sm" id="img_user" name="img_user">
                                <?php if (!empty($user['img_user'])): ?>
                                    <div class="mt-2">
                                        <img src="<?= $user['img_user'] ?>" alt="User Image" class="img-thumbnail" width="100">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg w-100 mt-3" style="background-color: #ff9800; border-color: #ff9800;">
                                <i class="mdi mdi-pencil-outline"></i> Update User
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
