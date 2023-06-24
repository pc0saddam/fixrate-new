<!DOCTYPE html>
<html>
    <head>
        <title>Change address</title>
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
    height: 150px;
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

.tileComponent5{
    box-shadow: 0 3px 6px black;
    margin-top: 10px;
    width: 800px;
    height: 40px;
    background-color: #f5faff;
    display: inline-block;
    float: left;
    margin-right: 100px;
} 

#add{
    font-size: 15px;
    font-weight: bolder;
    margin-left: 20px;
    text-decoration: none;
} 

#name{
    margin-left: 30px;
    margin-top: 17px;
}

#phone{
    margin-left: 30px;
    font-weight: lighter;
} 

#here{
    margin-left: 30px;
    margin-top: 30px;
}

#advan{
    float: right;
    margin-right: 50px;
    font-size: 14px;
    margin-top: 15px;
    color: grey;
    font-weight:bold;
}

#eas{
    color:black;
    font-weight:lighter;
} 

.text-muted{
    margin-left: 20px;
    margin-top: 10px;
}
</style>
    <body>
    <nav class="navbar navbar-green bg-green">
  <div class="container-fluid">
    <a class="navbar-brand text-white">FIXRATESHOPPING</a>
  </div>
</nav>

                <div class="quickSearchContainer1">
            <div class="tileContainer1">
                <div class="tileComponent3">
                   <b class="text-white">LOGIN</b>
                </div>
                <div class="tileComponent4">
                <div class="advange">
                <p id="advan">Advantage of our secure login
                <br>
                <span id="eas"><i class="bi bi-bus-front text-success">&nbsp;&nbsp; Easily Track Orders, Hassels free Returns</i></span>
                <br>
                <span id="eas"><i class="bi bi-bell text-success">&nbsp;&nbsp; Get relevant Alerts and Recommendation</i></span>
                <br>
                <span id="eas"><i class="bi bi-asterisk text-success">&nbsp;&nbsp; Wishlist, Reviews, Ratings and more.</i></span>
                </p>
               </div>
                <div id="name"></div>
                <script>
                    const para = document.createElement("p");
                    para.innerHTML = "Name";
                    document.getElementById("name").appendChild(para);
                </script>

                <div id="phone"></div>
                <script>
                    const bold = document.createElement("b");
                    bold.innerHTML = "Phone";
                    document.getElementById("phone").appendChild(bold);
                </script> 
                   <a href="address.php"><button type="button" onclick="checkout()" id="here" class="btn btn-danger">CONTINUE TO CHECKOUT</button>
                </div>
                <div class="tileComponent5">
                <h5 class="text-muted"><span style="color:blue; font-size:15px;">2</span> DELIVERY ADDRESS</h5>
            </div>
            <div class="tileComponent5">
                <h5 class="text-muted"><span style="color:blue; font-size:15px;">3</span> ORDER SUMMARY</h5>
            </div>
            <div class="tileComponent5">
                <h5 class="text-muted"><span style="color:blue; font-size:15px;">4</span> PAYMENT OPTION</h5>
            </div>
        </div>
    </div>          
</body>
</html>