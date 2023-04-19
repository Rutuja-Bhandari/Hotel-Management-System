function bill() {
    var input_value = document.getElementById("input_value").value;
    // 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result").innerHTML = this.responseText;
        
      }input_value.classList.add("result");
    };
    xhttp.open("GET", "billing.php?input_value=" + input_value, true);
    xhttp.send();
  }