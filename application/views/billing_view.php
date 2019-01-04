<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
<html>
    <head>
        <title>Keranjang Belanja</title>
         <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
    </head>
    <body>
        <div id="bill_info">
            
            <form name="billing" method="post" action="<?php echo base_url();?>shopping/save_order">
                <input type="hidden" name="command" />
                <div align="center">
                    <h1 align="center">Billing Info</h1>
                    <table border="0" cellpadding="2px">
                        <tr><td>Order Total:</td><td><strong>Rp.<?php echo number_format($grand_total, 2); ?><input type="hidden" name="total" value="<?php echo number_format($grand_total, 2); ?>" readonly></strong></td></tr>
                        <tr><td>Nama Anda :</td><td><input type="text" name="name" required=""/></td></tr>
                        <tr><td>Alamat :</td><td><textarea name="alamat" required=""/></textarea></td></tr>
                        <tr><td>Nomor HP:</td><td><input type="text" name="nohp"  required="" /></td></tr>
                        <tr><td>Pesanan:</td><td><?php foreach($cart as $aww){echo $aww['name']; echo " ";echo $aww['qty']; echo"<br>";}?></td></td>
                            <input type="hidden" name="pesanan" value="<?php foreach($cart as $hue){echo $hue['name']; echo" "; echo $hue['qty']; echo "<br>";}?>" readonly>
                            <input type="hidden" name="status" value="Belum Konfirmasi">
                            <input type="hidden" name="tgl_pesan" value="<?php echo date("Y-m-d");?>">
                        <tr><td><?php
                        // This button for redirect main page.
                        echo "<a class ='fg-button teal' id='back' href=" . base_url() . "shopping>Kembali</a>";  ?>
                            </td><td><input type="submit" class ='fg-button teal' value="Pesan" /></td></tr> 
                     
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>