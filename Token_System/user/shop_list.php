<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

    <title>Impulse - Slot</title>

    <style>
        *{
            font-family: sans-serif;
        }
        .search{
            position: absolute;
           top: 25%;
           left:9%;
        }

        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }
        
        .mobileContent {
            display: none;
        }
        
        


        }
        body { 
            background-color:#f3f7f7;
 
        }
        .parent{
            font-family: sans-serif;
            width: 900px;
            left:140px;
        }
        h3{
            position: relative;
            margin-left: 125px;

            
        }

        .container-sm:hover{
            background-color: #dfdfdf;
            color: #2a5cff;
          
        }
        .status{
            position: absolute;
            bottom:640px;
            left:1100px;
            color: #A9A9A9;
            width: 400px;
            font-family: sans-serif;
        }
        label{
            color: #000;
        }
        .dropbtn {
  background-color:#343a40;
  color: white;
  padding: 8px;
  font-size: 18px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  margin-left: 50px;
  margin-right: 30px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2a5cff;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  border-radius: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #2a5cff;}

.show {display: block;}

        
form {
  outline: 0;
  float: left;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

form > .textbox {
  outline: 0;
  height: 50px;
  width: 280px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .button {
  outline: 0;
  background: none;
  background-color: #2a5cff
  float: left;
  height: 50px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #2a5cff;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button:hover {
  background-color: #2a5cff;
  cursor: pointer;
  color: #fff;
}
.full{
    position: absolute;
    top: 250px;
}
@media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mobileContent {
                display: inline;
            }
            .hrtable-responsive {
                display: block;
            }
            .dropbtn{
                position: relative;
                right: 10px;
               bottom:1px;
            }
            h3{
                position: absolute;
                right:  90px;
            bottom: 628px;

                width: 300px;
            }
            .dropdown-content a {
             color: black;
             padding: 12px 10px;
             text-decoration: none;
             display: block;
             

            }
            .search{
                position: absolute;
                top: 130px;
            }
            .mob{
                position: relative;
                right: 425px;
                bottom: 50px;
                

            }
            .container-sm{
                width: 325px;

            }
            .status{
                position: absolute;
                left:340px;
                width: 10px;
                bottom: 580px;
            }

 
            
}
 
    </style>
 
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Impulse</a>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url_for('Homepage') }}">Home <span
                            class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url_for('Homepage') }}">Covid-19 Status <span
                            class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url_for('Homepage') }}"> Slot Booking <span
                            class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url_for('Homepage') }}">AgroCraft <span
                            class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url_for('About') }}">About Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url_for('Contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    
                </li>

            </ul>
            <div class="p-2">
                <div class="">
                    <a> <i class="fa fa-user" style="font-size:30px; color:white ;margin-top:2px;"></i></a>
                    <span id="" style="color:green"></span>
                </div>


            </div>
             <div class="text  login" style="color: white;">Login</div>
        </div>
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Setting</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Profile</a>
    <a href="#about">Logout</a>
    <a href="#about">Home</a>
    <a href="#about">Covid-19 Status</a>
    <a href="#about">Agrocraft</a>
    <a href="#about">Contact Us</a>
    
  </div>
</div>
        </div>
        </div>
        
    </nav>
    
    
    <div class="container-fluid p-4 border-top shadow-sm p-3 mb-5 bg-white  ">
        <h3 class="header font-weight-bold "><i class ="fas fa-store fa-lg" style="margin-right: 10px; color:#2a5cff;  "></i>Select Your Shop</h3>
        

        
    </div>
    <div class="full">
    <div class="mob">
    <div class="parent position-relative bg-white">
    <div class="text-left ">
        <div class="container-sm p-4 border border-top shadow-sm ">
            <a  href="booking.html">
            <h4 class="font-weight-bold">Shop Name</h4>
            </a>
            <h5>Address</h5>
            <h6>Phone Number</h6>
           
        </div>
    <div class="container-sm p-4 border border-top shadow-sm  ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    </div>
    <div class="container-sm p-4 border border-top shadow-sm    ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    </div>
    <div class="container-sm p-4 border border-top shadow-sm    ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    </div>
    <div class="container-sm p-4 border border-top shadow-sm ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    
    </div>
    
    </div>
    </div>
</div>

    <br>
    <br>
    <br>
    <div class="st">
    <div class="status font-weight-bold">
        <h5>TYPE</h5>
        
        <input type="checkbox" id="shop" class="shop" value="shop">
        <label for="shop"> Grocery Store</label><br>
        <input type="checkbox" id="shop" class="shop" value="shop">
        <label for="shop"> Medical Store</label><br>
        <input type="checkbox" id="shop" class="shop" value="shop">
        <label for="shop"> Clinic</label><br>
        <hr>

    </div>
</div>
</div>
    <div class="search">
       <form method="post">

          <input type="text" class="textbox" placeholder="Search...">
             <input title="Search"  value="" class="button">
        </form>
        </div>

       


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    </body>
    </html>
    
    