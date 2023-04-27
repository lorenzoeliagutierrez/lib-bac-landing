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
             <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-body">
              <div class="card-header">
            <h2 class="text-center display-4">Search E-Book</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form method="GET" class="form-horizontal">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Search for Title, Author, Call Number..." name="search">
                            <div class="input-group-append">
                                <button name="submit" class="btn btn-lg btn-info">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
           <div class="box">
                <div class="table-responsive">
                    <table s id="example1" class="table table-bordered table-hover">
                        <thead style="background: #FFFF">
                    <tr>
                        <th>Book Image</th>
                          <th>Acc No./Bcode</th>
                          <th>Call Number</th>
                          <th>Author/s</th>
                          <th>Title</th>
                          <th>Editor</th>
                          <th>Edition</th>
                          <th>Place of Publ.</th>
                          <th>Publisher</th>
                          <th>Date of Publ.</th>
                          <th>No. of Pages</th>
                          <th>Series</th>
                          <th>Notation 1</th>
                          <th>Notation 2</th>
                          <th>ISBN No.</th>
                          <th>ISSN No.</th>
                          <th>Subject</th>
                          <th>Abstract</th>
                          <th>Moa</th>
                          <th>Remarks</th>
                          <th>Action</th>
                                    <?php if($_SESSION['role'] == "Administrator"){ 
                                       echo ' ';
                                    } ?>
                                </tr>
                            </thead>
                            <tbody>
        <?php
                            if (isset($_GET['submit'])) {

                              $return_query = mysqli_query($con, "SELECT * from ebooks
                              LEFT JOIN tbl_moa USING(moa_id)
                              LEFT JOIN tbl_publishers USING(publisher_id)
                              LEFT JOIN tbl_placeofpublications USING(pop_id)
                              WHERE call_no LIKE '%$_GET[search]%' OR title LIKE '%$_GET[search]%' OR subject LIKE '%$_GET[search]%' OR author LIKE '%$_GET[search]%' OR accession_no LIKE '%$_GET[search]%' OR remarks LIKE '%$_GET[search]%'") or die(mysqli_error($con));
                              while ($row = mysqli_fetch_array($return_query)) {
                                  $id = $row['ebook_id'];
                        ?>

                            <tr>
 <td><?php echo (empty($row['ebook_img'])) ? '<img src="../../images/default_book.jpg" class="zoom" alt="ebook">' : '<img src="data:image/jpeg;base64,' . base64_encode($row['ebook_img']) . '"
                          class="zoom" style="height:80px; width="80px"; object-fit:cover;" alt="ebook">' ?></td></div>


                        <td><?php echo $row['accession_no'];?></td>
                        <td style="word-wrap: break-word; width: 10em;"><?php echo $row['call_no']; ?></td>
                        <td style="word-wrap: break-word; width: 10em;"><?php echo $row['author']; ?></td>
                        <td style="word-wrap: break-word; width: 10em;"><?php echo $row['title']; ?></td>
                        <td><?php echo $row['editor']; ?></td>   
                        <td><?php echo $row['edition']; ?></td>
                        <td><?php echo $row['placeofpublication']; ?></td> 
                        <td><?php echo $row['publisher']; ?></td> 
                        <td><?php echo $row['date_of_publ']; ?></td> 
                        <td><?php echo $row['page_no']; ?></td> 
                        <td><?php echo $row['series']; ?></td> 
                        <td><?php echo $row['notation1']; ?></td> 
                        <td><?php echo $row['notation2']; ?></td> 
                        <td><?php echo $row['isbn_no']; ?></td> 
                        <td><?php echo $row['issn_no']; ?></td> 
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['abstract']; ?></td> 
                        <td><?php echo $row['moa']; ?></td>
                        <td><?php echo $row['remarks']; ?></td>
                        <td>                
                             <a class="btn btn-info" for="ViewAdmin" href="userviewebooks.php<?php echo '?ebook_id='.$id; ?>">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td> 
                            <?php } ?>
                            </tr>
                            <?php } ?>
                            
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>.
        </div>
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
