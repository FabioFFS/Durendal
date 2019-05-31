<?php
    require_once '../../Controller/LoginCadastro/CadastroControl.php';
    /*if(isset($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['repetir_senha'], $_POST['tipo']))
            {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = (new Funcoes())->cripto($_POST['senha']);
                $repetir_senha = (new Funcoes())->cripto($_POST['repetir_senha']);
                $tipo = $_POST['tipo'];
                
                (new CadastroControl())->check($nome, $email, $senha, $repetir_senha, $tipo);
                
            }*/
?>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Durendal</title>
</head>

<body class="">
    <div class="row"></div>
    <div class="row">
        <div class="col s4"></div>
        <div class="col s4 center-align z-depth-1">
            <h4><b>Cadastro</b></h4>
            <!--<form action="../../Controller/LoginCadastro/CadastroControl.php" method="POST">-->
            <form method="POST">
                <input placeholder="Nome" id="novo-placeholder" type="text" class="validate" name="nome" required>
                <label for="first_name"></label>
                <input placeholder="E-Mail" id="novo-placeholder" type="email" class="validate" name="email" required>
                <label for="first_name"></label>
                <input placeholder="Senha" id="novo-placeholder" type="password" class="validate" name="senha" required>
                <label for="first_name"></label>
                <input placeholder="Repetir Senha" id="novo-placeholder" type="password" class="validate" name="repetir_senha" required>
                <label for="first_name"></label>
                <p>
                    <label>
                        <input name="tipo" type="radio" value="professor"/>
                        <span class="black-text">Professor</span>
                    </label>
                    <label>
                        <input name="tipo" type="radio" value="instituicao"/>
                        <span class="black-text">Insitituição</span>
                    </label>
                </p>
                <button class="waves-effect waves-light btn blue" onsubmit="" type="submit" id="cadastrar">Cadastrar</button>
                <button class="waves-effect waves-light btn red" onclick="window.location.href='Login.php'">Cancelar</button>
            </form>
        </div>
        <div class="col s4"></div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
           alert("Ok");
        });
        
        function salvar()
        {
            $.ajax({
            url: "././Controller/LoginCadastro/CadastroControl.php",
            type: "POST",
            data: "nome=nome&email=email&senha=senha&repetir_senha=repetir_senha&tipo=tipo",
            dataType: "html"
            )};
        }
        
        $.(#cadastrar).click(function (){
            salvar();
            console.log("FON");
        });
    </script>
</body>
</html>