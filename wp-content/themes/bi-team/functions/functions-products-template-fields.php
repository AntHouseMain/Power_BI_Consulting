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
                    'key' => 'header_content_image',
                    'label' => __('Background Image', 'bi-team'),
                    'name' => 'header_content_image',
                    'required' => 0,
                    'type' => 'image',
                ),
                array(
                    'key' => 'header_content_logo',
                    'label' => __('Logo Image', 'bi-team'),
                    'name' => 'header_content_logo',
                    'required' => 0,
                    'type' => 'image',
                ),
                array(
                    'key' => 'header_content_title',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'header_content_title',
                    'required' => 0,
                    'type' => 'text',
                ),
                array(
                    'key' => 'header_content_content',
                    'label' => __('Content', 'bi-team'),
                    'name' => 'header_content_content',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'header_content_link_download',
                    'label' => __('Download Link', 'bi-team'),
                    'name' => 'header_content_link_download',
                    'required' => 0,
                    'type' => 'url',
                ),
                array(
                    'key' => 'header_content_buy_link',
                    'label' => __('Buy Link', 'bi-team'),
                    'name' => 'header_content_link_buy',
                    'required' => 0,
                    'type' => 'url',
                ),
                ///
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
                ///
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
                    'key' => 'content_two_logo',
                    'label' => __('Content', 'bi-team'),
                    'name' => 'content_two_logo',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
                ///
                array(
                    'key' => 'product_multi_row',
                    'label' => __('Multirow', 'bi-team'),
                    'name' => 'product_multi_row',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'product_multi_row_repeater',
                    'label' => __('Multirow Section', 'bi-team'),
                    'name' => 'product_multi_row_repeater',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'product_multi_row_image',
                            'label' => __('Image', 'bi-team'),
                            'name' => 'two_logo_image',
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'product_multi_row_title',
                            'label' => __('Title', 'bi-team'),
                            'name' => 'two_logo_title',
                            'type' => 'text',

                        ),
                        array(
                            'key' => 'product_multi_row_content',
                            'label' => __('Text content', 'bi-team'),
                            'name' => 'two_logo_content',
                            'type' => 'wysiwyg',
                        ),
                    ),
                ),

                ///

                array(
                    'key' => 'section_reports_tab',
                    'label' => __('Reports', 'bi-team'),
                    'name' => 'section_reports_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'section_reports_image',
                    'label' => __('Image', 'bi-team'),
                    'name' => 'section_reports_image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'section_reports_title',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'section_reports_title',
                    'required' => 0,
                    'type' => 'text',
                ),
                array(
                    'key' => 'section_reports_content',
                    'label' => __('Content', 'bi-team'),
                    'name' => 'section_reports_content',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'section_reports_link_download',
                    'label' => __('Download Link', 'bi-team'),
                    'name' => 'section_reports_link_download',
                    'required' => 0,
                    'type' => 'url',
                ),
                array(
                    'key' => 'section_reports_buy_link',
                    'label' => __('Buy Link', 'bi-team'),
                    'name' => 'section_reports_buy_link',
                    'required' => 0,
                    'type' => 'url',
                ),

                ///

                array(
                    'key' => 'section_list_tab',
                    'label' => __('List', 'bi-team'),
                    'name' => 'section_list_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'list_section_title',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'list_section_title',
                    'required' => 0,
                    'type' => 'text',
                ),
                array(
                    'key' => 'list_section_content',
                    'label' => __('Content', 'bi-team'),
                    'name' => 'list_section_content',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
                ///

                array(
                    'key' => 'section_what',
                    'label' => __('What`s new?', 'bi-team'),
                    'name' => 'section_what',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'section_what_title',
                    'label' => __('Title', 'bi-team'),
                    'name' => 'section_what_title',
                    'required' => 0,
                    'type' => 'text',
                ),
                array(
                    'key' => 'section_what_content',
                    'label' => __('Content', 'bi-team'),
                    'name' => 'section_what_content',
                    'required' => 0,
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'section_what_link',
                    'label' => __('Link', 'bi-team'),
                    'name' => 'section_what_link',
                    'required' => 0,
                    'type' => 'url',
                ),

                ///

                array(
                    'key' => 'accordion_tab',
                    'label' => __('Accordion section', 'bi-team'),
                    'name' => 'accordion_tab',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'accordion_title_section',
                    'label' => __('Image', 'bi-team'),
                    'name' => 'accordion_title_section',
                    'type' => 'image',
                ),
                array(
                    'key' => 'accordion_image',
                    'label' => __('Image', 'bi-team'),
                    'name' => 'accordion_image',
                    'type' => 'image',
                ),

                array(
                    'key' => 'accordion_repeater',
                    'label' => __('', 'bi-team'),
                    'name' => 'accordion_repeater',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(

                        array(
                            'key' => 'accordion_title',
                            'label' => __('Accordion Title', 'bi-team'),
                            'name' => 'accordion_title',
                            'type' => 'text',

                        ),
                        array(
                            'key' => 'accordion_content',
                            'label' => __('Accordion Content', 'bi-team'),
                            'name' => 'accordion_content',
                            'type' => 'wysiwyg',
                        ),
                    ),
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