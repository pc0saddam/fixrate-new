<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fixrate Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="Header.css"> 
  <script src="Header.js"></script>
</head>
<style>
  .container-fluid3{
    padding: 6px 12px;
    width:100%;
    height: 300px;
    background-color: lightgreen;
  }

  .content3{
    padding: 6px 12px;
    width:100%;
    height: 260px;
    background-color: lightgreen;
    color: white;
  }

  #number{
    width: 300px;
  } 

  #ad{
    float:right;
    width:700px;
    height: 300px;
    padding-bottom: 50px;
    border-radius: 100%;
  }

  #sel{
    text-align: right;
    font-size: 25px;
    color: brown;
    font-weight: bolder;
  } 
  .containerx-fluid{
    padding: 6px 12px;
    width:100%;
    height: 260px;
  }
  @media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
} 

    .quickSearchContainer {
    margin-left: 115px;
    margin-top: 50px;
}

.quickSearchHeding {
    text-align: left;
    color: #192f60;
    font-size: 30px;
    line-height: 2.5;
    font-weight: bold;
    font-family: Georgia, 'Times New Roman', Times, serif;
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
    margin-right: 30px;
    margin-bottom: 30px;
    width: 370px;
    height: 200px;
    background-color: white;
    display: inline-block;
    border-radius: 20px;
}

.tileComponent1 {
    width: 50%;
    float: left;
}

.tileComponent2 {
    width: 50%;
    float: left;
    margin-top: 20px;
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

#head {
  background: green;
}
</style>
<body>
<nav id="head" class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white">SELLERHUB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color:white">Fee Structure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white">Resources</a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <li class="nav-item">
        <button class="btn btn-warning" type="submit" style="color:white">Start Selling</button>
        </li>
      </ul>
      &nbsp;&nbsp;
      <ul class="navbar-nav">
      <li class="nav-item">
        <button class="btn btn-primary" type="submit" style="color:white">Login</button>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <div class="container-fluid3">
  <div class="image-background">
    <img id="ad" src="https://m.media-amazon.com/images/G/31/amazonservices/Blog/Cost_reduction__2._SL1280_FMjpg_.jpg" alt=""/>
    </div>
    <div class="content3">
    <h3 class="text-muted">Start your <br>business with in 1 week</h3>
    <div id="number" class="input group">
    <input type="tel" class="form-control" placeholder="Enter 10 digit phone number here"
    id="phone" maxlength="13" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
    </div>
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
    <br>
    <div class="content4">
    <button class="btn btn-warning" onclick="phone()" type="submit">Start Selling</button>
    </div>
    <div class="content5">
    <h1 id="sel" class="text">Sell online to 50 crores + customers</h1>
    </div>
    </div>
  </div>
  <div class="quickSearchContainer">
            <p class="quickSearchHeding">
                Selling Product
            </p>
    
            <p class="quickSearchSubHeding text-success">
                Start Your Selling
            </p>
    
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfJA5SodIrirvjFI8KmgtJ476pZaJVFEqu6A&usqp=CAU" height="150px;" width="100%"/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href="" class="jug"><b>Puma</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                        <p>Basket Classic XXI Sneakers For Men  (White)</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 3,399</h3>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://img2.gadgetsnow.com/gd/images/products/additional/large/G418192_View_1/computer-laptop/laptops/lenovo-v15-82kba033ih-11th-gen-intel-core-i3-1115g4-15-6-inches-notebook-laptop-8gb-512gb-ssd-windows-11-iron-grey-1-7-kg-.jpg" height=150 width=160/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href="" class="jug"><b>HP Laptop</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>8GB and 512GB SSD HDD capacity</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 39,999</h3>
                    </div>
                </div>
            </div> 
 
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://media.oppostore.co.uk/catalog/product/r/e/reno8_pro_green_2000x2000_qriyyimbtlmdnaam.png?width=265&height=265&store=default&image-type=image" height=150 width=160/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                    <a id="link" href="" class="jug"><b>OPPO</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>OPPO Reno8 5G 8GB RAM, 128GB</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 19,999</h3>
                    </div>
                </div>
            </div>
    
            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HPBW2?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1602896327000" height=150 width=160/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>iPhone</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>iPhone 12 Pro<br>6 GB RAM and 128 GB</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 107,790</h3>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://cdn.shopify.com/s/files/1/0623/8850/2700/products/WM0040_700x.png?v=1654782484" height=150 width=160/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>SHIRT</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Sky Blue Rayon Cotton Men Shirt</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 1,790</h3>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://img1.gadgetsnow.com/gd/images/products/additional/large/G299284_View_1/accessories/headphones-headsets/boat-airdopes-431-true-wireless-bluetooth-headset-black-.jpg" height=150 width=150/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Headset</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>BoAt Airdopes 431 True Wireless Bluetooth Headset</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 2,999</h3>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://5.imimg.com/data5/LO/PA/MY-13208987/samsung-refrigerator-500x500.jpg" height=150 width=160/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Refrigerator</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Whirlpool 215 Impro Roy 3S 200 Ltr Single Door</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 19,950</h3>
                    </div>
                </div>
            </div>

            <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://d2xamzlzrdbdbn.cloudfront.net/products/925621f9-f025-4e89-9e50-8123bf6cae2e22011228_416x416.jpg" height=150 width=150/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Washine Machine</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Whirlpool 360 Degree Bloomwash Pro H 7.5 Kg</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 24,990</h3>
                    </div>
                </div>
            </div>

                <div class="tileContainer">
                <div class="tileComponent1">
                    <img src="https://t3.ftcdn.net/jpg/03/91/10/84/360_F_391108454_Td5j8gNrkCHf9Hhyfdp6fK0b9SCj3NON.jpg" height=150 width=160/>
                </div>
    
                <div class="tileComponent2">
                    <div class="componentHeading">
                        <a id="link" href=""class="jug"><b>Sofa Bae</b></a>
                    </div>
    
                    <div class="componentSubHeading">
                    <p>Upholstered Sofa With Minimalist Design</p>
                        <b class="text-success">Special Price</b>
                             <h3 class="text-primary">₹ 17,999</h3>
                    </div>
                </div>
            </div>
         </div>
    </div>

    <!--- footer --->
<footer class="site-footer" style="background-color:lightgreen">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <br><br>
        <h6><b style="font-size:20px;">About</b></h6>
        <strong style="color:green; font-size:25px;">FIXRATE</strong>
        <br>
        <strong style="color:green; font-size:25px;">SHOPPING</strong>
        <br>
        is a digital platform where we can buy<br> any thing 
        such as grocery items daily<br>use things & electronics devices etc.<br>
        </p>
      </div>
      <div class="col-xs-6 col-md-3">
        <br><br>
        <h6><b style="font-size:20px;">Categories</b></h6>
        <ul class="footer-links">
          <li><a href="https://www.facebook.com/" style="text-decoration:none; color:blue;"><b>Facebook</b></a></li>
          <li><a href="https://www.instagram.com/" style="text-decoration:none; color:blue;"><b>Instragram</b></a></li>
          <li><a href="https://www.linkedin.com/login" style="text-decoration:none; color:blue;"><b>Linkedin</b></a></li>
          <li><a href="https://twitter.com/" style="text-decoration:none; color:blue;"><b>Twitter</b></a></li>
          <li><a href="https://www.whatsapp.com/" style="text-decoration:none; color:blue;"><b>WhatsApp</b></a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <br><br>
        <h6><b style="font-size:20px;">Quick Links</b></h6>
        <ul class="footer-links">
          <li><a href="About.php" style="text-decoration:none; color:blue;"><b>About Us</b></a></li>
          <li><a href="Contact.php" style="text-decoration:none; color:blue;"><b>Contact Us</b></a></li>
          <li><a href="Terms.php" style="text-decoration:none; color:blue;"><b>Terms & Conditions</b></a></li>
          <li><a href="Policy.php" style="text-decoration:none; color:blue;"><b>Privacy Policy<b></a></li>
          <li><a href="index.php" style="text-decoration:none; color:blue;"><b>Sitemap</b></a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <b class="copyright-text text-black">Copyright &copy; 2023 All Rights Reserved by 
     <a href="#" style="color:blue; font-size:20px; text-decoration:none;">&nbsp; Saddam Hussain Siddiqui</a>
    </b>
      </div>   
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--- Footer -->
</body>
</html>