<?php get_header(); 
    $generalContent = get_field('general_content');
    $servicesContent = get_field("services_content");
    $hoursContent = get_field('hours_content');
    $locationContent = get_field('location_content');
?>

<div class="c-faqs">
    <h2 class="c-faqs__title">Faqs</h2>
    <p class="c-faqs__subtitle">Have any questions ?</p>

    <nav class="c-about-page__faq-navigation">
 <?php if( have_rows('faqs') ): ?>

<ul class="c-faqs__list-items">
    <?php while( have_rows('faqs') ) : the_row();
        $faqCat = get_sub_field('faq_category'); ?>
    <li class="c-faqs__list-item c-faqs__<?php echo $faqCat ?>"><?php echo $faqCat; ?></li>
    <?php endwhile; ?>
    </ul>

<?php 
else :
endif; ?>
    </nav>

    <div class="c-faqs__faq-content">
        <div class="c-faqs__general-content">
        <?php if( $generalContent ) { ?>
            <p><?php echo $generalContent; ?></p>
        <?php } ?>
        </div>
        <div class="c-faqs__services-content">
        <?php if( $servicesContent ) { ?>
            <p><?php echo $servicesContent; ?></p>
        <?php } ?>
        </div>
        <div class="c-faqs__hours-content">
        <?php if( $hoursContent ) { ?>
            <p><?php echo $hoursContent; ?></p>
        <?php } ?>
        </div>
        <div class="c-faqs__location-content">
        <?php if( $locationContent ) { ?>
            <p><?php echo $locationContent; ?></p>
        <?php } ?>
        </div>

    </div>
    </div>

<?php get_footer(); ?>