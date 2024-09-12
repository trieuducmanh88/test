<!-- Main content -->
<section class="content_add" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
        <div class="flex-grow-1 mb-3">
            <h4 class="fs-18 fw-bold text-primary text-center m-0">🚀 Add New Category 🚀</h4>
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
                        <h5 class="card-title fw-semibold text-secondary">👤 Category Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="AdminController.php?act=storeUser" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Name Category</label>
                                <input type="text" class="form-control shadow-sm" id="user_name" name="user_name" placeholder="Enter username" required>
                            </div>
                         
                            <div class="mb-3">
                                <label for="img_user" class="form-label">Image Category</label>
                                <input type="file" class="form-control shadow-sm" id="img_user" name="img_user">
                            </div>
                            <button  type="submit" class="btn btn-primary btn-lg w-100 mt-3" style="background-color: #007bff; border-color: #007bff;">
                                <i class="mdi mdi-plus-circle-outline"></i> Add Category
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
