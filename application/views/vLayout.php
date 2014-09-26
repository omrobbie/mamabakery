<!DOCTYPE html>
<html>
<head>
	<title>mamabakery.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/font-awesome.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css';?>">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo base_url().'assets/images/chef.png';?>" alt="mama bakery citarasa strawberry buah stroberi">
			<div class="title">
				<h1><a href="#">mama bakery</a></h1>
				<p>citarasa stawberry</p>
			</div>
		</div>
		<div class="topMenu">
			<ul>
				<li><?php echo anchor('cLayout', 'teras'); ?></li>
				<li><?php echo anchor('cLayout/galeri', 'galeri'); ?></li>
				<li><?php echo anchor('cLayout/resep', 'resep mama'); ?></li>
				<li><?php echo anchor('cLayout/tentang', 'tentang kami'); ?></a></li>
				<li><?php echo anchor('cLayout/keranjang', 'keranjang belanja') ?></li>
			</ul>
			<div class="search">
				<input name="txtSearch" placeholder="cari di mamabakery..."></input>
				<button name="btnSearch"><i class="fa fa-search"></i></button>
			</div>
		</div>
		<div class="body">
			<div class="sideBar">
				<ul>
					<h1>Kategori</h1>
					<?php
						foreach ($kategori->result() as $value) {
							echo '<li>'.anchor('cLayout/galeriByIdKategori/'.$value->idKategori, $value->nama).'</li>';
						}
					?>
				</ul>
				<ul>
					<h1>Lokasi Mama</h1>
					<li>Peta dari google</li>
					<!-- <li><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3949.8561645658765!2d115.09705438261075!3d-8.116124196712418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1409966767561" width="230px" height="230px" frameborder="0" style="border:0"></iframe></li> -->
				</ul>
				<ul>
					<h1>Ayo Berbagi Cerita</h1>
					<li style="text-align: center">
						<a class="socmed" href="#"><i class="fa fa-facebook-square"></i></a>
						<a class="socmed" href="#"><i class="fa fa-twitter-square"></i></a>
						<a class="socmed" href="#"><i class="fa fa-pinterest-square"></i></a>
						<a class="socmed" href="#"><i class="fa fa-youtube-square"></i></a>
						<a class="socmed" href="#"><i class="fa fa-rss-square"></i></a>
					</li>
				</ul>
			</div>
			<div class="content">
				<div class="breadcumb">
					<p><a href="#">resep mama</a> > <a href="#">kue kukus stroberi lapis</a></p>
				</div>
				<?php
					$this->load->view('content/'.$page)
				?>
			</div>
			<br clear="both">
		</div>
		<div class="footer">
			<p><?php echo anchor('cLayout', 'teras'); ?> | <?php echo anchor('cLayout/galeri', 'galeri'); ?> | <?php echo anchor('cLayout/resep', 'resep mama'); ?> | <?php echo anchor('cLayout/tentang', 'tentang kami'); ?> | <?php echo anchor('cLayout/keranjang', 'keranjang belanja') ?></p>
			<p>Copyright &copy; 2014 by I Putu Roby Irawan, S.Kom</p>
		</div>
	</div>
</body>
</html>