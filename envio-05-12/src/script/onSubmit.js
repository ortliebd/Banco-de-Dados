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

function submitPesqMarca() {
    document.getElementById("title").innerHTML = "Pesquisar marca";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    var url = document.getElementById("marca").value;
    xhttp.open("POST", "src/form/pesqMarca.php?marca="+url, false);
    xhttp.send();
}

function submitPesqCliente() {
    document.getElementById("title").innerHTML = "Pesquisar cliente";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    var url = document.getElementById("tag").value;
    xhttp.open("POST", "src/form/pesqCliente.php?tag="+url, false);
    xhttp.send();
}


function submitBanda() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var nome = document.getElementById("nome").value;
    var cliente = document.getElementById("cliente").value;
    var url = "nome="+nome+"&cliente="+cliente;
    xhttp.open("POST", "src/action/cadBanda.php?"+url, false);
    xhttp.send();
    reloadBanda();
}

function submitDelBanda(id, arg) {    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    xhttp.open("POST", "src/action/delBanda.php?id="+id, false);
    xhttp.send();
    if (arg == "0") {
	reloadDelBanda();
    } else if (arg == "1") {
	loadPesqBanda();
    }
}

function submitUpdBanda(arg) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var id = document.getElementById("id").value;
    var nome = document.getElementById("nome").value;
    var cliente = document.getElementById("cliente").value;
    var url = "id="+id+"&nome="+nome+"&cliente="+cliente;
    xhttp.open("POST", "src/action/updBanda.php?"+url, false);
    xhttp.send();
    if (arg == "0") {
	reloadDelBanda();
    }
    else if (arg == "1") {
	loadPesqBanda();
    }
}

function submitPesqBanda() {
    document.getElementById("title").innerHTML = "Pesquisar banda";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    var url = document.getElementById("tag").value;
    xhttp.open("POST", "src/form/pesqBanda.php?tag="+url, false);
    xhttp.send();
}

function submitHorario() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("div").innerHTML = this.responseText;
	}
    };
    var horaInicio = document.getElementById("horaInicio").value;
    var duracao = document.getElementById("duracao").value;
    var dataInicio = document.getElementById("dataInicio").value;
    var meses = document.getElementById("meses").value;
    var banda = document.getElementById("banda").value;
    var url = "horaInicio="+horaInicio+"&duracao="+duracao+"&dataInicio="+dataInicio+"&meses="+meses+"&banda="+banda;
    xhttp.open("POST", "src/action/cadHorario.php?"+url, false);
    xhttp.send();
}

function submitRecurso() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var url = document.getElementById("catRecurso");
    xhttp.open("POST", "src/action/cadRecurso.php?categoria="+url.value, false);
    xhttp.send();
}

function submitAplicacao() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var url = document.getElementById("aplicacao");
    xhttp.open("POST", "src/action/cadAplicacao.php?categoria="+url.value, false);
    xhttp.send();
}

function submitReceita() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var cliente = document.getElementById("cliente").value;
    var recurso = document.getElementById("recurso").value;
    var valor = document.getElementById("valor").value;
    var data = document.getElementById("data").value;
    var parcelas = document.getElementById("parcelas").value;
    if (parcelas == "") parcelas = 0;
    var aplicacao = document.getElementById("aplicacao").value;
    var url = "cliente="+cliente+"&recurso="+recurso+"&valor="+valor+"&data="+data+"&parcelas="+parcelas+"&aplicacao="+aplicacao;
    xhttp.open("POST", "src/action/cadReceita.php?"+url, false);
    xhttp.send();
}

function submitDespesa() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    window.alert(this.responseText);
	}
    };
    var recurso = document.getElementById("recurso").value;
    var valor = document.getElementById("valor").value;
    var data = document.getElementById("data").value;
    var parcelas = document.getElementById("parcelas").value;
    if (parcelas == "") parcelas = 0;
    var url = "recurso="+recurso+"&valor="+valor+"&data="+data+"&parcelas="+parcelas;
    xhttp.open("POST", "src/action/cadDespesa.php?"+url, false);
    xhttp.send();
}
