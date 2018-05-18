<?php function register_fields_front_page()
{
    /**
     *
     */

    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'front_page_fields',
            'title' => 'Content Front Page',
            'fields' => array(
                array(
                    'key' => 'header_slider_tab',
                    'label' => __('Main Slider', 'bi-team'),
                    'name' => 'header_slider_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'header_slider_repeater',
                    'label' => __('Main Slider', 'bi-team'),
                    'name' => 'header_slider_repeater',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'header_slider_image',
                            'label' => __('Image', 'bi-team'),
                            'name' => 'header_slider_image',
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'header_slider_title',
                            'label' => __('Slider Title', 'bi-team'),
                            'name' => 'header_slider_title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'header_slider_content',
                            'label' => __('Slider content', 'bi-team'),
                            'name' => 'header_slider_content',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'header_slider_link',
                            'label' => __('Button Link', 'bi-team'),
                            'name' => 'header_slider_link',
                            'type' => 'url',
                        ),
                    ),
                ),
                array(
                    'key' => 'occupation_tab',
                    'label' => __('Occupation', 'bi-team'),
                    'name' => 'occupation_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'occupation_repeater',
                    'label' => __('Customers Section', 'bi-team'),
                    'name' => 'occupation_repeater',
                    'type' => 'repeater',
                    'instructions' => 'max 3 items',
                    'layout' => 'block',
                    'max' => '3',
                    'sub_fields' => array(
                        array(
                            'key' => 'occupation_repeater_image',
                            'label' => __('Image', 'bi-team'),
                            'name' => 'occupation_repeater_image',
                            'required' => 1,
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'occupation_repeater_title',
                            'label' => __('Title', 'bi-team'),
                            'name' => 'occupation_repeater_title',
                            'type' => 'text',
                            'required' => 1,
                        ),
                        array(
                            'key' => 'occupation_repeater_content',
                            'label' => __('Text content', 'bi-team'),
                            'name' => 'occupation_repeater_content',
                            'type' => 'wysiwyg',
                            'required' => 1,
                        ),
                    ),
                ),
                array(
                    'key' => 'our_different_tab',
                    'label' => __(' Our different', 'bi-team'),
                    'name' => 'our_different_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'our_different_content',
                    'label' => __('Content', 'bi-team'),
                    'name' => 'our_different_content',
                    'type' => 'wysiwyg',
                    'required' => 0,
                ),
                array(
                    'key' => 'our_different_link',
                    'label' => __('Button Link', 'bi-team'),
                    'name' => 'our_different_link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'customers_tab',
                    'label' => __('Customers Section', 'bi-team'),
                    'name' => 'customers_tab',
                    'type' => 'tab',
                ),

                array(
                    'key' => 'customers_repeater',
                    'label' => __('Customers Section', 'bi-team'),
                    'name' => 'customers_repeater',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'max' => '0',
                    'sub_fields' => array(
                        array(
                            'key' => 'customers_repeater_image',
                            'label' => __('Logo', 'bi-team'),
                            'name' => 'customers_repeater_image',
                            'required' => 1,
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'customers_repeater_link',
                            'label' => __('Link', 'bi-team'),
                            'name' => 'customers_repeater_link',
                            'type' => 'url',
                        ),
                    ),
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
            ),
            'hide_on_screen' => array(
                0 => 'the_content',
            ),
        ));

    endif;

}

add_action('init', 'register_fields_front_page');