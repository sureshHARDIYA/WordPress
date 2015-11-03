<?php

/*
 Add New Country to Woocommerce Country List 
 Just place this code in funcitons.php file or the plugin file. 
 */
function woo_add_my_country( $country ) {
   $country["AE-DU"] = 'Dubai';
   return $country;
}
add_filter( 'woocommerce_countries', 'woo_add_my_country', 10, 1 );