<div class="container-fluid">
  <div class="panel text-center" id="user_panel">
    <div class="panel-heading">
      <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//1114/the-executive_the-executive-1-ssicrt116d145-atasan-pria---black_full05.jpg" width="200px" height="280px" id="mainImg">
      <hr>
    </div>
    <p>The Executive</p>
    <p>executive@gmail.com</p>
    <a href="#" class="btn btn-link">GANTI PASSWORD</a>
  </div>
  <div class="container" style="float: left; width: 80%; padding-left: 50px;">
    <table class="table table-striped pull-left">
      <tr>
        <td>NAMA BARANG</td>
        <td>:</td>
        <td>BLABLA</td>
      </tr>
      <tr>
        <td>HARGA BARANG</td>
        <td>:</td>
        <td>BLABLA</td>
      </tr>
      <tr>
        <td>DESKRIPSI BARANG</td>
        <td>:</td>
        <td>BLABLA</td>
      </tr>
    </table>
    <a href="
      <?php 
      if (isset($_SESSION['user_name'])) {
        echo base_url()."index.php/user/user#cart";
      } else {
        echo base_url()."index.php/login";
      }
      ?>
    " class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</a>
    <div class="container-fluid text-center" id="suggest" >
      <table class="table">
        <tr>
          <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
         <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
         <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
         <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
         <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
         <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
         <td>
            <img src="<?php echo base_url(); ?>assets/img/kaos.jpg" alt="" height="200px">
            <p>Titit</p>
          </td>
        </tr>
      </table>
    </div>
  </div>

</div>