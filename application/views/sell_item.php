<div class="container center_div">
	<form action="#" class="form-horizontal">
		<div class="form-group">
			<label for="images" class="cols-sm-2 control-label">Images</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<input type="file" name="images" accept=".jpg,.png,.bmp">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="nama_barang" class="cols-sm-2">Nama Barang</label>
			<div class="cols-sm-10">
				<div class="input-group">
				<input type="text" name="nama_barang">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="desc" class="cols-sm-2">Deskripsi</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<input type="text" name="desc">
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
			<button class="btn btn-success btn-lg">Sell</button>
		</p>
		<p></p>
	</form>
</div>