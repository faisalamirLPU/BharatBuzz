<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-golden">
   <div class="container">
     <a class="navbar-brand" href="index.php"><img src="images/logo2.png" height="50"></a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="index.php">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="about-us.php">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="index.php">News</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contact-us.php">Contact us</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="admin/">Admin</a>
         </li>
         <li class="nav-item">
           <!-- searchBar -->
           <form name="search" action="search.php" method="post">
             <div class="input-group">
               <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
               <span class="input-group-btn">
                 <button class="btn btn-secondary" type="submit">Go!</button>
               </span>
             </div>
           </form>
           <!-- /searchBar -->
         </li>
       </ul>
     </div>
   </div>
 </nav>

<!-- Categories Section -->
<div class="categories-container">
  <div class="categories">
    <?php 
      $query = mysqli_query($con, "SELECT id, CategoryName FROM tblcategory");
      while ($row = mysqli_fetch_array($query)) {
    ?>
      <a href="category.php?catid=<?php echo htmlentities($row['id']); ?>" class="category-item">
        <?php echo htmlentities($row['CategoryName']); ?>
      </a>
    <?php } ?>
  </div>
</div>

<!-- CSS -->
<style>
  .navbar {
    z-index: 1050; /* Ensure the navbar is above other content */
  }

  .navbar-collapse {
  z-index: 1060; /* Ensure the navbar menu is above the categories list */
}
  
  .categories-container {
    position: fixed;
    top: 55px; /* Height of the navbar, adjust if needed */
    left: 0;
    right: 0;
    overflow-x: auto;
    white-space: nowrap;
    background-color: #f2d355; /* Match your navbar color */
    padding: 10px 0;
    text-align: center;
    z-index: 1000; /* Ensure it stays above other content */
  }

  body {
    margin-top: 110px; /* Adjust based on the height of the navbar and categories section */
  }

  .categories {
    display: inline-block;
    margin-top: 20px;
  }

  .category-item {
    display: inline-block;
    padding: 10px 20px;
    color: #000; /* Link color */
    text-decoration: none;
    margin: 0 10px;
    background-color: #fff; /* Background color */
    border-radius: 4px; /* Optional: rounded corners */
  }

  .category-item:hover {
    background-color: #fac805; /* Hover effect */
    color: #fff; /* Hover text color */
  }

  /* navbar bg-color */

  .bg-golden {
    background-color: #facc16 !important; /* Golden color */
  }
  
  .navbar .nav-link {
    color: #fff; /* White text for visibility */
  }
  
  .navbar .nav-link:hover {
    color: #f1f1f1; /* Slightly lighter on hover */
  }

  /* nav link colour */

  .navbar .nav-link {
  color: #000 !important; /* Black text */
}

.navbar .nav-link:hover {
  color: #333 !important; /* Darker shade of black on hover */
}

  
</style>
