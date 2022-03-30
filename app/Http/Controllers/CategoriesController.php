<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($service_slug, $component_slug)
    {
        return view('components.index', compact('service_slug', 'component_slug'));
    }
}
