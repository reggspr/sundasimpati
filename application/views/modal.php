<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="tambahModalLabel">Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="menu/insert_data" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama" class="control-label">Nama Menu:</label>
						<input type="text" name="nama_menu" class="form-control" id="nama" required>
					</div>
					<div class="form-group">
						<label for="gambar" class="control-label">Gambar:</label>
						<input type="file" name="userfile" class="form-control" id="gambar" required>
					</div>
					<div class="form-group">
						<label for="jenis" class="control-label">Jenis</label>
						<select class="form-control" name="jenis" id="jenis">
							<option value="makanan">Makanan</option>
							<option value="minuman">Minuman</option>
						</select>
					</div>
					<div class="form-group">
						<label for="harga" class="control-label">Harga Menu:</label>
						<input type="text" name="harga_menu" class="form-control" id="harga" required>
					</div>
					<div class="form-group">
						<label for="deskripsi" class="control-label">Deksripsi:</label>
						<textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="menu/edit_data" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama" class="control-label">Nama Menu:</label>
						<input type="text" name="nama_menu" class="form-control nama" id="nama" required>
						<input type="hidden" name="id_menu" class="form-control id" id="id_menu">
					</div>
					<div class="form-group">
						<label for="gambar" class="control-label">Gambar:</label>
						<input type="file" name="userfile" class="form-control gambar" id="gambar" required>
					</div>
					<label for="jenis" class="control-label">Jenis</label>
						<select class="form-control" name="jenis" id="jenis">
							<option value="makanan">Makanan</option>
							<option value="minuman">Minuman</option>
						</select>
					<div class="form-group">
						<label for="harga" class="control-label">Harga Menu:</label>
						<input type="text" name="harga_menu" class="form-control harga" id="harga" required>
					</div>
					<div class="form-group">
						<label for="deskripsi" class="control-label">Deskripsi:</label>
						<input type="text" name="deskripsi" class="form-control deskripsi" id="deskripsi" required>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Update</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="deleteModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="menu/delete_data">
					<input type="hidden" name="id_menu" class="form-control id" id="id">
					<button class="btn btn-danger">HAPUS</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="book/edit_data">
					<div class="form-group">
						<input type="hidden" name="id_booking" class="form-control id" id="id_booking">
						<input type="hidden" name="status_booking" class="form-control" id="status_booking" value="Selesai">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Konfirmasi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="batalModal" tabindex="-1" role="dialog" aria-labelledby="batalModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="batalModalLabel">Batal Booking</h4>
			</div>
			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="book/edit_data">
					<input type="hidden" name="id_booking" class="form-control id" id="id_booking">
					<input type="hidden" name="status_booking" class="form-control" id="status_booking" value="Batal">
					<button class="btn btn-danger">Ya</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="updateModal2" tabindex="-1" role="dialog" aria-labelledby="updateModal2Label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="deliv/edit_data">
					<div class="form-group">
						<input type="hidden" name="id_delivery" class="form-control id" id="id_delivery">
						<input type="hidden" name="status_delivery" class="form-control" id="status_delivery" value="Selesai">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Konfirmasi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="batalModal2" tabindex="-1" role="dialog" aria-labelledby="batalModal2Label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="batalModal2Label">Batal Delivery</h4>
			</div>
			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="deliv/edit_data">
					<input type="hidden" name="id_delivery" class="form-control id" id="id_delivery">
					<input type="hidden" name="status_delivery" class="form-control" id="status_delivery" value="Batal">
					<button class="btn btn-danger">Ya</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				</form>
			</div>
		</div>
	</div>
</div>