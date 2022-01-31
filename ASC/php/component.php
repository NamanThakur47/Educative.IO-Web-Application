<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-4  col-sm-12 my-3 my-md-0 \">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow  m-5\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\" style='height:30px;width:30px;'></i>
                                <i class=\"fas fa-star\" style='height:30px;width:30px;'></i>
                                <i class=\"fas fa-star\" style='height:30px;width:30px;'></i>
                                <i class=\"fas fa-star\" style='height:30px;width:30px;'></i>
                                <i class=\"far fa-star\" style='height:30px;width:30px;'></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$$productprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn my-4 p-3 pe-3 ps-3\" style='background-color:white; border:1px solid lightgray;' name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded p-3 pe-5\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Ktech-Education</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning  \">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5 \">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















