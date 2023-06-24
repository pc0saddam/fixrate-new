// Validation of Email ID
let root = document.getElementById("root");
var emailID;
function validateEmail(emailID) {
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) {
      document.write("Please enter correct email ID");
      document.myForm.EMail.focus() ;
      return false;
   }
   document.write("Valid email ID!");
   document.write("<br>");
   return true;
} 

// Validation of Password
function verifyPassword() {  
    var pw = document.getElementById("pswd").value;  
    if(pw == "") {  
    document.getElementById("message").innerHTML = "**Fill the password!";  
    return false;  
    }       
    if(pw.length < 8) {  
   document.getElementById("message").innerHTML = "** length must be atleast 8 characters";  
   return false;  
   }     
   if(pw.length > 15) {  
   document.getElementById("message").innerHTML = "** length must not exceed 15 characters";  
   return false;  
   } else {  
 alert("Password is correct");  
 }  
 }  