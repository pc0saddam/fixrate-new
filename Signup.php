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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/signup.css">
  <script src="js/Signup.js"></script>     
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
          <div class="square" style="--i:0;"></div>
          <div class="square" style="--i:1;"></div>
          <div class="square" style="--i:2;"></div>
          <div class="square" style="--i:3;"></div>
          <div class="square" style="--i:4;"></div>

          <div class="container">
            <div class="form">
              <h2>Create Account</h2>
              <form>
                 <div class="inputBox">
                  <input type="email" id="root" name="email" placeholder="Enter email id">
                  </div>
                 
                  <div class="inputBox">
                  <input type="password" id="paswd" placeholder="Create password"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase
                  and lowercase letter, and at least 8 or more characters" required/>
                  <p style="font-size: 10px;">
                  </div>
                 
				  <div id="show">
				  <input type="checkbox" onclick="myFunction()"> show
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="#">Forget Password</a></p>
				  </div>
          <div class="checkBox" style="font-size:12px; color:white;">
                  <span><input type="checkbox"/>&nbsp; I accept the
                  <a href="#"> Terms & Conditions
                  </a> and <a href=""> Privacy Policy</a></span>
                  </div>
                <div class="inputBox">
                  <input type="submit" value="SIGNUP">
                  <a href="Login.php" onclick="login()" id="btn">LOGIN</a>
                  </div>
            </form>
          </div>
          <script>
              function login(){
                alert("Welcome to login");
              }
          </script>

          <script>
       function myFunction() {
					  var x = document.getElementById("paswd");
					  if (x.type === "password") {
						x.type = "text";
					  } else {
						x.type = "password";
					  }
					}
    </script>
        </div>
      </div>
    </section>
</body>
</html>