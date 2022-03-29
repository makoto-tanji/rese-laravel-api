<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 以下追加
use App\Models\Favorite;

class FavoriteController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        $item = Favorite::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function destroy(Request $request)
    {
        //
        $item = Favorite::where('user_id', $request->userId)->where('shop_id', $request->shopId)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
