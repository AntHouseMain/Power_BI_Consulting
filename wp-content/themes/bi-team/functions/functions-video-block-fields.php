<?php function register_fields_some_pages()
{
    /**
     *
     */

    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'video_pages',
            'title' => 'Video',
            'fields' => array(
                array(
                    'key' => 'video_image',
                    'label' => __('Background Image', 'bi-team'),
                    'name' => 'video_image',
                    'required' => 0,
                    'type' => 'image',
                ),
                array(
                    'key' => 'page_video_mp4',
                    'label' => __('MP4 Video', 'bi-team'),
                    'name' => 'page_video_mp4',
                    'required' => 0,
                    'type' => 'file',
                    'return_format' => 'url',
                ),
                array(
                    'key' => 'page_video_webm',
                    'label' => __('Webm Video', 'bi-team'),
                    'name' => 'page_video_webm',
                    'required' => 0,
                    'type' => 'file',
                    'return_format' => 'url',
                ),
                array(
                    'key' => 'page_video_external_site',
                    'label' => __('External Video', 'bi-team'),
                    'name' => 'page_video_external_site',
                    'required' => 0,
                    'type' => 'oembed',
                    'width' => 800,
                    'height' => 600,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'front_page',
                    ),
                ),
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'templates/template-products.php',
                    ),
                ),
            ),
            'position' => 'side',
        ));

    endif;

}

add_action('init', 'register_fields_some_pages');