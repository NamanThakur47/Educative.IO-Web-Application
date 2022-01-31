<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Account | Cart Section</title>
    <link rel="icon" href="../images/redux.svg" type="image/icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php
    require_once ('php/header.php');
?>

<div class="container-fluid   pb-5">
    <div class="row px-5">
        <div class="col-md-7 ">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                            echo '<div class="container-fluid ">
                            <div class="container col-sm-3 mt-5 pb-5  ">
                                <div class="row mt-5 pt-5">
                                    <div class="col-sm-6 ">
                                        <span class="" >
                                        <svg width="200" height="200" style="background-color:lightgray; border-radius:100%;" viewBox="-4 -4 32 32" fill="#fff" class="rounded-full bg-gray-400 mt-3 mb-3 dark:bg-gray-900 border border-solid border-gray-300 flex-shrink-0"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
                                        </span>
                                    </div>
                                    <div class="col-sm-6  h-25">
                                        <h1 class="h2 pt-5 mt-5 ">
                                            Naman Pal
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="container-fluid  pt-3 pb-3">
                                <div class="content container mt-3 mb-3">
                                    <h3 class="h4">You have not published any courses or shots yet.</h3>
                                </div>
                                <div class="hero-section container col-md-6 me-auto mr-auto">
                                    <div class="content  col-md-12">
                                    <img src="images/noData.svg" class="p-5 h-100 w-100" alt="">
                                    </div>
                                </div>
                            
                            
                                <div class="content  container mt-3 mb-3">
                                    <h3 class="h3 p">Earn passive income teaching what you love</h3>
                                    <p class="pb-2" style="font-size:13px;">Easy-to-use tools let you create awesome text-based courses and shots with interactivity built right</p>
                                </div>
                            
                            
                                <div class="content container ">
                                <a href="#">
                              <button class="btn text-default pt-3 pb-3 pe-5 ps-5 mb-3 mt-3  border-secondary text-dark" id="giftAnnual}" style="background-color:white;border:1px solid lightgray;">&nbsp;&nbsp;Create A Shot&nbsp;&nbsp;</button></a>
                              &nbsp;
                              <a href="#">
                              <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-3 mt-3   border-secondary text-light" id="giftAnnual}" style="background-color:#11101d;border:1px solid lightgray;">&nbsp;&nbsp;Become An Author&nbsp;&nbsp;</button>  
                              </a>
                                </div>
                            </div>';
                    }

                ?>
            
            </div>  

            
        </div>
        <div class="col-md-4 bg-light p-4 offset-md-1 border rounded mt-5 h-25">

            <div class="pt-4 ">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
    include('../include/footer.php');
?>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/all.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
