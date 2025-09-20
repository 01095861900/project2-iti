<?php

// app/Http/Controllers/Api/RecipeApiController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipeApiController extends Controller
{
    public function index()
    {
        return response()->json(Recipe::all());
    }
}

