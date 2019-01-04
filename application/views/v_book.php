<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">KELOLA BOOKING</div>
		  	</div>
		  	<div class="content-box-large box-with-header">
		  		<?php
		  		if (count($book)==0) {
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
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						foreach ($book as $key => $value) {
					?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $value['nama_pembooking'];?></td>
							<td><?php echo $value['no_hp'];?></td>
							<td><?php echo $value['no_meja'];?></td>
							<td><?php echo $value['tanggal'];?></td>
							<td><?php echo $value['waktu'];?></td>
							<td><?php echo $value['status_booking'];?></td>
						<td>
							<button type="button" class="btn btn-success klik" data-toggle="modal" data-target="#updateModal" data-id="<?php echo $value['id_booking'];?>" data-nama="<?php echo $value['nama_pembooking'];?>" data-status="<?php echo $value['status_booking'];?>"><span class="glyphicon glyphicon-pencil"></span></button>
							<button type="button" class="btn btn-danger klik" data-toggle="modal" data-target="#batalModal" data-id="<?php echo $value['id_booking'];?>" data-nama="<?php echo $value['nama_pembooking'];?>"><span class="glyphicon glyphicon-trash"></span></button>
						</td>
						</tr>
					<?php
					$i++;
						}
					}
					?>
					</tbody>
				</table>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</div>
</div>
</div>
</div>