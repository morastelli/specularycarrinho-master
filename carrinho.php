<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <!--ICON NA GUIA-->
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="carrinho\css/estiloCarrinho.css">
</head>
<body>
    <!--LOGO E SETA-->
    <div class="logo">
        <a href="telaInicial.html"><img src="setaespeculary.jpg" class="seta"></a>
        <img src="logoetexto.png" class="logoTamanho">
    </div> 
     <!--TÍTULO-->
     <div class="titulo">
         <h2>Seu carrinho</h2>
     </div>
     
     <!--PRODUTOS-->
     <div class="prot">
        <div class="imagem"><img class="armacao" scale="10%" src="armacaovermelha.png"></div>
        <div class="resto">
            <div class="texto">
                <h4 id="nome">Armação Vermelha</h4>
                <h5 id="preco">R$50,00</h5>
            </div>
            <div class="addremove">
                <button onclick="Remover()" id="remover"class="remove">-</button>
                <input class="number" type="number" name="quantidade" value="0" readonly>
                <button onclick="Adicionar()" id="adicionar" class="add">+</button>
            </div>
            Armação Vermelha Unisex
        </div>
     </Div>
     
     <!--BOTÃO FINALIZE SEU PEDIDO-->
    <div class="alinhaBotao">
        <a href="compra.html"><button>Finalize seu pedido</button></a>
    </div>
</body>
<script src="carrinho.js"></script>
</html>