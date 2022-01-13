<?php 
    require_once "actions/DbConnection.php";

    $table = "SELECT * FROM data";
    $dbData = mysqli_query($link, $table);
    $print = "";
    if(mysqli_num_rows($dbData) > 0){

    while($product = mysqli_fetch_assoc($dbData)){
      if($product['status'] === "available"){
        $product['status'] = "<span class='text-success fw-bold'>{$product['status']}</span>";
      }else{$product['status'] = "<span class='text-danger '>{$product['status']}</span>";

      };
        $print .= "
        <div class='card pt-2 book' style='width: 18rem;'>
        <a href='details.php?id={$product["id"]}'>
        <img src='Images/{$product['image']}' class='card-img-top' alt='...'>
        </a>
        <div class='card-body'>
          <h5 class='card-title'>{$product['title']}</h5>
          <p class='card-text text-secondary'>{$product['description']}</p>
        </div>
        <ul class='list-group list-group-flush'>
          <a class='list-group-item author' href='author.php?author={$product["author"]}'>Author: {$product['author']}</a>
          <li class='list-group-item'>Published:   {$product['publishDate']}</li>
          <li class='list-group-item'>{$product['status']}</li>
        </ul>
        <div class='card-body d-flex justify-content-around'>
          <a href='update.php?id={$product["id"]}' class='btns btn btn-info text-decoration-none '>Edit Product</a>
          <a href='delete.php?id={$product["id"]}' class='btn btn-danger text-decoration-none btns '>Delete Product</a>
        </div>
      </div>
        ";}

    }else{
        $print .= "No Products found";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR10</title>
</head>
<body>
    <?php require_once "compos/navbar.php" ?>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="Images/carousel1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="Images/carousel2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/carousel3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class=" text-center ">
        <p class="h1 text-dark m-5 fw-bold">OUR PRODUCTS</p>
        <div class="container ">
            <div class=" row">
            <?php echo $print ?>
        </div>
        </div>
    </div>
    <style>
      .book{
        margin: 10px auto;
      }
      .author:hover{
        transition: 0.2s;
        font-weight: bold;
        color: brown;
      }
      .btns{
        height: 60px;
        width: 90px;

      }
    </style>
  <?php require_once "compos/footer.php" ?>
</body>
</html>