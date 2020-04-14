<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: white;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    .x {
        height: 70vh;
        margin-top: 10vh;
        margin-bottom: 10vh;
        width: 70%;
    }
    
    .inp::placeholder {
        display: none;
        visibility: hidden;
    }
    /* .s {
        width: auto;
    }
     */
    
    .x {
        background-color: ghostwhite;
        height: 80%;
        width: 25%;
    }
    
    .text {
        background-color: black;
        color: gold;
    }
    
    h2,
    h1 {
        color: black;
    }
    
    .imag {
        height: 120px;
    }
    
    .s {
        width: 90%;
        margin-left: 5%;
        margin-right: 5%;
    }
    
    .fp {
        margin-left: 0%;
        margin-top: -10%;
        text-align: center;
        color: black;
        font-size: 20px;
    }
    
    .nu {
        /* margin-right: 0%;
        margin-left: 25%; */
        margin-top: -10%;
        text-align: center;
        margin-left: -2%;
        color: black;
        font-size: 20px;
    }
    
    .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }
    
    .guard span {
        background: ghostwhite;
        padding: 0 10px;
    }
    
    .lastbtn {
        color: goldenrod;
    }
    
    .text {
        min-width: 150px !important;
        display: inline-block !important
    }
    
    .text1 {
        font-size: 15px;
    }
    
    .text2 {
        font-size: 15px;
    }
    
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        .x {
            padding: 0;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }
        /* .imag {
            display: none;
            visibility: hidden;
        } */
        .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        .inp::placeholder {
            visibility: visible;
        }
        .input-group-prepend {
            display: none;
        }
        .fp {
            margin-left: 0%;
            margin-top: -30%;
            text-align: center;
            /* font-size: 20px; */
        }
        .nu {
            margin-right: 0%;
            margin-left: 0%;
            margin-top: -15%;
            text-align: center;
        }
        .text1 {
            text-align: center;
            font-size: 20px;
        }
        .text2 {
            text-align: center;
            font-size: 20px;
        }
        .button1 {
            margin-top: 10%;
        }
        .inp1 {
            text-align: center;
        }
    }
</style>

<body>

    <!-- <p class="line-1 anim-typewriter">Animation typewriter style using css steps()</p> -->

    <!-- <br> -->
    <!-- <img src="Guadian.png" >
     -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Impulse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span
                            class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <img src="Impulse.png" class="mx-auto d-block imag" />
    <div class="text-center">
        <h1><b>Impulse</b></h1>
    </div>
    <br>
    <div class="container x  mt-0  pl-2 pr-2 pb-3 align-middle ">
        <div class="text-center">
            <br>

            <b><h1 class="guard"><span><b>Sign in</b></span>
            </h1>
            </b>
        </div>
        <div class="form">
            <div class="input-group mt-5 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-phone-alt mr-2"></i>Phone number</span>
                </div>
                <input type="phonenumber " class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="
                Phonenumber">
            </div>
            <div class="input-group mt-5  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text" id="inputGroup-sizing-default"><i class="fas fa-lock mr-2"></i>Password</span>
                </div>
                <input type="password " class="form-control inp inp1 mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Password">

            </div>
            <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-5 " style="margin-top: -5%;">

                <div class="text1">Forgot password ? </div>
                <div class="text2"> New User ? </div>

            </div>

            <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-3" style="margin-top: -5%;">
                <button type="button" class="btn btn-dark btn-lg button2" style=" color: gold;">Login</button>




            </div>
        </div>

</body>

</html>