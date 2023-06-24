<!DOCTYPE html>
<html>
    <head>
        <title>Notification</title>
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

    .bi{
        font-size: 25px;
    } 

    .navbar-brand{
        font-size: 25px;
    }

    .container-fluid1{
      padding: 6px 12px;
      width: 100%;
      height: 350px;
      background-color: lightgreen;
    }

    #img1{
      width: 340px;
      height: 340px;
      border-radius: 90%;
      float: right;
    }

    #input{
      width: 500px;
      height: 300px;
      float:right;
      padding: 6px 12px;
    } 

    .form-control{
      width:480px;
      height: 40px;
      text-align: left;
    } 

    .btn{
      width:100px;
      height: 40px;
      float: left;
    }

    #myDiv{
      text-align: center;
      font-size: 25px;
      font-weight: bold;
      color: black;
      margin-left: 120px;
    } 

    #sub{
      font-size: 25px;
      font-weight: bold;
      float: right;
      color:#3333;
    } 

    #myText{
      font-size: 25px;
      font-weight: bold;
      margin-left: 350px;
      margin-top: 100px;

    }

    #head{
      margin-left: 90px;
    } 

    #love{
      margin-left: 20px;
    }

    #rech{
      margin-left: 20px;
    } 

    #btn{
      background-color:black;
      color: white;
      margin-left: 20px;
      border: none;
      font-size: 20px;
      border-radius: 25px;
      margin-bottom:50px;
      padding: 6px 12px;
    }

    #pho{
      float:right;
      width: 500px;
      height:330px;
      border-radius: 10%;
      margin-right: 20px;
      
    }

    #row{
      float:left;
      width: 1337px;
      height:530px;
      border-radius: 0%;
    } 

    #lo{
      float:left;
    }
</style>
    <body>
    <nav class="navbar navbar-green bg-green">
  <div class="container-fluid">
    <a class="navbar-brand text-white"><b>FIXRATESHOPPING</b></a>
    <a class="navbar-brand text-white"><b>SERVICES</b></a>
  </div> 
  </nav>

  <div class="container-fluid1">
    <img id="img1" src="https://shop.gkwretail.com/cdn/shop/products/Designer-Sofa-Set-in-Fabric-L-Shape_2.png?v=1651899140" alt="">
    <br>
    <h2 id="head"></h2>
    <script>
    const header = document.createElement("h2");
    header.innerHTML = "<b>WELCOME TO FIXRATESHOPPING ECOMMERCE PLATFORM</b>";
    header.style.color = "green";
    document.getElementById("head").appendChild(header);
    </script>
    <p id="myDiv"></p>
    <script>
     const para = document.createElement("p");
     para.innerHTML = "Sell online product accross all over India";
     document.getElementById("myDiv").appendChild(para);
    </script>
    <b id="sub"></b>
    <script>
      const bold = document.createElement("b");
      bold.innerHTML = "Launch your Business with in a week with the <b>FIXRATESHOPPING PLATFORM</b>";
      document.getElementById("sub").appendChild(bold);
    </script>
    <div id="myText">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-black bg-black text-white" type="submit">Search</button>
      </form>
    </div>
    <script>
      function myFunction(){
        var x = document.getElementById("myText").value;
        document.getElementById("myText").innerHTML = x;
      }
    </script>
  </div>
    
  <div class="container-fluid">
    <br>
    <img id="pho" src="https://www.techprevue.com/wp-content/uploads/2015/01/reason-to-prefer-online-shopping.jpg" alt="">
    <h1 id="love">India's Most-loved<br> Fixrate App</h1>
    <h4 id="rech">Buy online Products,<br>Recharge & pay bills, book flights & movie tickets,<br>
     open a savings account, invest in stocks & mutual<br> funds, and do a lot more.</h4><br>
     <button id="btn" type="submit">Download Fixrate App</button>
  </div>

  <div class="container-fluid">
    <img id="row" src="https://www.thewatchtower.com/assets/images/blog_images/online-shopping-is-it-really-worth-it.jpg" alt=""/>
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
