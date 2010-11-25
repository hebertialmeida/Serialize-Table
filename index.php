<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.serializetable.js"></script>
	<link rel="stylesheet" href="./css/style.css" />
	<script type="text/javascript">
		$(document).ready(function(){
	
			// Plugin
			$("table").serializeTable({
				file: "ajax.php",
				params: "nome",
				data: "#return"
			});		
			
		});
	</script>
</head>
<body>
	<table cellspacing="0" border="1">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Série</th>
				<th>Turma</th>
				<th>Escola</th>
			</tr>
		</thead>
		<tr>
			<td rel="nome">Heberti Almeida</td>
			<td rel="serie">2° "ano"</td>
			<td rel="turma">Sala B</td>
			<td rel="escola">Instituto Adventista Paranaense</td>
		</tr>
		<tr>
			<td rel="nome">Isaque's Siqueira</td>
			<td rel="serie">3° ano</td>
			<td rel="turma">Sala G</td>
			<td rel="escola">Colégio Adventista de Tatuí</td>
		</tr>
		<tr>
			<td rel="nome">Luis, Silva</td>
			<td rel="serie">8° ano</td>
			<td rel="turma">Sala E</td>
			<td rel="escola">Colégio Adventista de Maringá</td>
		</tr>
		<tr>
			<td rel="nome">Rafael Kowal</td>
			<td rel="serie">1° ano</td>
			<td rel="turma">Sala D</td>
			<td rel="escola">Colégio Adventista de Tatuapé</td>
		</tr>
		<tr>
			<td rel="nome">Heberti Almeida</td>
			<td rel="serie">5° ano</td>
			<td rel="turma">Sala A</td>
			<td rel="escola">Colégio Adventista de Paranaguá</td>
		</tr>
	</table>
	<span id="return"></span>
</body>
</html>