function submitCategoria() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var url = document.getElementById("catProd");
    xhttp.open("POST", "src/action/cadCategoria.php?categoria="+url.value, false);
    xhttp.send();
    reloadCategoria();
}

function submitDelCategoria(id, arg) {    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    xhttp.open("POST", "src/action/delCategoria.php?id="+id, false);
    xhttp.send();
    if (arg == "0") {
	reloadDelCategoria();
    } else if (arg == "1") {
	loadPesqCategoria();
    }
}

function submitUpdCategoria(id, arg) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var url = document.getElementById("catProd");
    xhttp.open("POST", "src/action/updCategoria.php?idCat="+id+"&catProd="+catProd.value, false);
    xhttp.send();
    if (arg == "0") {
	reloadDelCategoria();
    }
    else if (arg == "1") {
	loadPesqCategoria();
    }
}

function submitMarca() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var url = document.getElementById("marca");
    xhttp.open("POST", "src/action/cadMarca.php?marca="+url.value, false);
    xhttp.send();
    reloadMarca();
}

function submitDelMarca(id) {    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    xhttp.open("POST", "src/action/delMarca.php?id="+id, false);
    xhttp.send();
    reloadDelMarca();
}

function submitUpdMarca(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var url = document.getElementById("marca");
    xhttp.open("POST", "src/action/updMarca.php?id="+id+"&marca="+url.value, false);
    xhttp.send();
    reloadDelMarca();
}

function submitCliente() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var cpf = document.getElementById("cpf");
    var nome = document.getElementById("nome");
    var telefone = document.getElementById("telefone");
    var url = "cpf="+cpf.value+"&nome="+nome.value+"&telefone="+telefone.value;
    xhttp.open("POST", "src/action/cadCliente.php?"+url, false);
    xhttp.send();
    reloadCliente();
}

function submitDelCliente(id, arg) {    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    xhttp.open("POST", "src/action/delCliente.php?cpf="+id, false);
    xhttp.send();
    if (arg == "0")
	reloadDelClinte();
}

function submitUpdCliente(arg) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var cpf = document.getElementById("cpf").value;
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    var url = "cpf="+cpf+"&nome="+nome+"&telefone="+telefone;
    xhttp.open("POST", "src/action/updCliente.php?"+url, false);
    xhttp.send();
    if (arg == "0")
	reloadDelClinte();
}

function submitPesqCategoria() {
    document.getElementById("title").innerHTML = "Pesquisar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    var url = document.getElementById("cat").value;
    xhttp.open("POST", "src/form/pesqCategoria.php?cat="+url, false);
    xhttp.send();
}

function submitProduto() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };    
    var codBarra = document.getElementById("codBarra").value;
    var desc = document.getElementById("desc").value;
    var qtd = document.getElementById("qtd").value;
    var precoCompra = document.getElementById("precoCompra").value;
    var precoVenda = document.getElementById("precoVenda").value;    
    var categoria = document.getElementById("categoria").value;
    var marca = document.getElementById("marca").value;
    var url = "codBarra="+codBarra+"&desc="+desc+"&qtd="+qtd+"&precoCompra="+precoCompra+"&precoVenda="+precoVenda+"&categoria="+categoria+"&marca="+marca;
    xhttp.open("POST", "src/action/cadProduto.php?"+url, false);
    xhttp.send();
    reloadProduto();
}

function submitDelProduto(id, arg) {    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    xhttp.open("POST", "src/action/delProduto.php?id="+id, false);
    xhttp.send();
    if (arg == "0") {
	reloadDelProduto();
    } else if (arg == "1") {
	loadPesqProduto();
    }
}

function submitUpdProduto(arg) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var id = document.getElementById("id").value;
    var desc = document.getElementById("desc").value;
    var precoCompra = document.getElementById("precoCompra").value;
    var precoVenda = document.getElementById("precoVenda").value;
    var qtd = document.getElementById("qtd").value;
    var categoria = document.getElementById("categoria").value;
    var marca = document.getElementById("marca").value;
    var url = "id="+id+"&desc="+desc+"&qtd="+qtd+"&precoCompra="+precoCompra+"&precoVenda="+precoVenda+"&categoria="+categoria+"&marca="+marca;
    xhttp.open("POST", "src/action/updProduto.php?"+url, false);
    xhttp.send();
    if (arg == "0") {
	reloadDelProduto();
    }
    else if (arg == "1") {
	loadPesqProduto();
    }
}

function submitPesqProduto() {
    document.getElementById("title").innerHTML = "Pesquisar produto";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    var url = document.getElementById("tag").value;
    xhttp.open("POST", "src/form/pesqProduto.php?tag="+url, false);
    xhttp.send();
}
