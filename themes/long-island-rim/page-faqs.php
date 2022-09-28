<?php get_header(); ?>

<div class="c-faqs">
    <h2 class="c-faqs__title">Faqs</h2>
    <p class="c-faqs__subtitle">Have any questions ?</p>

    <nav class="c-about-page__faq-navigation">
 <?php if( have_rows('faqs') ): ?>

<ul class="c-faqs__list-items">
    <?php while( have_rows('faqs') ) : the_row();
        $faqCat = get_sub_field('faq_category'); ?>
    <li class="c-faqs__list-item"><?php echo $faqCat; ?></li>
    <?php endwhile; ?>
    </ul>

<?php 
else :
endif; ?>
    </nav>
    </div>

<?php get_footer(); ?>