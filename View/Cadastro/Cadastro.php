<?php
?>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="">
    <div class="row"></div>
    <div class="row">
        <div class="col s4"></div>
        <div class="col s4 center-align z-depth-1">
            <h4><b>Cadastro</b></h4>
            <form action="../Control/Cadastro.php" method="POST">
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
                        <input name="tipo" type="radio"/>
                        <span class="black-text">Professor</span>
                    </label>
                    <label>
                        <input name="tipo" type="radio"/>
                        <span class="black-text">Insitituição</span>
                    </label>
                </p>
                <button class="waves-effect waves-light btn blue" onsubmit="cadastro.Salvar();" ="" type="submit">Salvar</button>
                <button class="waves-effect waves-light btn red" onclick="">Cancelar</button>
            </form>
        </div>
        <div class="col s4"></div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>