<?php

/**
 *  Form_Links_Widget
 *
 *  @version 1.0
 *  @author Team Enskill
 */
class Form_Links_Widget extends WP_Widget {

    /**
     *   Registers the widget name & description by calling the parent constructer.
     */
    public function __construct() {

        parent::__construct("form_links_widget", "Voice Your View & Contribute Widget", array("description" => "Link to Voice your view and Contribute Page"));
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        /**
         *  @var string  $title title to be displayed.
         */
        $title = "";

        // if instance is defined, populate the fields
        if (!empty($instance)) {
            $title = esc_attr($instance["title"]);
        }

        /**
         *  @var string $titleId
         */
        $titleId = $this->get_field_id("title");
        /**
         *  @var string $titleName
         */
        $titleName = $this->get_field_name("title");
        echo '<label for="' . $titleId . '">Title</label><br/>';
        echo '<input id="' . $titleId . '" type="text" name="' .
        $titleName . '" value="' . $title . '"/><br/>';
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $newInstance Values just sent to be saved.
     * @param array $oldInstance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($newInstance, $oldInstance) {
        /**
         *  @var array $values
         */
        $values = array();
        $values["title"] = htmlentities($newInstance["title"]);
        return $values;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        /**
         *  @var string  $title title to be displayed.
         */
        $title = $instance["title"];

        echo $before_widget;
        if ($title) {
            echo $before_title . $title . $after_title;
        }
        global $wp;
        $current_url = esc_url(home_url(add_query_arg(array(), $wp->request)) . '/');
        $add_class = '';
        ?>
        <div class="clearfix sm-align-center">
            <div class="headerform-link-wrap pull-left clearfix sm-pull-none">
                <?php
                $url = get_permalink(get_page_by_path('voice-your-views'));
                if (strcmp($url, $current_url) === 0) {
                    $add_class = ' active ';
                } else {
                    $add_class = '';
                }
                ?>
                <span class="headerform-link headerform-voiceview-link clearfix<?php echo $add_class; ?>">
                    <span class="headerform-iconwrap headerform-voiceview-iconwrap"><i class="ei ei-voiceyourviews headerform-icon headerform-voiceview-icon" aria-hidden="true"></i></span>
                    <h6 class="headerform-text headerform-voiceview-text"><a href="<?php echo $url; ?>" class="headerform-text-link">Voice Your Views</a></h6>
                </span>
                <?php
                $url = get_permalink(get_page_by_path('join-partner-with-us'));
                if (strcmp($url, $current_url) === 0) {
                    $add_class = ' active ';
                } else {
                    $add_class = '';
                }
                ?>
                <span class="headerform-link headerform-contribute-link clearfix<?php echo $add_class; ?>">
                    <span class="headerform-iconwrap headerform-contribute-iconwrap"><i class="ei ei-contribute headerform-icon headerform-contribute-icon" aria-hidden="true"></i></span>
                    <h6 class="headerform-text headerform-contribute-text"><a href="<?php echo $url; ?>" class="headerform-text-link">Partner With Us</a></h6>
                </span>
            </div>
            <div class="headerform-link-wrap pull-right menu-outer clearfix sm-pull-none">
                <span class="headerform-link clearfix headerform-menu-link">
                    <span class="headerform-iconwrap headerform-menu-iconwrap"><i class="ei ei-menu headerform-icon headerform-menu-icon" aria-hidden="true"></i></span>
                    <h6 class="headerform-text headerform-menu-text">Menu</h6>
                </span>
            </div>
        </div>
        <?php
        echo $after_widget;
    }

}

add_action("widgets_init", function () {
    register_widget("Form_Links_Widget");
});
