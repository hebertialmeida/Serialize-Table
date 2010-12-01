<?php
	$json = $_REQUEST["registration"];
	$obj = json_decode($json);
?>
<h2>Fields of Table</h2>
<code class="block">
	JSON <?php echo $json ?>
</code>
<code class="block"><?php print_r($obj) ?></code>
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