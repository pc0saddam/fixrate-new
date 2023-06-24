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
    height: 50px;
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

.text-black{
    margin-left: 20px;
}

#num{
    background-color: lightblue;
    color: black;
} 

.tileComponent6{
    box-shadow: 0 3px 6px black;
    margin-top: 10px;
    width: 800px;
    height: 50px;
    background-color: #f5faff;
    display: inline-block;
    float: left;
    margin-right: 100px; 
} 

.text-muted{
    margin-left: 20px;
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
            <a href="change.php"><button class="btn btn-outline-primary" onclick="change()" id="change">CHANGE</button></a>
                <div class="tileComponent1">
                   <b class="text-muted"><b id="num">1</b> LOGIN</b>
                   <p class="text-black">Rahul Singh <strong>+918005765118</strong><p>
                </div>
                </div>
                </div>

                <div class="quickSearchContainer1">
            <div class="tileContainer1">
                <div class="tileComponent3">
                   <b class="text-white">DELIVERY ADDRESS</b>
                </div>
                <div class="tileComponent4">
                <input id="ad" type="radio" alt=""/>
                <a href="edit.php"><button class="btn no border text-primary" id="edit" onclick="edit()">EDIT</button></a>
                <br><br><br><br>
                <a href="order.php"><button class="btn btn-success" id="del">DELIVER HERE</button></a>
                </div>
                <div class="tileComponent5">
                <a href="edit.php" id="add" class="text-primary">
                <strong style="font-size:20px">+</strong> Add a new address</a>
            </div>
            <div class="tileComponent6">
            <b class="text-muted"><b id="num">3</b> ORDER SUMMARY</b>
            </div>
            <div class="tileComponent6">
            <b class="text-muted"><b id="num">4</b> PAYMENT OPTIONS</b>
            </div>
        </div>
    </div>          
</body>
</html>