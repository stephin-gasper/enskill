<?php
/**
 *  Template Name: Contact Page Alt Template
 */

/**
 * Enqueue scripts and styles.
 */
function enskill_contactusalt_scripts() {
    wp_enqueue_style('style-contact-us-alt', get_template_directory_uri() . '/css/contactus-alt.css', array(), ENSKILL_THEME_VERSION);
//    wp_enqueue_script('script-classie', get_template_directory_uri() . '/js/classie.js', array(), ENSKILL_THEME_VERSION, true);
    wp_enqueue_script('script-contact-us-alt', get_template_directory_uri() . '/js/contactus-alt.js', array(), ENSKILL_THEME_VERSION, true);
}

add_action('wp_enqueue_scripts', 'enskill_contactusalt_scripts');
get_header();
$textarea_count=1;
$button_count=1;
$textbox_count=1;
?>
<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-wrap">
                    <div class="tab-head-wrap clearfix xs-hide-content">
                        <h2 class="tab-head-item tab-head-active" data-tab-content="#contactus-content">Contact Us</h2>
                        <h2 class="tab-head-item" data-tab-content="#reachus-content">Reach Us</h2>
                        <div class="tab-slide"></div>
                    </div>
                    <div class="tab-content-wrap">
                        <form action="/wp-admin/admin-post.php" method="post">
                        <h2 class="tab-head-item-resp hide-elem xs-display-blk tab-head-active-resp" data-tab-content="#contactus-content">Contact Us <i class="ei ei-chevron-down tab-head-icon-resp" aria-hidden="true"></i></h2>                   
                        <div class="tab-content tab-content-active" id="contactus-content">
                            <section class="row">
                                <div class="col-lg-12">
                                    <section class="row">
                                        <div class="col-lg-8">
                                            <div class="input-tb-wrap clearfix">
                                                <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count; ?>" name="name" required />
                                                <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count;
$textbox_count++;
?>">
                                                    <span class="input-tb-label-content">Name</span>
                                                </label>
                                            </div>                       
                                        </div>
                                    </section>
                                    <section class="row">
                                        <div class="col-lg-8">
                                            <div class="input-tb-wrap clearfix">
                                                <input class="input-tb-field input-tatb-field" type="email" id="input-tb-field-<?php echo $textbox_count; ?>" name="email" required />
                                                <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count;
                                                       $textbox_count++;
?>">
                                                    <span class="input-tb-label-content">Email</span>
                                                </label>
                                            </div>                        
                                        </div>
                                    </section>
                                    <section class="row">
                                        <div class="col-lg-8">
                                            <div class="input-tb-wrap clearfix">
                                                <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count; ?>" name="phone" required />
                                                <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count;
                                                       $textbox_count++;
?>">
                                                    <span class="input-tb-label-content">Phone</span>
                                                </label>
                                            </div>                        
                                        </div>
                                    </section>
                                    <section class="row">
                                        <div class="col-lg-8">
                                            <div class="input-ta-wrap clearfix">
                                                <textarea class="input-ta-field input-tatb-field"  id="input-ta-field-<?php echo $textarea_count; ?>" cols="30" rows="10" name="message" required ></textarea>
                                                <label class="input-ta-label" for="input-ta-field-<?php echo $textarea_count;
                                                       $textarea_count++;
?>">
                                                    <span class="input-ta-label-content">Message</span>
                                                </label>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="row">
                                        <div class="col-lg-12 enskill-btn-wrap">
                                            <button type="submit" class="enskill-btn input-btn" id="button-<?php echo $button_count;
                                                       $button_count++;
?>"><span class="enskill-btn-txt">Submit</span></button>
                                        </div> 
                                    </section>
                                </div>
                            </section>
                        </div>
                        <h2 class="tab-head-item-resp hide-elem xs-display-blk" data-tab-content="#reachus-content">Reach Us <i class="ei ei-chevron-down tab-head-icon-resp" aria-hidden="true"></i></h2>
                        <div class="tab-content" id="reachus-content">
                            <section class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.0075834208!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1394298866288"></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 reachus-txt-wrap">
                                    <p class="reachus-txt"><i class="ei ei-phone reach-us-icon" aria-hidden="true"></i><strong>Contact Number</strong> - 1234657890, 0987654321</p>
                                    <p class="reachus-txt"><i class="ei ei-envelope reach-us-icon" aria-hidden="true"></i><strong>Email Address</strong> - test@domain.tld</p>
                                    <p class="reachus-txt"><i class="ei ei-map-marker reach-us-icon" aria-hidden="true"></i><strong>Address</strong> - Navin-Asha Co-op Hsg Society, Lane Number 1, Joshibaug, Kalyan, Maharashtra 421301, India</p>
                                </div>
                            </section>
                        </div>
						<input type="hidden" name="action" value="enskill_contact"/>
						<?php wp_nonce_field( 'enskill_contact' ); ?>
						</form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
