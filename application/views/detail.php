<?php if (!isset($detail)){
  redirect('');
}
?>
<div class="container-fluid">
  <div class="panel text-center" id="user_panel">
    <div class="panel-heading">
      <img src="<?php echo base_url() . substr($detail[0]->image, strpos($detail[0]->image, "assets")); ?>" width="200px" height="280px" id="mainImg">
      <hr>
    </div>
    <p><?php echo $detail[0]->user_name; ?></p>
  </div>
  <div class="container" style="float: left; width: 80%; padding-left: 50px;">
    <table class="table table-striped pull-left">
      <tr>
        <td>NAMA BARANG</td>
        <td>:</td>
        <td><?php echo $detail[0]->namaBarang; ?></td>
      </tr>
      <tr>
        <td>HARGA BARANG</td>
        <td>:</td>
        <td>Rp.<?php echo $detail[0]->hargaBarang; ?></td>
      </tr>
      <tr>
        <td>DESKRIPSI BARANG</td>
        <td>:</td>
        <td><?php echo $detail[0]->deskripsiBrg; ?></td>
      </tr>
    </table>
    <?php echo form_open('Item/add_cart'); ?>
    <form method="post">
      <button 
         class="btn btn-success btn-lg pull-right" type="submit" name="id" value="<?php echo end($this->uri->segments) ?><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart
      </button>
    </form>
  </div>
  <?php echo form_close(); ?>
</div>