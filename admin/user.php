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
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <h3 class="card-title">User</h3>
          <div class="card-tools">
          <a href="user-add.php" class="btn btn-info btn-sm"> Add </a>
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
                          Name
                      </th>
                      <th style="width: 10%">
                          Username
                      </th>
                      <th style="width: 10%">
                          Password
                      </th>
                      <th style="width: 10%">
                          Phone
                      </th>
                      <th style="width: 20%">
                        Email
                      </th>
                      <th style="width: 10%">
                        Role
                      </th>
                      <th style="width: 20%">
                        Balance
                      </th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach($getallUser as $values): ?>
                  <tr>
                      <td>
                          <?php echo $values['id_user'] ?>
                      </td>
                      <td>
                          <?php echo $values['name'] ?>
                      </td>
                      <td>
                          <?php echo $values['username'] ?>
                      </td>
                      
                      <td>
                          <?php echo $values['password'] ?>
                      </td>
                      <td>
                          <?php echo $values['phone'] ?>
                      </td>
                      <td>
                          <?php echo $values['email'] ?>
                      </td>
                      <td>
                          <?php echo $values['role'] ?>
                      </td>
                      <td>
                          <?php echo $values['balance'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $values['id_user']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="product-del.php?id= <?php echo $values['id_user'] ?>">
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