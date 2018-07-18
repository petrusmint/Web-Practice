<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


add_filter('get_search_form', function(){  
  $form = "";
  include_once(get_template_directory()."/views/partials/searchform.blade.php"); 
  return $form;
});

function wpdocs_special_nav_class( $args, $item, $depth ) {
    if ( !is_front_page() ) {
        $arr = array("home", "blog", "gallery");
        $check = false;
        //print_r($item);
        foreach( $arr as $str ):
            if( strpos( strtolower($item->title), $str ) > 1 ){
                $check = true;
            }
        endforeach;
        if( $check == false ) {
            $item->url = get_home_url() . '/' . $item->url;
        }
    } 
}
add_filter( 'nav_menu_item_args' , __NAMESPACE__ . '\\wpdocs_special_nav_class' , 10, 3 ); 

/*CAPTCHA - Admin Side*/
function no_captcha_recaptcha_menu() {
    add_menu_page("reCapatcha Options", "reCaptcha Options", "manage_options", "recaptcha-options", "recaptcha_options_page", "", 100);
}

function recaptcha_options_page() { ?>
    <div class="wrap">
        <h1>reCaptcha Options</h1>
        <form method="post" action="options.php">
        <?php settings_fields("header_section");
            do_settings_sections("recaptcha-options");
            submit_button(); ?>          
        </form>
    </div>
<?php }
add_action("admin_menu", "no_captcha_recaptcha_menu");

function display_recaptcha_options() {
    add_settings_section("header_section", "Keys", "display_recaptcha_content", "recaptcha-options");

    add_settings_field("captcha_site_key", __("Site Key"), "display_captcha_site_key_element", "recaptcha-options", "header_section");
    add_settings_field("captcha_secret_key", __("Secret Key"), "display_captcha_secret_key_element", "recaptcha-options", "header_section");

    register_setting("header_section", "captcha_site_key");
    register_setting("header_section", "captcha_secret_key");
}

function display_recaptcha_content() {
    echo __('<p>You need to <a href="https://www.google.com/recaptcha/admin" rel="external">register you domain</a> and get keys to make this plugin work.</p>');
    echo __("Enter the key details below");
}

function display_captcha_site_key_element() { ?>
    <input type="text" name="captcha_site_key" id="captcha_site_key" value="<?php echo get_option('captcha_site_key'); ?>" />
<?php }

function display_captcha_secret_key_element() { ?>
    <input type="text" name="captcha_secret_key" id="captcha_secret_key" value="<?php echo get_option('captcha_secret_key'); ?>" />
<?php }
add_action("admin_init", "display_recaptcha_options");


/*CAPTCHA - Comment Forms*/
function frontend_recaptcha_script() {
    /*wp_register_script("recaptcha", "https://www.google.com/recaptcha/api.js");
    wp_enqueue_script("recaptcha");*/
    
    $plugin_url = plugin_dir_url(__FILE__);
    wp_enqueue_style("no-captcha-recaptcha", $plugin_url ."style.css");
}
add_action("wp_enqueue_scripts", "frontend_recaptcha_script");

function display_comment_recaptcha() { ?>
    <div class="g-recaptcha" data-sitekey="<?php echo get_option('captcha_site_key'); ?>"></div>
    <input name="submit" type="submit" class="post-comment" value="Post Comment">
<?php }
add_action("comment_form", "display_comment_recaptcha");

function verify_comment_captcha($commentdata) {
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha_secret = get_option('captcha_secret_key');
        $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);
        $response = json_decode($response["body"], true);
        if (true == $response["success"]) {
            return $commentdata;
        } else {
            echo __("Bots are not allowed to submit comments.");
            return null;
        }
    } else {
        echo __("Bots are not allowed to submit comments. If you are not a bot then please enable JavaScript in browser.");
        return null;
    }
}
add_filter("preprocess_comment", "verify_comment_captcha");