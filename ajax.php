<?
	$json = $_REQUEST["nome"];
	$obj = json_decode($json);
?>
<h1>Campos populados da tabela</h1>
<form action="">
	<ul>
		<li>
			<label for="">Nome:</label>
			<input type="text" name="" value="<?=$obj[0]->nome;?>" id="" />
		</li>
		<li>
			<label for="">Serie:</label>
			<input type="text" name="" value="<?=$obj[0]->serie;?>" id="" />
		</li>
		<li>
			<label for="">Escola:</label>
			<input type="text" name="" value="<?=$obj[0]->escola;?>" id="" />
		</li>
		<li>
			<label for="">Turma:</label>
			<input type="text" name="" value="<?=$obj[0]->turma;?>" id="" /><br />
		</li>
	</ul>
</form>