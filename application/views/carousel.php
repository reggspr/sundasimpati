<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:480px; width:1366px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url() ?>assets/images/muter1.jpg" alt="hau" class="img-responsive center-block">
      <div class="carousel-caption">
        <h3>FITUR ORDER DELIVERY</h3>
        <p>Di website ini anda dapat melihat-lihat menu sekaligus memesan menu tersebut</p>
        <a href="<?php echo base_url()?>shopping"><button class="btn btn-primary">Pesan Sekarang!</button></a>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/images/muter2.jpg" alt="hau" class="img-responsive center-block">
      <div class="carousel-caption">
        <h3>FITUR BOOKING</h3>
        <p>Anda dapat booking meja untuk waktu tertentu! ayo book sekarang, 1 meja cukup untuk 4 orang</p>
        <a href="<?php echo base_url()?>booking"><button class="btn btn-primary">Booking Sekarang!</button></a>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/images/muter3.jpg" alt="hau" class="img-responsive center-block">
      <div class="carousel-caption">
        <h3>EVENT DADAKAN</h3>
        <p>Jika anda beruntung, anda akan mendapatkan hadiah menarik langsung dari pemilik rumah makan</p>
        <a href="<?php echo base_url()?>contact"><button class="btn btn-primary">Jika ada pertanyaan</button></a>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>