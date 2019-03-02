<?php 
get_header();

crb_the_title( '<h2 class="pagetitle">', '</h2>' );

if ( is_single() ) {
	get_template_part( 'loop', 'single' );
} else {
	get_template_part( 'loop' );
}

get_sidebar();

get_footer();