function loadCadCategoria() {
    document.getElementById("title").innerHTML = "Cadastrar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadCategoria.html", false);
    xhttp.send();
}

function loadListCategoria() {
    document.getElementById("title").innerHTML = "Listar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listCategoria.php", false);
    xhttp.send();
}

function loadUpdCategoria(id) {
    document.getElementById("title").innerHTML = "Atualizar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/updCategoria.php?id="+id, false);
    xhttp.send();
}

function loadCadMarca() {
    document.getElementById("title").innerHTML = "Cadastrar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadMarca.html", false);
    xhttp.send();
}

function loadListMarca() {
    document.getElementById("title").innerHTML = "Listar marca";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listMarca.php", false);
    xhttp.send();
}

function loadUpdMarca(id) {
    document.getElementById("title").innerHTML = "Atualizar marca";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/updMarca.php?id="+id, false);
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
    xhttp.open("POST", "src/form/cadCliente.html", false);
    xhttp.send();
}

function loadListCliente() {
    document.getElementById("title").innerHTML = "Listar cliente";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listCliente.php", false);
    xhttp.send();
}

function loadUpdCliente(id) {
    document.getElementById("title").innerHTML = "Atualizar marca";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/updCliente.php?cpf="+id, false);
    xhttp.send();
}

function loadPesqCategoria() {
    document.getElementById("title").innerHTML = "Pesquisar categoria";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/pesqCategoria.html", false);
    xhttp.send();
}

function loadCadProduto() {
    document.getElementById("title").innerHTML = "Cadastrar produto";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadProduto.php", false);
    xhttp.send();
}

function loadListProduto() {
    document.getElementById("title").innerHTML = "Listar produtos";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listProduto.php", false);
    xhttp.send();
}

function loadUpdProduto(id) {
    document.getElementById("title").innerHTML = "Atualizar produto";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/updProduto.php?id="+id, false);
    xhttp.send();
}

function loadPesqProduto() {
    document.getElementById("title").innerHTML = "Pesquisar produto";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/pesqProduto.html", false);
    xhttp.send();
}

function loadPesqMarca() {
    document.getElementById("title").innerHTML = "Pesquisar marca";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/pesqMarca.html", false);
    xhttp.send();
}

function loadPesqCliente() {
    document.getElementById("title").innerHTML = "Pesquisar cliente";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/pesqCliente.html", false);
    xhttp.send();
}

function loadCadBanda() {
    document.getElementById("title").innerHTML = "Cadastrar banda";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadBanda.php", false);
    xhttp.send();
}

function loadListBanda() {
    document.getElementById("title").innerHTML = "Listar bandas";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listBanda.php", false);
    xhttp.send();
}

function loadUpdBanda(id) {
    document.getElementById("title").innerHTML = "Atualizar banda";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/updBanda.php?id="+id, false);
    xhttp.send();
}

function loadPesqBanda() {
    document.getElementById("title").innerHTML = "Pesquisar banda";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/pesqBanda.html", false);
    xhttp.send();
}

function loadCadHorario() {
    document.getElementById("title").innerHTML = "Cadastrar horario";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadHorario.php", false);
    xhttp.send();
}

function loadCadRecurso() {
    document.getElementById("title").innerHTML = "Cadastrar recurso";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadRecurso.php", false);
    xhttp.send();
}

function loadCadAplicacao() {
    document.getElementById("title").innerHTML = "Cadastrar aplicação";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadAplicacao.php", false);
    xhttp.send();
}

function loadCadReceita() {
    document.getElementById("title").innerHTML = "Cadastrar receita";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadReceita.php", false);
    xhttp.send();
}

function loadCadDespesa() {
    document.getElementById("title").innerHTML = "Cadastrar despesa";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/cadDespesa.php", false);
    xhttp.send();
}

function loadCreditos() {
    document.getElementById("title").innerHTML = "Créditos";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listCreditos.php", false);
    xhttp.send();
}

function loadDebitos() {
    document.getElementById("title").innerHTML = "Débitos";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listDebitos.php", false);
    xhttp.send();
}

function loadRendaBruta() {
    document.getElementById("title").innerHTML = "Renda bruta";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    xhttp.open("POST", "src/form/listRendaBruta.php", false);
    xhttp.send();
}

