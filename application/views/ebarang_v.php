<h1>Web Service</h1>
<?php echo anchor('rest_client_barang/get_all_barang_crud_html', '<h3>Browse</h3>')?>
<?php echo form_open('rest_client_barang/edit_barang');?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="text" value="<?php echo @$data->nama?>" name="nama" />
			<input type="hidden" value="<?php echo @$data->idbarang?>" name="idbarang" />
		</td>
	</tr>
	<tr>
		<td>Jenis</td>
		<td><input type="text" value="<?php echo @$data->jenis?>" name="jenis" /></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" value="<?php echo @$data->harga?>" name="harga" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="Update" /></td>
	</tr>
</table>
<?php echo form_close()?>