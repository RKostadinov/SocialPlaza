<div class="container">
    <div class="starter-template">
        <?php echo anchor($this->instagram_api->instagram_login(), 'Instagram Login'); ?>
	</div>
</div>
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
<hr>
<section>
<div class="container">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'instagramapicodeigniterlibrary'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</section>
