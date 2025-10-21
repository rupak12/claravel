<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            'Electronics' => [
                ['name' => 'iPhone 17 Pro', 'price' => 1299.99, 'description' => 'Latest Apple iPhone with advanced AI features', 'sku' => 'IPHONE17-PRO'],
                ['name' => 'Samsung Galaxy S26', 'price' => 1199.99, 'description' => 'Premium Android smartphone with 8K display', 'sku' => 'GALAXY-S26'],
                ['name' => 'MacBook Air M4', 'price' => 1499.99, 'description' => 'Ultra-thin laptop with 24-hour battery life', 'sku' => 'MBA-M4-2025'],
                ['name' => 'Sony WH-1000XM6', 'price' => 349.99, 'description' => 'Noise-cancelling wireless headphones', 'sku' => 'SONY-WH1000XM6'],
                ['name' => 'iPad Pro 2025', 'price' => 999.99, 'description' => '12.9-inch tablet with holographic display', 'sku' => 'IPAD-PRO-2025'],
                ['name' => '4K Smart TV 65"', 'price' => 899.99, 'description' => 'OLED smart TV with AI upscaling', 'sku' => 'TV-OLED-65'],
            ],
            'Books & Media' => [
                ['name' => 'The Future of AI', 'price' => 24.99, 'description' => 'Bestselling book about artificial intelligence', 'sku' => 'BOOK-AI-001'],
                ['name' => 'Healthy Living Cookbook', 'price' => 34.99, 'description' => 'Modern recipes for healthy living', 'sku' => 'BOOK-COOK-001'],
                ['name' => 'World History Collection', 'price' => 49.99, 'description' => 'Comprehensive world history series', 'sku' => 'BOOK-HIST-001'],
                ['name' => 'Digital Photography Guide', 'price' => 29.99, 'description' => 'Professional photography techniques', 'sku' => 'BOOK-PHOTO-001'],
                ['name' => 'Business Leadership', 'price' => 39.99, 'description' => 'Modern leadership strategies', 'sku' => 'BOOK-BIZ-001'],
                ['name' => 'Premium Audiobook Bundle', 'price' => 79.99, 'description' => 'Collection of bestselling audiobooks', 'sku' => 'BOOK-AUDIO-001'],
            ],
            'Fashion' => [
                ['name' => 'Eco-Friendly T-Shirt', 'price' => 29.99, 'description' => 'Sustainable cotton blend t-shirt', 'sku' => 'CLOTH-TS-001'],
                ['name' => 'Designer Jeans', 'price' => 89.99, 'description' => 'Premium denim jeans', 'sku' => 'CLOTH-DJ-001'],
                ['name' => 'Running Shoes', 'price' => 129.99, 'description' => 'Professional running shoes', 'sku' => 'SHOE-RUN-001'],
                ['name' => 'Leather Handbag', 'price' => 199.99, 'description' => 'Genuine leather designer handbag', 'sku' => 'BAG-LTH-001'],
                ['name' => 'Smart Watch Band', 'price' => 49.99, 'description' => 'Compatible with all smart watches', 'sku' => 'WATCH-BAND-001'],
                ['name' => 'Winter Jacket', 'price' => 159.99, 'description' => 'Waterproof winter jacket', 'sku' => 'CLOTH-WJ-001'],
            ],
            'Home & Living' => [
                ['name' => 'Smart LED Light Set', 'price' => 79.99, 'description' => 'Wi-Fi enabled LED light system', 'sku' => 'HOME-LED-001'],
                ['name' => 'Coffee Maker', 'price' => 159.99, 'description' => 'Programmable coffee maker', 'sku' => 'HOME-COFFEE-001'],
                ['name' => 'Robot Vacuum', 'price' => 299.99, 'description' => 'AI-powered robot vacuum cleaner', 'sku' => 'HOME-VAC-001'],
                ['name' => 'Memory Foam Mattress', 'price' => 699.99, 'description' => 'Queen size memory foam mattress', 'sku' => 'HOME-BED-001'],
                ['name' => 'Air Purifier', 'price' => 199.99, 'description' => 'HEPA air purifier with IoT features', 'sku' => 'HOME-AIR-001'],
                ['name' => 'Standing Desk', 'price' => 449.99, 'description' => 'Electric adjustable standing desk', 'sku' => 'HOME-DESK-001'],
            ],
            'Sports & Fitness' => [
                ['name' => 'Smart Yoga Mat', 'price' => 89.99, 'description' => 'Yoga mat with pose tracking', 'sku' => 'SPORT-YOGA-001'],
                ['name' => 'Carbon Fiber Bicycle', 'price' => 1999.99, 'description' => 'Professional carbon fiber bicycle', 'sku' => 'SPORT-BIKE-001'],
                ['name' => 'Smart Dumbbell Set', 'price' => 299.99, 'description' => 'Adjustable smart dumbbells', 'sku' => 'SPORT-GYM-001'],
                ['name' => 'Fitness Tracker', 'price' => 149.99, 'description' => 'Advanced fitness tracking watch', 'sku' => 'SPORT-TRACK-001'],
                ['name' => 'Treadmill', 'price' => 999.99, 'description' => 'Foldable smart treadmill', 'sku' => 'SPORT-TREAD-001'],
                ['name' => 'Basketball', 'price' => 29.99, 'description' => 'Official size basketball', 'sku' => 'SPORT-BALL-001'],
            ],
            'Beauty & Health' => [
                ['name' => 'Smart Mirror', 'price' => 199.99, 'description' => 'LED makeup mirror with smart features', 'sku' => 'BEAUTY-MIR-001'],
                ['name' => 'Hair Dryer', 'price' => 249.99, 'description' => 'Professional ionic hair dryer', 'sku' => 'BEAUTY-HAIR-001'],
                ['name' => 'Electric Toothbrush', 'price' => 129.99, 'description' => 'Smart electric toothbrush', 'sku' => 'BEAUTY-BRUSH-001'],
                ['name' => 'Face Cream', 'price' => 49.99, 'description' => 'Anti-aging face cream', 'sku' => 'BEAUTY-CREAM-001'],
                ['name' => 'Massage Gun', 'price' => 179.99, 'description' => 'Percussion massage device', 'sku' => 'BEAUTY-MSG-001'],
                ['name' => 'Vitamins Bundle', 'price' => 39.99, 'description' => 'Monthly vitamin supplement pack', 'sku' => 'BEAUTY-VIT-001'],
            ],
            'Toys & Games' => [
                ['name' => 'VR Headset', 'price' => 399.99, 'description' => 'Virtual reality gaming headset', 'sku' => 'TOY-VR-001'],
                ['name' => 'Drone', 'price' => 299.99, 'description' => 'Camera drone with 4K recording', 'sku' => 'TOY-DRONE-001'],
                ['name' => 'Board Game Collection', 'price' => 89.99, 'description' => 'Classic board games bundle', 'sku' => 'TOY-BOARD-001'],
                ['name' => 'Remote Control Car', 'price' => 79.99, 'description' => 'High-speed RC car', 'sku' => 'TOY-CAR-001'],
                ['name' => 'Building Blocks Set', 'price' => 59.99, 'description' => 'Creative building blocks', 'sku' => 'TOY-BLOCKS-001'],
                ['name' => 'Educational Tablet', 'price' => 149.99, 'description' => 'Kids learning tablet', 'sku' => 'TOY-TAB-001'],
            ],
            'Automotive' => [
                ['name' => 'Car Battery', 'price' => 129.99, 'description' => 'High-performance car battery', 'sku' => 'AUTO-BAT-001'],
                ['name' => 'Dash Cam', 'price' => 149.99, 'description' => '4K dash camera with GPS', 'sku' => 'AUTO-CAM-001'],
                ['name' => 'Car Air Freshener', 'price' => 19.99, 'description' => 'Long-lasting air freshener', 'sku' => 'AUTO-FRESH-001'],
                ['name' => 'Tire Pressure Monitor', 'price' => 89.99, 'description' => 'Wireless tire pressure system', 'sku' => 'AUTO-TIRE-001'],
                ['name' => 'Car Vacuum', 'price' => 59.99, 'description' => 'Portable car vacuum cleaner', 'sku' => 'AUTO-VAC-001'],
                ['name' => 'Jump Starter', 'price' => 99.99, 'description' => 'Portable jump starter power bank', 'sku' => 'AUTO-JUMP-001'],
            ],
            'Garden & Outdoor' => [
                ['name' => 'Smart Sprinkler', 'price' => 159.99, 'description' => 'Wi-Fi enabled sprinkler system', 'sku' => 'GARDEN-SPRK-001'],
                ['name' => 'Patio Furniture Set', 'price' => 699.99, 'description' => 'Weather-resistant furniture set', 'sku' => 'GARDEN-PATIO-001'],
                ['name' => 'Electric Lawn Mower', 'price' => 399.99, 'description' => 'Battery-powered lawn mower', 'sku' => 'GARDEN-MOWER-001'],
                ['name' => 'Garden Tool Set', 'price' => 89.99, 'description' => 'Complete gardening tool kit', 'sku' => 'GARDEN-TOOLS-001'],
                ['name' => 'BBQ Grill', 'price' => 299.99, 'description' => 'Smart temperature control grill', 'sku' => 'GARDEN-BBQ-001'],
                ['name' => 'Solar Garden Lights', 'price' => 49.99, 'description' => 'Solar-powered path lights', 'sku' => 'GARDEN-LIGHT-001'],
            ],
            'Food & Beverages' => [
                ['name' => 'Coffee Bean Set', 'price' => 49.99, 'description' => 'Premium coffee bean collection', 'sku' => 'FOOD-COFFEE-001'],
                ['name' => 'Tea Sampler', 'price' => 39.99, 'description' => 'Luxury tea variety pack', 'sku' => 'FOOD-TEA-001'],
                ['name' => 'Wine Collection', 'price' => 299.99, 'description' => 'Curated wine selection', 'sku' => 'FOOD-WINE-001'],
                ['name' => 'Chocolate Box', 'price' => 34.99, 'description' => 'Gourmet chocolate assortment', 'sku' => 'FOOD-CHOC-001'],
                ['name' => 'Spice Kit', 'price' => 59.99, 'description' => 'Global spice collection', 'sku' => 'FOOD-SPICE-001'],
                ['name' => 'Olive Oil Set', 'price' => 79.99, 'description' => 'Premium olive oil variety pack', 'sku' => 'FOOD-OIL-001'],
            ],
        ];

        foreach ($items as $categoryName => $categoryItems) {
            $category = Category::where('name', $categoryName)->first();
            
            if ($category) {
                foreach ($categoryItems as $itemData) {
                    Item::create([
                        'category_id' => $category->id,
                        'name' => $itemData['name'],
                        'slug' => Str::slug($itemData['name']),
                        'sku' => $itemData['sku'],
                        'description' => $itemData['description'],
                        'price' => $itemData['price'],
                    ]);
                }
            }
        }
    }
}