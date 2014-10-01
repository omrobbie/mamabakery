<div class="article">
	<div class="title">
		<ul>
			<li><h2>Detil Data Galeri</h2></li>
		</ul>
	</div>
	<input type="button" name="btnSimpan" value="simpan"><input type="button" name="btnSimpan" value="batal">
	<br><br>
	<table width="100%">
		<tr valign="top">
			<td width="1">Kode</td>
			<td width="1">:</td>
			<td><input type="text" name="idGaleri"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td width="1">:</td>
			<td><input type="text" name="idKategori"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td width="1">:</td>
			<td>Rp. <input type="text" name="harga" size="16"></td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td width="1">:</td>
			<td><input type="text" name="diskon" size="3"> %</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td width="1">:</td>
			<td><input type="button" name="btnFoto" value="upload foto..."></td>
		</tr>
		<tr valign="top">
			<td>bahan</td>
			<td width="1">:</td>
			<td>
				<div class="gc_field gc_tinymce">
					<textarea id="description" name="description" class="tinyMCE"></textarea>
				</div>
				<div class="button_set">
					<input type="button" onclick="toggleEditor('description'); return false;" value="Toggle WYSIWYG" />
				</div>	
			</td>
		</tr>
	</table>
</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/tiny_mce/tiny_mce.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/tiny_mce/tiny_mce_init.php';?>"></script>