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
    <link rel="icon" href="../images/redux.svg" type="image/icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/major.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Getting Started with Braintree API  - Free API Course</title>
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
<nav class="navbar navbar-light bg-white fixed-top " style="border-bottom:1px solid lightgray;">
  <div class="container-fluid text-light">
    <a class="navbar-brand" href="#">
     <h6 class="h5 text-dark">   
    <span class="me-2 " ><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo dark:text-dark-contrastText mt-0"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg></span>educative </h6>
    </a>
    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="offcanvas offcanvas-end text-white bg-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
      <div class="offcanvas-header text-dark">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Educative</h5>
        <button type="button" class="btn-close text-reset" style="color:white;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-white" >
        <ul class="navbar-nav justify-content-end text-dark flex-grow-1 pe-3">
          <li class="nav-item   p-2 text-dark">
            <!-- <a class="nav-link" aria-current="page" href="team.php"><span><i class='bx bx-search me-3' style="font-size:20px;"></i></span><b>Explore</b></a> -->
            <a href="/explore" class="flex flex-col items-center w-full cursor-pointer py-2  px-1 hover:bg-gray-buttonHover text-dark hover:text-black focus:text-black" title="Explore" style="text-decoration:none;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg><span class="text-xs ps-3 font-semibold tracking-wide dark:text-dark-contrastText">Explore</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/paths" class="flex flex-col  items-center w-full cursor-pointer py-2 px-1 hover:bg-gray-buttonHover text-dark hover:text-black focus:text-black" title="Paths" style="text-decoration:none;"><svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" width="25" height="25" stroke-linecap="round" stroke-linejoin="round" fill="none" class="feather feather-trending-up mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Paths</span></a>
          </li>
          <li class="nav-item   p-3 mt-2 ">
          <a href="/assessments" class="flex flex-col  items-center w-full cursor-pointer py-2 px-1 text-dark " title="Assessments" style="text-decoration:none; color:white;"><i class='bx bx-target-lock' style="font-size:25px;"></i><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-2 text-dark">Assessments</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/mycourses" class="flex flex-col text-dark  items-center w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="My Courses" style="text-decoration:none;"><svg viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText  ps-3">My Courses</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/certificates" class="flex flex-col text-dark items-center w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Certificates" style="text-decoration:none;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Certificates</span></a>
          </li>
          <li class="nav-item  p-2 mt-2">
          <a href="/edpresso" class="flex flex-col items-center text-dark w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Edpresso" style="text-decoration:none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="25" height="25" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><path d="M18 8H19C20.0609 8 21.0783 8.42143 21.8284 9.17157C22.5786 9.92172 23 10.9391 23 12C23 13.0609 22.5786 14.0783 21.8284 14.8284C21.0783 15.5786 20.0609 16 19 16H18"></path><path d="M2 8H18V17C18 18.0609 17.5786 19.0783 16.8284 19.8284C16.0783 20.5786 15.0609 21 14 21H6C4.93913 21 3.92172 20.5786 3.17157 19.8284C2.42143 19.0783 2 18.0609 2 17V8Z"></path><path d="M6 1V4"></path><path d="M10 1V4"></path><path d="M14 1V4"></path></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Edpresso</span></a>
          </li>
          <li class="nav-item p-2 mt-2">
          <a href="/refer-a-friend" class="flex flex-col text-dark items-center w-full cursor-pointer py-3 px-1 hover:bg-gray-buttonHover text-black hover:text-black focus:text-black" title="Refer a Friend" style="text-decoration:none;"><svg viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 w-6 h-6 dark:text-dark-contrastText stroke-current"><path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"></path><path d="M8.5 11C10.7091 11 12.5 9.20914 12.5 7C12.5 4.79086 10.7091 3 8.5 3C6.29086 3 4.5 4.79086 4.5 7C4.5 9.20914 6.29086 11 8.5 11Z"></path><path d="M20 8V14"></path><path d="M23 11H17"></path></svg><span class="text-xs font-semibold tracking-wide dark:text-dark-contrastText ps-3">Refer a Friend</span></a>
          </li>
          <li class=" nav-item p-2 mt-2 ">
            <a href="../user.php" style="text-decoration:none; color:black;">
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
       <a href="logout.php" class="pe-5 ps-5 pt-3 pb-3" style="text-decoration:none; color:black; transfrom:translateX(500px); background-color:transparent;  border:3px solid lightgray;">
       <i class='bx bx-log-out'style="font-size:20px;"> <span class="links_name ps-2" style="font-size:23px;">Logout</span>&nbsp;</i>
       </a>
     </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar Ends Here -->

<!-- Hero Section Content Starts Here -->
<div class=" container-fluid   mt-5 pt-5">
    <div class="container-fluid col-md-11  ">
        <div class="row ">
                <div class="content col-md-9  ">
                    <h2 class="h2 p-3   float-start">Stripe Api Data Specialization Course</h2><br>
                    <div class="content p-2  me-auto col-sm-10 row ">
                        <div class="col-sm-2  p-2 ms-3 bg-secondary"><span>
                        <svg width="24" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V4C20 2.9 19.1 2 18 2ZM9 4H11V9L10 8.25L9 9V4ZM6 20H18V4H13V13L10 10.75L7 13V4H6V20Z" fill="#8887FF"></path></svg>
                        <b>14 Lessons</b>
                        </span></div>
                        <div class="col-sm-2 ms-3  p-2 bg-secondary" ><span>
                        <svg width="24" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.82 4H19C20.1 4 21 4.9 21 6V20C21 21.1 20.1 22 19 22H5C4.86 22 4.73 21.99 4.6 21.97C4.21 21.89 3.86 21.69 3.59 21.42C3.41 21.23 3.26 21.02 3.16 20.78C3.06 20.54 3 20.27 3 20V6C3 5.72 3.06 5.46 3.16 5.23C3.26 4.99 3.41 4.77 3.59 4.59C3.86 4.32 4.21 4.12 4.6 4.04C4.73 4.01 4.86 4 5 4H9.18C9.6 2.84 10.7 2 12 2C13.3 2 14.4 2.84 14.82 4ZM7 10V8H17V10H7ZM17 14V12H7V14H17ZM14 16H7V18H14V16ZM12 3.75C12.41 3.75 12.75 4.09 12.75 4.5C12.75 4.91 12.41 5.25 12 5.25C11.59 5.25 11.25 4.91 11.25 4.5C11.25 4.09 11.59 3.75 12 3.75ZM5 20H19V6H5V20Z" fill="#8887FF"></path></svg>
                        <b>2 Quizzes</b>
                        </span></div>
                        <div class="col-sm-2 ms-3  p-2 bg-secondary" ><span>
                        <svg width="24" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2.75" y="2.75" width="18.5" height="18.5" rx="1.25" stroke="#8887FF" stroke-width="1.5"></rect><path d="M10.7157 15.8204C11.115 15.8204 11.4386 15.4971 11.4386 15.0982C11.4386 14.6993 11.115 14.376 10.7157 14.376C10.3122 14.376 9.83118 14.173 9.83118 13.2052V12.187C9.83118 11.5919 9.6571 11.1886 9.42677 10.91C9.657 10.6312 9.83118 10.2279 9.83118 9.63325V8.61506C9.83118 7.64737 10.3122 7.44431 10.7157 7.44431C11.115 7.44431 11.4386 7.12101 11.4386 6.72216C11.4386 6.3233 11.115 6 10.7157 6C9.5558 6 8.38544 6.80862 8.38544 8.61497V9.63316C8.38544 10.0124 8.31638 10.038 7.98467 10.1615C7.90872 10.1898 7.83029 10.219 7.75033 10.2559C7.38801 10.4234 7.23019 10.8526 7.39776 11.2145C7.46357 11.3567 7.57051 11.466 7.69724 11.5378C7.71264 11.548 7.91245 11.6336 7.98448 11.6601C8.31638 11.7821 8.38544 11.8076 8.38544 12.1868V13.205C8.38544 15.0117 9.5558 15.8204 10.7157 15.8204Z" fill="#8887FF"></path><path d="M14.0391 13.2023C14.0391 14.17 13.5581 14.3731 13.1546 14.3731C12.7553 14.3731 12.4317 14.6963 12.4317 15.0952C12.4317 15.4941 12.7553 15.8174 13.1546 15.8174C14.3145 15.8174 15.4849 15.0087 15.4849 13.2024V12.1869C15.4849 11.8076 15.5539 11.7819 15.8856 11.6585C15.958 11.6315 16.0328 11.6033 16.1089 11.5688C16.111 11.5678 16.142 11.5528 16.1504 11.5472C16.2883 11.4754 16.4049 11.3602 16.4742 11.2079C16.6396 10.8449 16.4791 10.4167 16.1159 10.2515C16.0373 10.2158 15.9602 10.1874 15.8857 10.1601C15.5538 10.038 15.4848 10.0126 15.4848 9.63324V8.61505C15.4848 6.80862 14.3144 6 13.1545 6C12.7552 6 12.4316 6.3233 12.4316 6.72215C12.4316 7.12101 12.7552 7.44431 13.1545 7.44431C13.558 7.44431 14.039 7.64737 14.039 8.61515V9.63334C14.039 10.2284 14.2131 10.6316 14.4434 10.9104C14.2132 11.1892 14.039 11.5924 14.039 12.1871V13.2023H14.0391Z" fill="#8887FF"></path><rect x="7" y="16.7587" width="9.93103" height="1.24138" rx="0.62069" fill="#8887FF"></rect></svg>
                        <b>8 Playgrounds</b>
                        </span></div>
                        <div class="col-sm-2 ms-3  p-2 bg-secondary" ><span>
                       <svg width="24" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9997 17.2551L7.44883 14.628L7.44873 9.37274L11.9997 6.74585L16.5504 9.37274L16.5507 14.6278L11.9997 17.2551ZM8.09403 14.2556L11.9997 16.5103L15.9055 14.2553L15.9052 9.74504L11.9997 7.49065L8.09393 9.74504L8.09403 14.2556Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M11.9997 12.3724L7.61035 9.83802L7.93295 9.27942L11.9997 11.6275L16.0668 9.27942L16.3894 9.83802L11.9997 12.3724Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M12.3224 11.9998H11.6772V16.8824H12.3224V11.9998Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M7.61024 9.83831L6.46435 9.17681H5.14136V8.53162H6.63735L7.93284 9.27971L7.61024 9.83831Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M16.3895 9.83831L16.0669 9.27971L17.3624 8.53162H18.8584V9.17681H17.5354L16.3895 9.83831Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M18.8584 15.4687H17.3624L16.0669 14.7207L16.3895 14.162L17.5354 14.8236H18.8584V15.4687Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M6.63735 15.4687H5.14136V14.8236H6.46435L7.61024 14.162L7.93284 14.7207L6.63735 15.4687Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M12.3229 5.1416H11.6777V7.11829H12.3229V5.1416Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M12.3229 16.8826H11.6777V18.8592H12.3229V16.8826Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M5.85791 4.46033H5.14111V5.10552H5.85791V4.46033Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M18.8575 4.46033H18.1406V5.10552H18.8575V4.46033Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M5.85767 18.895H5.14087V19.5402H5.85767V18.895Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M18.8575 18.895H18.1406V19.5402H18.8575V18.895Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M13.7317 5.46408H10.2676V2H13.7318V5.46408H13.7317ZM10.9127 4.81889H13.0865V2.6452H10.9127V4.81889Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M13.7317 22H10.2676V18.5359H13.7318V22H13.7317ZM10.9127 21.3549H13.0865V19.1811H10.9127V21.3549Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M5.46408 10.5506H2V7.08655H5.46408V10.5506ZM2.6452 9.90554H4.81899V7.73175H2.6452V9.90554Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M5.46408 16.9135H2V13.4493H5.46408V16.9135ZM2.6452 16.2683H4.81899V14.0946H2.6452V16.2683Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M22 10.5506H18.5359V7.08655H22V10.5506ZM19.1811 9.90554H21.3549V7.73175H19.1811V9.90554Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path><path d="M22 16.9135H18.5359V13.4493H22V16.9135ZM19.1811 16.2683H21.3549V14.0946H19.1811V16.2683Z" fill="#8887FF" stroke="#8887FF" stroke-width="0.8"></path></svg>
                        <b>21 Illustrations</b>
                        </span></div>
                    </div>
                    <div class="content mt-5 ">
                      <h1 class="h2  ps-3">
                      Course Overview 
                      </h1> <br><br>
                      <p class="p  ps-3 ">
                      Braintree is a payment service provider owned by PayPal. It allows you to accept online payments from customers in your applications by providing you with 
                      <p class="p  ps-3">
                      client-side and server-side Software Development Kits (SDKs).
                      </p>
                      </p>
                      <p>
                      <div class="content">
  <button class="btn  text-default pt-3 pb-3 pe-5 ps-5   mt-2 border-secondary text-dark" id="giftAnnual}" style="background-color:white;border:1px solid lightgray;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    See More <svg xmlns="http://www.w3.org/2000/svg" class="text-dark" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary dark:text-primary-light m-0 ml-5 flex-shrink-0"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card border-0 p-5   card-body">
  This course explains Braintree APIs to create a transaction. The client SDK provides tools and techniques to securely collect payment information, while the server SDK consists of tools to enable secure processing of the collected payment information. You will learn both the client-side and server-side implementations in detail. After that, the course will provide hands-on experience of creating a transaction using Braintree APIs. Finally, you will interact with a demo Fruit Buying application written in React that accepts payments using the Braintree gateway.
  </div>
</div></div>

<div class="naman  mt-5  pb-5">
<div class="row">
<h3 class="h3 p-2">
  How You'll Learn
  </h3>
  <div class="col-sm-6 pt-3">
    <div class="content col-md-9  me-auto ms-auto p-4">
    <h6 class="h6 p-3 "><span><svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="fill-current text-primary dark:text-primary-light"><path d="M47.35 0H.65C.3 0 0 .3 0 .65v46.7c0 .36.3.65.65.65h46.7c.36 0 .65-.3.65-.65V.65c0-.36-.3-.65-.65-.65zm-.66 1.3v5.25H1.31V1.31h45.38zM1.31 46.7V7.85h45.38V46.7H1.31z" fill="current"></path><path d="M5.94 5.86a1.79 1.79 0 100-3.57 1.79 1.79 0 000 3.57zm0-2.26a.48.48 0 110 .95.48.48 0 010-.95zM10.34 5.86a1.79 1.79 0 100-3.57 1.79 1.79 0 000 3.57zm0-2.26a.48.48 0 110 .95.48.48 0 010-.95zM20.5 37.64a1.96 1.96 0 01-1.81-2.71l7-16.83a1.95 1.95 0 012.56-1.05c1 .41 1.48 1.56 1.06 2.56l-7 16.83a1.95 1.95 0 01-1.81 1.2zm-.25-1.35a.65.65 0 00.85-.36l7-16.82a.65.65 0 00-1.2-.5l-7 16.82c-.14.33.02.72.35.86zM32.66 34.58a1.96 1.96 0 01-1.39-3.35l3.97-3.96-3.97-3.96a1.95 1.95 0 010-2.78c.77-.76 2.01-.76 2.78 0l6.27 6.28a.65.65 0 010 .92l-6.27 6.28c-.39.38-.89.57-1.4.57zm0-13.31a.65.65 0 00-.46 1.12l4.42 4.42c.26.25.26.67 0 .92l-4.42 4.43a.65.65 0 00.92.92l5.81-5.81-5.8-5.81a.65.65 0 00-.47-.2zM15.34 34.58c-.5 0-1-.2-1.39-.57l-6.27-6.28a.65.65 0 010-.92l6.27-6.28a1.96 1.96 0 012.78 2.78l-3.97 3.96 3.97 3.96a1.96 1.96 0 01-1.39 3.35zm-6.27-7.31l5.8 5.81a.65.65 0 00.93-.92l-4.42-4.43a.65.65 0 010-.92l4.42-4.43a.65.65 0 000-.92.67.67 0 00-.92 0l-5.81 5.8z" class="fill-current text-gray-A200 dark:text-gray-300"></path></svg></span>&nbsp;&nbsp;<b>Hands-on coding environments</b></h6>

    <p>
    You don’t get better at swimming by watching others. Coding is no different. Practice as you learn with live code environments inside your browser.    You don’t get better at swimming by watching others. Coding is no different. Practice as you learn with live code environments inside your browser.
    </p>
    </div>
  </div>
  <div class="col-sm-6  pt-3">
  <div class="content col-md-9 me-auto ms-auto p-4">
    <h6 class="h6 p-3 "><span><svg width="24" height="24" viewBox="0 0 48 48"  xmlns="http://www.w3.org/2000/svg" class="text-gray-A200 dark:text-gray-300 fill-current"><path class="text-primary dark:text-primary-light" d="M46.5 8.25a.75.75 0 00.75-.75v-6a.75.75 0 00-.75-.75h-6a.75.75 0 00-.75.75v2.25H8.25V1.5A.75.75 0 007.5.75h-6a.75.75 0 00-.75.75v6a.75.75 0 00.75.75h2.25v31.5H1.5a.75.75 0 00-.75.75v6a.75.75 0 00.75.75h6a.75.75 0 00.75-.75v-2.25h31.5v2.25a.75.75 0 00.75.75h6a.75.75 0 00.75-.75v-6a.75.75 0 00-.75-.75h-2.25V8.25h2.25zM2.25 6.75v-4.5h4.5v4.5h-4.5zm4.5 39h-4.5v-4.5h4.5v4.5zm33-5.25v2.25H8.25V40.5a.75.75 0 00-.75-.75H5.25V8.25H7.5a.75.75 0 00.75-.75V5.25h31.5V7.5a.75.75 0 00.75.75h2.25v31.5H40.5a.75.75 0 00-.75.75zm6 .75v4.5h-4.5v-4.5h4.5zm-4.5-34.5v-4.5h4.5v4.5h-4.5z"></path><path d="M33 10.08H15a.75.75 0 00-.75.75v6a.75.75 0 00.75.75h1.4a.75.75 0 00.73-.54l.69-2.46h3.93V29l-2.43.6a.75.75 0 00-.57.73v1.5a.75.75 0 00.75.75h9a.75.75 0 00.75-.75v-1.5a.75.75 0 00-.57-.72L26.25 29V14.58h3.93l.7 2.46a.75.75 0 00.71.54H33a.75.75 0 00.75-.75v-6a.75.75 0 00-.75-.75zm-.75 6h-.09l-.69-2.45a.75.75 0 00-.72-.55H25.5a.75.75 0 00-.75.75v15.75a.75.75 0 00.57.73l2.43.6v.17h-7.5v-.16l2.43-.6a.75.75 0 00.57-.74V13.83a.75.75 0 00-.75-.75h-5.25a.75.75 0 00-.72.55l-.7 2.45h-.08v-4.5h16.5v4.5zM33.75 34.08h-19.5a.75.75 0 100 1.5h19.5a.75.75 0 000-1.5zM28.12 36.67H13.88a.5.5 0 00-.39.2c-.1.12-.16.29-.16.46 0 .18.06.35.16.47.1.13.25.2.4.2h14.23a.5.5 0 00.39-.2c.1-.12.16-.29.16-.47a.75.75 0 00-.16-.47.5.5 0 00-.4-.2z" fill="current"></path></svg></span>&nbsp;&nbsp;<b>Faster than videos</b></h6>
    <p>
    Videos are holding you back. The average video tutorial is spoken at 150 words per minute, while you can read at 250. That‘s why our courses are text-based.Videos are holding you back. The average video tutorial is spoken at 150 words per minute, while you can read at 250. 
    </p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 pt-3">
    <div class="content col-md-9  me-auto ms-auto p-4">
    <h6 class="h6 p-3 "><span><svg width="24" height="24" viewBox="0 0 48 48"   xmlns="http://www.w3.org/2000/svg" ><rect x="0.9" y="0.9" width="46.3" height="46.3" rx="1.1" stroke="current" stroke-width="1.8"></rect><path d="M10 0v48" stroke="current" stroke-width="1.8"></path><path d="M14 9h28M14 24h28M14 39h28" class="stroke-current text-gray-A200 dark:text-gray-300" stroke-width="1.8"></path><circle cx="34" cy="9" r="3.1" fill="#fff" stroke="current" stroke-width="1.8"></circle><circle cx="19" cy="24" r="3.1" fill="#fff" stroke="current" stroke-width="1.8"></circle><circle cx="35" cy="39" r="3.1" fill="#fff" stroke="current" stroke-width="1.8"></circle></svg></span>&nbsp;&nbsp;<b>No set-up required</b></h6>

    <p>
    Start learning immediately instead of fiddling with SDKs and IDEs. It‘s all on the cloud.
    </p>
    </div>
  </div>
  <div class="col-sm-6  pt-3">
  <div class="content col-md-9 me-auto ms-auto p-4">
    <h6 class="h6 p-3 "><span><svg width="24" height="24" viewBox="0 0 52 49"  xmlns="http://www.w3.org/2000/svg" class="text-gray-A200 dark:text-gray-300 stroke-current"><rect x="0.9" y="0.9" width="50.3" height="43.9" rx="1.1" class="text-primary dark:text-primary-light" stroke-width="1.8"></rect><path d="M8.4 8.6h35.2" stroke="current" stroke-width="2"></path><path d="M33.4 48l1.9-11.9h7L44 48l-5.6-4.3-5 4.3z" fill="#fff" class="text-primary dark:text-primary-light" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.4 16.2H24" stroke="current" stroke-width="2"></path><path d="M46.5 31.4c0 4.2-3.4 7.6-7.5 7.6a7.6 7.6 0 01-7.5-7.6c0-4.3 3.4-7.7 7.5-7.7s7.5 3.4 7.5 7.7z" fill="#fff" class="text-primary dark:text-primary-light" stroke-width="1.8"></path></svg></span>&nbsp;&nbsp;<b>Progress you can show</b></h6>
    <p>
    Built in assessments let you test your skills. Completion certificates let you show them off.
    </p>
    </div>
  </div>
</div>
</div>


                    </div>
                </div>
                <div class="content col-md-3 ">
                       
            <div class="flex flex-col max-w-m p-2 " style="min-width: 33.33%;">
            <div class="m-5  pb-3 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; border-radius:2%;"><a href="#" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block "  alt="Course Cover " height="140" src="../images/c2.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 250px;" >
              <div class="flex items-center justify-left m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden me-auto text-left d-flex justify-content-left ">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-0  pb-2 pe-2 pt-2 font-bold text-left dark:text-dark-contrastText  " style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Stripe Api Data Specialization Course</p>
                  <div class="flex items-center justify-between mt-auto ">
                  <a href="../ASC/index.php">
  <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-2   mt-2 border-secondary text-light" id="giftAnnual}" style="background-color:#11101d;border:1px solid lightgray;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>Buy Now</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>  
  </a>
  <a href="#">
  <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5   mt-2 border-secondary text-dark" id="giftAnnual}" style="background-color:white;border:1px solid lightgray;">&nbsp;&nbsp;<small>Add A Certificate $19</small>&nbsp;&nbsp;</button>  
  </a>
                    </div></div></div></a></div></div>
                    </div>
            </div
        </div>
    </div>
</div>
<!-- Hero Section Content Ends Here-->
<!-- Accordion Section Starts Here -->
<div class="container-fluid bg-danger ">
  <div class=" col-md-11 bg-success ">
    <div class="row bg-primary">
      <div class="col-md-7"></div>
    </div>
  </div>
</div>
<!-- Accordion Section Ends Here -->
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
                <p class="text-right pt-3 text-secondary" style="font-size:15px;">Copyright ©2021 Educative, Inc. All rights reserved.   <img src="../images/soc2.svg" loading="lazy" alt="soc2" class="m-2 sm:m-0 sm:ml-5" style="width:20px"></p>
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

<script src="../js/script.js"></script> 
   <script src="../js/jquery.min.js"></script>
     <script src="../js/popper.min.js"></script> 
     <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
     <script src="../js/jquery-3.6.0.min.js"></script>


  </body>
 </html>