<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $category_menu_one = Category::where('name', 'Specialist Menus')->first();
        $category_menu_two = Category::where('name', 'Carte du Soir')->first();
        $category_menu_three = Category::where('name', 'Carte des Boissons')->first();
        $category_menu_four = Category::where('name', 'Carte des Vins')->first();

        return view('menus.index', compact('category_menu_one', 'category_menu_two', 'category_menu_three', 'category_menu_four'));
    }
}
