<?php

function partner_content_wrap($atts, $content = null) {
    ob_start();
    ?>
    <section class="row partner-content-wrap">
    <?php echo do_shortcode($content); ?>
    </section>
    <?php
    $output = ob_get_clean();
    return $output;
}

add_shortcode('partner_content_wrap', 'partner_content_wrap');

function partner_content($atts, $content = null) {
    ob_start();    
    $values = shortcode_atts(array(
        'col' => 'col-lg-12'
            ), $atts);
    ?>
    <article class="<?php echo esc_attr($values['col']); ?>">
        <div class="partner-content"><?php echo do_shortcode($content); ?></div>
    </article>
    <?php
    $output = ob_get_clean();
    return $output;
}

add_shortcode('partner_content', 'partner_content');