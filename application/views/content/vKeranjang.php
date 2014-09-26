<div class="article">
	<div class="title">
		<ul>
			<li><h2>daftar belanja anda</h2></li>
		</ul>
	</div>
	<table border="1">
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
			$subTotal=$qty*$price;
			$total=0;
			if($diskon>0) $total=$subTotal*($diskon/100);
			$total=$subTotal-$total;
			$grandTotal+=$total;
	?>
		<tr>		
			<td><?php echo $no; ?></td>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td>
				<input type="hidden" value="<?php echo $value['rowid']; ?>">
				<input type="text" value="<?php echo $qty; ?>" size=1><button type="button">update</button>
			</td>
			<td><?php echo $price; ?></td>
			<td><?php echo $subTotal; ?></td>
			<td><?php if($diskon>0) echo $diskon.'%'; ?></td>
			<td><?php echo $total; ?></td>
		</tr>
	<?php
			$no++;
		}
	?>
		<tr>
			<td colspan="7">Grand Total</td>
			<td><?php echo $grandTotal; ?></td>
		</tr>
	</table>
</div>