<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>jQuery SerializeTable</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.serializetable.js"></script>
	<link rel="stylesheet" href="./css/style.css" />
	<script type="text/javascript">
		$(document).ready(function(){
			$("table").serializeTable({
				file: "ajax.php",
				params: "registration",
				data: "#return"
			});
		});
	</script>
</head>
<body>
	<div id="main">
		<h1>jQuery SerializeTable Example</h1>
		<ul id="nav">
			<li><a href="https://github.com/hebertialmeida/Serialize-Table#readme">Documentation</a></li>
			<li><a href="https://github.com/hebertialmeida/Serialize-Table/archives/master">Download</a></li>
			<li><a href="https://github.com/hebertialmeida/Serialize-Table/">View on Github</a></li>
		</ul>
		<p>jQuery SerializeTable is a jquery plugin that get data from table when click in row. And make into JSON all data, and can be read by PHP and return to fields or to any page by AJAX.</p>
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
					<td rel="region">London & SE</td>
				</tr>
				<tr>
					<td rel="name">Luis Silva</td>
					<td rel="university">Bath Spa</td>
					<td rel="post_code">BA2 9BN</td>
					<td rel="region">South West</td>
				</tr>
				<tr>
					<td rel="name">Rafael Kowal</td>
					<td rel="university">Oxford</td>
					<td rel="post_code">OX1 2DH</td>
					<td rel="region">London & SE</td>
				</tr>
				<tr>
					<td rel="name">Isaque Siqueira</td>
					<td rel="university">York College</td>
					<td rel="post_code">YO23 2BB</td>
					<td rel="region">North west</td>
				</tr>
				<tr>
					<td rel="name">Alex Arno</td>
					<td rel="university">Worcester Tech</td>
					<td rel="post_code">WR1 2JF</td>
					<td rel="region">West Mids</td>
				</tr>
			</tbody>
		</table>
		<div id="return"></div>
	</div>
</body>
</html>