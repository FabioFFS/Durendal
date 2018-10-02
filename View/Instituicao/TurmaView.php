<?php
    include_once '../Biblioteca/Instituicao.php';
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

<body class="white">
   <nav>
    <div class="nav-wrapper green">
        <a href="#" class="brand-logo">Durendal</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <?php
           menu();
          ?>
      </ul>
  </div>
</nav>
<div class="row"></div>
<div class="row">
    <div class="col s2">

    </div>

    <div class="col s8 center-align z-depth-1">
        <form method="POST" action="Control/">
            <h5 class="blue-text"><b>Informações das Turmas</b></h5>
            <div>
                <input placeholder="" id="novo-placeholder" type="text" class="validate">
                <label for="first_name">Nome do Preset</label>
                <input placeholder="" id="novo-placeholder" type="number" class="validate">
                <label for="first_name">Numero de Turmas</label>
                <input placeholder="" id="novo-placeholder" type="number" class="validate">
                <label for="first_name">Aulas Diárias</label>
            </div>
            <div class="input-field col s12">
                <select class="browser-default green lighten-5">
                    <option value="" disabled selected>Dias Letivos</option>
                    <option value="1">1 Dia</option>
                    <option value="2">2 Dias</option>
                    <option value="3">3 Dias</option>
                    <option value="4">4 Dias</option>
                    <option value="5">5 Dias</option>
                    <option value="6">6 Dias</option>
                    <option value="7">7 Dias</option>
                </select>
            </div>
            <div class="input-field col s12">
                <select class="browser-default green lighten-5">
                    <option value="" disabled selected>Escolha o Turno</option>
                    <option value="1">Matutino</option>
                    <option value="2">Vespertino</option>
                    <option value="3">Norturno</option>
                </select>
            </div>

            <div>
                <a class="waves-effect waves-light btn">Salvar</a>
                <a class="waves-effect waves-light btn">Cancelar</a>
            </div>
        </form>
    </div>
    <div>
        <!--Aviso de erro ou sucesso-->
    </div>
    <div class="col s2">
    </div>

</div>

<div class="row">
    <div class="col s2"></div>
    <div class="col s8 z-depth-1">
        <table>
            <thead>
              <tr>
                  <th>Nome</th>
                  <th>Turmas</th>
                  <th>Aulas/Dia</th>
                  <th>Dias Letivos</th>
                  <th>Nota</th>
              </tr>
          </thead>

          <tbody>
              <tr>
                <td>2018/1</td>
                <td>20</td>
                <td>6</td>
                <td>5</td>
                <td>???</td>
            </tr>
        </tbody>
    </table>

</div>
<div class="col s2"></div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.js"></script>
</body>
</html>