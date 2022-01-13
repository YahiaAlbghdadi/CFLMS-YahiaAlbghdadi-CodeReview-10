<?php

    require_once "DbConnection.php";
    require_once "fileUpload.php";

    if($_POST){
        $author = $_POST['author'];
        $publishDate = $_POST['publishDate'];
        $publisher = $_POST['publisher'];
        $type = $_POST['type'];
        $status = $_POST['status'];
        $publisherAddress = $_POST['publisherAddress'];
        $image = fileUpload($_FILES['image']);
        $title = $_POST['title'];
        $description = $_POST['description'];
        $ISBNCode = $_POST['ISBNCode'];

        $insertQ = "INSERT INTO `data`(`author`, `publishDate`, `publisher`, `type`, `status`, `publisherAddress`,  `image`, `title`, `description`, `ISBNCode`) VALUES ('$author',$publishDate,'$publisher','$type','$status','$publisherAddress','$image->fileName','$title','$description',$ISBNCode)";

        if ($link->query($insertQ) === true ) {
            $class = "success";
            $message = "The entry below was successfully created <br>
                 <table class='table w-50'><tr>
                 <td> $title </td>
                 <td> $type </td>
                 </tr></table><hr>";
            $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
        } else {
            $class = "danger";
            $message = "Error while creating record. Try again: <br>" . $link->error;
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
                    <h1>Create request response</h1>
                </div>
                 <div class="alert alert-<?=$class;?>" role="alert">
                    <p><?php echo ($message) ?? ''; ?></p>
                     <p><?php echo ($uploadError) ?? ''; ?></p>
                     <a href='../index.php'><button class="btn btn-primary"  type='button'>Home</button ></a>
                </div >
            </div>
        </body>
     </html>
    }

    