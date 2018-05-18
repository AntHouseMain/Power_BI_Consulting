<?php function register_fields_products_template()
{
    /**
     *
     */

    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'products_template',
            'title' => 'Content',
            'fields' => array(
                array(
                    'key' => 'header_content_tab',
                    'label' => __('Header', 'bi-team'),
                    'name' => 'header_content_tab',
                    'type' => 'tab',
                ),
                
                array(
                    'key' => 'products_connect',
                    'label' => __('Connect', 'bi-team'),
                    'name' => 'products_connect',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'connect_title',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'connect_title',
                    'required' => 0,
                    'type' => 'text',
                ),
                array(
                    'key' => 'connect_content',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'connect_content',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'two_logo',
                    'label' => __('Logo Section', 'bi-team'),
                    'name' => 'two_logo',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'two_logo_repeater',
                    'label' => __('Customers Section', 'bi-team'),
                    'name' => 'two_logo_repeater',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'two_logo_image',
                            'label' => __('Logo', 'bi-team'),
                            'name' => 'two_logo_image',
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'two_logo_content',
                            'label' => __('Text content', 'bi-team'),
                            'name' => 'two_logo_content',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'two_logo_title',
                            'label' => __('Title', 'bi-team'),
                            'name' => 'two_logo_title',
                            'type' => 'text',

                        ),
                    ),
                ),
                array(
                    'key' => 'connect_title',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'connect_title',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'templates/template-products.php',
                    ),
                ),
            ),


        ));

    endif;

}

add_action('init', 'register_fields_products_template');