<?php get_header(); 
    $video = get_field('about_video');
?>

<section class="c-about-page">
    <div class="c-about-page__content">
        <?php echo get_the_content(); ?>
    </div>
    <div class="c-about-page__video">
        <video src=""/>
    </div>
</section>

<?php get_footer(); ?>