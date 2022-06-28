$(document).ready(function(){
	/* dosya yüklendiğinde alert verir */

	// listedeki verilerin yerini değiştirmeyi sağlar.
	$(".sortable").sortable();

	/*Sil Butonu silme + alert */
	$(".remove-btn").click(function(){

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

	/* classı isActive olan şey değişince çalışan fonksiyon */
	$(".isActive").change(function(){
		var $data = $(this).prop("checked");
		var $data_url = $(this).data("url"); 

		if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){
			
			$.post($data_url, { data: $data}, function(response){
			});
		}
	})

	/* tabloda yeri değişince rank'ları değiştiren fonksiyon */
	$(".sortable").on("sortupdate",function(event,ui){

		var $data = $(this).sortable("serialize");
		var $data_url = $(this).data("url");

		$.post($data_url, {data : $data}, function(response){})

	})

})