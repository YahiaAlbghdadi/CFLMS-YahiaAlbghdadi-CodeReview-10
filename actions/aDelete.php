<?php 
require_once 'DbConnection.php';

if  ($_POST) {
   $id = $_POST['id'];
   $image = $_POST['image'];
   ($image =="product.png")?: unlink("../Images/$image" );

   $DbData = "DELETE FROM data WHERE id = {$id}";
   if ($link->query($DbData) === TRUE) {
       $class = "success";
       $message = "Successfully Deleted!";
   } else {
       $class = "danger";
       $message = "The entry was not deleted due to: <br>" . $link->error;
   }
   $link->close();
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>Delete</title>
   </head>
   <?php require_once '../compos/navbar.php' ?>

   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Delete request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p>
                   <?=$message;?>
                </p>
               <a href ='../index.php'><button class= "btn btn-success" type='button'>back</button></a>
            </div>
       </div >
   </body>
</html>