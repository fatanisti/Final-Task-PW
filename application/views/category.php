<div class="container">
  <h2><center id="title"></center></h2>
  <?php $i = 0; ?> 
  <div class="row">
  <?php foreach ($item as $satuan): ?>
      <div class="col-md-4">
        <div class="panel">
          <div class="panel-heading"></div>
          <div class="thumbnail">
            <a href="<?php echo base_url().'index.php/detail/'.$satuan->id; ?>" target=" ">
              <div class="panel-body vertical-center" style="max-height: 300px; min-height: 300px; position: relative; overflow: hidden">
                  <img src="<?php echo base_url() . substr($satuan->image, strpos($satuan->image, "assets")); ?>" style="width:100%">
              </div>
             </a>
          </div>
          <div class="panel-footer text-center">    
            <div class="caption">
              <p><?php echo $satuan->namaBarang; ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php if ($i % 2 == 0 && $i > 0): ?>
        </div><div class="row">
        <?php $i=-1; ?>
      <?php endif ?>
      <?php $i++; ?>

  <?php endforeach ?>
  </div>
</div>


<script>
  var postData;
  var title = document.getElementById('title');
  postData = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
  title.innerHTML = postData;
</script>