<?php
/*
Plugin Name: Mesmo endereço de cobrança e entrega
Description: Retira a opção de endereço de pagamento diferente do endereço de entrega no woocommerce.
Author: Diogo Bratti
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' ); 