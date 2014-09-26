<?php
	$value=$galeri->row();
?>
<div class="article">
	<div class="title">
		<ul>
			<li><h2><?php echo $value->nama; ?></h2></li>
		</ul>
	</div>
	<img src="<?php echo base_url().'assets/images/galeri/'.$value->foto.'.jpg'; ?>">
	<h2>Harga : Rp. <?php echo $value->harga ?></h2>
	<?php if($value->diskon>0) echo '<h2>Diskon : '.$value->diskon.'%</h2>';?>
	<br clear="both"><br>
	<?php
		if($value->bahan!='') {
			echo '<strong>Bahan-bahan untuk '.$value->nama.' :</strong>';
			echo $value->bahan;
		}
	?>
	<hr>
	<form method="post" action="<?php echo site_url().'/cLayout/keranjang'; ?>">
		<input type="hidden" name="idGaleri" value="<?php echo $value->idGaleri; ?>">
		<label>Jumlah pesan : </label><input type="text" name="qty" size="2"><button type="submit">pesan</button>
	</form>
</div>