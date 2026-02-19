<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogCategoryResource;
use App\Services\BlogCategoryService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BlogCategoryController extends Controller
{
    public function __construct(private readonly BlogCategoryService $service) {}

    public function index(): AnonymousResourceCollection
    {
        $categories = $this->service->getAllCategories();

        return BlogCategoryResource::collection($categories->load('translations'));
    }

    public function show(string $locale, string $slug): BlogCategoryResource
    {
        $category = $this->service->findByLocaleAndSlug($locale, $slug);
        abort_if(! $category, 404);

        return new BlogCategoryResource($category->load('translations'));
    }
}
