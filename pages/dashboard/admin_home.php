<?php 
include "../../includes/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
  include "../../includes/header.php";
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php 
include "../../includes/navbar.php";
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

<?php 
include "../../includes/sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
              $result = mysqli_query($con,"SELECT * FROM user");
                   $num_rows = mysqli_num_rows($result)
               ?>
             <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="user.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <?php
          $result = mysqli_query($con,"SELECT * FROM book");
             $num_rows = mysqli_num_rows($result);
            ?>
            <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total Books</p>
              </div>
              <div class="icon">
                  <i class="fa fa-book"></i>
              </div>
              <a href="book.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
               <?php
          $result = mysqli_query($con,"SELECT * FROM ebooks");
             $num_rows = mysqli_num_rows($result);
            ?>
            <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total E-Books</p>
              </div>
              <div class="icon">
                  <i class="fa fa-book"></i>
              </div>
              <a href="search_ebook.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <?php
          $result = mysqli_query($con,"SELECT * FROM borrow_book");
             $num_rows = mysqli_num_rows($result);
            ?>
            <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total Borrowed Books</p>
              </div>
              <div class="icon">
                  <i class="fa fa-book"></i>
              </div>
              <a href="borrowed_book.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


              <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
              <div class="inner">
               <?php
          $result = mysqli_query($con,"SELECT * FROM archive");
             $num_rows = mysqli_num_rows($result);
            ?>
            <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total Archived Books</p>
              </div>
              <div class="icon">
                  <i class="fa fa-book"></i>
              </div>
              <a href="inactive_records.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>



              <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
               <?php
          $result = mysqli_query($con,"SELECT * FROM special_collection");
             $num_rows = mysqli_num_rows($result);
            ?>
            <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total Archived Special Collection</p>
              </div>
              <div class="icon">
                  <i class="fa fa-book"></i>
              </div>
              <a href="inactive_records.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


                    <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
               <?php
          $result = mysqli_query($con,"SELECT * FROM special_collection");
             $num_rows = mysqli_num_rows($result);
            ?>
            <div class="small-box-footer"><?php echo $num_rows; ?></div>
                <p>Total Special Collection</p>
              </div>
              <div class="icon">
                  <i class="fa fa-book"></i>
              </div>
              <a href="thesis.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
                   
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
 <?php 
include "../../includes/footer.php";
 ?>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<?php
include "../../includes/script.php";
?>


</body>
</html>
