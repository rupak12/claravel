<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics' => 'Latest electronic devices, gadgets, and accessories',
            'Books & Media' => 'Books, e-books, audiobooks, and digital content',
            'Fashion' => 'Trendy clothing, shoes, and accessories for all',
            'Home & Living' => 'Furniture, decor, and essential home items',
            'Sports & Fitness' => 'Sports equipment and fitness gear',
            'Beauty & Health' => 'Cosmetics, personal care, and wellness products',
            'Toys & Games' => 'Entertainment for all ages',
            'Automotive' => 'Car parts, accessories, and maintenance items',
            'Garden & Outdoor' => 'Plants, gardening tools, and outdoor furniture',
            'Food & Beverages' => 'Gourmet foods, drinks, and specialty items',
        ];

        foreach ($categories as $name => $description) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description,
            ]);
        }
    }
}