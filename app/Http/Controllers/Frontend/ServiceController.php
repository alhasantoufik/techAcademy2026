<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ServiceController extends Controller
{
    public function servicePage()
    {
        $services = Service::where('is_active', 1)->latest()->get(['id', 'service_title', 'description', 'image']);
        return view('frontend.service', compact('services'));
    }

    public function categoryProducts($category_slug)
    {
        $category = Category::where('category_slug', $category_slug)->firstOrFail();
        $products = $category->products()->where('is_active', 1)->get();

        return view('website.layouts.pages.services.partials.service-category', compact('category', 'products'));
    }
}
