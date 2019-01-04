$(document).on("click", '.tombol',function(e){
	var id = $(this).data('id');
	var nama = $(this).data('nama');
	var gambar = $(this).data('gambar');
	var harga = $(this).data('harga');
	var deskripsi = $(this).data('deskripsi');

	$(".id").val(id);
	$(".nama").val(nama);
	$(".gambar").val(gambar);
	$(".harga").val(harga);
	$(".deskripsi").val(deskripsi);

	
	$(".edit").text('Edit Form untuk "' + nama + '"');
	$(".delete").html('apakah anda yakin akan menghapus data <strong>"'+nama+'"</strong>?');
});