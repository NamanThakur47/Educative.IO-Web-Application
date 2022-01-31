<?php
$con = mysqli_connect("localhost","root","","image");
if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];


    $query = "INSERT INTO upload(image) VALUES ('$file')";

    $res = mysqli_query($con,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Upload Image</h3>
                    <form action="" class="my-5"  method="POST" enctype="multipart/form-data">
                        <input type="file" name="image" class="form-control">
                        <input type="submit" name="upload" value="upload" class="btn btn-success my-3">
                </form>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Display Image</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


