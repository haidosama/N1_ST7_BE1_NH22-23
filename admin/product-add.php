<?php
include "header.php";
include "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="add.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="inputName">Price</label>
                <input type="text" id="inputName" class="form-control" name="price">
              </div>
              <div class="form-group">
                <label for="inputName">Image</label>
                <input type="file" id="inputName" class="form-control" name="image">
              </div>

              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="des"></textarea>
              </div>

              <div class="form-group">
                <label for="inputStatus">Manufacture</label>
                <select id="inputStatus" class="form-control custom-select" name="manu_id">
                  <option selected disabled>Select one</option>
                  <?php $getAllManufactures = $manu->getAllManufactures();
                  foreach ($getAllManufactures as $value): ?>
                    <option value="<?php echo $value['manu_id'] ?>">
                      <?php echo $value['manu_name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select id="inputStatus" class="form-control custom-select" name="type_id">
                  <option selected disabled>Select one</option>
                  <?php $getAllProtype = $type->getAllProtype(); foreach ($getAllProtype as $value): ?>
                    <option value="<?php echo $value['type_id'] ?>">
                      <?php echo $value['type_name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Feature</label>
                <input type="checkbox" id="inputName" class="form-control" name="feature">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="row">
        <div class="col-12">
          <a href="index.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right" name="submit_product">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "footer.php"; ?>