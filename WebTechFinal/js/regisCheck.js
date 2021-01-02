function validateForm() {
	var regex = /^[a-zA-Z\s]+$/;
	
	var regex2= /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+[.]+[a-zA-Z]{2,4}/;
	
	/*var name=  document.getElementById("name").value;
	
	var uname=  document.getElementById("username").value;
	
	var ad=  document.getElementById("ad").value;
	
	var dob=  document.getElementById("dob").value;
	
	var pass=  document.getElementById("password").value;*/


if (document.getElementById("name").value == "" || document.getElementById("username").value == "" || document.getElementById("ad").value == "" || document.getElementById("dob").value == "" || document.getElementById("password").value == "" || document.getElementById("retpass").value == "")
  {
    document.getElementById("mytext").innerHTML="All Fields Are Required";
    return false;
  }
  
if(regex.test(document.getElementById("name").value) == false)
 {
    document.getElementById("mytext").innerHTML="Name Should not Contain Any Special Character or No";
    return false;
 }

if (document.getElementById("female").checked == false &&  document.getElementById("male").checked == false && document.getElementById("other").checked == false)
  {
    document.getElementById("mytext").innerHTML="Please Select Any Gender";
    return false;
  }
 /* 
if (document.getElementById("female").checked == true)
  {
    var gend = document.getElementById("female").value;
  }
  
if (document.getElementById("male").checked == true)
  {
    var gend = document.getElementById("male").value;
  }
  
if (document.getElementById("other").checked == true)
  {
    var gend = document.getElementById("other").value;
  }*/
  
if (document.getElementById("seller").checked == false &&  document.getElementById("customer").checked == false)
  {
    document.getElementById("mytext").innerHTML="Please Select Any User Type";
    return false;
  }
  
/*if (document.getElementById("seller").checked == true)
  {
    var utype = document.getElementById("seller").value;
  }
  
if (document.getElementById("customer").checked == true)
  {
    var utype = document.getElementById("customer").value;
  }*/
 
if(regex2.test(document.getElementById("username").value) == false)
 {
    document.getElementById("mytext").innerHTML="Invalid email address";
    return false;
 }
 
if(document.getElementById("password").value.length<6)
 {
    document.getElementById("mytext").innerHTML="Password too short";
    return false;
 }
 
if(document.getElementById("password").value!=document.getElementById("retpass").value)
 {
    document.getElementById("mytext").innerHTML="Password Does Not Match";
    return false;
 }
 
if(document.getElementById("name").value.length>30)
 {
    document.getElementById("mytext").innerHTML="Name To Long";
    return false;
 }

if(document.getElementById("email").value.length>30)
 {
    document.getElementById("mytext").innerHTML="Email To Long";
    return false;
 }
  
/*else
  {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        }
      else
      {
        document.getElementById("mytext").innerHTML = this.status;
      }
      };
      xhttp.open("POST", "./MyCode/WebTechFinal/control/userInsert.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("name="+name+"&uname="+uname+"&ad="+ad+"&dob="+dob+"&pass="+pass+"&gend="+gend+"&utype="+utype);
  }
  /*
if(document.getElementById("name").checked == true)
  {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        }
      else
      {
        document.getElementById("mytext").innerHTML = this.status;
      }
      };
      xhttp.open("POST", "/MyCode/Final/getName.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("uname="+uname);
  }
  
if(document.getElementById("phone").checked == true)
  {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        }
      else
      {
        document.getElementById("mytext").innerHTML = this.status;
      }
      };
      xhttp.open("POST", "/MyCode/Final/getPhone.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("uname="+uname);
  }
if(document.getElementById("email").checked == true)
  {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        }
      else
      {
        document.getElementById("mytext").innerHTML = this.status;
      }
      };
      xhttp.open("POST", "/MyCode/Final/getEmail.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("uname="+uname);
  }*/
 

  
}