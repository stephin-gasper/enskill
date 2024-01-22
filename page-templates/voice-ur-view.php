<?php
/**
 *  Template Name: Voice Your View Template
 */

/**
 * Enqueue scripts and styles.
 */
function enskill_viewview_scripts() {
//    wp_enqueue_style('style-voice-ur-view', get_template_directory_uri() . '/css/form-elements.css', array(), ENSKILL_THEME_VERSION);
    wp_enqueue_script('script-classie', get_template_directory_uri() . '/js/classie.js', array(), ENSKILL_THEME_VERSION, true);
    wp_enqueue_script('script-voice-ur-view', get_template_directory_uri() . '/js/forms.js', array('script-classie'), ENSKILL_THEME_VERSION, true);
}

add_action('wp_enqueue_scripts', 'enskill_viewview_scripts');
get_header();

$checkbox_count = $radiobtn_count = $radiobtn_count = $textbox_count = $textarea_count = $button_count = $input_file_count = 1;
?>
<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
			<form action="/wp-admin/admin-post.php" method="post" enctype="multipart/form-data" >
            <h2 class="col-lg-12 page-title">
                <span class="page-title-inner"><?php the_title(); ?></span>
            </h2>
            <div class="col-lg-12 page-description">
                You’ve got suggestions , criticism , ideas , opinions regarding anything related to the state of education today  , Speak out  !
            </div>
            <div class="col-lg-12">
			
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" name="name" required />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++; ?>">
                                <span class="input-tb-label-content">Name</span>
                            </label>
                        </div>                       
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="email" id="input-tb-field-<?php echo $textbox_count;?>" name="email" required />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++; ?>">
                                <span class="input-tb-label-content">Email</span>
                            </label>
                        </div>                        
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-ta-wrap clearfix">
                            <textarea class="input-ta-field input-tatb-field" id="input-ta-field-<?php echo $textarea_count;?>" cols="30" rows="10" name="message" required></textarea>
                            <label class="input-ta-label" for="input-ta-field-<?php echo $textarea_count; $textarea_count++; ?>">
                                <span class="input-ta-label-content">Message</span>
                            </label>
                        </div>
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-12 input-file-wrap input-wrap">
                        <input type="file" name="attach_file[]" id="file-<?php echo $input_file_count; ?>" class="input-file" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-<?php echo $input_file_count; $input_file_count++; ?>" class="input-file-label"><svg class="input-file-label-graphic" xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span class="input-file-label-content">Attach docs</span></label><!-- Choose a file&hellip; -->
                    </div>
                    <div class="col-lg-12 enskill-btn-wrap">
                        <button class="enskill-btn input-btn" id="button-<?php echo $button_count; $button_count++; ?>"><span class="enskill-btn-txt">Submit</span></button>
                    </div> 
                </section>
						<input type="hidden" name="action" value="enskill_voice_your_voice">
						<?php wp_nonce_field( 'enskill_voice_your_voice' ); ?>
						</form>
            </div>
			
        </div>
    </div>
</div>
<?php
get_footer();
