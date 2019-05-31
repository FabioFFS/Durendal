<?php
Include_once "../Biblioteca/Instituicao.php";
include "../../Controller/InstituicaoController/HorariosController.php";
$a = new HorariosController();
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
    <title>Durendal</title>
</head>

<body class="">
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
    <!--Espaçamento de pagina-->
    <div class="row"></div>

    <!--Criação de grade-->
    <div class="row">
        <div class="col s2"></div>
        <div class="col s8 z-depth-1">
        <div class="center"><i>Usar informações cadastradas para criação de horário</i></div>
        <div class="center"><button class="waves-effect waves-light btn-small blue">Iniciar</button></div>
        </div>
        <div class="col s2"></div>
    </div>

    <!--Lista de horarios-->
    <div class="row">
        <div class="col s2"></div>
        <div class="col s8 z-depth-1">
        <div class="center"><h6>Voce ainda não possui nenhum horário.</h5></div>
        
        <?php
        $hc = new HorariosController();
        if($hc->viewloader()!=null){?>
            <table class="centered">
                <thead>
                  <tr>
                    <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                  </tr>
              </thead>

              <tbody>
                  <tr>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                </tr>
                <tr>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                </tr>
                <tr>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                    <td>?</td>
                </tr>
            </tbody>
        </table>
        <?php
            }
        ?>
    </div>
    <div class="col s2"></div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>