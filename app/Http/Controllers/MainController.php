<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing(Request $request){
        $categories = new Category();
        $dishes = new Dish();
        if ($request->has('item')){
            $dish = $dishes->find($request->input('item'));
            if (isset($dish)) {
                return view('Pages/landing', ['dishes' => Dish::all(), 'showItem' => true, 'dish' => $dish, 'category' => $categories->find($dish->category_id), 'value' => 1]);
            }
        }
        return view('Pages/landing', ['dishes' => Dish::all()]);
    }
    public function about(){
        return view('Pages/about');
    }
    public function menu(Request $request){
        if ($request->has('item')){
            $categories = new Category();
            $dishes = new Dish();
            $dish = $dishes->find($request->input('item'));
            if (isset($dish)) {
                return view('Pages/menu', array_merge($this->getMenuInfo($request), ['showItem' => true, 'dish' => $dish,
                    'category' => $categories->find($dish->category_id), 'value' => 1]));
            }
        }
        return view('Pages/menu', $this->getMenuInfo($request));
    }
    public function basket(Request $request){
        $categories = new Category();
        $dishes = new Dish();
        if ($request->has('item')){
            $dish = $dishes->find($request->input('item'));
            if (isset($dish)) {
                return view('Pages/basket', array_merge($this->getCookies(json_decode($request->cookie('basket'), true)),
                    ['showItem' => true, 'dish' => $dish,
                        'category' => $categories->find($dish->category_id), 'value' => 1]));
            }
        }
        if ($request->has('ordering')){
            $data = $this->getCookies(json_decode($request->cookie('basket'), true));
            $translate_eng = ['name', 'phone', 'street', 'house', 'flat', 'card number', 'validity', 'owner'];
            return view('Pages/basket', ['eng'=>$translate_eng, "showOrdering"=> $data["total_price"]>0], $data);
        }
        return view('Pages/basket',
            $this->getCookies(json_decode($request->cookie('basket'), true)));
    }
}
