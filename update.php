<?php
require_once 'actions/DbConnection.php';

if  ($_GET['id']) {
   $id = $_GET['id'];
   $DbData = "SELECT * FROM data WHERE id = {$id}";
   $updateQ = $link->query($DbData);
   if ($updateQ->num_rows == 1) {
       $data = $updateQ->fetch_assoc();
       $title = $data['title'];
       $author = $data['author'];
       $publisherName = $data['publisherName'];
       $publishDate = $data['publishDate'];
       $publisher = $data['publisher'];
       $type = $data['type'];
       $status = $data['status'];
       $authorFirstName = $data['authorFirstName'];
       $authorLastName = $data['authorLastName'];
       $publisherAddress = $data['publisherAddress'];
       $publisherSize = $data['publisherSize'];
       $image = $data['image'];
       $description = $data['description'];
       $ISBNCode = $data['ISBNCode'];
   } else {
       header( "location: error.php");
   }
   $link->close();
} else {
   header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    
</head>
<body>
<?php require_once "compos/navbar.php" ?>
       <fieldset>

           <legend class='h2'> Update request <img class='img-thumbnail rounded-circle'  src='Images/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
           <form action ="actions/aUpdate.php"  method="post"  enctype="multipart/form-data">
                <table class="table">
                   <tr>
                       <th>Title</th>
                       <td><input class ="form-control" type="text"   name="title"  value="<?php echo $title ?>"   /></td>
                   </tr>
                   <tr>
                       <th>Author</th>
                        <td><input   class="form-control" type= "text" name="author" step="any"   value  ="<?php echo $author ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publish Date</th>
                        <td><input   class="form-control" type= "text" name="publishDate" step="any"   value  ="<?php echo $publishDate ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publisher</th>
                        <td><input   class="form-control" type= "text" name="publisher" step="any"   value  ="<?php echo $publisher ?>" /></td>
                   </tr>
                   <tr>
                       <th>Type</th>
                        <td><input class='form-control'  list="Type" value  ="<?php echo $type ?>" name="type" /></label>
                        <datalist  id="Type">
                        <option value="book">
                        <option value="CD">
                        <option value="DVD">
                        </datalist></td>
                   </tr>
                   <tr>
                       <th>Status</th>
                        <td><input class='form-control'  list="status" value  ="<?php echo $status ?>" name="status" /></label>
                        <datalist  id="status">
                        <option value="available">
                        <option value="reserved">
                        </datalist></td>
                   </tr>
                   <tr>
                       <th>Author First Name</th>
                        <td><input   class="form-control" type= "text" name="authorFirstName" step="any" value  ="<?php echo $authorFirstName ?>" /></td>
                   </tr>
                   <tr>
                       <th>Author Last Name</th>
                        <td><input   class="form-control" type= "text" name="authorLastName" step="any" value  ="<?php echo $authorLastName ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publisher Name</th>
                        <td><input   class="form-control" type= "text" name="publisherName" step="any" value  ="<?php echo $publisherName ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publisher Address</th>
                        <td><input   class="form-control" type= "text" name="publisherAddress" step="any" value  ="<?php echo $publisherAddress ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publisher Size</th>
                        <td><input class='form-control' list="size" name="publisherSize" /></label>
                        <datalist  id="size">
                        <option value="small">
                        <option value="big">
                        <option value="medium">
                        </datalist></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                        <td><input   class="form-control" type= "text" name="description" step="any" value  ="<?php echo $description ?>" /></td>
                   </tr>
                   <tr>
                       <th>ISBN Code</th>
                        <td><input   class="form-control" type= "number" name="ISBNCode" step="any"  value  ="<?php echo $ISBNCode ?>" /></td>
                   </tr>
                   <tr>
                       <th>Image</th >
                       <td><input class= "form-control" type="file"  name= "image" /></td>
                   </tr>
                   <tr>
                       <input type= "hidden"  name= "id"  value= "<?php echo $data['id'] ?>" />
                       <input type= "hidden"  name= "image"  value= "<?php echo $data['image'] ?>" />
                       <td><button class ="btn btn-success" type = "submit">Save Changes</button></td>
                       <td><a href= "index.php" ><button class ="btn btn-warning" type ="button">Back</button></a ></td>
                   </tr>
               </table>
           </form>
       </fieldset>
       <style   type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }  
           .img-thumbnail{
               width: 70px !important;
                height: 70px !important;
           }   
            
       </style>
   </body>
</html>
