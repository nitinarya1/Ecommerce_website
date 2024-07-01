<!-- connect files -->
<?php 
include('includes/connect.php');
include('functions/common_function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wrapco Store</title>
    <!-------------------------- bootstrap CSS link --------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
     crossorigin="anonymous">
    <!-----------------------font awesome----------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-----------CSS file linking---------------->
     <link rel="stylesheet" href="style.css">

</head>
<body>
     <!----------------------------------------- navbar ------------------------------------------------->
     <div class="container-fluid p-0">
          <!-----------------------------------first child-------------------------->
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" >
    <img src="./images/logo.png" alt="" class="logo" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price 100/-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" methon="get">
        <input class="form-control me-2" type="search"
         placeholder="Search" aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn
       btn-outline-info" name="search_data_product" >
      </form>
    </div>
  </div>
</nav>

<!--second child welcome and login etc-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>

</nav>
<!-- third child -->
 <div class="bg-light">
<h3 class="text-center">Wrapco Store</h3>
<p class="text-center">Wrapco: Your Device, Your Style, Your Statement.</p>

 </div>

  <!--fourth child-->
<div class="row px-1">
  <div class="col-md-10">
  <!--products-->
  <div class="row">
<!-- fetching product -->
 <?php
//  calling function

getproducts();
get_unique_categories();
get_unique_brands();
 
 ?>

<!-- row end -->
</div >
<!-- coloum end -->
</div >
  <div class=" rounded col md-2 bg-secondary p-0">
    <!--Brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">

      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Availble Brands</h4></a>
      </li>

      <?php
      
      getbrands();

      
?>
     
    </ul>
     <!--display category-->
     <ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-info">
  <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>
<?php
      
      getcategories();
      ?>
</ul>
  <!--side nav bar--> 
  <!--Brand to be display-->
  </div>
</div>



 <!---Last child footer-->
 <!-- include footer -->
 <?php
 include("./includes/footer.php")
 ?>
     </div>








    <!-------------------Bootstrap js link------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>