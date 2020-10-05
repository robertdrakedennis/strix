<?php

namespace Strix\Http\Controllers\Forums\Category;

use Illuminate\Http\Request;
use Strix\Http\Controllers\Controller;
use Strix\Models\Category\Category;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Category $category)
    {
        return view('pages.forum.category.show', [
            'category' => $category
        ]);
    }
}
