function loadRenda() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "renda.php", true);
  xhttp.send();
}

function loadReceita() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "receita.php", true);
  xhttp.send();
}

function loadDespesa() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "despesa.php", true);
  xhttp.send();
}
