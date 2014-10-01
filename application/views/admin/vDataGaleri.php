<div class="article">
	<div class="title">
		<ul>
			<li><h2>Data Galeri</h2></li>
		</ul>
	</div>
    <a href="<?php echo site_url().'/cAdmin/galeriTambah'; ?>"><h3>Tambah data</h3></a>
    <table width="100%" border="1" cellspacing="0">
        <tr>
            <th width="1">No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Foto</th>
            <th width="120">Action</th>
        </tr>
        <?php
            $no=1;
            foreach ($galeri->result() as $value) {
        ?>
                <tr valign="top">
                    <td><?php echo $no ?></td>
                    <td><?php echo $value->nama; ?></td>
                    <td align="right">Rp. <?php echo number_format($value->harga, 0, '.', ','); ?></td>
                    <td>
                        <img src="<?php echo base_url().'assets/images/galeri/'.$value->foto.'.jpg'; ?>">
                    </td>
                    <td align="center"><input type="button" value="update" /><input type="button" value="hapus"</td>
                </tr>
        <?php
                $no++;
            }
        ?>
    </table>
    <a href="<?php echo site_url().'/cAdmin/galeriTambah'; ?>"><h3>Tambah data</h3></a>
</div>