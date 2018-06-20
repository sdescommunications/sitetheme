<?php
/**
* Template Name: Billboard Full
*/
use SDES\SDES_Static as SDES_Static;

get_header(); 

?>

<?= do_shortcode( "[billboard-list tags='". get_post_meta($post->ID, "billboard-meta-box-text", true) ."']" ) ?>

<!-- content area -->
<div class="container site-content" id="content">
	<?= (is_string(get_the_title($post->ID))) ? '<h1>' . get_the_title($post->ID) . '</h1><hr>' : null ?>

	<div class="row">
		<br>
		<div class="col-sm-12">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;			
			endif;
			wp_reset_query();
			?>
		</div>	
	</div>

</div> <!-- /DIV.container.site-content -->
<?php
get_footer();