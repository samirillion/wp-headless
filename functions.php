<?php
include('custom-post-types/team.php');

include('custom-post-types/products.php');

add_theme_support('post-thumbnails');

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// add_filter( 'acf/rest_api/member/get_fields', function( $data, $request, $response ) {
//     // if ( $response instanceof WP_REST_Response ) {
//     //     $data = $response->get_data();
//     // }

//     // if( isset( $data['acf'] ) ) {
//     //     $data['acf']['favorite_glove'] = "cool";
//     // }
//   error_log($data);

//     return $data;
// }, 10, 3 );
