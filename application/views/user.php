<?php 
if (isset($_SESSION['item'])) {
	$item = $_SESSION['item'];
}
 ?>
<div class="container-fluid">
	<div class="panel text-center" id="user_panel">
		<div class="panel-heading">
			<img src="<?php echo base_url(); ?>assets/img/images.jpg" alt="" class="img-circle img-responsive">
			<hr>
		</div>
		<div class="panel-body">
			<p><?php echo $item[0]->user_name; ?></p>
			<p><?php echo $_SESSION['user_email']; ?></p>
			<a href="<?php echo base_url(); ?>index.php/coba3" class="btn btn-link">Change Password</a>
		</div>
	</div>
	<div class="container" style="float: left; width: 80%; padding-left: 50px;">
		<ul class="nav nav-tabs nav-justified">
		<?php if (isset($_SESSION['user_name']) && $item[0]->user_name == $_SESSION['user_name']): ?>
			<li role="presentation"><a data-toggle="tab" href="#cart">Cart</a></li>
		<?php endif ?>
			<li role="presentation" class="active"><a data-toggle="tab" href="#sell">Sell</a></li>
		</ul>
		<div class="tab-content">
		    <div id="cart" class="tab-pane fade">
			    <div class="table-responsive">	
		    		<table class="table table-striped container-fluid">
		    			<thead>
		    				<tr>
			    				<th>Gambar Barang</th>
			    				<th>Nama Barang</th>
			    				<th>Harga Barang</th>
			    				<th>Hapus</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr>			    					
			    				<td><img src="<?php echo base_url(); ?>/assets/img/images.jpg" alt=""></td>
			    				<td>Nama Barang</td>
			    				<td>Harga Barang</td>
			    				<td><a href="#" class="btn btn-danger btn-lg">Delete</a></td>
		    				</tr>
		    				<tr>			    					
			    				<td><img src="<?php echo base_url(); ?>/assets/img/images.jpg" alt=""></td>
			    				<td>Nama Barang</td>
			    				<td>Harga Barang</td>
			    				<td><a href="#" class="btn btn-danger btn-lg">Delete</a></td>
		    				</tr>
		    			</tbody>
		    		</table>
			    </div>
			    <a href="#" class="btn btn-success btn-lg pull-right" style="margin-bottom: 10px;" id="openModal">
			    	Bayar</a>
		    </div>
		    <div id="sell" class="tab-pane fade in active">
		    	<div class="table-responsive">
		    		<table class="table table-striped container-fluid">
		    			<thead>
		    				<tr>
			    				<th>Gambar Barang</th>
			    				<th>Nama Barang</th>
			    				<th>Harga Barang</th>
			    				<th>Hapus Barang</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<?php foreach ($item as $barang): ?>
		    				<tr>			    					
			    				<td><img src="<?php echo base_url() . substr($barang->image, strpos($barang->image, 'assets')); ?>" alt="" height='150px' width='150px' style="overflow: hidden;"></td>
			    				<td><?php echo $barang->namaBarang ?></td>
			    				<td><?php echo $barang->hargaBarang ?></td>
			    				<td><a href="#" class="btn btn-danger btn-lg">Delete</a></td>
		    				</tr>
		    				<?php endforeach ?>
		    			</tbody>
		    		</table>
		    	</div>
		    	<a href="<?php echo base_url(); ?>index.php/sell" class="btn btn-success btn-lg pull-right" 
		    		style="margin-bottom: 10px">Tambah</a>
		    </div>
  		</div>
  	</div>
</div>

<div class="modal" id="modalBayar">
	<div class="modal-content">
		<nav class="navbar modal-header navbar-inverse">
			<ul class="nav navbar-nav">
				<li class="navbar-inverse"><p class="navbar-text">Konfirmasi Pembayaran</p></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<span class="close" id="close">X</span>
			</ul>
		</nav>
		<div class="modal-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>TITIT TITITAN</td>
						<td>500000</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="modal-footer">
			<button class="btn btn-success btn-lg pull-right">Bayar</button>
		</div>
	</div>
</div>

<script>
	var btn = document.getElementById('openModal');
	var modal = document.getElementById('modalBayar');
	var close = document.getElementById('close');

	btn.onclick = function () {
		modal.style.display = "block";
	}

	close.onclick = function () {
		modal.style.display = "none";
	}

	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>