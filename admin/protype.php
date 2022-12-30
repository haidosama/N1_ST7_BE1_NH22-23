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
            <h1>Protypes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Protypes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>
          <div class="card-tools">
          <a href="protype-add.php" class="btn btn-info btn-sm"> Add </a>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                         Images
                      </th>
                      <th style="width: 30%">
                          Name
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach($getAllType as $values): ?>
                  <tr>
                      <td>
                          <?php echo $values['type_id'] ?>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  width=150px src="../img/<?php echo $values['type_image'] ?>">
                              </li>
                          </ul>
                      </td>
                      
                      <td>
                          <?php echo $values['type_name'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="protype-edit.php?id=<?php echo $values['type_id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="protype-del.php?id=<?php echo $values['type_id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach ; ?> 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>