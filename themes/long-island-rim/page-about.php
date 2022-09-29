<?php get_header(); 
    $video = get_field('about_video');
    $videoLink = get_field('video_link');
?>

<section class="c-about-page">
<div class="c-about-page__video">
        <video controls>
            <source src="<?php echo $videoLink; ?>" type="video/mp4">
    </video>
    </div>
    <div class="c-about-page__content">
        <?php echo get_the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>