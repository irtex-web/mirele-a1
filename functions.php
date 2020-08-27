<?php
/**
 * Welcome to the source code
 *
 * ███╗   ███╗██╗██████╗ ███████╗██╗     ███████╗
 * ████╗ ████║██║██╔══██╗██╔════╝██║     ██╔════╝
 * ██╔████╔██║██║██████╔╝█████╗  ██║     █████╗
 * ██║╚██╔╝██║██║██╔══██╗██╔══╝  ██║     ██╔══╝
 * ██║ ╚═╝ ██║██║██║  ██║███████╗███████╗███████╗
 * ╚═╝     ╚═╝╚═╝╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝
 *
 *
 * If you have any problems with the software,
 * go to iRTEX official Envato account and find
 * there a link to technical support.
 *
 *
 * Memo to the developers:
 * 1. GitHub is your friend and savior. Often make `git push`
 * 2. More `If`
 * 3. Document the code.
 */

defined ( 'ABSPATH' ) or die('Not defined ABSPATH');

define ('MIRELE_FORCED_DISABLE_ANALYSIS', false);
define ('MIRELE_INTEGRATION_HUBSPOT', true);
define ('MIRELE_INTEGRATION_MAILCHIMP', true);
define ('ROSEMARY_CANVAS', 'canvas.php');
define ('ROSEMARY_TEMPLATES_DIR', get_template_directory() . '/templates');
define ('ROSEMARY_TWIG_DIR', get_template_directory() . '/twig');
define ('ROSEMARY_TEMPLATES_HTML_DIR', get_template_directory() . '/rosemary_html');
define ('MIRELE_CORE_DIR', get_template_directory() . '/core');
define ('MIRELE_SOURCE_DIR', get_template_directory_uri() . '/source');
define ('MIRELE_SOURCE_PATH', get_template_directory() . '/source');
define ('MIRELE_LOG_FILE', get_template_directory() . '/logger.log');
define ('MIRELE_ERROR_FILE', get_template_directory() . '/.error');
define ('ROSEMARY_FORBIDDEN_SYMBOLS', array(':', '/', "@"));
define ('ROSEMARY_RIGHTS_FOR_VISUAL_EDIT', 'edit_themes');
define ('ROSEMARY_VARCHAR_SIZE_DB', 512);
define ('ROSEMARY_VARCHAR_INT_DB', 64);
define ('ROSEMARY_DEVELOPER_MODE', false);
define ('MIRELE_GET', $_GET);
define ('MIRELE_POST', $_POST);
define ('MIRELE_VERSION', "1.0.0");
define ('ROSEMARY_VERSION', "1.0.1");
define ('ROSEMARY_INSTANCES', 'SMART');
define ('MIRELE_URL', $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0]);

# Show errors
if (!wp_doing_ajax() and true) {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}

# Compatibility check
if (true == true) {

}

# Connecting all dependencies
$include = function ($e=null){

    if (!wp_doing_ajax()) {
        include_once 'vendor/autoload.php';
    }

    # Standard set of environment
    include_once 'core/function/fault_tolerance.php';
    include_once 'core/function/lorem.php';
    include_once 'core/function/password_generate.php';
    include_once 'core/function/secondstotime.php';
    include_once 'core/function/size.php';
    include_once 'core/function/time.php';

    # Arrhitectural Classes Sets (Mirele)
    include_once 'core/class/MWPUI.php';
    include_once 'core/class/MApps.php';
    include_once 'core/class/MCache.php';
    include_once 'core/class/MData.php';
    include_once 'core/class/MHubSpot.php';
    include_once 'core/class/MMailChimp.php';
    include_once 'core/class/MPackage.php';
    include_once 'core/class/MSafe.php';
    include_once 'core/class/MVersion.php';
    include_once 'core/class/MRepository.php';
    include_once 'core/class/MRouter.php';
    include_once 'core/class/MAjax.php';
    include_once 'core/class/MPager.php';
    include_once 'core/class/MSettings.php';
    include_once 'core/class/MStyler.php';
    include_once 'core/class/MFile.php';
    include_once 'core/class/MBBPress.php';
    include_once 'core/class/MDemos.php';
    include_once 'core/class/MNotification.php';
    include_once 'core/class/MLogger.php';

    # Main Core
    include_once 'core/framework/String.php';
    include_once 'core/framework/Storage.php';
    include_once 'core/framework/Iterator.php';
    include_once 'core/framework/TWIG.php';
    include_once 'core/framework/TWIGWoocommerce.php';
    include_once 'core/framework/Component.php';
    include_once 'core/framework/Store.php';
    include_once 'core/class/AJAX.php';
    include_once 'core/class/TWIG.php';
    include_once 'core/class/Router.php';
    include_once 'core/Router.php';
    include_once 'core/class/Rosemary.php';

    # Architecture class sets
    include_once 'core/class/RDeveloper.php';
    include_once 'core/class/RManager.php';

    # Mirele kernel functions set
    include_once 'core/function/ajax_events.php';
    include_once 'core/function/components.php';
    include_once 'core/function/autoloader.php';
    include_once 'core/function/registrator.php';
    include_once 'core/function/render.php';
    include_once 'core/function/shortcode.php';
    include_once 'core/function/mcache.php';
    include_once 'core/function/getDomain.php';
    include_once 'core/function/object.php';
    include_once 'core/function/rosemary_framework.php';
    include_once 'core/function/resize.php';
    include_once 'core/function/setups.php';

    include_once 'core/ui/rosemary/demos/template/demo.php';

    # Integration
    include_once 'core/ui/mirele/integration/hubspot/hubspot_login.php';
    include_once 'core/ui/mirele/integration/hubspot/hubspot_main.php';
    include_once 'core/ui/mirele/integration/hubspot/hubspot_settings.php';

    # UI elements
    include_once 'core/ui/mirele/center/warnings.php';
    include_once 'core/ui/mirele/center/settings_theme.php';
    include_once 'core/ui/mirele/access/main.php';
    include_once 'core/ui/mirele/interrogation/main.php';
    include_once 'core/ui/mirele/robotstxt/main.php';
    include_once 'core/ui/wordpress/comments.php';
    include_once 'core/ui/wordpress/comment-form.php';

    # Components
    include_once 'Components/Sidebars/default.php';
    include_once 'Components/Footers/default.php';
    include_once 'Components/Navbars/default.php';
    include_once 'Components/Menu/default_navbar.php';

    include_once 'kits/default.php';

    # Plug-in support from other manufacturers
    include_once 'woocommerce/manager.php';
    include_once 'bbpress/manager.php';

};

$include();

//MAjax();
//MIMailChimp_ajax();
//MIHubSpot_ajax();

woocommerce_manager ();
bbpress_manager();

global $rm, $twig, $TWIG, $Router, $mdata, $mpackage, $msafe, $mwpsettings, $bootloader_path, $mwp_wait_subpages, $mrouter, $mpager, $msettings, $mapps, $mstyler, $majax, $mlogger, $mnotify;

$majax = \Mirele\AJAX\Connector::getInstance();
$TWIG = \Mirele\TWIG::getInstance();
$Router = new \Mirele\Router();

# \Mirele\Framework\Store::add((new \Mirele\Framework\Component)->setId("2343")->setProps([])->setFunction(function ($props) {})->build());

$mrouter = new MRouter;
$rm = new RManager;
$mdata = new MData;
$mpackage = new MPackage;
$msafe = new MSafe;
$msettings = new MSettings;
$mpager = new MPager;
$mapps = new MApps;
$mstyler = new MStyler;
$mnotify = new MNotification;
$mwpui = new Mirele\Framework\MWPUI;
$mlogger = new MLogger (MIRELE_LOG_FILE);

set_error_handler(function () {
    global $mlogger;
    $mlogger->warning(json_encode(func_get_args()));
});

if (!wp_doing_ajax()) {

    $twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(ROSEMARY_TWIG_DIR), [
        'cache' => false
    ]);

}


/**
 * UI render file.
 * This file is responsible for rendering the editor page
 * Rosemary elements
 *
 * @author: Mirele
 * @version: 1.0.0
 * @package: Mirele
 */

/**
 * Connection of all components that are displayed in
 * WordPress admin menu.
 *
 * This includes all Mirele components.
 *
 * @version: 1.0.0
 */

# Rest Redirect
add_action('rest_api_init', function () {

    register_rest_route( 'mirele/api/v1/', '(?P<package>[a-zA-Z0-9-]+)/(?P<method>[a-zA-Z0-9-]+)', [
        'methods' => 'GET',
        'callback' => function ($event) {
            $props = (object) $event->get_params();
            \Mirele\Router::dispatch("/rest_endpoint_v1/$props->package/$props->method");
        },
        'show_in_rest' => true
    ]);

});

add_action ('admin_enqueue_scripts', function () {

    global $wp_version;

    if ( 3.5 <= $wp_version ) {
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
    } else {
        wp_enqueue_style( 'farbtastic' );
        wp_enqueue_script( 'farbtastic' );
    }

});

add_action ('wp_enqueue_scripts', function () {

    wp_enqueue_script('vue');
    wp_enqueue_script('axios');
    wp_enqueue_script('babel');
    wp_enqueue_script('popper');
    wp_enqueue_script('babelui');
    wp_enqueue_script('bootstrap4');
    wp_enqueue_script('mireleapi');
    wp_enqueue_script('fontAwesome');

    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('bootsrtap4');
    wp_enqueue_style('main_style');

});

add_action ('wp_body_open', function () {
    
    global $mirele_js_var;
    global $mstyler;

    /**
     * Setup JS vars on document
     */

    echo "<script type='text/javascript'>";
    foreach ($mirele_js_var as $var => $value) {
        $value = !empty($value) ? $value : 'false';
        echo "window.mirele_$var = $value; \n";
    }
    echo "</script>";

    MPackage::single_font(get_option('mrl_wp_default_body_font', "Roboto"));

    $mstyler->register('any', 'body, html', array(
        'font-family' => "'" . get_option('mrl_wp_default_body_font', "Roboto") . "'" . (get_option('mrl_wp_default_body_font_forced', false) == 'true' ? ' !important' : '')
    ));

    if (get_option('mrl_wp_default_body_font_forced', false) == 'true') {
        $mstyler->register('any', '*', array(
            'font-family' => "'" . get_option('mrl_wp_default_body_font', "Roboto") . "' !important "
        ));
    }

    if (function_exists('is_woocommerce') and is_woocommerce()) {
        MPackage::single_font(get_option('mrl_wp_default_body_font_woo', "Roboto"));

        $mstyler->register('any', 'body, html', array(
            'font-family' => "'" . get_option('mrl_wp_default_body_font_woo', "Roboto") . "'" . (get_option('mrl_wp_default_body_font_woo_forced', false) == 'true' ? ' !important' : '')
        ));

        if (get_option('mrl_wp_default_body_font_woo_forced', false) == 'true') {
            $mstyler->register('any', '*', array(
                'font-family' => "'" . get_option('mrl_wp_default_body_font_woo', "Roboto") . "' !important "
            ));
        }
    }

    if (is_page_template(ROSEMARY_CANVAS)) {
        MPackage::single_font(get_option('mrl_wp_default_body_font_canvas', "Roboto"));

        $mstyler->register('any', 'body, html', array(
            'font-family' => "'" . get_option('mrl_wp_default_body_font_canvas', "Roboto") . "'" . (get_option('mrl_wp_default_body_font_canvas_forced', false) == 'true' ? ' !important' : '')
        ));

        if (get_option('mrl_wp_default_body_font_canvas_forced', false) == 'true') {
            $mstyler->register('any', '*', array(
                'font-family' => "'" . get_option('mrl_wp_default_body_font_canvas', "Roboto") . "' !important "
            ));
        }
    }

});

function mirele_endpoint_v1 () {
    \Mirele\Router::dispatch('/ajax_endpoint_v1');
}

add_action('wp_ajax_nopriv_mirele_endpoint_v1', 'mirele_endpoint_v1');
add_action('wp_ajax_mirele_endpoint_v1', 'mirele_endpoint_v1');

add_action ('init', function () {

    wp_register_script('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js');
    wp_register_script('vue', 'https://unpkg.com/vue@3.0.0-rc.9/dist/vue.global.prod.js');
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' );
    wp_register_script('axios', 'https://unpkg.com/axios/dist/axios.min.js' );
    wp_register_script('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'));
    wp_register_script('babel', 'https://unpkg.com/@babel/standalone/babel.min.js', array( 'jquery' ), '', false);
    wp_register_script('mireleapi', MIRELE_SOURCE_DIR . '/js/API.js', array('jquery'), '', false);
    wp_register_script('babelui', MIRELE_SOURCE_DIR . '/js/babel.js', array('babel', 'jquery'), '', false);

    wp_register_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
    wp_register_style('bootsrtap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
    wp_register_style('admin_dashboard', MIRELE_SOURCE_DIR . '/css/admin/admin.css', false);
    wp_register_style('main_style', MIRELE_SOURCE_DIR . '/css/style.css', false);

    wp_localize_script('mireleapi', 'MIRELE',
        [
            'urls' => [
                'ajax' => esc_url(admin_url('admin-ajax.php')),
                'rest' => esc_url(get_rest_url())
            ],
            'configs' => [
            ]
        ]
    );

    global $majax;
    global $mdata;
    global $mrouter;
    global $rosemary_ready_markup;
    global $rm;

    if (!$rosemary_ready_markup) {
        $rosemary_ready_markup['markup'] = $rm->markup();

        foreach ($rm->markup() as $_ => $page) {
            foreach (array_keys($page) as $__) {
                if (strpos($__, '@') !== false) {

                    if (!isset($rosemary_ready_markup['blocks'][explode("@", $__)[0]])) {
                        $rosemary_ready_markup['blocks'][explode("@", $__)[0]] = 0;
                    }

                    $rosemary_ready_markup['blocks'][explode("@", $__)[0]]++;
                }
            }
        }

    }

    rosemary_register_option('dynamic_shadow', 'choice', [

        array(
            'title' => 'Show',
            'value' => 'yes'
        ),

        array(
            'title' => 'Hide',
            'value' => 'no'
        )

    ], 'Drop dynamic shadow', 'The color of the dynamic shadow is formed from the "medium color" of the entire object');

    rosemary_register_option('dynamic_shadow_type', 'choice', [

        array (
            'title' => 'Shadow and border',
            'value' => 'shadow-and-border'
        ),

        array (
            'title' => 'Bottom shadow',
            'value' => 'filter-shadow-bottom'
        ),

        array (
            'title' => 'Shadow',
            'value' => 'shadow'
        ),

        array (
            'title' => 'Filter',
            'value' => 'filter'
        )

    ], 'Dynamic shadow type', false);

    rosemary_register_option('dynamic_shadow_timeout', 'choice', [

        array (
            'title' => '1 second',
            'value' => 1000
        ),

        array (
            'title' => '2 second',
            'value' => 2000
        ),

        array (
            'title' => '3 second',
            'value' => 3000
        ),

        array (
            'title' => '4 second',
            'value' => 4000
        ),

        array (
            'title' => '5 second',
            'value' => 5000
        ),


    ], 'Dynamic shadow timeout');

    rosemary_register_option('icon', 'choice', get_object(MIRELE_SOURCE_PATH . '/json/admin/font-awesome.json'), 'Icon');

    rosemary_register_option('animate', 'choice', array_merge((array) get_object(MIRELE_SOURCE_PATH . '/json/admin/animate.json'), array('none')), 'Animation');

    rosemary_register_option('color', 'color');

    rosemary_register_option('background_color', 'color', 'white', 'Background color');

    rosemary_register_option('url', 'hints', ['shop', 'home'], 'URL');

    rosemary_register_option('font', 'choice', get_object(MIRELE_SOURCE_PATH . '/json/admin/google-fonts.min.json'));

    rosemary_register_option('font_size', 'number', false, 'Font size');

    rosemary_register_option('font_size_em', 'float', 0.01, 'Font size (em)');

    rosemary_register_option('font_weight', 'choice', [
        'bold', 'bolder', 'lighter', 'normal', '100', '200', '300', '400', '500', '600', '700', '800', '900'
    ], 'Font weight');

    rosemary_register_option('font_color', 'Font color');

    rosemary_register_option('image', 'Image');

    /**
     * Register all WordPress settings
     */

    register_setting( 'mirele_wp_edit', 'mrl_wp_sidebar_width_1_active', '' );
    register_setting( 'mirele_wp_edit', 'mrl_wp_sidebar_width_2_active', '' );
    register_setting( 'mirele_wp_edit', 'mrl_wp_sidebar_hide_mobile', '' );
    register_setting( 'mirele_wp_edit', 'mrl_use_policy_adopted', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_preloader', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_preloader_enabled', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_header', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_header_enabled', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_sidebar', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_footer', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_footer_enabled', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_cookie_box', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_no_js_box', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_user_scalable', '');
    register_setting( 'mirele_wp_edit', 'mirele_bootstrap_main_type_width_main', '');
    register_setting( 'mirele_wp_edit', 'mirele_bootstrap_main_type_width_woo', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_js_disabled_warning', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_cookies_warning', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_seo_main_author', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_seo_main_keywords', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_seo_main_description', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_seo_woo_author', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_seo_woo_keywords', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_seo_woo_description', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_default_body_font', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_default_body_font_forced', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_default_body_font_canvas', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_default_body_font_canvas_forced', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_default_body_font_woo', '');
    register_setting( 'mirele_wp_edit', 'mrl_wp_default_body_font_woo_forced', '');

    register_setting( 'mirele_web_integrate_mc', 'mrltkn_mc', '');
    register_setting( 'mirele_web_integrate_hs', 'mrltkn_hs', '');
    register_setting( 'mirele_web_integrate_hs_data', 'mrli_hs_wc_deals', '');
    register_setting( 'mirele_web_integrate_hs_data', 'mrli_hs_wc_register_in_crm', '');
    register_setting( 'mirele_web_integrate_hs_data', 'mrli_hs_wc_deals_create_products', '');
    register_setting( 'mirele_web_integrate_hs_data', 'mrli_hs_cache', '');
    register_setting( 'mirele_web_integrate_hs_data', 'mrli_hs_ajax_table', '');
    register_setting( 'mirele_analysis', 'mirele_send_analysis', '');
    register_setting( 'mirele_analysis', 'mirele_allow_install_from_repo', '');
    register_setting( 'mirele_analysis', 'mirele_allow_check_updates', '');
    register_setting( 'mirele_analysis', 'mirele_forbid_updates', '');
    register_setting( 'mirele_analysis', 'mirele_core_use_defer_js', '');
    register_setting( 'mirele_analysis', 'mirele_core_use_async_js', '');
    register_setting( 'mirele_analysis', 'mirele_core_use_async_css', '');

    register_setting( 'mirele_site', 'mirele_robotstxt', '');

    register_setting( 'mirele_wp_spb', 'mrl_spb_shadows', '');
    register_setting( 'rosemary_core_edit', 'rce_use_plyr', '');

    register_setting('kristen', 'kristen_gallery_grid', '');

    register_setting('mirele_MPA', 'mrl_mpa', '');

    register_setting('mirele_gits', 'rosemary_gits', '');

    $mdata->js_set('woo_account_can_sort', get_option('woo_account_can_sort_on', 'true'));

    /**
     * Register router rules
     */

    $mrouter->register('mirele_canvas_header', 'css', get_template_directory_uri() . '/source/css/woo,main.css');
    $mrouter->register('mirele_canvas_header', 'css', get_template_directory_uri() . '/source/css/general.css');
    $mrouter->register('mirele_canvas_header', 'css', get_template_directory_uri() . '/source/css/main.css');

    $mrouter->register('site', 'css', get_template_directory_uri() . '/source/css/bootstrap.min.css');
    $mrouter->register('site', 'css', get_template_directory_uri() . '/source/css/aos.css');
    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/aos-dist.js');
    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/karlin-dist.js');
    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/jquery.min.js');
    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/jquery-ui-dist.js');
    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/jquery.mobile.min.js');
    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/jquery.lazyload-dist.js');

//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/color_recognition-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/bootstrap.min.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/font-awesome.min.js');
//
//    $mrouter->register('site', 'js', get_template_directory_uri() . '/source/js/page/inits-dist.js');
//
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/extensions-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/fastcart-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/kristen-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/lightbox-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/scroll-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/delayed_launch_loader-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/theme/video-presentation-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/theme/quickcart-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/theme/mailchimp-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/theme/hubspot-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/javascript-dist.js');
//    $mrouter->register('site-footer', 'js', get_template_directory_uri() . '/source/js/page/woocommerce/main-dist.js');

    $mrouter->register('wp-page', 'css', get_template_directory_uri() . '/source/css/elements.css');
    $mrouter->register('wp-page', 'css', get_template_directory_uri() . '/source/css/general.css');
    $mrouter->register('wp-page', 'css', get_template_directory_uri() . '/source/css/woo.css');

    $mdata->set('seo_author', get_bloginfo('name'));
    $mdata->set('seo_keywords', get_bloginfo('name'));
    if(function_exists('is_woocommerce') and is_woocommerce()) {
        $mdata->set('seo_description', 'woocommerce');
    } else {
        $mdata->set('seo_description', get_bloginfo('description'));
    }

});

add_action ('admin_menu', function () {

    global $majax;
    global $mpager;
    global $mrouter;
    global $msettings;
    global $mdata;

    (new RManager)->database_markup();

    wp_enqueue_style('admin_dashboard');
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_media();


    add_menu_page('MIRELE', 'Mirele Center', 'manage_options', 'mirele_center', function () {
        
    }, '', 1);
    add_menu_page('MIRELE', 'Mirele Apps', 'manage_options', 'mirele_apps', function () {
        
    }, 'dashicons-screenoptions', 2);
    add_menu_page('MIRELE', 'Rosemary Editor', 'manage_options', 'rosemary_render_editor', function () {
        
    }, 'dashicons-welcome-write-blog', 3);
    add_submenu_page('rosemary_render_editor', 'MIRELE', 'Demos', 'manage_options', 'rosemary_render_demos', function () {
        
    }, '', 2);

    add_action('admin_bar_menu', function ($wp_admin_bar) {
        $wp_admin_bar->add_node(array(
            'id'        => 'rpage',
            'title'     => 'Rosemary Page',
            'href'      => MIRELE_URL . '?page=rosemary_render_editor',
            'parent'    => 'new-content'
        ));
    });

    /**
     * Register WP theme settings
     */

    $msettings->register('theme_woocommerce', array(
        'General settings' => array(
            'woo_hide_page_title' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Hide the default WP title on the WooCommerce page'
        )
    ));

    $msettings->register('theme_main', array(
        'To enable scaling of the site' => array(
            'mrl_wp_user_scalable' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => "On a PC with CTRL pressed, you can zoom in on the site. <br>
                                On a smartphone, the site may increase due to a double tap. <br>
                                PS: on iPhone 5s, when choosing a product option, the site increases a little, which does
                                not look very good"
        ),
        'Type layout (Main)' => array(
            'mirele_bootstrap_main_type_width_main' => array(
                'type' => 'radio',
                'value' => [
                    [
                        'text' => 'Stretched',
                        'value' => 'stretched'
                    ],
                    [
                        'text' => 'Standart Bootstrap Size',
                        'value' => 'standart'
                    ]
                ],
                'text' => ''
            )
        ),
        'Type layout (WooCommerce)' => array(
            'mirele_bootstrap_main_type_width_woo' => array(
                'type' => 'radio',
                'value' => [
                    [
                        'text' => 'Stretched',
                        'value' => 'stretched'
                    ],
                    [
                        'text' => 'Standart Bootstrap Size',
                        'value' => 'standart'
                    ]
                ],
                'text' => ''
            )
        )
    ));

    $msettings->register('theme_seo', array(
        'Preview home page in Google' => array(
            'void' => array (
                'type' => 'function',
                'value' => function () {
                    ?>

                        <div style="max-width: 820px;">
                            <span class="google-toplink"><?php echo get_site_url(); ?></span>
                            <div>
                                <a href="#" class="google-link">
                                    <h3><?php echo !empty(get_the_title( get_option('page_on_front') )) ? get_the_title( get_option('page_on_front') ) : 'No title'?></h3>
                                </a>
                            </div>
                            <span class="google-description">
                                <?php

                                    global $mdata;
                                    echo mb_strimwidth(!empty(get_option('mrl_wp_seo_main_description', $mdata->get('seo_description'))) ? get_option('mrl_wp_seo_main_description', $mdata->get('seo_description')) : 'No description', 0, 300, ' ...');

                                ?>
                            </span>
                        </div>

                        <hr>

                    <?php
                }
            )
        ),
        'Edit Meta Main' => array(
            'mrl_wp_seo_main_author' => array(
                'type' => 'wp-textarea',
                'text' => 'SEO author meta data',
                'value' => get_option('mrl_wp_seo_main_author', $mdata->get('seo_author', get_bloginfo('name'))),
                'hints'=> ''
            ),
            'mrl_wp_seo_main_keywords' => array(
                'type' => 'wp-textarea',
                'text' => 'SEO keywords meta data',
                'value' => get_option('mrl_wp_seo_main_keywords', $mdata->get('seo_keywords', get_bloginfo('name')))
            ),
            'mrl_wp_seo_main_description' => array(
                'type' => 'wp-textarea',
                'text' => 'SEO description meta data',
                'value' => get_option('mrl_wp_seo_main_description', $mdata->get('seo_description', get_bloginfo('description')))
            )
        ),
        'Edit Meta WooCommerce' => array(
            'mrl_wp_seo_woo_author' => array(
                'type' => 'wp-textarea',
                'text' => 'SEO author meta data',
                'value' => get_option('mrl_wp_seo_woo_author', $mdata->get('seo_author', get_bloginfo('name')))
            ),
            'mrl_wp_seo_woo_keywords' => array(
                'type' => 'wp-textarea',
                'text' => 'SEO keywords meta data',
                'value' => get_option('mrl_wp_seo_woo_keywords', $mdata->get('seo_keywords', get_bloginfo('name')))
            ),
            'mrl_wp_seo_woo_description' => array(
                'type' => 'wp-textarea',
                'text' => 'SEO description meta data',
                'value' => get_option('mrl_wp_seo_woo_description', $mdata->get('seo_description', get_bloginfo('description')))
            )
        )
    ));

    $msettings->register('theme_placeholder', array(
        'Display on page' => array(
            'mrl_wp_preloader_enabled' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'default' => 'false'
            ),
            'service-note' => 'Show this component on the page'
        ),
        'Style' => array(
            'mrl_wp_preloader' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('preloader'),
                'option' => 'mrl_wp_preloader'
            )
        )
    ));

    $msettings->register('theme_sidebar', array(
        'Style' => array(
            'mrl_wp_sidebar' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('sidebar'),
                'option' => 'mrl_wp_sidebar'
            )
        ),
        'Enter the width of the sidebar when 1 sidebar active' => array(
            'mrl_wp_sidebar_width_1_active' => array(
                'type' => 'select',
                'value' => range(1, 12)
            )
        ),
        'Enter the width of the sidebar when 2 sidebar active' => array(
            'mrl_wp_sidebar_width_2_active' => array(
                'type' => 'select',
                'value' => range(1, 12)
            )
        ),
        'Sidebars Settings Options' => array(
            'mrl_wp_sidebar_hide_mobile' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' =>  'Hide sidebars on mobile smartphones'
        )
    ));

    $msettings->register('theme_navbar', array(
        'Display on page' => array(
            'mrl_wp_header_enabled' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'default' => 'true'
            ),
            'service-note' => 'Show this component on the page'
        ),
        'Style' => array(
            'mrl_wp_header' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('navbar'),
                'option' => 'mrl_wp_header'
            )
        )
    ));

    $msettings->register('theme_footer', array(
        'Display on page' => array(
            'mrl_wp_footer_enabled' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'default' => 'true'
            ),
            'service-note' => 'Show this component on the page'
        ),
        'Style' => array(
            'mrl_wp_footer' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('footer'),
                'option' => 'mrl_wp_footer'
            )
        )
    ));

    $msettings->register('theme_fonts', array(
        'Font for any page' => array(
            'mrl_wp_default_body_font' => array(
                'value' => get_object(MIRELE_SOURCE_PATH . '/json/admin/google-fonts.min.json'),
                'type' => 'select'
            ),
            'service-note' => 'Choose the font that you think is most suitable for your site. The font of your choice will be used as the default font.'
        ),
        'Force font for any page' => array (
            'mrl_wp_default_body_font_forced' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Forced to install this particular font, ignoring the standard fonts that were provided and installed by default. If you disable this item, then the font you select will be applied only to those objects that do not use the default font'
        ),
        'Font for WooCommerce page' => array(
            'mrl_wp_default_body_font_woo' => array(
                'value' => get_object(MIRELE_SOURCE_PATH . '/json/admin/google-fonts.min.json'),
                'type' => 'select'
            ),
            'service-note' => 'Choose the font that you think is most suitable for your site. The font of your choice will be used as the default font.'
        ),
        'Force font for WooCommerce page' => array (
            'mrl_wp_default_body_font_woo_forced' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Forced to install this particular font, ignoring the standard fonts that were provided and installed by default. If you disable this item, then the font you select will be applied only to those objects that do not use the default font'
        ),
        'Font for Rosemary Canvas' => array(
            'mrl_wp_default_body_font_canvas' => array(
                'value' => get_object(MIRELE_SOURCE_PATH . '/json/admin/google-fonts.min.json'),
                'type' => 'select'
            ),
            'service-note' => 'Choose the font that you think is most suitable for your site. The font of your choice will be used as the default font.'
        ),
        'Force font for Rosemary Canvas' => array (
            'mrl_wp_default_body_font_canvas_forced' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Forced to install this particular font, ignoring the standard fonts that were provided and installed by default. If you disable this item, then the font you select will be applied only to those objects that do not use the default font'
        )
    ));

    $msettings->register('theme_cookies_allow', array(
        'Display on page' => array(
            'mrl_wp_cookies_warning' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Show this component on the page'
        ),
        'Style' => array(
            'mrl_wp_cookie_box' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('cookie_box'),
                'option' => 'mrl_wp_cookie_box'
            ),
        ),
        'Title for box' => array(
            'mrl_wp_cookie_box_title' => array(
                'type' => 'wp-text',
                'value' => get_option('mrl_wp_cookie_box_text', "This website uses cookies."),
                'option' => 'mrl_wp_cookie_box_title'
            )
        ),
        'Text for box' => array(
            'mrl_wp_cookie_box_text' => array(
                'type' => 'wp-textarea',
                'value' => get_option('mrl_wp_cookie_box_text', "A cookie is a small text file that the website you are visiting stores on your computer. Cookies are used by a lot of websites to give visitors access to various functions. It is possible to use the information in the cookie to follow the user’s surfing.<br>
                                    To avoid cookies, you can change the security settings in your web browser. How these are adjusted depends on which web browser you have. <br>
                                    On this website we use cookies to enable you as a visitor to adapt the appearance of the website. <br>
                                    The majority are the so called “session cookies”. They will be automatically deleted after the visit on the website. Cookies do not cause any harm to your computer and do not contain viruses."),
                'option' => 'mrl_wp_cookie_box_text'
            )
        )
    ));

    $msettings->register('theme_no_js_box', array(
        'Display on page' => array(
            'mrl_wp_js_disabled_warning' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Show this component on the page'
        ),
        'Style' => array(
            'mrl_wp_no_js_box' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('no_js_box'),
                'option' => 'mrl_wp_no_js_box'
            )
        )
    ));

    $msettings->register('theme_woo_account', array(
        'Use an alternative version of the account page' => array(
            'woo_alternative_account' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Use AJAX for the registration form' => array(
            'woo_account_register_ajax_on' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Please note that this version of Mirele does not support form plugins for AJAX authorization forms. This means that all plugins that apply To woocommerce authorization forms will not work with AJAX enabled'
        ),
        'Use AJAX for the login form' => array(
            'woo_account_login_ajax_on' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Please note that this version of Mirele does not support form plugins for AJAX authorization forms. This means that all plugins that apply To woocommerce authorization forms will not work with AJAX enabled'
        ),
        'Use deferred loading' => array(
            'woo_account_delayed_launch_on' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'Sometimes the account page may load with artifacts. To hide loading problems, you can use deferred loading mode. The user will not feel any difference, and the site loading speed will not increase.'

        ),
        'Users сan move blocks in places in their personal account' => array(
            'woo_account_can_sort_on' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Show the "count" block (block # 2) on the account page' => array(
            'woo_alternative_account_show_counts' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'To enable plugin support' => array(
            'woo_alternative_account_plugins_on' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => 'All plugins that add their pages to your personal account will start working. Some plugins may not be well adapted to work with an alternative type of account page'
        )
    ));

    $msettings->register('theme_woo_fastcart', array(
        'Enable \'Fast Cart\'' => array(
            'woo_fastcart_enabled' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
            'service-note' => '\'Fast Cart\' is a small block that will be displayed to the user at the bottom of the site and it will contain a list of products that the user has put in the basket'
        ),
        'Hide title in \'Fast Cart\'' => array(
            'woo_fastcart_hide_title' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Title for  \'Fast Cart\'' => array(
            'woo_fastcart_title' => array(
                'type' => 'wp-text',
                'value' => get_option('woo_fastcart_title', 'Fast cart')
            ),
        )
    ));

    $msettings->register('theme_woo_quickcart', array(
        'Quick Card' => array(
            'woo_quickcart_enabled' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'default' => get_option('woo_quickcart_enabled', 'true')
            ),
            'service-note' => 'Quick-Cart view from menu item (header)'
        )
    ));

    $msettings->register('theme_woo_products', array(
        'The number of product columns in the list' => array(
            'woo_column' => array(
                'type' => 'radio',
                'value' => [
                    [
                        'text' => 'Auto (recommend)',
                        'value' => 'auto'
                    ],
                    '6',
                    '4',
                    '2'
                ],
                'default' => get_option('woo_column', 4)
            ),
            'service-note' => 'Products are placed on the product list page in the form of a table. Select the number of columns in this table.'
        ),
        'The number of product rows on one page' => array(
            'woo_markup_rows' => array(
                'type' => 'select',
                'value' => range(1, 8),
                'default' => get_option('woo_markup_rows', 5)
            ),
            'service-note' => 'Products are placed on the product list page in the form of a table. Select the number of rows in this table.'
        )
    ));

    $msettings->register('theme_woo_product', array(
        'Show "No comments" block when product don`t have comments' => array(
            'woo_enoji_without_comments' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Show block \'Related products\' on the product page' => array(
            'woo_show_related_products_in_single_product_page' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Logged in as \'...\' in the comment section of the product' => array(
            'woo_comment_show_block_login_as' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Include \'Modern\' picture' => array(
            'woo_product_modern_picture_offer' => array(
                'type' => 'checkbox',
                'value' => 'true'
            )
        )
    ));

    $msettings->register('theme_woo_cart', array(
        'Prompt the user to enter a coupon on the checkout page' => array(
            'woo_show_coupon_section_on_checkout_page' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'To display the total price in the table of cart' => array(
            'woo_price_results_in_table' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Show the \'Cart totals\' section on the cart page' => array(
            'woo_cart_show_totals_block' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Move the \'Continue\' button to the panel below the cart table in the cart page' => array(
            'woo_move_the_next_button_to_the_panel_below_the_table' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        )
    ));

    $msettings->register('theme_woo_product_loop', array(
        'Include \'Modern\' picture' => array(
            'woo_product_modern_picture' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Use lazy loader for modern picture' => array(
            'woo_product_lazy_loader' => array(
                'type' => 'checkbox',
                'value' => 'true'
            ),
        ),
        'Style' => array(
            'woo_product_card_theme' => array(
                'type' => 'mirele_theme_render',
                'value' => mirele_get_components_by_type_meta('woo_product_cart_loop'),
                'option' => 'woo_product_card_theme'
            )
        )
    ));

    $msettings->register('analysis', array(
        'Privacy' => array(
            'mirele_send_analysis' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'text' => 'Send anonymous usage statistics to Mirele servers only for debugging purposes',
                'note' => "We do not disclose, do not sell, do not personalize, do not use your data for spam",
                'default' => 'true'
            )
        ),
        'Core - Router' => array (
            'mirele_core_use_defer_js' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'text' => 'Use \'defer\' JavaScript loading',
                'default' => 'true'
            ),
            'mirele_core_use_async_js' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'text' => 'Use \'async\' JavaScript loading',
                'default' => 'false'
            ),
            'mirele_core_use_async_css' => array(
                'type' => 'checkbox',
                'value' => 'true',
                'text' => 'Use \'async\' CSS loading',
                'default' => 'false'
            ),
        )
    ));

});

wp_setups();
