<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\CategoryRepositoryEloquent;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryEloquent $category)
    {
        $this->category = $category;
    }

    public function index($id)
    {
        $category = $this->category->find($id);
        $articles = $category->article()
            ->where('status', 1)
            ->orderBy('sort','desc')
            ->orderBy('id', 'desc')
            ->paginate(15);
        return view('default.category_article', compact('articles', 'category'));
    }
}
