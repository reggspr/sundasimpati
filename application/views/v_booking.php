<br>
<img src="<?php echo base_url()?>assets/images/meja.jpg" width="720" style='margin-left:25%;'>
<br><br>
<?php 
        if(validation_errors() == TRUE)
        {
          echo "<div class='alert alert-danger' role='alert'>";
          echo validation_errors();
          echo "</div>";
        }
echo form_open('booking/insert_data') ?>
<div class='form-horizontal' role='form' style='margin-left:36%;width:800px'>
  <div class="form-group" >
    <label class="col-sm-6 control-label" style="text-align:center;background:#ddd;">FORM BOOKING</label>
  </div>
  <div class="form-group">
    <label for="nama_pembooking" class="col-sm-2 control-label" >Nama</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
  </div>
  <div class="form-group">
    <label for="no_hp" class="col-sm-2 control-label" >Nomor HP</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="no_hp" name="no_hp" required>
    </div>
  </div>
  <div class="form-group">
    <label for="no_meja" class="col-sm-2 control-label" >Nomor Meja</label>
    <div class="col-sm-4">
     <select class="form-control" name="no_meja" id="no_meja">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     </select>
    </div>
  </div>
  <div class="form-group">
    <label for="tanggal" class="col-sm-2 control-label" >Tanggal</label>
    <div class="col-sm-4">
     <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
  </div>
  <div class="form-group">
    <label for="waktu" class="col-sm-2 control-label" >Waktu</label>
    <div class="col-sm-4">
     <input type="time" class="form-control" id="waktu" name="waktu" required>
       <input type="hidden" class="form-control" id="status" name="status" value="belum konfirmasi">
       <input type="hidden" class="form-control" id="tgl_book" name="tgl_book" value="<?php echo date("Y-m-d");?>"> 
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label" ></label>
    <div class="col-sm-4">
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </div>
</div>
</form>