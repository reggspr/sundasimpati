<div class="col-md-10">
	<div class="row">
		<form method="post" action="<?php echo base_url() ?>laporan/filterisasi">
		  			<table border="0" align="center">
						<tr>
							<td class="col-md-3"></td>
							<td>
								<input type="date" name="tgl_awal" required>
							</td>
							<td>Sampai</td>
							<td>
								<input type="date" name="tgl_akhir" required>
							</td>
							<td>
								<input type="submit" class="btn btn-primary" value="filter"></button></a>
							</td>
							<td class="col-md-3"></td>
						</tr>
					</table>
					</form>
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">LAPORAN BOOKING</div>
		  	</div>
		  	<div class="content-box-large box-with-header">
		  		<?php
		  		if (count($laporan_book)==0) {
				echo "Tidak ada data<br><br><br>";
				}else{
		  		?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<th>No.HP</th>
							<th>No.Meja</th>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						foreach ($laporan_book as $key => $value) {
					?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $value['nama_pembooking'];?></td>
							<td><?php echo $value['no_hp'];?></td>
							<td><?php echo $value['no_meja'];?></td>
							<td><?php echo $value['tanggal'];?></td>
							<td><?php echo $value['waktu'];?></td>
							<td><?php echo $value['status_booking'];?></td>
						</tr>
					<?php
					$i++;
						}
					}
					?>
					</tbody>
				</table>
				
		</div>
	</div>
</div>
</div>
<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">LAPORAN DELIVERY</div>
		  	</div>
		  	<div class="content-box-large box-with-header">
		  		<?php
		  		if (count($laporan_deliv)==0) {
				echo "Tidak ada data<br><br><br>";
				}else{
		  		?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<th>No.HP</th>
							<th>Alamat</th>
							<th>Pesanan</th>
							<th>Total</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						foreach ($laporan_deliv as $key => $value) {
					?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $value['nama_pemesan'];?></td>
							<td><?php echo $value['no_hp'];?></td>
							<td><?php echo $value['alamat'];?></td>
							<td><?php echo $value['pesanan'];?></td>
							<td><?php echo $value['total'];?></td>
							<td><?php echo $value['status_delivery'];?></td>
						</tr>
					<?php
					$i++;
						}
					}
					?>
					</tbody>
				</table>
				<br><br><br><br><br><br>
		</div>
	</div>
	
</div>
</div>
</div>
</div>