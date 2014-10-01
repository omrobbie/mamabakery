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
			<td><?php echo $qty; ?></td>
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
	</table>
    <br><br>
	<div class="title">
		<ul>
			<li><h2>Masukkan data anda</h2></li>
		</ul>
	</div>
	<table width="100%">
		<tr>
			<td valign="top">
			    <table>
			    	<tr>
			        	<th align="right">Nama</th>
			        	<td><input type="text" name="name"></td>
			        </tr>
			    	<tr>
			        	<th align="right">Email</th>
			        	<td><input type="text" name="email"></td>
			        </tr>
			    	<tr>
			        	<th align="right">No Telpon</th>
			        	<td><input type="text" name="phone"></td>
			        </tr>
			    	<tr>
			        	<th align="right">Alamat</th>
			        	<td><textarea name="address" cols="40" rows="5"></textarea></td>
			        </tr>
			        <tr>
			        	<td colspan="1"></td>
			            <td align="right"><input type="submit" value="kirim" /></td>
			        </tr>
			    </table>
			</td>
			<td valign="top" align="center" bgcolor="#72a8f9">
				Bagi yang telah mendaftar, <br>silahkan login disini :<br><br>
				<input type="text" name="uname" placeholder="username"><br>
				<input type="password" name="upass" placeholder="password"><br>
				<input type="button" name="btnLogin" value="login">
			</td>
		</tr>
	</table>
</div>