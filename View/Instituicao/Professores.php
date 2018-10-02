<?php
include_once "../Biblioteca/Instituicao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="UTF-8">
	<title>Durendal</title>
</head>
<body>
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
	<!--Add novo professor a instituição-->
	<div class="row"></div>
	<div class="row">
		<div class="col s2"></div>
		<div class="col s8 z-depth-1">
			<input placeholder="" id="novo-placeholder" type="text" class="validate">
			<label for="first_name">E-mail professor</label>
			
			<div class="input-field col s12">
				<select multiple>
					<option value="" disabled selected>Disciplinas</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>
				<label>Materialize Multiple Select</label>
			</div>

			<div class="center">
				<a class="waves-effect waves-light btn">Adicionar</a>
			</div>
			
		</div>

		<div class="col s2">

		</div>
	</div>

	<div class="row">
		<div class="col s4"></div>
		<div class="col s4">
			
		</div>
		<div class="col s4"></div>
	</div>

	<div class="row">
		<div class="col s2">
			
		</div>
		<div class="col s8 z-depth-1">
			<table>
				<thead>
					<tr>
						<th>Nome</th>
						<th>E-Mail</th>
						<th>Disciplinas</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>a</td>
						<td>a</td>
						<td>a</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col s2">
			
		</div>
	</div>

</body>
</html>