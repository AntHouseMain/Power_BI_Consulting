<?php

function blog_url()
{
    $posts = \get_pages([
        'meta_key' => '_wp_page_template',
        'meta_value' => 'archive-news.php',
        'posts_per_page' => 1,
    ]);
    return (isset($posts[0])) ? \get_permalink($posts[0]) : \network_site_url('news/');
}

function portfolio_url()
{
    $posts = \get_pages([
        'meta_key' => '_wp_page_template',
        'meta_value' => 'archive-portfolio-off.php',
        'posts_per_page' => 1,
    ]);
    return (isset($posts[0])) ? \get_permalink($posts[0]) : \network_site_url('portfolio/');
}


function products_url()
{
    $posts = \get_pages([
        'meta_key' => '_wp_page_template',
        'meta_value' => 'archive-products.php',
        'posts_per_page' => 1,
    ]);
    return (isset($posts[0])) ? \get_permalink($posts[0]) : \network_site_url('products/');
}


function reviews_url()
{
    $posts = \get_pages([
        'meta_key' => '_wp_page_template',
        'meta_value' => 'archive-reviews.php',
        'posts_per_page' => 1,
    ]);
    return (isset($posts[0])) ? \get_permalink($posts[0]) : \network_site_url('reviews/');
}
