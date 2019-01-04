<div class="row">
		<div class="panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">MENU YANG TERSEDIA</div>
		  	</div>
		  	<div class="content-box-large box-with-header">
		  		<div class="container">
		  			<form method="post" action="<?php echo base_url() ?>menuh/filterisasi">
		  			<table border="0" align="center">
						<tr>
							<td class="col-md-3"></td>
							<td align="right">
								<select name="filter" class="form-control">
									<option value="makanan dan minuman">Semua</option>
									<option value="makanan">Makanan</option>
									<option value="minuman">Minuman</option>
								</select>
							</td>
							<td class="col-md-2"></td>
							<td align="left">
								<input type="submit" class="btn btn-primary" value="sortir"></button></a>
							</td>
							<td class="col-md-3"></td>
						</tr>
					</table>
					</form>
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
							<th>Harga</th>
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
							<td>Rp.<?php echo $value['harga_menu'];?></td>
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
</div>