<?php
	$json = $_REQUEST["registration"];
	$obj = json_decode($json);
?>
<h1>Fields of Table</h1>
<p></p>
<code>
	JSON
	<?php echo $json ?>
</code>
<hr />
<code><?php print_r($obj) ?></code>
<form action="">
	<ul id="form">
		<li>
			<label for="">Name:</label>
			<input type="text" value="<?php echo $obj[0]->name?>" />
		</li>
		<li>
			<label for="">University:</label>
			<input type="text" value="<?php echo $obj[0]->university?>" />
		</li>
		<li>
			<label for="">Post Code:</label>
			<input type="text" value="<?php echo $obj[0]->post_code?>" />
		</li>
		<li>
			<label for="">Region:</label>
			<input type="text" value="<?php echo $obj[0]->region?>" /><br />
		</li>
	</ul>
</form>