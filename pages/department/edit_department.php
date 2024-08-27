<?php 
ob_start();
?>

<?php $ID=$_GET['department_id']; ?>

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
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- jquery validation -->
            <div class="card card-body">
              <div class="card-header">
                <h3 class="col-xs-6"><span class="fa fa-edit"></span> UPDATE DEPARTMENT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                  
<?php
  $query=mysqli_query($con,"select * from department where department_id='$ID'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
  ?>  
                        <div class="box">
                            <div class="box-body">
                        <!-- content starts here -->
                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="col-md-8 col-md-offset-8">
                                <div class="form-group">
                                    <label class="control-label" for="tbl_subjects">Department Name <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="">
                                    <?php echo '
                                        <input type="text" name="moa" id="tbl_subjects" required="required" class="form-control" value="'.htmlspecialchars($row['department']).'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div>
                                        <!-- <a href="index.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a> -->
                                        <button style="float: right;" type="submit" name="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i> Save</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                            
                            
                            <?php   
                            include ('../../includes/conn.php');
                            if (isset($_POST['submit'])) {
                                $subject = mysqli_real_escape_string($con,$_POST['moa']);
                            
                                    
                            //      $admin_type = $_POST['admin_type'];
                    
                    $result=mysqli_query($con,"select * from department WHERE department='$subject' ") or die (mySQL_error());
                    $row=mysqli_num_rows($result);
                    if ($row > 0)
                    {
                    echo "<script>alert('Department already Exist!'); window.location='department.php'</script>";
                    }
                    else
                    {       
                        mysqli_query($con,"UPDATE department SET department = '$subject' where department_id = $ID")or die(mysql_error());
                        echo "<script>alert('Department successfully updated!'); window.location='department.php'</script>";
                    }
                            }       
                                ?>


 <ul class="nav navbar-right panel_toolbox">
                            <li class="col-xs-2">
                            <a href="department.php" style="background:none;">
                            <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                            </li>
                        </ul>
                        
                        <!-- content ends here -->

    <!-- Main content -->
    <section class="content">
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
