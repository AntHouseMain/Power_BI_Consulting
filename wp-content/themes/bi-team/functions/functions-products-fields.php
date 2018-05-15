<?php function register_fields_products()
{
    /**
     *
     */

    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'group_favorites',
            'title' => 'Show on front and products pages',
            'fields' => array(
                array(
                    'key' => 'field_is_highlighted',

                    'name' => 'is_highlighted',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'message' => __('Add to favorites products', 'bi-team'),
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'products',
                    ),
                ),
            ),
            'position' => 'side',
        ));

    endif;

}

add_action('init', 'register_fields_products');


function register_fields_products_add()
{
    /**
     *
     */


    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'additional_products_content',
            'title' => 'Additional content',
            'fields' => array(
                array(
                    'key' => 'products_tab',
                    'label' => __('Logo'),
                    'name' => 'products_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'products_logo',
                    'label' => 'Logo products',
                    'name' => 'products_logo',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                ),
                array(
                    'key' => 'products_tab_price',
                    'label' => __('Price'),
                    'name' => 'products_tab_price',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'products_price',
                    'label' => 'Products price',
                    'name' => 'products_price',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => 'products_list',
                    'label' => 'Products list',
                    'name' => 'products_list',
                    'type' => 'wysiwyg',
                    'required' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'products',
                    ),
                ),
            ),

        ));

    endif;

}

add_action('init', 'register_fields_products_add');