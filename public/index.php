<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/site/wp-blog-header.php' );

/**
 * Startar upp Slim och Twig
 */
$app = new \Slim\Slim([
	'templates.path' => '../app/templates'
]);
$twig_loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/app/templates');
$template = new Twig_Environment($twig_loader);
$contentLoader = new ordbild\ContentLoader\ContentLoader;
require 'routes.php';
$app->run();