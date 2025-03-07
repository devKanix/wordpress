<?php
/**
 * The header for the Twenty Twenty-One theme
 *
 * This is the template that displays all of the <head> section and everything up until <main>.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>

<header id="masthead" class="site-header">
    <nav>
        <div>
            <p><a href="<?php echo esc_url(home_url('/')); ?>">Kanishk-Chaudhary</a></p>
        </div>
        <div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu', // This must match the location registered in functions.php
                'menu_class' => 'nav-menu', // CSS class for styling
                'container' => 'ul', // Wraps the menu in <ul>
                'fallback_cb' => false // No fallback, prevents default pages from showing if menu is not set
            ));
            ?>
        </div>
    </nav>
</header>
