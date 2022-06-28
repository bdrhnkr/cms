$(document).ready(function(){
	/* dosya yüklendiğinde alert verir */

	$(".remove-btn").click(function(e){

		var $data_url = $(this).data("url");

		
		Swal.fire({
			title: '',
			text: "Silmek istediğinize emin misiniz?",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Evet, Sil!',
			cancelButtonText: 'İptal'
		}).then((result) => {
			if (result.isConfirmed) {

				window.location.href = $data_url;
				/* evete bastığında data url'ye yani ürünün idsi ile silmeye gidiyor */ 
				
			}
		})
	})

	// Swal.fire(
				// 	'Deleted!',
				// 	'Your file has been deleted.',
				// 	'success'
				// 	)



})