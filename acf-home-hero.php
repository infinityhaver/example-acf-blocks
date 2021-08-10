<?php 
	$background_type 		= get_sub_field('background_type');
	$image 					= get_sub_field('image');
	$video 					= get_sub_field('video');
	$gradient_start 		= get_sub_field('gradient_start');
	$gradient_end 			= get_sub_field('gradient_end');
	$gradient_width 		= get_sub_field('gradient_width');
	$heading_color 			= get_sub_field('heading_color');
	$heading 				= get_sub_field('heading');
	$content_background 	= get_sub_field('content_background');
	$content_color 			= get_sub_field('content_color');
	$content 				= get_sub_field('content');
	$background 			= get_sub_field('background');
	$right_content 			= get_sub_field('right_content');
?>
<style>
	@media (pointer: coarse) and (hover: none) {
		.home-hero-video {
			background: url('<?php echo $image; ?>') black no-repeat center center scroll;
		}
		.home-hero-video video {
			display: none;
		}
	}
</style>
<?php if($background_type == 'image') { ?>
	<div class="home-hero-wrap" style="background: linear-gradient(to right, <?php echo $gradient_start; ?>, <?php echo $gradient_end; ?> <?php echo $gradient_width; ?>%), url('<?php echo $image; ?>'); background-size: cover; background-position: right center; background-repeat: no-repeat;">
		<div class="home-hero-left">
			<div class="home-hero-left-inner">
				<?php if($heading) { ?>
					<h1 class="home-hero-heading acf-<?php echo $heading_color; ?>" data-aos="fade-up">
						<?php echo $heading; ?>
					</h1>
				<?php } ?>
				<?php if(have_rows('buttons')) : ?>
					<div class="home-hero-buttons" data-aos="fade-up">
						<?php while(have_rows('buttons')) : the_row(); ?>
							<?php 
								$style 				= get_sub_field('style');
								$link 				= get_sub_field('link');
								if($link) {
									$link_url 		= $link['url'];
									$link_title 	= $link['title'];
									$link_target 	= $link['target'] ? $link['target'] : '_self';
								}
							?>
							<a href="<?php echo $link_url; ?>" class="btn <?php echo $style; ?>" target="<?php echo $link_target; ?>">
								<?php echo $link_title; ?>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="home-hero-right" style="background: <?php echo $background; ?>;">
			<?php echo $right_content; ?>
		</div>
	</div>
	<div class="home-hero-bottom">
		<?php if($content) { ?>
			<div class="home-hero-content acf-<?php echo $content_color; ?>" style="background: <?php echo $content_background; ?>;" data-aos="fade-up">
				<?php echo $content; ?>
			</div>
		<?php } ?>
		<div class="home-hero-diamond-wrap" data-aos="fade-up">
			<img src="<?php echo get_template_directory_uri(); ?>/img/diamond-bg.svg" />
		</div>
	</div>
<?php } else { ?>
	<style>
		@media (pointer: coarse) and (hover: none) {
			header {
				background: url('<?php echo $image; ?>') black no-repeat center center scroll;
			}
			header video {
				display: none;
			}
		}
	</style>
	<div class="home-hero-wrap">
		<div class="home-hero-left home-hero-video-left match-height">
			<div class="home-hero-video">
				<div class="overlay" style="background: linear-gradient(to right, <?php echo $gradient_start; ?>, <?php echo $gradient_end; ?> <?php echo $gradient_width; ?>%);"></div>
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="<?php echo $video; ?>" type="video/mp4">
				</video>
				<div class="h-100">
					<div class="d-flex h-100 align-items-center">
						<div class="home-hero-left-inner">
							<?php if($heading) { ?>
								<h1 class="home-hero-heading acf-<?php echo $heading_color; ?>" data-aos="fade-up">
									<?php echo $heading; ?>
								</h1>
							<?php } ?>
							<?php if(have_rows('buttons')) : ?>
								<div class="home-hero-buttons" data-aos="fade-up">
									<?php while(have_rows('buttons')) : the_row(); ?>
										<?php 
											$style 				= get_sub_field('style');
											$link 				= get_sub_field('link');
											if($link) {
												$link_url 		= $link['url'];
												$link_title 	= $link['title'];
												$link_target 	= $link['target'] ? $link['target'] : '_self';
											}
										?>
										<a href="<?php echo $link_url; ?>" class="btn <?php echo $style; ?>" target="<?php echo $link_target; ?>">
											<?php echo $link_title; ?>
										</a>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-hero-right match-height" style="background: <?php echo $background; ?>;">
			<?php echo $right_content; ?>
		</div>
	</div>
	<div class="home-hero-bottom">
		<?php if($content) { ?>
			<div class="home-hero-content hero-video-content acf-<?php echo $content_color; ?>" style="background: <?php echo $content_background; ?>;" data-aos="fade-up">
				<?php echo $content; ?>
			</div>
		<?php } ?>
		<div class="home-hero-diamond-wrap" data-aos="fade-up">
			<img src="<?php echo get_template_directory_uri(); ?>/img/diamond-bg.svg" />
		</div>
	</div>
<?php } 