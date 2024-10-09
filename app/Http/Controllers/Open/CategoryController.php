<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Index() {
        $categories = Category::paginate(8);
        return view('open.categories.index', compact('categories'));
    }
}
