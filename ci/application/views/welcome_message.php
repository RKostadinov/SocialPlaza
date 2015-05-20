<section>
	<?php if(is_object($popular_media)) { ?> 
		<?php foreach($popular_media as $media_data) { ?>
			<?php if(is_array($media_data)) { ?>
			<div class="container">
			<h2>Popular Media</h2>
				<div class="popup-gallery">
				<?php foreach($media_data as $media) { ?>
					<?php echo anchor($media->images->standard_resolution->url, img(array('src' => $media->images->thumbnail->url, 'width' => '140', 'height' => '140', 'class'=>'img-thumbnail'))); ?>
				<?php } ?>
				</div>
			</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</section>
