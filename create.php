<!DOCTYPE html>
<html lang="en" >
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       
   </head>
   <body>
   <?php require_once "compos/navbar.php" ?>
   <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>
       <fieldset>
           <legend class='h2'> Add Product</legend>
           <form action="actions/aCreate.php"  method="post" enctype= "multipart/form-data">
               <table  class='table'>
               <tr>
                       <th>Author</th>
                        <td><input class='form-control' type="text"  name="author"  placeholder ="Product Author"/></td>
                   </tr>
                   <tr>
                       <th>Title</th>
                        <td><input class='form-control' type="text"  name="title"  placeholder ="Product Title"/></td>
                   </tr>
                   <tr>
                       <th>Publish Date</th>
                        <td><input class='form-control' type="text"  name="publishDate"  placeholder ="Product Publish Date"/></td>
                   </tr>
                   <tr>
                       <th>Publisher</th>
                        <td><input class='form-control' type="text"  name="publisher"  placeholder ="Product Publisher"/></td>
                   </tr>
                   <tr>
                       <th>Type</th>
                        <td><input class='form-control' placeholder="Product Type" list="Type" name="type" /></label>
                        <datalist  id="Type">
                        <option value="book">
                        <option value="CD">
                        <option value="DVD">
                        </datalist></td>
                   </tr>
                   <tr>
                       <th>Status</th>
                        <td><input class='form-control' placeholder="Product Status" list="status" name="status" /></label>
                        <datalist  id="status">
                        <option value="available">
                        <option value="reserved">
                        </datalist></td>
                   </tr>
                   <tr>
                       <th>Publisher Address</th>
                        <td><input class='form-control' type="text"  name="publisherAddress"  placeholder ="Product Publisher Address"/></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                        <td><input class='form-control' type="text"  name="description"  placeholder ="Product Description"/></td>
                   </tr>   
                   <tr>
                       <th>ISBN Code</th>
                       <td><input class= 'form-control' type="number"  name="ISBNCode" placeholder ="Product ISBN Code" step="any"/></td>
                   </tr>
                   <tr>
                       <th>Image</th>
                       <td><input class= 'form-control' type="file"  name="image"/></td>
                   </tr>
                   <tr>
                       <td><button class ='btn btn-success' type= "submit">Insert Product</button></td>
                       <td><a href="index.php"><button class= 'btn btn-warning' type= "button">Back</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>