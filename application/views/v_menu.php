<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">KELOLA MENU</div>
		  	</div>
		  	<div class="content-box-large box-with-header">

				<button type="button" class="btn btn-link" data-toggle="modal" data-target="#tambahModal">
				<span class="glyphicon glyphicon-plus"></span>Tambah Data</button><br>
				<?php
					if (count($menu)==0) {
				echo "Tidak ada data<br><br><br>";
				}else{
				?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Menu</th>
							<th>Gambar</th>
							<th>Jenis</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						foreach ($menu as $key => $value) {
					?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $value['nama_menu'];?></td>
							<td><img src="<?php echo $value['gambar'];?>" height="100px" width="100px"></td>
							<td><?php echo $value['jenis'];?></td>
							<td><?php echo $value['harga_menu'];?></td>
							<td><?php echo $value['deskripsi'];?></td>
						<td>
							<button type="button" class="btn btn-success tombol" data-toggle="modal" data-target="#editModal" data-id="<?php echo $value['id_menu'];?>" data-nama="<?php echo $value['nama_menu'];?>" data-harga="<?php echo $value['harga_menu'];?>" data-deskripsi="<?php echo $value['deskripsi'];?>" data-gambar="<?php echo $value['gambar'];?>"><span class="glyphicon glyphicon-pencil"></span></button>
							<button type="button" class="btn btn-danger tombol" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $value['id_menu'];?>" data-nama="<?php echo $value['nama_menu'];?>"><span class="glyphicon glyphicon-trash"></span></button>
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