<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">HISTORY ORDER DELIVERY</div>
		  	</div>
		  	<div class="content-box-large box-with-header">
		  		<?php
		  		if (count($deliv)==0) {
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
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						foreach ($deliv as $key => $value) {
					?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $value['nama_pemesan'];?></td>
							<td><?php echo $value['no_hp'];?></td>
							<td><?php echo $value['alamat'];?></td>
							<td><?php echo $value['pesanan'];?></td>
							<td><?php echo $value['status_delivery'];?></td>
						</tr>
					<?php
					$i++;
						}
					}
					?>
					</tbody>
				</table>
				<br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</div>
</div>
</div>
</div>