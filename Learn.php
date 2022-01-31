
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
    <title>Educative Interactive Courses For Software Developers</title>
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

          <li class="nav-item  pt-2 pb-2 mt-5" style=" transform:translateY(200px);">
       <a href="logout.php" class="pe-5 ps-5 pt-3 pb-3" style="text-decoration:none; color:white; transfrom:translateX(500px); background-color:transparent;  border:1px solid white;">
       <i class='bx bx-log-out'style="font-size:20px;"> <span class="links_name ps-2" style="font-size:23px;">Logout</span>&nbsp;</i>
       </a>
     </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar Ends Here -->

<!-- Starter Starts Here -->
<div class="container-fluid mt-5 mb-5  pt-5">
    <div class="container d-flex justify-content-left">
        <h1 class="h3 ps-5">Welcome, Naman <?php if(isset($msg)) {echo $msg;}?></h1>
     </div>  
</div>

    <!-- Fouth Section Starts Here -->

    <div class="container-fluid  pb-5">
        <div class="scroller container  ">
          <div class="cards ">
          <div class="row ">
          <div class="flex flex-col sm:flex-row items-center d-flex pt-4 "><span class="w-12 h-12 bg-primary-lightP2 ms-5  rounded-full  text-white me-3 border-0  fill-current m-0 mt-1 d-flex" style="border-radius:100%; background-color:#f1f1ff;"><svg width="58" height="58" viewBox="0 0 48 48" fill="current" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32 16H16C14.89 16 14.01 16.89 14.01 18L14 30C14 31.11 14.89 32 16 32H32C33.11 32 34 31.11 34 30V18C34 16.89 33.11 16 32 16ZM32 30H16V24H32V30ZM16 20H32V18H16V20Z" fill="current"></path><line x1="13.5928" y1="14.707" x2="32.6847" y2="33.7988" stroke="current" stroke-width="2"></line><line x1="15.0069" y1="13.2929" x2="34.0988" y2="32.3848" stroke="hsla(240,60%,97%,1)" stroke-width="2"></line></svg></span><div class="text-lg m-0 mt-4 h5">Free Courses</div></div>
              <div class="col-sm-4 ">
                
            <div class="flex flex-col max-w-m " style="min-width: 33.33%;">
            <div class="m-5  pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API1.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c1.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-left m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden me-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-0  pb-2 pe-2 pt-2 font-bold text-left dark:text-dark-contrastText  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Getting Started  with Braintree API</p>
                  <div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-5  "><svg width="38" height="10" class="d-flex justify-content-left" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left d-flex justify-content-between  ">Beginner</p></div>
                    <button class=" click2 d-flex justify-content-right mt-5 ms-5 ps-5 pt-3 pe-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>

                    <div class="col-sm-4">
                      
                    <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API2.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c4.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis " style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Integrate Auth0 with Java Servlet Application</p> <br><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-4"><svg width="38" height="10" class="d-flex justify-content-left " fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left d-flex justify-content-left ">Beginner</p></div>
                    <button class="click2 d-flex justify-content-left mt-4 ms-5 ps-5 pt-3 pe-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

                    <div class="col-sm-4">
                      
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API3.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c2.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2  text-left font-bold dark:text-dark-contrastText  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Integretion With Stripe API</p><br><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-5"><svg width="38" height="10" class="d-flex justify-content-left " fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide text-left mt-1 capitalize text-dark d-flex justify-content-left ">Beginner</p></div>
                    <button class="click2 d-flex justify-content-left mt-5 ms-5 ps-5 pt-3 pe-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

            </div>
          </div>

          <div class="row pt-2 ">
          <div class="flex flex-col sm:flex-row items-center d-flex pt-4"><span class="w-12 h-12 bg-primary-lightP2 ms-5  rounded-full  text-white me-3 border-0  fill-current m-0 mt-1 d-flex" style="border-radius:100%; background-color:#f1f1ff;"><svg width="58" height="58" viewBox="0 0 48 48" fill="current" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.19 21.13L24 14.5L26.81 21.13L34 21.74L28.54 26.47L30.18 33.5L24 29.77L17.82 33.5L19.46 26.47L14 21.74L21.19 21.13ZM24.97 21.92L24 19.63L23.03 21.9L22.56 23.01L21.36 23.11L18.89 23.32L20.77 24.95L21.68 25.74L21.41 26.92L20.85 29.33L22.97 28.05L24 27.43L25.03 28.07L27.15 29.35L26.59 26.94L26.32 25.76L27.23 24.97L29.11 23.34L26.64 23.13L25.44 23.03L24.97 21.92Z" fill="current"></path></svg></span><div class="text-lg m-0 mt-4 h5">Our Picks</div></div>
              <div class="col-sm-4 ">
                
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API4.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c7.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">The Good Parts of AWS: Cutting Through the Clutter</p><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-5"><svg width="38" height="10" class="d-flex justify-content-left " fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left d-flex justify-content-left ">Beginner</p></div>
                    <button class="click2 d-flex justify-content-left mt-5 ms-5 ps-5 pt-3 pe-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>

                    <div class="col-sm-4">
                      
                    <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API5.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/b8.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Operating Systems: Virtualization, Concurrency & Persistence</p><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-4"><svg width="38" height="10" class="d-flex justify-content-left " fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left d-flex justify-content-left ">Beginner</p></div>
                    <button class="click2 mt-4 d-flex justify-content-left mt-4 ms-5 ps-5 pt-3 pe-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

                    <div class="col-sm-4">
                      
            <div class="flex flex-col max-w-m" style="min-width: 30.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API6.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c9.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 text-left font-bold dark:text-dark-contrastText  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Grokking the Machine Learning Interview</p><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-5"><svg width="38" height="10" class="d-flex justify-content-left "fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 text-left capitalize text-dark ms-auto d-flex justify-content-left  ">Beginner</p></div>
                    <button class="click2 d-flex justify-content-left mt-5 ms-5 ps-5 pt-3 pe-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

            </div>
          </div>
        </div>
    </div>
    <!-- Fouth Section Ends Here -->

        <!-- Fouth Section Starts Here -->

        <div class="container-fluid  ">
        <div class="scroller container">
          <div class="cards">
          <div class="row ">
          <div class="flex flex-col sm:flex-row items-center d-flex pt-4 mb-2"><span class="w-12 h-12 bg-primary-lightP2 ms-5  rounded-full  text-white me-3 border-0  fill-current m-0 mt-1 d-flex" style="border-radius:100%; background-color:#f1f1ff;"><svg width="58" height="58" viewBox="0 0 48 48" fill="current" xmlns="http://www.w3.org/2000/svg"><path d="M20.6716 26.7455L22.8185 22.8198L26.7435 20.6725C26.9691 20.5493 27.1092 20.3127 27.1092 20.0556C27.1092 19.7987 26.9691 19.5621 26.7435 19.4387L22.8185 17.2916L20.6716 13.3658C20.5482 13.1403 20.3116 13 20.0547 13C19.7976 13 19.561 13.1403 19.4378 13.3658L17.2909 17.2916L13.3657 19.4389C13.1403 19.5621 13 19.7987 13 20.0558C13 20.3127 13.1403 20.5493 13.3657 20.6727L17.2909 22.8198L19.4378 26.7455C19.561 26.9711 19.7976 27.1114 20.0547 27.1114C20.3118 27.1114 20.5482 26.9711 20.6716 26.7455ZM18.426 21.9643C18.3615 21.8464 18.2645 21.7493 18.1464 21.6849L15.1682 20.0558L18.1464 18.4265C18.2645 18.3621 18.3615 18.265 18.426 18.1471L20.0547 15.1687L21.6834 18.1471C21.7479 18.265 21.8449 18.3621 21.9628 18.4265L24.941 20.0556L21.9628 21.6849C21.8449 21.7493 21.7479 21.8464 21.6834 21.9643L20.0547 24.9427L18.426 21.9643Z" fill="current" stroke="current" stroke-width="0.6"></path><path d="M34.7349 25.1835L34.7348 25.1834L32.1465 23.7676L30.7309 21.179C30.7309 21.179 30.7309 21.179 30.7309 21.1789C30.5901 20.9213 30.3199 20.7611 30.0262 20.7611C29.7326 20.7611 29.4624 20.9213 29.3216 21.1789C29.3216 21.179 29.3216 21.179 29.3216 21.179L27.906 23.7676L25.3177 25.1834L25.3177 25.1834C25.06 25.3244 24.9 25.5946 24.9 25.8881C24.9 26.1816 25.06 26.4519 25.3177 26.5927C25.3177 26.5927 25.3177 26.5927 25.3177 26.5927L27.906 28.0085L29.3216 30.5973C29.3216 30.5974 29.3216 30.5974 29.3216 30.5974C29.4624 30.8549 29.7326 31.015 30.0262 31.015C30.3199 31.015 30.5901 30.8549 30.7309 30.5974C30.7309 30.5974 30.7309 30.5974 30.7309 30.5973L32.1465 28.0085L34.7348 26.5927C34.7348 26.5927 34.7348 26.5927 34.7348 26.5927C34.9923 26.4519 35.1525 26.1817 35.1525 25.8881C35.1525 25.5946 34.9923 25.3244 34.7349 25.1835ZM30.8501 27.0315L30.85 27.0316L30.0262 28.5381L29.2025 27.0316C29.1288 26.8966 29.018 26.786 28.8834 26.7122L28.8833 26.7122L27.3767 25.8881L28.8833 25.0639C29.018 24.9903 29.1289 24.8795 29.2025 24.7447L30.0262 23.2382L30.85 24.7448L30.8501 24.7448C30.9238 24.8794 31.0344 24.9903 31.1694 25.064L32.676 25.8881L31.1694 26.7122L31.1693 26.7122C31.0344 26.786 30.9238 26.8969 30.8501 27.0315Z" fill="current" stroke="current" stroke-width="0.2"></path><path d="M25.7663 31.8547L24.1209 30.9547L23.2209 29.309C23.0977 29.0834 22.8611 28.9431 22.6041 28.9431C22.347 28.9431 22.1104 29.0834 21.9872 29.309L21.0872 30.9547L19.4418 31.8547C19.2164 31.9781 19.0762 32.2147 19.0762 32.4716C19.0762 32.7286 19.2164 32.965 19.4418 33.0884L21.0872 33.9886L21.9872 35.6342C22.1104 35.8597 22.347 36 22.6041 36C22.8611 36 23.0977 35.8597 23.2209 35.6342L24.1209 33.9886L25.7663 33.0884C25.9917 32.965 26.132 32.7286 26.132 32.4716C26.132 32.2147 25.9917 31.9781 25.7663 31.8547ZM22.9858 33.1331L22.6041 33.8313L22.2223 33.1331C22.1578 33.0152 22.0608 32.9182 21.9429 32.8537L21.2445 32.4716L21.9429 32.0896C22.0608 32.0251 22.1578 31.9281 22.2223 31.81L22.6041 31.1118L22.9858 31.81C23.0503 31.9281 23.1473 32.0251 23.2653 32.0896L23.9638 32.4716L23.2653 32.8537C23.1473 32.9182 23.0503 33.0152 22.9858 33.1331Z" fill="current"></path></svg></span><div class="text-lg m-0 mt-4 h5">Our Latest Additions</div></div>
              <div class="col-sm-4 ">
                
            <div class="flex flex-col max-w-m " style="min-width: 33.33%;">
            <div class="m-5  pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API7.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c10.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold text-left dark:text-dark-contrastText  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Kubernetes in Practice<br><br></p><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-5"><svg width="38" height="10" class="d-flex justify-content-left " fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left d-flex justify-content-left ">Beginner</p></div>
                    <button class=" click2 d-flex justify-content-left mt-5 ms-5 ps-5 pt-3 pe-3">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>

                    <div class="col-sm-4">
                      
                    <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API8.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c11.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Django Takeoff: Developing Modern Applications</p> <br><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-4"><svg width="38" height="10" class="d-flex justify-content-left "fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left d-flex justify-content-left ">Beginner</p></div>
                    <button class="click2 d-flex justify-content-left mt-4 pe-3   ms-5 ps-5 pt-3" >Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

                    <div class="col-sm-4">
                      
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-5 pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="include/API9.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c12.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2  text-left font-bold dark:text-dark-contrastText  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Domain Driven Design Made Easy </p><br><div class="flex items-center justify-between mt-auto d-flex">
                    <div class="flex items-start m-2 flex-col text-left mt-4"><svg width="38" height="10" class="d-flex justify-content-left " fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide text-left mt-1 capitalize text-dark d-flex justify-content-left ">Beginner</p></div>
                    <button class="click2 float-right d-flex justify-content-left mt-4 pe-3   ms-5 ps-5 pt-3 ">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

            </div>
          </div>

          <div class="row pt-0 pb-0 ">
          <div class="flex flex-col sm:flex-row items-center d-flex pt-4 pb-2 "><span class="w-12 h-12 bg-primary-lightP2 ms-5  rounded-full  text-white me-3 border-0  fill-current m-0 mt-1 d-flex" style="border-radius:100%; background-color:#f1f1ff;"><svg width="58" height="58" viewBox="0 0 48 48" fill="current" xmlns="http://www.w3.org/2000/svg"><path d="M28 18L30.29 20.29L25.41 25.17L21.41 21.17L14 28.59L15.41 30L21.41 24L25.41 28L31.71 21.71L34 24V18H28Z" fill="current"></path></svg></span><div class="text-lg m-0 mt-4 h5">Learning Paths</div></div>
              <div class="col-sm-4  ">
                
            <div class="flex flex-col max-w-m " style="min-width: 33.33%;">
            <div class="m-5 pb-5 dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; background-color:#202033;"><a href="include/API10.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/13.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex  m-2">
                <div class="flex w-full">
                </div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left" style="color:white; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Python For Programmers
                </p>
                <p name="CollectionTitle" class="text-xl m-1 pt-1  font-bold dark:text-dark-contrastText text-left d-flex justify-content-left" style="color:white; font-weight:500; font-size:13px; font-family:Poppins,sans-serif;">Python is an essential language for developers and data scientists alike. Expand your job opportunities with lessons designed for current developers like you.
                </p>
                  <div class="flex items-center justify-between mt-auto  m-0 h-25">
                    <div class="flex items-start m-5   ms-4  text-left d-inline-flex justify-content-between">
                    <p class="text-xs font-semibold     capitalize text-light text-left float-start ">4 Modules</p></div>
                    <button class="click2   text-white" style="background-color:transparent;" >Preview<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>

              <div class="col-sm-4 ">
                
                <div class="flex flex-col max-w-m " style="min-width: 33.33%;">
                <div class="m-5 pb-5 dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; background-color:#202033;"><a href="include/API11.php" style="text-decoration:none;">
                <div>
                  <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c14.png" title="Course Cover Image">
                  <div class="flex flex-col p-2 text-left" style="height: 227px;" >
                  <div class="flex  m-2">
                    <div class="flex w-full">
                    </div></div>
                      <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left" style="color:white; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Become a Machine Learning Engineer
                    </p>
                    <p name="CollectionTitle" class="text-xl m-1 pt-1  font-bold dark:text-dark-contrastText text-left d-flex justify-content-left" style="color:white; font-weight:500; font-size:13px; font-family:Poppins,sans-serif;">Add machine learning to your skillset and equip yourself to push the boundaries of AI technology. Get the hands-on practice you'll need to land a job in ML.
                    </p>
                      <div class="flex items-center justify-between mt-auto   m-0 h-25">
                        <div class="flex items-start m-5   ms-4  text-left d-inline-flex justify-content-between">
                        <p class="text-xs font-semibold     capitalize text-light text-left float-start ">4 Modules</p></div>
                        <button class="click2   text-white" style="background-color:transparent;" >Preview<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                  </div>


                  <div class="col-sm-4  ">
                
            <div class="flex flex-col max-w-m " style="min-width: 33.33%;">
            <div class="m-5 pb-5 dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; background-color:#202033;"><a href="include/API12.php" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c15.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex  m-2">
                <div class="flex w-full">
                </div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left" style="color:white; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">C++ for Programmers
                </p>
                <p name="CollectionTitle" class="text-xl m-1 pt-1  font-bold dark:text-dark-contrastText text-left d-flex justify-content-left" style="color:white; font-weight:500; font-size:13px; font-family:Poppins,sans-serif;">Learn C++ from scratch, and get a handle on one of the most popular programming languages in the world.</p>
                  <div class="flex items-center justify-between mt-4  m-0 h-25">
                    <div class="flex items-start m-5   ms-4  text-left d-inline-flex justify-content-between">
                    <p class="text-xs font-semibold     capitalize text-light text-left float-start ">6 Modules</p></div>
                    <button class="click2   text-white" style="background-color:transparent;" >Preview<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Fouth Section Ends Here -->

<!-- Starter Ends Here -->

<div class="container  col-lg-3">
  <div class="content">

  <a href="ASC/index.php">
  <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5 mt-5  border-secondary text-dark" id="giftAnnual}" style="background-color:white;border:1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>View All Courses And Paths</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  
  </a>
  </div>
</div>


<!-- Footer Starts Here -->
    <!-- Sixth Section Starts Here -->
    <div class="sixth container-fluid" style="height:auto; width:100%;background-color:#11101d;">
        <div class="container" style="height:180px; width:100%;">
        <div class=" container  col-md-11 text-left" style="text-align:left; border-bottom:1px solid white;">
        <h5 class="text-left pt-5 text-light"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo me-2 mb-2 text-light"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg>Educative</h5>
        <p class="text-left pt-3 text-light">Learn in-demand tech skills in half the time</p>
        </div>
        </div>

        <div class="container  col-md-8">
          <div class="row  container me-auto ms-auto pb-5 col-md-12 " style="border-bottom:1px solid white;">
            <div class="col-sm-2   me-auto ms-auto  ">
              <ul style="list-style:none;" >
                <li class="active mt-3 text-left "><a href="#" style="text-decoration:none; color:white; font-size:17px;">LEARN</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Courses</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Early Access <br>Courses</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Edpresso</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Assessment</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Blog</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Pricing</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Free Trial</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Business</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">CodingInterview.com</a></li>
              </ul>
            </div>

            <div class="col-sm-2 me-auto ms-auto   ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">SCHOLORSHIPS</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Students</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Educators</a></li>
              </ul>
            </div>

            <div class="col-sm-2 me-auto ms-auto  ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">CONTRIBUTE</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Become An Author</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Become An Affilliate</a></li>
              </ul>
            </div>

            <div class="col-sm-2 me-auto ms-auto   ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">LEGAL</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Privacy Policy</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Terms Of Services</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Business Terms Of Services</a></li>
              </ul>
            </div>
            
            <div class="col-sm-2 me-auto ms-auto    ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">MORE</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Our Teams</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Careers</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Bootcamps</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Blog FOr Business</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Quality Commitment</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">FAQ</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Press</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Contact US</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="container ">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 text-left text-light p-3" >
                <ul class="icons1" style="list-style:none;display:inline-flex;" >
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-3"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-3"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                  </li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-3"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                  </li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-3"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                  </li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="w-5 h-5 me-3"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 14a3 3 0 003-3V5a3 3 0 10-6 0v6a3 3 0 003 3zm-1.2-9.1c0-.7.5-1.2 1.2-1.2s1.2.5 1.2 1.2v6.2a1.2 1.2 0 11-2.4 0V4.9zm6.5 6.1c0 3-2.5 5.1-5.3 5.1S6.7 14 6.7 11H5a7 7 0 006 6.7V21h2v-3.3a7 7 0 006-6.7h-1.7z"></path></svg>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 text-right"> 
                <p class="text-right pt-3 text-secondary" style="font-size:15px;">Copyright ©2021 Educative, Inc. All rights reserved.   <img src="images/soc2.svg" loading="lazy" alt="soc2" class="m-2 sm:m-0 sm:ml-5" style="width:20px"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
<!-- Footer Ends Here -->
<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "6185d2500f9c6a00071a0868";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->

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