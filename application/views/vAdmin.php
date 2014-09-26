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
				<li><?php echo anchor('cAdmin', 'login') ?></li>
				<li><?php echo anchor('cAdmin', 'logout') ?></li>
				<li><?php echo anchor('cAdmin', 'profil pengguna') ?></li>
			</ul>
		</div>
		<div class="body">
			<div class="sideBar">
				<ul>
					<h1>Dashboard</h1>
					<?php
						foreach ($dashboard->result() as $value) {
							echo '<li><a href="#">'.$value->nama.'</a></li>';
						}
					?>
				</ul>
			</div>
			<div class="content">
				<div class="breadcumb">
					<p><a href="#">resep mama</a> > <a href="#">kue kukus stroberi lapis</a></p>
				</div>
				<?php
					$this->load->view('admin/'.$page)
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