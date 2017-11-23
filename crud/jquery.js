function loadCadCatProd() {
    document.getElementById("title").innerHTML = "Cadastrar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "form/cadCatProduto.html", false);
    xhttp.send();
}

function loadListCatProd() {
    document.getElementById("title").innerHTML = "Categorias cadastradas";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "php/actionListCatProduto.php", false);
    xhttp.send();
}

function clearForm() {
    document.getElementById("form").reset();
}

function turnEditOn() {
    document.getElementById("edit").readOnly = false;
}

function reloadContentProduto() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "php/actionListCatProduto.php", false);
    xhttp.send();
}

function loadDelCatProd(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","php/actionDelCatProduto.php?q="+str, false);
    xhttp.send();
    reloadContentProduto();
    window.alert("Elemento excluído");
}

function loadUpdCatProd(str) {
    document.getElementById("title").innerHTML = "Alterar categoria";
    if (str=="") {
	document.getElementById("div").innerHTML="";
	return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState==4 && this.status==200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    }
    xhttp.open("POST","form/updCatProduto.php?q="+str,false);
    xhttp.send();
}

function loadCadMarca() {
    document.getElementById("title").innerHTML = "Cadastrar marca";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "form/cadMarca.html", false);
    xhttp.send();
}

function loadListMarca() {
    document.getElementById("title").innerHTML = "Marcas cadastradas";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "php/actionListMarca.php", false);
    xhttp.send();
}

function loadDelMarca(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","php/actionDelMarca.php?q="+str, false);
    xhttp.send();
    reloadContentMarca();
    window.alert("Elemento excluído");
}

function loadUpdMarca(str) {
    document.getElementById("title").innerHTML = "Alterar marca";
    if (str=="") {
	document.getElementById("div").innerHTML="";
	return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState==4 && this.status==200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    }
    xhttp.open("POST","form/updMarca.php?q="+str,false);
    xhttp.send();
}

function reloadContentMarca() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "php/actionListMarca.php", false);
    xhttp.send();
}

function loadCadCliente() {
    document.getElementById("title").innerHTML = "Cadastrar cliente";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "form/cadCliente.html", false);
    xhttp.send();
}

function loadListCliente() {
    document.getElementById("title").innerHTML = "Clientes cadastrados";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "php/actionListCliente.php", false);
    xhttp.send();
}

function loadDelCliente(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","php/actionDelCliente.php?q="+str, false);
    xhttp.send();
    reloadContentCliente();
    window.alert("Elemento excluído");
}

function loadUpdCliente() {
    document.getElementById("title").innerHTML = "Alterar cliente";
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState==4 && this.status==200) {
	    document.getElementById("div").innerHTML=this.responseText;
	}
    }
    xhttp.open("POST","form/updCliente.php?", false);
    xhttp.send();
}

function reloadContentCliente() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "php/actionListCliente.php", false);
    xhttp.send();
}
