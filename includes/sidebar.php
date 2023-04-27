<?php echo '
';
echo '
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>SFAC</b> Bacoor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">MAIN NAVIGATION</li>';

        if($_SESSION['role'] == "Administrator"){
                            echo '
          <li class="nav-item menu-open">
            <a href="admin_home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Home
              </p>
            </a>

               <li class="nav-item">
            <a href="../dashboard/search_book.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Search Book
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../dashboard/search_ebook.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Search E-Book
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Special Collection
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/thesis.php" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Search Special Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/add_thesis.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Special Collection</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../dashboard/borrow_collection.php" class="nav-link">
                  <i class="fas fa-shopping-cart nav-icon"></i>
                  <p> Special Collection Checkout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/add_category.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p> Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/add_course.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Courses</p>
                </a>
              </li>
            </ul>
          </li>

        <li class="nav-header">USER MAINTENANCE</li>
                  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/user.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Search User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/add_user.php" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-header">GUEST MAINTENANCE</li>
                  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Guest
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/guest.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Search Guest</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/add_guest.php" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add Guest</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-header">BOOK MAINTENANCE</li>
                  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Books & E-Books
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/book.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Book</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../dashboard/ebook.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add E-Book</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../dashboard/moa.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Mode Of Acquisition</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="../dashboard/publisher.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Publisher</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="../dashboard/pop.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Place of Publication</p>
                </a>
              </li>
            </ul>
          </li>

              
            <li class="nav-header">LIBRARY SERVICES</li>
                  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Borrowing Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/borrow.php" class="nav-link">
                  <i class="fas fa-shopping-cart nav-icon"></i>
                  <p>Reader Check-out</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/settings.php" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
            </ul>
          </li>


            <li class="nav-header">SUMMARY REPORTS</li>
           <li class="nav-item">
            <a href="../dashboard/borrowed_book.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Borrowed Books
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../dashboard/returned_book.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Returned Books
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Utilization Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/utilization_record.php" class="nav-link">
                  <i class="fas fa-check nav-icon"></i>
                  <p>Active Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/inactive_records.php" class="nav-link">
                  <i class="fas fa-times nav-icon"></i>
                  <p>Inactive Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/inventory.php" class="nav-link">
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Inventory</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Archives
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/archives.php" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Inactive Books</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/arc_thesis.php" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Inactive Collection</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-header">DATABASE MAINTENANCE</li>
           <li class="nav-item">
            <a href="../dashboard/backup.php" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                 Backup Database
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../dashboard/restore.php" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                  Restore Database
              </p>
            </a>
          </li>';
}
 elseif($_SESSION['role'] == "Student"){
                            echo '
          <li class="nav-item menu-open">
            <a href="user_home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Home
              </p>
            </a>

          <li class="nav-item">
            <a href="../dashboard/search_book.php" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                  Search Book
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="../dashboard/search_user_ebook.php" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                  Search E-Book
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../dashboard/thesis.php" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                  Search Special Collection
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../dashboard/archives.php" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                  Search Archived Book
              </p>
            </a>
          </li>


           <li class="nav-item">
            <a href="userbook.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Book List
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="userebook.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  E-Book List
              </p>
            </a>
          </li>


           <li class="nav-item">
            <a href="../dashboard/userborrow.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Borrowed Books
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../dashboard/userhistory.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                 Borrow History
              </p>
            </a>
          </li>';
}
 elseif($_SESSION['role'] == "Super Admin"){
                            echo '
          <li class="nav-item menu-open">
            <a href="super_admin_home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>

          <li class="nav-item">
            <a href="../dashboard/search_book.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Search Book
              </p>
            </a>
          </li>

        <li class="nav-header">LIBRARIAN MAINTENANCE</li>
           <li class="nav-item">
            <a href="../dashboard/add_librarian.php" class="nav-link">
              <i class="nav-icon fa fa-user-plus"></i>
              <p>
                  Add Librarians
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../dashboard/librarian_list.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                 List of Librarians
              </p>
            </a>
          </li>

            <li class="nav-header">DATABASE MAINTENANCE</li>
           <li class="nav-item">
            <a href="../dashboard/backup.php" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                  Backup Database
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="../dashboard/restore.php" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
                 Restore Database
              </p>
            </a>
          </li>';

}
 elseif($_SESSION['role'] == "Guest"){
                            echo '
         <li class="nav-item menu-open">
            <a href="guest_home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>

           <li class="nav-item">
            <a href="guestbook.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Book List
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="guestebook.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  E-Book List
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="guest_borrowed_list.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Borrowed Book List
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="guest_returned_list.php" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                  Returned Book List
              </p>
            </a>
          </li>

            ';
       }
      echo '  
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>';

  ?>
