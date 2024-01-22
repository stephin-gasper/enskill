<?php
/**
 *  Template Name: Contact Page Template
 */

/**
 * Enqueue scripts and styles.
 */
function enskill_contactus_scripts() {
    wp_enqueue_style('style-contact-us', get_template_directory_uri() . '/css/contactus.css', array(), ENSKILL_THEME_VERSION);
    wp_enqueue_script('script-classie', get_template_directory_uri() . '/js/classie.js', array(), ENSKILL_THEME_VERSION,true);
    wp_enqueue_script('script-contact-us', get_template_directory_uri() . '/js/contactus.js', array(), ENSKILL_THEME_VERSION,true);
}

add_action('wp_enqueue_scripts', 'enskill_contactus_scripts');
get_header();
?>
<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-wrap">
                    <div class="tab-head-wrap clearfix">
                        <h2 class="tab-head-item tab-head-active" data-tab-content="#tab1-content">Tab 1</h2>
                        <h2 class="tab-head-item" data-tab-content="#tab2-content">Tab 2</h2>
                        <div class="tab-slide"></div>
                    </div>
                    <div class="tab-content-wrap">                       
                        <div class="tab-content tab-content-active" id="tab1-content">
                            <section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">What's your favorite movie?</label></span>
								<input id="q1" name="q1" type="text"/>
							</li>
							<li>
								<span><label for="q2">Where do you live?</label></span>
								<input id="q2" name="q2" type="text"/>
							</li>
							<li>
								<span><label for="q3">What time do you got to work?</label></span>
								<input id="q3" name="q3" type="text"/>
							</li>
							<li>
								<span><label for="q4">How do you like your veggies?</label></span>
								<input id="q4" name="q4" type="text"/>
							</li>
							<li>
								<span><label for="q5">What book inspires you?</label></span>
								<input id="q5" name="q5" type="text"/>
							</li>
							<li>
								<span><label for="q6">What's your profession?</label></span>
								<input id="q6" name="q6" type="text"/>
							</li>
						</ol><!-- /questions -->
						<button class="submit" type="submit">Send answers</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->			
			</section>
                        </div>
                        <div class="tab-content" id="tab2-content">TAB 2 - Quisque egestas, purus in tempor vulputate, diam augue mollis quam, quis elementum ipsum ex a risus. Quisque sed augue porta, facilisis felis vitae, cursus mi. Nullam mollis magna eget tincidunt mollis. Sed suscipit placerat ultricies. Sed eget lorem et ipsum ultricies congue eu a enim. Nam quis ex nec lorem dignissim suscipit eu ut felis. Vivamus molestie felis id purus congue, vel ultrices sem molestie.</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
