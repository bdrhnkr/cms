product-v -> list -> content.php
<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Ürün Listesi
			<a href="<?= base_url("product/new_form")?>" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
		</h4>
	</div><!-- END column -->
	<div class="col-md-12">
		<div class="widget p-lg">


			<?php if(empty($items)){ ?>

				<div class="alert alert-info text-center">
					<p>Burada herhangi bir veri bulunmamaktadır. Eklemek için <a href="<?= base_url("product/new-form")?>">tıklayın</a>.</p>
				</div>
			<?php }else{ ?>

				<table class="table table-striped table-hover">

					<thead>
						<th>id</th>
						<th>url</th>
						<th>Başlık</th>
						<th>Açıklama</th>
						<th>Durumu</th>
						<th>İşlem</th>
					</theah>

					<tbody>

						<?php foreach($items as $item){ ?>
							<tr>
								<td>#<?php echo $item->id; ?></td>
								<td><?php echo $item->url; ?></td>
								<td><?php echo $item->title; ?></td>
								<td><?php echo $item->description; ?></td>
								<td>
									<input 
									type="checkbox" 
									data-switchery 
									data-color="#10c469" 
									<?= ($item->isActive) ? "checked" : ""; ?> 
									/*// Eğer isActive true ise echo checked*/
									/>
								</td>
								<td>
									<button 
										data-url="<?=base_url("product/delete/$item->id");?>" 
										class="btn btn-sm btn-danger btn-outline remove-btn">
										<i class="fa fa-trash"></i> Sil
									</button>
								<button href="<?=base_url("product/update_form/$item->id")?>" class="btn btn-sm btn-warning btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</button>
							</td>
						</tr>
					<?php } ?>

				</tbody>

			</table>
		<?php } ?>
	</div><!-- .widget -->
</div><!-- END column -->


</div>