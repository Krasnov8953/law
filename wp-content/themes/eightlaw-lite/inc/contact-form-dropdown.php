<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom post control
 */
class Eightlaw_Lite_Contact_Form_Post_Dropdown extends WP_Customize_Control
{
    private $posts = false;

    public function __construct($manager, $id, $args = array(), $options = array())
    {
        $postargs = wp_parse_args($options, array('numberposts' => '-1', 'post_type' => 'wpcf7_contact_form'));
        $this->posts = get_posts($options);

        parent::__construct( $manager, $id, $args );
    }

    /**
    * Render the content on the theme customizer page
    */
    public function render_content()
    {
        if(!empty($this->posts))
        {
            ?>
                <label>
                    <span class="customize-post-dropdown"><?php echo esc_html( $this->label ); ?></span>
                    <select data-customize-setting-link="<?php echo $this->id; ?>" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>">
                        <option value="0" <?php if ( get_theme_mod($this->id) == '' ) echo 'selected="selected"'; ?>><?php _e('Choose Form','eightlaw-lite');?></option>
                     	 <?php  $posts = get_posts('numberposts=-1&post_type=wpcf7_contact_form');
                          		foreach ( $posts as $post ) { ?>
                           			 <option value="<?php echo $post->ID; ?>" <?php if ( get_theme_mod($this->id) == $post->ID ) echo 'selected="selected"'; ?>><?php echo $post->post_title; ?></option>
                          		<?php } ?>
                    </select>
                </label>
            <?php
        }
    }
}
?>