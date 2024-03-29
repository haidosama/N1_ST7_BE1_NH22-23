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
            <h1>Manufactures</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Manufactures</li>
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
          <h3 class="card-title">Manufactures</h3>
          
          <div class="card-tools">
          <a href="manu-add.php" class="btn btn-info btn-sm"> Add </a>
          
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
              <?php foreach($getAllManu as $values): ?>
                  <tr>
                      <td>
                          <?php echo $values['manu_id'] ?>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  width=100px src="../img/<?php echo $values['manu_image'] ?>">
                              </li>
                          </ul>
                      </td>
                      <td>
                          <a>
                          <?php echo $values['manu_name'] ?>
                          </a>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="manu-edit.php?id=<?php echo $values['manu_id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="manu-del.php?id=<?php echo $values['manu_id'] ?>">
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