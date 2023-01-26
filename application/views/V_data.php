<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table border="1">
		<tr>
			<th>Kategori</th>
			<th>Jumlah Data</th>
		</tr>
		<?php foreach($data as $d){ ?>
		<tr>
			<td><?php echo $d->category  ?></td>
           
			<td><?php echo $d->data ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>