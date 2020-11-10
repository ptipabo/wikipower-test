<?php

namespace App\Http\Controllers;

use App\Pack;
use App\Page;
use App\BlogPost;
use App\MainMenu;
use App\Operator;
use App\Testimony;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $main_menu = MainMenu::all();
        $operators = Operator::all();
        $packs = Pack::all();
        $testimonies = Testimony::all();
        $blogPosts = BlogPost::all();
        $aboutPages = Page::where('category', '1')->get();
        $supportPages = Page::where('category', '2')->get();

        return view('welcome', compact('main_menu', 'operators', 'packs','testimonies', 'blogPosts', 'aboutPages', 'supportPages'));
    }
}