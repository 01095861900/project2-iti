<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index($device_id)
    {
        return response()->json(
            Favorite::with('recipe')->where('device_id', $device_id)->get()
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'device_id' => 'required',
            'recipe_id' => 'required|exists:recipes,id'
        ]);

        $favorite = Favorite::create($data);

        return response()->json($favorite, 201);
    }

    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);
        $favorite->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
