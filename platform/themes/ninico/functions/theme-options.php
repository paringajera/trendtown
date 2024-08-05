<?php

app()->booted(function () {
    theme_option()
        ->setSection([
            'title' => __('Styles'),
            'id' => 'opt-text-subsection-styles',
            'subsection' => true,
            'icon' => 'ti ti-palette',
            'fields' => [
                [
                    'id' => 'primary_font',
                    'type' => 'googleFonts',
                    'label' => __('Primary font'),
                    'attributes' => [
                        'name' => 'primary_font',
                        'value' => 'Jost',
                    ],
                ],
                [
                    'id' => 'primary_color',
                    'type' => 'customColor',
                    'label' => __('Primary color'),
                    'attributes' => [
                        'name' => 'primary_color',
                        'value' => '#d51243',
                    ],
                ],
                [
                    'id' => 'header_style',
                    'type' => 'customSelect',
                    'label' => __('Header style'),
                    'attributes' => [
                        'name' => 'header_style',
                        'list' => [
                            'default' => __('Default'),
                            'centered-logo' => __('Centered logo'),
                            'collapsed' => __('Collapsed'),
                        ],
                        'value' => 'default',
                        'options' => [
                            'class' => 'form-control',
                        ],
                    ],
                ],
                [
                    'id' => 'collapsing_product_categories_on_homepage',
                    'type' => 'customSelect',
                    'label' => 'Collapsing product categories on homepage?',
                    'attributes' => [
                        'name' => 'collapsing_product_categories_on_homepage',
                        'list' => [
                            'yes' => trans('core/base::base.yes'),
                            'no' => trans('core/base::base.no'),
                        ],
                        'value' => 'no',
                        'options' => [
                            'class' => 'form-control',
                        ],
                    ],
                ],
                [
                    'id' => 'footer_background_color',
                    'type' => 'customColor',
                    'label' => __('Footer background color'),
                    'attributes' => [
                        'name' => 'footer_background_color',
                        'value' => '#F8F8F8',
                    ],
                ],
                [
                    'id' => 'footer_text_color',
                    'type' => 'customColor',
                    'label' => __('Footer text color'),
                    'attributes' => [
                        'name' => 'footer_text_color',
                        'value' => '#000000',
                    ],
                ],
                [
                    'id' => 'footer_text_muted_color',
                    'type' => 'customColor',
                    'label' => __('Footer text muted color'),
                    'attributes' => [
                        'name' => 'footer_text_muted_color',
                        'value' => '#686666',
                    ],
                ],
                [
                    'id' => 'footer_border_color',
                    'type' => 'customColor',
                    'label' => __('Footer border color'),
                    'attributes' => [
                        'name' => 'footer_border_color',
                        'value' => '#E0E0E0',
                    ],
                ],
                [
                    'id' => 'footer_bottom_background_color',
                    'type' => 'customColor',
                    'label' => __('Footer bottom background color'),
                    'attributes' => [
                        'name' => 'footer_bottom_background_color',
                        'value' => '#ededed',
                    ],
                ],
            ],
        ])
        ->setField([
            'id' => 'sticky_header_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customSelect',
            'label' => __('Enable sticky header?'),
            'attributes' => [
                'name' => 'sticky_header_enabled',
                'list' => [
                    'yes' => __('Yes'),
                    'no' => __('No'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'sticky_header_mobile_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customSelect',
            'label' => __('Enable sticky header on mobile?'),
            'attributes' => [
                'name' => 'sticky_header_mobile_enabled',
                'list' => [
                    'yes' => __('Yes'),
                    'no' => __('No'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'bottom_mobile_menu_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customSelect',
            'label' => __('Enable bottom menu on mobile?'),
            'attributes' => [
                'name' => 'bottom_mobile_menu_enabled',
                'list' => [
                    'yes' => __('Yes'),
                    'no' => __('No'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'bottom_mobile_menu_show_label',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'customSelect',
            'label' => __('Show label for bottom menu item on mobile?'),
            'attributes' => [
                'name' => 'bottom_mobile_menu_show_label',
                'list' => [
                    'yes' => __('Yes'),
                    'no' => __('No'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'hotline',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'text',
            'label' => __('Hotline'),
            'attributes' => [
                'name' => 'hotline',
                'value' => '908. 408. 501. 89',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setSection([
            'title' => __('Social Links'),
            'desc' => __('Social Links at the footer.'),
            'id' => 'opt-text-subsection-social-links',
            'subsection' => true,
            'icon' => 'ti ti-social',
            'fields' => [
                [
                    'id' => 'social_links',
                    'type' => 'repeater',
                    'label' => __('Social Links'),
                    'attributes' => [
                        'name' => 'social_links',
                        'value' => null,
                        'fields' => [
                            [
                                'type' => 'text',
                                'label' => __('Name'),
                                'attributes' => [
                                    'name' => 'name',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'themeIcon',
                                'label' => __('Icon'),
                                'attributes' => [
                                    'name' => 'icon',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                            [
                                'type' => 'text',
                                'label' => __('URL'),
                                'attributes' => [
                                    'name' => 'url',
                                    'value' => null,
                                    'options' => [
                                        'class' => 'form-control',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ])
        ->setField([
            'id' => 'cart_footer_description',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'text',
            'label' => __('Cart footer description'),
            'attributes' => [
                'name' => 'cart_footer_description',
                'value' => 12,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'display_product_categories_select_on_header',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'customSelect',
            'label' => __('Display product categories select on header?'),
            'attributes' => [
                'name' => 'display_product_categories_select_on_header',
                'list' => [
                    'yes' => __('Yes'),
                    'no' => __('No'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'display_product_categories_on_mobile_menu',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'customSelect',
            'label' => __('Display product categories on mobile menu?'),
            'attributes' => [
                'name' => 'display_product_categories_on_mobile_menu',
                'list' => [
                    'yes' => __('Yes'),
                    'no' => __('No'),
                ],
                'value' => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'ecommerce_product_gallery_image_style',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'customSelect',
            'label' => __('Product gallery image style?'),
            'attributes' => [
                'name' => 'ecommerce_product_gallery_image_style',
                'list' => [
                    'vertical' => __('Vertical'),
                    'horizontal' => __('Horizontal'),
                ],
                'value' => 'vertical',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'section_id' => 'opt-text-subsection-breadcrumb',
            'id' => 'breadcrumb_background_color',
            'type' => 'customColor',
            'label' => __('Breadcrumb background color'),
            'attributes' => [
                'name' => 'breadcrumb_background_color',
                'value' => '#F8F8F8',
            ],
        ])
        ->setField([
            'id' => 'breadcrumb_background',
            'section_id' => 'opt-text-subsection-breadcrumb',
            'type' => 'mediaImage',
            'label' => __('Breadcrumb background'),
            'attributes' => [
                'name' => 'breadcrumb_background',
            ],
        ])
        ->setField([
            'id' => '404_not_found_icon',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'mediaImage',
            'label' => __('404 Not found icon'),
            'attributes' => [
                'name' => '404_not_found_icon',
            ],
        ])
        ->setField([
            'id' => 'order_tracking_background',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'mediaImage',
            'label' => __('Order tracking background'),
            'attributes' => [
                'name' => 'order_tracking_background',
            ],
        ])
        ->setField([
            'id' => 'default_product_list_layout',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'customSelect',
            'label' => __('Default product items layout'),
            'attributes' => [
                'name' => 'default_product_list_layout',
                'list' => [
                    'list' => __('List'),
                    'grid' => __('Grid'),
                ],
            ],
        ])
        ->setField([
            'id' => 'ecommerce_products_page_layout',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'customSelect',
            'label' => __('Products listing page layout'),
            'attributes' => [
                'name' => 'ecommerce_products_page_layout',
                'list' => [
                    'left_sidebar' => __('Left sidebar'),
                    'right_sidebar' => __('Right sidebar'),
                ],
            ],
        ])
        ->setField([
            'id' => 'ecommerce_header_categories_limit',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'text',
            'label' => __('Header sidebar categories limit'),
            'attributes' => [
                'name' => 'ecommerce_header_categories_limit',
                'value' => 10,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id' => 'logo_light',
            'section_id' => 'opt-text-subsection-logo',
            'type' => 'mediaImage',
            'label' => __('Logo light'),
            'attributes' => [
                'name' => 'logo_light',
                'value' => null,
            ],
        ])
        ->setField([
            'id' => 'logo_height',
            'section_id' => 'opt-text-subsection-logo',
            'type' => 'number',
            'label' => __('Logo height (px)'),
            'attributes' => [
                'name' => 'logo_height',
                'value' => 35,
                'options' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 150,
                ],
            ],
            'helper' => __('Set the height of the logo in pixels. The default value is 35px.'),
        ]);
});
