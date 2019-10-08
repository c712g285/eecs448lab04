
function check()
{
  var icecream = document.getElementsById('icecream').value;
  var pepsi = document.getElementsById('pepsi').value;
  var popcorn = document.getElementsById('popcorn').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if ( icecream =="" || pepsi =="" || popcorn =="")
  {
    alert("quantity error");
  }

  if ((Number(icecream) < 0 ) ||(Number(pepsi) < 0 )||(Number(popcorn) < 0 ) )
  {
    alert("quantity error cause negative");
  }

  if(username==""){
    alert("username cannot be Empty");
  }

  if(username.includes("@"))
  {
    var x = username.split("@");
    var x1 = x[0];
    var x2 = x[1];
    if (x1 ==" ")
    {
      alert("email address not in correct form");
    }

    if(x2.includes("."))
    {
      var y = x2.split(".");
      var y1 =y[0];
      var y2 = y[1];
      if(y1==" " || y2==" ")
      {
        alert(" email address not in correct form");
      }
    }
    else{
      alert("email address not in correct form");
    }
  }
  else{
    alert("email address not in correct form");
  }
  var freeShip = document.getElementById("freeShip")
  var expressShip = document.getElementById("expressShip")
  var normalShip = document.getElementById("normalShip")
  if(free.checked == false){
    if(express.checked == false){
      if(normal.checked == false){
        alert("Shipping Option must be choosed");
      }
    }
  }

  if(password==""){
      alert(" Password cannot be empty");
    }

}
