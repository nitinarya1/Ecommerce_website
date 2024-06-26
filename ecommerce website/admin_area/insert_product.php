<?php
include('../includes/connect.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
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
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Product</h1>
        <!-- form -->
         <form action="" method="post" enctype="multipart/form-data">
            <!-- title of the item -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Please Enter Your Product Title" autocomplete="off" required="required">
            </div>
            <!-- discrption of the item -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="descrption" class="form-label">Product Descrption</label>
                <input type="text" name="descrption" id="descrption" class="form-control" 
                placeholder="Please Enter Your Product Descrption" autocomplete="off" required="required">
            </div>
            <!-- keyword for product -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product Keywords</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" 
                placeholder="Enter Keywords For Your Product" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_categories" id="" class="form-select">
                <option value="">Select Category </option>
                <?php
                     $select_query="Select * from `categories`";
                     $result_query=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";


                    

                     }


                ?>
              
               </select>
            </div>

            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" id="" class="form-select">
                <option value="">Select Brand </option>
                <?php
                     $select_query="Select * from `brands`";
                     $result_query=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";


                    

                     }


                ?>
               </select>
            </div>

            <!-- img-1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" 
                required="required">
            </div>

            <!-- img-2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" 
                required="required">
            </div>

            <!-- img-3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" 
                required="required">
            </div>

            <!-- img-4 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image4" class="form-label">Product Image 4</label>
                <input type="file" name="product_image4" id="product_image4" class="form-control" 
                required="required">
            </div>

            <!-- img-5 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image5" class="form-label">Product Image 5</label>
                <input type="file" name="product_image5" id="product_image5" class="form-control" 
                required="required">
            </div>

             <!-- Pricing of product -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter Product Price-₹" autocomplete="off" required="required">
            </div>

            <!-- Pricing of product -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-primary mb-3 px-3" value="Insert Product">
            </div>

            

        
        </form>
    </div>
    
</body>
</html>