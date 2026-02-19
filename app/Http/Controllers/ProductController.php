<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Naruto', 'genre' => 'Action/Shounen', 'episodes' => 720],
            ['title' => 'Death Note', 'genre' => 'Psychological Thriller', 'episodes' => 37],
            ['title' => 'Attack on Titan', 'genre' => 'Dark Fantasy', 'episodes' => 89],
            ['title' => 'Spirited Away', 'genre' => 'Fantasy/Adventure', 'episodes' => 1]
        ];

        return view('products', compact('products'));
    }
}