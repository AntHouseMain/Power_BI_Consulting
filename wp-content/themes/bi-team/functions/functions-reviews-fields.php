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