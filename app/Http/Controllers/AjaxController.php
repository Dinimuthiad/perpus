<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDataBuku($category_id)
    {
        $books = Book::where('category_id', $category_id)->get();
        return response()->json(['data' => $books, 'message' => 'Fetch Success!!']);
    }
}
