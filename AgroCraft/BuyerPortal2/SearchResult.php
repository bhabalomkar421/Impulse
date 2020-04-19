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
          9

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
          /* .please{
margin-left:-7%;
margin-top:-10px;
          }
          .states{
               margin-right:-15%;
               color:white;
          }
          .myfooter {
               background-color: #292b2c;
               color:white;
               color: goldenrod;
               margin-top: 15px;
          }
.submitbtn{
     color:white;
     /* margin-left: -70%; */
          /* margin-left:-240%;
margin-top:2%;
} */
<<<<<<< HEAD
          .myfooter {
               position: absolute;
               width: 1536px;
               bottom: 0px;
          }

=======
>>>>>>> a69f8aca302f57bd875d8bab8778082e206cbaf4
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

          /* .images {
            transition: 0.5s;
        } */

          .images:hover {

               height: 220px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.3s;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               /* font-family: serif; */
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          .mobtext {
               display: block;
          }

          .destext {
               display: none;
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
               background: white;
               padding: 0 10px;
          }

          /* .settings{
    margin-left:10px;
} */
          .States {
               margin-right: -1%;
               margin-left: 10%
          }

          .districts {
               margin-right: -15%;
          }

          .go {
               margin-right: -50%;
               margin-left: 5%;
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
<<<<<<< HEAD

=======
>>>>>>> a69f8aca302f57bd875d8bab8778082e206cbaf4
               .States {
                    margin-right: 0%;
                    margin-left: 0%;
                    margin-top: 5%;
               }

               .districts {
                    margin-right: 0%;
                    margin-top: 5%;
               }

               .go {
                    margin-right: 0%;
                    margin-left: 40%;
                    margin-right: 30%;
                    margin-top: 10%;
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
                    background: white;
                    padding: 0 10px;
               }

               .mobtext {
                    display: none;
               }

               .destext {
                    display: inline-block;
                    width: 90%;
                    margin-left: 5%;
                    margin-right: 5%;
               }

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

               .guard {
                    /* width: 100%; */
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    /* line-height: 0.1em; */
                    /* margin: 10px 0 20px; */
                    /* font-family: serif; */

               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }
<<<<<<< HEAD

=======
>>>>>>> a69f8aca302f57bd875d8bab8778082e206cbaf4
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






          #headings {
               /* text-shadow: 2px 1px #666666; */
               font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }

          @media screen and (max-width: 800px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          @media screen and (max-width: 600px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
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

     <nav class="navbar navbar-expand-xl ">

          <div class=" flex-row-reverse left ">

               <div class="p-2">
                    <div class="icon2">
                         <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                         <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
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
          <a class="float-left" href="bhome.php">
               <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

               <div class="input-group mb-1 ml-2 searchbox">
                    <div class="input-group-prepend">
                         <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                    </div>
                    <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                         <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops" style="width:500px;">
                    </form>
               </div>
               <?php
               getUsername();
               ?>
               <div class="list-group moblists">

                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<a href='productsdetails.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                         echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
                         echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
                         echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
                         echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
                         echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                    } else {
                         echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
                    }
                    ?>

               </div>
          </div>




          <div class=" flex-row-reverse right ">
               <div class="p-2 cart">
                    <div class="icon2">
                         <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                         <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                    </div>
               </div>
               <div class="dropdown p-2 settings ">
                    <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <?php
                         if (isset($_SESSION['phonenumber'])) {
                              echo "<a href='productsdetails.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                              echo "<a href='#' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                              echo "<a href='#' class='dropdown-item'  style='padding-right:-20px;'>Subscriptions</a>";
                              echo "<a href='#' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                              echo "<a href='#' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                              echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
                         } else {
                              echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
                         }
                         ?>
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
                              <?php
                              getFruits();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Vegetables
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getVegetables();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Crops
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getCrops();
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <form action="" method="post">
<<<<<<< HEAD
          <div class="Responsive">
               <div class="container mt-5" style="position: absolute; left: 300px; ">
                    <div class="row  mt-4 p-2">
                         <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 districts">

                              <div class="text-center mr-5 ">
                                   <h4 class="font-weight-bold mt-2" style="color: #FFD700; border-radius: 2px;">Select your State</h4>
                              </div>
=======
          <div class="container">
               <div class="row   p-2">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                         <div class="text-center">
                              <h4 class="font-weight-bold
                              " style="color: #FFD700 ">Select your region</h4>
>>>>>>> a69f8aca302f57bd875d8bab8778082e206cbaf4
                         </div>
                         <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 States">
                              <!-- <div class="dropdown text-right p-0 ">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                              <b> States</b>
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Orange</a>
                              <a class="dropdown-item" href="#">Watermellon</a>
                              <a class="dropdown-item" href="#">Strawberry</a>
                         </div>
                    </div> -->
<<<<<<< HEAD
                              <select class="shadow-lg mr-5" id="states" name="stateInput" onchange="state()" tabindex="1" style="padding: 10px ;border:1px solid blue;  border-radius:4px;margin-left:10px;
                         ">
                                   <option value="0">Select State</option>
                                   <option value="31">ANDAMAN & NICOBAR ISLANDS</option>
                                   <option value="01">ANDHRA PRADESH</option>
                                   <option value="32">ARUNACHAL PRADESH</option>
                                   <option value="02">ASSAM</option>
                                   <option value="03">BIHAR</option>
                                   <option value="33">CHANDIGARH</option>
                                   <option value="23">CHHATTISGARH</option>
                                   <option value="34">DADRA AND NAGAR HAVELI</option>
                                   <option value="36">DAMAN AND DIU</option>
                                   <option value="35">DELHI</option>
                                   <option value="42">GOA</option>
                                   <option value="04">GUJARAT</option>
                                   <option value="05">HARYANA</option>
                                   <option value="06">HIMACHAL PRADESH</option>
                                   <option value="07">JAMMU AND KASHMIR</option>
                                   <option value="24">JHARKAND</option>
                                   <option value="08">KARNATAKA</option>
                                   <option value="09">KERALA</option>
                                   <option value="37">LAKSHADWEEP</option>
                                   <option value="10">MADHYA PRADESH</option>
                                   <option value="11">MAHARASHTRA</option>
                                   <option value="12">MANIPUR</option>
                                   <option value="13">MEGHALAYA</option>
                                   <option value="38">MIZORAM</option>
                                   <option value="14">NAGALAND</option>
                                   <option value="15">ODISHA</option>
                                   <option value="39">PUDUCHERRY</option>
                                   <option value="16">PUNJAB</option>
                                   <option value="17">RAJASTHAN</option>
                                   <option value="22">SIKKIM</option>
                                   <option value="18">TAMIL NADU</option>
                                   <option value="26">TELANGANA</option>
                                   <option value="19">TRIPURA</option>
                                   <option value="20">UTTAR PRADESH</option>
                                   <option value="25">UTTARAKHAND</option>
                                   <option value="40">UTTARANCHAL</option>
                                   <option value="21">WEST BENGAL</option>

                              </select>
                         </div>


                         <select class="shadow-lg" style="width: 150px; border:1px solid blue;  border-radius:4px ;margin-left:50px;" name="districtInput" id="district">
                              <option>Select District</option>
                         </select>


                         <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go"> <button class='btn  border-success ' name='go' type='submit' style='color:#FFD700 ;background-color: black; padding:10px;  font-weight:50px;border-radius: 10px;'>Filter</button>
                         </div>
                    </div>
               </div>
          </div>
          </div>
          </div>
=======
                         <select class="p-2 shadow-lg" id="states" name="stateInput" onchange="state()" tabindex="1" style="border-radius: 6px; margin-right:  200px; border-color:#FFD700 ">
                              <option value="0">Select State</option>
                              <option value="31">ANDAMAN & NICOBAR ISLANDS</option>
                              <option value="01">ANDHRA PRADESH</option>
                              <option value="32">ARUNACHAL PRADESH</option>
                              <option value="02">ASSAM</option>
                              <option value="03">BIHAR</option>
                              <option value="33">CHANDIGARH</option>
                              <option value="23">CHHATTISGARH</option>
                              <option value="34">DADRA AND NAGAR HAVELI</option>
                              <option value="36">DAMAN AND DIU</option>
                              <option value="35">DELHI</option>
                              <option value="42">GOA</option>
                              <option value="04">GUJARAT</option>
                              <option value="05">HARYANA</option>
                              <option value="06">HIMACHAL PRADESH</option>
                              <option value="07">JAMMU AND KASHMIR</option>
                              <option value="24">JHARKAND</option>
                              <option value="08">KARNATAKA</option>
                              <option value="09">KERALA</option>
                              <option value="37">LAKSHADWEEP</option>
                              <option value="10">MADHYA PRADESH</option>
                              <option value="11">MAHARASHTRA</option>
                              <option value="12">MANIPUR</option>
                              <option value="13">MEGHALAYA</option>
                              <option value="38">MIZORAM</option>
                              <option value="14">NAGALAND</option>
                              <option value="15">ODISHA</option>
                              <option value="39">PUDUCHERRY</option>
                              <option value="16">PUNJAB</option>
                              <option value="17">RAJASTHAN</option>
                              <option value="22">SIKKIM</option>
                              <option value="18">TAMIL NADU</option>
                              <option value="26">TELANGANA</option>
                              <option value="19">TRIPURA</option>
                              <option value="20">UTTAR PRADESH</option>
                              <option value="25">UTTARAKHAND</option>
                              <option value="40">UTTARANCHAL</option>
                              <option value="21">WEST BENGAL</option>

                         </select>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 districts">
                         <!-- <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <b>Districts</b>
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Patato</a>
                              <a class="dropdown-item" href="#">Carrot</a>
                              <a class="dropdown-item" href="#">Onion</a>
                         </div>
                    </div> -->
                         <select class="p-2 ml-5 shadow-lg" name="districtInput" id="district" style="border-radius: 6px; border-color: #FFD700 " >
                              <option>Select District</option>
                         </select>

                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go"> <button class='btn btn-border-secondary ml-5 ' name='go' type='submit' style='color:black ;font-weight:50px; background-color: black;color:#FFD700'>Filter</button>
                    </div>
               </div>

          </div>
          </div>
>>>>>>> a69f8aca302f57bd875d8bab8778082e206cbaf4
     </form>
     <?php
     if (isset($_POST['go'])) {
          $districtInput = $_POST['districtInput'];
          $stateInput = $_POST['stateInput'];
          // echo $stateInput;
          // echo $districtInput;
     }

     ?>

     <div class="container ">
          <br>
          <div class="row">


               <?php
               cart();
               ?>
               <?php
               if (isset($_GET['search'])) {

                    $search_query = $_GET['search'];
                    $get_pro = "select * from products where product_keywords like '%$search_query%'";
                    $run_pro = mysqli_query($con, $get_pro);
                    $count = mysqli_num_rows($run_pro);
                    if ($count > 0) {
                         echo "<br>";
                         while ($rows = mysqli_fetch_array($run_pro)) {
                              $product_id = $rows['product_id'];
                              $product_title = $rows['product_title'];
                              $product_image = $rows['product_image'];
                              $product_price = $rows['product_price'];
                              $product_delivery = $rows['product_delivery'];
                              $farmer_fk = $rows['farmer_fk'];
                              $farmer_name_query = "select farmer_name from farmerregistration where farmer_id = $farmer_fk";
                              $running_query_name = mysqli_query($con, $farmer_name_query);
                              while ($names = mysqli_fetch_array($running_query_name)) {
                                   $name = $names['farmer_name'];
                              }
                              echo "
                                        <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
                                             <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                                                  <br>
                                                  <div class='mt-0'><b>
                                                       <h4><img src='iconsmall.png' style='width: 28px; margin-bottom:  10px;'> $name
                                                       </b></h4>
                                                  </div>
                                                  <a href='../BuyerPortal2/ProductDetails.php?id=$product_id'>
                                                  <img class='card-img-top' src='../Admin/product_images/$product_image' alt='Card image cap' height='300px'>
                                                  </a>
                                                  <form action = '' method = 'post'>
                                                       <div class='card-body pb-0'>
                                                            <div class='row'>
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                                                      <div class='input-group mb'>
                                                                           <div class='input-group-prepend'>
                                                                                <h5 class='card-title font-weight-bold'>$product_title</h5>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                        
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                                                 <div class='input-group mb-1'>
                                                                      <div class='input-group-prepend'>
                                                                           <span class='input-group-text bg-warning border-secondary p-1' style='color:black;' id='inputGroup-sizing-default' placeholder='1'><b>Quantity</b></span>
                                                                      </div>
                                                                      <input type='number' class='form-control' aria-label='Default' style='margin-top:0%;width:20%;padding:0%;' aria-describedby='inputGroup-sizing-default'>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <p class='card-text mb-2 font-weight-bold'>PRICE:- $product_price Rs/kg</p>
                                                       <div class='row'>
                                                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                                                                 <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                                                                      <button class='btn btn-warning border-secondary mr-1 ' name='cart' type = 'submit' style='color:black ;font-weight:50px;'>Add to cart<img src='carticons.png' height='20px'></button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
           ";
                              if (isset($_POST['cart'])) {
                                   echo "<h1>Hello</h1>";
                                   if (isset($_POST['quantity'])) {
                                        $qty = mysqli_real_escape_string($con, $_POST['quantity']);
                                   } else {
                                        $qty = 1;
                                   }
                                   global $con;
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<h1>Hello</h1>";
                                        $sess_phone_number = $_SESSION['phonenumber'];

                                        $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                                        $run_check = mysqli_query($con, $check_pro);

                                        if (mysqli_num_rows($run_check) > 0) {
                                             echo "";
                                        } else {
                                             $subtotal = $product_price * $qty;
                                             $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                                             $run_insert_pro = mysqli_query($con, $insert_pro);

                                             echo "<script>window.location.reload(true)</script>";
                                        }
                                   } else {
                                        echo "<script>window.alert('Please Login First!');</script>";
                                   }
                              }
                         }
                    } else {
                         echo "<br><br><hr><h1 align = center>Product Not Available !</h1><br><br><hr>";
                    }
               }
               ?>
          </div>
          <br><br>


     </div>
     </div>



     <!-- footer -->
     <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <br>
                         <h5>Payment Option</h5>
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