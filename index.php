 <?php
include('dbconnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
  if(isset($_REQUEST['rEmail'])){
    $rEmail = mysqli_real_escape_string($con,trim($_REQUEST['rEmail']));
    $rPassword = mysqli_real_escape_string($con,trim($_REQUEST['rPassword']));
    $sql = "SELECT s_email,s_password FROM registration WHERE s_email = '".$rEmail."' AND s_password= '".$rPassword."' limit 1";
    $result = $con->query($sql);
    if($result->num_rows == 1)
    {
      $_SESSION['is_login'] = true;
      $_SESSION['rEmail'] = $rEmail;

      echo "<script>location.href='Learn.php';</script>";
      exit;
    }else{
      $msg = "<script>
      swal({
        icon: 'error',
        title : 'Wrong Email Or Password',
      })
       </script>";

    }
  }
}else{
  echo "<script>location.href='learn.php';</script>";
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Educative Interactive Courses For Software Developers</title>
    <link rel="icon" href="images/redux.svg" type="image/icon">
    <link rel="stylesheet" href="css/major.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css"> -->
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
     /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  height:100vh;
  width: 100%;
  background-color: rgba(0,0,0,0.9);
  display:none;
  position: fixed;
  bottom: 0;  
  right:10px;
  left: 40px;
  padding:40px;
  /* border: 3px solid #f1f1f1; */
  z-index: 9;
  justify-content: center;
}

/* Add styles to the form container */
.form-container {
  max-width: 430px;
  height: 570px;
  padding: 25px;
  /* transform: translateX(400px); */
  /* background-color: red; */
  display: inline-block;
  margin-top: 140px;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #5553ff;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.icons1 li:hover{
  color:#3d3bb1;
  transition:0.2s all ease;
}
.cross:hover{
  background-color: rgba(0,0,0,0.1);
  transition:0.2s all ease;
}
</style>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-redux icon'></i>
        <div class="logo_name">Educative</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <form action="index.php">
         <input type="text" placeholder="Search..." required>
         <span class="tooltip">Search</span>
         </form>
      </li>

     <li>
       <a href="team.php">
         <i class='bx bxl-microsoft-teams' ></i>
         <span class="links_name">For Teams</span>
       </a>
       <span class="tooltip">For Teams</span>
     </li>
     <li>
       <a href="enterprizes.php">
         <i class='bx bxs-buildings' ></i>
         <span class="links_name">For Enterprizes</span>
       </a>
       <span class="tooltip">For Enterprizes</span>
     </li>
     <li>
       <a href="bootcamp.php">
         <i class='bx bx-shape-triangle' ></i>
         <span class="links_name">For Bootcamp</span>
       </a>
       <span class="tooltip">For Bootcamp</span>
     </li>
     <li>
       <a href="techhiring.php">
         <i class='bx bx-user-pin' ></i>
         <span class="links_name">For Tech Hiring Teams</span>
       </a>
       <span class="tooltip">For Tech Hiring Teams</span>
     </li>
     <li>
       <a href="#"  onclick="openForm()">
       <i class='bx bx-user-check'></i>
         <span class="links_name">Register & Login</span>
       </a>
       <span class="tooltip">Login</span>
     </li>
     <li>
       <a href="pricing.php">
         <i class='bx bx-money' ></i>
         <span class="links_name">Pricing</span>
       </a>
       <span class="tooltip">Pricing</span>
     </li>

     <!-- <li class="profile">
     </li> -->
    </ul>
  </div>
  <section class="home-section text-center bg-light">
    <div class="area">
    <div class="minSection d-inline-flex">
      <i class='bx bxl-redux navIcon'></i><h3 class="txt">Educative</h3>
      </div>
      <p class=>High Skilled Development Programs For Developers</p>
    </div>


    <div class="hero_section bg-light mt-2 ">
      <div class="hero_content p-4">
        <h3 class="hero1">
        Learn in-demand tech skills in half the time
        </h3>
        <p class="hero1 text-secondary">Hands-on courses help you learn without the hassle of setup or videos</p>

        <div class="btn">
          <button class="click1">Explore Courses & Paths</button>
        </div>
      </div>
      <div class="svg ">
      <div class="svg_doc ">
        <svg viewBox="0 0 903 517" fill="none"xmlns="http://www.w3.org/2000/svg" class="flex dark:hidden"><g clip-path="url(#landingPageImage)">
        <path d="M586.7 512.7a26.5 26.5 0 1153 0" fill="#fff"></path><path d="M673.3 355.5v39-39zM768.7 2.4V37 2.4v0zm-85.9 36h120.4-120.4zm51.3 0v40.2-40.2zm-51.3 40.2h191.8-191.8zm106 0v39-39zm-136.1 39h171.7-171.7zm90.3 0v39-39zm44 122.7v34.6-34.6zm85.9 36H752.5h120.4zm-51.3 0v40.2-40.2zm51.3 40.2H681h191.8zm-106 0v39-39 0zm136.1 39H731.3 903zm-90.3 0v39-39zm-341.5-290v34.6-34.6 0zm85.9 36H436.6h120.5zm-51.3 0v40.2-40.1 0zm51.3 40.2H365.3h191.8zm-106 0v39-39zm136.1 39H415.5h171.7zm-90.3 0v39-39zm150.8 59.6V275v-34.6zm85.8 36H613.1h120.4v0zm-51.3 0v40.2-40.2zm51.3 40.2H541.7h191.8v0zm-105.9 0v39-39 0zm136 39H592h171.7z" stroke="#DEDFE0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        <path opacity="0.1" d="M533.9 248.5v-.8a8.3 8.3 0 01-8.3 8.3h-143a8.3 8.3 0 01-8.3-8.3l159.6.8z" fill="#FCE3DE" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.1" d="M359.7 240h188.8v7.7H359.7V240z" fill="#8D7047" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M272 488s-2.7-68.6-40-97.3c0 0-6.7 56.9 20 107" fill="#D0F7DA"></path><path d="M272 488s-2.7-68.6-40-97.3c0 0-6.7 56.9 20 107" stroke="#A0A3A8" stroke-width="3"></path><path d="M248.9 465.5s-11.7-67.6-52.4-91.3c0 0 .7 57.3 33.8 103.5" fill="#D0F7DA"></path><path d="M248.9 465.5s-11.7-67.6-52.4-91.3c0 0 .7 57.3 33.8 103.5" stroke="#A0A3A8" stroke-width="3"></path><path d="M196.5 375.8s10.1 36.4 28.2 61.8l-28.2-61.8z" fill="#D0F7DA"></path><path d="M196.5 375.8s10.1 36.4 28.2 61.8" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M264.4 470.2s-8.3-68.1 24-102.4c0 0 15.7 55-2.7 108.8" fill="#D0F7DA"></path><path d="M264.4 470.2s-8.3-68.1 24-102.4c0 0 15.7 55-2.7 108.8" stroke="#A0A3A8" stroke-width="3"></path><path d="M268.2 373.9s.8 37.7-9.2 67.2l9.2-67.2z" fill="#D0F7DA"></path><path d="M268.2 373.9s.8 37.7-9.2 67.2" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M282 481s11.6-67.7 52.4-91.3c0 0-.8 57.2-33.9 103.4" fill="#D0F7DA"></path><path d="M282 481s11.6-67.7 52.4-91.3c0 0-.8 57.2-33.9 103.4" stroke="#A0A3A8" stroke-width="3"></path><path d="M207.5 472l12.4 37.2a5.4 5.4 0 005 3.1H309a5.4 5.4 0 005.2-3.8l11-37.2a5.4 5.4 0 00-5-7H212.3a5.4 5.4 0 00-4.9 7.7z" fill="#FCE3DE" stroke="#A0A3A8" stroke-width="3"></path><path opacity="0.3" d="M224.8 512.3a5.4 5.4 0 01-4.9-3.2L207.5 472a5.4 5.4 0 014.9-7.6h37.2v47.4l-24.8.6z" fill="#A0A3A8"></path><path d="M334.3 391.2s-10 36.4-28.2 61.8l28.2-61.8z" fill="#D0F7DA"></path><path d="M334.3 391.2s-10 36.4-28.2 61.8" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M648 165.4H256.6a15 15 0 00-15 15v249.2a15 15 0 0015 15H648a15 15 0 0015-15V180.3a15 15 0 00-15-15z" fill="#DAE1F2"></path><path d="M646.8 446.7h-389a18.3 18.3 0 01-18.2-18.3V181.6a18.3 18.3 0 0118.3-18.3h388.9a18.3 18.3 0 0118.3 18.3v246.8a18.3 18.3 0 01-18.3 18.3zm-389-279.3c-7.8 0-14.2 6.4-14.2 14.2v246.8a14.2 14.2 0 0014.3 14.2h388.9c7.9 0 14.2-6.4 14.2-14.2V181.6a14.2 14.2 0 00-14.2-14.2h-389z" fill="#455A7F"></path><path d="M263.5 184.5H641v210H263.5v-210z" fill="#fff"></path><path d="M641.1 396.5H263.5a2 2 0 01-2-2v-210a2 2 0 01.6-1.4 2 2 0 011.4-.7H641a2 2 0 012 2.1v210a2 2 0 01-2 2zm-375.6-4h373.6v-206H265.5v206z" fill="#455A7F"></path><path opacity="0.2" d="M325.3 235.5h-89.6a12.2 12.2 0 00-12.1 12.2v123.2c0 6.7 5.4 12.1 12.1 12.1h89.6c6.8 0 12.2-5.4 12.2-12.1V247.7c0-6.7-5.4-12.2-12.2-12.2z" fill="#6B6B6B"></path><g opacity="0.2" fill="#6B6B6B"><path opacity="0.2" d="M669.5 155.2h-257a15 15 0 00-15 15v160.1a15 15 0 0015 15h257a15 15 0 0015-15V170.2a15 15 0 00-15-15z"></path><path opacity="0.2" d="M673.4 346.7H408.6a12.5 12.5 0 01-12.4-12.5v-168c0-6.8 5.6-12.4 12.4-12.4h264.8c6.9 0 12.4 5.6 12.4 12.4v168c0 6.9-5.5 12.4-12.4 12.5zM408.6 156.6a9.7 9.7 0 00-9.7 9.6v168a9.7 9.7 0 009.7 9.6h264.8a9.7 9.7 0 009.7-9.6v-168a9.7 9.7 0 00-9.7-9.6H408.6z"></path></g><path d="M579.6 417.6h-338a2 2 0 010-4h338a2 2 0 110 4zm46.7 0H598a2 2 0 010-4h28.2a2 2 0 110 4zm35.6 0h-20.1a2 2 0 010-4h20.1a2 2 0 110 4zm-209.6 18.8a7.2 7.2 0 100-14.4 7.2 7.2 0 000 14.4z" fill="#455A7F"></path><path d="M430.4 444.6h43.8v55.6h-43.8v-55.6z" fill="#8F9092"></path><path d="M476.3 502.2h-48v-59.6h48v59.6zm-43.9-4h39.8v-51.5h-39.8v51.5z" fill="#455A7F"></path><path d="M373.8 500.2h157v13.6h-157v-13.6z" fill="#DAE1F2"></path><path d="M530.9 515.8H373.8a2 2 0 01-2-2v-13.6a2 2 0 012-2h157a2 2 0 012 2v13.6a2 2 0 01-2 2zm-155.1-4h153v-9.6h-153v9.6zm422-181.3a30.8 30.8 0 110-61.6 2 2 0 010 4 26.8 26.8 0 100 53.5 2 2 0 110 4zm12.8 33.1a2 2 0 110-4 13.4 13.4 0 000-26.8 2 2 0 010-4 17.5 17.5 0 110 34.8zM798.3 384a11.4 11.4 0 010-22.8 2 2 0 010 4.1 7.3 7.3 0 100 14.6 2 2 0 110 4zm35.4 132H784a2 2 0 110-4.1h49.9a2 2 0 110 4zm-623 1H60.3c-3.4 0-6.1-1-6.1-2.2 0-1.3 2.7-2.2 6-2.2h150.3c3.4 0 6.1 1 6.1 2.2 0 1.2-2.7 2.2-6 2.2zM805 364.3a2 2 0 01-1.3-3.6 2 2 0 012.7.1 2 2 0 01.5 2.3 2 2 0 01-2 1.2zm-.7-32.4a2 2 0 11.7 0 2 2 0 01-.8 0zm.6-59a2 2 0 11.8-.1l-.8.1zm-1.3 112a2 2 0 11.7-.2 2 2 0 01-.8.1zm4.6 3.6a2 2 0 110-4 2 2 0 012 2 2 2 0 01-2 2zM263.5 515.8h-32.9a2 2 0 110-4h32.9a2 2 0 110 4z" fill="#455A7F"></path><path d="M194 510.5H39.4c-8 0-14.4-6.5-14.4-14.4v-5.4c0-8 6.4-14.4 14.4-14.4H194" fill="#fff"></path><path d="M194 510.5H39.4c-8 0-14.4-6.5-14.4-14.4v-5.4c0-8 6.4-14.4 14.4-14.4H194" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M194.7 510H40c-8 0-14.4-5.3-14.4-11.8h169.2V510z" fill="#E8E8E8"></path><path d="M185 478.7v29.5" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.5 442.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5" fill="#fff"></path><path d="M19.5 442.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.5 442.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5" fill="#fff"></path><path d="M19.5 442.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.5 442.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5" fill="#fff"></path><path d="M28.6 410.6V440m-9.1 2.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5v34.1z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M195 444.6H35.5a4.1 4.1 0 00-4.1 4.1v19.6a4.1 4.1 0 004.1 4.1h159.3a4.1 4.1 0 004.2-4v-19.7a4.1 4.1 0 00-4.2-4h0z" fill="#96D1CD" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M165.4 375.6H6.1a4.1 4.1 0 00-4.1 4.1v19.6a4.1 4.1 0 004.1 4.1h159.3a4.1 4.1 0 004.2-4v-19.7a4.1 4.1 0 00-4.2-4z" fill="#FFAFA4" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M180.8 333.1H21.3a4.1 4.1 0 00-4.1 4.1v29.6a4.1 4.1 0 004 4.1h159.5a4.1 4.1 0 004-4.1v-29.6a4.1 4.1 0 00-4-4z" fill="#74C3E1" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M180.8 333.1H21.3a4.1 4.1 0 00-4.1 4.1v29.6a4.1 4.1 0 004 4.1h159.5a4.1 4.1 0 004-4.1v-29.6a4.1 4.1 0 00-4-4z" fill="#74C3E1" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M129.3 499.1h42-42zm40.3-80.3H39.4h130.2v0zM41.2 487.6h130.1H41.3v0zM95.5 499h19.8-19.8zm-54.3 0h42-42 0z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M683.9 140.4h-257a15 15 0 00-15 15v160a15 15 0 0015 15h257a15 15 0 0015-15v-160a15 15 0 00-15-15z" fill="#DAE1F2"></path><path d="M687.8 331.8H423a12.4 12.4 0 01-12.4-12.4v-168c0-6.8 5.5-12.4 12.4-12.4h264.8c6.9 0 12.4 5.6 12.4 12.4v168c0 6.9-5.5 12.4-12.4 12.4zM423 141.8a9.7 9.7 0 00-9.7 9.6v168a9.7 9.7 0 009.7 9.7h264.8a9.7 9.7 0 009.7-9.7v-168a9.7 9.7 0 00-9.7-9.7H423z" fill="#455A7F"></path><path d="M698.9 165.7v150.4a15 15 0 01-15 15h-257a15 15 0 01-15-15V165.7h287zm-44.2-7.7a5.4 5.4 0 10.5-10.7 5.4 5.4 0 00-.5 10.7zm-224.3 0a5.4 5.4 0 10.5-10.7 5.4 5.4 0 00-.5 10.7zm244.9 0a5.4 5.4 0 10.4-10.7 5.4 5.4 0 00-.4 10.7z" fill="#455A7F"></path><path d="M665.5 332h27.8v15.8h-27.8V332z" fill="#E8E9FC"></path><path d="M439.6 189.6h41.6" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M496 189.6h41.5" stroke="#74BF44" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M552.3 189.6H573" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M439.6 207.7H470" stroke="#67C7CC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M483 207.7h25.4" stroke="#EC2831" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M521.4 207.7h20.8" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M439.6 225.8h41.6" stroke="#74BF44" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M496 225.8h71" stroke="#67C7CC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M485.9 243.9h52.3-52.3zm-46.3 0h32.6-32.6z" stroke="#ECAA26" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M553.6 243.9h20.8" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M439.6 262h41.6" stroke="#67C7CC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M496 262h28.5" stroke="#74BF44" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M439.6 280H470" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M483 280h38.4" stroke="#67C7CC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M439.6 298.2h15.2" stroke="#EC2831" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M466.6 298.2h41.6" stroke="#74BF44" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M521.7 298.2h20.8" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M534 280h38.5" stroke="#67C7CC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M641.3 286.1l-.2.2-4 4.1a1 1 0 000 1.5l5.9 6h.2l-1.7 1.7-.2-.1-5.9-6a1 1 0 00-1.5 0l-4 4-.3.3-6.8-18.5 18.5 6.8z" fill="#fff"></path><path d="M313.8 224h-89.2a12.4 12.4 0 00-12.4 12.4v122.7c0 6.9 5.6 12.4 12.4 12.4h89.2c6.8 0 12.3-5.5 12.3-12.4V236.4c0-6.8-5.5-12.4-12.3-12.4z" fill="#fff" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M233.6 254a7.7 7.7 0 100-15.5 7.7 7.7 0 000 15.5z" fill="#455A7F"></path><path d="M251.4 246.3h48" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M263 264.4h25-25zm-11.6 4.6a4.6 4.6 0 100-9.3 4.6 4.6 0 000 9.3zM263 281h35-35zm-11.6 4.6a4.6 4.6 0 100-9.2 4.6 4.6 0 000 9.2v0zm11.6 12.2h18.6H263zm-11.6 4.6a4.6 4.6 0 100-9.3 4.6 4.6 0 000 9.3z" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M233.6 326.5a7.7 7.7 0 100-15.4 7.7 7.7 0 000 15.4z" fill="#455A7F"></path><path d="M251.4 318.8H291" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M263 336.9h28-28zm-11.6 4.6a4.6 4.6 0 100-9.2 4.6 4.6 0 000 9.2zm35.4 12.1h17.5-17.5zm-23.8 0h17.5H263h0zm-11.6 4.6a4.6 4.6 0 100-9.2 4.6 4.6 0 000 9.2v0z" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M224.8 379.5c0-2-1.2-4.1-1.2-6.2h16l-.5 12.8c-2.7 0-4.8-.7-7.5-.7" fill="#E8E9FC"></path><path opacity="0.4" d="M724.4 447l7.6-48 11.4 2.2-9.5 59.7-9.6-2.2V447h0z" fill="#FFBB4D" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.4" d="M730.5 408.6l11.4 2.3" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.4" d="M715 452.5v-48.8l11.7.5-.2 60.5-9.7-.7-1.8-11.5h0z" fill="#C7C8C9" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.4" d="M702.7 465.4l-12.9-44.8a1.9 1.9 0 011.4-2.4l7.6-1.8a2 2 0 012.3 1.3l15.6 54.4a2 2 0 01-.7 2.1 2 2 0 01-.8.3l-6 1.3a2 2 0 01-2.2-1l-4.2-9.2-.1-.2z" fill="#455A7F"></path><path opacity="0.4" d="M716.3 411h-4.9v17.7" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.4" d="M733 400.3l-1.1 7.3 8.8 1.8 1.1-7.3-8.8-1.8z" fill="#FF7DCC"></path><path d="M696.1 511.6h39l6.5-66.6H688l8.1 66.6z" fill="#CFEBF9"></path><path d="M736.4 515.7h-41.5a1.4 1.4 0 01-1.4-1.2l-8.5-69.6a1.5 1.5 0 01.3-1 1.5 1.5 0 011-.6h57a1.4 1.4 0 011.3 1l.1.6-6.9 69.5a1.4 1.4 0 01-1.4 1.3zm-40.3-2.9h39l6.5-66.6H688l8.1 66.7z" fill="#A0A3A8"></path><path d="M856.4 515.8H287.2a2 2 0 110-4h569.2a2 2 0 110 4z" fill="#455A7F"></path><path d="M847 484H679.3a4.1 4.1 0 00-4.1 4.1v19.6a4.1 4.1 0 004 4.1H847a4.1 4.1 0 004.1-4V488a4.1 4.1 0 00-4-4h0z" fill="#FFCDB2" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M375 138.5h-82a9.2 9.2 0 00-9.3 9.2v49c0 5 4.2 9.2 9.3 9.2h82c5 0 9.1-4.2 9.1-9.3v-48.9c0-5-4-9.2-9.2-9.2v0z" fill="#fff" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.2" d="M381.9 145.9h-82a9.2 9.2 0 00-9.2 9.2V204c0 5 4.2 9.2 9.3 9.2h81.9c5 0 9.2-4.1 9.2-9.2V155c0-5.1-4.1-9.2-9.2-9.2z" fill="#6B6B6B"></path><path d="M327 186l13.3-27-13.2 27zm-11.8-27.6l-13 13 14.2 14-1.2-27v0zm36.3.6l13 13-14.2 14 1.2-27h0z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path opacity="0.2" d="M363.6 357h259.2v21.5H363.6v-21.4z" stroke="#455A7F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M222.7 474.7h101-101zm5.9 29.7h15-15zm25.2 0H306h-52.3zm93.4-244.6h35.6-35.6zm0 17.7h35.6-35.6zm0 17.7h35.6-35.6zm0 17.7h35.6-35.6z" fill="#FCE3DE"></path><path d="M347.2 313h35.6-35.6zM222.7 474.6h101-101zm5.9 29.7h15-15zm25.2 0H306h-52.3zm93.4-244.6h35.6-35.6zm0 17.7h35.6-35.6zm0 17.7h35.6-35.6z" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M385.9 144h24.7v19.3h-24.7V144z" fill="#E8E9FC"></path><path d="M613.2 490.4v12-12zm-25.9 12.8h48.3-48.3z" fill="#FCE3DE"></path><path d="M587.4 503.2h48.1-48.1zm25.8-12.8v12-12z" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M641.1 515.3h-55.9a2 2 0 01-2-2 30 30 0 1160 0 2 2 0 01-2 2zm-53.8-4H639a26 26 0 00-51.6 0z" fill="#455A7F"></path><path d="M71.3 345.8h3.4a3 3 0 012 .7c.5.4.8 1 .8 1.8s-.3 1.4-.8 1.9a3 3 0 01-2 .6h-2.4v3.5h-1v-8.5zm3.3 4.2c1.3 0 1.9-.6 1.9-1.7 0-1-.7-1.7-2-1.7h-2.2v3.4h2.3zm10.8-4.2l-3.4 4.5v4h-1v-4l-3.3-4.5H79l2.7 3.7 2.7-3.7h1zm3 8.5v-7.6h-2.9v-.9h6.9v.9h-3v7.6h-1zm11.2-8.5h1v8.5h-1v-3.9h-5v3.9h-1v-8.5h1v3.8h5v-3.8zm6.6 8.6c-.7 0-1.4-.2-2-.5-.6-.4-1.1-1-1.4-1.5-.3-.8-.5-1.5-.5-2.3 0-1 .2-1.7.5-2.3.3-.7.8-1.2 1.3-1.5a4 4 0 012.1-.6c.8 0 1.5.2 2 .6.6.3 1.1.8 1.4 1.5.3.6.5 1.4.5 2.3 0 .8-.2 1.6-.5 2.3-.3.6-.8 1.1-1.4 1.5-.5.3-1.2.5-2 .5zm0-.8c.9 0 1.6-.4 2-1a4 4 0 00.8-2.6 4 4 0 00-.7-2.5c-.5-.6-1.2-1-2.1-1-.9 0-1.6.4-2.1 1s-.8 1.4-.8 2.6c0 1 .3 2 .8 2.5.5.6 1.2 1 2.1 1zm11.5-7.8h.9v8.5h-.8l-5-6.8v6.8h-1v-8.5h.8l5 6.8v-6.8z" fill="#fff"></path><path d="M705.8 500.6h.7c.4 0 .7-.2 1-.4.1-.3.3-.6.3-1v-6.3h1v6.3c0 .7-.2 1.2-.6 1.6-.4.4-.9.6-1.6.6h-.8v-.8zm11.5.8l-1-2.2H712l-.9 2.2h-1l3.7-8.5h.9l3.7 8.5h-1zm-5-3h3.7l-1.9-4.3-1.8 4.3zm12.7-5.5h1l-3.7 8.5h-.8l-3.7-8.5h1l3.1 7.3 3.1-7.3zm7.8 8.5l-1-2.2h-4.4l-.9 2.2h-1l3.7-8.5h.9l3.7 8.5h-1zm-5-3h3.7l-1.9-4.3-1.8 4.3z" fill="#455A7F"></path><path d="M105.3 461.4c-.8 0-1.5-.1-2-.5-.7-.3-1.2-.9-1.5-1.5-.3-.7-.4-1.5-.4-2.3 0-.9.1-1.7.4-2.3.4-.7.8-1.2 1.4-1.5a4.6 4.6 0 013.7-.2c.5.1 1 .4 1.3.7l-.4.8c-.7-.6-1.6-1-2.5-1-1 0-1.6.3-2.1 1a4 4 0 00-.8 2.5c0 1.1.3 2 .8 2.6.5.6 1.2.9 2.1.9 1 0 1.8-.4 2.5-1l.4.8-1.3.8-1.6.2zm10-3.9v.8h-2.5v2.5h-.8v-2.5h-2.5v-.8h2.5V455h.8v2.5h2.5zm7.2 0v.8h-2.6v2.5h-.7v-2.5h-2.6v-.8h2.6V455h.7v2.5h2.6z" fill="#fff"></path><path d="M73.6 392.6h-1l-1.5-2.8c-.1-.3-.3-.5-.6-.6a2 2 0 00-1-.2H68v3.6h-1V384h3.5c1 0 1.7.2 2.1.6.5.4.8 1 .8 1.8 0 .6-.2 1.2-.6 1.6-.4.4-.9.6-1.6.8.3 0 .4.1.6.3l.5.6 1.4 2.8zm-3.2-4.5c.6 0 1.1 0 1.4-.4.4-.2.5-.6.5-1.2 0-.5-.1-1-.5-1.2-.3-.3-.8-.4-1.4-.4h-2.5v3.3h2.5zm8.1 4.5c-1.1 0-2-.3-2.5-.8-.6-.6-.9-1.4-.9-2.6v-5.1h1v5.2c0 .8.2 1.5.6 1.9.4.4 1 .6 1.8.6s1.4-.2 1.8-.6c.4-.4.6-1 .6-1.9v-5.2h1v5.1c0 1.2-.3 2-1 2.6-.5.6-1.3.8-2.4.8zm10.2-4.4c.5.1.8.4 1.1.7.3.4.4.8.4 1.3a2.1 2.1 0 01-.7 1.8c-.5.4-1.2.6-2 .6h-3.6V384h3.4c.9 0 1.5.2 2 .6.5.4.7.9.7 1.6a2 2 0 01-1.3 1.9zm-3.9-.4h2.3c.7 0 1.1 0 1.5-.3.3-.3.5-.7.5-1.2 0-1-.7-1.4-2-1.4h-2.3v3zm2.5 4c.7 0 1.2-.2 1.5-.4.3-.3.5-.7.5-1.2 0-1-.7-1.5-2-1.5h-2.5v3h2.5zm10.9-7.7l-3.4 4.4v4h-1v-4l-3.3-4.4h1.2l2.7 3.6 2.7-3.6h1z" fill="#455A7F"></path><path d="M14 391.2v-15.4 15.4zm174.8 80.2V456v15.4zm-147 0V456v15.4zm644 13.4v23.4-23.4z" fill="#fff"></path><path d="M685.8 484.8v23.4-23.4zM14.1 391.2v-15.4 15.4zm174.7 80.2V456v15.4zm-147 0V456v15.4z" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.3 410.6h8.5V440h-8.5v-29.5zm170.4 67.8h8.5V508h-8.5v-29.5z" fill="#E8E9FC"></path><path d="M18.2 361.1H185v8H18.2v-8z" fill="#3AA0BF"></path><path d="M169.6 371.3V340v31.4zm-141.1 0V340v31.4z" fill="#fff"></path><path d="M28.4 371.3V340v31.4zm141.2 0V340v31.4z" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M31.5 463.7H199v7.7H31.5v-7.7z" fill="#4BBCB1"></path><path d="M194 510.5H39.4c-8 0-14.4-6.5-14.4-14.4v-5.4c0-8 6.4-14.4 14.4-14.4H194" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M31.5 442.5h143.6c7.9 0 14.4-5.3 14.4-11.9h-158v12z" fill="#E8E8E8"></path><path d="M169.6 430.4h-42 42zm-54.3 0h-76 76z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M375.8 508.4h153v3.3h-153v-3.3z" fill="#8F9092"></path><path opacity="0.1" d="M704.7 445.3v39.3l-13.4-.6-6.4-39 19.8.3z" fill="#455A7F"></path><path d="M180.8 333.1H21.3a4.1 4.1 0 00-4.1 4.1v29.6a4.1 4.1 0 004 4.1h159.5a4.1 4.1 0 004-4.1v-29.6a4.1 4.1 0 00-4-4z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 395h167.5v8.4H2V395z" fill="#EF867B"></path><path d="M165.4 375.6H6.1a4.1 4.1 0 00-4.1 4.1v19.6a4.1 4.1 0 004.1 4.1h159.3a4.1 4.1 0 004.2-4v-19.7a4.1 4.1 0 00-4.2-4zm29.5 69H35.6a4.1 4.1 0 00-4.1 4.1v19.6a4.1 4.1 0 004.1 4.1h159.3a4.1 4.1 0 004.2-4v-19.7a4.1 4.1 0 00-4.2-4h0z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M188.8 471.4V456v15.4zm-147 0V456v15.4z" fill="#fff"></path><path d="M41.8 471.4V456v15.4zm147 0V456v15.4z" stroke="#455A7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M687.4 503.8h160.8v5.6H687.4v-5.6z" fill="#ED956E"></path><path d="M762.6 411.7l3.4 25.8 74.3.6 2-26.4h-79.7z" fill="#fff"></path><path d="M766 438.6l5.3 42.4h63.3l3.8-42.4H766z" fill="#8C7047"></path><path d="M815.5 471.5a12.2 12.2 0 100-24.4 12.2 12.2 0 000 24.4z" fill="#fff"></path><path d="M815.5 474.7a15.4 15.4 0 11-.8-30.9 15.4 15.4 0 01.8 31zm0-24.4a9 9 0 100 18 9 9 0 000-18z" fill="#455A7F"></path><path d="M773.4 484.8l2.6 22.8h55.3l2.2-22.8h-60z" fill="#fff"></path><path d="M764.2 412.8l3.4 25.8 24.8.7v-26.5h-28.2zm6.7 70.5l3.5 25.8 18 .6v-26.4h-21.5z" fill="#E8E8E8"></path><path d="M838.4 440.7H766a2 2 0 010-4.1h72.4a2 2 0 010 4z" fill="#455A7F"></path><path d="M19.5 442.3h154.8a14.4 14.4 0 0014.4-14.4v-5.3c0-8-6.5-14.4-14.4-14.4H19.5" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M833.1 511.6h-58.6a2 2 0 01-2-1.8l-12-98.2a2 2 0 011.1-2c.3-.2.6-.2.9-.2h80.3a2 2 0 012 2.2l-9.6 98.2a2 2 0 01-2 1.8zm-56.8-4h55l9.3-94.2h-75.8l11.5 94.2z" fill="#455A7F"></path><path d="M841.9 421.2h-78.3a2 2 0 110-4H842a2 2 0 110 4zm-7.3 63.6h-63.4a2 2 0 110-4h63.4a2 2 0 012 1.2 2 2 0 01-2 2.8z" fill="#455A7F"></path><path d="M697.5 453h43.4-43.4zm-7.2 11.3h42.2-42.2zm12 12.6h35.6-35.6z" fill="#FCE3DE"></path><path d="M702.3 476.9h35.6-35.6zm-4.8-23.9h43.4-43.4zm-7.2 11.3h42.2-42.2z" stroke="#A0A3A8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M153 145.1v39-39zM127.2 30v34.6-34.6 0zm85.9 36H92.7h120.5zm-51.3 0v40.2V66zm51.3 40.2H21.3h191.8v0zm-106 0v39-39 0zm117.6 39H71.5h153.3v0z" stroke="#DEDFE0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M75 169.9a54.3 54.3 0 101.5-108.6A54.3 54.3 0 0075 169.9z" fill="#F2F3F4" stroke="#A0A3A8" stroke-width="3"></path><path opacity="0.2" d="M128.7 113.8a54.3 54.3 0 11-108.6 0h108.6z" fill="#A0A3A8"></path><path d="M75 160.7a45.1 45.1 0 100-90.3 45.1 45.1 0 000 90.3v0z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1.04 1.04"></path><path d="M70.8 124.6l15-28.1-15 28.1zM50.7 84.4l35.2 45.3-35.2-45.3v0z" stroke="#455A7F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="landingPageImage"><path fill="#fff" d="M0 0h903v517H0z"></path></clipPath></defs></svg>
      </div>
      <span class="j1">
        <p>
        Trusted by over 675,000 learners working for companies like
        </p>
      </span>
    </div>

    <div class="container pt-3 pb-3">
      <div class="row ">
        <div class="col-sm-1"></div>
        <div class="col-sm-2"><svg width="94" class="m-3" height="24" xmlns="http://www.w3.org/2000/svg" aria-label="Netflix" class="fill-current"><path d="M11.7 22.4c-1.3.3-2.6.3-4 .5l-4-12.5v13L0 24V0h3.4l4.7 13.6V0h3.6v22.4zm7-13.6h4.9v3.7h-4.9v5.6l6.4-.4v3.6l-10 .8V0h10v3.8h-6.3v5zm19.8-5h-3.8V21h-3.6V3.7h-3.7V0h11v3.8zm5.8 4.7h4.9v3.8h-5v8.5h-3.4V0h10v3.8h-6.5v4.7zm12.3 9l6.1.3v3.7L53 21V0h3.6v17.5zm9.2 4.3l3.5.3V0h-3.6v21.8zM85 0l-4.5 11.4L85 24l-4-.7-2.6-7-2.6 6.4-3.9-.5 4.6-11L72.3 0h4l2.3 6.3L81 0H85z"></path></svg>
      </div>
      <div class="col-sm-2">
      <svg width="111" height="23" class="m-3" xmlns="http://www.w3.org/2000/svg" aria-label="Facebook" class="fill-current"><path d="M57.1 11.3a5 5 0 00-2.2.6v6.8h1.6c2.2 0 2.5-1 2.5-2.3V13c0-1-.4-1.8-1.9-1.8zm-14.4-.4c-1.5 0-1.8.8-1.8 1.9v.5h3.7v-.5c0-1-.4-1.9-1.9-1.9zm-28 7.1c0 .8.5 1.2 1.3 1.2.9 0 1.4-.2 2.1-.5V17h-2c-1 0-1.3.2-1.3 1zm56.5-6.7c-1.6 0-2 .8-2 1.8V17c0 1 .4 1.8 2 1.8 1.5 0 2-.8 2-1.8V13c0-1-.5-1.8-2-1.8zm-63.8 11H2.9V11.4H.8V7.8H3V5.6C3 2.6 4.2.8 7.7.8h3v3.7H9C7.5 4.5 7.4 5 7.4 6v1.8h3.3l-.4 3.7h-3v10.7zm15.1 0h-3.7l-.1-1a8.5 8.5 0 01-4.2 1c-2.7 0-4.2-1.7-4.2-4.2 0-3 1.7-4 4.7-4h3v-.7c0-1.5 0-2-2.4-2h-3.8l.4-3.6h4.1c5.1 0 6.2 1.6 6.2 5.7v8.7zm12.6-10.5c-2.3-.4-3-.5-4-.5-2 0-2.7.4-2.7 2.1v3.2c0 1.7.6 2.1 2.6 2.1 1.1 0 1.8 0 4.1-.5v3.6c-2 .5-3.3.6-4.4.6-4.8 0-6.7-2.5-6.7-6.1v-2.6c0-3.6 2-6.1 6.7-6.1 1 0 2.4.1 4.4.6v3.6zM49 16.3h-8.1v.3c0 1.7.6 2.1 2.6 2.1 1.7 0 2.8 0 5.1-.5v3.6c-2.2.5-3.3.6-5.5.6-4.8 0-6.7-2.5-6.7-6.1v-3c0-3.1 1.4-5.7 6.3-5.7s6.3 2.6 6.3 5.7v3zm14.4 0c0 3.6-1 6.1-7 6.1-2.2 0-3.5-.2-6-.6v-20l4.5-.6v7c1-.4 2.2-.6 3.3-.6 4.5 0 5.2 2 5.2 5.2v3.6zm14.2.1c0 3-1.2 6-6.4 6s-6.5-3-6.5-6v-2.9c0-3 1.3-5.9 6.5-5.9s6.4 3 6.4 6v2.8zm14.2 0c0 3-1.2 6-6.4 6s-6.5-3-6.5-6v-2.9c0-3 1.3-5.9 6.5-5.9s6.4 3 6.4 6v2.8zm14.6 5.8h-4.8l-4-6.8v6.8H93V2l4.4-.7v13l4.1-6.4h4.8l-4.4 7 4.4 7.4zm-21-11c-1.5 0-2 1-2 2v3.7c0 1 .5 1.8 2 1.8s2-.8 2-1.8V13c0-1-.5-1.8-2-1.8zm23.5 8.5c.8 0 1.4.6 1.4 1.3 0 .8-.6 1.4-1.3 1.4a1.4 1.4 0 01-1.4-1.4c0-.7.6-1.3 1.4-1.3zm0 .2c-.6 0-1 .5-1 1.1 0 .7.5 1.2 1 1.2.6 0 1.1-.5 1.1-1.2 0-.6-.5-1.1-1-1.1zm-.2 2h-.3v-1.6h.5l.5.1v.3c0 .2 0 .3-.2.4.1 0 .2.1.3.4v.3h-.2a1.1 1.1 0 01-.1-.4c0-.1-.1-.2-.3-.2h-.2v.6zm0-.9h.2c.2 0 .3 0 .3-.3 0-.1 0-.2-.3-.2h-.2v.5z"></path></svg>
      </div>
      <div class="col-sm-2">
      <svg width="36" height="43" class="m-1" xmlns="http://www.w3.org/2000/svg" aria-label="Apple" class="fill-current"><path d="M35.3 33.5a23.4 23.4 0 01-2.3 4.1 21.1 21.1 0 01-3 3.6 5.7 5.7 0 01-3.8 1.7c-1 0-2.2-.3-3.5-.8a10 10 0 00-3.8-.9c-1.2 0-2.5.3-4 .9-1.3.5-2.4.8-3.3.9-1.3 0-2.6-.6-3.9-1.8a22 22 0 01-3-3.7A25.8 25.8 0 011.3 31 24 24 0 010 23.2c0-2.9.6-5.4 1.9-7.5a11 11 0 013.9-4 10.4 10.4 0 015.2-1.4c1 0 2.4.3 4 1 1.8.6 2.8.9 3.3.9.4 0 1.6-.4 3.6-1.1 2-.7 3.5-1 4.9-.9 3.6.3 6.3 1.7 8 4.3a9 9 0 00-4.7 8.2 9.1 9.1 0 003 6.8 9.7 9.7 0 002.9 2 32.3 32.3 0 01-.8 2zM27 .9a9.2 9.2 0 01-2.3 6c-2 2.2-4.2 3.5-6.6 3.2a6.7 6.7 0 01-.1-.8c0-2 .9-4.2 2.5-6 .8-1 1.8-1.7 3-2.3a9 9 0 013.4-1l.1.9z"></path></svg>
      </div>
      <div class="col-sm-2 ">
      <svg width="97" height="32" class="m-3" xmlns="http://www.w3.org/2000/svg" aria-label="Google" class="fill-current"><path d="M41.6 16.8a7.8 7.8 0 01-8 7.9c-4.4 0-8-3.4-8-8 0-4.5 3.6-7.8 8-7.8s8 3.3 8 7.9zm-3.5 0c0-2.9-2-4.8-4.5-4.8-2.4 0-4.5 2-4.5 4.8s2 4.8 4.5 4.8 4.5-2 4.5-4.8zm20.7 0c0 4.5-3.6 7.9-8 7.9s-8-3.4-8-8a7.8 7.8 0 018-7.8c4.4 0 8 3.3 8 7.9zm-3.5 0c0-2.9-2-4.8-4.5-4.8-2.4 0-4.5 2-4.5 4.8s2.1 4.8 4.5 4.8 4.5-2 4.5-4.8zm20-7.4v14.1c0 5.8-3.4 8.2-7.5 8.2a7.6 7.6 0 01-7-4.6l3-1.3a4.4 4.4 0 004 2.8c2.6 0 4.2-1.6 4.2-4.6v-1.1c-.9 1-2.4 1.8-4.3 1.8a7.8 7.8 0 01-7.6-7.9c0-4.5 3.6-8 7.6-8 2 0 3.4 1 4.2 1.8h.1V9.4h3.4zm-3 7.4c0-2.8-1.9-4.8-4.3-4.8s-4.4 2-4.4 4.8c0 2.7 2 4.7 4.4 4.7 2.4 0 4.3-2 4.3-4.7zm8.5-15.7v23h-3.4v-23zm13.3 18.3l2.8 1.8a8 8 0 01-6.7 3.5 7.8 7.8 0 01-7.9-8c0-4.6 3.4-7.8 7.5-7.8s6.2 3.2 6.8 5l.4.9-10.7 4.4a4 4 0 004 2.4c1.7 0 3-1 3.8-2.2zm-8.3-2.9l7-2.9c-.3-1-1.5-1.7-2.9-1.7a4.3 4.3 0 00-4.1 4.6zm-73.1-1.8v-3.3H24l.1 2a11 11 0 01-2.9 7.8c-2.2 2.3-5 3.5-8.6 3.5C5.9 24.7 0 19.2 0 12.4S6 .2 12.7.2c3.8 0 6.4 1.4 8.5 3.3L18.8 6a8.7 8.7 0 00-6.1-2.4 8.8 8.8 0 00-8.9 9c0 4.8 3.9 8.8 8.9 8.8a8.3 8.3 0 006.2-2.4 6.9 6.9 0 001.9-4.2h-8.1z"></path></svg>
      </div>
      <div class="col-sm-2">
        <svg width="81" height="25" class="m-4" xmlns="http://www.w3.org/2000/svg" aria-label="Amazon" class="fill-current"><g fill-rule="evenodd"><path d="M50.3 19.5A30.3 30.3 0 0132.9 25a31.1 31.1 0 01-21.3-8.4c-.4-.4 0-1 .5-.6a42 42 0 0021.2 5.8c5.3 0 11-1.1 16.3-3.4.8-.4 1.4.5.7 1.1"></path><path d="M52.2 17.2c-.6-.8-4-.4-5.5-.2-.5 0-.5-.3-.1-.6 2.7-2 7.1-1.4 7.6-.7.5.6-.1 5.1-2.7 7.3-.3.3-.7.1-.5-.3.5-1.4 1.8-4.7 1.2-5.5M46.8 2.7V.8a.5.5 0 01.5-.4h8.2c.3 0 .5.2.5.4v1.6c0 .3-.2.7-.6 1.2L51 10a9 9 0 014.7 1c.3.2.4.5.5.7v2c0 .3-.3.6-.6.5a9.3 9.3 0 00-8.8 0c-.3.1-.6-.2-.6-.4v-2c0-.3 0-.8.3-1.3l5-7.2h-4.3a.5.5 0 01-.5-.5m-30 11.8h-2.5a.5.5 0 01-.5-.5V1c0-.3.2-.5.5-.5h2.3c.3 0 .5.2.5.4v1.8C17.7.9 19 0 20.4 0c1.6 0 2.6.8 3.3 2.5A3.6 3.6 0 0127 0c1.1 0 2.2.5 3 1.5.7 1 .6 2.7.6 4V14a.5.5 0 01-.5.5h-2.5a.5.5 0 01-.5-.5V7 4.5c-.2-.8-.8-1-1.5-1-.6 0-1.3.3-1.5 1-.3.7-.2 1.8-.2 2.5v7a.5.5 0 01-.5.5H21a.5.5 0 01-.5-.5V7c0-1.5.3-3.6-1.5-3.6s-1.8 2-1.8 3.6v7a.5.5 0 01-.4.5M63 0c3.7 0 5.7 3.3 5.7 7.4 0 4-2.2 7.2-5.7 7.2-3.7 0-5.7-3.2-5.7-7.3s2-7.3 5.7-7.3m0 2.7c-1.8 0-2 2.6-2 4.2s0 5 2 5 2-2.7 2-4.4c0-1.1 0-2.5-.3-3.5s-.9-1.3-1.7-1.3m10.5 11.7h-2.5a.5.5 0 01-.4-.5V.8a.5.5 0 01.5-.4h2.3a.5.5 0 01.4.4v2h.1C74.7 1 75.7 0 77.4 0c1.1 0 2.2.4 3 1.6.6 1 .6 2.8.6 4V14a.5.5 0 01-.5.5H78a.5.5 0 01-.4-.5V7c0-1.4.1-3.5-1.6-3.5-.6 0-1.2.4-1.5 1a6 6 0 00-.4 2.5v7a.5.5 0 01-.4.6M40.3 8.2c0 1 0 1.8-.5 2.7-.4.7-1 1.2-1.7 1.2-1 0-1.6-.8-1.6-1.9 0-2.2 2-2.6 3.8-2.6v.6m2.5 6.2a.5.5 0 01-.6 0c-.8-.6-1-1-1.4-1.6-1.4 1.4-2.4 1.8-4.2 1.8-2.1 0-3.7-1.3-3.7-4 0-2 1-3.4 2.6-4.1 1.4-.6 3.3-.8 4.8-1v-.3c0-.6 0-1.3-.3-1.8s-1-.7-1.5-.7c-1 0-1.8.5-2 1.6 0 .2-.2.4-.4.4l-2.4-.2c-.2 0-.5-.3-.4-.6.5-3 3.2-3.9 5.6-3.9 1.2 0 2.8.3 3.8 1.3 1.2 1.1 1 2.7 1 4.4v4c0 1.2.6 1.7 1 2.4.2.2.2.5 0 .6l-2 1.7M7.5 8.2c0 1 0 1.8-.5 2.7-.4.7-1 1.2-1.7 1.2-1 0-1.5-.8-1.5-1.9 0-2.2 1.9-2.6 3.7-2.6v.6m2.5 6.2a.5.5 0 01-.6 0c-.8-.6-1-1-1.4-1.6-1.4 1.4-2.4 1.8-4.1 1.8-2.1 0-3.8-1.3-3.8-4 0-2 1.1-3.4 2.7-4.1 1.3-.6 3.2-.8 4.7-1v-.3c0-.6 0-1.3-.3-1.8s-1-.7-1.4-.7c-1 0-1.8.5-2 1.6 0 .2-.2.4-.5.4L.8 4.5c-.2-.1-.4-.3-.4-.6C1 1 3.6 0 6 0c1.3 0 2.8.3 3.8 1.3C11 2.4 10.9 4 10.9 5.7v4c0 1.2.5 1.7 1 2.4v.6l-2 1.7"></path></g></svg>
      </div>
    </div>
    </div>

    <!-- Second Area Started -->
      <div class="container-fluid bg-white">
      <div class="container content1 pt-3">
      <h1 class="k1 ">Hands-on coding environments</h1>
      <p class="p1" >You don’t get better at swimming by watching others. Coding is no different. Practice as<br> you learn with live code environments inside your browser.</p>
    </div>

    
    <div class="video mt-5 pt-3 mb-5 bg-white container">
    <div class="w-full px-5 bg-white">
      <div style="position:relative;padding-top:56.25%;overflow:hidden;box-shadow:0px 2px 4px rgba(0, 0, 0, 0.06), 0px 4px 6px rgba(0, 0, 0, 0.1)" class="w-full rounded-md">
      <iframe src="https://player.vimeo.com/video/494436751?autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1&amp;quality=720p" allow="autoplay; fullscreen" frameborder="0" title="landing-page-video" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"></iframe></div></div>
    </div>
  

    <div class="container-fluid bg-white pt-5 pb-5">
    <div class="container bg-white">
      <img src="images/languages.svg" class="bg-white pt-3 pb-5" alt="">
    </div>
    </div>
    </div>
<!-- Second Section Ends Here -->

<!-- Third Sections Starts Here -->
    <div class="container-fluid">
      <div class="container content2">
        <div class="row">
          <div class="col-sm-6 pb-1 pt-3 text-left float-center">
            <div class="col1 text-left">
            <h1 class="i1 text-left">Faster than videos</h1>
            <p class="i2 text-left">Videos are holding you back. The average video tutorial is spoken at 150 words per minute, while you can read at 250. That's why our courses are text-based.</p>
            </div>
            <div class="check ">
            <div class="mt-4 flex text-left">
            <i class='bx bx-check-circle p-2' style="color:#5553FF;"></i>
            <span class="text-base ">Learn at your own pace</span>
          </div>
            <div class="mt-4 flex text-left">
            <i class='bx bx-check-circle p-2' style="color:#5553FF;"></i>
            <span class="text-base">Highlight Things</span>
          </div>
            <div class="mt-4 flex text-left">
            <i class='bx bx-check-circle p-2' style="color:#5553FF;"></i>
            <span class="text-base ">Save Notes</span>
          </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="image p-1 pt-4 pb-5">
              <img  src="images/hodding.webp" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Third Section Ends Here -->

    <!-- Fouth Section Starts Here -->

    <div class="container-fluid bg-white  mt-5 pb-5">
        <div class="scroller container">
          <div class="content1 pt-4">
            <h1 class="k1">Stop scrolling. Start coding.</h1>
            <p class="p1">Kick off your new skillset with these free courses.</p>
          </div>
          <div class="cards">
          <div class="row">
              <div class="col-sm-4">
                
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-3 mb-6 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="/courses/getting-started-braintree-api" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c1.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold text-left dark:text-dark-contrastText" style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Getting Started with<br> Braintree API</p><div class="flex items-center justify-between mt-auto">
                    <div class="flex items-start m-2 flex-col text-left"><svg width="38" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left">Beginner</p></div>
                    <button class=" click2 float-right">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>

                    <div class="col-sm-4">
                      
                    <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-3 mb-6 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="/courses/getting-started-braintree-api" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c2.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left" style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Integretion With Stripe API</p> <br><div class="flex items-center justify-between mt-auto">
                    <div class="flex items-start m-2 flex-col text-left"><svg width="38" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left">Beginner</p></div>
                    <button class="click2 float-right">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

                    <div class="col-sm-4">
                      
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-3 mb-6 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="/courses/getting-started-braintree-api" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c3.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2  text-left font-bold dark:text-dark-contrastText" style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Learn Perl From Scratch</p><br><div class="flex items-center justify-between mt-auto">
                    <div class="flex items-start m-2 flex-col text-left"><svg width="38" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide text-left mt-1 capitalize text-dark">Beginner</p></div>
                    <button class="click2 float-right">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

            </div>
          </div>

          <div class="row pt-3 pb-3">
              <div class="col-sm-4">
                
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-3 mb-6 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="/courses/getting-started-braintree-api" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c4.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left" style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Integrate Auth0 with Java<br> Servlet Application</p><div class="flex items-center justify-between mt-auto">
                    <div class="flex items-start m-2 flex-col text-left"><svg width="38" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left">Beginner</p></div>
                    <button class="click2 float-right">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
              </div>

                    <div class="col-sm-4">
                      
                    <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-3 mb-6 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="/courses/getting-started-braintree-api" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c5.png" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 font-bold dark:text-dark-contrastText text-left" style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Getting Started with Algolia API</p><div class="flex items-center justify-between mt-auto">
                    <div class="flex items-start m-2 flex-col text-left"><svg width="38" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 capitalize text-dark text-left">Beginner</p></div>
                    <button class="click2 mt-4 float-right">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right  dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

                    <div class="col-sm-4">
                      
            <div class="flex flex-col max-w-m" style="min-width: 33.33%;">
            <div class="m-3 mb-6 bg-white dark:bg-dark-80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;"><a href="/courses/getting-started-braintree-api" style="text-decoration:none;">
            <div>
              <img class="w-100 object-cover block"  alt="Course Cover " height="140" src="images/c6.jfif" title="Course Cover Image">
              <div class="flex flex-col p-2 text-left" style="height: 227px;" >
              <div class="flex items-center justify-between m-2">
                <div class="flex items-center w-full">
                  <div class="flex overflow-hidden mr-auto text-left">
                    <span class="font-normal dark:text-dark-contrastText whitespace-nowrap overflow-hidden overflow-ellipsis" style="font-size:14px; color:black; font-family:Poppins,sans-serif;">Educative</span>
                  </div></div></div>
                  <p name="CollectionTitle" class="text-xl m-1 pt-2 text-left font-bold dark:text-dark-contrastText" style="color:black; font-weight:500; font-size:18px; font-family:Poppins,sans-serif;">Build a Custom  Website with Velo by Wix</p><div class="flex items-center justify-between mt-auto">
                    <div class="flex items-start m-2 flex-col text-left"><svg width="38" height="10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#E5E5E5" d="M9 4h6v2H9zM23 4h6v2h-6z"></path><circle cx="5" cy="5" r="4" fill="#8887FF" stroke="#8887FF" stroke-width="2"></circle><circle cx="19" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle><circle cx="33" cy="5" r="4" fill="#E5E5E5" stroke="#E5E5E5" stroke-width="2"></circle></svg>
                    <p class="text-xs font-semibold tracking-wide mt-1 text-left capitalize text-dark">Beginner</p></div>
                    <button class="click2 float-right">Get started<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button></div></div></div></a></div></div>
                    </div>

            </div>
          </div>
        </div>
    </div>
    <!-- Fouth Section Ends Here -->


    <div class="container-fluid">
<div class=" mt-5 pt-5 pb-5  mb-5  container">
      <div class="content1 text-center ">
      <h3 class="h3 p-3  mt-5 pt-5 ">Why learners love Educative</h3>
        </div>

      <div id="carouselExampleControls" class="carousel slide carousel-fade container p-5" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item    active d-inline-flex">
            <div class="card bg-light  mr-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">These are high-quality courses. Trust me. I own around 10 and the price is worth it for the content quality. @EducativeInc came at the right time in my career. I'm understanding topics better than with any book or online video tutorial I've done. Truly made for developers. Thanks https://t.co/EeKruv5hxM</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-light">
                    <h6 class="pt-2">Anthony Walker</h6>
                    <p>@_webarchitect_</p>

                </div>
              </div>
              <div class="card bg-light ml-3 text-left  pt-5 pb-5 border-0">
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">These are high-quality courses. Trust me. I own around 10 and the price is worth it for the content quality. @EducativeInc came at the right time in my career. I'm understanding topics better than with any book or online video tutorial I've done. Truly made for developers. Thanks https://t.co/EeKruv5hxM</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-light">
                    <h6 class="pt-2">Emma Bostian 🐞</h6>
                    <p>@_webarchitect_</p>

                </div>
              </div>
          </div>
          

          <div class="carousel-item   d-inline-flex">
            <div class="card bg-light mr-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">Just finished my first full #ML course: Machine learning for Software Engineers from Educative, Inc. ... Highly recommend!Just finished my first full #ML course: Machine learning for Software Engineers from Educative, Inc. ... Highly recommend!Just finished my first full #ML course:  Machine learning.
                </p>
                </div>
                <div class="card-footer border-0 ps-5 bg-light">
                    <h6 class="pt-2">Evan Dunbar</h6>
                    <p>ML Engineer</p>

                </div>
              </div>
              <div class="card bg-light ml-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">
                  You guys are the gold standard of crash-courses... Narrow enough that it doesn't need years of study or a full blown book to get the gist, but broad enough that an afternoon of Googling doesn't cut it.You guys are the gold standard of crash-courses... Narrow enough that it doesn't need.</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-light">
                    <h6 class="pt-2">Carlos Matias La Borde</h6>
                    <p>Software Developer</p>

                </div>
              </div>
          </div>

          <div class="carousel-item    d-inline-flex">
            <div class="card bg-light  mr-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">I spend my days and nights on Educative. It is indispensable. It is such a unique and reader-friendly site, resources available for learners on Educative is well organized and deep, it helps break down tricky programming concepts into simple chunks and exercises for practice to solidify the learning experience.</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-light">
                    <h6 class="pt-2">Eric Downs</h6>
                    <p>Musician/Entrepeneur</p>

                </div>
              </div>
              <div class="card bg-light ml-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">Your courses are simply awesome, the depth they go into and the breadth of coverage is so good that I don't have to refer to 10 different websites looking for interview topics and content.
                
                  Your courses are simply awesome, the depth they go into and the breadth of coverage is so good that.</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-light">
                    <h6 class="pt-2">Kenan Eyvazov</h6>
                    <p>DevOps Engineer</p>

                </div>
              </div>
          </div>


      </div>
    </div>
                  </div>
</div>

    <!-- Sixth Section Starts Here -->
        <div class="sixth container-fluid" style="height:auto; width:100%;background-color:#11101d;">
        <div class="container" style="height:180px; width:100%;">
        <div class=" container  " style="text-align:left; border-bottom:1px solid white;">
        <h5 class="text-left pt-5 text-light"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo mr-2 mb-2 text-light"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg>Educative</h5>
        <p class="text-left pt-3 text-light">Learn in-demand tech skills in half the time</p>
        </div>
        </div>

        <div class="container ">
          <div class="row  container ml-auto mr-auto pb-5" style="border-bottom:1px solid white;">
            <div class="col-sm-2 ml-4">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">LEARN</a></li>
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

            <div class="col-sm-2 ml-4 ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">SCHOLORSHIPS</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Students</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Educators</a></li>
              </ul>
            </div>

            <div class="col-sm-2 ml-4 ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">CONTRIBUTE</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Become An Author</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Become An Affilliate</a></li>
              </ul>
            </div>

            <div class="col-sm-2 ml-4 ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">LEGAL</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Privacy Policy</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Terms Of Services</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Business Terms Of Services</a></li>
              </ul>
            </div>
            
            <div class="col-sm-2 ml-4 ">
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
                  <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-3"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                  </li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-3"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                  </li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-3"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                  </li>
                  <li><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="w-5 h-5 ml-3"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 14a3 3 0 003-3V5a3 3 0 10-6 0v6a3 3 0 003 3zm-1.2-9.1c0-.7.5-1.2 1.2-1.2s1.2.5 1.2 1.2v6.2a1.2 1.2 0 11-2.4 0V4.9zm6.5 6.1c0 3-2.5 5.1-5.3 5.1S6.7 14 6.7 11H5a7 7 0 006 6.7V21h2v-3.3a7 7 0 006-6.7h-1.7z"></path></svg>
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
    
    <!-- Sixth Section Ends Here -->



<!-- PopUP Form Starts Here -->
<div class="form-popup container-fluid" id="myForm">
    <form action="index.php" class="text-left  form-control border-0 form-container ml-auto mr-auto">
    <span style="font-size:30px; color:black; float:right; transform:translateX(15px);"><i class='bx bx-x cross  p-1 ' onclick="closeForm()"></i></span>
        <h2 class="mb-5 ">Sign In</h2>
        <label for="email" >Email</label>
        <input type="text" class="text-left" placeholder="Enter Email" name="rEmail" >
    
        <label for="psw">Password</label>
        <input type="password" class="text-left" placeholder="Enter Password" name="rPassword">
    
        <button type="submit" class="btn">Login</button>
        <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->

           <button class="click2 mt-3" ><a href="registration.php" style="text-decoration:none; color:black;">Create A New Account</a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" icon-right dark:text-primary-light"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>

           <p class=" pt-3" style="font-size:15px;">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply 
      </form>
</div>
<?php if(isset($msg)) {echo $msg;}?>

<!-- Pop Up Forms Ends Here -->

    </section>

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
      
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-x");//replacing the iocns class
    } else {
        closeBtn.classList.replace("bx-x", "bx-menu");//replacing the iocns class
    }
}


// JavaScript Document
$(document).ready(function () {
    $('#autoWidth').lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function () {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
});



    </script>
  <script src="js/script.js"></script>
  <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>
