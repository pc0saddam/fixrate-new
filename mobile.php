<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIXRATE RECHARGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    #led{
    text-decoration: none;
} 

.container-fluid{
    padding: 28px 12px;
    background-color: #2ECC71;
    margin-left: 20px;
}

.col-md-1 {
    box-shadow: 0 3px 6px black;
    margin-right: 30px;
    margin-bottom: 30px;
    width:100px;
    height: 100px;
    background-color: white;
    display: inline-block;
    border-radius: 20px;
    text-align: center;
    background-color: #229954;
} 

#navbarDropdown{
  color:white;
}

#mobile{
  padding: 8px 12px;
}

.no-border {
    border: 0;
    box-shadow: none; 
} 

.dropbtn {
            background-color: white;
            color: grey;
            padding: 16px 18px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            font-weight: lighter;
            color: gray;
        }
  
        .dropdown {
            position: relative;
            display: inline-block;
        }
  
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: lightblue;
            min-width: 160px;
            box-shadow: 0px 8px 16px 
                0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
  
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            height: 60px;
        }
  
        .dropdown-content a:hover {
            background-color: white;
        }
  
        .dropdown:hover .dropdown-content {
            display: block;
        }
  
        .dropdown:hover .dropbtn {
            background-color: white;
        } 

        #img{
          border-radius: 90px;
        } 

        #btn{
          border-radius: 25px;
          font-weight: 25px;
        }

        #ban{
          height: 360px;
          float: right;
        } 

        #drop{
          width: 240px;
          border:none;
          color: grey;
          border-color: grey;
          font-size: 17px;
          font-weight: lighter;
          text-align: left;
        }
</style>
   <body>
    <div class="container-fluid">
    <div class="col-md-1">
      <div class="thumbnail">
      <span><i class="bi bi-phone" style="font-size: 35px; color:white"></i></span>
          <div class="caption">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Mobile</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Recharge or Pay Bill Mobile<h5>
                  <p class="text-success" style="font-weight:bold; font-size:15px;">
                    <input name="lang" type="radio"> Prepaid
                     &nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="lang" type="radio"> Postpaid  
                    </p>
                    <script>
                     function validation()
                     {
                     var language = document.form.lang;
                     for (var i = 0; i < language.length; i++) {
                     if (language[i].checked){
                     break;
                    }
                    }
                    if (i == language.length){
                    return document.getElementById("error").innerHTML = "Please check any radio button";
                    }
                    return document.getElementById("error").innerHTML = "You select option " + (i + 1);
                    }
                    </script>
                    <p>
                    <input type="tel" class="form-control no-border" id="phone" maxlength="13"
                    placeholder="Mobile Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    <script>
                    function myfunction(input_str) {
                    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
                    return re.test(input_str);
                    }
                    function myfunction(event) {
                    var phone = document.getElementById('phone').value;
                    if (!validatePhoneNumber(phone)) {
                    document.getElementById('phone').classList.remove('hidden');
                    } else {
                    document.getElementById('phone').classList.add('hidden');
                    alert("validation success")
                   }
                  event.preventDefault();
                  }
                  </script>
                    </p>
                    <p>
                     <select id="drop">
                      <option>&nbsp;Operator</option>
                      <option>&nbsp;AIRTEL</option>
                      <option>&nbsp;JIO</option>
                      <option>&nbsp;BSNL</option>
                      <option>&nbsp;VI</option>
                      <option>&nbsp;MTNL</option>
                     </select>
                    </p>
                    <p>
                    <select id="drop">
                      <option>&nbsp;State</option>
                      <option>&nbsp;Andhra Pradesh</option>
                      <option>&nbsp;Arunachal Pradesh</option>
                      <option>&nbsp;Assam</option>
                      <option>&nbsp;Bihar</option>
                      <option>&nbsp;Chhattisgarh</option>
                      <option>&nbsp;Goa</option>
                      <option>&nbsp;Gujarat</option>
                      <option>&nbsp;Haryana</option>
                      <option>&nbsp;Himachal Pradesh</option>
                      <option>&nbsp;Jharkhand</option>
                      <option>&nbsp;Karnataka</option>
                      <option>&nbsp;Kerala</option>
                      <option>&nbsp;Madhya Pradesh</option>
                      <option>&nbsp;Maharastra</option>
                      <option>&nbsp;Manipur</option>
                      <option>&nbsp;Meghalaya</option>
                      <option>&nbsp;Mizoram</option>
                      <option>&nbsp;Nagaland</option>
                      <option>&nbsp;Odisha</option>
                      <option>&nbsp;Punjab</option>
                      <option>&nbsp;Rajasthan</option>
                      <option>&nbsp;Sikkim</option>
                      <option>&nbsp;Tamil Nadu</option>
                      <option>&nbsp;Telangana</option>
                      <option>&nbsp;Tripura</option>
                      <option>&nbsp;Uttrakhand</option>
                      <option>&nbsp;Uttarpradesh</option>
                      <option>&nbsp;Westbengal</option>
                     </select>
                    <p>
                    <input type="email" class="form-control no-border" id="amount" maxlength="5"
                    placeholder="Amount" pattern="/^\d+\.\{0,1}+\d{0,2)+$/" required>
                    </p>
                    <script>
                      var amount    = /^\s*(\+|-)?((\d+(\.\d\d)?)|(\.\d\d))\s*$/;
                      function myfunction(s) {
                      return String(s).search (amount) != -1
                      }
                    </script>
                    <p>
                    <button class="dropbtn text-white bg-primary" onclick="myfunction()" id="btn" type="button">Proceed to Recharge</button>
                    </p>
                </li>
            </ul>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <span class="bi bi-lightbulb" style="font-size: 35px; color:white"></span>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Electric</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Pay Electricity Bill<h5>
                <p class="text-success" style="font-weight:bold; font-size:15px;">
                    <input type="radio" name="state"> State 
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    <input type="radio" name="state"> Aparment
                    </p>
                    <p>
                    <select id="drop">
                      <option>&nbsp;State</option>
                      <option>&nbsp;Andhra Pradesh</option>
                      <option>&nbsp;Arunachal Pradesh</option>
                      <option>&nbsp;Assam</option>
                      <option>&nbsp;Bihar</option>
                      <option>&nbsp;Chhattisgarh</option>
                      <option>&nbsp;Goa</option>
                      <option>&nbsp;Gujarat</option>
                      <option>&nbsp;Haryana</option>
                      <option>&nbsp;Himachal Pradesh</option>
                      <option>&nbsp;Jharkhand</option>
                      <option>&nbsp;Karnataka</option>
                      <option>&nbsp;Kerala</option>
                      <option>&nbsp;Madhya Pradesh</option>
                      <option>&nbsp;Maharastra</option>
                      <option>&nbsp;Manipur</option>
                      <option>&nbsp;Meghalaya</option>
                      <option>&nbsp;Mizoram</option>
                      <option>&nbsp;Nagaland</option>
                      <option>&nbsp;Odisha</option>
                      <option>&nbsp;Punjab</option>
                      <option>&nbsp;Rajasthan</option>
                      <option>&nbsp;Sikkim</option>
                      <option>&nbsp;Tamil Nadu</option>
                      <option>&nbsp;Telangana</option>
                      <option>&nbsp;Tripura</option>
                      <option>&nbsp;Uttrakhand</option>
                      <option>&nbsp;Uttarpradesh</option>
                      <option>&nbsp;Westbengal</option>
                     </select>
                    </p>
                    <p>
                    <select id="drop">
                      <option>&nbsp;City</option>
                      <option>Adoni</option>
                      <option>Amaravati</option>
                      <option>Anantapur</option>
                      <option>Chandragiri</option>
                      <option>Chittoor</option>
                      <option>Dowlaiswaram</option>
                      <option>Eluru</option>
                      <option>Guntur</option>
                      <option>Kadapa</option>
                      <option>Kakinada</option>
                      <option>Kurnool</option>
                      <option>Machilipatnam</option>
                      <option>Nagarjunakoṇḍa</option>
                      <option>Rajahmundry</option>
                      <option>Srikakulam</option>
                      <option>Tirupati</option>
                      <option>Vijayawada</option>
                      <option>Visakhapatnam</option>
                      <option>Vizianagaram</option>
                      <option>Yemmiganur</option>
                      <option>Itanagar</option>
                      <option>Dhuburi</option>
                      <option>Dispur</option>
                      <option>Guwahati</option>
                      <option>Jorhat</option>
                      <option>Nagaon</option>
                      <option>Sivasagar</option>
                      <option>Silchar</option>
                      <option>Tezpur</option>
                      <option>Tinsukia</option>
                      <option>Ara</option>
                      <option>Barauni</option>
                      <option>Begusarai</option>
                      <option>Bettiah</option>
                      <option>Bhagalpur</option>
                      <option>Bihar Sharif</option>
                      <option>Bodh Gaya</option>
                      <option>Buxar</option>
                      <option>Chapra</option>
                      <option>Darbhanga</option>
                      <option>Dehri</option>
                      <option>Dinapur Nizamat</option>
                      <option>Gaya</option>
                      <option>Hajipur</option>
                      <option>Jamalpur</option>
                      <option>Katihar</option>
                      <option>Madhubani</option>
                      <option>Motihari</option>
                      <option>Munger</option>
                      <option>Muzaffarpur</option>
                      <option>Patna</option>
                      <option>Purnia</option>
                      <option>Pusa</option>
                      <option>Saharsa</option>
                      <option>Samastipur</option>
                      <option>Sasaram</option>
                      <option>Sitamarhi</option>
                      <option>Siwan</option>
                      <option>Ambikapur</option>
                      <option>Bhilai</option>
                      <option>Bilaspur</option>
                      <option>Dhamtari</option>
                      <option>Durg</option>
                      <option>Jagdalpur</option>
                      <option>Raipur</option>
                      <option>Rajnandgaon</option>
                      <option>Delhi</option>
                      <option>New Delhi</option>
                      <option>Madgaon</option>
                      <option>Panaji</option>
                      <option>Ahmadabad</option>
                      <option>Amreli</option>
                      <option>Bharuch</option>
                      <option>Bhavnagar</option>
                      <option>Bhuj</option>
                      <option>Dwarka</option>
                      <option>Gandhinagar</option>
                      <option>Godhra</option>
                      <option>Jamnagar</option>
                      <option>Junagadh</option>
                      <option>Kandla</option>
                      <option>Khambhat</option>
                      <option>Kheda</option>
                      <option>Mahesana</option>
                      <option>Morbi</option>
                      <option>Nadiad</option>
                      <option>Navsari</option>
                      <option>Okha</option>
                      <option>Palanpur</option>
                      <option>Patan</option>
                      <option>Porbandar</option>
                      <option>Rajkot</option>
                      <option>Surat</option>
                      <option>Surendranagar</option>
                      <option>Valsad</option>
                      <option>Veraval</option>
                      <option>Ambala</option>
                      <option>Bhiwani</option>
                      <option>Chandigarh</option>
                      <option>Faridabad</option>
                      <option>Firozpur Jhirka</option>
                      <option>Gurugram</option>
                      <option>Hansi</option>
                      <option>Hisar</option>
                      <option>Jind</option>
                      <option>Kaithal</option>
                      <option>Karnal</option>
                      <option>Kurukshetra</option>
                      <option>Panipat</option>
                      <option>Pehowa</option>
                      <option>Rewari</option>
                      <option>Rohtak</option>
                      <option>Sirsa</option>
                      <option>Sonipat</option>
                      <option>Bilaspur</option>
                      <option>Chamba</option>
                      <option>Dalhousie</option>
                      <option>Dharmshala</option>
                      <option>Hamirpur</option>
                      <option>Kangra</option>
                      <option>Kullu</option>
                      <option>Mandi</option>
                      <option>Nahan</option>
                      <option>Shimla</option>
                      <option>Una</option>
                      <option>Anantnag</option>
                      <option>Baramula</option>
                      <option>Doda</option>
                      <option>Gulmarg</option>
                      <option>Jammu</option>
                      <option>Kathua</option>
                      <option>Punch</option>
                      <option>Rajouri</option>
                      <option>Srinagar</option>
                      <option>Udhampur</option>
                      <option>Bokaro</option>
                      <option>Chaibasa</option>
                      <option>Deoghar</option>
                      <option>Dhanbad</option>
                      <option>Dumka</option>
                      <option>Giridih</option>
                      <option>Hazaribag</option>
                      <option>Jamshedpur</option>
                      <option>Jharia</option>
                      <option>Rajmahal</option>
                      <option>Ranchi</option>
                      <option>Saraikela</option>
                      <option>Badami</option>
                      <option>Ballari</option>
                      <option>Bengaluru</option>
                      <option>Belagavi</option>
                      <option>Bhadravati</option>
                      <option>Bidar</option>
                      <option>Chikkamagaluru</option>
                      <option>Chitradurga</option>
                      <option>Davangere</option>
                      <option>Halebid</option>
                      <option>Hassan</option>
                      <option>Hubballi-Dharwad</option>
                      <option>Kalaburagi</option>
                      <option>Kolar</option>
                      <option>Madikeri</option>
                      <option>Mandya</option>
                      <option>Mangaluru</option>
                      <option>Mysuru</option>
                      <option>Raichur</option>
                      <option>Shivamogga</option>
                      <option>Shravanabelagola</option>
                      <option>Shrirangapattana</option>
                      <option>Tumakuru</option>
                      <option>Vijayapura</option>
                      <option>Alappuzha</option>
                      <option>Vatakara</option>
                      <option>Idukki</option>
                      <option>Kannur</option>
                      <option>Kochi</option>
                      <option>Kollam</option>
                      <option>Kottayam</option>
                      <option>Kozhikode</option>
                      <option>Mattancheri</option>
                      <option>Palakkad</option>
                      <option>Thalassery</option>
                      <option>Thiruvananthapuram</option>
                      <option>Thrissur</option>
                      <option>Balaghat</option>
                      <option>Barwani</option>
                      <option>Betul</option>
                      <option>Bharhut</option>
                      <option>Bhind</option>
                      <option>Bhojpur</option>
                      <option>Bhopal</option>
                      <option>Burhanpur</option>
                      <option>Chhatarpur</option>
                      <option>Chhindwara</option>
                      <option>Damoh</option>
                      <option>Datia</option>
                      <option>Dewas</option>
                      <option>Dhar</option>
                      <option>Ambedkar Nagar</option>
                      <option>Guna</option>
                      <option>Gwalior</option>
                      <option>Hoshangabad</option>
                      <option>Indore</option>
                      <option>Itarsi</option>
                      <option>Jabalpur</option>
                      <option>Jhabua</option>
                      <option>Khajuraho</option>
                      <option>Khandwa</option>
                      <option>Khargone</option>
                      <option>Maheshwar</option>
                      <option>Mandla</option>
                      <option>Mandsaur</option>
                      <option>Morena</option>
                      <option>Murwara</option>
                      <option>Narsimhapur</option>
                      <option>Narsinghgarh</option>
                      <option>Narwar</option>
                      <option>Neemuch</option>
                      <option>Nowgong</option>
                      <option>Orchha</option>
                      <option>Panna</option>
                      <option>Raisen</option>
                      <option>Rajgarh</option>
                      <option>Ratlam</option>
                      <option>Rewa</option>
                      <option>Sagar</option>
                      <option>Sarangpur</option>
                      <option>Satna</option>
                      <option>Sehore</option>
                      <option>Seoni</option>
                      <option>Shahdol</option>
                      <option>Shajapur</option>
                      <option>Sheopur</option>
                      <option>Shivpuri</option>
                      <option>Ujjain</option>
                      <option>Vidisha</option>
                      <option>Ahmadnagar</option>
                      <option>Akola</option>
                      <option>Amravati</option>
                      <option>Aurangabad</option>
                      <option>Bhandara</option>
                      <option>Bhusawal</option>
                      <option>Bid</option>
                      <option>Buldhana</option>
                      <option>Chandrapur</option>
                      <option>Daulatabad</option>
                      <option>Dhule</option>
                      <option>Jalgaon</option>
                      <option>Kalyan</option>
                      <option>Karli</option>
                      <option>Kolhapur</option>
                      <option>Mahabaleshwar</option>
                      <option>Malegaon</option>
                      <option>Malegaon</option>
                      <option>Matheran</option>
                      <option>Mumbai</option>
                      <option>Nagpur</option>
                      <option>Nanded</option>
                      <option>Nashik</option>
                      <option>Osmanabad</option>
                      <option>Pandharpur</option>
                      <option>Parbhani</option>
                      <option>Pune</option>
                      <option>Ratnagiri</option>
                      <option>Sangli</option>
                      <option>Satara</option>
                      <option>Sevagram</option>
                      <option>Solapur</option>
                      <option>Thane</option>
                      <option>Ulhasnagar</option>
                      <option>Vasai-Virar</option>
                      <option>Wardha</option>
                      <option>Yavatmal</option>
                      <option>Imphal</option>
                      <option>Cherrapunji</option>
                      <option>Shillong</option>
                      <option>Aizawl</option>
                      <option>Lunglei</option>
                      <option>Kohima</option>
                      <option>Mon</option>
                      <option>Phek</option>
                      <option>Wokha</option>
                      <option>Zunheboto</option>
                      <option>Balangir</option>
                      <option>Baleshwar</option>
                      <option>Baripada</option>
                      <option>Bhubaneshwar</option>
                      <option>Brahmapur</option>
                      <option>Cuttack</option>
                      <option>Dhenkanal</option>
                      <option>Kendujhar</option>
                      <option>Konark</option>
                      <option>Koraput</option>
                      <option>Paradip</option>
                      <option>Phulabani</option>
                      <option>Puri</option>
                      <option>Sambalpur</option>
                      <option>Udayagiri</option>
                      <option>Amritsar</option>
                      <option>Batala</option>
                      <option>Chandigarh</option>
                      <option>Faridkot</option>
                      <option>Firozpur</option>
                      <option>Gurdaspur</option>
                      <option>Hoshiarpur</option>
                      <option>Jalandhar</option>
                      <option>Kapurthala</option>
                      <option>Ludhiana</option>
                      <option>Nabha</option>
                      <option>Patiala</option>
                      <option>Rupnagar</option>
                      <option>Sangrur</option>
                      <option>Abu</option>
                      <option>Ajmer</option>
                      <option>Alwar</option>
                      <option>Amer</option>
                      <option>Barmer</option>
                      <option>Beawar</option>
                      <option>Bharatpur</option>
                      <option>Bhilwara</option>
                      <option>Bikaner</option>
                      <option>Bundi</option>
                      <option>Chittaurgarh</option>
                      <option>Churu</option>
                      <option>Dhaulpur</option>
                      <option>Dungarpur</option>
                      <option>Ganganagar</option>
                      <option>Hanumangarh</option>
                      <option>Jaipur</option>
                      <option>Jaisalmer</option>
                      <option>Jalor</option>
                      <option>Jhalawar</option>
                      <option>Jhunjhunu</option>
                      <option>Jodhpur</option>
                      <option>Kishangarh</option>
                      <option>Kota</option>
                      <option>Merta</option>
                      <option>Nagaur</option>
                      <option>Nathdwara</option>
                      <option>Pali</option>
                      <option>Phalodi</option>
                      <option>Pushkar</option>
                      <option>Sawai Madhopur</option>
                      <option>Shahpura</option>
                      <option>Sikar</option>
                      <option>Sirohi</option>
                      <option>Tonk</option>
                      <option>Udaipur</option>
                      <option>Gangtok</option>
                      <option>Gyalshing</option>
                      <option>Lachung</option>
                      <option>Mangan</option>
                      <option>Arcot</option>
                      <option>Chengalpattu</option>
                      <option>Chennai</option>
                      <option>Chidambaram</option>
                      <option>Coimbatore</option>
                      <option>Cuddalore</option>
                      <option>Dharmapuri</option>
                      <option>Dindigul</option>
                      <option>Erode</option>
                      <option>Kanchipuram</option>
                      <option>Kanniyakumari</option>
                      <option>Kodaikanal</option>
                      <option>Kumbakonam</option>
                      <option>Madurai</option>
                      <option>Mamallapuram</option>
                      <option>Nagappattinam</option>
                      <option>Nagercoil</option>
                      <option>Palayamkottai</option>
                      <option>Pudukkottai</option>
                      <option>Rajapalayam</option>
                      <option>Ramanathapuram</option>
                      <option>Salem</option>
                      <option>Thanjavur</option>
                      <option>Tiruchchirappalli</option>
                      <option>Tirunelveli</option>
                      <option>Tiruppur</option>
                      <option>Thoothukudi</option>
                      <option>Udhagamandalam</option>
                      <option>Vellore</option>
                      <option>Hyderabad</option>
                      <option>Karimnagar</option>
                      <option>Khammam</option>
                      <option>Mahbubnagar</option>
                      <option>Nizamabad</option>
                      <option>Sangareddi</option>
                      <option>Warangal</option>
                      <option>Agartala</option>
                      <option>Agra</option>
                      <option>Aligarh</option>
                      <option>Amroha</option>
                      <option>Ayodhya</option>
                      <option>Azamgarh</option>
                      <option>Bahraich</option>
                      <option>Ballia</option>
                      <option>Banda</option>
                      <option>Bara Banki</option>
                      <option>Bareilly</option>
                      <option>Basti</option>
                      <option>Bijnor</option>
                      <option>Bithur</option>
                      <option>Budaun</option>
                      <option>Bulandshahr</option>
                      <option>Deoria</option>
                      <option>Etah</option>
                      <option>Etawah</option>
                      <option>Faizabad</option>
                      <option>Farrukhabad-cum-Fatehgarh</option>
                      <option>Fatehpur</option>
                      <option>Fatehpur Sikri</option>
                      <option>Ghaziabad</option>
                      <option>Ghazipur</option>
                      <option>Gonda</option>
                      <option>Gorakhpur</option>
                      <option>Hamirpur</option>
                      <option>Hardoi</option>
                      <option>Hathras</option>
                      <option>Jalaun</option>
                      <option>Jaunpur</option>
                      <option>Jhansi</option>
                      <option>Kannauj</option>
                      <option>Kanpur</option>
                      <option>Lakhimpur</option>
                      <option>Lalitpur</option>
                      <option>Lucknow</option>
                      <option>Mainpuri</option>
                      <option>Mathura</option>
                      <option>Meerut</option>
                      <option>Mirzapur-Vindhyachal</option>
                      <option>Moradabad</option>
                      <option>Muzaffarnagar</option>
                      <option>Partapgarh</option>
                      <option>Pilibhit</option>
                      <option>Prayagraj</option>
                      <option>Rae Bareli</option>
                      <option>Rampur</option>
                      <option>Saharanpur</option>
                      <option>Sambhal</option>
                      <option>Shahjahanpur</option>
                      <option>Sitapur</option>
                      <option>Sultanpur</option>
                      <option>Tehri</option>
                      <option>Varanasi</option>
                      <option>Almora</option>
                      <option>Dehra Dun</option>
                      <option>Haridwar</option>
                      <option>Mussoorie</option>
                      <option>Nainital</option>
                      <option>Pithoragarh</option>
                      <option>Alipore</option>
                      <option>Alipur Duar</option>
                      <option>Asansol</option>
                      <option>Baharampur</option>
                      <option>Bally</option>
                      <option>Balurghat</option>
                      <option>Bankura</option>
                      <option>Baranagar</option>
                      <option>Barasat</option>
                      <option>Barrackpore</option>
                      <option>Basirhat</option>
                      <option>Bhatpara</option>
                      <option>Bishnupur</option>
                      <option>Budge Budge</option>
                      <option>Burdwan</option>
                      <option>Chandernagore</option>
                      <option>Alipore</option>
                      <option>Alipur Duar</option>
                      <option>Asansol</option>
                      <option>Baharampur</option>
                      <option>Bally</option>
                      <option>Balurghat</option>
                      <option>Bankura</option>
                      <option>Baranagar</option>
                      <option>Barasat</option>
                      <option>Barrackpore</option>
                      <option>Basirhat</option>
                      <option>Bhatpara</option>
                      <option>Bishnupur</option>
                      <option>Budge Budge</option>
                      <option>Burdwan</option>
                      <option>Chandernagore</option>
                      <option>Malda</option>
                      <option>Midnapore</option>
                      <option>Murshidabad</option>
                      <option>Nabadwip</option>
                      <option>Palashi</option>
                      <option>Panihati</option>
                      <option>Purulia</option>
                      <option>Raiganj</option>
                      <option>Santipur</option>
                      <option>Shantiniketan</option>
                      <option>Shrirampur</option>
                      <option>Siliguri</option>
                      <option>Siuri</option>
                      <option>Tamluk</option>
                      <option>Titagarh</option>
                    </p>
                    <p>
                    <input type="email" class="form-control no-border" id="mn" placeholder="Account Number" maxlength="8">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" onclick="myfunction()" id="btn" type="button">Pay Electricity Bill</button>
                    </p>
                    <script>
                    function Validate()
                    {
                    var e = document.getElementById("ddlView");
                    var strUser = e.options[e.selectedIndex].value;
                    var strUser1 = e.options[e.selectedIndex].text;
                    if(strUser==0)
                    {
                    alert("Please select a user");
                    }
                 }
                 </script>
          </div>
        </a>
      </div>
      <script>
                     function validation()
                     {
                     var states = document.form.state;
                     for (var i = 0; i < language.length; i++) {
                     if (language[i].checked){
                     break;
                    }
                    }
                    if (i == language.length){
                    return document.getElementById("error").innerHTML = "Please check any radio button";
                    }
                    return document.getElementById("error").innerHTML = "You select option " + (i + 1);
                    }
                    </script>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="_blank">
        <i class="bi bi-tv" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">DTH</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Recharge DTH or TV<h5>
                     <p>
                     <select id="drop">
                      <option>&nbsp;Operator</option>
                      <option>&nbsp;TATASKY</option>
                      <option>&nbsp;AIRTEL</option>
                      <option>&nbsp;DISH TV</option>
                      <option>&nbsp;d2h</option>
                      <option>&nbsp;Sun Direct</option>
                     </select>
                    </p>
                    <p>
                    <input type="text" class="form-control no-border" id="subcriber" maxlength="10" placeholder="Subscriber ID">
                    </p>
                    <button class="dropbtn text-white bg-primary" id="btn" type="button">Proceed to Recharge</button>
                    </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <i class="bi bi-fuel-pump" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Gas</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Book LPG Gas Cylinder<h5>
                <p class="text-success" style="font-weight:bold; font-size:15px;">
                    <input name="gas" type="radio"> Pay Gas Bill
                     &nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="gas" type="radio"> Book a Cylinder
                    </p>
                    <p>
                    <p>
                     <select id="drop">
                      <option>&nbsp;Gas provider</option>
                      <option>&nbsp;Indane Gas</option>
                      <option>&nbsp;Bharat Gas</option>
                      <option>&nbsp;HP Gas</option>
                     </select>
                    </p>
                    <p>
                    <input type="tel" class="form-control no-border" id="phone" placeholder="Register Mobile Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </p>
                    <script>
                    function phone(input_str) {
                    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
                    return re.test(input_str);
                    }
                    function phone(event) {
                    var phone = document.getElementById('phone').value;
                    if (!validatePhoneNumber(phone)) {
                    document.getElementById('phone_error').classList.remove('hidden');
                    } else {
                    document.getElementById('phone_error').classList.add('hidden');
                    alert("validation success")
                   }
                  event.preventDefault();
                  }
                  </script>
                    <p>
                    <input type="text" class="form-control no-border" id="agency" maxlength="15" placeholder="Gas Agency">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" onclick="phone()" id="btn" type="button">Proceed</button>
                    </p>
          </div>
        </a>
      </div>
      <script>
                     function validation()
                     {
                     var states = document.form.gas;
                     for (var i = 0; i < language.length; i++) {
                     if (language[i].checked){
                     break;
                    }
                    }
                    if (i == language.length){
                    return document.getElementById("error").innerHTML = "Please check any radio button";
                    }
                    return document.getElementById("error").innerHTML = "You select option " + (i + 1);
                    }
    </script>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <i class="bi bi-router" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Brband</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Pay Broadband / Landline Bill<h5>
                    <p>
                    <input type="email" class="form-control no-border" id="broad" maxlength="16" placeholder="Pay Broadband / Landline Bill">
                    </p>
                    <p>
                    <input type="email" class="form-control no-border" id="bill" maxlength="12" placeholder="Phone number with (STD code)">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" id="btn" type="button">Get Bill</button>
                    </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <i class="bi bi-train-lightrail-front" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Metro</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Metro Smart Card Recharge<h5>
                    <p>
                    <input type="text" class="form-control no-border" id="nam" maxlength="10"  placeholder="Metro">
                    </p>
                    <p>
                    <input type="text" class="form-control no-border" id="mn" maxlength="12" placeholder="Card Number">
                    </p>
                    <p>
                    <input type="text" class="form-control no-border" id="mn" maxlength="6" placeholder="Amount">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" id="btn" type="button">Proceed</button>
                  </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <i class="bi bi-book" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Educate</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Pay Your Fee<h5>
                    <p>
                    <select id="drop">
                      <option>&nbsp;State</option>
                      <option>&nbsp;Andhra Pradesh</option>
                      <option>&nbsp;Arunachal Pradesh</option>
                      <option>&nbsp;Assam</option>
                      <option>&nbsp;Bihar</option>
                      <option>&nbsp;Chhattisgarh</option>
                      <option>&nbsp;Goa</option>
                      <option>&nbsp;Gujarat</option>
                      <option>&nbsp;Haryana</option>
                      <option>&nbsp;Himachal Pradesh</option>
                      <option>&nbsp;Jharkhand</option>
                      <option>&nbsp;Karnataka</option>
                      <option>&nbsp;Kerala</option>
                      <option>&nbsp;Madhya Pradesh</option>
                      <option>&nbsp;Maharastra</option>
                      <option>&nbsp;Manipur</option>
                      <option>&nbsp;Meghalaya</option>
                      <option>&nbsp;Mizoram</option>
                      <option>&nbsp;Nagaland</option>
                      <option>&nbsp;Odisha</option>
                      <option>&nbsp;Punjab</option>
                      <option>&nbsp;Rajasthan</option>
                      <option>&nbsp;Sikkim</option>
                      <option>&nbsp;Tamil Nadu</option>
                      <option>&nbsp;Telangana</option>
                      <option>&nbsp;Tripura</option>
                      <option>&nbsp;Uttrakhand</option>
                      <option>&nbsp;Uttarpradesh</option>
                      <option>&nbsp;Westbengal</option>
                     </select>
                    </p>
                    <p>
                    <select id="drop">
                      <option>&nbsp;City</option>
                      <option>Adoni</option>
                      <option>Amaravati</option>
                      <option>Anantapur</option>
                      <option>Chandragiri</option>
                      <option>Chittoor</option>
                      <option>Dowlaiswaram</option>
                      <option>Eluru</option>
                      <option>Guntur</option>
                      <option>Kadapa</option>
                      <option>Kakinada</option>
                      <option>Kurnool</option>
                      <option>Machilipatnam</option>
                      <option>Nagarjunakoṇḍa</option>
                      <option>Rajahmundry</option>
                      <option>Srikakulam</option>
                      <option>Tirupati</option>
                      <option>Vijayawada</option>
                      <option>Visakhapatnam</option>
                      <option>Vizianagaram</option>
                      <option>Yemmiganur</option>
                      <option>Itanagar</option>
                      <option>Dhuburi</option>
                      <option>Dispur</option>
                      <option>Guwahati</option>
                      <option>Jorhat</option>
                      <option>Nagaon</option>
                      <option>Sivasagar</option>
                      <option>Silchar</option>
                      <option>Tezpur</option>
                      <option>Tinsukia</option>
                      <option>Ara</option>
                      <option>Barauni</option>
                      <option>Begusarai</option>
                      <option>Bettiah</option>
                      <option>Bhagalpur</option>
                      <option>Bihar Sharif</option>
                      <option>Bodh Gaya</option>
                      <option>Buxar</option>
                      <option>Chapra</option>
                      <option>Darbhanga</option>
                      <option>Dehri</option>
                      <option>Dinapur Nizamat</option>
                      <option>Gaya</option>
                      <option>Hajipur</option>
                      <option>Jamalpur</option>
                      <option>Katihar</option>
                      <option>Madhubani</option>
                      <option>Motihari</option>
                      <option>Munger</option>
                      <option>Muzaffarpur</option>
                      <option>Patna</option>
                      <option>Purnia</option>
                      <option>Pusa</option>
                      <option>Saharsa</option>
                      <option>Samastipur</option>
                      <option>Sasaram</option>
                      <option>Sitamarhi</option>
                      <option>Siwan</option>
                      <option>Ambikapur</option>
                      <option>Bhilai</option>
                      <option>Bilaspur</option>
                      <option>Dhamtari</option>
                      <option>Durg</option>
                      <option>Jagdalpur</option>
                      <option>Raipur</option>
                      <option>Rajnandgaon</option>
                      <option>Delhi</option>
                      <option>New Delhi</option>
                      <option>Madgaon</option>
                      <option>Panaji</option>
                      <option>Ahmadabad</option>
                      <option>Amreli</option>
                      <option>Bharuch</option>
                      <option>Bhavnagar</option>
                      <option>Bhuj</option>
                      <option>Dwarka</option>
                      <option>Gandhinagar</option>
                      <option>Godhra</option>
                      <option>Jamnagar</option>
                      <option>Junagadh</option>
                      <option>Kandla</option>
                      <option>Khambhat</option>
                      <option>Kheda</option>
                      <option>Mahesana</option>
                      <option>Morbi</option>
                      <option>Nadiad</option>
                      <option>Navsari</option>
                      <option>Okha</option>
                      <option>Palanpur</option>
                      <option>Patan</option>
                      <option>Porbandar</option>
                      <option>Rajkot</option>
                      <option>Surat</option>
                      <option>Surendranagar</option>
                      <option>Valsad</option>
                      <option>Veraval</option>
                      <option>Ambala</option>
                      <option>Bhiwani</option>
                      <option>Chandigarh</option>
                      <option>Faridabad</option>
                      <option>Firozpur Jhirka</option>
                      <option>Gurugram</option>
                      <option>Hansi</option>
                      <option>Hisar</option>
                      <option>Jind</option>
                      <option>Kaithal</option>
                      <option>Karnal</option>
                      <option>Kurukshetra</option>
                      <option>Panipat</option>
                      <option>Pehowa</option>
                      <option>Rewari</option>
                      <option>Rohtak</option>
                      <option>Sirsa</option>
                      <option>Sonipat</option>
                      <option>Bilaspur</option>
                      <option>Chamba</option>
                      <option>Dalhousie</option>
                      <option>Dharmshala</option>
                      <option>Hamirpur</option>
                      <option>Kangra</option>
                      <option>Kullu</option>
                      <option>Mandi</option>
                      <option>Nahan</option>
                      <option>Shimla</option>
                      <option>Una</option>
                      <option>Anantnag</option>
                      <option>Baramula</option>
                      <option>Doda</option>
                      <option>Gulmarg</option>
                      <option>Jammu</option>
                      <option>Kathua</option>
                      <option>Punch</option>
                      <option>Rajouri</option>
                      <option>Srinagar</option>
                      <option>Udhampur</option>
                      <option>Bokaro</option>
                      <option>Chaibasa</option>
                      <option>Deoghar</option>
                      <option>Dhanbad</option>
                      <option>Dumka</option>
                      <option>Giridih</option>
                      <option>Hazaribag</option>
                      <option>Jamshedpur</option>
                      <option>Jharia</option>
                      <option>Rajmahal</option>
                      <option>Ranchi</option>
                      <option>Saraikela</option>
                      <option>Badami</option>
                      <option>Ballari</option>
                      <option>Bengaluru</option>
                      <option>Belagavi</option>
                      <option>Bhadravati</option>
                      <option>Bidar</option>
                      <option>Chikkamagaluru</option>
                      <option>Chitradurga</option>
                      <option>Davangere</option>
                      <option>Halebid</option>
                      <option>Hassan</option>
                      <option>Hubballi-Dharwad</option>
                      <option>Kalaburagi</option>
                      <option>Kolar</option>
                      <option>Madikeri</option>
                      <option>Mandya</option>
                      <option>Mangaluru</option>
                      <option>Mysuru</option>
                      <option>Raichur</option>
                      <option>Shivamogga</option>
                      <option>Shravanabelagola</option>
                      <option>Shrirangapattana</option>
                      <option>Tumakuru</option>
                      <option>Vijayapura</option>
                      <option>Alappuzha</option>
                      <option>Vatakara</option>
                      <option>Idukki</option>
                      <option>Kannur</option>
                      <option>Kochi</option>
                      <option>Kollam</option>
                      <option>Kottayam</option>
                      <option>Kozhikode</option>
                      <option>Mattancheri</option>
                      <option>Palakkad</option>
                      <option>Thalassery</option>
                      <option>Thiruvananthapuram</option>
                      <option>Thrissur</option>
                      <option>Balaghat</option>
                      <option>Barwani</option>
                      <option>Betul</option>
                      <option>Bharhut</option>
                      <option>Bhind</option>
                      <option>Bhojpur</option>
                      <option>Bhopal</option>
                      <option>Burhanpur</option>
                      <option>Chhatarpur</option>
                      <option>Chhindwara</option>
                      <option>Damoh</option>
                      <option>Datia</option>
                      <option>Dewas</option>
                      <option>Dhar</option>
                      <option>Ambedkar Nagar</option>
                      <option>Guna</option>
                      <option>Gwalior</option>
                      <option>Hoshangabad</option>
                      <option>Indore</option>
                      <option>Itarsi</option>
                      <option>Jabalpur</option>
                      <option>Jhabua</option>
                      <option>Khajuraho</option>
                      <option>Khandwa</option>
                      <option>Khargone</option>
                      <option>Maheshwar</option>
                      <option>Mandla</option>
                      <option>Mandsaur</option>
                      <option>Morena</option>
                      <option>Murwara</option>
                      <option>Narsimhapur</option>
                      <option>Narsinghgarh</option>
                      <option>Narwar</option>
                      <option>Neemuch</option>
                      <option>Nowgong</option>
                      <option>Orchha</option>
                      <option>Panna</option>
                      <option>Raisen</option>
                      <option>Rajgarh</option>
                      <option>Ratlam</option>
                      <option>Rewa</option>
                      <option>Sagar</option>
                      <option>Sarangpur</option>
                      <option>Satna</option>
                      <option>Sehore</option>
                      <option>Seoni</option>
                      <option>Shahdol</option>
                      <option>Shajapur</option>
                      <option>Sheopur</option>
                      <option>Shivpuri</option>
                      <option>Ujjain</option>
                      <option>Vidisha</option>
                      <option>Ahmadnagar</option>
                      <option>Akola</option>
                      <option>Amravati</option>
                      <option>Aurangabad</option>
                      <option>Bhandara</option>
                      <option>Bhusawal</option>
                      <option>Bid</option>
                      <option>Buldhana</option>
                      <option>Chandrapur</option>
                      <option>Daulatabad</option>
                      <option>Dhule</option>
                      <option>Jalgaon</option>
                      <option>Kalyan</option>
                      <option>Karli</option>
                      <option>Kolhapur</option>
                      <option>Mahabaleshwar</option>
                      <option>Malegaon</option>
                      <option>Malegaon</option>
                      <option>Matheran</option>
                      <option>Mumbai</option>
                      <option>Nagpur</option>
                      <option>Nanded</option>
                      <option>Nashik</option>
                      <option>Osmanabad</option>
                      <option>Pandharpur</option>
                      <option>Parbhani</option>
                      <option>Pune</option>
                      <option>Ratnagiri</option>
                      <option>Sangli</option>
                      <option>Satara</option>
                      <option>Sevagram</option>
                      <option>Solapur</option>
                      <option>Thane</option>
                      <option>Ulhasnagar</option>
                      <option>Vasai-Virar</option>
                      <option>Wardha</option>
                      <option>Yavatmal</option>
                      <option>Imphal</option>
                      <option>Cherrapunji</option>
                      <option>Shillong</option>
                      <option>Aizawl</option>
                      <option>Lunglei</option>
                      <option>Kohima</option>
                      <option>Mon</option>
                      <option>Phek</option>
                      <option>Wokha</option>
                      <option>Zunheboto</option>
                      <option>Balangir</option>
                      <option>Baleshwar</option>
                      <option>Baripada</option>
                      <option>Bhubaneshwar</option>
                      <option>Brahmapur</option>
                      <option>Cuttack</option>
                      <option>Dhenkanal</option>
                      <option>Kendujhar</option>
                      <option>Konark</option>
                      <option>Koraput</option>
                      <option>Paradip</option>
                      <option>Phulabani</option>
                      <option>Puri</option>
                      <option>Sambalpur</option>
                      <option>Udayagiri</option>
                      <option>Amritsar</option>
                      <option>Batala</option>
                      <option>Chandigarh</option>
                      <option>Faridkot</option>
                      <option>Firozpur</option>
                      <option>Gurdaspur</option>
                      <option>Hoshiarpur</option>
                      <option>Jalandhar</option>
                      <option>Kapurthala</option>
                      <option>Ludhiana</option>
                      <option>Nabha</option>
                      <option>Patiala</option>
                      <option>Rupnagar</option>
                      <option>Sangrur</option>
                      <option>Abu</option>
                      <option>Ajmer</option>
                      <option>Alwar</option>
                      <option>Amer</option>
                      <option>Barmer</option>
                      <option>Beawar</option>
                      <option>Bharatpur</option>
                      <option>Bhilwara</option>
                      <option>Bikaner</option>
                      <option>Bundi</option>
                      <option>Chittaurgarh</option>
                      <option>Churu</option>
                      <option>Dhaulpur</option>
                      <option>Dungarpur</option>
                      <option>Ganganagar</option>
                      <option>Hanumangarh</option>
                      <option>Jaipur</option>
                      <option>Jaisalmer</option>
                      <option>Jalor</option>
                      <option>Jhalawar</option>
                      <option>Jhunjhunu</option>
                      <option>Jodhpur</option>
                      <option>Kishangarh</option>
                      <option>Kota</option>
                      <option>Merta</option>
                      <option>Nagaur</option>
                      <option>Nathdwara</option>
                      <option>Pali</option>
                      <option>Phalodi</option>
                      <option>Pushkar</option>
                      <option>Sawai Madhopur</option>
                      <option>Shahpura</option>
                      <option>Sikar</option>
                      <option>Sirohi</option>
                      <option>Tonk</option>
                      <option>Udaipur</option>
                      <option>Gangtok</option>
                      <option>Gyalshing</option>
                      <option>Lachung</option>
                      <option>Mangan</option>
                      <option>Arcot</option>
                      <option>Chengalpattu</option>
                      <option>Chennai</option>
                      <option>Chidambaram</option>
                      <option>Coimbatore</option>
                      <option>Cuddalore</option>
                      <option>Dharmapuri</option>
                      <option>Dindigul</option>
                      <option>Erode</option>
                      <option>Kanchipuram</option>
                      <option>Kanniyakumari</option>
                      <option>Kodaikanal</option>
                      <option>Kumbakonam</option>
                      <option>Madurai</option>
                      <option>Mamallapuram</option>
                      <option>Nagappattinam</option>
                      <option>Nagercoil</option>
                      <option>Palayamkottai</option>
                      <option>Pudukkottai</option>
                      <option>Rajapalayam</option>
                      <option>Ramanathapuram</option>
                      <option>Salem</option>
                      <option>Thanjavur</option>
                      <option>Tiruchchirappalli</option>
                      <option>Tirunelveli</option>
                      <option>Tiruppur</option>
                      <option>Thoothukudi</option>
                      <option>Udhagamandalam</option>
                      <option>Vellore</option>
                      <option>Hyderabad</option>
                      <option>Karimnagar</option>
                      <option>Khammam</option>
                      <option>Mahbubnagar</option>
                      <option>Nizamabad</option>
                      <option>Sangareddi</option>
                      <option>Warangal</option>
                      <option>Agartala</option>
                      <option>Agra</option>
                      <option>Aligarh</option>
                      <option>Amroha</option>
                      <option>Ayodhya</option>
                      <option>Azamgarh</option>
                      <option>Bahraich</option>
                      <option>Ballia</option>
                      <option>Banda</option>
                      <option>Bara Banki</option>
                      <option>Bareilly</option>
                      <option>Basti</option>
                      <option>Bijnor</option>
                      <option>Bithur</option>
                      <option>Budaun</option>
                      <option>Bulandshahr</option>
                      <option>Deoria</option>
                      <option>Etah</option>
                      <option>Etawah</option>
                      <option>Faizabad</option>
                      <option>Farrukhabad-cum-Fatehgarh</option>
                      <option>Fatehpur</option>
                      <option>Fatehpur Sikri</option>
                      <option>Ghaziabad</option>
                      <option>Ghazipur</option>
                      <option>Gonda</option>
                      <option>Gorakhpur</option>
                      <option>Hamirpur</option>
                      <option>Hardoi</option>
                      <option>Hathras</option>
                      <option>Jalaun</option>
                      <option>Jaunpur</option>
                      <option>Jhansi</option>
                      <option>Kannauj</option>
                      <option>Kanpur</option>
                      <option>Lakhimpur</option>
                      <option>Lalitpur</option>
                      <option>Lucknow</option>
                      <option>Mainpuri</option>
                      <option>Mathura</option>
                      <option>Meerut</option>
                      <option>Mirzapur-Vindhyachal</option>
                      <option>Moradabad</option>
                      <option>Muzaffarnagar</option>
                      <option>Partapgarh</option>
                      <option>Pilibhit</option>
                      <option>Prayagraj</option>
                      <option>Rae Bareli</option>
                      <option>Rampur</option>
                      <option>Saharanpur</option>
                      <option>Sambhal</option>
                      <option>Shahjahanpur</option>
                      <option>Sitapur</option>
                      <option>Sultanpur</option>
                      <option>Tehri</option>
                      <option>Varanasi</option>
                      <option>Almora</option>
                      <option>Dehra Dun</option>
                      <option>Haridwar</option>
                      <option>Mussoorie</option>
                      <option>Nainital</option>
                      <option>Pithoragarh</option>
                      <option>Alipore</option>
                      <option>Alipur Duar</option>
                      <option>Asansol</option>
                      <option>Baharampur</option>
                      <option>Bally</option>
                      <option>Balurghat</option>
                      <option>Bankura</option>
                      <option>Baranagar</option>
                      <option>Barasat</option>
                      <option>Barrackpore</option>
                      <option>Basirhat</option>
                      <option>Bhatpara</option>
                      <option>Bishnupur</option>
                      <option>Budge Budge</option>
                      <option>Burdwan</option>
                      <option>Chandernagore</option>
                      <option>Alipore</option>
                      <option>Alipur Duar</option>
                      <option>Asansol</option>
                      <option>Baharampur</option>
                      <option>Bally</option>
                      <option>Balurghat</option>
                      <option>Bankura</option>
                      <option>Baranagar</option>
                      <option>Barasat</option>
                      <option>Barrackpore</option>
                      <option>Basirhat</option>
                      <option>Bhatpara</option>
                      <option>Bishnupur</option>
                      <option>Budge Budge</option>
                      <option>Burdwan</option>
                      <option>Chandernagore</option>
                      <option>Malda</option>
                      <option>Midnapore</option>
                      <option>Murshidabad</option>
                      <option>Nabadwip</option>
                      <option>Palashi</option>
                      <option>Panihati</option>
                      <option>Purulia</option>
                      <option>Raiganj</option>
                      <option>Santipur</option>
                      <option>Shantiniketan</option>
                      <option>Shrirampur</option>
                      <option>Siliguri</option>
                      <option>Siuri</option>
                      <option>Tamluk</option>
                      <option>Titagarh</option>
                    </p>
                    <p>
                    <input type="text" class="form-control no-border" id="ins" maxlength="15" placeholder="Insitute Name" pattern="/^[a-zA-Z0-9_]+$/" required>
                    </p>
                    <p>
                    <input type="email" class="form-control no-border" id="mn" maxlength="15" placeholder="Insitute Location">
                    </p>
                    <p>
                    <input type="email" class="form-control no-border" id="mn" maxlength="6" placeholder="PINCODE">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" id="btn" type="button">Proceed</button>
                    </p>
          </div> 
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <i class="bi bi-fuel-pump-fill" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Fuel</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Pay Fuel Amount<h5>
                    <p>
                    <input type="email" class="form-control no-border" id="mn" placeholder="Amount">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" id="btn" type="button">Scan Barcode Proceed</button>
                    </p>
          </div> 
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <i class="bi bi-droplet" style="font-size: 35px; color:white"></i>
          <div class="caption">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b style="color:white;">Water</b>
            </a>
            <ul class="dropdown-menu border-primary" mr-5 id="more" aria-labelledby="navbarDropdown">
              <li id="mobile">
                <h5 class="text-primary">Pay Water Bill<h5>
                    <p>
                    <input type="email" class="form-control no-border" id="mn" placeholder="Water Board">
                    </p>
                    <p>
                    <input type="email" class="form-control no-border" id="mn" placeholder="RR.Number">
                    </p>
                    <p>
                    <button class="dropbtn text-white bg-primary" id="btn" type="button">Proceed</button>
                  </p>
          </div> 
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="container-fluid" style="background-color: lightblue;">
      <h2 class="text-black">PAYMENT FIXRATE RECHARGE INSTRUMENTS</h2>
      <div class="container">
      <img id="ban" src="https://assetscdn1.paytm.com/images/catalog/view_item/728701/1618577020961.png">
        <div class="wallet">
          <span><i class="bi bi-wallet" style="font-size: 55px; color:black;"></i>
          <b class="text-white" style="font-weight:bold;">FIXRATE WALLET</b></span>
          <br>
          <br>
          <h1 class="text-black">The Fastest Way to<br>Pay In-store & Online.</h1>
          <p>
            <br>
            <p>Recharge or Book or Buy Product through our FIXRATE websites
               in a jiffy at over 32 stores, websites and apps.</p>
            <button class="dropbtn text-white bg-black" id="btn" type="button">Download the App</button>
          </p>
        </div>
      </div>
    </div>
</body>
</html>   