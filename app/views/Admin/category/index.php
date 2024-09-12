<!-- Main content -->
<section class="content" style="background-color: #f5f5f5; padding: 20px; border-radius: 8px;">
  <div class="container-fluid">
    <div class="flex-grow-1 mb-3">
      <h4 class="fs-18 fw-semibold m-0 text-primary text-center">📋 Manage Category List 📋</h4>
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
        <div class="card border-0 shadow-sm" style="border-radius: 10px;">
          <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #e9ecef;">
            <h5 class="card-title m-0">Category Management</h5>
            <a class="btn btn-success" href="AdminController.php?act=createCategory">
              <i class="mdi mdi-plus-box-outline"></i> Add Category
            </a>
          </div>
          <div class="card-body">
            <table id="userTable" class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Username</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach($loadAllCate as $items) {
                    extract($items);
                    echo '
                    <tr>
                      <td>'.$idCate.'</td>
                      <td><img src="'.$imgCate.'" alt="User Image" class="img-thumbnail" width="50" style="border-radius: 50%;"></td>
                      <td>'.$nameCate.'</td>
                      <td>
                        <div class="btn-group" role="group">
                          <a href="AdminController.php?act=editUser&id='.$idCate.'" class="btn btn-outline-secondary btn-sm">
                            <i class="mdi mdi-pencil"></i>
                          </a>
                          <a href="AdminController.php?act=destroyUser&id='.$idCate.'" onclick="return confirm(\'Are you sure you want to delete?\')" class="btn btn-outline-danger btn-sm">
                            <i class="mdi mdi-delete"></i>
                          </a>
                          <a href="AdminController.php?act=showUser&id='.$idCate.'" class="btn btn-outline-info btn-sm">
                            <i class="mdi mdi-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    ';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
