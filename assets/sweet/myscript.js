const flashData = $('.flash-data').data('flashdata');

if (flashData) 
{
	Swal.fire({
		title: 'Data Keranjang Belanja ',
		text: 'berhasil ' + flashData,
		icon: 'success'
	});
}

$('.tombol-hapus').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

		Swal.fire({
	  title: 'Apakah Anda Yakin',
	  text: "Data Keranjang Belanja Akan dihapus",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus.!'
	}).then((result) => {
	  if (result.value) {
	  		document.location.href = href;
	  }
	})
});