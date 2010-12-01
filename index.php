<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>jQuery SerializeTable</title>
	<meta content="jQuery SerializeTable is a jquery plugin that get data from table when click in row. And make into JSON all data, and can be read by PHP and return to input or to any element by AJAX." name="description">
	<meta content="serialize table, javascript, javascript ajax, jquery" name="keywords">
	<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
	<a href="https://github.com/hebertialmeida/Serialize-Table/"><img alt="Fork me on GitHub" src="http://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" style="position: fixed; top: 0pt; right: 0pt; border: 0pt none;"></a>
	<div id="main">
		<h1>jQuery SerializeTable Example</h1>
		<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://hebertialmeida.com/plugins/serialize-table/" data-via="hebertialmeida">Tweet</a>


		<ul id="nav">
			<li><a href="http://hebertialmeida.com/plugins/serialize-table/#download">Download</a></li>
			<li><a href="http://hebertialmeida.com/plugins/serialize-table/#documentation">Usage</a></li>
		</ul>
		<p>jQuery SerializeTable is a jquery plugin that get data from table when click in row. And make into JSON all data, and can be read by PHP and return to input or to any element by AJAX.</p>
		<div id="demo">
			<h2>Click in row to view demo</h2>
			<table cellspacing="0" border="1">
				<thead>
					<tr>
						<th>Name</th>
						<th>University</th>
						<th>Postcode</th>
						<th>Region</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rel="name">Heberti Almeida</td>
						<td rel="university">Oxford Brookes</td>
						<td rel="post_code">OX3 0BT</td>
						<td rel="region">London</td>
					</tr>
					<tr>
						<td rel="name">Luis Silva</td>
						<td rel="university">Bath Spa</td>
						<td rel="post_code">BA2 9BN</td>
						<td rel="region">South West</td>
					</tr>
					<tr>
						<td rel="name">Rafael Kowal</td>
						<td rel="university">York College</td>
						<td rel="post_code">YO23 2BB</td>
						<td rel="region">North west</td>
					</tr>
					<tr>
						<td rel="name">Isaque Siqueira</td>
						<td rel="university">Oxford</td>
						<td rel="post_code">OX1 2DH</td>
						<td rel="region">London</td>
					</tr>
					<tr>
						<td rel="name">Alex Arno</td>
						<td rel="university">Worcester Tech</td>
						<td rel="post_code">WR1 2JF</td>
						<td rel="region">West Mids</td>
					</tr>
					<tr>
						<td rel="name">Heber Aragão</td>
						<td rel="university">York College</td>
						<td rel="post_code">YO23 2BB</td>
						<td rel="region">North west</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div id="return"></div>
		
		<div id="documentation">
			<h2>How to use it</h2>
<pre>
<code class="block">&lt;script src="jquery.js"&gt;&lt;/script&gt;
&lt;script src="jquery.serializetable.js"&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(function() {
	$("#your_table").serializeTable({
		"file": "path/to/file.php",
		"params": "parameter_name",
		"data": "#element"
	});
});
&lt;/script&gt;
</code>
</pre>
		
			<h2>Options</h2>
			<ul class="opt">
				<li><b>file:</b> Name of AJAX file. Defaults to <code class="small">empty</code>.</li>
				<li><b>params:</b> Name of parameter to request. Defaults to <code class="small">params</code>.</li>
				<li><b>data:</b> Element, ID or Class to return AJAX data. Defaults to <code class="small">#content</code>.</li>
				<li><b>attr:</b> Attribute that contains the field name. Defaults to <code class="small">rel</code>.</li>
				<li><b>loading_text:</b> Text displayed on loading. Defaults to <code class="small">empty</code>.</li>
				<li><b>loading_class:</b> Class to personalize loading. Defaults to <code class="small">serializetable-ldg</code>.</li>
			</ul>
			
			<h2>Usage</h2>
			<h3>Plugin</h3>
<pre>
<code class="block">&lt;script&gt;
$(document).ready(function() {
	$("#my_table").serializeTable({
		"file": "ajax.php",
		"params": "juice",
		"data": "#return"
	});
});
&lt;/script&gt;
</code>
</pre>

			<h3>HTML</h3>
<pre>
<code class="block">&lt;table&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Name&lt;/th&gt;
			&lt;th&gt;Color&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td rel="name"&gt;Heberti&lt;/td&gt;
			&lt;td rel="color"&gt;Blue&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td rel="name"&gt;Luis&lt;/td&gt;
			&lt;td rel="color"&gt;Green&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;div id="return"&gt;&lt;/div&gt;
</code>
</pre>
			<h3>PHP REQUEST</h3>
<pre>
<code class="block">&lt;?php
	$json = $_REQUEST["juice"];
	$obj = json_decode($json);
?&gt;	

&lt;!-- Sample --&gt;
&lt;input type="text" value="&lt;?php echo $obj[0]-&gt;name?&gt;" /&gt;
&lt;input type="text" value="&lt;?php echo $obj[0]-&gt;color?&gt;" /&gt;
</code>
</pre>
		</div>
		<div id="download">
			<h2>Download</h2>
			<ul class="opt">
				<li><a href="https://github.com/hebertialmeida/Serialize-Table/raw/master/js/jquery.serializetable.js" title="Download normal version">jquery.serializetable.js</a></li>
				<li><a href="https://github.com/hebertialmeida/Serialize-Table/raw/master/js/jquery.serializetable.min.js" title="Download minified version">jquery.serializetable.min.js</a></li>
				<li><a href="https://github.com/hebertialmeida/Serialize-Table/archives/master" title="Download all files">All files in github</a></li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<a href="http://twitter.com/hebertialmeida">@hebertialmeida built this</a>
	</div>
	
	<!-- js -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.serializetable.js"></script>
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("table").serializeTable({
				file: "ajax.php",
				params: "registration",
				data: "#return",
				loading_text: "Loading..."
			});
		});
	</script>
	
	<!-- google analytics -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-12603960-1");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
	<!-- end -->
</body>
</html>