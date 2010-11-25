<?
	$json = $_REQUEST["nome"];
	$obj = json_decode($json);
?>
<h1>Fields of Table</h1>
<form action="">
	<ul>
		<li>
			<label for="">Name:</label>
			<input type="text" value="<?=$obj[0]->nome;?>" />
		</li>
		<li>
			<label for="">Serie:</label>
			<input type="text" value="<?=$obj[0]->serie;?>" />
		</li>
		<li>
			<label for="">Escola:</label>
			<input type="text" value="<?=$obj[0]->escola;?>" />
		</li>
		<li>
			<label for="">Turma:</label>
			<input type="text" value="<?=$obj[0]->turma;?>" /><br />
		</li>
	</ul>
</form>