<div class="article">
	<?php
		$no=1;
		foreach ($galeri->result() as $value) {
	?>
			<div class="galeri <?php if($no==3) echo 'akhir'; ?>">
				<a href="<?php echo site_url().'/cLayout/galeriDetil/'.$value->idGaleri; ?>">
					<?php if($value->diskon>0) echo '<div class="promo">SALE '.$value->diskon.'%</div>'; ?>
					<img src="<?php echo base_url().'assets/images/galeri/'.$value->foto.'.jpg'; ?>">
					<h1><?php echo $value->nama; ?></h1>
					<p>Rp. <?php echo $value->harga; ?></p>
				</a>
			</div>
	<?php
		if($no==3) echo '<br clear="both">';
		$no=($no==3)?1:$no+1;
		}
	?>
	<br clear="both">
</div>