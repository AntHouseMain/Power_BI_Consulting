<?php

function register_fields_reviews()
{
    /**
     *
     */


    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'additional_reviews_content',
            'title' => 'Additional content',
            'fields' => array(
                array(
                    'key' => 'field_is_highlighted_review',
                    'name' => 'field_is_highlighted_review',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'message' => __('Show feedback on home page ?', 'bi-team'),
                ),
                array(
                    'key' => 'reviews_position',
                    'label' => 'Person position ',
                    'name' => 'reviews_position',
                    'type' => 'text',
                    'required' => 0,
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'reviews',
                    ),
                ),
            ),

        ));

    endif;

}

add_action('init', 'register_fields_reviews');