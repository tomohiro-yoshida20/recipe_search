<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Food;
use App\Foodstaff;
use App\Seasoning;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;

class RecipeController extends Controller
{

    // 表示
    public function index(Request $request)
    { 
        // $recipes = Recipe::all()->simplePaginate(1);

        // 材料選択フィールド
        $foodstaffs = Foodstaff::all();
        $seasonings = Seasoning::all();

        // レシピ表示フィールド
        // 材料の選択がない場合全件表示
        $recipes = DB::table('recipes')->simplePaginate(3);
        dd($request->all());

        return view('recipes.index',
         [
            'recipes' => $recipes,
            'foodstaffs' => $foodstaffs,
            'seasonings' => $seasonings,
        ]);
    }
}
