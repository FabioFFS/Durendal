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
    <link rel="shortcut icon" href="#">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Titulo-->
    <title>Disciplinas</title>

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

        <!--Adição de nova disciplna-->
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8 center-align z-depth-1">
                <b>Nova Disciplina</b>
                <input placeholder="" id="novo-placeholder" type="text" class="validate" name="nome_disciplina">
                <i class="small material-icons center-align tooltipped" data-position="right" data-tooltip="Exemplo: Matemática; Português...">info_outline</i>
                <label for="novo-placeholder">Nome da Disciplina</label>
                <input placeholder="" id="novo-placeholder" type="number" class="validate" name="carga_horaria">
                <label for="novo-placeholder">Carga Horária Semanal</label>

                <div class="input-field col s12">
                    <select multiple>
                        <?php
                        $c=1;
                            if($c=1){
                                for($a=1;$a<2;$a++){?>
                                    <option>A</option>
                            <?php
                                }
                            }else{
                                
                            }
                            ?>
                        
                    </select>
                    <label>Professores da Disciplina</label>
                </div>

                <div class="row center-align">
                    <button type="submit" class="waves-effect waves-light btn blue">Salvar</button>
                </div>
            </div>
            <div class="col s2"></div>
        </div>

        <!--relatórios de disciplinas-->
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8 center-align z-depth-1">
                <b>Disciplinas Registradas</b>
                <table class="center-align">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Carga Semanal</th>
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
<script type="text/javascript" src="../materialize/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.js"></script>
<!--Multi-Select-->
<script>
    $(document).ready(function(){
    $('select').formSelect();
  });
</script>
<!--Icones com info-->
<script>
    $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
</script>
</body>
</html>