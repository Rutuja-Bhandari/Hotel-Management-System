function sendData() {
  var input_value = document.getElementById("input_value").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "details.php?input_value=" + input_value, true);
  xhttp.send();
}

function checkin() {
  var input_value = document.getElementById("input_value").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("Successfully Check In!!");
    }
  };
  xhttp.open("GET", "checkin.php?input_value=" + input_value, true);
  xhttp.send();
}


function checkout() {
  var input_value = document.getElementById("input_value").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("Successfully Check Out !!");
    }
  };
  xhttp.open("GET", "checkout.php?input_value=" + input_value, true);
  xhttp.send();
}
function cancel() {
  var input_value = document.getElementById("input_value").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("Successfully Cancel Booking !!");
    }
  };
  xhttp.open("GET", "cancel.php?input_value=" + input_value, true);
  xhttp.send();
}


function Delete() {
  var input_value = document.getElementById("input_value").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("Deleted Successfully !!");
    }
  };
  xhttp.open("GET", "delete.php?input_value=" + input_value, true);
  xhttp.send();
}

