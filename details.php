<?php 
require_once 'actions/DbConnection.php';

if  ($_GET['id']) {
   $id = $_GET['id'];
   $DbData = "SELECT * FROM data WHERE id = {$id}" ;
   $linkedData = $link->query($DbData);
   $detailsQ = $linkedData->fetch_assoc();
   if ($linkedData->num_rows == 1) {
    $title = $detailsQ['title'];
    $author = $detailsQ['author'];
    $publishDate = $detailsQ['publishDate'];
    $publisher = $detailsQ['publisher'];
    $type = $detailsQ['type'];
    $status = $detailsQ['status'];
    $authorFirstName = $detailsQ['authorFirstName'];
    $authorLastName = $detailsQ['authorLastName'];
    $publisherName = $detailsQ['publisherName'];
    $publisherAddress = $detailsQ['publisherAddress'];
    $publisherSize = $detailsQ['publisherSize'];
    $image = $detailsQ['image'];
    $description = $detailsQ['description'];
    $ISBNCode = $detailsQ['ISBNCode'];
   } else {
       header("location: error.php");
   }
   $link->close();
} else {
   header( "location: error.php");
}  
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
       <title>Product Details</title>
       <?php require_once "compos/navbar.php" ?>
       <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 70% ;
           }    
           .img-thumbnail{
               width: 70px !important;
                height: 70px !important;
           }    
       </style>
   </head>
   <body>
       <div class="container text-center">
           <div class="row">
           <div class='card pt-2 book' style='width: 18rem;'>
        <img src='Images/<?php echo $image?>' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'><?php echo $title?></h5>
          <p class='card-text'><?php echo $description?></p>
        </div>
        <ul class='list-group list-group-flush'>
        <li class='list-group-item'>Author: <?php echo $author?></li>
        <li class='list-group-item'>Publisher: <?php echo $publisher?></li>
        <li class='list-group-item'>Type: <?php echo $type?></li>
        <li class='list-group-item'>Publisher Name: <?php echo $publisherName?></li>
          <li class='list-group-item'>Publisher Address: <?php echo $publisherAddress?></li>
          <li class='list-group-item'><?php echo $status?></li>
        </ul>
        <div class='card-body d-flex justify-content-around'>
          <a href='' class='text-info text-decoration-none '>Buy Product</a>
          <a href='index.php' class='text-danger text-decoration-none'>Back</a>
        </div>
      </div>
           </div>
       </div>
       <style>
      .book{
        margin: 10px auto;
      }
    </style>
   </body>
</html>