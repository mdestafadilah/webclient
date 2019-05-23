<h1>Web Service</h1>
<?php echo anchor('rest_client_barang/get_all_barang_crud_html', '<h3>Browse</h3>')?>
<?php echo form_open('rest_client_barang/add_barang_rest');?>
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" value="" name="nama" />
	</tr>
	<tr>
		<td>Jenis</td>
		<td><input type="text" value="" name="jenis" />
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" value="" name="harga" />
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="Simpan" />
	</tr>
</table>
<?php echo form_close()?>