<?php

@include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Select</title>

   <!-- font awesome cdn link  -->
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">-->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">
</head>

<style>
h2 {text-align: center;}
h3 {text-align: center;}
</style>

<body id="page-top">
<?php include 'header.php'; ?>
    
    <!-- Category Grid-->
        <section class="page-section bg-light" id="category">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Category</h2>
                    <h3 class="section-subheading text-muted">List of category foods</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="category-item">
                            <a class="category-link" data-bs-toggle="modal" href="products.php">
                                <div class="category-hover">
                                    <div class="category-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/category/1.jpg" alt="..." />
                            </a>
                            <div class="category-caption">
                                <div class="category-caption-heading">Western</div>
                                <div class="category-caption-subheading text-muted">The western food</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="category-item">
                            <a class="category-link" data-bs-toggle="modal" href="products1.php">
                                <div class="category-hover">
                                    <div class="category-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/category/2.jpg" alt="..." />
                            </a>
                            <div class="category-caption">
                                <div class="category-caption-heading">Asian</div>
                                <div class="category-caption-subheading text-muted">The asian food</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="category-item">
                            <a class="category-link" data-bs-toggle="modal" href="products2.php">
                                <div class="category-hover">
                                    <div class="category-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/category/3.jpg" alt="..." />
                            </a>
                            <div class="category-caption">
                                <div class="category-caption-heading">Beverages</div>
                                <div class="category-caption-subheading text-muted">The variety of drinks</div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 4-->
                        <div class="category-item">
                            <a class="category-link" data-bs-toggle="modal" href="products3.php">
                                <div class="category-hover">
                                    <div class="category-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/category/4.jpg" alt="..." />
                            </a>
                            <div class="category-caption">
                                <div class="category-caption-heading">Dessert</div>
                                <div class="category-caption-subheading text-muted">The variety of dessert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php';?>
</body>
</html>