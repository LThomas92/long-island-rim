<?php get_header(); 
    $headerImage = get_field('header_image');
?>

<div class="c-front-page">

<?php if( have_rows('homepage_services') ): ?>
    <ul class="c-front-page__hp-services">
    <?php while( have_rows('homepage_services') ) : the_row();
        $serviceImage = get_sub_field('service_item_image'); 
        $serviceHeading = get_sub_field('service_item_heading');
        $serviceDesc = get_sub_field('service_item_description');
        $serviceCTA = get_sub_field('cta');
        ?>

        <li class="c-front-page__hp-service">
            <div class="c-front-page__hp-service__content">
                <h1><?php echo $serviceHeading; ?></h1>
                <p><?php echo $serviceDesc; ?></p>
                <a href="<?php echo $serviceCTA['url']; ?>"><?php echo $serviceCTA['title']; ?></a>
            </div>
            <picture class="c-front-page__hp-service__image">
                <img src="<?php echo $serviceImage['url']; ?>" alt="<?php echo $serviceImage['alt']; ?>">
            </picture>
        </li>

    <?php endwhile; ?>
    </ul>

<?php else :
endif; ?>

    <div class="c-front-page__feature-section">
        <?php if( have_rows('features') ): ?>
            <ul class="c-front-page__features">
    <?php while( have_rows('features') ) : the_row(); ?>
      <?php $featureHeading = get_sub_field('feature_heading'); 
            $featureIcon = get_sub_field('feature_icon');
            $featureDesc = get_sub_field('feature_description');
      ?>
             <li class="c-front-page__feature">
                <img src="<?php echo $featureIcon['url']; ?>" alt="">
                <h3><?php echo $featureHeading; ?></h3>
                <p><?php echo $featureDesc; ?></p>
            </li>

    <?php 
    endwhile;
else :
endif; ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>