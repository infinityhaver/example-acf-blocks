<?php 
	$image 							= get_sub_field('image');
	$gradient_start 				= get_sub_field('gradient_start');
	$gradient_end 					= get_sub_field('gradient_end');
	$gradient_width 				= get_sub_field('gradient_width');
	$heading_color 					= get_sub_field('heading_color');
	$heading 						= get_sub_field('heading');
	$content 						= get_sub_field('content');
	$background 					= get_sub_field('background');
	$right_content 					= get_sub_field('right_content');
	$interior_hero_default_image 	= get_field('interior_hero_default_image', 'options');
	$interior_hero_default_content 	= get_field('interior_hero_default_content', 'options');
?>
<div class="interior-hero-wrap" style="background: linear-gradient(to right, <?php echo $gradient_start; ?>, <?php echo $gradient_end; ?> <?php echo $gradient_width; ?>%), url('<?php if($image) { ?><?php echo $image; ?><?php } else { ?><?php echo $interior_hero_default_image; ?><?php } ?>'); background-size: cover; background-position: right center; background-repeat: no-repeat;" data-aos="fade-up">
	<div class="interior-hero-left">
		<div class="interior-hero-left-inner">
			<h1 class="interior-hero-heading acf-<?php echo $heading_color; ?>" data-aos="fade-up" data-aos-delay="200">
				<?php if($heading) { ?>
					<?php echo $heading; ?>
				<?php } else { ?>
					<?php the_title(); ?>
				<?php } ?>
			</h1>
		</div>
	</div>
	<div class="interior-hero-right" style="background: <?php echo $background; ?>;"  data-aos="fade-up" data-aos-delay="400">
		<?php if($right_content) { ?>
			<?php echo $right_content; ?>
		<?php } else { ?>
			<?php echo $interior_hero_default_content; ?>
		<?php } ?>
	</div>
</div>