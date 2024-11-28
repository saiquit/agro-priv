<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page; // Ensure the Page model exists

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => ['en' => 'Home', 'bn' => 'হোম'],
                'slug' => 'home',
                'seo_meta' => [
                    ['name' => 'title', 'content' => 'Welcome to Home Page', 'keywords' => ['home', 'welcome', 'agriculture']],
                ],
                'settings' => [
                    ['key' => 'boxed', 'type' => 'boolean', 'value' => false],
                    ['key' => 'show_banner', 'type' => 'boolean', 'value' => true],
                ],
                'cover_image' => null,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'About', 'bn' => 'আমাদের সম্পর্কে'],
                'slug' => 'about',
                'seo_meta' => [
                    ['name' => 'title', 'content' => 'Learn More About Us', 'keywords' => ['about', 'mission', 'company']],
                ],
                'settings' => [
                    ['key' => 'boxed', 'type' => 'boolean', 'value' => true],
                    ['key' => 'team_section', 'type' => 'boolean', 'value' => true],
                ],
                'cover_image' => null,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'Contact', 'bn' => 'যোগাযোগ'],
                'slug' => 'contact',
                'seo_meta' => [
                    ['name' => 'title', 'content' => 'Contact Us for Any Inquiries', 'keywords' => ['contact', 'support', 'help']],
                ],
                'settings' => [
                    ['key' => 'boxed', 'type' => 'boolean', 'value' => true],
                    ['key' => 'map_embed', 'type' => 'boolean', 'value' => true],
                    ['key' => 'contact_form', 'type' => 'boolean', 'value' => true],
                ],
                'cover_image' => null,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'Events', 'bn' => 'ইভেন্টস'],
                'slug' => 'events',
                'seo_meta' => [
                    ['name' => 'title', 'content' => 'Stay Updated on Events', 'keywords' => ['events', 'updates', 'calendar']],
                ],
                'settings' => [
                    ['key' => 'boxed', 'type' => 'boolean', 'value' => false],
                    ['key' => 'show_past_events', 'type' => 'boolean', 'value' => false],
                ],
                'cover_image' => null,
                'is_active' => true,
            ],
            [
                'title' => ['en' => 'Products', 'bn' => 'পণ্যসমূহ'],
                'slug' => 'products',
                'seo_meta' => [
                    ['name' => 'title', 'content' => 'Explore Our Products', 'keywords' => ['products', 'shop', 'agriculture']],
                ],
                'settings' => [
                    ['key' => 'boxed', 'type' => 'boolean', 'value' => true],
                    ['key' => 'featured_products', 'type' => 'boolean', 'value' => true],
                    ['key' => 'categories', 'type' => 'boolean', 'value' => true],
                ],
                'cover_image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }

        // Page::factory(5)->create();
    }
}
