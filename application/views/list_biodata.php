<?php

echo $judul;
?>
<hr>

<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA</th>
		<th>NIM</th>
		<th>Alamat</th>
	</tr>
<?php 
	foreach ($ as $b)
	{
		echo "<tr>
		<td>$b->Id</td>
		<td>$b->nama</td>
		<td>$b->nim</td>
		<td>$b->alamat</td>
		</tr>";
	}
?>
</table>