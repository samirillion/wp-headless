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
