<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        Category::factory()->create(['name' => 'Aquaculture']);
        Category::factory()->create(['name' => 'Pesticide']);
        Category::factory()->create(['name' => 'Fertilize']);

        Category::all()->each(function ($category) {
            Product::factory(12)->create(['category_id' => $category->id])->each(function ($product) {
                Review::factory(3)->create(['product_id' => $product->id]);
            });
        });
        Event::factory(30)->create();


        // Settings
        $settings = [
            // General Site Information
            ['key' => 'site_name', 'value' => 'Agro Private Limited', 'type' => 'string'],
            ['key' => 'site_url', 'value' => 'https://example.com', 'type' => 'string'],
            ['key' => 'site_logo', 'value' => null, 'type' => 'file'], // Path to logo file
            ['key' => 'site_favicon', 'value' => null, 'type' => 'file'], // Path to favicon file
            ['key' => 'site_description', 'value' => 'Your website description', 'type' => 'string'],
            ['key' => 'contact_email', 'value' => 'agrobasebd@gmail.com', 'type' => 'string'],
            ['key' => 'contact_phone_1', 'value' => '+88-9110856', 'type' => 'string'],
            ['key' => 'contact_phone_2', 'value' => '+88-01931375030', 'type' => 'string'],
            ['key' => 'head_office_address', 'value' => 'Plot # 13, Road # 01, Block # Kha, Sector # 06, Mirpur – 10, Dhaka-1216, Bangladesh.', 'type' => 'string'],
            ['key' => 'repack_center_address', 'value' => 'Plot # 18, Sector # 08, New Town, Industrial Area, Jashore-7401, Bangladesh.', 'type' => 'string'],
            // Maintenance Mode
            ['key' => 'maintenance_mode', 'value' => false, 'type' => 'boolean'], // Enable/disable maintenance mode
            ['key' => 'maintenance_message', 'value' => 'We are currently performing maintenance. Please check back later.', 'type' => 'string'],

            // SEO Settings
            ['key' => 'meta_title', 'value' => 'Agro Private Limited - Home', 'type' => 'string'],
            ['key' => 'meta_description', 'value' => 'This is a description for Agro Private Limited', 'type' => 'string'],
            ['key' => 'meta_keywords', 'value' => 'keyword1, keyword2, keyword3', 'type' => 'string'],

            // Social Media Links
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/agroprivate', 'type' => 'string'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/mywebsite', 'type' => 'string'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/mywebsite', 'type' => 'string'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/mywebsite', 'type' => 'string'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com/mywebsite', 'type' => 'string'],

            // Footer Settings
            ['key' => 'copyright_text', 'value' => '© 2024 Agro Private Limited. All Rights Reserved.', 'type' => 'string'],

            // API Keys and Integrations
            ['key' => 'google_analytics_id', 'value' => 'UA-XXXXXXXXX-X', 'type' => 'string'],
            ['key' => 'facebook_pixel_id', 'value' => null, 'type' => 'string'],
            ['key' => 'smtp_host', 'value' => 'smtp.mailtrap.io', 'type' => 'string'],
            ['key' => 'smtp_port', 'value' => '2525', 'type' => 'string'],
            ['key' => 'smtp_username', 'value' => 'your-smtp-username', 'type' => 'string'],
            ['key' => 'smtp_password', 'value' => 'your-smtp-password', 'type' => 'string'],

            // User Authentication Settings
            ['key' => 'allow_registration', 'value' => true, 'type' => 'boolean'],
            ['key' => 'default_user_role', 'value' => 'user', 'type' => 'string'],

            // Performance Settings
            ['key' => 'cache_lifetime', 'value' => 60, 'type' => 'integer'], // In minutes
            ['key' => 'enable_cdn', 'value' => false, 'type' => 'boolean'],

            // Other Settings
            ['key' => 'custom_css', 'value' => null, 'type' => 'text'], // Custom CSS
            ['key' => 'custom_js', 'value' => null, 'type' => 'text'], // Custom JavaScript
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
