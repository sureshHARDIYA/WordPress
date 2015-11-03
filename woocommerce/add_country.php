<?php

/*
 Add New Country to Woocommerce Country List 
 Just place this code in funcitons.php file or the plugin file.
 Here, say, Nepal does not exist in the countries list and want to add it. 
 */
function woo_add_my_country( $country ) {
   $country["NP"] = 'NEPAL';
   return $country;
}
add_filter( 'woocommerce_countries', 'woo_add_my_country', 10, 1 );
