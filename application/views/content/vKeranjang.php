<div class="article">
	<div class="title">
		<ul>
			<li><h2>daftar belanja anda</h2></li>
		</ul>
	</div>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Qty</th>
			<th>Harga</th>
			<th>Sub Total</th>
			<th>Diskon</th>
			<th>Total</th>
		</tr>
	<?php
		$no=1;
		$grandTotal=0;
		foreach ($this->cart->contents() as $value) {
			$qty=$value['qty'];
			$price=$value['price'];
			$optval=$this->cart->product_options($value['rowid']);
			$diskon=$optval['diskon'];
			//$subTotal=$qty*$price;\
			$subTotal=$value['subtotal'];
			$total=0;
			if($diskon>0) $total=$subTotal*($diskon/100);
			$total=$subTotal-$total;
			$grandTotal+=$total;
	?>
		<tr valign="top">		
			<td align="center"><?php echo $no; ?></td>
			<td align="center"><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td>
            	<form action="<?php echo site_url().'/cLayout/ubahKeranjang'; ?>" method="post">
					<input type="hidden" name="rowid" value="<?php echo $value['rowid']; ?>">
					<input type="text" name="qty" value="<?php echo $qty; ?>" size="1"><input type="submit" value="ubah"	/>
                </form>
                <form action="<?php echo site_url().'/cLayout/hapusKeranjang'; ?>" method="post">
                	<input type="hidden" name="rowid" value="<?php echo $value['rowid']; ?>">
                    <input type="submit" value="hapus" />
                </form>
			</td>
			<td align="right">Rp. <?php echo number_format($price,0,'.',','); ?></td>
			<td align="right">Rp. <?php echo number_format($subTotal,0,'.',','); ?></td>
			<td align="center"><?php if($diskon>0) echo $diskon.'%'; ?></td>
			<td align="right">Rp. <?php echo number_format($total,0,'.',','); ?></td>
		</tr>
	<?php
			$no++;
		}
	?>
		<tr>
			<td colspan="7">Grand Total</td>
			<td align="right">Rp. <?php echo number_format($grandTotal,0,'.',','); ?></td>
		</tr>
        <tr>
        	<td colspan="8" align="center">
            	<a href="<?php echo site_url().'/cLayout/batalBelanja'; ?>"><input type="button" value="batal" /></a>
            	<a href="<?php echo site_url().'/cLayout/checkout'; ?>"><input type="button" value="checkout" /></a>
            </td>
        </tr>
	</table>
</div>