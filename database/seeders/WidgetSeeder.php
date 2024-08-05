<?php

namespace Database\Seeders;

use Botble\Widget\Database\Traits\HasWidgetSeeder;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WidgetSeeder extends Seeder
{
    use HasWidgetSeeder;

    public function run(): void
    {
        $widgets = [
            [
                'widget_id' => 'SiteInfoWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 0,
                'data' => [
                    'description' => 'Elegant pink origami design three dimensional view and decoration co-exist. Great for adding a decorative touch to any room’s decor.',
                    'logo' => null,
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 1,
                'data' => [
                    'name' => 'Information',
                    'menu_id' => 'information',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 2,
                'data' => [
                    'name' => 'My Account',
                    'menu_id' => 'my-account',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 3,
                'data' => [
                    'name' => 'Social Network',
                    'menu_id' => 'social-network',
                ],
            ],
            [
                'widget_id' => 'NewsletterWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 4,
                'data' => [],
            ],
            [
                'widget_id' => 'CtaContactWidget',
                'sidebar_id' => 'footer_middle_sidebar',
                'position' => 1,
                'data' => [],
            ],
            [
                'widget_id' => 'DownloadAppsWidget',
                'sidebar_id' => 'footer_middle_sidebar',
                'position' => 2,
                'data' => [
                    'ios_image' => 'general/f-app.jpg',
                    'android_image' => 'general/f-google.jpg',
                ],
            ],
            [
                'widget_id' => 'SiteCopyrightWidget',
                'sidebar_id' => 'footer_bottom_sidebar',
                'position' => 0,
                'data' => [
                    'description' => sprintf('Copyright %s © Ninico. All rights reserved. Powered by Botble.', Carbon::now()->year),
                ],
            ],
            [
                'widget_id' => 'SiteAcceptedPaymentsWidget',
                'sidebar_id' => 'footer_bottom_sidebar',
                'position' => 1,
                'data' => [
                    'image' => 'general/f-brand-icon-01.png',
                    'url' => '/',
                ],
            ],
            [
                'widget_id' => 'BlogSearchWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 1,
                'data' => [
                    'name' => 'Search',
                ],
            ],
            [
                'widget_id' => 'BlogCategoriesWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 2,
                'data' => [
                    'name' => 'Categories',
                ],
            ],
            [
                'widget_id' => 'BlogPostsWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 3,
                'data' => [
                    'name' => 'Recent Posts',
                    'type' => 'recent',
                ],
            ],
            [
                'widget_id' => 'BlogTagsWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 4,
                'data' => [
                    'name' => 'Popular Tag',
                ],
            ],
            [
                'widget_id' => 'SiteFeaturesWidget',
                'sidebar_id' => 'product_detail_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'SiteFeaturesWidget',
                    'title' => 'Site Features',
                    'data' => [
                        1 => [
                            'icon' => 'icons/product-det-1.png',
                            'text' => 'Free Shipping apply to all orders over $100',
                        ],
                        2 => [
                            'icon' => 'icons/product-det-2.png',
                            'text' => 'Guaranteed 100% Organic from natural farms',
                        ],
                        3 => [
                            'icon' => 'icons/product-det-3.png',
                            'text' => '1 Day Returns if you change your mind',
                        ],
                        4 => [
                            'icon' => 'icons/product-det-4.png',
                            'text' => 'Covid-19 Info: We keep delivering.',
                        ],
                    ],
                ],
            ],
        ];

        foreach ($widgets as &$widget) {
            foreach ($widget['data'] as $key => $value) {
                if ($key === 'id') {
                    continue;
                }

                if ($key === 'menu_id' && empty($widget['data'][$key])) {
                    $widget['data'][$key] = Str::slug($widget['data']['name']);

                    continue;
                }

                $widget['data'][$key] = $value;
            }
        }

        $this->createWidgets($widgets);
    }
}
