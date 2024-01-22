<?php
/**
 *  Template Name: Form Elements Template
 */

/**
 * Enqueue scripts and styles.
 */
function enskill_formelemt_scripts() {
    wp_enqueue_style('style-form-elem', get_template_directory_uri() . '/css/form-elements.css', array(), ENSKILL_THEME_VERSION);
    wp_enqueue_script('script-classie', get_template_directory_uri() . '/js/classie.js', array(), ENSKILL_THEME_VERSION, true);
    wp_enqueue_script('script-form-elem', get_template_directory_uri() . '/js/form-elements.js', array('script-classie'), ENSKILL_THEME_VERSION, true);
}

add_action('wp_enqueue_scripts', 'enskill_formelemt_scripts');
get_header();
?>
<div class="content-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 input-styling">
<!--                <section class="row">
                    <span class="input-tb-wrap col-lg-6 clearfix">
                        <input class="input-tb-field" type="text" id="input-tb-field-1" />
                        <label class="input-tb-label" for="input-tb-field-1">
                            <span class="input-tb-label-content">Name</span>
                        </label>
                        <div class="input-tb-graphic-wrap">
                            <svg class="input-tb-graphic" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>
                        </div>
                    </span>
                    <span class="input-tb-wrap col-lg-6 clearfix">
                        <input class="input-tb-field" type="text" id="input-tb-field-2" />
                        <label class="input-tb-label" for="input-tb-field-2">
                            <span class="input-tb-label-content">Email</span>
                        </label>

                        <div class="input-tb-graphic-wrap">
                            <svg class="input-tb-graphic" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>
                        </div>
                    </span>
                </section>-->
                <section class="row">
                    <span class="input input-akira col-lg-4 clearfix">
                        <input class="input-field input-field-akira" type="text" id="input-22" />
                        <label class="input-label input-label-akira" for="input-22">
                            <span class="input-label-content input-label-content-akira">First Name</span>
                        </label>
                    </span>
                    <span class="input input-akira col-lg-4 clearfix">
                        <input class="input-field input-field-akira" type="text" id="input-23" />
                        <label class="input-label input-label-akira" for="input-23">
                            <span class="input-label-content input-label-content-akira">Last Name</span>
                        </label>
                    </span>
                    <span class="input input-akira col-lg-4 clearfix">
                        <input class="input-field input-field-akira" type="text" id="input-24" />
                        <label class="input-label input-label-akira" for="input-24">
                            <span class="input-label-content input-label-content-akira">Maiden Name</span>
                        </label>
                    </span>
                </section>
                <section class="row">
                    <span class="input input-madoka col-lg-4 clearfix">
                        <input class="input-field input-field-madoka" type="text" id="input-31" />
                        <label class="input-label input-label-madoka" for="input-31">
                            <svg class="graphic graphic-madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                            </svg>
                            <span class="input-label-content input-label-content-madoka">Frequency</span>
                        </label>
                    </span>
                    <span class="input input-madoka col-lg-4 clearfix">
                        <input class="input-field input-field-madoka" type="text" id="input-32" />
                        <label class="input-label input-label-madoka" for="input-32">
                            <svg class="graphic graphic-madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                            </svg>
                            <span class="input-label-content input-label-content-madoka">Weight</span>
                        </label>
                    </span>
                    <span class="input input-madoka col-lg-4 clearfix">
                        <input class="input-field input-field-madoka" type="text" id="input-33" />
                        <label class="input-label input-label-madoka" for="input-33">
                            <svg class="graphic graphic-madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                            </svg>
                            <span class="input-label-content input-label-content-madoka">Strength</span>
                        </label>
                    </span>
                </section>
                <section class="row">
                    <span class="input input-nao col-lg-4 clearfix">
                        <input class="input-field input-field-nao" type="text" id="input-1" />
                        <label class="input-label input-label-nao" for="input-1">
                            <span class="input-label-content input-label-content-nao">Username</span>
                        </label>
                        <div class="graphic-nao-wrap">
                            <svg class="graphic graphic-nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>                            
                        </div>
                    </span>
                    <span class="input input-nao col-lg-4 clearfix">
                        <input class="input-field input-field-nao" type="text" id="input-2" />
                        <label class="input-label input-label-nao" for="input-2">
                            <span class="input-label-content input-label-content-nao">Email</span>
                        </label>

                        <div class="graphic-nao-wrap">
                            <svg class="graphic graphic-nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>                            
                        </div>
                    </span>
                    <span class="input input-nao col-lg-4 clearfix">
                        <input class="input-field input-field-nao" type="text" id="input-3" />
                        <label class="input-label input-label-nao" for="input-3">
                            <span class="input-label-content input-label-content-nao">Invitation Code</span>
                        </label>

                        <div class="graphic-nao-wrap">
                            <svg class="graphic graphic-nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                            </svg>                            
                        </div>
                    </span>
                </section>
                <section class="row">
                    <span class="input input-kozakura col-lg-4 clearfix">
                        <input class="input-field input-field-kozakura" type="text" id="input-7" />
                        <label class="input-label input-label-kozakura" for="input-7">
                            <span class="input-label-content input-label-content-kozakura" data-content="Name">Name</span>
                        </label>
                        <div class="graphic-kozakura-wrap">
                            <svg class="graphic graphic-kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
                            </svg>
                        </div>
                    </span>
                    <span class="input input-kozakura col-lg-4 clearfix">
                        <input class="input-field input-field-kozakura" type="text" id="input-8" />
                        <label class="input-label input-label-kozakura" for="input-8">
                            <span class="input-label-content input-label-content-kozakura" data-content="Email">Email</span>
                        </label>
                        <div class="graphic-kozakura-wrap">
                            <svg class="graphic graphic-kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
                            </svg>
                        </div>
                    </span>
                    <span class="input input-kozakura col-lg-4 clearfix">
                        <input class="input-field input-field-kozakura" type="text" id="input-9" />
                        <label class="input-label input-label-kozakura" for="input-9">
                            <span class="input-label-content input-label-content-kozakura" data-content="Website">Website</span>
                        </label>
                        <div class="graphic-kozakura-wrap">
                            <svg class="graphic graphic-kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
                            </svg>
                        </div>
                    </span>
                </section>
            </div>
            <div class="col-lg-12 checkbox-radio-styling">
                <section class="radio-wrap radio-wrap-1">
                    <form class="ac-custom ac-radio ac-fill" autocomplete="off">
                        <ul>
                            <li><input id="r1" name="r1" type="radio"><label for="r1">Seamlessly visualize quality intellectual capital</label></li>
                            <li><input id="r2" name="r1" type="radio"><label for="r2">Collaboratively administrate turnkey channels</label></li>
                        </ul>
                    </form>
                </section>
                <section class="checkbox-wrap">
                    <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                        <ul>
                            <li><input id="cb6" name="cb6" type="checkbox"><label for="cb6">Credibly reintermediate backend ideas</label></li>
                            <li><input id="cb7" name="cb7" type="checkbox"><label for="cb7">Continually reintermediate integrated processes</label></li>
                        </ul>
                    </form>
                </section>
                <section class="radio-wrap radio-wrap-2">
                    <form class="ac-custom ac-radio ac-circle" autocomplete="off">
                        <ul>
                            <li><input id="r5" name="r2" type="radio"><label for="r5">Objectively integrate emerging core competencies</label></li>
                            <li><input id="r6" name="r2" type="radio"><label for="r6">Progressively maintain extensive infomediaries</label></li>
                        </ul>
                    </form>
                </section>
            </div>
            <div class="col-lg-12 file-input-styling">
                <div class="box">
                    <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                </div>
            </div>
            <div class="col-lg-12 button-styling">
                <button class="enskill-btn enskill-btn-1 enskill-btn-1e"><span class="enskill-btn-txt">Button</span></button>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
