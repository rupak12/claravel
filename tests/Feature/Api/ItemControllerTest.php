<?php

namespace Tests\Feature\Api;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Tests\TestCase;

class ItemControllerTest extends TestCase
{
    public function test_unauthenticated_users_cannot_access_items(): void
    {
        $category = Category::factory()->create();

        $response = $this->getJson("/api/categories/{$category->slug}/items");

        $response->assertStatus(401);
    }

    public function test_can_list_items_for_category(): void
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();
        $items = Item::factory(15)->create(['category_id' => $category->id]);

        $response = $this->actingAs($user)
            ->getJson("/api/categories/{$category->slug}/items?per_page=10");

        $response->assertStatus(200)
            ->assertJsonCount(10, 'data')
            ->assertJsonStructure([
                'data',
                'links',
                'meta' => ['current_page', 'last_page', 'per_page', 'total'],
            ]);
    }

    public function test_can_filter_items_by_price_range(): void
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();
        Item::factory()->create([
            'category_id' => $category->id,
            'price' => 50,
        ]);
        Item::factory()->create([
            'category_id' => $category->id,
            'price' => 150,
        ]);

        $response = $this->actingAs($user)
            ->getJson("/api/categories/{$category->slug}/items?min_price=100&max_price=200");

        $response->assertStatus(200)
            ->assertJsonCount(1, 'data');
    }

    public function test_validates_invalid_price_range(): void
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)
            ->getJson("/api/categories/{$category->slug}/items?min_price=200&max_price=100");

        $response->assertStatus(422);
    }
}