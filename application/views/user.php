<?php
$this->load->library('session');
if (!isset($_SESSION['user_name'])) {
	redirect('login');
}
?>
<div class="container-fluid">
	<div class="panel text-center" id="user_panel">
		<div class="panel-body">
			<?php if (isset($item)): ?>
				<p><?php echo $item[0]->user_name; ?></p>
			<?php endif ?>
			<p><?php echo $user[0]->user_email; ?></p>
			<a href="<?php echo base_url(); ?>index.php/coba3" class="btn btn-link">Change Password</a>
		</div>
	</div>
	<div class="container" style="float: left; width: 80%; padding-left: 50px;">
		<ul class="nav nav-tabs nav-justified">
		<?php if (isset($item)): ?>
			<?php if ($item[0]->user_name == $_SESSION['user_name']): ?>
				<li role="presentation"><a data-toggle="tab" href="#cart">Cart</a></li>
			<?php endif ?>
		<?php endif ?>
			<li role="presentation" class="active"><a data-toggle="tab" href="#sell">Sell</a></li>
		</ul>
		<div class="tab-content">
		    <div id="cart" class="tab-pane fade">
			    <div class="table-responsive">	
		    		<table class="table table-striped container-fluid">
		    			<thead>
		    				<tr>
			    				<th>Nama Barang</th>
			    				<th>Harga Barang</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    			<?php if (isset($cart)): ?>
		    				<?php foreach ($cart as $barang): ?>
			    				<tr>
				    				<td><?php echo $barang->namaBrg; ?></td>
				    				<td><?php echo $barang->hargaBrg; ?></td>
			    				</tr>
		    				<?php endforeach ?>
		    			<?php endif ?>
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
		    				</tr>
		    			</thead>
		    			<tbody>
		    			<?php if (isset($item)): ?>
		    				
		    				<?php foreach ($item as $barang): ?>
		    				<tr>			    					
			    				<td><img src="<?php echo base_url() . substr($barang->image, strpos($barang->image, 'assets')); ?>" alt="" height='150px' width='150px' style="overflow: hidden;"></td>
			    				<td><?php echo $barang->namaBarang ?></td>
			    				<td><?php echo $barang->hargaBarang ?></td>
		    				</tr>
		    				<?php endforeach ?>
		    			<?php endif ?>
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
				<?php if (isset($cart)): ?>
		    				
		    				<?php foreach ($cart as $barang): ?>
		    				<tr>
			    				<td><?php echo $barang->namaBrg ?></td>
			    				<td><?php echo $barang->hargaBrg ?></td>
		    				</tr>
		    				<?php endforeach ?>
		    			<?php endif ?>
				</tbody>
			</table>
		</div>
		<div class="modal-footer">
			<?php echo form_open('item/delete_cart'); ?>
			<button  type="submit" class="btn btn-success btn-lg pull-right">Bayar</button>
			<?php echo form_close(); ?>
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