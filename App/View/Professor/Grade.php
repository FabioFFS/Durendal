<?php ?>
<html>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="white">
    <!-----------------------------------------------------------Menu-->
    <nav>
        <div class="nav-wrapper blue">
            <a href="#" class="brand-logo">Durendal</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Preferencias.php">Preferencias</a></li>
                <li><a href="Grade.php">Grade</a></li>
                <li><a href="">SAIR</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s1">

        </div>
        <div class="col s10">
            <div class="input-field col s12">
                <select class="browser-default blue lighten-5">
                    <option value="" disabled selected>Escolha uma das instituições</option>
                    <option value="1">Instituição A</option>
                    <option value="2">Instituição B</option>
                    <option value="3">Instituição C</option>
                </select>
            </div>
            <div>
                Aulas dessa instituição divididas por turno
            </div>
        </div>
        <div class="col s1">

        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>

