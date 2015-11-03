<?php

add_filter('woocommerce_currency_symbol', 'sasweb_change_existing_currency_symbol', 10, 2);

/*
 Change currency symbol in Woocommerce
 */
function sasweb_change_existing_currency_symbol( $currency_symbol, $currency ) {
  switch( $currency ) {
    case 'AUD': $currency_symbol = 'AUD$'; break;
  }
  return $currency_symbol;
}