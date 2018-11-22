<?php
?>
    <!DOCTYPE html>
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
                <h4 class="">LOGIN</h4>
                <div>
                    <input placeholder="" id="first_name" type="text" class="validate" name="email">
                    <label for="first_name">E-MAIL</label>
                    <input placeholder="" id="password" type="password" class="validate" name="senha">
                    <label for="first_name">Senha</label>
                </div>
                <div>
                    <button class="waves-effect waves-light btn blue">Entrar</button>
                </div>
                <div class="row">
                    <a href="Cadastro.php"><button class="waves-effect waves-light btn green">Novo Cadastro</button></a>
                </div>
            </div>
            <div class="col s4"></div>
        </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>