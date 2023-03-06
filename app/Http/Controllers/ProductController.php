<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function view;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        $collections = Collection::with('products')->get()->sortBy('title');
        return view('product.index', compact('collections'));
    }
}
