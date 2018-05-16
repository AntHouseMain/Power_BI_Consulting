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
                    'key' => '  occupations_tab',
                    'label' => __('Occupations Section', 'bi-team'),
                    'name' => 'occupations_tab',
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
                array(
                    'key' => 'occupation_tab',
                    'label' => __('Customers', 'bi-team'),
                    'name' => 'occupation_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'occupation_repeater',
                    'label' => __('Customers Section', 'bi-team'),
                    'name' => 'occupation_repeater',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'max' => '0',
                    'sub_fields' => array(
                        array(
                            'key' => 'occupation_repeater_image',
                            'label' => __('Image', 'bi-team'),
                            'name' => 'occupation_repeater_image',
                            'required' => 1,
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'occupation_repeater_text',
                            'label' => __('Title', 'bi-team'),
                            'name' => 'occupation_repeater_text',
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