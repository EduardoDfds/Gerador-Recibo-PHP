function imprimir(){
    var divReciboCompleto = document.getElementById("container").style.display = "none";
    var divReciboPraImprimir = document.getElementById("reciboImprimir").style.display = "block";
    capturarDados();
}
function voltar(){
    var divReciboCompleto = document.getElementById("container").style.display = "block";
    var divReciboPraImprimir = document.getElementById("reciboImprimir").style.display = "none";
}

/*function capturarDados(){
    var nomePagador = document.getElementById("nomePagador");
    var cpfCnpjPagador = document.getElementById("cpfCnpjPagador");
    var valor = document.getElementById("valorInput");
    var referente = document.getElementById("referente");
    var cidade = document.getElementById("cidadeInput");
    var data = document.getElementById("dataInput");
    var nomeEmissor = document.getElementById("nomeDoEmissor");
    var cpfCnpjEmissor = document.getElementById("cpfEmissor");
    var telefone = document.getElementById("telefone");
    var tipoPagamento = document.getElementsByClassName("radio");
    
    document.getElementById("menssagem1").innerHTML = `Recebemos de ${nomePagador.value} - CPF/CNPJ nº ${cpfCnpjPagador.value}, a importania de ${valor.value},00 reais, referete a ${referente.value}.`;
    document.getElementById("valorPago").innerHTML = `R$ ${valor.value} #`;
    document.getElementById("dataImpressao").innerHTML = `${cidade.value},${data.value}`;
}*/
