<div class="search-doctor">
<?php echo form_open('rest_client_barang/cari_barang_rest');?>
		<select name="specialistid" id="specialistid" class="select4 h30">
			<option value="215">215</option>
		</select>
		<input placeholder="Nama Dokter" id="nama_dokter" name="nama_dokter" type="text">
		<input placeholder="Nama Klinik" id="nama_klinik" name="nama_klinik" type="text">
		<!-- <button type="button" onclick="ajaxSearchDokter()"><i class="fa fa-search"></i></button> -->
		<input type="submit" class="button" id="submit" value="Send" />
	</form>
</div>