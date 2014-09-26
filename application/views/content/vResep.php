<?php
	function FormatTanggal($tanggal) {
		$format = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu',
			'Jan' => 'Januari',
			'Feb' => 'Februari',
			'Mar' => 'Maret',
			'Apr' => 'April',
			'May' => 'Mei',
			'Jun' => 'Juni',
			'Jul' => 'Juli',
			'Aug' => 'Agustus',
			'Sep' => 'September',
			'Oct' => 'Oktober',
			'Nov' => 'November',
			'Dec' => 'Desember'
		);
		$tanggal=date('D, j M Y', strtotime($tanggal));
		return strtolower(strtr($tanggal, $format));
	}

	foreach ($resep->result() as $value) {
?>
		<div class="article">
			<div class="title">
				<ul>
					<li><h2><?php echo $value->judul; ?></h2></li>
					<li><p>Ditulis pada hari <?php echo FormatTanggal($value->tanggal); ?> oleh <a href="#">Mama Ratih</a> | <a href="#"><i class="fa fa-comment"></i> 21 komentar</a> | <i class="fa fa-eye"></i> <?php echo $value->kunjungan; ?> kunjungan</p></li>
				</ul>
			</div>
			<img src="<?php echo base_url().'assets/images/galeri/'.$value->foto.'.jpg'; ?>">
			<?php echo $value->isi; ?>
			<br clear="both">
			<?php
				if($komentar->num_rows()>0) {
			?>
				<div class="comments">
					<h1><?php echo $komentar->num_rows(); ?> komentar</h1>
					<?php
						foreach ($komentar->result() as $valKomentar) {
					?>
							<div class="comment <?php if($valKomentar->idUser==$value->idUser) echo 'author' ?>">
								<ul>
									<li><h1><?php echo $valKomentar->nama; ?> berkomentar<h1></li>
									<li>Ditulis pada hari <?php echo FormatTanggal($valKomentar->tanggal); ?> pukul <?php echo date('H:i', strtotime($valKomentar->tanggal)); ?></li>
									<br clear="both">
								</ul>
								<p><?php echo $valKomentar->komentar; ?></p>
							</div>
					<?php
						}
					?>
					<div class="pagination">
						<ul>
							<li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
							<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
							<li><a class="selected" href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
						</ul>
					</div>
					<br clear="both">
				</div>
			<?php
				}
			?>

			<div class="reply">
				<h1>Apa pendapatmu tentang ini?</h1>
				<input name="txtNama"></input> Nama anda (diperlukan)<br>
				<input name="txtEmail"></input> Email anda (tidak akan dipublikasikan) (diperlukan)<br>
				<textarea name="txtKomentar"></textarea><br>
				<button name="btnKirim">Kirim Komentar</button>
			</div>
		</div>
<?php
	}
?>