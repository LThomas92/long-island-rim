<?php get_header(); 
    $headerImage = get_field('header_image');
    $featProductTitle = get_field('featured_products_title');
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

    <div class="c-front-page__featured-services">
    
    <?php if( have_rows('featured_services') ): ?>
    <ul class="c-front-page__featured-services">
    <?php while( have_rows('featured_services') ) : the_row();

        $icon = get_sub_field('featured_service_icon');
        $title = get_sub_field('featured_service_title');
        $desc = get_sub_field('featured_service_description');
        $link = get_sub_field('featured_service_link'); 
        ?>

        <li class="c-front-page__featured-service">
            <img src="<?php echo $icon['url']; ?>" alt="">
            
        </li>

    <?php endwhile; ?>
    </ul>
<?php 
else :
    
endif; ?>
    </div>

    <div class="c-front-page__feature-section gutenberg-styles">
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

    <div class="c-front-page__featured-product-section gutenberg-styles">
        <h2 class="c-front-page__featured-product-title"><?php echo $featProductTitle; ?></h2>

    <?php $featured_products = get_field('featured_products');
            if( $featured_products ): ?>
        <ul class="c-front-page__featured-products">
            <?php foreach( $featured_products as $product ): 
        $title = get_the_title( $product->ID );
        $image = get_the_post_thumbnail_url( $product->ID );
        $link = get_the_permalink( $product->ID );
        ?>
        <li class="c-front-page__featured-product">
            <a href="<?php echo $link; ?>">
            <h4 class="c-front-page__featured-product__title"><?php echo $title; ?></h4>
            <picture class="c-front-page__featured-product__img">
                <img src="<?php echo $image; ?>" alt="">
            </picture>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    wp_reset_postdata(); ?>
<?php endif; ?>
    </div>


</div>

<?php get_footer(); ?>