<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="icon" href="images/redux.svg" type="image/icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Educative For Business</title>
  </head>
  <style>
    *
    {
      margin:0;
      padding:0;
      box-sizing:border-box;
    }
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
  background-color: rgba(0,0,0,0.8);
  display:none;
  /* transform:translate(-0px,10px); */
  position: fixed;
  bottom: 0;  
  right:0px;
  left: 0px;
  padding:40px;
  border: ;
  z-index: 9;
  justify-content: center;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  height: 570px;
  padding: 25px;
  /* transform: translateX(400px); */
  /* background-color: red; */
  display: inline-block;
  /* margin-top: 140px; */
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 10px;
  border:none;
  border-bottom:1px solid lightgray;
  margin: 5px 0 22px 0;
  background: white;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #11101d;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 1;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 0.8;
  transition:0.2s all ease;
}
    .click1{
        border:1px solid white;
    }
    .click1:hover{
       background-color: rgba(0,0,0,0.5);
       transition:0.2s all ease;
    }
    .click2
    {background-color:#11101d;color:white;}
    .click2:hover{
        background-color: rgba(0,0,0,0.5);
        color:white;
        border:1px solid white;
        transition:0.2s all ease;
    }
    .cross:hover{
  background-color: rgba(0,0,0,0.1);
  transition:0.2s all ease;
}
  </style>
  <body>

<!--Navbar Starts Here  -->
<nav class="navbar navbar-dark fixed-top border-bottom border-dark " style="background-color:#11101d;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <h6 class="h5 ">   
    <span class="me-2 " style="color:white;"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo dark:text-dark-contrastText mt-1"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg></span>educative <span style="font-size:14px;">BUSINESS</span></h6>
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
</nav>
<!-- Navbar Ends Here -->

<!-- Hero Section Starts Here -->
<div class="container-fluid  " style="height:auto; margin-top:60px; background-color:#11101d;">
    <div class="container h-100 w-100 ">
        <div class="row h-100 w-100  me-auto ms-auto">
            <div class="col-sm-8 mb-5 pb-5 mt-5 ">
                <div class="content mt-5  col-md-12 p-5 mt-0 text-left me-auto ms-auto text-white">
                    <h3 class="h2">
                    Train, upskill, and onboard your developers with a tailored solution for your team or company
                </h3>
                <p class="h5 pt-4">Hands-on learning allows your developers to be on top of the latest technologies and be the best that they can be.</p>
                </div>
            </div>
            <div class="col-sm-4 mt-4  me-auto ms-auto bg-white mb-5 p-3  ">
                <div class="content  pt-2 pb-5 p-2  ">
                <p class="h4 bg-secondary  p-5 pe-5 ps-5 bg-white" style="font-size:20px;">Free 14-day Team <br>Trial. No Credit Card<br> Required</p>
                <div class="form-floating mb-3 text-left">
                <input type="name" class="form-control" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating">
                <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Company Email</label>

                <p class="p  p-2 pt-2 mt-2" style="font-size:13px;">* Team Trials require a business email address</p>
                <p class="p  p-2 pt-1" style="font-size:13px;">* Team Trial excludes access to interview prep courses</p>
                <p class="p  p-2 pt-1" style="font-size:13px;">* For more information, contact <a href="#" style="text-decoration:none; color:black;">enterprise@educative.io</a></p>

                <button class="btn p-2 pt-3 pb-3 pe-5 ps-5 click2">Start 14-Day Free Trial</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Hero Section Ends Here -->

<!-- Advertisement Section Starts Here -->

<div class="container-fluid  pt-3 pb-2 ">
    <div class="container ">
        <div class="content me-auto ms-auto">
            <h3 class="h6  p-4 ps-4 d-flex justify-content-left">Loved By Teams Of Every Size</h3>
            <div class="content row  p-1">
              <div class="col-sm-4 ">
                <div class="flex w-full justify-evenly items-center dark:text-dark-contrastText">
                <svg width="100" height="47.8" viewBox="0.13 0.13 22.36 8.38" xmlns="http://www.w3.org/2000/svg" aria-label="Ford" class="transform scale-75 fill-current ms-2"><path fill="current" d="M15.72 5.21c0 .02.02.04.05.05v.03c-.07.15-.13.23-.22.36-.08.12-.17.22-.28.3-.16.14-.4.3-.58.2-.09-.05-.12-.17-.12-.27 0-.26.12-.54.34-.81.27-.33.57-.5.76-.4.2.09.14.32.05.5a.05.05 0 000 .04m2.16-2.09c.01-.02 0-.04-.03-.04h-.57c-.04 0-.06 0-.08.04-.07.13-.86 1.3-1 1.54-.03.03-.06.03-.06-.01a.49.49 0 00-.32-.37.81.81 0 00-.42-.05c-.26.04-.5.17-.7.33-.3.23-.57.53-.91.76-.19.12-.44.22-.61.07-.16-.15-.14-.47.1-.71.02-.03.05 0 .05.02a.31.31 0 00.09.3c.1.09.25.1.37.04a.5.5 0 00.27-.38.43.43 0 00-.4-.5.79.79 0 00-.57.22 1.09 1.09 0 00-.22.24c-.02.03-.05.03-.05 0 0-.33-.13-.51-.4-.52a1 1 0 00-.59.25c-.19.15-.35.35-.53.54-.02.02-.04.02-.05-.03a1.08 1.08 0 00-.15-.56.13.13 0 00-.17-.04c-.03.01-.13.06-.2.11-.04.03-.05.08-.04.13.1.32.08.68-.05.99-.12.28-.35.53-.62.62-.18.05-.37.02-.48-.13-.16-.22-.1-.6.14-.92.2-.28.5-.45.8-.57.04 0 .05-.03.04-.06l-.05-.15c-.03-.07-.1-.08-.2-.07-.22.02-.42.1-.61.2-.5.27-.76.8-.87 1.08a1.1 1.1 0 01-.16.3c-.08.1-.18.19-.37.35a.06.06 0 00-.01.07.8.8 0 00.14.19c.03.01.06 0 .08-.02.13-.09.28-.22.36-.32.02-.03.05-.02.06.03a.79.79 0 00.51.54c.47.16.95-.07 1.31-.46.23-.25.32-.42.4-.52.16-.2.45-.6.8-.88.14-.1.3-.17.37-.12.06.04.08.13-.02.31-.36.66-.89 1.43-.99 1.62-.02.03 0 .06.03.06h.55c.03 0 .04-.01.06-.03a39.42 39.42 0 01.84-1.27c0 .1.03.23.1.32a.48.48 0 00.41.24.79.79 0 00.34-.07c.12-.05.21-.1.28-.15.04-.03.05.02.05.02-.06.35.01.75.36.92.4.2.85-.08 1.11-.33.03-.03.05-.03.06.03 0 .1.05.21.13.3.21.2.65.12 1.09-.22.28-.21.57-.52.84-.85.01 0 .02-.03 0-.05l-.14-.13h-.06c-.27.26-.52.56-.87.8-.12.09-.31.15-.4.04-.03-.05-.03-.1 0-.2.1-.25 1.74-2.74 1.83-2.89 M10.18 3.42c0 .04.02.05.04.04a.4.4 0 00.22-.16c.05-.07.08-.18.03-.22-.05-.04-.12-.03-.17.02a.37.37 0 00-.12.32M6 6.63c-.6 0-1.14-.37-1.2-1.03a1.32 1.32 0 01.27-.95c.18-.23.49-.43.75-.48.08-.01.2 0 .24.05.08.09.05.18-.02.22-.2.1-.44.28-.56.51a.63.63 0 00.03.65c.25.37.93.38 1.57-.2A9.95 9.95 0 008.27 4v-.03h-.02c-.25 0-.47.08-.68.23-.06.05-.14.04-.18-.02-.04-.06-.01-.15.06-.2.33-.23.7-.27 1.08-.34 0 0 .03 0 .05-.03l.44-.58c.16-.2.38-.39.54-.53.23-.2.38-.26.53-.34.04-.02 0-.05-.02-.05-.83-.16-1.7-.36-2.53-.05-.57.21-.82.67-.7.97.08.22.37.25.63.12.22-.1.43-.28.57-.5.08-.13.25-.04.16.18-.24.57-.7 1.02-1.27 1.04-.48.02-.79-.34-.79-.77 0-.86.96-1.43 1.97-1.52 1.2-.1 2.36.23 3.56.37.92.11 1.8.12 2.73-.1.11-.02.19.05.18.16 0 .16-.13.31-.44.48-.34.2-.7.25-1.09.25-.91.01-1.77-.35-2.65-.54 0 .04.01.09-.02.11a4.15 4.15 0 00-1.22 1.26c.26 0 .5-.02.73-.04.04 0 .04 0 .04-.04a.6.6 0 01.19-.52c.16-.14.36-.16.5-.05s.13.32.05.48a.59.59 0 01-.36.3s-.03 0-.02.02c0 .04.18.14.2.17.01.03 0 .07-.02.1a.12.12 0 01-.09.04c-.03 0-.05-.01-.09-.04a.86.86 0 01-.25-.2c-.02-.03-.04-.03-.1-.02-.25.01-.66.05-.93.08-.07.01-.08.03-.1.05-.43.72-.9 1.5-1.41 2.02-.55.56-1.01.7-1.5.71 M11.31.82C5.61.82.98 2.39.98 4.32c0 1.94 4.62 3.51 10.33 3.51s10.34-1.57 10.34-3.5S17.02.82 11.3.82m0 7.33C5.4 8.15.6 6.44.6 4.33.6 2.2 5.4.5 11.3.5c5.92 0 10.71 1.71 10.71 3.83 0 2.1-4.8 3.82-10.7 3.82"></path></svg>



                <svg width="112" height="31"  xmlns="http://www.w3.org/2000/svg" aria-label="Indeed" viewBox="0 0 112 31" class="transform scale-75  pe-3 ms-4    fill-current">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4 0c-1.2 0-2.5.3-3.7.7-4.5 2-7.7 6-9.1 11l-.6 3v.7l.4-.8C1 12.2 1.9 10 3.2 8 6.3 3.4 11.3.5 16.6 2.1c1 .4 1.9.8 2.7 1.4.2.1 1.4 1.1 1.2.2-.3-.7-.8-1.3-1.3-1.7a8.3 8.3 0 00-5.8-2zM52 4.6a2 2 0 00-1.6.7c-.4.5-.6 1.2-.6 2.2v6.9c-.9-1-1.8-1.7-2.7-2.2-.7-.3-1.3-.5-2-.6h-1.4c-2.3 0-4.2.8-5.6 2.4a10 10 0 00-2.2 6.8 12.3 12.3 0 002.1 6.9c.7.9 1.6 1.6 2.5 2a7 7 0 004.6.6c.3 0 .6 0 .8-.2.7-.2 1.4-.6 2-1l1.9-1.8v.5c0 .9.2 1.5.6 2 .4.4 1 .7 1.6.7a2 2 0 001.6-.7c.4-.4.6-1.1.6-2V7.2c0-.8-.2-1.5-.6-2a2 2 0 00-1.6-.6zm57 0a2 2 0 00-1.6.7c-.4.5-.6 1.2-.6 2.2v6.9c-.9-1-1.8-1.7-2.7-2.2-.6-.2-1.3-.5-2-.6h-1.4c-2.3 0-4.2.8-5.6 2.4a10 10 0 00-2.1 6.8c0 1.4.1 2.7.5 3.9.4 1.1.9 2.2 1.6 3a7 7 0 007 2.6c.3 0 .6 0 .9-.2.7-.2 1.3-.6 2-1 .6-.5 1.2-1 1.8-1.8v.5c0 .9.2 1.5.6 2 .4.4 1 .7 1.6.7a2 2 0 001.6-.7c.4-.4.6-1.1.6-2V7.2a3 3 0 00-.6-2 2 2 0 00-1.6-.6zM12.2 5.8c-.6 0-1.3.2-1.8.5a3.8 3.8 0 00-1.7 5.1c1 2 3.2 2.7 5.1 1.7a3.8 3.8 0 00.3-6.7c-.5-.3-1.2-.5-1.9-.6zm52.6 5.7c-1.3 0-2.5.2-3.6.7a8 8 0 00-4.7 5c-.4 1.1-.7 2.4-.7 3.8 0 2.9.9 5.2 2.5 6.9a9 9 0 007 2.6c1.3 0 2.5-.2 3.5-.5 1-.4 1.8-.8 2.5-1.3a6 6 0 001.5-1.7c.3-.5.5-1 .5-1.4 0-.5-.1-.9-.4-1.1-.3-.3-.7-.4-1.2-.4-.4 0-.8 0-1 .3a49 49 0 01-2.6 2.2l-1.4.6-1.5.2h-.4c-.6 0-1.3-.3-1.9-.6a5.7 5.7 0 01-2.3-4.7h9.1c1.3 0 2.2-.1 2.9-.5.6-.3 1-1 1-2.3a7.8 7.8 0 00-4-6.7 9 9 0 00-4.6-1.1h-.2zm18.7 0a9 9 0 00-3.7.7A8.2 8.2 0 0077 14c-.8.8-1.4 1.9-1.8 3-.4 1.2-.6 2.5-.6 3.9 0 2.9.8 5.2 2.5 6.9a9.1 9.1 0 007 2.6c1.3 0 2.5-.2 3.5-.5 1-.4 1.8-.8 2.5-1.3l1.5-1.7c.3-.5.5-1 .5-1.4 0-.5-.2-.9-.5-1.1-.3-.3-.7-.4-1.1-.4-.5 0-.8 0-1 .3L88 25.6l-1.2.9-1.3.6-1.5.2h-.4c-.7 0-1.3-.3-2-.6-.6-.5-1.2-1-1.6-1.8-.4-.9-.6-1.8-.6-2.9h9c1.3 0 2.3-.1 3-.5.6-.3 1-1 1-2.3a7.9 7.9 0 00-4-6.7 9 9 0 00-4.7-1.1zm-63.5 0a2 2 0 00-1.5.7c-.4.4-.6 1-.6 2v13.4c0 1 .2 1.6.6 2.1.5.5 1 .8 1.7.8s1.2-.3 1.7-.7c.4-.5.6-1.2.6-2.2v-5.8c0-2 .1-3.2.4-3.9.3-.9.8-1.5 1.5-2s1.4-.8 2.2-.8c1.3 0 2.2.4 2.6 1.2.4.9.6 2 .6 3.6v7.7c0 1 .2 1.6.7 2.1.4.5 1 .8 1.7.8s1.2-.3 1.6-.8c.5-.4.7-1.1.7-2V19l-.1-2.6c-.1-.6-.3-1.2-.7-1.8a5 5 0 00-2.1-2.3 7.4 7.4 0 00-6.7 0c-1 .5-1.8 1.3-2.7 2.4V14c0-.6 0-1-.3-1.4a2 2 0 00-1.9-1.2zm44.8 3.2a4 4 0 013 1.2 6 6 0 011.3 3.6h-8.5a6 6 0 011.4-3.6c.7-.8 1.7-1.2 2.8-1.2zm18.7 0a4 4 0 013 1.2 6 6 0 011.2 3.6h-8.4a6 6 0 011.3-3.6c.8-.8 1.7-1.2 2.9-1.2zM45 15c.9 0 1.6.3 2.3.7.7.5 1.2 1.2 1.6 2 .4 1 .6 2 .6 3.3a8 8 0 01-.6 3.3c-.4.9-1 1.5-1.6 2a4 4 0 01-2.2.6 4 4 0 01-2.3-.7 4.5 4.5 0 01-1.6-2 8 8 0 01-.6-3.2 8 8 0 01.6-3.2c.3-.9.8-1.6 1.5-2 .7-.6 1.5-.8 2.3-.8zm57 0c.9 0 1.6.3 2.3.7.7.5 1.2 1.2 1.6 2 .5 1 .7 2 .7 3.3 0 1.3-.2 2.4-.7 3.3-.4.9-1 1.5-1.6 2-.6.3-1.4.6-2.2.6a4 4 0 01-2.3-.7 4.6 4.6 0 01-1.6-2 8 8 0 01-.6-3.2 8 8 0 01.6-3.2 4 4 0 011.6-2 3 3 0 012.2-.8zm-87.2.2a8 8 0 01-5 1v11.2c0 1 .1 1.8.6 2.3.5.5 1 .8 1.8.8s1.4-.3 1.9-.8c.4-.5.7-1.3.7-2.3V15.2z" fill="currents">
                  </path></svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="112" height="18"  aria-label="Groupon" viewBox="0 0 112 18" class="transform scale-75  mt-1 ms-5  fill-current"><path fill="current" d="M55.8 17.6c3.7 0 6.3-2.5 6.3-6.6V.4h-4.2v10.4c0 2-.7 2.9-2.1 2.9-1.4 0-2-1-2-2.9V.4h-4.2V11c0 4.2 2.3 6.6 6.2 6.6zM73 1.3c-1-.8-2.4-.9-4.2-.9h-5.6v17h4.1v-5.5h1.2c1.7 0 3-.2 4.1-.8 1.7-1 2.7-2.8 2.7-5 0-2.1-.7-3.7-2.3-4.8zm-4.9 6.9h-.8v-4h1.1c1.9 0 2.8.6 2.8 2 0 1.5-1 2-3 2zm30.1-.3l6.3 9.4h3.6V.4h-4v9.4L97.8.4h-3.7v17h4.1V7.8zM46 2.6A8.5 8.5 0 0040 0c-2.4 0-4.5.8-6.1 2.5a8.5 8.5 0 00-2.6 6c0 2.6.8 4.7 2.4 6.4a8.4 8.4 0 006.3 2.6c2.3 0 4.6-.9 6.2-2.6a8.8 8.8 0 002.5-6.2c0-2.4-1-4.5-2.7-6.2zm-6 10.8c-2.3 0-4.5-2-4.5-4.7a4.4 4.4 0 118.9 0c0 2.8-2 4.7-4.4 4.7zM90.7 2.6a8.6 8.6 0 00-6-2.5c-2.4 0-4.5.8-6.2 2.5a8.5 8.5 0 00-2.5 6c0 2.6.8 4.7 2.4 6.4a8.4 8.4 0 006.3 2.6c2.3 0 4.6-.9 6.2-2.6a8.8 8.8 0 002.5-6.2c0-2.4-1-4.5-2.7-6.2zm-6 10.8c-2.3 0-4.5-2-4.5-4.7a4.4 4.4 0 118.9 0c0 2.8-2 4.7-4.4 4.7zM2.4 15a8.8 8.8 0 0013.5-1.1c1-1.5 1.4-3 1.4-5V7.8H7.6v3.4h4.9a4.3 4.3 0 01-3.8 2.3c-2.4 0-4.4-2.1-4.4-4.8 0-2.4 1.9-4.4 4.4-4.4 1.3 0 2.4.5 3.4 1.6H17A8.6 8.6 0 002.6 2.6a8.5 8.5 0 00-2.6 6c0 2.6.8 4.7 2.4 6.4zm24.3-3.5c2.4-.7 3.8-2.7 3.8-5.4 0-2.1-.7-3.7-2.2-4.8C27 .5 25.8.4 24 .4h-5.6v17h4.1v-5.5l3.2 5.4h5.1l-4-5.8zm-3.4-3.3h-.8v-4h1.1c1.9 0 2.8.6 2.8 2 0 1.5-1 2-3 2zm87.4-5.7c.4 0 .7 0 1-.3.2-.3.3-.6.3-1 0-.3-.1-.6-.4-.8-.2-.3-.5-.4-.9-.4-.3 0-.6.1-.9.4-.2.2-.3.5-.3.9 0 .3 0 .6.3.9.3.2.6.3 1 .3zm-.7-2c.2-.2.4-.3.7-.3.3 0 .6 0 .8.3.2.2.3.5.3.8 0 .3 0 .5-.3.8a1 1 0 01-.8.3 1 1 0 01-.7-.3 1 1 0 01-.4-.8c0-.3.1-.6.4-.8z"></path><path fill="current" d="M111.3 2v-.1-.2l-.1-.3h-.2l.2-.2.1-.2c0-.2 0-.3-.2-.4h-.9V2h.3v-.6h.4l.2.4V2h.2zm-.4-.8h-.4V.7h.5v.5z"></path></svg>
              </div>
            </div>

            <div class="col-sm-4 ">
                <div class="flex w-full justify-evenly items-center dark:text-dark-contrastText">
                <svg xmlns="http://www.w3.org/2000/svg" width="104" height="23"  aria-label="CoinBase" class="transform scale-75 fill-current me-5 "><path fill="current" fill-rule="evenodd" d="M8 19.8a6 6 0 002.4-.4l1.4 2.3c-1.2.7-2.7 1-4.1 1-4.5 0-7.7-3-7.7-7.6 0-4.7 3.4-7.6 7.7-7.6a8 8 0 013.9 1l-1.4 2.3a6 6 0 00-2.2-.4c-2.7 0-4.7 1.6-4.7 4.7 0 2.9 2 4.7 4.8 4.7zM19.4 7.5c4.4 0 7.5 3 7.5 7.6 0 4.5-3.1 7.6-7.5 7.6-4.3 0-7.5-3.1-7.5-7.6s3.2-7.6 7.5-7.6zm0 2.8c-2.4 0-4.2 1.8-4.2 4.8s1.8 4.8 4.2 4.8c2.5 0 4.2-1.9 4.2-4.8 0-3-1.7-4.8-4.2-4.8zm9.6 12V7.9h3.3v14.6h-3.3zm-.4-19a2 2 0 014 0 2 2 0 01-2 2.1 2 2 0 01-2-2zM35 8.7c2.1-.8 4.4-1.2 6.7-1.2 3.7 0 6 1.4 6 5.5v9.4h-3.2v-9.1c0-2.1-1.3-2.9-3-2.9-1.2 0-2.4.2-3.2.5v11.5H35V8.7zM50.5 0h3.3v8.2a8 8 0 013.3-.7c4.2 0 7.3 2.7 7.3 7.3 0 4.7-3 7.9-8.5 7.9-2 0-4-.4-5.4-1V0zm3.3 19.6c.6.2 1.4.3 2.2.3 3 0 5.2-1.6 5.2-5 0-2.8-2-4.5-4.5-4.5a6 6 0 00-3 .7v8.5zm20-7c0-1.6-1.1-2.3-2.8-2.3-1.6 0-3 .5-4.2 1.2V8.6c1.5-.7 3.1-1.1 4.8-1.1 3.2 0 5.4 1.3 5.4 5V22c-1.3.3-3.3.6-5 .6-3.7 0-6.5-1.2-6.5-4.5 0-3 2.5-4.4 6.7-4.4h1.6v-1.2zm0 3.4h-1.3c-2.3 0-3.8.6-3.8 2.1s1.4 2.1 3.4 2.1l1.7-.1V16zm5.6 2.4c1.3 1 2.8 1.6 4.4 1.7 1.5 0 2.5-.5 2.5-1.7s-1-1.6-2.8-2c-3-.8-4.3-2-4.3-4.5 0-3 2.2-4.4 5.2-4.4 1.7 0 3 .3 4.2 1v3a6.7 6.7 0 00-4-1.4c-1.5 0-2.3.7-2.3 1.7s.7 1.4 2.3 1.9c3.4.7 4.8 2 4.8 4.6 0 3-2.3 4.4-5.5 4.4-1.6 0-3.1-.4-4.5-1.2v-3zm14.5-2.6c.2 2.7 2.4 4.1 4.7 4.1 2 0 3.4-.5 4.9-1.4v2.8a9.2 9.2 0 01-5.2 1.4c-4.5 0-7.6-2.9-7.6-7.5s3-7.7 7-7.7c4.3 0 6.3 2.7 6.3 6.7v1.6H93.9zm7-2c0-2.4-1.1-3.6-3.3-3.6-1.8 0-3.2 1.3-3.6 3.5h7z" clip-rule="evenodd"></path></svg>


<svg viewBox="25.3 13 52 51" height="45" width="75" xmlns="http://www.w3.org/2000/svg" aria-label="GE" class="transform scale-50 -ml-2 fill-current me-5 mt-1"><g fill-rule="evenodd"><path d="M50.8 12a26.6 26.6 0 110 53.1 26.6 26.6 0 010-53.1" fill="none"></path><path d="M28.5 31l-.3 1c-.5 2.3-1 5-.3 7.3 1.3 4.2 5.2 2.6 4.4.3-.4-1-1.3-1.7-1.8-3a8.6 8.6 0 01-.5-4.2 21.2 21.2 0 014-10.1l1.2-1.3c.8-1 1.6-1.5 2.5-2.2l1.5-1a23.1 23.1 0 0119.2-1.6l-1.9-.4c-.6-.2-1.3-.3-2-.3-8.8-1-8.1 5.3-4.8 4.5 1-.2 1.7-1.2 3-1.8 1-.5 2.8-.6 4.2-.5 1.4.2 2.6.5 3.9.9A18 18 0 0173 30a24.5 24.5 0 01.6 15.4c-.1.2-.2.7-.5.7l.5-2c.4-2 .6-4.4 0-6.3-.3-1.3-1-2.3-2-2.7a2 2 0 00-1.9.5c-.4.4-.6 1-.4 1.8.2 1 1.3 1.8 1.8 3 1.4 3.3-.2 8.5-1.6 11.4a18 18 0 01-4.2 5.4 20.3 20.3 0 01-6 3.5A24.4 24.4 0 0146.9 62a11 11 0 01-3.7-1c.2-.2 1.6.3 1.9.3 2 .4 4.6.7 6.4.1 1.2-.3 2.4-1 2.6-2.1.3-1.5-1-2.7-2.3-2.2-1 .2-1.8 1.4-3 1.8-1.2.6-2.5.7-4 .5-2.7-.2-5.3-1.1-7.4-2.1a18.6 18.6 0 01-7.3-7 24 24 0 01-2.3-17.7l.2-.9c.1-.4.2-.6.5-.7zm21.2-17.8C44 13.5 39 15.5 34.8 19l-1.3 1a24 24 0 00-6.1 8.9 25.7 25.7 0 003.8 25.6l.7 1 .6.5.2.2A25 25 0 0057.4 63a25 25 0 0012-7.3l.6-.6a26.7 26.7 0 004.2-6.9A25.3 25.3 0 0065.5 18l-1-.7a25 25 0 00-14.9-4"></path><path d="M46.2 40.5l-.2 1.9c-.5 2.4-1.5 5.9-3.7 7.2-.9.5-2.4.9-3.3 0-.3-.3-.5-1-.4-1.6 0-1.4 1-2.6 1.9-3.5a22 22 0 015.8-4zm-3.4-7.8c0-.8.2-1.6.5-2.3.4-1.2 1.4-3.5 2.7-4.2.7-.4 1.9 0 .8 2.2a12 12 0 01-1.1 1.7c-.5.7-2.2 2.5-2.9 2.6zm14-1.1a7.4 7.4 0 011.8-5c.3-.2 1-.7 1.5-.3.7.8-.8 2.6-1 3l-2.3 2.3zM40.6 33c-.5 0-1-.4-1.2-.7-.9-1.2 0-3.2 0-3.8L39 28c-1.1 0-1.5.6-1.8 1.4a5 5 0 00-.1 2.8 4 4 0 001.2 2c.5.5 1.3.8 2.3.9.3 1 1.1 2.2 2.2 2.6 1.3.4 2.4 0 3.4-.6l.4-.2v.9c-.2.4-.2.4-.5.6L45 39a21.3 21.3 0 00-7 4.8c-1 1.2-2.4 3.4-1.6 5.8.5 1.9 2.3 3.1 4.9 2.7a7.1 7.1 0 004.7-3.1 13 13 0 002.2-5.7l.3-3.6c.1-.9 0-.7.8-1.1a67.1 67.1 0 006-3.9l.8 1a8.9 8.9 0 00-4.1 4c-2 3.8-1.2 9 2.5 11.4a7.5 7.5 0 006.5.7 7.2 7.2 0 004-4c1-2.1.6-4.7-.6-6.3A4.2 4.2 0 0062 40c-2-.6-4.5.3-5.4 2.3-.7 1.5-.3 3.5 1 4.4 1.1.9 2.5.4 2.2-.8l-.8-1.2c-1.4-2.1 2-4 3.5-1.6.9 1.3.8 3.4 0 4.8l-1 1.2a4.5 4.5 0 01-5.8 0 7 7 0 01-2-6 7 7 0 012.8-5.2c.5-.4 1.4-1 2-.9 1 .1 2 .3 2.9 0 .5-.1 1-.4 1-1 0-1-1.7-1.4-2.7-1.2l-.9.1c-.4 0-.5.2-.8 0-.5-.4-.6-1-.8-1.2l1.4-1.1.7-.6c1.5-1.3 3.5-3.7 3-6-.3-1.4-1.8-2-3.2-1.7-.7.1-1.3.5-1.8.8a8.6 8.6 0 00-2.7 7.4c0 .7 0 .7-.3 1L52 35l-3.3 2c0-.8 0-1.4.2-2 .2-.5 1.1-1.3 1.6-2.2 1.5-2.6-.4-3.1-1.7-1.8a6 6 0 00-1 1.8c-.5 1-.2 1.2-1.1 2-.5.4-1.2.9-2 1-.4.1-.8.2-1.2 0-.2-.3-.5-.6-.5-1 1-.3 2-1.1 2.6-1.6 1.5-1.3 3-3.2 3.4-5.2.3-1 .4-2.6-.6-3.3-.9-.7-2.3-.6-3.3 0-2.7 1.3-4.3 5-4.5 8.3"></path></g></svg>

                  <svg width="97" height="13" xmlns="http://www.w3.org/2000/svg" aria-label="Oracle" class="fill-current"><path d="M40.4 8.4h6.2l-3.3-5.6-6 10h-2.7l7.3-12a1.7 1.7 0 011.4-.8c.6 0 1 .3 1.4.8l7.3 12h-2.7L48 10.6h-6.3l-1.3-2.2zm28.3 2.2V.1h-2.3v11.5c0 .3 0 .7.3.9.2.2.5.4.9.4H78l1.4-2.3H68.7zM30.4 8.7a4.2 4.2 0 004.1-4.3 4.2 4.2 0 00-4-4.3H20.2V13h2.3V2.4h7.7c1 0 1.9.9 1.9 2 0 1.2-.9 2.1-2 2.1h-6.5l7 6.4H34l-4.6-4.2h1zM6.1 13c-3.3 0-6-2.9-6-6.4S2.8.1 6 .1h7c3.3 0 6 2.9 6 6.4 0 3.5-2.7 6.3-6 6.3H6zm6.8-2.3a4 4 0 004-4.1 4 4 0 00-4-4.1H6.2a4 4 0 00-3.9 4.1 4 4 0 004 4.1h6.6zM57 13c-3.4 0-6-2.9-6-6.4s2.6-6.4 6-6.4H65l-1.3 2.3H57a4 4 0 00-4 4.1 4 4 0 004 4.1h8.3L64 12.9h-7.2zM85 10.6a4 4 0 01-3.7-3h9.8l1.4-2.2H81.4a4 4 0 013.7-3H92L93.3 0H85c-3.4 0-6 2.9-6 6.4 0 3.5 2.6 6.4 6 6.4h7l1.4-2.3h-8.3zm9.4-9.1a1 1 0 011-1.1c.6 0 1.1.5 1.1 1 0 .7-.5 1.2-1 1.2-.6 0-1.1-.5-1.1-1.1zm1 1.4A1.4 1.4 0 0097 1.5c0-.8-.6-1.5-1.4-1.5-.7 0-1.3.7-1.3 1.5s.6 1.4 1.3 1.4zm0-2.3h.3c.3.2.3.4.3.5v.2a.4.4 0 01-.2.3l.3.7H96l-.3-.7h-.2v.6H95V.6h.3zm0 .8l.3-.1a.2.2 0 000-.2.2.2 0 000-.2h-.4v.5h.1z"></path></svg>
              </div>
            </div>

            <div class="col-sm-4 ">
                <div class="flex w-full justify-evenly items-center dark:text-dark-contrastText">
                <svg viewBox="0 0 101.7 20.4" width="101.7" height="20.4" xmlns="http://www.w3.org/2000/svg" aria-label="ServiceNow" class="fill-current me-5 mt-2"><path d="M28.5 6.4c-.9 0-1.7.5-2.4 1v-.9h-2.4V18h2.4v-7.4c.8-1.2 2.1-1.7 3.2-1.2V6.5l-.8-.1m-20.6 8a3 3 0 002.4 1.2c.6 0 1.1-.4 1.1-1 0-1.7-4.3-1.1-4.3-4.8 0-2.2 1.6-3.5 3.4-3.5 1.1 0 2.3.6 3 1.1l-1.1 2.2c-.4-.4-1.1-.7-1.8-.8-.6 0-1.1.4-1.1.9 0 1.6 4.3.9 4.3 4.9 0 2.2-1.7 3.6-3.5 3.6-1.3 0-2.5-.6-3.6-1.6l1.2-2.2zM22.7 12c0-3.1-1.7-5.8-4.2-5.8-2.6 0-4.2 2.8-4.2 5.9 0 3.6 1.8 6 4.5 6 1.4 0 2.8-.7 3.7-2l-1.4-1.8c-.6.8-1.4 1.4-2.3 1.4-1.1 0-2.2-1.3-2.3-2.8h6.1l.1-.9zm-6.1-1.2c.2-1.2 1-2 2-2 .9 0 1.6.9 1.7 2h-3.7zm18.3 2.7l2.5-7h2.5L35.8 18h-1.7L30 6.5h2.5zm6.8-12.4c.9 0 1.6.9 1.6 2S42.6 5 41.7 5c-.8 0-1.4-.9-1.5-1.9 0-1.2.7-2 1.5-2m-1.1 5.4H43V18h-2.4zm12.2 9.1c-1 1.6-2.4 2.6-4 2.5-2.8 0-4.8-2.6-4.8-6 0-3.3 2.2-5.9 4.9-5.9 1.5 0 2.8.9 3.7 2.3l-1.7 1.9c-.5-.8-1.2-1.3-2-1.3-1.3 0-2.5 1.4-2.5 3.1 0 1.8 1.1 3.2 2.5 3.2.9 0 1.6-.7 2.2-1.6l1.7 1.8zm8.5.6c-.9 1.2-2.2 2-3.6 2-2.6.2-4.7-2.6-4.6-6 0-3.2 1.7-5.9 4.3-5.9 2.5 0 4.2 2.6 4.2 5.8v.9h-6.2c0 1.6 1.1 2.8 2.4 2.7.8 0 1.7-.5 2.2-1.3l1.3 1.8zm-2.2-5.4c0-1.1-.8-2-1.8-2-.9 0-1.7.8-1.9 2h3.7zm3.4 7.2V6.5h2.4v.9c1.6-1.8 4.1-1.5 5.5.8.6.8.9 1.9.9 3.9V18h-2.4v-6.1c0-1.1-.2-1.8-.5-2.2-.3-.4-.7-.6-1.4-.6-.8.1-1.6.5-2.1 1.4V18h-2.4zM77.4 6.3c-2.8 0-5.1 2.9-5.1 6.6 0 1.9.5 3.7 1.5 5 .4.5 1 .5 1.3.1.8-.8 1.6-1 2.3-1 .9 0 1.7.3 2.3 1 .4.4.9.3 1.3-.2 1-1.3 1.6-3.1 1.6-4.9-.1-3.7-2.4-6.6-5.2-6.6m0 9.9c-1.5 0-2.6-1.4-2.6-3.2 0-1.9 1.1-3.4 2.6-3.4S80 11.2 80 13c0 1.7-1.1 3.2-2.6 3.2m9.9 1.8h-1.7L81.9 6.5h2.4l1.9 6.5 2-6.5h1.9L92 13l1.9-6.5h2.5L92.8 18h-1.7l-2-6.5z"></path></svg>

                <svg width="63" height="26" xmlns="http://www.w3.org/2000/svg" aria-label="Grab" class="transform scale-75 fill-current mt-2  me-5 "><path d="M60.7 10a7.6 7.6 0 00-5.5-2.3c-1.5 0-3 .6-3.8 1.2a22.2 22.2 0 00-5.6 5.7V17c2.1-2.8 4.2-5 5.7-6.3a6.2 6.2 0 013.7-1.4 6.3 6.3 0 016.2 6.3v1.5c0 1.7-.6 3.3-1.8 4.5a6 6 0 01-4.4 1.8 6 6 0 01-5.8-4.6l-1 1.4C49 23 52 25 55.1 25a7.6 7.6 0 005.5-2.3A8 8 0 0063 17v-1.5c0-2-.8-4-2.3-5.5zm-33.5-.7c1 0 2 .3 2.8.7L31 9a6.6 6.6 0 00-3.8-1.2c-2.2 0-4.2.8-5.6 2.3a8 8 0 00-2.2 5.6V25H21v-9.4c0-3.7 2.5-6.3 6.2-6.3zM42 25v-9.4a5 5 0 00-5-5 5 5 0 00-3.5 1.4 5.1 5.1 0 00-1.5 3.6v1.5c0 2.8 2.3 5.1 5 5.1a4 4 0 002.4-.7v-1.7c-.6.5-1.5.8-2.4.8a3.5 3.5 0 01-3.4-3.5v-1.5a3.5 3.5 0 116.9 0V25H42zM0 14.7v.5a10.4 10.4 0 003 7.3 9.7 9.7 0 007 3c2.2 0 4-.5 5.7-1.5a6.7 6.7 0 002-1.7v-8.6h-8v1.6H16v6.5c-.8.8-2.6 2.1-6 2.1a8.2 8.2 0 01-6-2.5 8.8 8.8 0 01-2.4-6.2v-.5c0-2.2 1-4.4 2.6-6A9.2 9.2 0 0110.7 6c2.3 0 3.8.4 5 1.1V5.3c-1.2-.5-2.8-.8-5-.8C5 4.5.1 9.2.1 14.7zm27.2-2.6c.6 0 1 .1 1.5.3l.6-1.4a4.5 4.5 0 00-2.1-.5 5 5 0 00-5 5.1V25h1.5v-9.4c0-2 1.4-3.5 3.5-3.5zm-11.4-1.9V8.3a10 10 0 00-5-1 8.1 8.1 0 00-5.6 2.1 7.3 7.3 0 00-2.4 5.3v.5c0 4.2 3.3 7.5 7.2 7.5 3.3 0 4.6-1 5-1.4v-4.8H9.6v1.6h3.8v2.4c-.5.2-1.5.6-3.5.6a5.5 5.5 0 01-4-1.7 6 6 0 01-1.6-4.2v-.5c0-3.2 2.9-5.9 6.3-5.9 2.4 0 3.8.4 5 1.4zm37 3a3.6 3.6 0 012.4-1 3.5 3.5 0 013.5 3.4v1.5a3.5 3.5 0 01-3.5 3.5c-.9 0-1.8-.5-2.5-1.5a5.8 5.8 0 01-1.1-3l-1.3 1.6a6.1 6.1 0 001.8 3.2c.9.8 2 1.3 3.1 1.3a5 5 0 005-5.1v-1.5a5.2 5.2 0 00-5-5.1c-.8 0-2.1.3-3.7 1.8a44.3 44.3 0 00-2 2.1L45.8 19v2.5a93.8 93.8 0 013.5-4.3l3.4-3.9zm-23.5 3.9c0 2 .8 4 2.3 5.5A7.6 7.6 0 0037 25c.9 0 1.8-.2 2.4-.5v-1.6a6.3 6.3 0 01-2.4.5 6.3 6.3 0 01-6.1-6.3v-1.5c0-3.4 2.8-6.3 6.1-6.3a6 6 0 014.4 1.9 6.3 6.3 0 011.8 4.4V25h1.5v-9.7a8 8 0 00-2.4-5.4A7.6 7.6 0 0037 7.7c-2 0-4 .9-5.4 2.4a8 8 0 00-2.3 5.5v1.5zm18.1-6.2L49 9.2V.7h-1.6V11zm2.7-2.4V.7h1.6v6.7L50 8.5z"></path></svg>

<svg width="105" height="16" viewBox="0 0 105 16"  xmlns="http://www.w3.org/2000/svg" aria-label="VMWare" class="transform scale-75 fill-current mt-2"><g><path d="M45.034 14.8757L40.4765 2.06754C40.3979 1.91038 40.3193 1.67465 40.3193 1.43892C40.3193 0.888875 40.7908 0.338832 41.498 0.338832C42.048 0.338832 42.4409 0.731719 42.6767 1.28176L46.4484 12.2826L50.2987 1.20319C50.4559 0.653142 50.849 0.260254 51.3988 0.260254H51.556C52.1843 0.260254 52.5775 0.653142 52.7346 1.20319L56.5064 12.2826L60.3567 1.20319C60.5138 0.731719 60.8281 0.338832 61.4568 0.338832C62.0854 0.338832 62.5568 0.810297 62.5568 1.36034C62.5568 1.59607 62.478 1.83181 62.3997 1.98896L57.7636 14.7969C57.5279 15.5043 57.0564 15.8186 56.5064 15.8186H56.4278C55.8777 15.8186 55.406 15.5043 55.1705 14.7969L51.3988 3.95315L47.6271 14.7969C47.3913 15.5043 46.9984 15.8186 46.3698 15.8186H46.2912C45.7412 15.8972 45.2697 15.5043 45.034 14.8757Z" fill="current"></path><path d="M78.508 1.51802C78.508 0.889399 78.9795 0.339355 79.6079 0.339355C80.2365 0.339355 80.7868 0.810821 80.7868 1.51802V4.11108C81.8866 1.5966 84.4011 0.417933 85.9727 0.417933C86.6799 0.417933 87.0728 0.889399 87.0728 1.5966C87.0728 2.22522 86.6799 2.61811 86.0513 2.77526C83.1439 3.08957 80.7077 5.28975 80.7077 9.69011V14.7977C80.7077 15.4263 80.2362 15.9766 79.6076 15.9766C78.9793 15.9766 78.429 15.5051 78.429 14.7977V1.51802" fill="current"></path><path d="M94.3809 15.9763C90.2949 15.9763 86.9946 12.8332 86.9946 8.19713V8.11855C86.9946 3.79678 89.9806 0.339355 94.1452 0.339355C98.5456 0.339355 101.06 3.95393 101.06 7.9614C101.06 8.59002 100.589 8.98291 100.039 8.98291H89.2734C89.5877 12.2046 91.8665 14.0905 94.5381 14.0905C96.3454 14.0905 97.7598 13.3833 98.781 12.362C98.9382 12.2049 99.1739 12.1263 99.4097 12.1263C99.96 12.1263 100.353 12.5977 100.353 13.0692C100.353 13.3049 100.274 13.6192 100.038 13.7764C98.5456 15.112 96.8954 15.9763 94.3809 15.9763ZM98.7813 7.33278C98.5456 4.58256 96.974 2.22522 94.0669 2.22522C91.4736 2.22522 89.5094 4.4254 89.2736 7.33278H98.7813Z" fill="current"></path><path d="M62.4783 11.3403C62.4783 8.11858 65.0716 6.38988 68.9219 6.38988C70.8861 6.38988 72.2222 6.62561 73.558 7.0185V6.46846C73.558 3.71824 71.9079 2.38241 69.0791 2.38241C67.5863 2.38241 66.6434 2.53956 65.5431 3.08961C65.3859 3.16819 65.2285 3.16819 65.1502 3.16819C64.6001 3.16819 64.1287 2.69672 64.1287 2.22525C64.1287 1.75379 64.3644 1.43948 64.757 1.28232C66.25 0.653701 67.3504 0.417969 69.3145 0.417969C71.4364 0.417969 73.0863 0.968011 74.1866 2.0681C75.2081 3.08961 75.7582 4.58259 75.7582 6.46846V14.7977C75.7582 15.4263 75.2864 15.8978 74.6581 15.8978C74.0295 15.8978 73.558 15.4263 73.558 14.8763V13.3833C72.5362 14.7977 70.7292 15.9766 68.0576 15.9766C65.3859 15.9766 62.4783 14.4048 62.4783 11.3403ZM73.6363 10.1616V8.66863C72.5362 8.35432 71.0433 8.04001 69.1576 8.04001C66.3286 8.04001 64.757 9.29725 64.757 11.1831V11.2617C64.757 13.1476 66.4857 14.2476 68.5288 14.2476C71.3576 14.2476 73.6363 12.5189 73.6363 10.1616Z" fill="current"></path><path d="M4.095 1.28213C3.62354 0.182046 2.36629 -0.28942 1.2662 0.182046C0.087537 0.653513 -0.305351 1.98933 0.244693 3.01084L5.03793 13.4617C5.82371 15.1118 6.60949 15.9762 8.10247 15.9762C9.67402 15.9762 10.3812 15.033 11.167 13.4617C11.167 13.4617 15.3316 4.34641 15.4102 4.26809C15.4888 4.18951 15.5673 3.8752 16.0388 3.8752C16.4317 3.8752 16.6674 4.18952 16.6674 4.5824V13.4619C16.6674 14.7975 17.4532 15.9764 18.8676 15.9764C20.3606 15.9764 21.1464 14.8763 21.1464 13.4619V6.15421C21.1464 4.73981 22.1679 3.79688 23.5037 3.79688C24.8395 3.79688 25.7825 4.73981 25.7825 6.15421V13.4619C25.7825 14.7975 26.5682 15.9764 27.9826 15.9764C29.4756 15.9764 30.2614 14.8763 30.2614 13.4619V6.15421C30.2614 4.73981 31.2829 3.79688 32.6187 3.79688C33.9545 3.79688 34.8975 4.73981 34.8975 6.15421V13.4619C34.8975 14.7975 35.6833 15.9764 37.0976 15.9764C38.5906 15.9764 39.3764 14.8763 39.3764 13.4619V5.21128C39.3764 2.14674 36.9405 0.0251497 33.9545 0.0251497C30.9686 0.0251497 29.1613 2.06817 29.1613 2.06817C28.1398 0.810925 26.804 0.0251497 24.5252 0.0251497C22.0893 0.0251497 19.9677 2.06817 19.9677 2.06817C19.0248 0.810925 17.2961 0.0251497 15.9602 0.0251497C13.8386 0.0251497 12.1099 0.96808 11.0884 3.32541L8.02389 10.5546L4.095 1.28213Z" fill="current"></path><path d="M101.138 2.22522C101.138 1.20371 102.003 0.339355 103.024 0.339355C104.046 0.339355 104.91 1.20371 104.91 2.22522C104.91 3.24673 104.046 4.11108 103.024 4.11108C101.924 4.11108 101.138 3.24673 101.138 2.22522ZM104.517 2.22522C104.517 1.36086 103.889 0.732244 103.025 0.732244C102.16 0.732244 101.532 1.43944 101.532 2.22522C101.532 3.08957 102.16 3.7182 103.025 3.7182C103.889 3.7182 104.517 3.011 104.517 2.22522Z" fill="current"></path><path d="M102.317 1.43935C102.317 1.36077 102.396 1.20361 102.553 1.20361H103.182C103.417 1.20361 103.574 1.28219 103.732 1.36077C103.81 1.43935 103.889 1.5965 103.889 1.75366C103.889 2.06797 103.732 2.22512 103.496 2.3037L103.81 2.61801C103.81 2.69659 103.889 2.69659 103.889 2.77517C103.889 2.85374 103.81 2.93232 103.732 2.93232C103.653 2.93232 103.575 2.85374 103.575 2.85374L103.182 2.38228H102.867V2.77517C102.867 2.85374 102.789 3.0109 102.632 3.0109C102.553 3.0109 102.396 2.93232 102.396 2.77517V1.43935H102.317ZM103.103 2.14655C103.26 2.14655 103.417 2.06797 103.417 1.91081C103.417 1.75366 103.339 1.67508 103.103 1.67508H102.71V2.22512H103.103V2.14655Z" fill="current"></path></g></svg>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Advertisement Section Ends Here -->


<!--Educative Business Cards Starting Here-->
<div class="container  mt-5  mb-3 ">
<h3 class="h3 p-3 mt-5 pt-5 d-flex justify-content-left">Educative for Business</h3>
  <div class="row">
    <div class="col-sm-4  p-3">
      <div class="card bg-white p-5 col-md-12 text-center border-0">
        <div class="card-header mt-3  border-0 bg-white text-left">
          <span class="pt-4 pb-4 pe-1 ps-1 border-0 " style="border-radius:100%; background-color:#caf5ed;">
          <svg width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" class="text-enterprise-darkHeader dark:text-accent3-lightP1 fill-current w-25 "><path fill-rule="evenodd" clip-rule="evenodd" d="M15.3 5.3a1 1 0 011.4 0l6 6c.4.4.4 1 0 1.4l-6 6a1 1 0 01-1.4-1.4l5.3-5.3-5.3-5.3a1 1 0 010-1.4zM8.7 5.3c.4.4.4 1 0 1.4L3.4 12l5.3 5.3a1 1 0 11-1.4 1.4l-6-6a1 1 0 010-1.4l6-6a1 1 0 011.4 0z"></path></svg>
          </span>
          <h3 class="h5 pt-5">For developers, by developers</h3>
        </div>
        <div class="card-body border-0">
          <p class="p text-secondary" style="font-size:15px;">Developer success is our key mission. Helping technical talent be the best they can be is at our core. This is why our developer founders created a hands-on platform with no setup.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4 p-3">
      <div class="card bg-white p-5 col-lg-12 text-center border-0">
        <div class="card-header mt-3 border-0 bg-white">
          <span class="pt-4 pb-4 pe-1 ps-1 border-0 " style="border-radius:100%; background-color:#caf5ed;">
          <svg width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" class="text-enterprise-darkHeader dark:text-accent3-lightP1 fill-current w-25"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 3a9 9 0 100 18 9 9 0 000-18zM1 12a11 11 0 1122 0 11 11 0 01-22 0z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12 5c.6 0 1 .4 1 1v5.4l3.4 1.7a1 1 0 11-.8 1.8l-4-2a1 1 0 01-.6-.9V6c0-.6.4-1 1-1z"></path></svg>
          </span>
          <h3 class="h5 pt-5">Save time<br> onboarding</h3>
        </div>
        <div class="card-body border-0">
          <p class="p text-secondary" style="font-size:15px;">
          There aren’t enough hours in the day to onboard everyone. Take back your time with automations that teach new hires about your internal processes.</p>
        </div>
      </div>
    </div>


    <div class="col-sm-4 p-3">
      <div class="card bg-white p-5 col-lg-12 text-center border-0">
        <div class="card-header mt-3 border-0 bg-white">
          <span class="pt-4 pb-4 pe-1 ps-1 border-0 " style="border-radius:100%; background-color:#caf5ed;">
          <svg width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" class="text-enterprise-darkHeader w-25 dark:text-accent3-lightP1 fill-current"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 18.49L9.5 12.48L13.5 16.48L22 6.92001L20.59 5.51001L13.5 13.48L9.5 9.48001L2 16.99L3.5 18.49Z"></path></svg>
          </span>
          <h3 class="h5 pt-5">Cancel <br>anytime</h3>
        </div>
        <div class="card-body border-0">
          <p class="p text-secondary" style="font-size:15px;">New hires contribute to production-ready code sooner, helping you scale your team and meet your business objectives. You’ll be the hero of your organization.</p>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-sm-4  p-3">
      <div class="card bg-white p-5 col-lg-12 text-center border-0">
        <div class="card-header mt-3  border-0 bg-white text-left">
          <span class="pt-4 pb-4 pe-1 ps-1 border-0 " style="border-radius:100%; background-color:#caf5ed;">
          <svg width="16" height="20" viewBox="0 0 16 20"  xmlns="http://www.w3.org/2000/svg" class="text-enterprise-darkHeader w-25 dark:text-accent3-lightP1 fill-current"><path fill-rule="evenodd" clip-rule="evenodd" d="M.5.1a1 1 0 011 0l14 9a1 1 0 010 1.7l-14 9A1 1 0 010 19V1C0 .6.2.3.5.1zM2 2.8v14.4L13.2 10 2 2.8z"></path></svg>
          </span>
          <h3 class="h5 pt-5">Complement your video training</h3>
        </div>
        <div class="card-body border-0">
          <p class="p text-secondary" style="font-size:15px;">Hands-on training matches most developers’ learning styles and offers greater control over pace, timing, and content. It's a great complement to your existing video-based services.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4 p-3">
      <div class="card bg-white p-5 col-lg-12 text-center border-0">
        <div class="card-header mt-3 border-0 bg-white">
          <span class="pt-4 pb-4 pe-1 ps-1 border-0 " style="border-radius:100%; background-color:#caf5ed;">
          <svg width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" class="text-enterprise-darkHeader dark:text-accent3-lightP1 w-25 fill-current"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L4 5V11.09C4 16.14 7.41 20.85 12 22C16.59 20.85 20 16.14 20 11.09V5L12 2ZM18 11.09C18 15.09 15.45 18.79 12 19.92C8.55 18.79 6 15.1 6 11.09V6.39L12 4.14L18 6.39V11.09Z"></path></svg>
          </span>
          <h3 class="h5 pt-5">Strengthen your<br> weakest link</h3>
        </div>
        <div class="card-body border-0">
          <p class="p text-secondary" style="font-size:15px;">
          There’s always room for improvement. Educative shows your team where, then gives them the tools and development opportunities to test your improvements.Educative shows your team where,</p>
        </div>
      </div>
    </div>


    <div class="col-sm-4 p-3">
      <div class="card bg-white p-5 col-lg-12 text-center border-0">
        <div class="card-header mt-3 border-0 bg-white">
          <span class="pt-4 pb-4 pe-1 ps-1 border-0 " style="border-radius:100%; background-color:#caf5ed;">
          <svg width="24" height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" class="text-enterprise-darkHeader dark:text-accent3-lightP1 fill-current w-25"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.19 12.44L14 10.5V8.5V6.5C14 6.5 14 4.5 11.57 4.5C9.14 4.5 9.07 6.5 9.07 6.5C9.07 7.5 9.07 11.39 9.07 11.39V14.65C6.92 14.19 7.05 14.21 6.81 14.21C6.28 14.21 5.78 14.42 5.4 14.8L4 16.22L9.09 21.31C9.52 21.75 10.12 22 10.74 22H17.04C18.02 22 18.85 21.3 19.01 20.33L19.81 15.62C20.03 14.32 19.38 13.04 18.19 12.44ZM17.84 15.29L17.04 20H10.74C10.65 20 10.57 19.96 10.5 19.9L6.82 16.22L11.07 17.11V6.5C11.07 6.22 11.29 6 11.57 6C11.85 6 12.07 6.22 12.07 6.5V12.5H14L17.29 14.23C17.69 14.43 17.91 14.86 17.84 15.29ZM9.07 6.5V8.945V11.39C9.07 11.39 9.07 7.45 9.07 6.5Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7 4.00002C9 1 14 1 16 4.00002"></path></svg>
          </span>
          <h3 class="h5 pt-5">Simple<br> start-up</h3>
        </div>
        <div class="card-body border-0">
          <p class="p text-secondary" style="font-size:15px;">
          Nothing to download, nothing to install, nothing to configure. Educative’s in-browser tutorials ensure you’re online and learning in 15 minutes, not hours. nothing to install, nothing to configure.</p>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Portfolio Ends Here -->

<!-- Educative Business Cards Ends Here -->





<!-- Business Payment Gateway Starts Here -->
<div class="container   mt-5  ">
  <h3 class="h3 p-3  mt-5 pt-5 d-flex justify-content-left">Select the right plan for your team</h3>
  <div class="row ">
  <div class="col-sm-4 mt-3 mb-3  me-auto " style="">
      <div class="relative col-md-6 ms-6 mb-14 ms-auto me-auto" style="max-width: 336px; width: 100%;border-top:5px solid #11101d;">
        <div id="" class="text-black pt-2  mt-5 mb-5 dark:text-dark-contrastText rounded overflow-hidden flex flex-initial flex-shrink-0 dark:bg-dark-80
          mt-0 flex-col relative rounded-md" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px, rgba(0, 0, 0, 0.04) 0px 10px 10px; z-index: 1;" >
              <div class="h-full flex flex-col items-center p-0 relative dark:bg-dark-80 dark:text-dark-contrastText" style="min-height: 486px;"><div class="flex flex-col items-center w-full border-0 border-b-2 pb-6"><p class="text-xl font-semibold text-center mx-6 mt-3 mb-3"><b>Team</b></p><div class="items-baseline mb-4"><p class="text-base line-through font-light text-center text-gray-900 dark:text-gray-400 m-0" style="text-decoration-color: rgb(170, 23, 76);"><s class="text-secondary">$199</s></p>
          <div class="flex pt-3 pb-3 items-baseline  justify-center"style="color:#5553ff;"><p class=" h1 text-4xl font-semibold m-0  dark:text-primary-light">$159<span class="text-2xl font-semibold m-0 dark:text-primary-light" style="font-size:20px;">
        </span></p></div>
          <p class="font-light m-0 mt-1 text-gray-900 text-secondary items-center">discounted price for <img aria-label="Flag Icon" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/flags/4x3/in.svg" style="display: inline-block; width: 1.5em; height: 1.5em; vertical-align: bottom;"></p></div><p class="text-base items-center m-0 text-center">Per learner, billed annually</p></div>
            <!-- <button class="contained-primary w-64 btn  pe-5 ps-5 pt-2 pb-2  m-0 mx-0 mt-3 mb-3 " style="background-color:white; color:black;border:1px solid gray" id="buyNowAnnual">Get Unlimited</button> -->
            <div class="flex flex-col w-full mt-5" style="min-height: 168px;"><div style="margin: 24px 43px 0px;">
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mt-px pe-2 p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2 " style="font-size:15px;">Team(s) management</span></div>

            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mt-px pe-2 p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2 " style="font-size:15px;">Unlimited access to courses</span></div>
            
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">New courses every week</span></div>
            
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Completion certificates</span></div>
<!--             
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:13px;">Early access to upcoming courses</span></div> --></div></div>
                <div class="flex w-full flex-col"></div></div>
                <button class="btn click2 text-default pt-3 pb-3 pe-5 ps-5 mb-5  border-t border-gray-200" id="giftAnnual}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-left me-2 pb-1"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></div><div class="flex w-full items-center justify-center"></div></div>
    </div>

    <div class="col-sm-4 mt-3 mb-3 bg- me-auto" style="">
      <div class="relative col-md-6 ms-6 mb-14 ms-auto me-auto" style="max-width: 336px; width: 100%; border-top:5px solid #50ddc2;">
        <div id="" class="text-black pt-2  mt-5 mb-5 dark:text-dark-contrastText rounded overflow-hidden flex flex-initial flex-shrink-0 dark:bg-dark-80
          mt-0 flex-col relative rounded-md" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px, rgba(0, 0, 0, 0.04) 0px 10px 10px; z-index: 1;" >
              <div class="h-full flex flex-col items-center p-0 relative dark:bg-dark-80 dark:text-dark-contrastText" style="min-height: 486px;"><div class="flex flex-col items-center w-full border-0 border-b-2 pb-6"><p class="text-xl font-semibold text-center mx-6 mt-3 mb-3"><b>Enterprise </b></p>



              <div class="items-baseline mb-4">
                <p class="text-base line-through font-light text-center text-gray-900 dark:text-gray-400 m-0 text-secondary" style="text-decoration-color: rgb(170, 23, 76);">Everything in Team, and:</p>

                <div class="flex pt-3 pb-3 items-baseline  justify-center"style="color:#5553ff;">
                <p class=" h1 text-4xl font-semibold m-0  dark:text-primary-light"><span class="text-2xl font-semibold m-0 dark:text-primary-light" style="font-size:20px;"></span></p></div>
          <p class="font-light m-0 mt-1 text-gray-900 text-secondary items-center"></p></div><p class="text-base items-center m-0 text-center"></p></div>
            <!-- <button class="contained-primary w-64 btn  pe-5 ps-5 pt-2 pb-2  m-0 mx-0 mt-3 mb-3 " style="background-color:white; color:black;border:1px solid gray" id="buyNowAnnual">Get Unlimited</button> -->
            <div class="flex flex-col w-full" style="min-height: 168px;"><div style="margin: 24px 43px 0px;">
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mt-px pe-2 p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2 " style="font-size:15px;">Analytics and insights</span></div>
            
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Certificates & assessment tracking</span></div>
            
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Custom Learning Paths (Beta)</span></div>

            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Private courses (Beta)</span></div>

            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Single sign-on</span></div>
            
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Customer Success Manager</span></div>
             

            <!--             
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:13px;">Early access to upcoming courses</span></div> --></div></div>
                <div class="flex w-full flex-col"></div></div>
                <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5  border-t border-gray-200" id="giftAnnual}" style="background-color:transparent;border:1px solid black;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-left me-2 pb-1" ><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>Schedule Time To Chat</button></div><div class="flex w-full items-center justify-center"></div></div>
    </div>

    <div class="col-sm-4 mt-3 mb-3 bg- me-auto  " style="">
      <div class="relative col-md-6 ms-6 mb-14 ms-auto me-auto" style="max-width: 336px; width: 100%; border-top:5px solid #50ddc2;">
        <div id="" class="text-black pt-2  mt-5 mb-5 dark:text-dark-contrastText rounded overflow-hidden flex flex-initial flex-shrink-0 dark:bg-dark-80
          mt-0 flex-col relative rounded-md" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px, rgba(0, 0, 0, 0.04) 0px 10px 10px; z-index: 1;" >
              <div class="h-full flex flex-col items-center p-0 relative dark:bg-dark-80 dark:text-dark-contrastText" style="min-height: 486px;"><div class="flex flex-col items-center w-full border-0 border-b-2 pb-6"><p class="text-xl font-semibold text-center mx-6 mt-3 mb-3"><b>Enterprise Plus</b></p>



              <div class="items-baseline mb-4">
                <p class="text-base line-through font-light text-center text-gray-900 dark:text-gray-400 m-0 text-secondary" style="text-decoration-color: rgb(170, 23, 76);">Everything in Enterprise, and:</p>

                <div class="flex pt-3 pb-3 items-baseline  justify-center"style="color:#5553ff;">
                <p class=" h1 text-4xl font-semibold m-0  dark:text-primary-light"><span class="text-2xl font-semibold m-0 dark:text-primary-light" style="font-size:20px;"></span></p></div>
          <p class="font-light m-0 mt-1 text-gray-900 text-secondary items-center"></p></div><p class="text-base items-center m-0 text-center"></p></div>
            <!-- <button class="contained-primary w-64 btn  pe-5 ps-5 pt-2 pb-2  m-0 mx-0 mt-3 mb-3 " style="background-color:white; color:black;border:1px solid gray" id="buyNowAnnual">Get Unlimited</button> -->
            <div class="flex flex-col w-full" style="min-height: 168px;"><div style="margin: 24px 43px 0px;">
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mt-px pe-2 p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2 " style="font-size:15px;">SOC2 compliance</span></div>
            
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:15px;">Professional services to tailor content (Beta)</span></div>

            <!--             
            <div class="flex mb-3 items-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 pe-2 mt-px p-0.5 rounded-full text-primary dark:text-primary-darkN1 dark:bg-primary-lightP1"><polyline points="20 6 9 17 4 12"></polyline></svg><span class="text-base ml-2" style="font-size:13px;">Early access to upcoming courses</span></div> --></div></div>
                <div class="flex w-full flex-col"></div></div>
                <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5  border-t border-gray-200" id="giftAnnual}" style="background-color:transparent;border:1px solid black;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-left me-2 pb-1" ><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>Schedule Time To Chat</button></div><div class="flex w-full items-center justify-center"></div></div>
    </div>

    
</div>
</div>
<!-- Business Payment Gateway Starts Here -->


<!-- Carousel Cards Section Starts Here -->
<div class="container-fluid">
<div class=" mt-5 pt-5 pb-5  mb-5  container">
      <div class="content1 text-center ">
      <h3 class="h3 p-3  mt-5 pt-5 ">What our users are saying</h3>
        </div>

      <div id="carouselExampleControls" class="carousel slide carousel-fade container p-5" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item   active d-inline-flex">
            <div class="card  me-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">These are high-quality courses. Trust me. I own around 10 and the price is worth it for the content quality. @EducativeInc came at the right time in my career. I'm understanding topics better than with any book or online video tutorial I've done. Truly made for developers. Thanks https://t.co/EeKruv5hxM</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-white">
                    <h6 class="pt-2">Anthony Walker</h6>
                    <p>@_webarchitect_</p>

                </div>
              </div>
              <div class="card  ms-3 text-left  pt-5 pb-5 border-0">
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">These are high-quality courses. Trust me. I own around 10 and the price is worth it for the content quality. @EducativeInc came at the right time in my career. I'm understanding topics better than with any book or online video tutorial I've done. Truly made for developers. Thanks https://t.co/EeKruv5hxM</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-white">
                    <h6 class="pt-2">Emma Bostian 🐞</h6>
                    <p>@_webarchitect_</p>

                </div>
              </div>
          </div>
          

          <div class="carousel-item   d-inline-flex">
            <div class="card  me-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">Just finished my first full #ML course: Machine learning for Software Engineers from Educative, Inc. ... Highly recommend!Just finished my first full #ML course: Machine learning for Software Engineers from Educative, Inc. ... Highly recommend!Just finished my first full #ML course:  Machine learning.
                </p>
                </div>
                <div class="card-footer border-0 ps-5 bg-white">
                    <h6 class="pt-2">Evan Dunbar</h6>
                    <p>ML Engineer</p>

                </div>
              </div>
              <div class="card ms-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">
                  You guys are the gold standard of crash-courses... Narrow enough that it doesn't need years of study or a full blown book to get the gist, but broad enough that an afternoon of Googling doesn't cut it.You guys are the gold standard of crash-courses... Narrow enough that it doesn't need.</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-white">
                    <h6 class="pt-2">Carlos Matias La Borde</h6>
                    <p>Software Developer</p>

                </div>
              </div>
          </div>

          <div class="carousel-item    d-inline-flex">
            <div class="card  me-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">I spend my days and nights on Educative. It is indispensable. It is such a unique and reader-friendly site, resources available for learners on Educative is well organized and deep, it helps break down tricky programming concepts into simple chunks and exercises for practice to solidify the learning experience.</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-white">
                    <h6 class="pt-2">Eric Downs</h6>
                    <p>Musician/Entrepeneur</p>

                </div>
              </div>
              <div class="card ms-3 text-left pt-5 pb-5 border-0" >
                <i class='bx bxs-quote-left pl-4 pt-3' style="font-size:25px;"></i>
 
                <div class="card-body">
                  <p class="card-text pt-2 ps-4" style="word-wrap: break-word;">Your courses are simply awesome, the depth they go into and the breadth of coverage is so good that I don't have to refer to 10 different websites looking for interview topics and content.
                
                  Your courses are simply awesome, the depth they go into and the breadth of coverage is so good that.</p>
                </div>
                <div class="card-footer border-0 ps-5 bg-white">
                    <h6 class="pt-2">Kenan Eyvazov</h6>
                    <p>DevOps Engineer</p>

                </div>
              </div>
          </div>


      </div>
    </div>
                  </div>
</div>
<!-- Carousel Cards Section Ends Here -->

<!-- HyperRefrence Starts Here -->
<div class="container pt-2 pb-2 p-5" style="height:auto; width:100%;">
  <div class="row">
    <div class="col-sm-6 col-md-6 ">
      <div class="content ">
        <div class="card-header border-0 bg-white">
          <span >
            <svg width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#enterpriseCamp)"><path d="M119.864 107.859L116.63 100.095C116.627 100.09 116.625 100.084 116.622 100.078L90.7435 37.9681C90.4707 37.3131 89.8304 36.8865 89.121 36.8865H80.5691C79.5981 36.8865 78.8113 37.6735 78.8113 38.6443C78.8113 39.6151 79.5981 40.4021 80.5691 40.4021H87.9491L112.37 99.0119H57.936L33.5156 40.4021H73.5451C74.5162 40.4021 75.303 39.6151 75.303 38.6443C75.303 37.6735 74.5162 36.8865 73.5451 36.8865H32.6367V28.7532H52.2344C53.2052 28.7532 53.9922 27.9662 53.9922 26.9954V13.4059C53.9922 12.4351 53.2052 11.6481 52.2344 11.6481H32.6367V11.4646C32.6367 10.4938 31.8497 9.70679 30.8789 9.70679C29.9081 9.70679 29.1211 10.4938 29.1211 11.4646V13.4059V26.9954V38.2928L8.82753 86.9979L0.490592 95.6684C-0.173157 96.3584 -0.162375 97.4526 0.514733 98.1297L3.10856 100.724L0.135515 107.859C-0.0904224 108.401 -0.0304225 109.021 0.295592 109.51C0.621607 109.999 1.17051 110.293 1.75809 110.293H13.4049C13.4112 110.293 13.4175 110.293 13.4238 110.293H48.3461C48.3482 110.293 48.3503 110.293 48.3522 110.293C48.3553 110.293 48.3585 110.293 48.3616 110.293H59.9941C59.9962 110.293 59.9983 110.293 60.0004 110.293C60.0034 110.293 60.0067 110.293 60.0098 110.293H118.242C118.83 110.293 119.378 109.999 119.704 109.51C120.031 109.021 120.091 108.401 119.864 107.859ZM32.6367 15.1637H50.4766V25.2376H32.6367V15.1637ZM4.39504 106.777L5.79707 103.412L9.16269 106.777H4.39504ZM12.7936 105.436L6.443 99.0855C6.43925 99.0815 6.43527 99.0778 6.43152 99.0741L4.21973 96.8625L25.654 74.5707L12.7936 105.436ZM16.0435 106.777L30.8794 71.1708L45.715 106.777H16.0435ZM49.5236 106.777L32.5017 65.9243C32.5012 65.9234 32.5008 65.9227 32.5005 65.9218C32.4698 65.8486 32.4333 65.7776 32.3923 65.7085C32.384 65.6947 32.3756 65.6813 32.3672 65.6677C32.3306 65.6093 32.2905 65.5524 32.2462 65.4978C32.2399 65.4898 32.2343 65.4814 32.2277 65.4736C32.1872 65.4251 32.144 65.3783 32.0974 65.3333C32.089 65.3251 32.0796 65.3182 32.0712 65.3103C32.0566 65.2969 32.0414 65.2843 32.0262 65.2714C31.9783 65.2301 31.9291 65.1919 31.8785 65.1565C31.8661 65.1481 31.8544 65.1387 31.8417 65.1305C31.7768 65.0879 31.7102 65.0501 31.6416 65.0171C31.6315 65.0122 31.6209 65.0082 31.6108 65.0035C31.5483 64.9749 31.4843 64.9501 31.4194 64.9292C31.4058 64.9247 31.3922 64.9198 31.3786 64.9158C31.3052 64.894 31.2307 64.8772 31.1555 64.8652C31.1414 64.8629 31.1269 64.8619 31.1126 64.8598C31.0446 64.8507 30.9764 64.8457 30.908 64.8446C30.8983 64.8443 30.889 64.8425 30.8794 64.8425C30.8749 64.8425 30.8707 64.8434 30.8662 64.8434C30.7898 64.8439 30.7137 64.85 30.638 64.8605C30.6208 64.8629 30.604 64.8659 30.5871 64.869C30.518 64.8804 30.4493 64.8957 30.3818 64.9156C30.3745 64.9177 30.3668 64.9193 30.3595 64.9215C30.2859 64.9442 30.214 64.9728 30.1434 65.0054C30.1301 65.0117 30.1169 65.0183 30.1036 65.0248C30.0408 65.0558 29.9796 65.09 29.9201 65.1286C29.913 65.1331 29.9058 65.1371 29.8987 65.1418C29.8362 65.184 29.7762 65.2308 29.7185 65.2817C29.7042 65.2943 29.6908 65.3077 29.677 65.3208C29.6552 65.3412 29.6327 65.3602 29.6119 65.382L15.5482 80.0081L29.1211 47.4334V54.1756C29.1211 55.1464 29.9081 55.9334 30.8789 55.9334C31.8497 55.9334 32.6367 55.1464 32.6367 54.1756V47.4334C38.2891 60.999 49.5848 88.1093 55.1411 101.444C55.1435 101.45 55.1458 101.456 55.1484 101.461C56.0573 103.642 56.8124 105.455 57.3632 106.777H49.5236ZM61.1716 106.777L59.4009 102.528H113.834L115.605 106.777H61.1716Z" class="text-enterprise-darkHeader dark:text-primary-lightP1 fill-current"></path><path  fill-rule="evenodd" clip-rule="evenodd" d="M30.5 9C31.6046 9 32.5 9.89543 32.5 11V55C32.5 56.1046 31.6046 57 30.5 57C29.3954 57 28.5 56.1046 28.5 55V11C28.5 9.89543 29.3954 9 30.5 9Z" class="text-accent3-dark dark:text-accent3-lightP1 fill-current"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M33 15V25H50V15H33ZM31 11C29.8954 11 29 11.8954 29 13V27C29 28.1046 29.8954 29 31 29H52C53.1046 29 54 28.1046 54 27V13C54 11.8954 53.1046 11 52 11H31Z" class="text-accent3-dark dark:text-accent3-lightP1 "></path></g><defs><clipPath id="enterpriseCamp"><rect width="120" height="120" fill="white"></rect></clipPath></defs></svg>
          </span>
        </div>
        <div class="card-body">
              <h5 class="h4 mt-3">
              Educative for Bootcamps
              </h5>
              <p class="pt-3">Help your students ace their interviews and get hired faster. Learn how Bootcamps of all sizes utilize our coursework.</p>
              <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5 mt-3  border-t border-gray-200" id="giftAnnual}" style="background-color:transparent;border:1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Learn More&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-6  me-auto ms-auto">
    <div class="content">
    <div class="card-header border-0 bg-white">
          <span >
          <svg width="120" height="120" viewBox="0 0 110 110"  xmlns="http://www.w3.org/2000/svg"><path d="M53.4 106.8h3.2v3.2h-3.2v-3.2z" class="text-secondary-darkN1 dark:text-primary-lightP1  fill-current"></path><path d="M109.8 95.5v-3.2h-3.2v-13A13 13 0 0097.2 67c1.8-1.8 3-4.2 3-7v-3.2a9.7 9.7 0 00-19.4 0V60c0 2.8 1.1 5.2 3 7a13 13 0 00-9.5 12.4v12.9H71a13 13 0 00-9.3-10.8c1.8-1.8 3-4.2 3-7v-3.2a9.7 9.7 0 00-19.4 0v3.3c0 2.7 1.2 5.1 3 6.9A13 13 0 0039 92.3h-3.3v-13A13 13 0 0026.3 67c1.8-1.8 3-4.2 3-7v-3.2a9.7 9.7 0 00-19.4 0V60c0 2.8 1.1 5.2 3 7a13 13 0 00-9.5 12.4v12.9H.2v3.2H39v11.3h-3.2v3.2h14.5v-3.2h-8v-13c0-5.2 4.2-9.6 9.6-9.6h6.4c5.4 0 9.7 4.4 9.7 9.7v12.9h-8v3.2h14.4v-3.2h-3.2V95.5h38.7zM84 56.8a6.5 6.5 0 0112.9 0V60A6.5 6.5 0 0184 60v-3.2zm-6.4 22.6c0-5.3 4.3-9.7 9.6-9.7h6.5c5.3 0 9.6 4.4 9.6 9.7v12.9H77.6v-13zM13 56.8a6.5 6.5 0 0112.9 0V60a6.5 6.5 0 01-12.9 0v-3.2zm19.3 35.5H6.7v-13c0-5.2 4.3-9.6 9.6-9.6h6.5c5.3 0 9.6 4.4 9.6 9.7v12.9zm16.2-21a6.5 6.5 0 0112.8 0v3.3a6.5 6.5 0 01-12.8 0v-3.3z" class="text-secondary-darkN1 dark:text-primary-lightP1  fill-current "></path><path d="M55 58a29 29 0 0027.9-21H100V21H83A29 29 0 0035.8 7.2l2.1 2.4a25.7 25.7 0 11-2.1 2.1l-2.4-2.1A29 29 0 0027 20.9H10v16.2H27A29 29 0 0055 58zm41.9-33.8v9.6H83.6a29 29 0 000-9.6h13.3zM13 33.8v-9.6h13.3a29 29 0 000 9.6H13.1z" class="text-accent3-dark dark:text-accent3-lightP1 fill-current"></path><path d="M55 51.6a22.6 22.6 0 100-45.2 22.6 22.6 0 000 45.2zm0-42a19.4 19.4 0 110 38.8 19.4 19.4 0 010-38.7z" class="text-accent3-dark dark:text-accent3-lightP1 fill-current"></path><path d="M68.7 24.4l-6.9-6.8-9 9.1-4.6-4.5-6.9 6.8 11.4 11.4 16-16zm-20.5 2.3l4.5 4.6 9.1-9.1 2.3 2.2-11.4 11.4L46 29l2.3-2.3z" class="text-accent3-dark dark:text-accent3-lightP1 fill-current"></path><path d="M16.3 27.4h3.3v3.2h-3.3v-3.2zM90.4 27.4h3.3v3.2h-3.3v-3.2z" class="text-secondary-darkN1 dark:text-primary-lightP1 fill-current"></path></svg>
          </span>
        </div>
        <div class="card-body">
              <h5 class="h4 mt-3">
              Educative for Recruitment Teams
              </h5>
              <p class="pt-3">Be like our FAANG customers — learn how to support your D/I initiatives and increase the throughput of technical candidates.</p>
              <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5 mt-3  border-t border-gray-200" id="giftAnnual}" style="background-color:transparent;border:1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Learn More&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
    </div>
    </div>
  </div>
</div>

<!-- HyperRefrence Ends Here -->

<!-- Accordion Section Starts Here -->
<div class="container-fluid bg-white p-5">
<div class="container mb-3 pb-4">
  <div class="content  ">
   <h2 class=" p-2 pe-5 mt-2 mb-4 d-flex justify-content-left">Frequently asked questions</h2>
  </div>
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item pt-3 pb-3">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       <h5 class="h5">Are there required sizes for the different plans?</h5>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body d-flex justify-content-left text-secondary">Teams are for 3 to 25 users, Enterprise requires a minimum of 10 users, and Enterprise Plus has a minimum of 50. If you have different business needs, please get in touch with us and we’ll do everything we can to make it work for you.
</div>
    </div>
  </div>
  <div class="accordion-item pt-3 pb-3">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <h5 class="h5">Can I upgrade to a higher plan?</h5>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body d-flex justify-content-left text-secondary">Of course. You can easily add users or upgrade your plan at any time. Drop us an email for help.

</div>
    </div>
  </div>
  <div class="accordion-item pt-3 pb-3">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <h5 class="h5">How can I learn more about the pricing for the Enterprise options?</h5>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body d-flex justify-content-left text-secondary">Reach out to us and we'll tailor your price to match the size of your organization and your learning goals.</div>
    </div>
  </div>
  <div class="accordion-item pt-3 pb-3">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <h5 class="h5">How can I refer other teams in my company to Educative?</h5>
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body d-flex justify-content-left text-secondary">You can either add them to your admin dashboard or talk to us at enterprise@educative.io</div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Accordion Section Ends Here -->
<div class="container d-flex justify-content-center p-5  ">
  <div class="content  col-sm-4">
    <h2 class="h3">Help your developers be the<br> best they can be</h2>
    <button class="btn  text-default pt-3 pb-3 pe-5 ps-5 mb-5 mt-5  border-secondary text-dark" onclick="openForm()" id="giftAnnual}" style="background-color:transparent;border:1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Specialist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>
</div>

<!--MidRanger Sections Starts Here -->
<!--MidRanger Sections Ends Here -->

<!-- Footer Starts Here -->
    <!-- Sixth Section Starts Here -->
    <div class="sixth container-fluid" style="height:auto; width:100%;background-color:#11101d;">
        <div class="container" style="height:180px; width:100%;">
        <div class=" container  text-left" style="text-align:left; border-bottom:1px solid white;">
        <h5 class="text-left pt-5 text-light"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo me-2 mb-2 text-light"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg>Educative</h5>
        <p class="text-left pt-3 text-light">Learn in-demand tech skills in half the time</p>
        </div>
        </div>

        <div class="container ">
          <div class="row  container me-auto me-auto pb-5" style="border-bottom:1px solid white;">
            <div class="col-sm-2   me-auto ms-auto ">
              <ul style="list-style:none" >
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

            <div class="col-sm-2 me-auto ms-auto  ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">SCHOLORSHIPS</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Students</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">For Educators</a></li>
              </ul>
            </div>

            <div class="col-sm-2 me-auto ms-auto ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">CONTRIBUTE</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Become An Author</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Become An Affilliate</a></li>
              </ul>
            </div>

            <div class="col-sm-2 me-auto ms-auto  ">
              <ul style="list-style:none" >
                <li class="active mt-3 text-left"><a href="#" style="text-decoration:none; color:white; font-size:17px;">LEGAL</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Privacy Policy</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Terms Of Services</a></li>
                <li class="active mt-4 text-left"><a href="#" style="text-decoration:none; color:white; font-size:14px;">Business Terms Of Services</a></li>
              </ul>
            </div>
            
            <div class="col-sm-2 me-auto ms-auto  ">
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
    window.__be.id = "617c6b260095770007aeb8da";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->

<!-- PopUP Form Starts Here -->
<div class="form-popup container-fluid " id="myForm">
    <div class="container">
    <div class="row  col-md-9 me-auto ms-auto mt-5">
      <div class="col-sm-6 ms bg-white">
        <form action="index.php" class="  form-control border-0 form-container me-5">
        <span style="font-size:30px; color:black; float:right; transform:translateX(15px);"><i class='bx bx-x cross  p-1 ' onclick="closeForm()"></i></span>
        <label for="email" class="d-flex justify-content-left mt-5" >Email</label>
        <input type="text" class="text-left d-flex justify-content-left" placeholder="Enter Email"  >
    
        <label for="psw" class="d-flex justify-content-left">Password</label>
        <input type="password" class="text-left d-flex justify-content-left" placeholder="Enter Password">

        <label for="Mb" class="d-flex justify-content-left">Mobile Number</label>
        <input type="text" class="text-left d-flex justify-content-left" placeholder="123-45-6789">

        <label for="Org" class="d-flex justify-content-left">Organization</label>
        <input type="text" class="text-left d-flex justify-content-left" placeholder="COMPANY...">
    
        <button type="submit" class="btn">Login</button>
        <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
      </form>
    </div>
    <div class="col-sm-6  " style="background-color:#11101d;">
    <div class="header d-flex justify-content-left ">
    <span>
    <h5 class="text-left pt-5 h5  ps-2 text-light d-flex justify-content-left"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" height="26px" class="text-logo me-2 mb-2 text-light"><path d="M333 0H67A67 67 0 000 67v266a67 67 0 0067 67h266a67 67 0 0067-67V67a67 67 0 00-67-67zm29 325a37 37 0 01-37 37H75a37 37 0 01-37-37V162h324zm0-201H38V75a37 37 0 0137-37h250a37 37 0 0137 37z"></path><rect x="68" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="126" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="184" y="63" width="38.1" height="38.1" rx="2.4"></rect><rect x="200" y="295" width="114.3" height="38.1" rx="3.3"></rect><path d="M109 331a3 3 0 005 0l61-68a3 3 0 001-4l-59-69a3 3 0 00-4-1l-20 17a3 3 0 00-1 5l40 47a3 3 0 010 4l-43 47a3 3 0 001 4z"></path></svg>Educative</h5>


    <h4 class="h5 text-white pt-4 pb-4 ps-2 d-flex justify-content-left">Get Started</h4>
    <p class=" pt-3 text-light ps-2 d-flex justify-content-left">Learn in-demand tech skills in half the time</p>
    </span>

    </div>
    <div class=" footer mt-5">
      <svg width="384" height="200" viewBox="0 0 384 200" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip3)"><g opacity="0.1"><path opacity="0.1" d="M168 131.2c2.2 0 4-2.3 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M171.1 103.8c.6-1 .9-2 .9-3.1 0-3-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 1 .2 2.2.8 3.1a6.4 6.4 0 000 6.4 6.4 6.4 0 000 6.3c-.6 1-.8 2-.8 3.2 0 2.8 1.8 5.2 4 5.2s4-2.4 4-5.2c0-1.1-.3-2.2-.9-3.2a6.4 6.4 0 000-6.3 6.4 6.4 0 000-6.4z" fill="#EEF7FF"></path><path opacity="0.1" d="M168 99.5c2.2 0 4-2.3 4-5.2 0-2.8-1.8-5.2-4-5.2s-4 2.4-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M168 93.2c2.2 0 4-2.3 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M153 44.6l-1.4-2.1 10.4-1.8-11.3.1a19 19 0 01-.3-15l15.2 7.8-14-10.2a19 19 0 0120-9.3A19.2 19.2 0 01187 30a18.9 18.9 0 01-4 14.7 19 19 0 012.3 3.5l-13.6 7 14.5-4.8A18.9 18.9 0 01183 68a19 19 0 01-15 30.7 19.2 19.2 0 01-17.2-10.7 18.9 18.9 0 012.1-20 18.9 18.9 0 010-23.5z" fill="#53ACFF"></path><path opacity="0.1" d="M187.2 56.4c0 4.2-1.5 8.3-4.1 11.7a19 19 0 01-15 30.7A19.2 19.2 0 01150.9 88a18.9 18.9 0 012.1-20c-2.5-3.2 34.2-13.9 34.2-11.7z" fill="#000"></path></g><g opacity="0.1"><path opacity="0.1" d="M214.5 118.8c1.7 0 3-1.7 3-3.9 0-2.1-1.3-3.8-3-3.8-1.6 0-3 1.7-3 3.8 0 2.2 1.4 3.9 3 3.9z" fill="#EEF7FF"></path><path opacity="0.1" d="M216.9 98.4c.4-.8.6-1.6.6-2.4 0-2.2-1.3-3.9-3-3.9-1.6 0-3 1.7-3 3.9 0 .8.2 1.6.7 2.4a4.8 4.8 0 000 4.7 4.8 4.8 0 000 4.7c-.5.7-.7 1.6-.7 2.4 0 2.1 1.4 3.9 3 3.9 1.7 0 3-1.8 3-4 0-.7-.2-1.6-.6-2.3a4.8 4.8 0 000-4.7 4.8 4.8 0 000-4.7z" fill="#EEF7FF"></path><path opacity="0.1" d="M214.5 95.1c1.7 0 3-1.7 3-3.9 0-2-1.3-3.8-3-3.8-1.6 0-3 1.7-3 3.8 0 2.2 1.4 4 3 4z" fill="#EEF7FF"></path><path opacity="0.1" d="M214.5 90.4c1.7 0 3-1.7 3-3.9 0-2.1-1.3-3.9-3-3.9-1.6 0-3 1.8-3 4 0 2 1.4 3.8 3 3.8z" fill="#EEF7FF"></path><path opacity="0.1" d="M203.4 54.1l-1.1-1.6 7.8-1.3h-8.5a14.1 14.1 0 01-.3-11.2l11.4 5.9-10.5-7.7a14.2 14.2 0 0115-6.8A14.3 14.3 0 01228.7 43a14 14 0 01-2.9 11c.6.8 1.2 1.7 1.6 2.6l-10.1 5.2 10.8-3.6a14 14 0 01-2.3 13.3 14.1 14.1 0 01-11.2 23 14.3 14.3 0 01-12.8-8 14 14 0 011.6-15 14.1 14.1 0 010-17.5z" fill="#53ACFF"></path><path opacity="0.1" d="M228.9 62.9c0 3.2-1.1 6.2-3.1 8.7a14.1 14.1 0 01-11.2 23 14.3 14.3 0 01-12.9-8 14 14 0 011.7-15c-2-2.4 25.5-10.3 25.5-8.7z" fill="#000"></path></g><g opacity="0.1"><path opacity="0.1" d="M363.9 117.3c2.2 0 4-2.3 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M360.7 90c-.5-1-.8-2.2-.8-3.3 0-2.8 1.8-5.1 4-5.1s4 2.3 4 5.1c0 1.1-.3 2.2-.9 3.2a6.4 6.4 0 010 6.3 6.4 6.4 0 010 6.4c.6 1 .9 2 .9 3.2 0 2.8-1.8 5.1-4 5.1s-4-2.3-4-5.1c0-1.2.3-2.3.8-3.2a6.4 6.4 0 010-6.4 6.4 6.4 0 010-6.3z" fill="#EEF7FF"></path><path opacity="0.1" d="M363.9 85.6c2.2 0 4-2.3 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M363.9 79.3c2.2 0 4-2.4 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.8 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M378.8 30.7c.6-.7 1-1.4 1.5-2.2l-10.5-1.7 11.3.1a19 19 0 00.4-15l-15.2 7.8 14-10.2a19 19 0 00-20-9.3A19.2 19.2 0 00344.7 16a18.9 18.9 0 004 14.7 19 19 0 00-2.2 3.5l13.6 7-14.5-4.8a18.8 18.8 0 003 17.8 19 19 0 0015 30.7A19.2 19.2 0 00381 74.2a18.9 18.9 0 00-2.2-20 18.9 18.9 0 000-23.5z" fill="#53ACFF"></path><path opacity="0.1" d="M344.7 42.4c0 4.3 1.4 8.4 4 11.8a18.9 18.9 0 0015 30.7A19.2 19.2 0 00381 74.2a18.9 18.9 0 00-2.2-20c2.6-3.3-34.1-13.9-34.1-11.8z" fill="#000"></path></g><g opacity="0.1"><path opacity="0.1" d="M325.4 116.7c1.6 0 3-1.7 3-3.9 0-2.1-1.4-3.8-3-3.8-1.7 0-3 1.7-3 3.8 0 2.2 1.3 4 3 4z" fill="#EEF7FF"></path><path opacity="0.1" d="M323 96.3c-.4-.8-.6-1.6-.6-2.4 0-2.1 1.4-3.9 3-3.9s3 1.8 3 3.9c0 .8-.2 1.6-.6 2.4a4.8 4.8 0 010 4.7 4.8 4.8 0 010 4.7c.4.8.6 1.6.6 2.4 0 2.1-1.4 3.9-3 3.9-1.7 0-3-1.8-3-3.9 0-.8.2-1.6.6-2.4a4.9 4.9 0 010-4.7 4.9 4.9 0 010-4.7z" fill="#EEF7FF"></path><path opacity="0.1" d="M325.4 93c1.6 0 3-1.7 3-3.8 0-2.2-1.4-4-3-4-1.7 0-3 1.8-3 4 0 2.1 1.3 3.8 3 3.8z" fill="#EEF7FF"></path><path opacity="0.1" d="M325.4 88.3c1.6 0 3-1.7 3-3.9 0-2.1-1.4-3.8-3-3.8-1.7 0-3 1.7-3 3.8 0 2.2 1.3 3.9 3 3.9z" fill="#EEF7FF"></path><path opacity="0.1" d="M336.5 52c.5-.5.8-1 1.2-1.6l-7.9-1.3h8.5a14.1 14.1 0 00.3-11.2l-11.4 5.9 10.5-7.7a14.2 14.2 0 00-15-6.8A14.3 14.3 0 00311.2 41a14 14 0 003 11c-.7.7-1.3 1.6-1.7 2.5l10.1 5.2-10.8-3.6a14 14 0 002.3 13.3 14.1 14.1 0 0011.2 23 14.3 14.3 0 0012.9-8 14.1 14.1 0 00-1.6-15 14.1 14.1 0 000-17.5z" fill="#53ACFF"></path><path opacity="0.1" d="M311 60.8c0 3.2 1.1 6.3 3.1 8.7a14.1 14.1 0 0011.2 23 14.3 14.3 0 0012.9-8 14 14 0 00-1.7-15c2-2.4-25.4-10.3-25.4-8.7z" fill="#000"></path></g><g opacity="0.1"><path opacity="0.1" d="M21.6 117.3c2.2 0 4-2.3 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M24.7 90c.6-1 .9-2.2.9-3.3 0-2.8-1.8-5.1-4-5.1s-4 2.3-4 5.1c0 1.1.3 2.2.8 3.2a6.5 6.5 0 000 6.3 6.5 6.5 0 000 6.4c-.5 1-.8 2-.8 3.2 0 2.8 1.8 5.1 4 5.1s4-2.3 4-5.1c0-1.2-.3-2.2-.9-3.2a6.4 6.4 0 000-6.3 6.4 6.4 0 000-6.4z" fill="#EEF7FF"></path><path opacity="0.1" d="M21.6 85.6c2.2 0 4-2.3 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.9 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M21.6 79.3c2.2 0 4-2.4 4-5.2 0-2.9-1.8-5.2-4-5.2s-4 2.3-4 5.2c0 2.8 1.8 5.2 4 5.2z" fill="#EEF7FF"></path><path opacity="0.1" d="M6.7 30.7a19 19 0 01-1.5-2.2l10.5-1.7-11.4.1A18.9 18.9 0 014 12l15.2 7.8-14-10.2a19 19 0 0120-9.2A19.2 19.2 0 0140.6 16a18.8 18.8 0 01-4 14.7 19 19 0 012.3 3.5l-13.6 7 14.5-4.8a18.9 18.9 0 01-3.1 17.8 18.9 18.9 0 01-15 30.7A19.2 19.2 0 014.5 74.2a18.9 18.9 0 012.1-20 18.9 18.9 0 010-23.5z" fill="#53ACFF"></path><path opacity="0.1" d="M40.8 42.4c0 4.3-1.5 8.4-4.1 11.8a18.9 18.9 0 01-15 30.7A19.2 19.2 0 014.5 74.2a18.9 18.9 0 012.1-20c-2.5-3.3 34.2-13.9 34.2-11.8z" fill="#000"></path></g><g opacity="0.1"><path opacity="0.1" d="M60 116.7c1.7 0 3-1.7 3-3.9 0-2.1-1.3-3.8-3-3.8-1.6 0-3 1.7-3 3.8 0 2.2 1.4 4 3 4z" fill="#EEF7FF"></path><path opacity="0.1" d="M62.4 96.3c.4-.8.7-1.6.6-2.4 0-2.1-1.3-3.9-3-3.9-1.6 0-3 1.8-3 3.9 0 .8.3 1.6.7 2.4a4.8 4.8 0 000 4.7 4.8 4.8 0 000 4.7c-.4.8-.6 1.6-.6 2.4 0 2.1 1.3 3.9 3 3.9 1.6 0 3-1.8 3-3.9 0-.8-.3-1.6-.7-2.4a4.8 4.8 0 000-4.7 4.8 4.8 0 000-4.7z" fill="#EEF7FF"></path><path opacity="0.1" d="M60 93c1.7 0 3-1.7 3-3.8 0-2.2-1.3-4-3-4-1.6 0-3 1.8-3 4 0 2.1 1.4 3.8 3 3.8z" fill="#EEF7FF"></path><path opacity="0.1" d="M60 88.3c1.7 0 3-1.7 3-3.9 0-2.1-1.3-3.8-3-3.8-1.6 0-3 1.7-3 3.8 0 2.2 1.4 3.9 3 3.9z" fill="#EEF7FF"></path><path opacity="0.1" d="M49 52c-.5-.5-.9-1-1.2-1.6l7.8-1.3h-8.4a14.1 14.1 0 01-.3-11.2l11.4 5.9-10.5-7.7a14.2 14.2 0 0115-6.8A14.3 14.3 0 0174.3 41a14 14 0 01-3 11 14 14 0 011.7 2.5l-10.2 5.2 10.9-3.6a14 14 0 01-2.3 13.3 14.1 14.1 0 01-11.3 23 14.3 14.3 0 01-12.8-8 14 14 0 011.6-15A14.1 14.1 0 0149 52z" fill="#53ACFF"></path><path opacity="0.1" d="M74.4 60.8c0 3.2-1 6.3-3 8.7a14.1 14.1 0 01-11.3 23 14.3 14.3 0 01-12.8-8 14 14 0 011.6-15c-1.9-2.4 25.5-10.3 25.5-8.7z" fill="#000"></path></g><path opacity="0.1" d="M192 174.7c106 0 192-1.4 192-3.1 0-1.7-86-3-192-3s-192 1.3-192 3 86 3 192 3zM192 200c106 0 192-1.4 192-3 0-1.8-86-3.2-192-3.2S0 195.2 0 197c0 1.7 86 3.1 192 3.1zM192 121.8c106 0 192-1.3 192-3s-86-3.1-192-3.1-192 1.4-192 3c0 1.8 86 3.1 192 3.1zM192 148.3c106 0 192-1.4 192-3.1 0-1.7-86-3.1-192-3.1s-192 1.4-192 3c0 1.8 86 3.2 192 3.2zM283.4 38.4c-1.3-.2-2.6 0-3.7.4a5.5 5.5 0 01-4.5 0 6.3 6.3 0 00-5.3.1c-.4.3-1 .4-1.5.4-2.1 0-3.9-2.1-4.2-5l1-1c1.3-2 3.2-3.4 5.4-3.4 2.1 0 4 1.3 5.3 3.3a4 4 0 003.5 1.9c1.8 0 3.3 1.3 4 3.3z" fill="#53ACFF"></path><path opacity="0.1" d="M289.9 29.6l-3.5 2.1 2.1-3.7c-.6-.5-1.3-.7-2-.8h-.1a4 4 0 01-.7 0l-1.2.7.5-.9c-.8-.3-1.5-.8-2-1.5l-2.1 1.3 1.3-2.4a6.1 6.1 0 00-4.7-2.3 6.4 6.4 0 00-5.4 3.3 4 4 0 01-3.5 1.8h-.1c-2.4 0-4.3 2.7-4.3 6 0 3.4 1.9 6 4.3 6 .5 0 1 0 1.5-.3a6.3 6.3 0 015.3 0 5.5 5.5 0 004.4 0 6.3 6.3 0 015.2 0c.5.3 1 .4 1.5.4 2.4 0 4.4-2.7 4.4-6 0-1.3-.3-2.6-1-3.7zM137 36.5c-.8-.1-1.7 0-2.5.3a3.9 3.9 0 01-3.1 0 4.4 4.4 0 00-3.7 0c-.3.2-.7.3-1 .3-1.6 0-2.8-1.4-3-3.4l.7-.8a4.5 4.5 0 013.7-2.3c1.6 0 2.9.9 3.8 2.3a2.9 2.9 0 002.4 1.3c1.3 0 2.3 1 2.8 2.3z" fill="#53ACFF"></path><path opacity="0.1" d="M141.6 30.4l-2.4 1.5 1.5-2.7c-.4-.3-1-.5-1.5-.5h-.5l-.8.5.3-.6a3 3 0 01-1.4-1.1l-1.5.9 1-1.7a4.3 4.3 0 00-3.3-1.6c-1.5 0-2.9.9-3.8 2.3a2.8 2.8 0 01-2.4 1.3h-.1c-1.7 0-3 1.9-3 4.2 0 2.4 1.3 4.3 3 4.3.3 0 .7-.1 1-.3a4.4 4.4 0 013.7 0c.5.1 1 .3 1.6.3.5 0 1-.1 1.5-.4a4.4 4.4 0 013.7.1c.3.2.7.3 1 .3 1.7 0 3-2 3-4.3 0-.9-.2-1.7-.6-2.5zM94.5 63.8c.8-.2 1.7 0 2.6.3a3.9 3.9 0 003 0 4.4 4.4 0 013.8 0c.3.2.6.3 1 .3 1.5 0 2.7-1.5 3-3.4l-.8-.8a4.5 4.5 0 00-3.7-2.3c-1.5 0-2.9.9-3.7 2.2a2.9 2.9 0 01-2.5 1.4c-1.2 0-2.3 1-2.7 2.3z" fill="#53ACFF"></path><path opacity="0.1" d="M90 57.7l2.3 1.5-1.4-2.7c.4-.3.9-.5 1.4-.5h.6l.8.5-.4-.6c.6-.2 1.1-.6 1.4-1.1l1.5.9-.9-1.7a4.3 4.3 0 013.3-1.6c1.5 0 2.8.9 3.7 2.3a2.8 2.8 0 002.5 1.3c1.8 0 3.1 1.9 3.1 4.2 0 2.4-1.4 4.3-3 4.3-.4 0-.8-.1-1-.3a4.4 4.4 0 00-3.8 0 3.8 3.8 0 01-3 0 4.4 4.4 0 00-3.7 0c-.3.2-.7.3-1 .3-1.7 0-3.1-2-3.1-4.3 0-.9.2-1.7.6-2.5z" fill="#53ACFF"></path><path d="M232.8 170.6c.9-1.7-.2-3.7-1.4-5.2s-2.6-3.1-2.6-5c0-2.8 3-4.4 5.3-5.8a26 26 0 004.8-3.9 7 7 0 001.5-2c.5-1 .5-2.2.4-3.4 0-4-.3-7.8-.5-11.8" stroke="#EEF7FF" stroke-width="4" stroke-miterlimit="10"></path><path d="M244.7 133.4a4.3 4.3 0 00-2.1-3.6l-1 2v-2.4a4.3 4.3 0 00-4.8 1.7 4.3 4.3 0 002.4 6.6 4.3 4.3 0 004.8-1.8c.5-.7.8-1.6.7-2.5zM237 162.3a4.3 4.3 0 01-4.7 2.3 4.3 4.3 0 01-3.4-4c0-.6 0-1.2.3-1.7a4.3 4.3 0 014-2.8 4.3 4.3 0 014 2.8l-2.7 2.2 3-.7c0 .7-.2 1.3-.5 2zM234.9 154a4.3 4.3 0 01-4.5-3.6 4.3 4.3 0 013.1-4.8v1.8l1-2a4.3 4.3 0 014.5 4.2 4.3 4.3 0 01-4.1 4.4zM245.4 147.1a4.3 4.3 0 01-4.5-3.3 4.3 4.3 0 012.5-4.9 4.3 4.3 0 013.9.2l-.8 2 1.6-1.4a4.3 4.3 0 01-2.8 7.4z" fill="#53ACFF"></path><path opacity="0.1" d="M244.1 134.5l-3 .5c-1 0-2-.2-2.7-1l-.8-1.4a3 3 0 00-1-1 4.3 4.3 0 002.4 6 4.3 4.3 0 005.6-3.1h-.5zM245.4 147.1a4.3 4.3 0 01-3.8-1.9 4.3 4.3 0 01-.3-4.2c.3.2.6.5.8.9l.9 1.4c.7.8 1.8 1 2.8 1 1 0 2-.4 3.1-.5h.5a4.3 4.3 0 01-4 3.3zM234.9 154a4.3 4.3 0 01-4.5-3.9c0-.7 0-1.4.3-2.1.4.2.7.5 1 .9.2.5.6 1 .9 1.4.7.8 2 1.1 3 1 1.2 0 2.2-.2 3.2-.3a4.3 4.3 0 01-4 3zM237 162.3a4.3 4.3 0 01-4.7 2.3 4.3 4.3 0 01-3.4-4c0-.6 0-1.2.3-1.7l.9.8 1.2 1.5c.8.9 2.3 1.2 3.5 1.3.8 0 1.5 0 2.2-.2z" fill="#000"></path><path d="M19 145.5c1-1.6 0-3.7-1.3-5.2-1.2-1.5-2.6-3-2.6-5 0-2.7 3-4.3 5.3-5.8a26 26 0 004.8-3.8 7 7 0 001.5-2c.5-1 .4-2.3.4-3.5 0-3.9-.3-7.8-.6-11.7" stroke="#EEF7FF" stroke-width="4" stroke-miterlimit="10"></path><path d="M31 108.3a4.3 4.3 0 00-2.2-3.5l-1 1.9.1-2.3a4.3 4.3 0 00-4.8 1.7 4.3 4.3 0 002.4 6.5 4.3 4.3 0 004.8-1.7c.5-.8.7-1.7.7-2.6zM23.3 137.3a4.3 4.3 0 01-4.7 2.2 4.3 4.3 0 01-3.4-4 4.2 4.2 0 011.8-3.7 4.3 4.3 0 016.5 2l-2.7 2.2 3-.7c0 .7-.2 1.4-.5 2zM21.2 129a4.3 4.3 0 01-4.5-3.6 4.3 4.3 0 013.1-4.8v1.7l1-1.9a4.4 4.4 0 014 2.5 4.3 4.3 0 01-2 5.7l-1.6.4zM31.6 122a4.3 4.3 0 01-4.4-5.2 4.3 4.3 0 014.4-3.3c.7 0 1.4.2 2 .6l-.8 2 1.5-1.5a4.3 4.3 0 01-2.7 7.5z" fill="#53ACFF"></path><path opacity="0.1" d="M30.4 109.4c-1 .1-2 .5-3 .5s-2-.2-2.7-1l-.8-1.3a3 3 0 00-1-1 4.3 4.3 0 002.3 6 4.3 4.3 0 005.7-3.2h-.5zM31.6 122a4.3 4.3 0 01-3.8-1.8 4.3 4.3 0 01-.3-4.3c.4.3.7.6.9 1 .3.4.5.9.9 1.3.6.8 1.8 1 2.8 1 1 0 2-.3 3.1-.4h.4a4.3 4.3 0 01-4 3.3zM21.2 129a4.3 4.3 0 01-3.8-1.9 4.3 4.3 0 01-.4-4.2l1 1 .9 1.4c.7.8 2 1 3 1 1.1 0 2.1-.3 3.2-.3a4.3 4.3 0 01-4 3zM23.3 137.3a4.3 4.3 0 01-4.7 2.2 4.3 4.3 0 01-3.4-4c0-.5 0-1.1.2-1.7.4.2.7.5 1 .9l1.1 1.5c1 .8 2.3 1.2 3.6 1.2l2.2-.1z" fill="#000"></path><path d="M161.3 116.9c-.9-1.7.2-3.8 1.4-5.3s2.6-3 2.6-5c0-2.7-3-4.3-5.3-5.8-1.8-1-3.4-2.3-4.8-3.8a6.9 6.9 0 01-1.5-2 8 8 0 01-.4-3.4c0-4 .3-7.8.5-11.8" stroke="#EEF7FF" stroke-width="4" stroke-miterlimit="10"></path><path d="M149.4 79.6a4.3 4.3 0 012.1-3.5l1 2v-2.4c.4-.1 1-.2 1.4-.1a4.3 4.3 0 013.9 2.8 4.3 4.3 0 01-1.2 4.6 4.3 4.3 0 01-7.2-3.4zM157 108.6a4.3 4.3 0 005 2.2 4.3 4.3 0 003.2-4.4 4.3 4.3 0 00-3.6-4 4.3 4.3 0 00-4.7 2.8l2.7 2.2-3-.7c0 .7.2 1.3.5 2zM159.2 100.3a4.3 4.3 0 004.5-3.6 4.3 4.3 0 00-3.1-4.8v1.8l-1-2a4.3 4.3 0 00-4.5 4.1 4.3 4.3 0 004.1 4.5zM148.7 93.4a4.3 4.3 0 004.5-3.3 4.3 4.3 0 00-2.5-5 4.3 4.3 0 00-3.9.3l.8 2L146 86a4.3 4.3 0 002.7 7.4z" fill="#53ACFF"></path><path opacity="0.1" d="M150 80.8c1 0 2 .4 3 .5 1 0 2-.2 2.7-1l.8-1.4a3 3 0 011-1 4.3 4.3 0 01-4.2 6.2 4.3 4.3 0 01-3.8-3.4h.5zM148.7 93.4a4.3 4.3 0 003.8-2 4.3 4.3 0 00.3-4.1l-.8.8-.9 1.5c-.6.7-1.8 1-2.8 1l-3.1-.5h-.5a4.3 4.3 0 004 3.3zM159.2 100.3a4.3 4.3 0 003.8-1.8 4.3 4.3 0 00.4-4.2c-.4.2-.7.5-1 .9-.2.5-.6 1-.9 1.4-.7.8-2 1-3 1-1.2 0-2.2-.2-3.2-.3a4.3 4.3 0 004 3zM157 108.6a4.3 4.3 0 005.7 2 4.3 4.3 0 002.2-5.4l-.9.8-1.2 1.5c-.8.9-2.3 1.2-3.5 1.3-.8 0-1.5 0-2.2-.2z" fill="#000"></path><path d="M273.2 117.7c19.3 0 35-15.6 35-34.8a34.9 34.9 0 00-35-34.8c-19.4 0-35 15.6-35 34.8a34.9 34.9 0 0035 34.8z" fill="#EEF7FF"></path><path d="M288.2 91.9c-1.2-1.3-4.1-3-5.6-3.8-1.7-.8-2.3-.8-3.5.1-1 .7-1.6 1.4-2.7 1.1-1.2-.2-3.4-2-5.6-4a16 16 0 01-4.1-5.6c-.2-1.1.4-1.8 1.1-2.7.9-1.2 1-1.8.1-3.5-.7-1.4-2.5-4.3-3.7-5.6-1.3-1.2-1.5-1-2.2-.7l-2 1a6 6 0 00-2.4 2.6c-.5 1-1 2.9 1.8 7.8a43.8 43.8 0 0018 18c5 2.8 7 2.2 8 1.7 1-.4 1.7-1.1 2.5-2.3.4-.6.8-1.3 1-2 .3-.7.6-1-.7-2.1z" fill="#53ACFF"></path><path opacity="0.1" d="M273.2 48.1a35.2 35.2 0 00-32.4 21.5 34.6 34.6 0 0025.5 47.4 35.3 35.3 0 0036-14.8 34.6 34.6 0 00-29.1-54.1zm0 65a30.5 30.5 0 01-28-18.7 30 30 0 0122-41.1 30.6 30.6 0 0131.2 12.8 30 30 0 01-25.2 47z" fill="#000"></path><path d="M192.7 170.5c19.4 0 35-15.6 35-34.8a34.9 34.9 0 00-35-34.8c-19.3 0-35 15.6-35 34.8a34.9 34.9 0 0035 34.8z" fill="#EEF7FF"></path><path d="M212.6 125.2l-10.4 10.6a.2.2 0 000 .2l7.3 7.8a1.3 1.3 0 01-.9 2.2c-.3 0-.6-.1-.9-.4l-7.3-7.7a.2.2 0 00-.3 0l-1.8 1.8a7.8 7.8 0 01-8.7 1.7 8 8 0 01-2.6-1.8l-1.7-1.7a.2.2 0 00-.3 0l-7.3 7.7a1.3 1.3 0 01-1.8 0 1.2 1.2 0 010-1.8l7.4-7.7a.2.2 0 000-.3l-10.5-10.6a.2.2 0 00-.2 0 .2.2 0 00-.1.1v21.2a3 3 0 003 3.1H210a3.1 3.1 0 003-3v-21.3a.2.2 0 00-.2-.2v.1z" fill="#53ACFF"></path><path d="M192.7 139.5a5.3 5.3 0 003.9-1.6l15.2-15.4a3 3 0 00-1.9-.7h-34.3a3 3 0 00-2 .7l15.3 15.4a5.3 5.3 0 003.8 1.6z" fill="#53ACFF"></path><path opacity="0.1" d="M192.3 101a35.2 35.2 0 00-32.4 21.4 34.6 34.6 0 0025.5 47.5 35.3 35.3 0 0036-14.8 34.6 34.6 0 00-29.1-54.2zm0 64.9a30.5 30.5 0 01-28-18.6 30 30 0 0122-41.2 30.6 30.6 0 0131.2 12.9 30 30 0 01-25.2 46.9z" fill="#000"></path><path d="M109.6 144.5c19.4 0 35-15.5 35-34.8a34.9 34.9 0 00-35-34.7c-19.3 0-35 15.5-35 34.7a34.9 34.9 0 0035 34.8z" fill="#EEF7FF"></path><path d="M109.6 93.1l-14 32 1.4 1.3 12.6-5.6 12.7 5.6 1.3-1.3-14-32z" fill="#53ACFF"></path><path opacity="0.1" d="M109.6 75a35.2 35.2 0 00-32.4 21.4 34.6 34.6 0 0025.6 47.5 35.3 35.3 0 0036-14.8 34.6 34.6 0 00-29.2-54.2zm0 64.9a30.5 30.5 0 01-28-18.6A30 30 0 01103.7 80 30.6 30.6 0 01134.9 93a30 30 0 01-3.8 38 30.5 30.5 0 01-21.5 8.9z" fill="#000"></path><path d="M276.4 153.5l-1-2.3c-.2-.7-.6-1.4-1.2-2l-.7-.5a7.4 7.4 0 00-2.4-.2 7 7 0 01-.5-.3 5 5 0 003.7-4.6v-.2a5 5 0 00-5-5 5 5 0 00-2.6.8 4.7 4.7 0 00-5.2 2.5 5.8 5.8 0 00-1.8 4.3v.2c0 2.7 1.8 4.9 4 5l-.6.5c-.7.7-.8 1.7-.8 2.6l-.1.7-1.2.5a.2.2 0 00-.1.1v.2l1.2.8v.5c-.2.1-.3.3-.4.6-.1.3-.2.7-.1 1v1c0 .8.1 1.5.3 2.2.2.5.8 1.5 1.3 1.5-.5 2-.6 6-.6 6l.4.1c.2 2 1 7.3 2.5 9.7l.6 2.3s.4 5.1 1 6.7c.4 1.3.8 4.5.9 5.4l-.3.1-.1.3c-.3.8-2 2-2 2l-1.6 1c-.6.6-.6 1 2 .7 4.8-.5 5.6-2 5.6-2l-.2-.7-.6-1.4c-.1-.1-.2 0-.3.2-.3-2.2-.4-4.5-.3-6.7 0 0 .1-2.4-.5-4-.2-1-.2-1.8 0-2.7.2-1-1.1-6.5-1.1-6.5l-.8-4 .2.5V170.8c.6 2.2 2.1 8.4 2.1 9.3 0 1.1 1.4 3.9 1.4 3.9s.5 4.5 1.5 6.3c.7 1.4.7 3.4.7 4.3 0 0-.2 1.1-.4 1.4-.3.3-.4.6-.6 1 0 0-.4.8-.1 1 1 .4 2.2.5 3.3.4 0 0 .5-.7.5-1v-.5a66.3 66.3 0 00-.7-3.4l-.1-3.8c.3-2.7 0-5.3-1-7.8 0 0-.7-2.5-.5-3.2.1-.7-.3-8-.3-8v-.1-1.6c.1-1.6-.4-5-.5-5.2-.2-.4-.2-.8-.2-1.2l.2-2.1a39.6 39.6 0 004.4-.5l.1-.3c.2-2.1-.6-4.1-1.4-6zm-2.8 4.4l.5-2.6.7 2.2-1.2.4z" fill="url(#paint0_linear)"></path><path d="M262.9 169.1s.8 7.4 2.6 10.3l.6 2.3s.4 5 1 6.6a36 36 0 01.9 5.6s2 2.2 2.6.4c-.4-2.3-.6-4.7-.4-7.1 0 0 .1-2.3-.5-4-.2-.8-.2-1.7 0-2.6.2-1-1.2-6.4-1.2-6.4l-1-5.3-4.6.2z" fill="#BE6F72"></path><path d="M271.6 195.7s-.8 1.5-5.7 2c-2.5.3-2.5-.1-2-.6.6-.4 1-.8 1.6-1 0 0 1.8-1.3 2-2 .4-.9 1.3-.2 1.3-.2 1.4 2 1.7-.6 2-.3l.6 1.5.2.6z" fill="#FF6F61"></path><path opacity="0.1" d="M271.6 195.7s-.8 1.5-5.7 2c-2.5.3-2.5-.1-2-.6.5.2 1.3.3 2.9-.3 2.3-1 4-1.5 4.6-1.7l.2.6zM270.2 187.2s.1-2.3-.5-4c-.2-.8-.2-1.7 0-2.6.2-1-1.2-6.4-1.2-6.4l-1-5.3h-1l1 5.3s1.5 5.3 1.2 6.4c-.2.9-.2 1.8 0 2.6.7 1.7.5 4 .5 4-.1 2.4 0 4.8.5 7.1l-.4.6c.5.2 1 .2 1.3-.6-.4-2.3-.6-4.7-.4-7.1z" fill="#000"></path><path d="M269.3 139.1a5 5 0 00-2.6.8 4.7 4.7 0 00-5.3 2.4 5.7 5.7 0 00-1.7 4.3c0 2.9 2 5.2 4.4 5.2 1.7 0 3.3-1.2 4-3l1.2.2a5 5 0 005-5 5 5 0 00-5-4.9z" fill="#EEF7FF"></path><path d="M273.4 169.8l.4 1.1s.4 7.3.3 8c-.2.6.5 3 .5 3 .9 2.5 1.2 5.1 1 7.7l.1 3.9s.6 1.5.3 1.7c-.3.3-2.4-.2-2.4-.2s.3-2.9-.7-4.7c-1-1.7-1.5-6.2-1.5-6.2s-1.4-2.8-1.4-3.9c0-1-2.2-10-2.2-10l5.6-.4z" fill="#BE6F72"></path><path d="M262.6 169.7s.2-5 .7-6.4c.3-.7.5-1.5.6-2.2 0 0 8.4 1.5 9 1l.3 2c.2.1.7 3.5.6 5.2-.2 1.6 0 1.6 0 1.6s-5.7.8-5.8 0c-.1-.8-.5-.8-.5-.8s-5.1-.2-4.9-.4z" fill="#EEF7FF"></path><g opacity="0.1" fill="#000"><path opacity="0.1" d="M267.2 169.7s-3.5-.1-4.6-.3v.3c-.2.3 4.9.4 4.9.4h.1c-.1-.4-.4-.4-.4-.4zM273.2 164l-.2-2-.3.1c0 .6.2 1.5.3 1.6 0 0 .7 3.5.5 5.2-.1 1.6 0 1.6 0 1.6s-4.5.7-5.5.2v.2c.1.8 5.8 0 5.8 0s-.2 0 0-1.6c.1-1.7-.4-5-.6-5.2z"></path></g><path d="M268.7 147.7l.5.7.5.2-1 .5-1.3 1c-.5.4-1 .6-1.6.7a2 2 0 00.2-2l-.3-.6c0-.4.4-.7.7-1l.8-.5c.2-.1.5-.4.8-.4.3 0 .3.3.4.5l.3 1z" fill="#BE6F72"></path><path opacity="0.1" d="M268.7 147.7l.5.7.5.2-1 .5-1.3 1c-.5.4-1 .6-1.6.7a2 2 0 00.2-2l-.3-.6c0-.4.4-.7.7-1l.8-.5c.2-.1.5-.4.8-.4.3 0 .3.3.4.5l.3 1z" fill="#000"></path><path d="M272 155.8c1.7 0 3-1.4 3-3.1 0-1.8-1.3-3.2-3-3.2a3.2 3.2 0 00-3.2 3.2c0 1.7 1.4 3.1 3.1 3.1z" fill="#BE6F72"></path><path d="M276.4 197.3c0 .3-.6 1-.6 1-1 .1-2.2 0-3.3-.4-.2-.2.2-1 .2-1l.5-1c.3-.2.5-1.3.5-1.3.8-1.4 2.3.6 2.3.6a94.8 94.8 0 00.4 2.1z" fill="#FF6F61"></path><path opacity="0.1" d="M276.4 197.3c0 .3-.6 1-.6 1-1 .1-2.2 0-3.3-.4-.2-.2.2-1 .2-1 1 .4 2 .6 3 .5l.6-.6.1.5z" fill="#000"></path><path d="M265.6 149.2a3 3 0 003-3.1 3 3 0 00-3-3 3 3 0 00-3.1 3 3 3 0 003 3zM263 152.2c-.6.7-.7 1.7-.8 2.6v1.4l-.1 1.1v.7l.1.8v2c0 .4 0 .9.2 1.2a.8.8 0 001 .4c.3-.2.5-.4.5-.7.4-.8.6-1.6.7-2.5v-1l.2-.8.4-4c0-.3.3-1.8-.2-2l-1 .3-1 .5z" fill="#BE6F72"></path><path opacity="0.1" d="M263 152.2c-.6.7-.7 1.7-.8 2.6v1.4l-.1 1.1v.7l.1.8v2c0 .4 0 .9.2 1.2a.8.8 0 001 .4c.3-.2.5-.4.5-.7.4-.8.6-1.6.7-2.5v-1l.2-.8.4-4c0-.3.3-1.8-.2-2l-1 .3-1 .5z" fill="#000"></path><path d="M269.5 148s-2.3 1.9-3.7 2.3l-1 1.1c-.1.2-.4 2.7-.7 3.2-.2.6-1 1.8 0 3 0 0 .3 1.3.2 1.7-.2.4-.7 2-.2 2 .4 0 1.8 1 3 .7a24 24 0 016 1s.7-7 1.2-8.2l-1.2-.4s-3.4-2-1.4-5.2c0 0-2-.4-2.2-1.1z" fill="#FF6F61"></path><path d="M261 156.3l2.8 2a.2.2 0 00.3 0l.7-.6a.2.2 0 000-.2l-2.2-2h-.2l-1.4.4v.1l-.1.1v.2z" fill="#EEF7FF"></path><path d="M262 162.3c-.3-.7-.4-1.4-.4-2v-1-1.2a1.8 1.8 0 011.3-1c.5-.1 1-.2 1.6-.1h.2v.2a1.3 1.3 0 01.2 1l-.4.4-1.2.7-.1.2v.2c0 .2 0 .4.2.6l.1.2.2.2c.2 0 .5.2.5.4 0 .7-.5 1.5-.6 2.2-.4 1.3-1.5-.4-1.7-1z" fill="#BE6F72"></path><g opacity="0.1" fill="#000"><path opacity="0.1" d="M266.3 162h.9-.9zM273.6 154.6c-.5 1-1.2 7-1.4 8.2l.8.3s.8-7 1.3-8.3l-.7-.2z"></path></g><path d="M272 152.8a1 1 0 00.5.6l.8.8.8 1.6.6 2.2c-1.7.8-3.7.8-5.6 1.3-.8.2-1.5.6-2 1.2a2.9 2.9 0 00-.8 2.3v.1a.3.3 0 00.2.1c.5 0 1-.1 1.3-.4a6 6 0 001-1l.7-.5c1-.3 2.1-.3 3.2-.3a40.2 40.2 0 005-.6s.1-.1 0-.2c.2-2-.5-4-1.3-6a106 106 0 00-2.2-4.2 2 2 0 00-.7-.6 6.7 6.7 0 00-2.5-.2l-.1.8c0 1 .4 1.8.8 2.7l.3.3z" fill="#BE6F72"></path><path opacity="0.1" d="M266.4 154.5c-.2.4-.3.9-.3 1.3v.6a1.8 1.8 0 001.2 1" stroke="#000" stroke-miterlimit="10"></path><path d="M268.2 143l-.5.2c-.5-.7-1.5-1.2-2.8-1.2-1.7 0-3 .9-3 2 0 1 1.3 1.8 3 1.8.6 0 1.2-.1 1.8-.4a1.6 1.6 0 001.4 1 1.7 1.7 0 001.5-.8 1.6 1.6 0 00-1.4-2.5z" fill="#EEF7FF"></path><path opacity="0.1" d="M268.3 146a1.7 1.7 0 01-1.4-1c-.6.3-1.2.4-1.9.4-1.6 0-3-.8-3-1.9v-.2l-.1.6c0 1 1.3 2 3 2 .6 0 1.2-.2 1.8-.5a1.7 1.7 0 003.1-.4 1.6 1.6 0 01-1.5 1z" fill="#000"></path><path opacity="0.1" d="M261.5 143.2a4.7 4.7 0 015.2-2.5 5 5 0 017.5 3.7v-.4a4.9 4.9 0 00-5-4.9 5 5 0 00-2.5.8 4.7 4.7 0 00-5.3 2.4 5.7 5.7 0 00-1.7 4.3v.4c0-1.5.7-2.9 1.8-3.8z" fill="#000"></path><path d="M293 144.2c1-1.7 0-3.8-1.3-5.3-1.2-1.5-2.6-3-2.6-5 0-2.7 3-4.3 5.3-5.7 1.8-1.1 3.4-2.4 4.8-3.9a7 7 0 001.5-2 8 8 0 00.4-3.4c0-4-.3-7.8-.6-11.8" stroke="#EEF7FF" stroke-width="4" stroke-miterlimit="10"></path><path d="M305 107a4.3 4.3 0 00-2.2-3.6l-1 2 .1-2.4c-.4-.1-1-.2-1.4-.1a4.3 4.3 0 00-3.9 2.8 4.3 4.3 0 003.4 5.7 4.3 4.3 0 004.4-2c.4-.8.6-1.6.6-2.5zM297.3 136a4.3 4.3 0 01-5 2.1 4.3 4.3 0 01-3.1-4.4 4.3 4.3 0 013.6-4 4.3 4.3 0 014.7 2.8l-2.7 2.2 3-.7c0 .6-.2 1.3-.5 2zM295.2 127.6a4.3 4.3 0 01-4.5-3.6 4.3 4.3 0 013.1-4.8v1.8l1-2a4.3 4.3 0 014.5 4.1 4.3 4.3 0 01-4.1 4.5zM305.6 120.7a4.4 4.4 0 01-3.5-1.5 4.3 4.3 0 013.6-7c.6 0 1.3.2 1.9.5l-.8 2 1.6-1.4a4.3 4.3 0 011.3 4.1 4.3 4.3 0 01-4 3.3z" fill="#53ACFF"></path><path opacity="0.1" d="M304.4 108l-3 .6c-1 0-2-.2-2.7-1l-.8-1.4a3 3 0 00-1-1 4.3 4.3 0 002.3 6 4.4 4.4 0 005-1.5c.3-.5.6-1 .7-1.7h-.5zM305.6 120.7a4.3 4.3 0 01-4.5-4c0-.7.1-1.4.4-2.1l1 .8.8 1.5c.6.7 1.8 1 2.8 1 1 0 2-.4 3.1-.5h.4a4.3 4.3 0 01-4 3.3zM295.2 127.6a4.3 4.3 0 01-3.8-1.9 4.3 4.3 0 01-.4-4.1l1 .8.9 1.5c.7.8 2 1 3 1 1.1 0 2.1-.2 3.2-.3a4.3 4.3 0 01-4 3zM297.3 136a4.3 4.3 0 01-5.6 1.8 4.3 4.3 0 01-2.3-5.3l1 .8 1.1 1.5c1 .9 2.4 1.2 3.6 1.3.8 0 1.5 0 2.2-.2z" fill="#000"></path><path d="M348.8 197c.9-1.6-.2-3.7-1.4-5.2s-2.6-3-2.6-5c0-2.7 3-4.3 5.3-5.8 1.8-1 3.4-2.3 4.8-3.8a7 7 0 001.5-2 8 8 0 00.4-3.4c0-4-.3-7.9-.5-11.8" stroke="#EEF7FF" stroke-width="4" stroke-miterlimit="10"></path><path d="M360.7 159.8a4.3 4.3 0 00-2.1-3.5l-1 2v-2.4a4.3 4.3 0 10.7 8 4.3 4.3 0 002.4-4zM353 188.8a4.3 4.3 0 11-7-4.8 4.3 4.3 0 017.2 1.4l-2.7 2.2 3-.7c0 .6-.2 1.3-.5 2zM350.9 180.5a4.3 4.3 0 01-4.5-3.6 4.3 4.3 0 013.1-4.8v1.8l1-2a4.3 4.3 0 014.5 4.1 4.2 4.2 0 01-2.5 4.1c-.5.2-1 .4-1.6.4zM361.4 173.6a4.3 4.3 0 01-4.5-3.3 4.3 4.3 0 012.5-5 4.3 4.3 0 013.9.3l-.8 2 1.6-1.4a4.2 4.2 0 01-2.7 7.4z" fill="#53ACFF"></path><path opacity="0.1" d="M360.1 161c-1 0-2 .4-3 .4-1 .1-2-.1-2.7-.9l-.8-1.4a3 3 0 00-1-1 4.3 4.3 0 002.4 6 4.4 4.4 0 004.9-1.5c.3-.5.6-1 .7-1.7h-.5zM361.4 173.6a4.3 4.3 0 01-3.8-2 4.3 4.3 0 01-.3-4.1l.8.8.9 1.5c.6.7 1.8 1 2.8 1l3.1-.5h.5a4.3 4.3 0 01-4 3.3zM350.9 180.5a4.3 4.3 0 01-4.5-3.9c0-.7 0-1.5.3-2.1l1 .8.9 1.5c.7.8 2 1 3 1 1.2 0 2.2-.2 3.2-.3a4.3 4.3 0 01-4 3zM353 188.8a4.3 4.3 0 01-5.5 2 4.3 4.3 0 01-2.3-5.5l.9.9 1.2 1.5c.8.9 2.3 1.2 3.5 1.3.8 0 1.5 0 2.2-.2z" fill="#000"></path><path d="M167.5 148a3.4 3.4 0 00-1.4-2.8 4 4 0 00-3.4-3.9 4 4 0 00-3.1-3H159a4 4 0 00-3.8 3.3c-1.3-.3-2.4 0-2.6.8v.6c.2.6 1 1.2 1.8 1.5H154.7a3 3 0 001.4 4.1 1 1 0 00-.3.4l-.5 1.3-.2 1c-.2.7-.8 1.3-.8 2 0 .3 0 .7-.2 1h-.2l-.4.4c0 .2-.2.3-.3.4-.2.2-.5.2-.6.4-.1.2.2.5.1.8 0 .2-.3.3-.4.4l-.4.7a2.3 2.3 0 01-1.9-.5l.2.7a3 3 0 00-1-.5c-.4-.2-.8-.4-1.1-.8h.6l-2.6-4-.8-.1.7 1.3h-.1l-.1.3v.4l.1 1 .2 1 .1.2h-.8a6.7 6.7 0 00-1.9-.3 1 1 0 00-.3.3c-.5.5-.9 1-1.2 1.6-1.4 2.4-3.2 4.5-5 6.7l-3.5 1.4-2.6 1a4 4 0 01-1.6.3l-.7.1-.2.4h-.3a3 3 0 00-.6-1.1.4.4 0 00-.3.2l-.1.3c-.2.3-.4.3-.6.5l-.5.6-.8.4c-.5 0-1 .3-1.4.5l-.5.2a2 2 0 01-.6 0h-1.4a1 1 0 00-.4 0 .7.7 0 00-.4.7 1 1 0 00.4.7l.8.4c1.2.5 2.4.8 3.7 1v.4c.8.4 1.8.6 2.8.6h.2l.1-.3.6-2.7h.5c.5-.2 1 .1 1.4.2.6 0 1.2-.3 1.7-.5l.3-.1-.6.5-.7.5a5 5 0 01-.6.5l-.5.1-.7.4-.4.4a.7.7 0 000 .7.7.7 0 00.4.3h.5a135.6 135.6 0 003.2-.3l.5-.2.8-.1h.3c.1 0 .2.3.4.3h.4c.5-.2 1-.2 1.6-.2.3 0 .5 0 .7-.3l-.2-.9-.1-.6c0-.4-.2-1-.4-1.3l-.3-.7 3-1.5c.5-.4 1.1-.6 1.7-.8.8-.1 1.5 0 2.2.2 1.7.5 3.3 1 5 1.8l2.3.8c.2.4.5.6.8.8.6.4 1.2.5 1.8.5l2.6.1c.6 0 1.3 0 1.9-.3l.4-.3a1.6 1.6 0 001.2-.4c.5-.4.8-1 1-1.5.2-.8 0-1.8.5-2.4l.4-.5c.2-.2.3-.5.3-.8l.2-.8.2-.7a19.4 19.4 0 001-3.1v-1l.4-1.7c.4-1.2.7-2.5.7-3.8v-.1a2.6 2.6 0 002.3-2.6c0-.4 0-.8-.2-1.2.3-.5.5-1 .5-1.7zM154.9 163l.2.4-.6-.6.2.1.2.1zm-1-.7l-3.8-2.8 2 1c.8.5 1.5 1 2.3 1.3a2 2 0 01-.5.5zm.6-2.6v.4l-.3-.1.3-.3zm-10.7 2.8c.5-.5 1-1.1 1.3-1.8.5.8 1.3 1.4 2 2.1-1.2 0-2.2-.2-3.3-.3z" fill="url(#paint1_linear)"></path><path d="M145.5 152.5l.8.2 2.6 3.8-1.2.1-2.2-4.1z" fill="#50DDC2"></path><path d="M127 168l.8 2 2.5-.7a8 8 0 00-.5-.7l-.7-.6a2 2 0 00-1 0H127z" fill="#FBBEBE"></path><path d="M129 169a1.6 1.6 0 01-.8-1c-.1-.4-.4-.8-.7-1.1h-.1l-.2.2-.1.3-.6.5-.5.6-.8.4c-.5 0-1 .2-1.5.5l-.5.2a2 2 0 01-.6 0l-1.3-.1a1 1 0 00-.4 0c-.1 0-.3.1-.3.3-.1.1-.2.3-.1.4a1 1 0 00.4.7l.8.4c1.2.5 2.4.8 3.7 1v.3a6.4 6.4 0 003 .7l.2-.3.6-3v-.8l-.1-.2" fill="#50DDC2"></path><path d="M155.5 163.9c-4 .2-8.1-1-12.2-1.1h-1.5l-1.5.7c-2.2 1-4.5 1.8-6.8 2.7l-2.6 1a4 4 0 01-1.6.3l-.7.1c-.4.7-.2 1.6 0 2.3.2.2.3.5.6.5l.5-.1c.4-.2.9.1 1.4.2.6 0 1.2-.3 1.7-.5 1-.3 2-.3 3-.5 1.7-.3 3.2-1 4.6-2 .6-.3 1.2-.6 1.8-.7.7-.1 1.5 0 2.2.2a50.1 50.1 0 017.6 2.7c2 .5 4 .3 5.8-.4.7-.2 1.4-.7 1.4-1.4 0-.4-.2-.8-.4-1l-.5-.7c-.7-1-1.5-2.4-2.8-2.3z" fill="#50DDC2"></path><path opacity="0.1" d="M155.5 163.9c-4 .2-8.1-1-12.2-1.1h-1.5l-1.5.7c-2.2 1-4.5 1.8-6.8 2.7l-2.6 1a4 4 0 01-1.6.3l-.7.1c-.4.7-.2 1.6 0 2.3.2.2.3.5.6.5l.5-.1c.4-.2.9.1 1.4.2.6 0 1.2-.3 1.7-.5 1-.3 2-.3 3-.5 1.7-.3 3.2-1 4.6-2 .6-.3 1.2-.6 1.8-.7.7-.1 1.5 0 2.2.2a50.1 50.1 0 017.6 2.7c2 .5 4 .3 5.8-.4.7-.2 1.4-.7 1.4-1.4 0-.4-.2-.8-.4-1l-.5-.7c-.7-1-1.5-2.4-2.8-2.3z" fill="#000"></path><path d="M134.9 168.2l1.9.6c.3-.6 1-1 1.2-1.7v-.1c-.5-.3-1-.5-1.6-.5-.4 0-.6.4-.8.7 0 .2-.6 1-.7 1z" fill="#FBBEBE"></path><path d="M135.8 167.8a1.4 1.4 0 01-1-.6c0-.2-.2-.4-.4-.4l-.2.4-.6 1.8c-.2.6-.6 1-1 1.5l-.8.4a5 5 0 01-.6.5l-.5.2c-.3 0-.5.2-.7.3l-.5.5a.6.6 0 000 .6.7.7 0 00.4.3h.6l2.3-.2.9-.1.5-.2h1.1l.4.2h.4c.5-.2 1.1-.2 1.7-.2.2 0 .5 0 .6-.3.1-.3 0-.6-.2-.9v-.5c-.1-.5-.2-1-.5-1.4-.2-.3-.4-.7-.3-1l.1-.5c0-.6-1.4-.3-1.7-.4z" fill="#50DDC2"></path><path d="M149.4 157.3c-.7-.3-1.3-.8-1.6-1.6l-.2-.4a3.6 3.6 0 00-1.2-1.5h-.1a.4.4 0 00-.3.3v.4l.1 1 .2 1 .2.3c0 .2.2.3.3.4a23 23 0 00.9.7l.6.2c.9.1 1.7.4 2.3.9v-.7l-.1-.5-1.1-.5z" fill="#FBBEBE"></path><path opacity="0.1" d="M149.4 157.3c-.7-.3-1.3-.8-1.6-1.6l-.2-.4a3.6 3.6 0 00-1.2-1.5h-.1a.4.4 0 00-.3.3v.4l.1 1 .2 1 .2.3c0 .2.2.3.3.4a23 23 0 00.9.7l.6.2c.9.1 1.7.4 2.3.9v-.7l-.1-.5-1.1-.5z" fill="#000"></path><path d="M157.7 150.5a1 1 0 100-2 1 1 0 000 2z" fill="#50DDC2"></path><path d="M157.1 148.9a1 1 0 00-.8.1 1 1 0 00-.2.4c-.3.3-.4.7-.6 1.2 0 .3 0 .7-.2 1-.2.7-.7 1.3-.8 2 0 .3 0 .7-.2.9h-.1l-.4.5-.3.4c-.2.1-.5.1-.6.3-.1.2.1.5 0 .8 0 .2-.2.3-.4.4l-.4.7a2.3 2.3 0 01-1.9-.5 6 6 0 01.3 2.6l-.1.3c.7 0 1.5.2 2.3.4h1l.5-.4c.4-.4.8-.9 1-1.5v-1c0-.4 0-.8.2-1.2l.5-2.5c0-.5.5-1 .7-1.4.5-.9 1-1.8 1-2.8 0-.3-.2-.7-.5-.7z" fill="#50DDC2"></path><path opacity="0.1" d="M157.1 148.9a1 1 0 00-.8.1 1 1 0 00-.2.4c-.3.3-.4.7-.6 1.2 0 .3 0 .7-.2 1-.2.7-.7 1.3-.8 2 0 .3 0 .7-.2.9h-.1l-.4.5-.3.4c-.2.1-.5.1-.6.3-.1.2.1.5 0 .8 0 .2-.2.3-.4.4l-.4.7a2.3 2.3 0 01-1.9-.5 6 6 0 01.3 2.6l-.1.3c.7 0 1.5.2 2.3.4h1l.5-.4c.4-.4.8-.9 1-1.5v-1c0-.4 0-.8.2-1.2l.5-2.5c0-.5.5-1 .7-1.4.5-.9 1-1.8 1-2.8 0-.3-.2-.7-.5-.7z" fill="#000"></path><path d="M156.2 164.7c-.9-.4-1.5-1.1-2.2-1.8-1.3-1.2-2.9-2-4.3-3.2-.9-.8-1.7-1.7-2.7-2.3a6.9 6.9 0 00-3.3-1l-.4.2c-.4.5-.8 1-1.1 1.7-1.8 3-4.3 5.4-6.3 8.1l-.1.2v.3l.4.9c.3.4.7 1 1.2.9l.6-.4 1.8-1.8 2-1.9a15 15 0 003.1-3.6c.6 1 1.6 1.7 2.4 2.6l.7 1.1 1.3 1.8 2.2 2.8 1 1a4 4 0 002 .6h2.5c.6 0 1.3 0 1.9-.3a1.7 1.7 0 001-1.5c0-.4-.1-.7-.3-1a7.8 7.8 0 00-3.4-3.4z" fill="#50DDC2"></path><path d="M158.3 151a.8.8 0 100-1.6.8.8 0 000 1.5z" fill="#E8E8F0"></path><path d="M158.2 149.6c.2.3.2.7 0 1.1 0 .4-.2.7-.4 1l-.7 1c1.2 0 2.4-.5 3.4-1 .8-.5 1.7-1 2.1-1.9a1 1 0 01-.8-.1l-.6-.6-.6-.6c0-.2-.2-.4-.3-.5l-.2-.8-.7.7-1.4.7-.4.4.6.6z" fill="#FBBEBE"></path><path opacity="0.1" d="M158.2 149.6c.2.3.2.7 0 1.1 0 .4-.2.7-.4 1l-.7 1c1.2 0 2.4-.5 3.4-1 .8-.5 1.7-1 2.1-1.9a1 1 0 01-.8-.1l-.6-.6-.6-.6c0-.2-.2-.4-.3-.5l-.2-.8-.7.7-1.4.7-.4.4.6.6z" fill="#000"></path><path d="M158.2 149.7a1 1 0 000 1.2l.2.3a.2.2 0 00.1-.1l.8-.9c.2-.3.6-.5 1-.6.4 0 .9.1 1.3.4l.4.3.2.5a23.9 23.9 0 010 5.5l-.3 1.1v3.3c0 .4.2.7.3 1l.2 1 .2 1.6c.1.4.2 1-.1 1.3l-.5.5c-.5.7-.3 1.6-.5 2.4a3 3 0 01-1 1.4 1.6 1.6 0 01-1.2.5c-.7-.1-1-.8-1.2-1.4-.2-.6-.2-1.2-.6-1.7-.3-.4-.7-.8-1.2-1a2 2 0 01-.9-1.2v-.7a1.6 1.6 0 00-1-1.2c-.3-.2-.7-.2-.9-.5.5-.3.8-.7 1-1.2l.2-1.6v-1.7c.1-.8.2-1.6.5-2.3l.5-.9.5-1.3a60.1 60.1 0 001.2-3.2c.2-.3.4-.7.8-.8z" fill="#E8E8F0"></path><path d="M154.3 161h.5v-.6l.1-.4.3-.4c.5-.7.4-1.5.6-2.3.2-1 .5-2 1-3l.9-2 .2-.5v-.6l.1-1.7c0-.1-.2 0-.3-.2 0-.2-.2.4-.4.5l-.5.6-.5 1.6c-.1.5-.4 1-.8 1.3l-.6.5c-.5.6-.6 1.4-.6 2.2v5zM161 148.9a1.6 1.6 0 00-.8 1.1l-.5 1.4c-.5 1-2 1.3-2.4 2.3l-.1 1.1c-.1.8-.4 1.5-.4 2.3v1.8l.5 6a8 8 0 01-.1 2.6c.5 0 1 0 1.5-.3l1.4-.7 2.3-1.3.3-.4.2-.8.2-.6a18.3 18.3 0 001-3.1l.1-1c0-.6.2-1.1.3-1.6a12.7 12.7 0 00.7-4.4 3 3 0 00-.3-.6l-.5-1.3a6 6 0 00-2-2.1c-.5-.3-1-.6-1.4-.4z" fill="#50DDC2"></path><path d="M150.4 158.7l-1-.8-.3-.4c-.3-.4-.8-.6-1.2-.7a6 6 0 00-2.4 0 1 1 0 00-.6.6 1 1 0 00.5 1c.3.2.6.4 1 .4l.8.1c1.7.2 3.2 1.1 4.6 2l4 2v-1.2c0-.3 0-.8-.3-1l-1.2-.3a19.7 19.7 0 01-3.9-1.7zM157.7 149.3a3 3 0 100-6 3 3 0 000 6z" fill="#FBBEBE"></path><path d="M161.8 152.3l-.5 1c-.4.8-1 1.4-1.3 2.2-.3.8-.3 1.8-.9 2.5l-.2.4v.2c-.1.3-.5.3-.6.5v.2c-.1.2-.3.2-.4.3-.3.2-.3.7-.5 1a.8.8 0 01-.7.2c-.3 0-.6-.1-.8-.3h-.6a2 2 0 00-.8 1.7 5.5 5.5 0 00.6 2.2.7.7 0 00.7 0c.3 0 .5-.2.8-.3.4 0 .9.3 1.4.2a2 2 0 00.9-.4c.5-.2.9-.6 1.2-1l.6-.9.7-1 1.7-2 .5-.7.4-1c.1-.5.3-1 .3-1.6l-.1-1.5c0-.4-.2-.9-.4-1.3-.3-.8-1.3-1.5-2-.6z" fill="#50DDC2"></path><path d="M167.8 148.4a3.3 3.3 0 00-1.3-2.7 4 4 0 00-3.4-4 3.9 3.9 0 00-4-3 3.9 3.9 0 00-3.7 3.3c-1.2-.3-2.3 0-2.6.8-.2.8.7 1.8 2 2.1l1.3.2a3.9 3.9 0 002.7 1.6 4 4 0 002.9 3c.2.5.5.9.9 1.2v.3a2.5 2.5 0 001.5 2.3 2.5 2.5 0 003.3-1.3c.2-.3.2-.7.2-1 0-.4 0-.7-.2-1.1.3-.5.4-1.1.4-1.7z" fill="#F86D70"></path><path opacity="0.1" d="M153.7 143c.2-.8 1.3-1.1 2.6-.8a4 4 0 013.8-3.3h.3a3.8 3.8 0 00-3.7.7 4 4 0 00-1.3 2.4c-1.2-.3-2.4 0-2.6.8-.2.8.7 1.8 2 2.1l.8.2c-1.3-.4-2.1-1.3-2-2.1zM163.4 151.4v-.3c-.4-.4-.7-.8-.9-1.3a4 4 0 01-3-3 3.9 3.9 0 01-2.6-1.6h-.7a3.9 3.9 0 002.5 1.5 4 4 0 003 3c.2.5.5.9.9 1.2v.3a2.6 2.6 0 002.5 2.6 2.6 2.6 0 01-1.7-2.4z" fill="#000"></path><path d="M159.1 147.4c.2-.2.2-.5 0-.8-.2-.3-.5-.4-.7-.2-.2.2-.2.5 0 .8.2.2.5.3.7.2z" fill="#FBBEBE"></path></g><defs><linearGradient id="paint0_linear" x1="268.8" y1="198.3" x2="268.8" y2="138.4" gradientUnits="userSpaceOnUse"><stop stop-color="gray" stop-opacity="0.3"></stop><stop offset="0.5" stop-color="gray" stop-opacity="0.1"></stop><stop offset="1" stop-color="gray" stop-opacity="0.1"></stop></linearGradient><linearGradient id="paint1_linear" x1="21865.9" y1="23327.1" x2="21865.9" y2="19782.5" gradientUnits="userSpaceOnUse"><stop stop-color="gray" stop-opacity="0.3"></stop><stop offset="0.5" stop-color="gray" stop-opacity="0.1"></stop><stop offset="1" stop-color="gray" stop-opacity="0.1"></stop></linearGradient><clipPath id="clip0"><path fill="#fff" d="M0 0h384v200H0z"></path></clipPath></defs></svg>
    </div>
      </div>
    </div>
    </div>
</div>
<!-- Pop Up Forms Ends Here -->
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


     <!--  -->
</body>
</html>