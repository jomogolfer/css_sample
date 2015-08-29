<?php
/*
* Template Name: Testimonial 
* Description: A template to allow customers to fill out testimonials.
*/
get_header();?>

<style>
/*Reduce navigation to height of 1px;*/
.menu-primary {
	height: 1px; 
}

/*Don't display title*/
.entry-title {
	display: none;
}
</style>

<!-- BEGIN TOP WRAPPER -->
<div id="testimonial_top_wrapper">
	<div id="testimonial_top_wrapper_left">
		<?php 
			$top_left_text = simple_fields_value('testimonial_header');
			echo '<h3>'. $top_left_text .'</h3>'; 
		?>

	</div> <!-- end top_wrapper_left -->

	<div id="testimonial_top_wrapper_right">
		<div id="testimonial_top_image">
			<?php
				// Field slug is "fileExample"
				$file_id = simple_fields_value('top_image');
				$image_info = wp_get_attachment_image_src($file_id, "full");
				$image_top_url = $image_info[0];
				$image_width = $image_info[1];
				$image_height = $image_info[2];	
			?>
			<img src="<?php echo $image_top_url; ?>">
		</div>	<!-- end #testimonial_top_image -->
	</div> <!-- end #top_wrapper_right -->
</div> 
<!-- END #top_wrapper -->

<?php do_action( 'genesis_before_content_sidebar_wrap' ); ?>

<!-- BEGIN MAIN CONTENT -->
	<div id="content">
		<div id="content-sidebar-wrap">
			<div id="main" class="hfeed">
				<?php do_action( 'genesis_after_loop' ); ?>
				<?php
				// Field slug is "fileExample"
				$file_id = simple_fields_value('main_image');
				$image_info = wp_get_attachment_image_src($file_id, "full");
				$image_main_url = $image_info[0];
				$image_width = $image_info[1];
				$image_height = $image_info[2];	
			?>
			<img src="<?php echo $image_main_url; ?>">
			</div><!-- end #main -->
		</div><!-- end #content-sidebar-wrap -->
	</div><!-- end #content -->
<!-- END MAIN CONTENT -->

<!-- BEGIN BOTTOM WRAPPER -->	
	<div id="bottom_wrapper">
		<div id="bottom_wrapper_content">
		<?php 

			$main_content = simple_fields_value("testimonial_content");
			echo $main_content;
		?>
		</div>
	</div>
<!-- END BOTTOM WRAPPER -->

	<?php do_action( 'genesis_after_content_sidebar_wrap' );
		  get_footer(); 