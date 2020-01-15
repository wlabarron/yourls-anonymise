<?php
/*
  Plugin Name: Anonymise
  Plugin URI: https://github.com/wlabarron/yourls-anonymise
  Description: Anonymise the IP address and user agent in YOURLS logs.
  Version: 1.0
  Author: wlabarron
  Author URI:
*/

yourls_add_filter( 'get_IP', 'wlabarron_anonymise_IP' );
yourls_add_filter( 'get_user_agent', 'wlabarron_anonymise_user_agent' );

function wlabarron_anonymise_IP( $ip ) {
    return "-";
}

function wlabarron_anonymise_user_agent( $ua ) {
    return "-";
}

?>
