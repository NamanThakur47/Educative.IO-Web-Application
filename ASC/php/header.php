<!-- 
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button> -->
<!-- 
        <nav class="navbar navbar-light bg-white fixed-top border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Learn.php">
     <h5 class="h4 ">   
    <span class="me-2 " style="color:#11101d"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo dark:text-dark-contrastText"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg></span>Educative</h5>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Educative</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="team.php"><b>For Teams</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#"><b>Log In</b></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php#"><button class="btn click1 text-light pt-4 pb-4 pe-5 ps-5">
                <b>Join For Free</b>
            </button></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> -->

<!-- Navbar Starts Here -->
<div class="container-fluid text-white" style="background-color:#11101d;">
    <div class="container  p-2">
    <ul class="nav p-1">
  <li class="nav-item text-white">
    <a class="nav-link text-white"  aria-current="page" href="../Learn.php"><h6 class="h5 ">   
    <span class="me-2 " ><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo dark:text-dark-contrastText mt-0"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg></span>educative </h6></a>
  </li>
  <!-- <li class="nav-item ms-auto">
    <a class="nav-link text-dark " href="../team.php" tabindex="-1" aria-disabled="true">Educative For Teams</a>
  </li> -->
  <li class="nav-item ms-auto">
          <a href="cart.php" class="nav-item nav-link active" style="color:white;">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }
                        ?>
                    </h5>
                </a>
          </li>
</ul>
</div>
</div>
<!-- Navbar Ends Here -->

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
            </div>
        </div>

    </nav>
</header>


