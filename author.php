<?php 
    require_once "actions/DbConnection.php";


if($_GET){
    $author = $_GET['author'];
    $sql = "SELECT publisher, type, image,status, title FROM data WHERE author = '{$author}'";
    $result = mysqli_query($link,$sql);
    $print = '';

    if(mysqli_num_rows($result) > 0){
        while($authorProduct = mysqli_fetch_assoc($result)){
            if($authorProduct['status'] === "available"){
                $authorProduct['status'] = "<span class='text-success fw-bold'>{$authorProduct['status']}</span>";
              }else{$authorProduct['status'] = "<span class='text-danger '>{$authorProduct['status']}</span>";
        
              }
            $print .= "<div class='card book pt-2' style='width: 18rem;'>
            <img src='Images/{$authorProduct['image']}' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>Title: {$authorProduct['title']}</h5>
            <ul class='list-group list-group-flush'>
                <li class='card-text list-group-item'>Type: {$authorProduct['type']}</li>
                <li class='card-text list-group-item'>Publisher: {$authorProduct['publisher']}</li>
                <li class='card-text list-group-item'>Status: {$authorProduct['status']}</li>
                <a href='index.php' class=' list-group-button mt-3 align-self-center w-50 btn btn-warning'>Back</a>
                </div>
            </ul>
        </div>";
        }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php require_once "compos/navbar.php" ?>

    <div class="container ">
        <div class="row text-center">
            <?php echo $print ?>
        </div>
    </div>
    <style>
        .book{
            margin: 10px auto;
        }
    </style>
    
</body>
</html>

