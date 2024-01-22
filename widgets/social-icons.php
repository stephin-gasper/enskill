<?php

/**
 *  Social_Icon_Widget
 *
 *  @version 1.0
 *  @author Team Enskill
 */
class Social_Icon_Widget extends WP_Widget {

    /**
     *   Registers the widget name & description by calling the parent constructer.
     */
    public function __construct() {

        parent::__construct("social_icon_widget", "Social Media Icon Widget", array("description" => "Link to Social Media Site"));
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
        ?>
        <div class="social-media-wrap">
            <span class="social-icon-outer display-inline-blk">
                <a href="https://www.facebook.com/EnSkill" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-facebook social-icon-level-2"></i></a>
                <a href="https://twitter.com/theEnSkill" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-twitter social-icon-level-2"></i></a>
                <a href="https://www.linkedin.com/company/enskill" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-linkedin social-icon-level-2"></i></a>
                <a href="https://plus.google.com/+EnskillIn" class="social-icon-wrap google-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-google-plus social-icon-level-2"></i></a>
                <a href="https://goo.gl/43OoTM" class="social-icon-wrap"><i class="ei ei-circle social-icon-level-1"></i><i class="ei ei-youtube social-icon-level-2"></i></a>
            </span>
        </div>
        <?php
        echo $after_widget;
    }

}

add_action("widgets_init", function () {
    register_widget("Social_Icon_Widget");
});
