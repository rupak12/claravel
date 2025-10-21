<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ListItemsRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class ItemController extends Controller
{
    /**
     * List items for a category with filters and pagination
     */
    public function index(ListItemsRequest $request, Category $category): JsonResponse
    {
        $query = $category->items();

        if ($request->input('q')) {
            $query = $query->where('name', 'like', '%' . $request->input('q') . '%');
        }

        if ($request->input('min_price')) {
            $query = $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->input('max_price')) {
            $query = $query->where('price', '<=', $request->input('max_price'));
        }

        if ($sort = $request->input('sort')) {
            $query = match ($sort) {
                'price_asc' => $query->orderBy('price', 'asc'),
                'price_desc' => $query->orderBy('price', 'desc'),
                'name_asc' => $query->orderBy('name', 'asc'),
                'name_desc' => $query->orderBy('name', 'desc'),
                default => $query->orderBy('name', 'asc')
            };
        } else {
            $query = $query->orderBy('name', 'asc');
        }

        $items = $query->paginate($request->input('per_page', 10));

        return response()->json([
            'data' => $items
        ]);
    }
}