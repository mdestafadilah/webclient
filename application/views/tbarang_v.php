<style>
	tr, td{
		padding:3px 8px 3px 10px;
	}
</style>
<h1>Web Service</h1>
<?php echo anchor('rest_client_barang/form_add_barang', '<h3>Input</h3>')?>
<?php echo anchor('rest_client_barang/form_cari_barang', '<h3>Cari</h3>')?>
<table border="1" style="border-collapse:collapse" width="50%">
	<tr>
		<td>No.</td>
		<td>Nama</td>
		<td>Jenis</td>
		<td>Harga</td>
		<td colspan="2">Kelola</td>
	</tr>
	<?php $i=1; foreach($barang as $brg){ ?>
	<tr>
		<td><?php echo $i++?></td>
		<td><?php echo $brg->nama?></td>
		<td><?php echo $brg->jenis?></td>
		<td><?php echo $brg->harga?></td>
		<td><?php echo anchor('rest_client_barang/form_edit_barang/'.$brg->idbarang, 'Edit')?></td>
		<td><?php echo anchor('rest_client_barang/del_barang/'.$brg->idbarang, 'Hapus')?></td>
	</tr>
	<?php } ?>
</table>