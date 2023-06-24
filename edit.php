<!DOCTYPE html>
<html>
    <head>
        <title>Address</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
     .navbar{
        background-color: green;
        color: white;
     }

     .navbar-brand{
        font-size: 25px;
    } 

    @media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
} 

    .quickSearchContainer {
    margin-left: 10px;
    margin-top: 20px;
}

.quickSearchSubHeding {
    text-align: left;
    color: gray;
    line-height: .01;
    letter-spacing: normal;
    font-size: 18px;
    font-weight: normal;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.tileContainer {
    box-shadow: 0 3px 6px black;
    margin-bottom: 10px;
    width: 800px;
    height: 70px;
    background-color: white;
    display: inline-block;
    float: left;
    margin-left: 10px;
}

.tileComponent1 {
    width: 50%;
    margin-left: 20px;
    margin-top: 10px;
}

#change{
    text-decoration: none;
    float: right;
    margin-right: 10px;
    margin-top: 10px;
} 

.quickSearchContainer1{
    margin-left: 10px;
    margin-top: 20px;
} 

.tileContainer1{
    box-shadow: 0 3px 6px black;
    margin-bottom: 10px;
    width: 800px;
    height: 50px;
    background-color: white;
    display: inline-block;
    float: left;
    margin-left: 10px;
    background-color: blue;
}

.tileComponent3{
    width: 50%;
    margin-left: 20px;
    margin-top: 10px;
}

.address{
    box-shadow: 0 3px 6px black;
    background-color: white;
    display: inline-block;  
} 

.tileComponent4{
    box-shadow: 0 3px 6px black;
    margin-top: 16px;
    width: 800px;
    height: 400px;
    background-color: #f5faff;
    display: inline-block;
    float: left;
    margin-right: 100px;
}

#edit{
    text-decoration: none;
    float: right;
    margin-right: 10px;
    margin-top: 5px;
} 

#ad{
    margin-left: 20px;
    margin-top: 20px;
} 

#del{
    margin-left: 20px; 
} 

#add{
    font-size: 15px;
    font-weight: bolder;
    margin-left: 20px;
    text-decoration: none;
} 

#nam{
    width: 300px;
    margin-top: 30px;
    margin-left: 30px;
} 

#mob{
    width: 300px;
    margin-top: 30px;
    margin-left: 30px;
} 

#pin{
    width: 300px;
    margin-top: 30px;
    margin-left: 30px;
} 

#local{
    width: 300px;
    margin-top: 30px;
    margin-left: 30px;
} 

#area{
    width: 300px;
    margin-top: 30px;
    margin-left: 30px; 
} 

#city{
    width: 300px;
    margin-top: 30px;
    margin-left: 30px; 
} 

#dropdown{
    width: 300px;
    margin-top: 32px;
    margin-left: 30px; 
    height: 40px;
    border-radius: 5%;
    border-color: white;
    border:none;  
}  

#save{
    margin-left: 30px; 
} 
</style>
    <body>
    <nav class="navbar navbar-green bg-green">
  <div class="container-fluid">
    <a class="navbar-brand text-white">FIXRATESHOPPING</a>
  </div>
</nav>

<div class="quickSearchContainer">
            <div class="tileContainer">
            <button class="btn btn-outline-primary" onclick="change()" id="change" href="">CHANGE</button>
            <script>
                function change(){
                window.open("change.php");
                }
            </script>
                <div class="tileComponent1">
                   <b class="text-muted">LOGIN</b>
                   <p class="black">Rahul Singh <strong>+918005765118</strong><p>
                </div>
                </div>
                </div>

                <div class="quickSearchContainer1">
            <div class="tileContainer1">
                <div class="tileComponent3">
                   <b class="text-white">DELIVERY ADDRESS</b>
                </div>
                <div class="tileComponent4">
                <div class="col-sm-3">
                <form class="d-flex">
                <input type="text" class="form-control" id="nam" placeholder="Name"/>
                <input type="text" class="form-control" id="mob" placeholder="Mobile Number"/>
                </form>
                <form class="d-flex">
                <input type="text" class="form-control" id="local" placeholder="Locality"/>
                <input type="text" class="form-control" id="pin" placeholder="Pin-code"/>
                </form>
                <form class="d-flex">
                <input type="text" class="form-control" id="area" placeholder="Address"/>
                <input type="text" class="form-control" id="city" placeholder="City"/>
                <label class="dropdown-outline-none" placeholder="State"></label>
                <select id="dropdown">
                      <option style="color:grey">State</option>
                      <option>Andhra Pradesh</option>
                      <option>Arunachal Pradesh</option>
                      <option>Assam</option>
                      <option>Bihar</option>
                      <option>Chhattisgarh</option>
                      <option>Goa</option>
                      <option>Gujarat</option>
                      <option>Haryana</option>
                      <option>Himachal Pradesh</option>
                      <option>Jharkhand</option>
                      <option>Karnataka</option>
                      <option>Kerala</option>
                      <option>Madhya Pradesh</option>
                      <option>Maharastra</option>
                      <option>Manipur</option>
                      <option>Meghalaya</option>
                      <option>Mizoram</option>
                      <option>Nagaland</option>
                      <option>Odisha</option>
                      <option>Punjab</option>
                      <option>Rajasthan</option>
                      <option>Sikkim</option>
                      <option>Tamil Nadu</option>
                      <option>Telangana</option>
                      <option>Tripura</option>
                      <option>Uttrakhand</option>
                      <option>Uttarpradesh</option>
                      <option>Westbengal</option>
                     </select>
                </form>
                <form class="d-flex">
                <input type="text" class="form-control" id="local" placeholder="Lanmark"/>
                <input type="text" class="form-control" id="pin" placeholder="Alernate Phone(Optional)"/>
                </form>
                <br><br><br>
                <a href="order.php"><button class="btn btn-warning" id="save" onclick="save()">SAVE</button></a>
                &nbsp;&nbsp;
                <a href="address.php"><button class="btn btn-primary" onclick="cancel()" id="cancel">CANCEL</button></a>
                </div>
            </div>
        </div>
    </div>          
</body>
</html>