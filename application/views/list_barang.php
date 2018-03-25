<?php
//Data Barang
echo $judul;
?>
<hr>

<table border="1">
	<tr>
		<th>
			KODE BARANG
		</th>
		<th>
			NAMA BARANG
		</th>
		<th>
			HARGA
		</th>
	</tr>
<?php 
	foreach ($barang as $b)
	{
		echo "<tr>
		<td>$b->kode_barang</td>
		<td>$b->nama_barang</td>
		<td>$b->harga</td>
		</tr>";
	}
	//echo print_r($barang); 
	//foreach ($barang as $b) {
	// 	echo $b->nama_barang.'<br>';
	// }
?>
</table>