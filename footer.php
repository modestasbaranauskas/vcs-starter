<!-- FOOTER start
    ================================================== -->
	<footer id="footer" class="footer-section">
		<div class="footer-container flex-container">
			<div class="copyright-column">
				<p><?php the_field('f_copyright'); ?> &copy; COPYRIGHT 2014-<?php echo date("Y"); ?></p>
			</div>
			<div class="social-media-icon">
				<ul class="social-media-nav flex-container">
				<?php
					if(have_rows('f_social_media_repeater')):
						while(have_rows('f_social_media_repeater')):
							the_row();

							$link = get_sub_field('link');
							?>
							<li>
								<a href="<?php echo $link['url']; ?>"><i class="<?php the_sub_field('icon'); ?> fa-fw"></i></a>
							</li>
							<?php
						endwhile;
					endif;
				?>
				</ul>
			</div>
		</div>
	</footer>
	<!-- FOOTER end
    ================================================== -->
	<!-- BACK TO TOP start
    ================================================== -->
	<div>
	<a href="#hero" class="back-to-top" title="Back to top"><i class="far fa-arrow-alt-circle-up"></i></a>
	</div>
	<!-- BACK TO TOP end
    ================================================== -->

	<?php wp_footer(); ?>
	
</body>
</html>