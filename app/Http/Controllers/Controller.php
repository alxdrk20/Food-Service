<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Ingredient;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getMenuInfo($request){
        $categories = Category::all();
        $dishes = Dish::all();
        $selected_category = null;
        $search = $request->input('search');
        if ($search !== null){
            $searched_ingredients = Ingredient::where('name', 'like', '%'.$request->input('search').'%')->get();
            $searched_by_names = Dish::where('name', 'like', '%'.$request->input('search').'%')->get();
            $dishes = new Collection();
            foreach ($searched_ingredients as $ingredient){
                $dishes=$dishes->merge($ingredient->dish);
            }
            foreach ($searched_by_names as $name){
                if (!$dishes->contains($name)) {
                    $dishes->push($name);
                }
            }
        }
        if ($request->input('category') !== null) {
            $selected_category = Category::where('name', $request->input('category'))->first();
            if (isset($selected_category)) {
                $dishes = $selected_category->dish;
            }
        }
        if ($request->input('page') !== null){
            $count = $request->input('page')+1;
        }else{
            $count = 1;
        }
        $showButton = false;
        if(count($dishes->skip(16*($count)))>0) {
            $showButton = true;
        }

        return ['dishes'=>$dishes->take(12*$count), 'categories'=>$categories,
            'selected_category'=>$selected_category, 'search'=>$search, 'count'=>$count, 'showButton'=>$showButton];
    }

    public function setInput($id, $count, $value){
        $value[$id]=$count;
        return $value;
    }

    public function itemToBasket($request){
        $value = json_decode($request->cookie('basket'), TRUE);
        $addition = $request->input('inputItem');
        if($request->has('decrementItem')){
            if ($addition>1) {
                $addition -= 1;
            }
        }
        if($request->has('incrementItem')){
            $addition += 1;
        }
        if($request->has('itemToBasket')){
            if (!isset($value[$request->input('item')])){
                $value[$request->input('item')]=$addition;
            }else{
                $value[$request->input('item')]+=$addition;
            }
        }
        return ['value'=>$value, 'addition'=>$addition];
    }
}
