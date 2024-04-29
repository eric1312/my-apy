<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return BookResource::collection(Book::latest()->paginate());
    }

   

   
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    
    public function destroy(Book $book)
    {
        if($book->delete()){
            return response()->json([
                'message' => 'Success'
            ], 204);
        }
        return response()->json([
            'message' => 'Not found'
        ], 404);
    }
}
