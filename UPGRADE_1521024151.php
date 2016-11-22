<html>
<head>
<title>UTS UPGRADE M. SANDY AGUS W</title>
</head>
	<body>
	<table border='1'>
	<tr>
		<th rowspan="2">INPUT</th>
		<th rowspan="5">OUTPUT</th>
	</tr>
<tr>
	<th>A</th>
	<th>I</th>
	<th>U</th>
	<th>E</th>
	<th>O</th>
</tr>
<tr>
	<td>
		<?php
		$nama="M. SANDY AGUS W";
		echo $nama;
		?>
	</td>
	<td>
		<?php
		$a = substr_count($nama,"A");
		echo $a
		?>
   </td>
	<td>
		<?php
		$i = substr_count($nama,"I");
		echo $i
		?>
	<td>
		<?php
		$u = substr_count($nama,"U");
		echo $u
		?>
	</td>
	<td>
		<?php
		$e = substr_count($nama,"E");
		echo $e
		?>
	</td>
	<td>
		<?php
		$o = substr_count($nama,"O");
		echo $o
		?>
</td>
</tr>

</body>
</html>