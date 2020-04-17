<?php
	include("../Functions/functions.php");
	?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <script>
		function state() {
			var a = document.getElementById('states').value;

			if (a === '31') {
				var array = ['Andamans', 'Nicobars'];
			} else if (a === '01') {
				var array = ['Adilabad', 'Nizamabad', 'Karimnagar', 'Medak', 'Hyderabad', 'Rangareddi', 'Mahbubnagar', 'Nalgonda', 'Warangal', 'Khammam', 'Srikakulam', 'Vizianagaram', 'Visakhapatnam', 'East Godavari', 'West Godavari', 'Krishna', 'Guntur', 'Prakasam', 'Nellore', 'Cuddapah', 'Kurnool', 'Anantapur', 'Chittoor'];
			} else if (a === '02') {
				var array = ['Kokrajhar', 'Dhubri', 'Goalpara', 'Bongaigaon', 'Barpeta', 'Kamrup', 'Nalbari', 'Darrang', 'Marigaon', 'Nagaon', 'Sonitpur', 'Lakhimpur', 'Dhemaji', 'Tinsukia', 'Dibrugarh', 'Sibsagar', 'Jorhat', 'Golaghat', 'Karbi Anglong', 'North Cachar Hills', 'Cachar', 'Karimganj', 'Hailakandi'];
			} else if (a === '03') {
				var array = ['Pashchim Champaran', 'Purba Champaran', 'Sheohar *', 'Sitamarhi', 'Madhubani', 'Supaul *', 'Araria', 'Kishanganj', 'Purnia', 'Katihar', 'Madhepura', 'Saharsa', 'Darbhanga', 'Muzaffarpur', 'Gopalganj', 'Siwan', 'Saran', 'Vaishali', 'Samastipur', 'Begusarai', 'Khagaria', 'Bhagalpur', 'Banka *', 'Munger', 'Lakhisarai *', 'Sheikhpura *', 'Nalanda', 'Patna', 'Bhojpur', 'Buxar *', 'Kaimur (Bhabua) *', 'Rohtas', 'Jehanabad ', 'Aurangabad', 'Gaya', 'Nawada', 'Jamui *'];
			} else if (a === '04') {
				var array = ['Kachchh', 'Banas Kantha', 'Patan  *', 'Mahesana', 'Sabar Kantha', 'Gandhinagar', 'Ahmadabad', 'Surendranagar', 'Rajkot', 'Jamnagar', 'Porbandar  *', 'Junagadh', 'Amreli', 'Bhavnagar', 'Anand  *', 'Kheda', 'Panch Mahals', 'Dohad  *', 'Vadodara', 'Narmada  *', 'Bharuch', 'Surat', 'The Dangs', 'Navsari  *', 'Valsad'];
			} else if (a === '05') {
				var array = ['Panchkula *', 'Ambala', 'Yamunanagar', 'Kurukshetra', 'Kaithal', 'Karnal', 'Panipat', 'Sonipat', 'Jind', 'Fatehabad *', 'Sirsa', 'Hisar', 'Bhiwani', 'Rohtak', 'Jhajjar *', 'Mahendragarh', 'Rewari', 'Gurgaon', 'Faridabad'];
			} else if (a === '06') {
				var array = ['Chamba', 'Kangra', 'Lahul & Spiti', 'Kullu', 'Mandi', 'Hamirpur', 'Una', 'Bilaspur', 'Solan', 'Sirmaur', 'Shimla', 'Kinnaur'];
			} else if (a === '07') {
				var array = ['Kupwara', 'Baramula', 'Srinagar', 'Badgam', 'Pulwama', 'Anantnag', 'Leh (Ladakh)', 'Kargil', 'Doda', 'Udhampur', 'Punch', 'Rajauri', 'Jammu', 'Kathua'];
			} else if (a === '08') {
				var array = ['Belgaum', 'Bagalkot *', 'Bijapur', 'Gulbarga', 'Bidar', 'Raichur', 'Koppal *', 'Gadag *', 'Dharwad', 'Uttara Kannada', 'Haveri *', 'Bellary', 'Chitradurga', 'Davangere*', 'Shimoga', 'Udupi *', 'Chikmagalur', 'Tumkur', 'Kolar', 'Bangalore', 'Bangalore Rural', 'Mandya', 'Hassan', 'Dakshina Kannada', 'Kodagu', 'Mysore', 'Chamrajnagar*'];
			} else if (a === '09') {
				var array = ['Kasaragod', 'Kannur', 'Wayanad', 'Kozhikode', 'Malappuram', 'Palakkad', 'Thrissur', 'Ernakulam', 'Idukki', 'Kottayam', 'Alappuzha', 'Pathanamthitta', 'Kollam', 'Thiruvananthapuram'];
			} else if (a === '10') {
				var array = ['Sheopur *', 'Morena', 'Bhind', 'Gwalior', 'Datia', 'Shivpuri', 'Guna', 'Tikamgarh', 'Chhatarpur', 'Panna', 'Sagar', 'Damoh', 'Satna', 'Rewa', 'Umaria *', 'Shahdol', 'Sidhi', 'Neemuch *', 'Mandsaur', 'Ratlam', 'Ujjain', 'Shajapur', 'Dewas', 'Jhabua', 'Dhar', 'Indore', 'West Nimar', 'Barwani *', 'East Nimar', 'Rajgarh', 'Vidisha', 'Bhopal', 'Sehore', 'Raisen', 'Betul', 'Harda *', 'Hoshangabad', 'Katni *', 'Jabalpur', 'Narsimhapur', 'Dindori *', 'Mandla', 'Chhindwara', 'Seoni', 'Balaghat'];
			} else if (a === '11') {
				var array = ['Nandurbar *', 'Dhule', 'Jalgaon', 'Buldana', 'Akola', 'Washim *', 'Amravati', 'Wardha', 'Nagpur', 'Bhandara', 'Gondiya *', 'Gadchiroli', 'Chandrapur', 'Yavatmal', 'Nanded', 'Hingoli *', 'Parbhani', 'Jalna', 'Aurangabad', 'Nashik', 'Thane', 'Mumbai (Suburban) *', 'Mumbai', 'Raigarh', 'Pune', 'Ahmadnagar', 'Bid', 'Latur', 'Osmanabad', 'Solapur', 'Satara', 'Ratnagiri', 'Sindhudurg', 'Kolhapur', 'Sangli'];
			} else if (a == 12) {
				var array = ['Senapati', 'Tamenglong', 'Churachandpur', 'Bishnupur', 'Thoubal', 'Imphal West', 'Imphal East *', 'Ukhrul', 'Chandel'];
			} else if (a === '18') {
				var array = ['Thiruvallur', 'Chennai', 'Kancheepuram', 'Vellore', 'Dharmapuri', 'Tiruvannamalai', 'Viluppuram', 'Salem', 'Namakkal   *', 'Erode', 'The Nilgiris', 'Coimbatore', 'Dindigul', 'Karur  *', 'Tiruchirappalli', 'Perambalur  *', 'Ariyalur  *', 'Cuddalore', 'Nagapattinam  *', 'Thiruvarur', 'Thanjavur', 'Pudukkottai', 'Sivaganga', 'Madurai', 'Theni  *', 'Virudhunagar', 'Ramanathapuram', 'Thoothukkudi', 'Tirunelveli ', 'Kanniyakumari'];
			} else if (a === '39') {
				var array = ['Yanam', 'Pondicherry', 'Mahe', 'Karaikal'];
			} else if (a === '37') {
				var array = ['Lakshadweep'];
			} else if (a === '42') {
				var array = ['North Goa ', 'South Goa'];
			} else if (a === '34') {
				var array = ['Dadra & Nagar Haveli'];
			} else if (a === '36') {
				var array = ['Diu', 'Daman'];
			} else if (a === '23') {
				var array = ['Koriya *', 'Surguja', 'Jashpur *', 'Raigarh', 'Korba *', 'Janjgir - Champa*', 'Bilaspur', 'Kawardha *', 'Rajnandgaon', 'Durg', 'Raipur', 'Mahasamund *', 'Dhamtari *', 'Kanker *', 'Baster', 'Dantewada*'];
			} else if (a === '24') {
				var array = ['Garhwa *', 'Palamu', 'Chatra *', 'Hazaribag', 'Kodarma *', 'Giridih', 'Deoghar', 'Godda', 'Sahibganj', 'Pakaur *', 'Dumka', 'Dhanbad', 'Bokaro *', 'Ranchi', 'Lohardaga', 'Gumla', 'Pashchimi Singhbhum', 'Purbi Singhbhum', 'ORISSA', 'Bargarh  *', 'Jharsuguda  *', 'Sambalpur', 'Debagarh  *', 'Sundargarh', 'Kendujhar', 'Mayurbhanj', 'Baleshwar', 'Bhadrak  *', 'Kendrapara *', 'Jagatsinghapur  *', 'Cuttack', 'Jajapur  *', 'Dhenkanal', 'Anugul  *', 'Nayagarh  *', 'Khordha  *', 'Puri', 'Ganjam', 'Gajapati  *', 'Kandhamal', 'Baudh  *', 'Sonapur  *', 'Balangir', 'Nuapada  *', 'Kalahandi', 'Rayagada  *', 'Nabarangapur  *', 'Koraput', 'Malkangiri  *'];
			} else if (a === '21') {
				var array = ['Darjiling ', 'Jalpaiguri ', 'Koch Bihar ', 'Uttar Dinajpur', 'Dakshin Dinajpur *', 'Maldah ', 'Murshidabad ', 'Birbhum', 'Barddhaman ', 'Nadia ', 'North Twenty Four Parganas', 'Hugli ', 'Bankura ', 'Puruliya', 'Medinipur ', 'Haora ', 'Kolkata', 'South  Twenty Four Parganas'];
			} else if (a === '13') {
				var array = ['West Garo Hills', 'East Garo Hills', 'South Garo Hills *', 'West Khasi Hills', 'Ri Bhoi  *', 'East Khasi Hills', 'Jaintia Hills'];
			} else if (a === '22') {
				var array = ['North ', 'West', 'South', 'East'];
			} else if (a === '20') {
				var array = ['Saharanpur', 'Muzaffarnagar', 'Bijnor', 'Moradabad', 'Rampur', 'Jyotiba Phule Nagar *', 'Meerut', 'Baghpat *', 'Ghaziabad', 'Gautam Buddha Nagar *', 'Bulandshahr', 'Aligarh', 'Hathras *', 'Mathura', 'Agra', 'Firozabad', 'Etah', 'Mainpuri', 'Budaun', 'Bareilly', 'Pilibhit', 'Shahjahanpur', 'Kheri', 'Sitapur', 'Hardoi', 'Unnao', 'Lucknow', 'Rae Bareli', 'Farrukhabad', 'Kannauj *', 'Etawah', 'Auraiya *', 'Kanpur Dehat', 'Kanpur Nagar', 'Jalaun ', 'Jhansi', 'Lalitpur', 'Hamirpur', 'Mahoba *', 'Banda', 'Chitrakoot *', 'Fatehpur', 'Pratapgarh', 'Kaushambi *', 'Allahabad ', 'Barabanki', 'Faizabad', 'Ambedkar Nagar *', 'Sultanpur', 'Bahraich', 'Shrawasti *', 'Balrampur *', 'Gonda', 'Siddharthnagar', 'Basti', 'Sant Kabir Nagar *', 'Maharajganj', 'Gorakhpur', 'Kushinagar *', 'Deoria', 'Azamgarh', 'Mau', 'Ballia', 'Jaunpur', 'Ghazipur', 'Chandauli *', 'Varanasi', 'Sant Ravidas Nagar *', 'Mirzapur', 'Sonbhadra'];
			} else if (a === '17') {
				var array = ['Ganganagar', 'Hanumangarh *', 'Bikaner', 'Churu', 'Jhunjhunun', 'Alwar', 'Bharatpur', 'Dhaulpur', 'Karauli *', 'Sawai Madhopur', 'Dausa *', 'Jaipur', 'Sikar', 'Nagaur', 'Jodhpur', 'Jaisalmer', 'Barmer', 'Jalor', 'Sirohi', 'Pali', 'Ajmer', 'Tonk', 'Bundi', 'Bhilwara', 'Rajsamand *', 'Udaipur', 'Dungarpur', 'Banswara', 'Chittaurgarh', 'Kota', 'Baran *', 'Jhalawar'];
			} else if (a === '16') {
				var array = ['Gurdaspur', 'Amritsar', 'Kapurthala', 'Jalandhar', 'Hoshiarpur', 'Nawanshahr *', 'Rupnagar', 'Fatehgarh Sahib *', 'Ludhiana', 'Moga *', 'Firozpur', 'Muktsar *', 'Faridkot', 'Bathinda', 'Mansa *', 'Sangrur', 'Patiala'];
			} else if (a === '14') {
				var array = ['Mon', 'Tuensang', 'Mokokchung', 'Zunheboto', 'Wokha', 'Dimapur *', 'Kohima', 'Phek'];
			} else if (a === '19') {
				var array = ['West Tripura ', 'South Tripura ', 'Dhalai  *', 'North Tripura '];
			} else if (a === '38') {
				var array = ['Mamit *', 'Kolasib *', 'Aizawl', 'Champhai *', 'Serchhip *', 'Lunglei', 'Lawngtlai', 'Saiha *'];
			} else if (a === '32') {
				var array = ['Tawang', 'West Kameng', 'East Kameng', 'Papum Pare *', 'Lower Subansiri', 'Upper Subansiri', 'West Siang', 'East Siang', 'Upper Siang *', 'Dibang Valley', 'Lohit', 'Changlang', 'Tirap'];
			} else if (a === '33') {
				var array = ['Chandigarh'];
			} else if (a === '35') {
				var array = ['North West   *', 'North   *', 'North East   *', 'East   *', 'New Delhi', 'Central  *', 'West   *', 'South West   *', 'South  *'];
			} else if (a === '40') {
				var array = ['Uttarkashi', 'Chamoli', 'Rudraprayag *', 'Tehri Garhwal', 'Dehradun', 'Garhwal', 'Pithoragarh', 'Bageshwar', 'Almora', 'Champawat', 'Nainital', 'Udham Singh Nagar *', 'Hardwar'];
			}



			var string = "";
			for (let i = 0; i < array.length; i++) {
				string = string + "<option>" + array[i] + "</option>";
			}
			string = "<select nmae = 'lol'>" + string + "</select>"
			document.getElementById('district').innerHTML = string;

		}
	</script>
	<script>
		var a;

		function display() {
			if (a == 0) {
				document.getElementById("majic").style.visibility = "hidden";
				document.getElementById("show").style.visibility = "visible";
				return a = 1;
			} else {
				document.getElementById("majic").style.visibility = "visible";
				document.getElementById("show").style.visibility = "hidden";
				// document.getElementById("show").style. visibility= "hidden";
				return a = 0;
			}

		}
	</script>
    <style>
         .myfooter {
               background-color: #292b2c;

               color: goldenrod;
               margin-top: 15px;
          }
          .aligncenter {
               text-align: center;
          }
          a {
               color: goldenrod;
          }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #292b2c;
        }

        .navbar-custom {
            background-color: #292b2c;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #292b2c;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #292b2c;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #292b2c;
        }

        .firstimage {
            height: 500px;
            width: 100%;
        }

        .mybtn {
            border-color: green;
            border-style: solid;
        }

        .card {
            width: 100%;
            height: 100%;
            margin: 10px;
        }

        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        /* .settings{
    margin-left:10px;
} */
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mycarousel {
                display: none;
            }

            .firstimage {
                height: auto;
                width: 90%;
            }

            .card {
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;

            }

            .col {
                margin-top: 20px;
            }

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
            .settings{
            margin-left:79%;
        } */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }
        }




        /* Image Grig */


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
        }

        .header {
            text-align: center;
            padding: 32px;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }
        .myfooter{
            background-color: #292b2c;
            color: goldenrod;
            margin-top:15px;
          }
        .aligncenter{
           text-align: center;
        }
        a{
               color:goldenrod;
          }
        .BigBox{
            border:2px solid black;
            padding : 10px;
            border-radius: 10px;
            margin : auto 5px;

        }
        @media screen and (max-width: 800px) {
            .kolum {
                flex: 50%;
                max-width: 50%;
                } 
            }
        @media screen and (max-width: 600px) {
            .kolum {
                flex: 50%;
                max-width: 50%;
                }
                
            }
        /* Responsive layout - makes a two column-layout instead of four columns */
        /* @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        } */

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        /* @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        } */
    </style>
    <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>
    <!-- <nav class="navbar navbar-expand-sm p-0  " style="   background-color: #292b2c;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon float-left  "><i class="fas fa-bars text-white mr-5 mt-1"></i></span>
        </button>
        <form class="form-inline" action="/action_page.php">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="float-left" href="#">
                    <img src="agro.png" class="float-left mr-3 ml-2 " alt="Logo" style="height:50px;">
                </a>
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                </div>

            </div>

            <div class="d-flex flex-row-reverse">
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
            </div>



        </form>
    </nav><br> -->
    <nav class="navbar navbar-expand-xl ">
        <!-- <a href="#" class="navbar-brand">Academind</a> -->
        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
            <a class="float-left" href="#">
                <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button>
        <a class="float-left" href="#">
            <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <input type="text" class="form-control " id="inlineFormInputGroup" placeholder="Search for fruits,vegetables or crops ">
            </div>
            <div class="text-success  logins ">Login</div>
            <div class="list-group moblists">
                <a href="#" class="list-group-item list-group-item-action " style="background-color:#292b2c;text-align:center;color:goldenrod">
                    Profile
                </a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color:#292b2c;text-align:center;color:goldenrod">Transactions</a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color:#292b2c;text-align:center;color:goldenrod">subscriptions</a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color:#292b2c;text-align:center;color:goldenrod">Farmers</a>
                <a href="#" class="list-group-item list-group-item-action " style="background-color:#292b2c;text-align:center;color:goldenrod">Logout</a>
            </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div>
            </div>
            <div class="dropdown p-2 settings ">
                <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item  " style="padding-right:-20px;">Profile</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Transactions</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Subscriptions</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Farmers</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Logout</a>
                </div>
            </div>

            <!-- <div class="p-2 profile"><i class='far fa-user-circle' style='font-size:30px; '></i></div> -->
            <div class="text-success  login">Login</div>
        </div>

    </nav>
    <div class="container">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fruits
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Orange</a>
                        <a class="dropdown-item" href="#">Watermellon</a>
                        <a class="dropdown-item" href="#">Strawberry</a>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vegetables
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Patato</a>
                        <a class="dropdown-item" href="#">Carrot</a>
                        <a class="dropdown-item" href="#">Onion</a>
                    </div>
                </div>
            </div>
            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crops
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Wheat</a>
                        <a class="dropdown-item" href="#">Rice</a>
                        <a class="dropdown-item" href="#">Bajra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"> <img src="b4.jpeg" class="img-fluid firstimage d-block mx-auto" alt="Responsive image">
    </div>
    <br>
    <!-- <div class="container">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        States
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Orange</a>
                        <a class="dropdown-item" href="#">Watermellon</a>
                        <a class="dropdown-item" href="#">Strawberry</a>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Districts
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Patato</a>
                        <a class="dropdown-item" href="#">Carrot</a>
                        <a class="dropdown-item" href="#">Onion</a>
                    </div>
                </div>
            </div>

        </div> -->
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit1.jfif" alt="Card image cap" height="300px">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            
            <div class="text-center">
                <h2 style="color: rgb(68, 68, 68); text-align:center;font-weight: bold;">Fresh fruits</h2>
            </div>
            <br> 
            

            <div class="row BigBox">
                <div class="column kolum">
                    <div class="img-thumbnail ">
                        <img class="rounded mx-auto d-block" src="../Admin/product_images/Bananas.jpg"  width="350px" height="190px" alt="image">
                    </div>
                </div>
                <div class="column kolum">
                    <div class="img-thumbnail">
                        <img class="rounded mx-auto d-block" src="../Admin/product_images/Apple.jpg"  width="350px" height="190px" alt="image">
                    </div>    
                </div>
                <div class="column kolum">
                    <div class="img-thumbnail">
                        <img class="rounded mx-auto d-block" src="../Admin/product_images/Mango.jpg"  width="350px" height="190px" alt="image">
                    </div>
                </div>
                <div class="column kolum">
                    <div class="img-thumbnail">
                        <img class="rounded mx-auto d-block" src="../Admin/product_images/orange.jpg"  width="350px" height="190px" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <section id="footer" class="myfooter">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col aligncenter">
					<p>Payment Option</p>
						 <img src="../Images/Website/paytm1.jpg" alt="paytm">
						 <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
					<p><u><a href="https://www.agrocraft.com/">AgroCraft Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
					<p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agrotech</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer a ,myfooter,aligncenter-->
</body>

</html>