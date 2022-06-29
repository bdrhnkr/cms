product-v -> image -> content.php
<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			<b><?php echo $item->title; ?></b> kaydına ait resimler
			<a href="" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
		</h4>
	</div><!-- END column -->
	<div class="col-md-12">
		<div class="widget">

			<div class="widget-body">
				<form action="<?php echo base_url('product/image_upload/$item->id');?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?= base_url("product/image_upload/$item->id");?>'}">
					<div class="dz-message">
						<h3 class="m-h-lg">Resimleri buraya sürükleyiniz.</h3>
						<p class="m-b-lg text-muted">Resimleri buraya sürükleyiniz ya da buraya tıklayınız.</p>
					</div>
				</form>

			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->

</div>
<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Ürün Resmi Ekle
			<a href="" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
		</h4>
	</div><!-- END column -->
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-body">
				<table class="table table-striped table-bordered pictures-list">
					<thead>
						<th>#id</th>
						<th>Resim Adı</th>
						<th>Durumu</th>
						<th>İşlem</th>
					</thead>
					<tbody>
						<tr>
							<td class="w100 text-center">#1</td>
							<td class="w100 text-center">
								<img width="30" src="https://pbs.twimg.com/profile_images/1155768393175355393/sFz7cRTu_400x400.jpg" alt="">
							</td>
							<td>deneme.jpeg</td>
							<td class="w100 text-center">
								<input 
								data-url="<?=base_url("product/isActiveSetter/"); ?>"
								class="isActive"
								type="checkbox" 
								data-switchery 
								data-color="#10c469" 
								<?= (true) ? "checked" : ""; ?> 
								/*// Eğer isActive true ise echo checked*/
								/>
							</td>
							<td class="w100 text-center">
								<button 
								data-url="<?=base_url("product/delete/"); ?>" 
								class="btn btn-sm btn-danger btn-outline remove-btn btn-block">
								<i class="fa fa-trash"></i> Sil
							</button>
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- .widget-body -->
	</div><!-- .widget -->
</div><!-- END column -->

</div>