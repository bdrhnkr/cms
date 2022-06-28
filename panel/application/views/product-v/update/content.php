product-v -> update -> content.php
<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			<?php echo "<b>$item->title</b> kaydını düzenliyorsunuz" ; ?>
			<a href="" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
		</h4>
	</div><!-- END column -->
	<div class="col-md-12">
		<div class="widget">

			<div class="widget-body">
				
				<form action="<?= base_url("product/save");?>" method="post">
					<div class="form-group">
						<label>Başlık</label>
						<input class="form-control" name="title" placeholder="Başlık" value="<?php echo $item->title ?>">
						<?php if (isset($form_error)) { ?>
							<!-- Eğer form_error true ise-->
							<small class="input-form-error pull-right"><?=form_error("title");?></small>
						<?php } ?>
					</div>
					<div class="form-group">
						<label>Açıklama</label>
						<textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
							<?php echo $item->description; ?>
						</textarea>
					</div>
					
					<button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
					<a href="<?= base_url("product") ?>" class="btn btn-md btn-warning btn-outline">İptal</a>
				</form>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->

</div>