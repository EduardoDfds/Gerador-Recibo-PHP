<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>

</head>

<body>
    <div id="reciboImprimir">
        <div id="button">
            <p>
                <input type="hidden" name="gerarRecibo">
                <button type="submit" class="submit" onclick="voltar()">
                    <span>Voltar</span>
                </button>
            </p>
            <div id="reciboPraImprimir" class="bordaRecibo">
                <h1>Recibo do pagamento</h1>
                <div>
                    <label class="displayDiv" id="labelPrimeiraVia">
                        <h3>1º Via</h3>
                    </label>
                    <label id="labelPreco"><b class="displayDiv" id="valorPago"></b></label>
                </div>
                <div>
                    <p id="menssagem1" class="menssagem"> Recebemos de <?= $_POST['nomeInput'] ?> - CPF/CNPJ nº <?= $_POST['cpfInput'] ?>, a importania de <?= $_POST['valorInput'] ?>,00 reais, referete a <?= $_POST['referenciaInput'] ?></p>
                    <p id="menssagem2" class="menssagem">Para maior clareza frimamos o presente recibo para que produza os seus efeitos, dando plena, rasa e irrevogável
                        quitação, pelo valor recebido.</p>
                </div>
                <div>
                    <p id="dataImpressao"></p>
                </div>
            </div>
        </div>
</body>

</html>