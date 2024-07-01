<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--------- bootstrap CSS link ---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
     crossorigin="anonymous">

     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!--css file link add-->
<link rel="stylesheet" href="../style.css">
<style>
    .admin_image{
        width: 100px;
        object-fit: contain;
}
</style>
</head>
<body>
<!--nav bar-->
<div class="container-fluid p-0">
<!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <img src="../images/logo.png" alt="" class= "logo">
            <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
            </ul>
            </nav>
        </div>
    </nav>
    <!--second child-->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
<!--third child-->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center ">
        <div class="p-3">
            <a href="#"><img src="../images/logo.png" alt="" class="admin_image"></a>
            <p class="text-light text-center">Nitin Arya</p>
        </div>
<!------ button*10>a.nav-link.text-lights.bg-info.my-1------>
        <div class="button text-center">
            <button class="rounded"><a href="insert_product.php" class="nav-link text-light bg-info m-1 p-1 rounded ">Insert Products</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">View Products</a></button>
            <button class="rounded"><a href="index.php?insert_category" class="nav-link text-light bg-info m-1 p-1 rounded">Insert Categories</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">View Categories</a></button>
            <button class="rounded"><a href="index.php?insert_brand" class="nav-link text-light bg-info m-1 p-1 rounded">Insert Brands</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">View Brands</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">All Orders</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">All Payments</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">List Users</a></button>
            <button class="rounded"><a href="" class="nav-link text-light bg-info m-1 p-1 rounded">Logout</a></button>
        </div>
    </div>
</div>


<!-- fourth child -->
<div class="container my-3">
    <?php 
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    ?>
</div>

 <!-- Last child -->
<div class="bg-body-tertiary p-3 text-center">
  <p>All Rights reserved © Wrapco Store - Designed by Nitin Arya-20223166 </p>
 </div>
</div>

<!-------------------------- bootstrap js link --------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>