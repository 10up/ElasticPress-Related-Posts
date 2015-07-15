<?php
/**
 * Plugin Name: ElasticPress Related Posts
 * Description: Retrieve related posts from Elasticsearch.
 * Version:     0.0.1
 * Author:      10up
 * Author URI:  http://10up.com
 * License:     GPLv2 or later
 *
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

require_once( 'classes/class-ep-related-posts.php' );