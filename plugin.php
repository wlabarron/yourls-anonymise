<?php
/*
  Plugin Name: Anonymise
  Plugin URI: https://github.com/wlabarron/yourls-anonymise
  Description: Anonymise the IP address and user agent in YOURLS logs. User's country of origin is now also not recorded, since it's based on IP.
  Version: 1.0
  Author: wlabarron
  Author URI: https://github.com/wlabarron/
*/

yourls_add_filter( 'get_IP', 'wlabarron_anonymise_IP' );
yourls_add_filter( 'get_user_agent', 'wlabarron_anonymise_user_agent' );
yourls_add_filter( 'get_referrer', 'wlabarron_anonymise_referrer' );
yourls_add_filter( 'shunt_geo_ip_to_countrycode', 'wlabarron_shunt_country' );

function wlabarron_anonymise_IP( $ip ) {
    return "";
}

function wlabarron_anonymise_user_agent( $ua ) {
    return "-";
}

function wlabarron_anonymise_referrer( $referrer ) {
    return "-";
}
  
function wlabarron_shunt_country( $location = false, $ip = '', $default = '' ) {
    return "";
}

?>
