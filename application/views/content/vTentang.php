<?php
	$value=$tentang->row();
?>
<div class="article">
	<div class="title">
		<ul>
			<li><h2>tentang kami</h2></li>
		</ul>
	</div>
	<img src="<?php echo base_url().'assets/images/'.$value->foto; ?>">
	<?php echo $value->isi; ?>
</div>