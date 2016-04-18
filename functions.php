<?php

function theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'primary navigation');

}

add_action('init', 'theme_setup');