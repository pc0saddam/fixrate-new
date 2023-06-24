<!DOCTYPE html>
<html>
<head>
  <title>Fixrate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/Main.css"> 
<style>
 .navbar-brand{
  color:white;
  font-size:15px;
  margin-left:30px;
  position: relative;
  left:10px;
  display: block;
 } 

 .form-control{
  width: 280px;
  border-radius: 2px;
  position: relative;
}

#search{
  bottom: 13px; 
  position: relative;
  top: 8px;
  right: 50px;
}

.nav-link{
  position: relative;
}

#log{
  right:10px;
  font-size: 17px;
}

#login{
background-color: white;
width:100px;
height:30x;
color:blue;
}

.bi{
  color:blue;
} 

#cart{
  color:white;
} 

#image{
  width: 70px;
  height: 70px;
}

.carousel-item{
  height: 300px;
} 

#offer{
  height: 100px;
} 

.item1{
 width: 200px;
 margin-top: 60px;
}


/* Treding Product */
.column {
    width: 100%;
    display: block;
  }


.quickSearchContainer {
    margin-left: 20px;
    margin-top: 10px;
}

.quickSearchHeding {
    text-align: left;
    color: #192f60;
    font-size: 30px;
    line-height: 1.5;
    font-weight: bold;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.quickSearchSubHeding {
    text-align: left;
    color: gray;
    letter-spacing: normal;
    font-size: 18px;
    font-weight: normal;
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-bottom:20px;
}

.tileContainer {
    box-shadow: 0 3px 6px black;
    margin-right: 10px;
    margin-bottom: 30px;
    width: 250px;
    height: 200px;
    background-color: white;
    display: inline-block;
    border-radius: 10px;
}

.tileComponent1 {
    width: 50%;
    float: left;
}

.tileComponent2 {
    width: 50%;
    float: left;
    margin-top: 15px;
}

.componentHeading {
    text-align: left;
    color: #192f60;
    font-size: 18px;
    font-weight: bold;
}

.componentSubHeading {
    text-align: left;
    color: gray;
    font-size: 14px
} 

#link{
    text-decoration: none;
}

/* Recharge */
#led{
    text-decoration: none;
} 

.col-md-1 {
    box-shadow: 0 3px 6px black;
    margin-right: 30px;
    margin-bottom: 30px;
    width:160px;
    height: 160px;
    background-color: white;
    display: inline-block;
    border-radius: 90%;
    text-align: center;
}

/* Footer */
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder;"><i><strong>FIXRATE</strong><br><small>Explore <b class="text-warning">Plus&nbsp;<i class="bi bi-patch-plus text-warning"></i></b></small></i></a>
    <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search for Products, Brands" aria-label="Search"><i id="search" class="bi bi-search text-primary"></i>
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="log" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <button type="button" id="login" class="btn btn-text-primary">Login</button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;My Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-coin"></i>&nbsp;&nbsp;Super Coin Zone</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-patch-plus"></i>&nbsp;&nbsp;Fixrate Plus Zone</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>&nbsp;&nbsp;Orders</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-heart-fill"></i>&nbsp;&nbsp;Wishlist</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-activity"></i>&nbsp;&nbsp;Coupons</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-wallet-fill"></i>&nbsp;&nbsp;Gift Card</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-bell-fill"></i>&nbsp;&nbsp;Notification</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-toggle-on"></i>&nbsp;&nbsp;Logout</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" id="log" href="#"><b class="text-white">Become a Seller</b></a>
        </li>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="log" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b class="text-white">More</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="bi bi-bell-fill"></i>&nbsp;&nbsp;Notification Preference</a></li>
            <li><a class="dropdown-item" href="Customer.php"><i class="bi bi-question-square-fill"></i>&nbsp;&nbsp;24 X 7 Customer Care</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-up-right-square-fill"></i>&nbsp;&nbsp;Advertise</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-cloud-arrow-down-fill"></i>&nbsp;&nbsp;Download App</a></li>
          </ul> 
          <li class="nav-item">
          <a class="nav-link" id="log" href="#"><b class="text-white"><i id="cart" class="bi bi-cart-fill"></i>&nbsp;Cart</b></a>
        </li>
</ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="Topoffers.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/50379f65f7b59622.png?q=100" alt=""><br><b style="color:black;">&nbsp;&nbsp;Offers</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Mobiles.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/0a0243119f02f7a5.png?q=100" alt=""><br><b style="color:black;">&nbsp;&nbsp;Mobiles</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Electronics.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/da4491af4ee551d6.png?q=100" alt=""><br><b style="color:black;">Electronics</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Appliances.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/7a9da987f315df35.png?q=100" alt=""><br><b style="color:black;">Appliances</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Fashion.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/f7b2a4eeb35a8c9f.png?q=100" alt=""><br><b style="color:black;">&nbsp;&nbsp;Fashion</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Beauty.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/e83a5f27b01d9a7e.png?q=100" alt=""><br><b style="color:black;">&nbsp;&nbsp;Beauty</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Kitchen.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/a8cfa33c7206ae57.png?q=100" alt=""><br><b style="color:black;">&nbsp;&nbsp;Kitchen</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Furniture.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/4e0bdf8567ecb960.png?q=100" alt=""><br><b style="color:black;">Furniture</b></a>
        </li>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Travels.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/def8193d5a7380ee.png?q=100" alt=""><br><b style="color:black;">&nbsp;&nbsp;Travels</b></a>
        </li> 
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Grocery.php"><img id="image" src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/aecfaba5969b96dd.png?q=100" alt=""><br><b style="color:black;">Grocery</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ytimg.com/vi/sR75HqVVl9g/maxresdefault.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://newsolez.com/wp-content/uploads/2018/02/be982d86c62674978f5eea66aba3ba57.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://chaubaonguyen.files.wordpress.com/2016/03/nike-free-run-ad.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-success text-black" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-success text-black" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Trending Product--->
<div class="quickSearchContainer">
            <p class="quickSearchHeding">
                Trending Product
            </p>
    
            <p class="quickSearchSubHeding text-success">
                CHIEF & BEST PRODUCTS
            </p>
    
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfJA5SodIrirvjFI8KmgtJ476pZaJVFEqu6A&usqp=CAU" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href="" class="jug"><b>Puma</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                        <p>Basket Classic XXI Sneakers For Men  (White)</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 3,399</button>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://img2.gadgetsnow.com/gd/images/products/additional/large/G418192_View_1/computer-laptop/laptops/lenovo-v15-82kba033ih-11th-gen-intel-core-i3-1115g4-15-6-inches-notebook-laptop-8gb-512gb-ssd-windows-11-iron-grey-1-7-kg-.jpg" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href="" class="jug"><b>HP Laptop</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>8GB and 512GB <br>SSD HDD capacity</p>
                    <br>
                    <b class="text-danger">Special Price</b>
                    <button class="btn btn-success">₹ 39,999</button>
                    </div>
                </div>
            </div> 
 
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://media.oppostore.co.uk/catalog/product/r/e/reno8_pro_green_2000x2000_qriyyimbtlmdnaam.png?width=265&height=265&store=default&image-type=image" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                    <a id="link" href="" class="jug"><b>OPPO</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>OPPO Reno8 5G 8GB RAM, 128GB</p>
                    <br>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 19,999</button>
                    </div>
                </div>
            </div>
    
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HPBW2?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1602896327000" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>iPhone</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>iPhone 12 Pro<br>6 GB RAM and<br> 128 GB</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 107,790</button>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://cdn.shopify.com/s/files/1/0623/8850/2700/products/WM0040_700x.png?v=1654782484" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>SHIRT</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Sky Blue Rayon Cotton Men Shirt</p>
                    <br>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 1,790</button>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://img1.gadgetsnow.com/gd/images/products/additional/large/G299284_View_1/accessories/headphones-headsets/boat-airdopes-431-true-wireless-bluetooth-headset-black-.jpg" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Headset</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>BoAt Airdopes 431 True Wireless Bluetooth Headset</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 2,999</button>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://5.imimg.com/data5/LO/PA/MY-13208987/samsung-refrigerator-500x500.jpg" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Refrigerator</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Whirlpool 215 Impro Roy 3S 200 Ltr Single Door</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 19,950</button>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://d2xamzlzrdbdbn.cloudfront.net/products/925621f9-f025-4e89-9e50-8123bf6cae2e22011228_416x416.jpg" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Washine Machine</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Whirlpool 360 Degree</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 24,990</button>
                    </div>
                </div>
            </div>

                <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://t3.ftcdn.net/jpg/03/91/10/84/360_F_391108454_Td5j8gNrkCHf9Hhyfdp6fK0b9SCj3NON.jpg" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Sofa Bae</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Upholstered Sofa With Minimalist Design</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 17,999</button>
                    </div>
                </div>
            </div>
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://cdn.shopify.com/s/files/1/0274/4893/4469/products/96635805-8e62-47ee-9cb9-cfd3eb941b7022090618_416x416_8849441f-70a9-4204-bc47-ce098b2bc019_477x463.jpg?v=1667461776" height="100px;" width="80%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>iPhone Plus</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>48MP Main | Ultra Wide<br>
                    12MP Main</p>
                        <b class="text-danger">Special Price</b>
                             <button class="btn btn-success">₹ 1,29,999</button>
                    </div>
         </div>
    </div>

    <!--Recharge Option-->

    <div class="container-fluid">
        <div class="row bg-white">
        <h4 class="recharge-head text-left bg-white">
        <b class="text-black" style="color:#192f60;">Recharge & Pay Bills</b></h4>
        <br><br>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="mobile.php" target="_blank">
          <img src="images/mobile.png" alt="" width="80px;" height="80px;">
          <div class="caption">
            <b class="text-danger" style="font-size:16px; text-decoration:none;">
            Recharge<br>Prepaid<br>Mobile<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="mobile.php" target="_blank">
        <img src="images/ele.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Pay<br>Electricity<br>Bill<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="mobile.php" target="_blank">
          <img src="images/dth.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Recharge<br>DTH<br>Bill<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="mobile.php" target="_blank">
        <img src="images/gas.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Book<br>Gas<br>Cylinder<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="mobile.php" target="_blank">
        <img src="images/wifi.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Pay<br>Broadband<br>Bill<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="#" target="">
        <img src="images/allservices.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          All<br>Payment<br>Bill<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

     <div class="container-fluid">
        <div class="row bg-white">
        <h4 class="recharge-head text-left bg-white">
        <b class="text-black" style="color:#192f60; margin-left:20px;">Book & Buy</b></h4>
        <br><br>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
          <img src="images/movie.png" alt="" width="80px;" height="80px;">
          <div class="caption">
            <b class="text-danger" style="font-size:16px;">
            Movie<br>Ticket<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
        <img src="images/fly.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Flight<br>Ticket<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="_blank">
          <img src="images/bus.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Bus<br>Ticket<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
        <img src="images/train.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Train<br>Ticket<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
        <img src="images/insurance.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Buy<br>Insur<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
        <img src="images/int.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Others<br>Flights<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
        <img src="images/stock.png" alt="" width="80px;" height="80px;" style="boreder-radius:25px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          Invest<br>Stocks<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-1">
      <div class="thumbnail">
        <a id="led" href="" target="">
        <img src="images/donation.png" alt="" width="80px;" height="80px;">
          <div class="caption">
          <b class="text-danger" style="font-size:16px;">
          NGO<br>Donate<span><i class="bi bi-chevron-right"></i></span></b>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div>
</div>

<!--Footer content-->
<footer class="site-footer bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6><b style="font-size:20px; color:black;">&nbsp;&nbsp;<u>About</u></b></h6>
        <strong style="color:green; font-size:25px;">FIXRATE</strong>
        <br>
        <strong style="color:green; font-size:25px;">SHOPPING</strong>
        <br>
       <p style="color:blue; font-weight:bold;">is a digital platform where we can buy<br> any thing 
        such as grocery items daily<br>use things & electronics devices etc.<br>
        </p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6><b style="font-size:20px; color:black;">&nbsp;&nbsp;&nbsp;&nbsp;<u>Categories</u></b></h6>
        <ul class="footer-links">
          <a href="https://www.facebook.com/" style="text-decoration:none; color:grey;"><i class="bi bi-facebook"><b>&nbsp;Facebook</b></i></a><br>
          <a href="https://www.instagram.com/" style="text-decoration:none; color:grey;"><i class="bi bi-instagram text-danger"><b>&nbsp;Instragram</b></i></a><br>
          <a href="https://www.linkedin.com/login" style="text-decoration:none; color:grey;"><i class="bi bi-linkedin"><b>&nbsp;Linkedin</b></i></a><br>
          <a href="https://twitter.com/" style="text-decoration:none; color:grey;"><i class="bi bi-twitter"><b>&nbsp;Twitter</b></i></a><br>
          <a href="https://www.whatsapp.com/" style="text-decoration:none; color:grey;"><i class="bi bi-whatsapp text-success"><b>&nbsp;WhatsApp</b></i></a>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6><b style="font-size:20px; color:black;">&nbsp;&nbsp;&nbsp;&nbsp;<u>Quick Links</u></b></h6>
        <ul class="footer-links">
          <a href="About.php" style="text-decoration:none; color:grey;"><i class="bi bi-file-person"><b>&nbsp;About-Us</b></i></a><br>
          <a href="Contact.php" style="text-decoration:none; color:grey;"><i class="bi bi-person-lines-fill"><b>&nbsp;Contact-Us</b></i></a><br>
          <a href="Terms.php" style="text-decoration:none; color:blue;"><b>Terms & Conditions</b></a><br>
          <a href="Policy.php" style="text-decoration:none; color:blue;"><b>Privacy Policy</b></a><br>
          <a href="index.php" style="text-decoration:none; color:grey;"><i class="bi bi-geo-alt-fill"><b>Sitemap</b></i></a><br>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text" style="color:blue; font-weight:bold;">Copyright &copy; 2022 All Rights Reserved by 
     <a href="#" style="color:blue; font-size:20px; text-decoration:none;"><b>&nbsp; Saddam Hussain Siddiqui</b></a>
        </p>
      </div>   
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</html>