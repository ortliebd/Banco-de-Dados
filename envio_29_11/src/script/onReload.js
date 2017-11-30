function reloadCategoria() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("GET", "src/form/cadCategoria.html", false);
    xhttp.send();
}

function reloadDelCategoria() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listCategoria.php", false);
    xhttp.send();
}

function reloadMarca() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("GET", "src/form/cadMarca.html", false);
    xhttp.send();
}

function reloadDelMarca() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listMarca.php", false);
    xhttp.send();
}

function reloadCliente() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("GET", "src/form/cadCliente.html", false);
    xhttp.send();
}

function reloadDelClinte() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listCliente.php", false);
    xhttp.send();
}

function reloadProduto() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("GET", "src/form/cadProduto.php", false);
    xhttp.send();
}

function reloadDelProduto() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listProduto.php", false);
    xhttp.send();
}
