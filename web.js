
function calcAverage(){
  var a = parseInt(document.getElementById('int1').value);
  var b = parseInt(document.getElementById('int2').value);
  var c = parseInt(document.getElementById('int3').value);

  var average = (a+b+c)/3;
  document.getElementById('avg').innerText = average;
}

function calcTotal(){
  var d = parseInt(document.getElementById('avg').value);
  var e = parseInt(document.getElementById('aat').value);
  var f = parseInt(document.getElementById('ass').value);

  var tot = d + e + f;
  document.getElementById('total').innerText = tot;

}

function check()
{
  var b = document.getElementById("pwd1");
  var a = document.getElementById("u1")
  if(a.value == ""){
      alert("Enter Your Username");
  }
  else if(b.value == ""){
    alert("Enter Your Password");
    }
  else if(a.value == "" && b.value == ""){
    alert("Please Enter The Username And Password");
    a.focus();
    return false; 
  }
  else 
   alert("successfully logged in")
   
}
function checkF()
{
  var b = document.getElementById("pwd1");
  var a = document.getElementById("u1")
  if(a.value == ""){
      alert("Enter Your Username");
  }
  else if(b.value == ""){
    alert("Enter Your Password");
    }
  else if(a.value == "" && b.value == ""){
    alert("Please Enter The Username And Password");
    a.focus();
    return false; 
  }
  else 
    alert("Login Successful");
   
}
function usnvalidate(){
  
  var b = document.getElementById("usn");
  
  if(b.value == ""){
    alert("Please Enter Your USN");
  }
  else
  {
    window.location.href = "4studentPage2.html";
  }
}


