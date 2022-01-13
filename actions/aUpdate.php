<?php
require_once 'DbConnection.php';
require_once  'fileUpload.php';

if ($_POST) {    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publishDate = $_POST['publishDate'];
    $publisherName = $_POST['publisherName'];
    $type = $_POST['type'];
    $publisher = $_POST['publisher'];
    $status = $_POST['status'];
    $authorFirstName = $_POST['authorFirstName'];
    $authorLastName = $_POST['authorLastName'];
    $publisherAddress = $_POST['publisherAddress'];
    $publisherSize = $_POST['publisherSize'];
    $description = $_POST['description'];
    $ISBNCode = $_POST['ISBNCode'];
    $id = $_POST['id'];
    $image = fileUpload($_FILES['image']);  
    $uploadError = '';

   if ($image->error===0){
       ($_POST["image"]=="product.png")?: unlink("../Images/$_POST[image]");          
       $updateQ = "UPDATE data SET title = '$title', price = $price, image = '$image->fileName' WHERE id = {$id}";
   }else{
       $updateQ = "UPDATE  data  SET author ='$author', publishDate =$publishDate, publisher ='$publisher', type ='$type', status ='$status', authorFirstName ='$authorFirstName', authorLastName ='$authorLastName', publisherName ='$publisherName', publisherAddress ='$publisherAddress', publisherSize ='$publisherSize', title ='$title', description ='$description', ISBNCode =$ISBNCode WHERE id = {$id}";
   }    
   if ($link->query($updateQ) === TRUE) {
       $class = "success";
       $message = "The record was successfully updated";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while updating record : <br>" . $link->error;
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
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
       <title>Update</title>
   </head>
   <?php require_once '../compos/navbar.php' ?>

   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Update request response</h1>
           </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>' ><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success"  type='button'>Home</button></a>
            </div>
       </div >
   </body>
</html>