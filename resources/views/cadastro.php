<style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
    /* CSS reset */
    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        margin: 10px;
    }

    a {
        text-decoration: none;
    }

    /* esconde as ancoras da tela */
    a.links {
        display: none;
    }

    /* content que contem os formulários */
    .content {
        width: 500px;
        margin: 0px auto;
        position: relative;
    }

    /* formatando o cabeçalho dos formulários */
    h1 {
        font-size: 48px;
        color: #999;
        padding: 10px 0;
        font-family: Arial, sans-serif;
        font-weight: bold;
        text-align: center;
        padding-bottom: 30px;
    }

    h1:after {
        content: ' ';
        display: block;
        width: 100%;
        height: 2px;
        margin-top: 10px;
        background: -webkit-linear-gradient(left, rgba(147, 184, 189, 0) 0%, rgba(147, 184, 189, 0.8) 20%, rgba(147, 184, 189, 1) 53%, rgba(147, 184, 189, 0.8) 79%, rgba(147, 184, 189, 0) 100%);
        background: linear-gradient(left, rgba(147, 184, 189, 0) 0%, rgba(147, 184, 189, 0.8) 20%, rgba(147, 184, 189, 1) 53%, rgba(147, 184, 189, 0.8) 79%, rgba(147, 184, 189, 0) 100%);
    }

    p {
        margin-bottom: 15px;
    }

    p:first-child {
        margin: 0px;
    }

    label {
        color: #405c60;
        position: relative;
    }

    /**** advanced input styling ****/
    /* placeholder */
    ::-webkit-input-placeholder {
        color: #bebcbc;
        font-style: italic;
    }

    input:-moz-placeholder,
    textarea:-moz-placeholder {
        color: #bebcbc;
        font-style: italic;
    }

    input {
        outline: none;
    }

    input:not([type="checkbox"]) {
        width: 95%;
        margin-top: 4px;
        padding: 10px;
        border: 1px solid #b2b2b2;

        -webkit-border-radius: 3px;
        border-radius: 3px;

        -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
        box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;

        -webkit-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    /*estilo do botão submit */
    input[type="submit"] {
        width: 100% !important;
        cursor: pointer;
        background: #999;
        padding: 8px 5px;
        color: #fff;
        font-size: 20px;
        border: 1px solid #fff;
        margin-bottom: 10px;
        text-shadow: 0 1px 1px #333;

        -webkit-border-radius: 5px;
        border-radius: 5px;

        transition: all 0.2s linear;
    }

    input[type="submit"]:hover {
        background: #4ab3c6;
    }

    /*marcando os links para mudar de um formulário para outro */
    .link {
        position: absolute;
        background: #e1eaeb;
        color: #7f7c7c;
        left: 0px;
        height: 20px;
        width: 440px;
        padding: 17px 30px 20px 30px;
        font-size: 16px;
        text-align: right;
        border-top: 1px solid #dbe5e8;

        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px;
    }

    .link a {
        font-weight: bold;
        background: #f7f8f1;
        padding: 6px;
        color: #999;
        margin-left: 10px;
        border: 1px solid #000000;

        -webkit-border-radius: 4px;
        border-radius: 4px;

        -webkit-transition: all 0.4s linear;
        transition: all 0.4s linear;
    }

    .link a:hover {
        color: #39bfd7;
        background: #f7f7f7;
        border: 1px solid #4ab3c6;
    }

    /* estilos para para ambos os formulários */
    #cadastro,
    #login {
        position: absolute;
        top: 0px;
        width: 88%;
        padding: 18px 6% 60px 6%;
        margin: 0 0 35px 0;
        background: rgb(247, 247, 247);
        border: 1px solid rgba(147, 184, 189, 0.8);

        -webkit-box-shadow: 5px;
        border-radius: 5px;

        -webkit-animation-duration: 0.5s;
        -webkit-animation-timing-function: ease;
        -webkit-animation-fill-mode: both;

        animation-duration: 0.5s;
        animation-timing-function: ease;
        animation-fill-mode: both;
    }

    #paracadastro:target~.content #cadastro,
    #paralogin:target~.content #login {
        z-index: 2;
        -webkit-animation-name: fadeInLeft;
        animation-name: fadeInLeft;

        -webkit-animation-delay: .1s;
        animation-delay: .1s;
    }

    #registro:target~.content #login,
    #paralogin:target~.content #cadastro {
        -webkit-animation-name: fadeOutLeft;
        animation-name: fadeOutLeft;
    }

    /*fadeInLeft*/
    @-webkit-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-20px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /*fadeOutLeft*/
    @-webkit-keyframes fadeOutLeft {
        0% {
            opacity: 1;
            -webkit-transform: translateX(0);
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(-20px);
        }
    }

    @keyframes fadeOutLeft {
        0% {
            opacity: 1;
            transform: translateX(0);
        }

        100% {
            opacity: 0;
            transform: translateX(-20px);
        }
    }

</style>
<html ng-app='app'>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="js\usuario.js"></script>
</head>
<div ng-controller="usuarioCtrl">
    <div class="container">
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="content">
            <div id="cadastro">
                    <h1>Cadastro</h1>
                    <p>
                        <label for="url">URL BASE</label>
                        <input id="url" name="url" ng-model="url" type="text" placeholder="URL SERVER" />
                    </p>
                    <p>
                        <label for="nome">Seu nome</label>
                        <input id="nome" name="nome" ng-model="nome" required="required" type="text" placeholder="Nome" />
                    </p>

                    <p>
                        <label for="cpfcnpj">Seu CPF/CNPJ</label>
                        <input id="cpfcnpj" name="cpfcnpj" ng-model="cpfcnpj" required="required" type="text"
                            placeholder="98746513287" />
                    </p>

                    <p>
                        <label for="senha">Sua senha</label>
                        <input id="senha" name="senha" ng-model="senha" required="required" type="password" placeholder="!$%#FJHAGJHG" />
                    </p>
                    <p>
                        <label for="endereco">Seu endereço</label>
                        <input id="endereco" name="endereco" ng-model="endereco" type="text" placeholder="Rua dos bobos n° 0" />
                    </p>
                    <p>
                        <label for="telefone">Seu telefone</label>
                        <input id="telefone" name="telefone"  ng-model="telefone" type="text" placeholder="(31)8974-7986" />
                    </p>

                    <p>
                        <button type="button" class="btn btn-primary" ng-click="cadastrar()">CADASTRAR</button>
                    </p>

                    <p class="link">
                        Já tem conta?
                        <a href="/login"> Ir para Login </a>
                        <a href="/">Home Page</a>
                    </p>
            </div>
        </div>
    </div>
</div>
</html>