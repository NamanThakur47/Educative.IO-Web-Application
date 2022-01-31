<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/major.css">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="icon" href="images/redux.svg" type="image/icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>User Account Section | Educative</title>
  </head>
  <style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: black;
}

input:focus + .slider {
  box-shadow: 0 0 1px black;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.dark{
            background-color: #222;
            color: #e6e6e6;
        }
  </style>
  <body>
      
  
<!-- Navbar Starts Here -->
<nav class="navbar navbar-dark fixed-top border-bottom border-dark " style="background-color:#11101d;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <h6 class="h5 ">   
    <span class="me-2 " style="color:white;"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo dark:text-dark-contrastText mt-0"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg></span>educative </h6>
    </a>
    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="offcanvas offcanvas-end text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color:#11101d;">
      <div class="offcanvas-header text-white">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Educative</h5>
        <button type="button" class="btn-close text-reset" style="color:white;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="background-color:#11101d;">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item   p-2">
            <!-- <a class="nav-link" aria-current="page" href="team.php"><span><i class='bx bx-search me-3' style="font-size:20px;"></i></span><b>Explore</b></a> -->
            <a href="/explore" class="flex flex-col items-center w-full cursor-pointer py-2  px-1 hover:bg-gray-buttonHover text-light hover:text-black focus:text-black" title="Explore" style="text-decoration:none;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg><span class="text-xs ps-3 font-semibold tracking-wide dark:text-dark-contrastText">Explore</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/paths" class="flex flex-col text-light items-center w-full cursor-pointer py-2 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Paths" style="text-decoration:none;"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" width="25" height="25" stroke-linecap="round" stroke-linejoin="round" fill="none" class="feather feather-trending-up mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Paths</span></a>
          </li>
          <li class="nav-item   p-3 mt-2 ">
          <a href="/assessments" class="flex flex-col text-light items-center w-full cursor-pointer py-2 px-1 " title="Assessments" style="text-decoration:none; color:white;"><i class='bx bx-target-lock' style="font-size:25px;"></i><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-2 text-light">Assessments</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/mycourses" class="flex flex-col text-light items-center w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="My Courses" style="text-decoration:none;"><svg viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText  ps-3">My Courses</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/certificates" class="flex flex-col text-light items-center w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Certificates" style="text-decoration:none;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Certificates</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/edpresso" class="flex flex-col items-center text-light w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Edpresso" style="text-decoration:none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="25" height="25" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><path d="M18 8H19C20.0609 8 21.0783 8.42143 21.8284 9.17157C22.5786 9.92172 23 10.9391 23 12C23 13.0609 22.5786 14.0783 21.8284 14.8284C21.0783 15.5786 20.0609 16 19 16H18"></path><path d="M2 8H18V17C18 18.0609 17.5786 19.0783 16.8284 19.8284C16.0783 20.5786 15.0609 21 14 21H6C4.93913 21 3.92172 20.5786 3.17157 19.8284C2.42143 19.0783 2 18.0609 2 17V8Z"></path><path d="M6 1V4"></path><path d="M10 1V4"></path><path d="M14 1V4"></path></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Edpresso</span></a>
          </li>
          <li class="nav-item p-2 mt-2">
          <a href="/refer-a-friend" class="flex flex-col text-light items-center w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Refer a Friend" style="text-decoration:none;"><svg viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"></path><path d="M8.5 11C10.7091 11 12.5 9.20914 12.5 7C12.5 4.79086 10.7091 3 8.5 3C6.29086 3 4.5 4.79086 4.5 7C4.5 9.20914 6.29086 11 8.5 11Z"></path><path d="M20 8V14"></path><path d="M23 11H17"></path></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Refer a Friend</span></a>
          </li>
          <li class=" nav-item p-2 mt-2 ">
            <a href="user.php" style="text-decoration:none; color:white;">
            <span><i class='bx bx-user-check' style="font-size:30px;"></i><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-2">User Account</span></span>
            </a>
          </li>
          <li class=" nav-item  p-2 mt-2">
          <label class="switch">
    <input type="checkbox">
    <span onclick="myFunction()" class="slider round "></span>
  </label>    
          </li>
          <li class="nav-item  pt-2 pb-2 mt-5" style="float:bottom;">
       <a href="index.php" class="pe-5 ps-5 pt-2 pb-2" style="text-decoration:none; color:white; background-color:transparent; border-radius:5%; border:1px solid white;">
       <i class='bx bx-log-out'style="font-size:20px;"> <span class="links_name ps-2" style="font-size:15px;">Logout</span></i>
       </a>
     </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar Ends Here -->
<div class="container-fluid ">
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
<!-- footer Included Here -->
<?php
    include('include/footer.php');    
?>
<!-- Footer Included Here -->

<script>
        function myFunction() {
        var element = document.body;
        element.classList.toggle("dark");
        }
    </script>
  
<script src="js/script.js"></script> 
   <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script> 
     <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
     <script src="js/jquery-3.6.0.min.js"></script>

  </body>
  </html>