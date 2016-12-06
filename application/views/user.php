<?php 
if (!isset($_SESSION['user_name'])) {
	redirect('');
}
 ?>
<div class="container-fluid">
	<div class="panel text-center" id="user_panel">
		<div class="panel-heading">
			<img src="<?php echo base_url(); ?>assets/img/images.jpg" alt="" class="img-circle img-responsive">
			<hr>
		</div>
		<div class="panel-body">
			<p>INI NAMA</p>
			<p>INI EMAIL</p>
			<a href="<?php echo base_url(); ?>index.php/coba3" class="btn btn-link">GANTI PASSWORD</a>
		</div>
	</div>
	<div class="container" style="float: left; width: 80%; padding-left: 50px;">
		<ul class="nav nav-tabs nav-justified">
			<li role="presentation" class="active"><a data-toggle="tab" href="#cart">Cart</a></li>
			<li role="presentation"><a data-toggle="tab" href="#sell">Sell</a></li>
		</ul>
		<div class="tab-content">
		    <div id="cart" class="tab-pane fade in active">
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
		    <div id="sell" class="tab-pane fade">
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
		    	<a href="<?php echo base_url(); ?>index.php/user/sell" class="btn btn-success btn-lg pull-right" 
		    		style="margin-bottom: 10px">Tambah</a>
		    </div>
  		</div>
  	</div>
</div>

<div class="modal" id="modalBayar">
	
	<div class="modal-content">
		<div class="navbar navbar-inverse modal-header">
			<span class="close" id="close">X</span>
			<p>INI TITLE</p>
		</div>
		<div class="modal-body">
			<p>INI PERMEN</p>
		</div>
		<div class="modal-footer">
			<p>DARIPADA NGEMUT TITLE, MENDING NGEMUT TITIT</p>
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