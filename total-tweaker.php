<?php
/*
Plugin Name:    Total Theme Tweaker
Plugin URI:     http://www.wpexplorer.com
Description:    Example plugin for tweaking the Total WordPress theme via hooks and filters instead of using a Child theme.
Version:        1.0.0
Author:         WPExplorer
Author URI:     http://www.wpexplorer.com
License:        GPLv2
*/


/**
 * Main Class
 *
 * Create a class that holds all your tweaks for the Total WordPress theme
 *
 * This is just a generic example for WordPress beginners to help them get started
 * Child themes are generally better and easier to manage but if for some reason you don't want
 * to use a child theme it's better to use a plugin to tweak the theme, then to tweak it manually
 * because whenever you tweak a theme manually you will lose your edits when you update the theme.
 *
 * Also using a class isn't necessary, but I think it keeps things much cleaner and easier to read.
 *
 * @since 1.0.0
 */
class Total_Theme_Tweaker {

    /**
     * Constructor
     *
     * This should include all your add_action and add_filter functions
     * I have added a simple example below, you will probably want to remove it.
     *
     * @since 1.6.0
     */
    public function __construct() {

        // Disabled the main page header title from all WooCommerce pages
        add_filter( 'wpex_display_page_header', array( $this, 'disable_woocommerce_page_header' ) );


    }

    /**
     * Example function
     *
     * This is just an example function showing how to make a small tweak to the theme
     * this is taken right from the documentation page (see link below) but modified to work
     * within a class instead of a functions.php file.
     *
     * @link    http://wpexplorer-themes.com/total/docs/disabling-page-title/
     * @since   1.6.0
     */
    public function disable_woocommerce_page_header( $return ) {

        // Check if the is_woocommerce conditional exists and it returns true
        if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {

            // If so, disable the title by returning false for this filter
            return false;

        }

        // Otherwise lets return the theme's value
        else {
            return $return;
        }

    } // END disable_woocommerce_page_header()

}
new Total_Theme_Tweaker;