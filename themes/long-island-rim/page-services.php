<?php get_header(); 
    $headerTitle = get_field('header_title');
?>

<div class="page-services">

<h2 class=""><?php $headerTitle; ?></h2>

<?php if( have_rows('repeater_field_name') ):

    // Loop through rows.
    while( have_rows('repeater_field_name') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>

</div>

<?php get_footer(); ?>