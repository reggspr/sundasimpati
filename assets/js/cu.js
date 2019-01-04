$(document).on("click", '.klik',function(e){
	var id = $(this).data('id');
	var nama = $(this).data('nama');
	var gambar = $(this).data('gambar');
	var harga = $(this).data('harga');

	$(".id").val(id);
	$(".nama").val(nama);
	$(".gambar").val(gambar);
	$(".harga").val(harga);

	$(".edit").text('Konfirmasi booking atas nama "' + nama + '"?');
	$(".delete").html('Batalkan booking atas nama <strong>"'+nama+'"</strong>?');
});