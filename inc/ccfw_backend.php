<?php 
add_action( 'admin_menu', 'cfw_calculator_generator_admin_menu' );

function cfw_calculator_generator_admin_menu(  ) { 
    add_menu_page(
        'Calorie Calculator', // page <title>Title</title>
        'Calorie Calculator', // menu link text
        'manage_options', // capability to access the page
        'cfw_calculator_generator', // page URL slug
        'cfw_calculator_generator_page', // callback function /w content
        'dashicons-calculator', // menu icon
        14
    );
}

function cfw_calculator_generator_page(  ) { 
    if(isset($_REQUEST['succes']))
     {
        echo '<div class="notice notice-success is-dismissible">
                    <p>setting saved successfully.</p>
                </div>';
     }
?>

<div class="calorie_main_container">
    <div class="inner_div">
        <ul class="nav-tab-wrapper woo-nav-tab-wrapper">
            <li class="nav-tab nav-tab-active" data-tab="calorie-tab-general"><?php echo __('General','calorie-calculator');?></li>
            <li class="nav-tab" data-tab="calorie-tab-text-settings"><?php echo __('Texts','calorie-calculator');?></li>
        </ul>
<?php
settings_fields( 'cfw_calculator_generator' );
do_settings_sections( 'cfw_calculator_generator' );
?>
    <form action='<?php echo get_permalink(); ?>' method='post'>
        <div id="calorie-tab-general" class="tab-content current">
            <table class="form-table" role="presentation">
                <h1><?php echo esc_html('Calculator Style Generator','calorie-calculator'); ?></h1>
                <tbody>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Header Title Font Size','calorie-calculator'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="cfw_title_font" name="cfw_title_font" class="width" value="<?php echo esc_attr(get_option('cfw_title_font','28')); ?>"><label>  value in px.</label>
                        </td>
                    </tr>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Content Background Color','calorie-calculator'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="cfw_contback_font" name="cfw_contback_font" data-default-color="#faf8f6" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_contback_font','#faf8f6')); ?>">
                        </td>
                    </tr>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Title Color','calorie-calculator'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="cfw_title_color" name="cfw_title_color" data-default-color="#000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_title_color','#000')); ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="cfw_inner_div">
                <table class="form-table">
                    <h1><?php echo esc_html('General Option','calorie-calculator'); ?></h1>
                    <tr>
                        <th><?php echo esc_html('Content Header Title Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_con_title_color" name="cfw_con_title_color" data-default-color="#000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_con_title_color','#000')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Field Active Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_active_color" name="cfw_active_color" data-default-color="#4f748e" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_active_color','#4f748e')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Activity Field Hover Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_act_hover_color" name="cfw_act_hover_color" data-default-color="rgba(223,51,28,.4)" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_act_hover_color','rgba(223,51,28,.4)')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Calculate Button Text Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_btntext_color" name="cfw_btntext_color" data-default-color="#fff" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_btntext_color','#fff')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_btnback_color" name="cfw_btnback_color" data-default-color="#000000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_btnback_color','#000000')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Background Hover Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_btnhover_back" name="cfw_btnhover_back" data-default-color="rgb(35, 62, 84)" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_btnhover_back','rgb(35, 62, 84)')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Background Hover Text Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_btnhover_text" name="cfw_btnhover_text" data-default-color="#fff" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_btnhover_text','#fff')); ?>">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cfw_inner_div">
                <table class="form-table">
                    <h1><?php echo esc_html('Result Style Setting','calorie-calculator'); ?></h1>
                    <tr>
                        <th><?php echo esc_html('Message Text Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_msg_text_color" name="cfw_msg_text_color" data-default-color="#842029" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_msg_text_color','#842029')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Message Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_msg_back_color" name="cfw_msg_back_color" data-default-color="#f8d7da" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_msg_back_color','#f8d7da')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Active Title Tab Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_tab_act_back_color" name="cfw_tab_act_back_color" data-default-color="#f8f4ab" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_tab_act_back_color','#f8f4ab')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Active Title Tab Text Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_tab_act_text_color" name="cfw_tab_act_text_color" data-default-color="#000000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_tab_act_text_color','#000000')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Active Title Tab Border Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_tab_act_border_color" name="cfw_tab_act_border_color" data-default-color="#83b730" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_tab_act_border_color','#83b730')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Title Tab Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_tab_back_color" name="cfw_tab_back_color" data-default-color="#eeffcf" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_tab_back_color','#eeffcf')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Title Tab Text Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_tab_text_color" name="cfw_tab_text_color" data-default-color="#000000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_tab_text_color','#000000')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Title Tab Border Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_tab_border_color" name="cfw_tab_border_color" data-default-color="#cff09e" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_tab_border_color','#cff09e')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Title Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_result_title_back_color" name="cfw_result_title_back_color" data-default-color="#a1c955" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_result_title_back_color','#a1c955')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Category List Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_cat_list_back_color" name="cfw_cat_list_back_color" data-default-color="#a1c955" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_cat_list_back_color','#a1c955')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Category List Text Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_cat_list_text_color" name="cfw_cat_list_text_color" data-default-color="#000000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_cat_list_text_color','#000000')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Calories/ Days List Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_caldays_list_back_color" name="cfw_caldays_list_back_color" data-default-color="#f8f4ab" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_caldays_list_back_color','#f8f4ab')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo esc_html('Calories/ Days List Background Color','calorie-calculator'); ?></th>
                        <td>
                            <input type="text" id="cfw_caldays_list_text_color" name="cfw_caldays_list_text_color" data-default-color="#000000" data-alpha-enabled="true" class="color-picker" value="<?php echo esc_attr(get_option('cfw_caldays_list_text_color','#000000')); ?>">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="calorie-tab-text-settings" class="tab-content">
            <div class="cfw_inner_div">
                <table class="form-table">
                    <h1><?php echo esc_html('General Option','calorie-calculator'); ?></h1>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Header Title Tex','calorie-calculator'); ?>t</label>
                        </th>
                        <td>
                            <input type="text" id="cfw_title" name="cfw_title" class="width" disabled value="<?php echo esc_attr(get_option('cfw_title','CALORIE CALCULATOR')); ?>">
                             <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/calorie-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label>
                        </td>
                    </tr>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('About You Title Tex','calorie-calculator'); ?>t</label>
                        </th>
                        <td>
                            <input type="text" id="cfw_about_text" name="cfw_about_text" class="width" disabled value="<?php echo esc_attr(get_option('cfw_about_text','About You')); ?>">
                             <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/calorie-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label>
                        </td>
                    </tr>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('About You Title Tex','calorie-calculator'); ?>t</label>
                        </th>
                        <td>
                            <input type="text" id="cfw_activate_text" name="cfw_activate_text" class="width" disabled value="<?php echo esc_attr(get_option('cfw_activate_text','HOW ACTIVATE ARE YOU?')); ?>">
                             <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/calorie-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label>
                        </td>
                    </tr>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Calculate Button Tex','calorie-calculator'); ?>t</label>
                        </th>
                        <td>
                            <input type="text" id="cfw_calc_btn_text" name="cfw_calc_btn_text" class="width" disabled value="<?php echo esc_attr(get_option('cfw_calc_btn_text','CALCULATE')); ?>">
                             <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/calorie-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cfw_inner_div">
                <table class="form-table">
                    <h1><?php echo esc_html('Result Tab Text Setting','calorie-calculator'); ?></h1>
                    <tr class="font-size">
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Weight Loss Title Tab Text','calorie-calculator'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="wmc_weight_loss_text" name="wmc_weight_loss_text" class="width" disabled value="<?php echo esc_attr(get_option('wmc_weight_loss_text','Weight Loss')); ?>">
                             <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/calorie-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="blogname"><?php echo esc_html('Weight Gain Title Text','calorie-calculator'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="wmc_weight_gain_text" name="wmc_weight_gain_text" disabled value="<?php echo get_option('wmc_weight_gain_text','Weight Gain'); ?>">
                             <label class="ttfcf7_common_link"><?php echo __('Some Options Are Only available in ','tool-tips-for-contact-form-7');?><a href="https://appcalculate.com/product/calorie-calculator/" target="_blank"><?php echo __('pro version','tool-tips-for-contact-form-7');?></a></label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <p class="submit">
            <input type="hidden" name="action" value="ccfw_save_option">
            <input type="submit" value="Save Changes" name="submit" class="button-primary">
        </p>
    </form>
    </div>
</div>

    <?php
}

add_action('init','ccfw_add_option_type');

function ccfw_add_option_type(){
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'ccfw_save_option') {

        update_option('cfw_title_font',sanitize_text_field($_REQUEST['cfw_title_font']));
        update_option('cfw_title_color',sanitize_text_field($_REQUEST['cfw_title_color']));
        update_option('cfw_contback_font',sanitize_text_field($_REQUEST['cfw_contback_font']));
        update_option('cfw_con_title_color',sanitize_text_field($_REQUEST['cfw_con_title_color']));
        update_option('cfw_active_color',sanitize_text_field($_REQUEST['cfw_active_color']));
        update_option('cfw_act_hover_color',sanitize_text_field($_REQUEST['cfw_act_hover_color']));
        update_option('cfw_btntext_color',sanitize_text_field($_REQUEST['cfw_btntext_color']));
        update_option('cfw_btnback_color',sanitize_text_field($_REQUEST['cfw_btnback_color']));
        update_option('cfw_btnhover_back',sanitize_text_field($_REQUEST['cfw_btnhover_back']));
        update_option('cfw_btnhover_text',sanitize_text_field($_REQUEST['cfw_btnhover_text']));
        update_option('cfw_msg_text_color',sanitize_text_field($_REQUEST['cfw_msg_text_color']));
        update_option('cfw_msg_back_color',sanitize_text_field($_REQUEST['cfw_msg_back_color']));
        update_option('cfw_tab_act_back_color',sanitize_text_field($_REQUEST['cfw_tab_act_back_color']));
        update_option('cfw_tab_act_text_color',sanitize_text_field($_REQUEST['cfw_tab_act_text_color']));
        update_option('cfw_tab_act_border_color',sanitize_text_field($_REQUEST['cfw_tab_act_border_color']));
        update_option('cfw_tab_back_color',sanitize_text_field($_REQUEST['cfw_tab_back_color']));
        update_option('cfw_tab_text_color',sanitize_text_field($_REQUEST['cfw_tab_text_color']));
        update_option('cfw_tab_border_color',sanitize_text_field($_REQUEST['cfw_tab_border_color']));
        update_option('cfw_result_title_back_color',sanitize_text_field($_REQUEST['cfw_result_title_back_color']));
        update_option('cfw_cat_list_back_color',sanitize_text_field($_REQUEST['cfw_cat_list_back_color']));
        update_option('cfw_cat_list_text_color',sanitize_text_field($_REQUEST['cfw_cat_list_text_color']));
        update_option('cfw_caldays_list_back_color',sanitize_text_field($_REQUEST['cfw_caldays_list_back_color']));
        update_option('cfw_caldays_list_text_color',sanitize_text_field($_REQUEST['cfw_caldays_list_text_color']));
        update_option('cfw_title',sanitize_text_field($_REQUEST['cfw_title']));
        update_option('cfw_about_text',sanitize_text_field($_REQUEST['cfw_about_text']));
        update_option('cfw_activate_text',sanitize_text_field($_REQUEST['cfw_activate_text']));
        update_option('cfw_calc_btn_text',sanitize_text_field($_REQUEST['cfw_calc_btn_text']));
        update_option('wmc_weight_loss_text',sanitize_text_field($_REQUEST['wmc_weight_loss_text']));
        update_option('wmc_weight_gain_text',sanitize_text_field($_REQUEST['wmc_weight_gain_text']));

        wp_redirect( admin_url( '/admin.php?page=cfw_calculator_generator&succes=sucee' ));
    }
}

?>