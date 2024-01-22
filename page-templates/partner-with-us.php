<?php
/**
 *  Template Name: Partner With Us Template
 */

/**
 * Enqueue scripts and styles.
 */
function enskill_partnerwithus_scripts() {
//    wp_enqueue_style('style-partner-with-us', get_template_directory_uri() . '/css/form-elements.css', array(), ENSKILL_THEME_VERSION);
    wp_enqueue_script('script-classie', get_template_directory_uri() . '/js/classie.js', array(), ENSKILL_THEME_VERSION, true);
    wp_enqueue_script('script-partner-with-us', get_template_directory_uri() . '/js/forms.js', array('script-classie'), ENSKILL_THEME_VERSION, true);
}

add_action('wp_enqueue_scripts', 'enskill_partnerwithus_scripts');
get_header();

$checkbox_count = $radiobtn_count = $textbox_count = $button_count = $input_file_count = 1;
$radiobtn_curr_val = 0;
$radiobtn_count_arr = array();

?>
<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <h2 class="col-lg-12 page-title">
                <span class="page-title-inner"><span class="xs-hide-content">Join/</span>Partner With Us</span>
            </h2>
            <div class="col-lg-12 page-description">
                Etiam feugiat lorem non metus. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Donec posuere vulputate arcu. Praesent egestas tristique nibh. Nam at tortor in tellus interdum sagittis.
            </div>
            <div class="col-lg-12">
                <section class="row">
                    <div class="col-lg-12 input-wrap">
                        <fieldset class="input-ckrb-fieldset">
                            <legend class="input-ckrb-legend xs-hide-content">Are you an individual or an organization?</legend>
                            <legend class="input-ckrb-legend xs-display-blk hide-elem">Individual or organization?</legend>
                            <div class="input-ckrb-wrap">
                                <input id="input-rb-<?php $radiobtn_count_arr[] = $radiobtn_count; echo $radiobtn_count;?>" class="input-rb input-ckrb input_rb_<?php $radiobtn_curr_val = end(array_values($radiobtn_count_arr));echo $radiobtn_curr_val;?>" name="input_rb" type="radio" data-container-id="individual-content"/>
                                <span class="input-rb-label-b4 input-ckrb-label-b4"></span>
                                <label for="input-rb-<?php echo $radiobtn_count; $radiobtn_count++; ?>" class="input-rb-label input-ckrb-label">Individual</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input-rb-<?php echo $radiobtn_count;?>" class="input-rb input-ckrb input_rb_<?php echo $radiobtn_curr_val;?>" name="input_rb" type="radio"  data-container-id="organization-content"/>
                                <span class="input-rb-label-b4 input-ckrb-label-b4"></span>
                                <label for="input-rb-<?php echo $radiobtn_count; $radiobtn_count++; ?>" class="input-rb-label input-ckrb-label">Organization</label>
                            </div>
                        </fieldset>
                    </div>
                </section>
            </div>
            <div class="col-lg-12 dummy-hidden-elem"></div>
            <div class="col-lg-12 hide-elem" id="individual-content"> 
			
				<form action="/wp-admin/admin-post.php" method="post">			
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++; ?>">
                                <span class="input-tb-label-content">Your name</span>
                            </label>
                        </div>                     
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-12 input-wrap">
                        <fieldset class="input-ckrb-fieldset">
                            <legend class="input-ckrb-legend">Whats do you do?</legend>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">Student</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">Professional</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">Trainer</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-12 input-wrap">
                        <fieldset class="input-ckrb-fieldset">
                            <legend class="input-ckrb-legend">How would you like to contribute ?</legend>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">I want to volunteer</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">I want to work with Enskill Full time / part time</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">I would like to partner with Enskill</label>
                            </div>
                        </fieldset>
                    </div>
                </section>               
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">Your email-id</span>
                            </label>
                        </div>                     
                    </div>
                </section>        
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">City</span>
                            </label>
                        </div>                        
                    </div>
                </section>               
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">Contact number</span>
                            </label>
                        </div>                       
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-12 enskill-btn-wrap">
                        <button class="enskill-btn input-btn" id="button-<?php echo $button_count; $button_count++; ?>"><span class="enskill-btn-txt">Submit</span></button>
                    </div>
                </section>
				<input type="hidden" name="action" value="enskill_contribute_individual">
				<?php wp_nonce_field( 'enskill_contribute_individual' ); ?>
				</form>						
				
            </div>            
            <div class="col-lg-12 dummy-hidden-elem"></div>
            <div class="col-lg-12 hide-elem" id="organization-content">
			
				<form action="/wp-admin/admin-post.php" method="post">			
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++; ?>">
                                <span class="input-tb-label-content">Your name</span>
                            </label>
                        </div>                     
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++; ?>">
                                <span class="input-tb-label-content xs-hide-content">Organization’s name</span>
                                <span class="input-tb-label-content xs-display-blk hide-elem">Organization</span>
                            </label>
                        </div>                     
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++; ?>">
                                <span class="input-tb-label-content">Designation</span>
                            </label>
                        </div>                     
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-12 input-wrap">
                        <fieldset class="input-ckrb-fieldset">
                            <legend class="input-ckrb-legend">How would you like to contribute ?</legend>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">Sponsor a session</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">Train students / offer internship</label>
                            </div>
                            <div class="input-ckrb-wrap">
                                <input id="input_ck_label_<?php echo $checkbox_count;?>" class="input-ck input-ckrb" name="input_ck_label_<?php echo $checkbox_count;?>" type="checkbox"/>
                                <span class="input-ck-label-b4 input-ckrb-label-b4"></span>
                                <label for="input_ck_label_<?php echo $checkbox_count; $checkbox_count++; ?>" class="input-ck-label input-ckrb-label">Partner with EnSkill</label>
                            </div>
                        </fieldset>
                    </div>
                </section>             
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">Your email-id</span>
                            </label>
                        </div>                     
                    </div>
                </section>        
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">Website (if any)</span>
                            </label>
                        </div>                     
                    </div>
                </section>        
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">City</span>
                            </label>
                        </div>                        
                    </div>
                </section>               
                <section class="row">
                    <div class="col-lg-8">
                        <div class="input-tb-wrap clearfix">
                            <input class="input-tb-field input-tatb-field" type="text" id="input-tb-field-<?php echo $textbox_count;?>" />
                            <label class="input-tb-label" for="input-tb-field-<?php echo $textbox_count; $textbox_count++;?>">
                                <span class="input-tb-label-content">Contact number</span>
                            </label>
                        </div>                       
                    </div>
                </section>
                <section class="row">
                    <div class="col-lg-12 enskill-btn-wrap">
                        <button class="enskill-btn input-btn" id="button-<?php echo $button_count; $button_count++; ?>"><span class="enskill-btn-txt">Submit</span></button>
                    </div>
                </section>
						<input type="hidden" name="action" value="enskill_contribute_organization">
						<?php wp_nonce_field( 'enskill_contribute_organization' ); ?>
						</form>				
				
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
