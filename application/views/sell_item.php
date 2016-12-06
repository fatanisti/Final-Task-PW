<?php 
if (!isset($_SESSION['user_name'])) {
	redirect('');
}
 ?>
 <div class="container center_div">
 	<?php echo form_open('Item/jual_barang'); ?>
	<form action="#" class="form-horizontal" method="post">
		<div class="form-group">
			<label for="images" class="cols-sm-2 control-label">Images</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<input type="file" name="images" accept=".jpg,.png,.bmp">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="namaBarang" class="cols-sm-2">Nama Barang</label>
			<div class="cols-sm-10">
				<div class="input-group">
				<input type="text" name="namaBarang">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="kategori" class="cols-sm-2">Kategori</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<select name="kategori">
						<option value="Menswear">Menswear</option>
						<option value="Womenswear">Womenswear</option>
						<option value="Dress">Dress</option>
						<option value="Shoes For Men">Shoes For Men</option>
						<option value="Shoes For Womem">Shoes For Womem</option>
						<option value="Accessories">Accessories</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="deskripsiBrg" class="cols-sm-2">Deskripsi</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<input type="text" name="deskripsiBrg">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="harga" class="cols-sm-2">Harga</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<input type="number" name="harga" value="0" min="0">
				</div>
			</div>
		</div>
		<p class="text-center">
			<a href="<?php echo base_url(); ?>/user/user" class="btn btn-danger btn-lg">Cancel</a>
			<button type="submit" class="btn btn-success btn-lg">Sell</button>
		</p>
		<p></p>
	</form>
	<?php echo form_close(); ?>
</div>