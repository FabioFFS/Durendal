<?php
Include_once "../Biblioteca/Instituicao.php";
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
    <nav>
        <div class="nav-wrapper green">
            <a href="#" class="brand-logo">Durendal</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                   <!-- <li><a href="ProfessorView.php">Professor</a></li>
                    <li><a href="TurmaView.php">Turma</a></li>
                    <li><a href="GradeView.php">Grade</a></li>
                    <li><a href="Login.php">SAIR</a></li>-->
                    <?php
                    menu();
                    ?>
                </ul>
            </div>
        </nav>
        <!--Espaçamento de pagina-->
        <div class="row"></div>

        <!--Adição de nova disciplna-->
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8 center-align z-depth-1">
                <b>Nova Disciplina</b>
                <input placeholder="" id="novo-placeholder" type="text" class="validate">
                <label for="novo-placeholder">Nome da Disciplina</label>
                <input placeholder="" id="novo-placeholder" type="text" class="validate">
                <label for="novo-placeholder">Carga Horária</label>
                <input placeholder="Ex. Jose Fernandes, Raquel Maria, Mariana Almeida" id="novo-placeholder" type="text" class="validate">
                <label for="novo-placeholder">Professores da Disciplina</label>

                <div></div>
                    <a class="waves-effect waves-light btn">Salvar</a>
                
            </div>
            <div class="col s2"></div>
        </div>

        <!--relatórios de disciplinas-->
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8 center-align z-depth-1">
                <b>Discplinas</b>
                <table class="center-align">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Carga</th>
                        <th>Professores</th>
                    </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>n/a</td>
                    <td>n/a</td>
                    <td><a href=""><i class="small material-icons center-align">zoom_out_map</i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col s2"></div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>