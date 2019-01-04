<html>
    <head>
        <title>Order Delivery</title>
        <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" type="text/css" href="assets/css/style.css">
          <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/random.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/modal.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Hapus semua yang ada di keranjang?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>shopping/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
    </head>
    <body>
<header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h4 style="font-family:'Cookie';font-size:25px">Rumah Makan Sunda Simpati</h4>
            </div>
            <div class="header-right">
                <label for="open">
                    <span class="hidden-desktop"></span>
                </label>
                <input type="checkbox" name="" id="open">
                <nav>
                    <a href="<?php echo base_url()?>home">Beranda</a>
                    <a href="<?php echo base_url()?>shopping">Menu</a>
                    <a href="<?php echo base_url()?>booking"><i>Booking</i></a>
                    <a href="<?php echo base_url()?>shopping/show_cart">Keranjang</a>
                    <a href="<?php echo base_url()?>contact">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

      <div id='content'>
        <div id="products_e" align="center">

            <h2 id="head" align="center" style="color:white">Menu yang tersedia</h2>
            <h4 align="center">Klik gambar untuk memperbesar gambar</h4>
            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($products as $product) {
                $id = $product['id_menu'];
                $name = $product['nama_menu'];
                $description = $product['deskripsi'];
                $price = $product['harga_menu'];
                ?>

                <div id='product_div'>  
                    <div id='image_div'>
                        <img src="<?php echo $product['gambar'] ?>" width="100px" height="100px" id="myImg[<?php echo $product['id_menu'];?>]"/>
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                        </div>
                    </div>
                    <div id='info_product'>
                        <div id='name'><?php echo $name; ?></div>
                        <div id='desc'><?php echo $description; ?></div>
                        <div id='rs'><b>Harga</b>:<big style="color:green">
                            Rp.<?php echo $price; ?></big></div>
                        <?php
                        
                        // Create form and send values in 'shopping/add' function.
                        echo form_open('shopping/add');
                        echo form_hidden('id', $id);
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        ?> </div> 
                    <div id='add_button'>
                        <?php
                        $btn = array(
                            'class' => 'fg-button teal',
                            'value' => 'Tambah',
                            'name' => 'action'
                        );
                        
                        // Submit Button.
                        echo form_submit($btn);
                        echo form_close();
                        ?>
                    </div>
                </div>
                <script>

var modal = document.getElementById('myModal');


var img = document.getElementById('myImg[<?php echo $product['id_menu'];?>]');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}


var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<?php } ?>

        </div>
      </div>
      <?php foreach ($products as $key => $value) { ?>
 <?php $value['id_menu']?>
            <br><br><br><br><br><br><br><br>
<?php } ?>
<br>
      <footer class="footer-distributed">

            <div class="footer-left">

                <h3>R.M.<span>Sunda Simpati</span></h3>

                <p class="footer-links">
                    <a href="<?php echo base_url()?>home">Beranda</a>
                    ·
                    <a href="<?php echo base_url()?>menu">Menu</a>
                    ·
                    <a href="<?php echo base_url()?>book"><i>Book</i></a>
                    ·
                    <a href="<?php echo base_url()?>contact">Kontak</a>
                </p>

                <p class="footer-company-name">Sunda Simpati &copy; 2017</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Kp. Cugenang No.35</span> Cugenang, Cianjur</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>085759902259</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:regi.regipermana@gmail.com">regi.regipermana@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Tentang R.M Sunda Simpati</span>
                    Rumah Makan yang telah berdiri sejak 23 tahun yang lalu yang sampai saat ini masih eksis menyediakan makanan dan minuman khas sunda
                </p>


            </div>

        </footer>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>