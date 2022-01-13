<?php 
require_once 'actions/DbConnection.php';

if  ($_GET['id']) {
   $id = $_GET['id'];
   $DbData = "SELECT * FROM data WHERE id = {$id}" ;
   $linkedData = $link->query($DbData);
   $deleteQ = $linkedData->fetch_assoc();
   if ($linkedData->num_rows == 1) {
       $title = $deleteQ['title'];
       $publisher = $deleteQ['publisher'];
       $image = $deleteQ['image'];
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
       <title>Delete Product</title>
       <?php require_once 'compos/navbar.php' ?>
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
       <fieldset>
           <legend class='h2 mb-3'> Delete request <img class='img-thumbnail rounded-circle'  src='Images/<?php echo $image ?>' alt="<?php echo $title ?>"></legend >
           <h5>You have selected the data below: </h5>
           <table class="table w-75 mt-3" >
               <tr>
                    <td><?php echo   $title?></td>
                </tr>
           </table>

           <h3  class="mb-4">Do you really want to delete this product?</h3>
           <form action ="actions/aDelete.php"  method="post">
               <input type="hidden"  name="id" value ="<?php echo $id ?>" />
               <input type="hidden"  name="image"  value="<?php echo $image ?>" />
               <button class="btn btn-danger"  type="submit"> Yes, delete it! </button>
                <a href="index.php"><button class="btn btn-warning"  type="button"> No, go back! </button></a>
           </form>
       </fieldset>
   </body>
</html>